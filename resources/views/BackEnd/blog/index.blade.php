<x-frontend-layout>

    @section('seo')
        <title>Блог | Табло за управление</title>
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
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                            <div class="split-line" style="display: block; text-align: center; position: relative;">
                                <div class="position-relative">
                                    Блог
                                </div>
                            </div>
                        </h1>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <div class="page-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                    @include('components.backend.sidebar')
                </div>

                <div class="col-lg-8">
                    <!-- Top bar start -->
                    <div class="rental-condition-accordion" id="general_information">
                        <div
                            class="section-title faqs-section-title contact-us-form d-flex flex-column flex-lg-row gap-3">
                            <a href="/dashboard/blog/create-view" class="btn-main flex-1">
                                Създайте статия
                            </a>
                            <input placeholder="Потърсете статия по име" class="form-control flex-3" type="text">
                        </div>
                        <hr>
                    </div>
                    <!-- Top bar End -->

                    <!-- Blog Collection Box Start -->
                    <div class="fleets-collection-box">
                        <div class="row">

                            <!-- Display all blogs -->
                            @forelse ($blogs as $blog)
                                <div class="col-lg-4 col-md-6">
                                    <!-- Blog Item Start -->
                                    <div class="perfect-fleet-item fleets-collection-item">
                                        <!-- Image Box Start -->
                                        <div class="image-box">
                                            <img src="/assets/images/blog/{{ $blog->blog_image }}"
                                                alt="{{ $blog->blog_name }}">
                                        </div>
                                        <!-- Image Box End -->

                                        <!-- Blog Content Start -->
                                        <div class="perfect-fleet-content">
                                            <!-- Blog Title Start -->
                                            <div class="perfect-fleet-title">
                                                <h3>Article</h3>
                                                <h2>{{ $blog->blog_name }}</h2>
                                            </div>
                                            <!-- Blog Title End -->

                                            <!-- Blog Body Start -->
                                            <div class="perfect-fleet-body">
                                                <p>
                                                    {{ Str::limit(strip_tags($blog->blog_content), 120, '...') }}
                                                </p>
                                            </div>
                                            <!-- Blog Body End -->

                                            <!-- Blog Footer Start -->
                                            <div class="perfect-fleet-footer">
                                                <div class="perfect-fleet-pricing">
                                                    <h2 style="font-size: 14px;">
                                                        <span>{{ $blog->created_at->format('d.m.Y') }}</span>
                                                    </h2>
                                                </div>
                                                <div class="perfect-fleet-btn"></div>
                                            </div>

                                            <hr>

                                            <div class="d-flex flex-column align-items-center gap-3">
                                                <a class="btn-default"
                                                    href="/dashboard/blog/{{ $blog->blog_slug }}/edit">
                                                    Редакция
                                                </a>
                                                <button class="deleteBlog btn btn-danger text-white rounded-pill w-100">
                                                    Изтрий
                                                </button>
                                                <input value="{{ $blog->blog_slug }}" type="hidden" class="blogSlug">
                                            </div>
                                            <!-- Blog Footer End -->
                                        </div>
                                        <!-- Blog Content End -->
                                    </div>
                                    <!-- Blog Item End -->
                                </div>
                            @empty
                                <div class="col-12 text-center py-5">
                                    <h3>Няма качени статии все още</h3>
                                </div>
                            @endforelse
                            <!-- Display all blogs -->

                        </div>
                    </div>
                    <!-- Blog Collection Box End -->

                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('blog.delete') }}" class="background-modal">
        @csrf
        @method('delete')
        <div class="custom-modal animate__animated animate__fadeInUp">
            <h3 class="text-center text-dark">Сигурни ли сте, че искате да изтриете тази статия?</h3>
            <div class="d-flex gap-3 justify-content-center align-items-center mt-3">

                <button type="submit" class="btn btn-danger rounded-3">Потвърди</button>

                <button onclick="this.closest('form').style.display = 'none'" type="button"
                    class="btn btn-info rounded-3 text-white">
                    Затвори
                </button>

            </div>
        </div>
        <input class="blogDeleteInput" type="hidden" name="blogSlug">
    </form>



    @if (session('successUploadingBlog'))
        <script>
            alert('Успешно прикачихте статия')
        </script>
    @endif



</x-frontend-layout>
