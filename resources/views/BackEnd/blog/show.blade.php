<x-frontend-layout>

    @section('seo')
        <title>Редакция на статия | Табло за управление</title>
    @endsection

    <div class="page-header bg-section parallaxie"
        style="
        background-image: url(/images/page-header-bg.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center 52.0664px;">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="page-header-box">
                        <h1 class="text-anime-style-3">
                            Редакция на статия
                        </h1>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="page-faqs">
        <div class="container">

            <div class="row">

                <!-- Sidebar -->
                {{-- <div class="col-lg-4">
                    @include('components.backend.sidebar')
                </div> --}}

                <!-- Form -->
                <div class="col-lg-12">

                    <div class="contact-us-form">

                        <form action="{{ route('blog.update') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PATCH')

                            <input type="hidden" name="bg_blog_id" value="{{ $bgBlog->id }}">

                            <input type="hidden" name="en_blog_id" value="{{ $enBlog->id }}">

                            <div class="row">

                                <!-- Current Image -->
                                <div class="col-md-12 mb-4">

                                    <label class="form-label">
                                        Текущо изображение
                                    </label>

                                    <div class="mb-3">
                                        <img src="/assets/images/blog/{{ $bgBlog->blog_image }}"
                                            alt="{{ $bgBlog->blog_name }}" class="img-fluid rounded"
                                            style="max-height: 350px;">
                                    </div>

                                </div>

                                <!-- Upload New Image -->
                                <div class="col-md-12 mb-5">

                                    <label class="form-label">
                                        Смени изображението
                                    </label>

                                    <input type="file" class="form-control" name="blog_image">

                                    <small>
                                        Ако не изберете ново изображение,
                                        ще остане текущото.
                                    </small>

                                    @error('blog_image')
                                        <small class="text-danger d-block">
                                            {{ $message }}
                                        </small>
                                    @enderror

                                    @if (session('successUpdatingBlog'))
                                        <div class="alert alert-success">Успешно променихте статиите!</div>
                                    @endif

                                </div>

                                <!-- BG SECTION -->
                                <div class="col-lg-6 mb-4">

                                    <div class="border rounded p-4 h-100">

                                        <h3 class="mb-4">
                                            Българска версия
                                        </h3>

                                        <!-- BG TITLE -->
                                        <div class="form-group mb-4">

                                            <label>
                                                Заглавие
                                            </label>

                                            <input type="text" class="form-control" name="bg_blog_name"
                                                value="{{ old('bg_blog_name', $bgBlog->blog_name) }}"
                                                placeholder="Заглавие на български">

                                            @error('bg_blog_name')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                            @enderror

                                        </div>

                                        <!-- BG CONTENT -->
                                        <div class="form-group">

                                            <label>
                                                Съдържание
                                            </label>

                                            <textarea name="bg_blog_content" id="createBlogBg" class="form-control" rows="12">{{ old('bg_blog_content', $bgBlog->blog_content) }}</textarea>

                                            @error('bg_blog_content')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                            @enderror

                                        </div>

                                    </div>

                                </div>

                                <!-- EN SECTION -->
                                <div class="col-lg-6 mb-4">

                                    <div class="border rounded p-4 h-100">

                                        <h3 class="mb-4">
                                            English Version
                                        </h3>

                                        <!-- EN TITLE -->
                                        <div class="form-group mb-4">

                                            <label>
                                                Title
                                            </label>

                                            <input type="text" class="form-control" name="en_blog_name"
                                                value="{{ old('en_blog_name', $enBlog->blog_name) }}"
                                                placeholder="English article title">

                                            @error('en_blog_name')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                            @enderror

                                        </div>

                                        <!-- EN CONTENT -->
                                        <div class="form-group">

                                            <label>
                                                Content
                                            </label>

                                            <textarea name="en_blog_content" id="createBlogEn" class="form-control" rows="12">{{ old('en_blog_content', $enBlog->blog_content) }}</textarea>

                                            @error('en_blog_content')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                            @enderror

                                        </div>

                                    </div>

                                </div>

                                <!-- Submit -->
                                <div class="col-md-12 mt-4">

                                    <button type="submit" class="btn-default">
                                        Обнови статията
                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>



</x-frontend-layout>
