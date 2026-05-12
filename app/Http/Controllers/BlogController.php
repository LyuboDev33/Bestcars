<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BlogController extends Controller
{


    /** Return the view on the Front end */
    public function home(): View
    {
        $lang = app()->getLocale();
        $blogs = Blog::orderBy('id', 'desc')
            ->where('lang', $lang)
            ->get();

        return view('FrontEnd.blog.index', [
            'blogs' => $blogs
        ]);
    }

    /** Show an article on the front end
     * @param string $article_slug
     * @return View
     */
    public function article($article_slug)
    {
        $lang = app()->getLocale();
        $article = Blog::where('blog_slug', $article_slug)
            ->where('lang', $lang)
            ->first();

        if (!$article) {
            return view('404');
        }

        return view('FrontEnd.blog.show', [
            'article' => $article
        ]);
    }

    /** Return the Dashboard Index view */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')
            ->get()
            ->unique('blog_slug')
            ->values();

        return view('BackEnd.blog.index', [
            'blogs' => $blogs,
        ]);
    }

    /**
     * Show a single article in the Dashboard
     *
     * @param string $slug
     */
    public function show($slug)
    {
        $blogs = Blog::where('blog_slug', $slug)->get();

        if ($blogs->isEmpty()) {
            return view('notFoundBlog');
        }

        $bgBlog = $blogs->where('lang', 'bg')->first();
        $enBlog = $blogs->where('lang', 'en')->first();

        return view("BackEnd.blog.show", [
            'bgBlog' => $bgBlog,
            'enBlog' => $enBlog,
        ]);
    }

    /** Get the Create Article view */
    public function createBlogView()
    {
        return view('BackEnd.blog.create');
    }


    /**
     * Create an article
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function create(Request $request): RedirectResponse
    {
        $validated = $request->validate([

            'blog_image' => [
                'required',
                'image',
                'mimes:jpeg,jpg,png',
                'max:2048'
            ],

            // BG
            'bg_blog_name' => [
                'required',
                'string',
                'max:255'
            ],

            'bg_blog_content' => [
                'required',
                'string'
            ],

            // EN
            'en_blog_name' => [
                'required',
                'string',
                'max:255'
            ],

            'en_blog_content' => [
                'required',
                'string'
            ],

        ], [

            'blog_image.image' => 'Файлът трябва да е изображение',
            'blog_image.mimes' => 'Позволени формати: jpg, jpeg, png',
            'blog_image.max'   => 'Максимален размер: 2MB',

        ]);


        $slug = Str::slug($validated['en_blog_name']);
        $existingBlog = Blog::where('blog_slug', $slug)->exists();

        if ($existingBlog) {
            return back()
                ->withErrors([
                    'bg_blog_name' => 'Статия със същия slug вече съществува.'
                ])
                ->withInput();
        }


        $file = $request->file('blog_image');
        $fileName = time() . '_' .
            preg_replace('/\s+/', '', $file->getClientOriginalName());
        $file->move(public_path('/assets/images/blog'), $fileName);

        /**
         * Insert BG version
         */
        Blog::create([
            'lang' => 'bg',
            'blog_name' => $validated['bg_blog_name'],
            'blog_slug' => $slug,
            'blog_content' => $validated['bg_blog_content'],
            'blog_image' => $fileName,
            'author_id' => Auth::id(),

        ]);

        /**
         * Insert EN version
         */
        Blog::create([
            'lang' => 'en',
            'blog_name' => $validated['en_blog_name'],
            'blog_slug' => $slug,
            'blog_content' => $validated['en_blog_content'],
            'blog_image' => $fileName,
            'author_id' => Auth::id(),
        ]);

        return redirect()
            ->route('blog.index')
            ->with(
                'successUploadingBlog',
                'Успешно качихте статията'
            );
    }

    /**
     * Update an article
     *
     * @param Request $request
     * @return RedirectResponse
     */
    /**
     * Update an article
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([

            // BG
            'bg_blog_name' => [
                'required',
                'string',
                'max:255'
            ],

            'bg_blog_content' => [
                'required',
                'string'
            ],

            // EN
            'en_blog_name' => [
                'required',
                'string',
                'max:255'
            ],

            'en_blog_content' => [
                'required',
                'string'
            ],

            // Image
            'blog_image' => [
                'nullable',
                'image',
                'mimes:jpeg,jpg,png',
                'max:2048'
            ],

        ], [

            'blog_image.image' => 'Файлът трябва да е изображение',
            'blog_image.mimes' => 'Файлът трябва да е jpg, jpeg или png',
            'blog_image.max'   => 'Изображението не може да надвишава 2MB!',

        ]);

        /**
         * Find blogs
         */
        $bgBlog = Blog::find($request->bg_blog_id);

        $enBlog = Blog::find($request->en_blog_id);

        if (!$bgBlog || !$enBlog) {

            return back()->with(
                'errorUpdatingBlog',
                'Статията не съществува!'
            );
        }

        /**
         * Generate shared slug
         */
        $newSlug = Str::slug($validated['en_blog_name']);

        /**
         * Check if another article already uses this slug
         */
        $slugExists = Blog::where('blog_slug', $newSlug)
            ->whereNotIn('id', [
                $bgBlog->id,
                $enBlog->id
            ])
            ->exists();

        if ($slugExists) {

            return back()->with(
                'errorUpdatingBlog',
                'Вече съществува статия със същия slug.'
            );
        }


        $imageName = $bgBlog->blog_image;

        if ($request->hasFile('blog_image')) {
            $file = $request->file('blog_image');
            $imageName = time() . '_' . preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path('/assets/images/blog'), $imageName);
        }

        /**
         * Update BG version
         */
        $bgBlog->update([
            'blog_name' => $validated['bg_blog_name'],
            'blog_slug' => $newSlug,
            'blog_content' => $validated['bg_blog_content'],
            'blog_image' => $imageName,
        ]);

        /**
         * Update EN version
         */
        $enBlog->update([
            'blog_name' => $validated['en_blog_name'],
            'blog_slug' => $newSlug,
            'blog_content' => $validated['en_blog_content'],
            'blog_image' => $imageName,
        ]);

        return redirect(
            "/dashboard/blog/{$newSlug}/edit"
        )->with(
            'successUpdatingBlog',
            'Статията беше обновена успешно!'
        );
    }

    /**
     * Delete an article
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function delete(Request $request): RedirectResponse
    {
        $blogs = Blog::where('blog_slug', $request->blogSlug)->get();

        if ($blogs->isEmpty()) {
            return redirect()
                ->route('blog.index')
                ->with(
                    'errorDeletingBlog',
                    'Упс... тази статия не съществува!'
                );
        }

        /**
         * Delete all language versions
         */
        foreach ($blogs as $blog) {
            $blog->delete();
        }

        return redirect()
            ->route('blog.index')
            ->with(
                'successDeletingBlog',
                'Успешно изтрихте статията!'
            );
    }
}
