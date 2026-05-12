<x-frontend-layout>

    @section('seo')
        <title>
            {{ __('welcome.article') }} | {{ $article->blog_name }}
        </title>
    @endsection


    <!-- Page Single Post Start -->
    <div class="page-single-post">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <!-- Post Featured Image Start -->
                    <div class="post-image">

                        <figure class="image-anime reveal">

                            <img src="/assets/images/blog/{{ $article->blog_image }}"
                                 alt="{{ $article->blog_name }}">

                        </figure>

                    </div>
                    <!-- Post Featured Image End -->


                    <!-- Post Single Content Start -->
                    <div class="post-content">

                        <!-- Post Meta Start -->
                        <div class="post-meta mb-4">

                            <ul>
                                <li>
                                    <i class="fa-solid fa-calendar-days"></i>

                                    {{ $article->created_at->format('d.m.Y') }}
                                </li>
                            </ul>

                        </div>
                        <!-- Post Meta End -->


                        <!-- Article Title Start -->
                        <div class="section-title">

                            <h1 class="text-anime-style-3">
                                {{ $article->blog_name }}
                            </h1>

                        </div>
                        <!-- Article Title End -->


                        <!-- Post Entry Start -->
                        <div class="post-entry">

                            {!! $article->blog_content !!}

                        </div>
                        <!-- Post Entry End -->

                    </div>
                    <!-- Post Single Content End -->

                </div>

            </div>

        </div>

    </div>
    <!-- Page Single Post End -->

</x-frontend-layout>
