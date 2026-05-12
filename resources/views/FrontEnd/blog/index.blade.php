<x-frontend-layout>

      @section('seo')
        <title>Блог</title>
    @endsection


    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">

            <div class="row">

                @forelse ($blogs as $blog)

                    <div class="col-lg-4 col-md-6">

                        <!-- Blog Item Start -->
                        <div class="post-item wow fadeInUp">

                            <!-- Post Featured Image Start -->
                            <div class="post-featured-image" data-cursor-text="View">

                                <figure>
                                    <a href="/article/{{ $blog->blog_slug }}" class="image-anime">

                                        <img src="/assets/images/blog/{{ $blog->blog_image }}"
                                             alt="{{ $blog->blog_name }}">

                                    </a>
                                </figure>

                            </div>
                            <!-- Post Featured Image End -->


                            <!-- Post Item Body Start -->
                            <div class="post-item-body">

                                <!-- Post Meta Start -->
                                <div class="post-meta">

                                    <ul>
                                        <li>
                                            <a href="#">

                                                <i class="fa-solid fa-calendar-days"></i>

                                                {{ $blog->created_at->format('d.m.Y') }}

                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- Post Meta End -->


                                <!-- Post Item Content Start -->
                                <div class="post-item-content">

                                    <h2>
                                        <a href="/article/{{ $blog->blog_slug }}">
                                            {{ $blog->blog_name }}
                                        </a>
                                    </h2>

                                    <p>
                                        {{ Str::limit(strip_tags($blog->blog_content), 120, '...') }}
                                    </p>

                                </div>
                                <!-- Post Item Content End -->


                                <!-- Post Item Footer Start -->
                                <div class="post-item-btn">

                                    <a href="/article/{{ $blog->blog_slug }}"
                                       class="read-story-btn">

                                        {{ __('blog.read_more') }}

                                    </a>

                                </div>
                                <!-- Post Item Footer End -->

                            </div>
                            <!-- Post Item Body End -->

                        </div>
                        <!-- Blog Item End -->

                    </div>

                @empty

                    <div class="col-12 text-center">

                        <h3>
                            {{ __('welcome.no_articles') }}
                        </h3>

                    </div>

                @endforelse

            </div>

        </div>
    </div>
    <!-- Page Blog End -->

</x-frontend-layout>
