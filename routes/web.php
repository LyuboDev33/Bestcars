<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;



Route::fallback(function () {
    return view('404');
});

Route::get('/change-language/{lang}', function ($lang) {

    $available = ['en', 'bg'];

    if (!in_array($lang, $available)) {
        $lang = 'bg';
    }
    Session::put('locale', $lang);

    // set for текущата заявка
    App::setLocale($lang);

    return redirect()->back();
})->name('change-language');

Route::get('/', [FrontEndController::class, 'home']);
Route::get('/about', [FrontEndController::class, 'about']);
Route::get('/services', [FrontEndController::class, 'service']);
Route::get('/legal/condtions', [FrontEndController::class, 'conditions']);
Route::get('/legal/terms', [FrontEndController::class, 'terms']);


/** Contact routes */
Route::get('/contact', [FrontEndController::class, 'contact']);
Route::post('/contact/form/send', [FrontEndController::class, 'sendContactForm'])->name('contact.form.send');


Route::get('/cars', [CarsController::class, 'home']);
Route::get('/car/{car_slug}', [CarsController::class, 'show']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/article/{article_slug}', [BlogController::class, 'article']);




Route::middleware('auth')->group(function () {


    Route::prefix('dashboard')->group(function () {

        Route::prefix('cars')->group(function () {
            Route::get('/list', [CarsController::class, 'dashboard'])->name('dashboard');
            Route::get('/list/{slug}/edit', [CarsController::class, 'edit']);
            Route::get('/create', [CarsController::class, 'createCarView'])->name('cars.create.view');
            Route::post('/create', [CarsController::class, 'create'])->name('car.create');
            Route::patch('/update', [CarsController::class, 'update'])->name('car.update');
            Route::delete('/delete', [CarsController::class, 'delete'])->name('car.delete');
        });

        Route::prefix('blog')->group(function () {
            /** Blog Routing */
            Route::get('/list', [BlogController::class, 'index'])->name('blog.index');
            Route::get('/{slug}/edit', [BlogController::class, 'show']);
            Route::get('/create-view', [BlogController::class, 'createBlogView'])->name('blog.create-view');

            Route::post('/create', [BlogController::class, 'create'])->name('blog.create');
            Route::patch('/update', [BlogController::class, 'update'])->name('blog.update');
            Route::delete('/delete', [BlogController::class, 'delete'])->name('blog.delete');
        });
    });



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
