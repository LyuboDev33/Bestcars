<x-frontend-layout>

    @section('seo')
        <title>{{ __('about.seo_title') }}</title>
    @endsection

    <!-- About Us Section Start -->
    <section class="about-us">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <div class="vision-mission-box">
                        <div class="row align-items-center flex-lg-row-reverse">

                            <!-- Text Content -->
                            <div class="col-lg-6">
                                <div class="vision-mission-content">
                                    <div class="section-title">
                                        <h3>{{ __('about.about_subtitle') }}</h3>

                                        <h2 class="text-anime-style-3">
                                            {{ __('about.about_title') }}
                                        </h2>

                                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                                            {{ __('about.about_paragraph_1') }}
                                        </p>

                                        <p class="wow fadeInUp" data-wow-delay="0.75s">
                                            {{ __('about.about_paragraph_2') }}
                                        </p>

                                        <!-- Vision Mission List Start -->
                                        <div class="vision-mission-list wow fadeInUp mt-3" data-wow-delay="0.5s">
                                            <ul>
                                                <li>{{ __('about.about_list_1') }}</li>
                                                <li>{{ __('about.about_list_2') }}</li>
                                                <li>{{ __('about.about_list_3') }}</li>
                                                <li>{{ __('about.about_list_4') }}</li>
                                            </ul>
                                        </div>

                                        <p class="wow fadeInUp" data-wow-delay="1.25s">
                                            {{ __('about.about_paragraph_3') }}
                                        </p>
                                    </div>

                                    <div class="about-content-footer mt-4">
                                        <a href="/contact" class="btn-default">
                                            {{ __('about.btn_contact') }}
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-lg-6 align-self-start">
                                <div class="vision-image">
                                    <figure class="image-anime reveal">
                                        <img src="/images/about-3.1.jpg" alt="BestRentCars">
                                    </figure>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About Us Section End -->


    <hr>


    <!-- Vision Section Start -->
    <section class="vision-mission">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6 align-self-start">
                    <!-- Vision Content Start -->
                    <div class="vision-mission-content">

                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('about.vision_subtitle') }}</h3>
                            <h2 class="text-anime-style-3">
                                {{ __('about.vision_title') }}
                            </h2>

                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                {{ __('about.vision_paragraph_1') }}
                            </p>

                            <p class="wow fadeInUp" data-wow-delay="0.35s">
                                {{ __('about.vision_paragraph_2') }}
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Vision List Start -->
                        <div class="vision-mission-list wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>{{ __('about.vision_list_1') }}</li>
                                <li>{{ __('about.vision_list_2') }}</li>
                                <li>{{ __('about.vision_list_3') }}</li>
                            </ul>
                        </div>
                        <!-- Vision List End -->

                    </div>
                    <!-- Vision Content End -->
                </div>

                <div class="col-lg-6 align-self-start">
                    <!-- Vision Image Start -->
                    <div class="vision-image">
                        <figure class="image-anime reveal">
                            <img src="/images/our-vision-img.1.jpg" alt="Bestcars">
                        </figure>
                    </div>
                    <!-- Vision Image End -->
                </div>

            </div>
        </div>
    </section>
    <!-- Vision Section End -->



    <!-- Testimonials Start -->
    <section class="our-testimonial">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('welcome.testimonials_subtitle') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            {{ __('welcome.testimonials_title') }}
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Slider -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="{{ __('welcome.testimonials_drag') }}">

                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>{{ __('welcome.testimonial_1_text') }}</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>{{ __('welcome.testimonial_1_author') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>{{ __('welcome.testimonial_2_text') }}</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>{{ __('welcome.testimonial_2_author') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>{{ __('welcome.testimonial_3_text') }}</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>{{ __('welcome.testimonial_3_author') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 4 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>{{ __('welcome.testimonial_4_text') }}</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-content">
                                                <h3>{{ __('welcome.testimonial_4_author') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Navigation -->
                            <div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div>

                        </div>
                    </div>
                    <!-- Slider End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials End -->

</x-frontend-layout>
