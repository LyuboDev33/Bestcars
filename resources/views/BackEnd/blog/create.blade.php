<x-frontend-layout>

    @section('seo')
        <title>Създаване на статия | Табло за управление</title>
    @endsection

    <div class="contact-us-form container pb-5 mt-3">

        <form action="{{ route('blog.create') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">


                <div class="d-flex gap-3 align-items-center flex-column">
                    <a class="btn-default col-lg-3" href="/dashboard/blog/list">Назад към всички статии</a>
                    <hr class="w-100">
                    <!-- Shared Image -->
                    <div class="form-group  mb-5">

                        <label>Главна снимка на статията</label>

                        <input type="file"
                        required
                        name="blog_image"
                        class="form-control w-fit"
                        accept=".jpg, .png, .jpeg">

                        <small>
                            Допустими формати: jpg, jpeg, png.
                            Максимален размер: 2MB.
                        </small>

                        @error('blog_image')
                            <small class="text-danger d-block">
                                {{ $message }}
                            </small>
                        @enderror

                    </div>
                </div>

                <!-- BG SECTION -->
                <div class="col-lg-6">

                    <div class="p-4 border rounded h-100">

                        <h3 class="mb-4">
                            Българска версия
                        </h3>

                        <!-- BG TITLE -->
                        <div class="form-group mb-4">

                            <label>Заглавие</label>

                            <input type="text" value="{{ old('bg_blog_name') }}" name="bg_blog_name"
                                class="form-control" placeholder="Заглавие на български">

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

                            <textarea class="mt-2 form-control" name="bg_blog_content" id="createBlogBg" rows="12"
                                placeholder="Съдържание на български">{{ old('bg_blog_content') }}</textarea>

                            @error('bg_blog_content')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>

                    </div>

                </div>

                <!-- EN SECTION -->
                <div class="col-lg-6">

                    <div class="p-4 border rounded h-100">

                        <h3 class="mb-4">
                            Версия на Английски
                        </h3>

                        <!-- EN TITLE -->
                        <div class="form-group mb-4">

                            <label>Заглавие</label>

                            <input type="text" value="{{ old('en_blog_name') }}" name="en_blog_name"
                                class="form-control" placeholder="English article title">

                            @error('en_blog_name')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>

                        <!-- EN CONTENT -->
                        <div class="form-group">

                            <label>
                                Съдържание
                            </label>

                            <textarea class="mt-2 form-control" name="en_blog_content" id="createBlogEn" rows="12"
                                placeholder="English article content">{{ old('en_blog_content') }}</textarea>

                            @error('en_blog_content')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>

                    </div>

                </div>

                <!-- Submit -->
                <div class="col-lg-12 mt-5">

                    <div class="contact-form-btn">

                        <button type="submit" class="btn-default">
                            Добави статия
                        </button>

                    </div>

                </div>

            </div>

        </form>

    </div>

</x-frontend-layout>
