<x-frontend-layout>

    @section('seo')
        <title>{{ __('welcome.seo_title') }}</title>
    @endsection

    <!-- Hero Section Start -->
    <section class="hero">
        <div class="hero-section bg-section parallaxie">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <!-- Hero Content Start -->
                        <div class="hero-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">{{ __('welcome.hero_welcome') }}</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('welcome.hero_heading') }}</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.25s">{{ __('welcome.hero_description') }}</p>
                            </div>

                            <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                                <a href="/cars" class="btn-default">{{ __('welcome.hero_btn_book') }}</a>
                                <a href="/about" class="btn-default btn-highlighted">{{ __('welcome.hero_btn_learn') }}</a>
                            </div>
                        </div>
                        <!-- Hero Content End -->
                    </div>
                </div>

                <div class="rent-details">
                    <div class="container">
                        <!-- Filter Form Start -->
                        <div class="rent-details-box">
                            <div class="rent-details-form">

                                <!-- Вид Кола -->
                                {{-- <div class="rent-details-item">
                                    <div class="icon-box">
                                        <img src="/images/icon-rent-details-1.svg" alt="Icon">
                                    </div>
                                    <div class="rent-details-content">
                                        <h3>{{ __('welcome.filter_car_type') }}</h3>
                                        <select class="rent-details-form form-select">
                                            <option value="" disabled selected>{{ __('welcome.filter_car_type_select') }}</option>
                                            <option value="sport_car">{{ __('welcome.filter_car_type_sport') }}</option>
                                            <option value="convertible_car">{{ __('welcome.filter_car_type_convertible') }}</option>
                                        </select>
                                    </div>
                                </div> --}}

                                <!-- Място на заминаване -->
                                <div class="rent-details-item">
                                    <div class="icon-box">
                                        <img src="/images/icon-rent-details-2.svg" alt="Icon">
                                    </div>
                                    <div class="rent-details-content">
                                        <h3>{{ __('welcome.filter_pickup_location') }}</h3>
                                        <p>{{ __('welcome.filter_pickup_location_value') }}</p>
                                    </div>
                                </div>

                                <!-- Дата на заминаване -->
                                <div class="rent-details-item">
                                    <div class="icon-box">
                                        <img src="/images/icon-rent-details-3.svg" alt="Icon">
                                    </div>
                                    <div class="rent-details-content">
                                        <h3>{{ __('welcome.filter_pickup_date') }}</h3>
                                        <p>{{ __('welcome.filter_pickup_date_value') }}</p>
                                    </div>
                                </div>

                                <!-- Място на връщане -->
                                <div class="rent-details-item">
                                    <div class="icon-box">
                                        <img src="/images/icon-rent-details-4.svg" alt="Icon">
                                    </div>
                                    <div class="rent-details-content">
                                        <h3>{{ __('welcome.filter_return_location') }}</h3>
                                        <p>{{ __('welcome.filter_return_location_value') }}</p>
                                    </div>
                                </div>

                                <!-- Дата на връщане -->
                                <div class="rent-details-item">
                                    <div class="icon-box">
                                        <img src="/images/icon-rent-details-5.svg" alt="Icon">
                                    </div>
                                    <div class="rent-details-content">
                                        <h3>{{ __('welcome.filter_return_date') }}</h3>
                                        <p>{{ __('welcome.filter_return_date_value') }}</p>
                                    </div>
                                </div>

                                <!-- Search -->
                                <div class="rent-details-item rent-details-search">
                                    <a href="/cars">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!-- Filter Form End -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Perfect Fleets Section Start -->
    <section class="perfect-fleet bg-section">
        <div class="container-fluid">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('welcome.fleet_subtitle') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            {{ __('welcome.fleet_title') }}
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="car-details-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="{{ __('welcome.fleet_drag') }}">
                                <!-- Testimonial Slide Start -->
                                @foreach ($cars as $car)
                                    <div class="swiper-slide">
                                        <!-- Perfect Fleets Item Start -->
                                        <div class="perfect-fleet-item">

                                            <!-- Image Box -->
                                            <div class="image-box">
                                                <img src="/images/cars/{{ $car->main_image }}"
                                                    alt="{{ $car->car_name }}">
                                            </div>

                                            <!-- Content -->
                                            <div class="perfect-fleet-content">

                                                <!-- Title -->
                                                <div class="perfect-fleet-title">
                                                    <h3>{{ $car->vehicle_type }}</h3>
                                                    <h2>{{ $car->car_name }}</h2>
                                                </div>

                                                <!-- Specs -->
                                                <div class="perfect-fleet-body">
                                                    <ul>
                                                        <li>
                                                            <img src="/images/icon-fleet-list-1.svg" alt="Icon">
                                                            {{ $car->max_passengers }}
                                                        </li>
                                                        <li>
                                                            <img src="/images/icon-fleet-list-2.svg" alt="Icon">
                                                            {{ $car->doors }}
                                                        </li>
                                                        <li>
                                                            <img src="/images/icon-fleet-list-3.svg" alt="Icon">
                                                            {{ $car->luggage }}
                                                        </li>
                                                        <li>
                                                            <img src="/images/icon-fleet-list-4.svg" alt="Icon">
                                                            {{ $car->fuel_type }}
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- Footer -->
                                                <div class="perfect-fleet-footer">

                                                    <!-- Price -->
                                                    <div class="perfect-fleet-pricing">
                                                        <h2>{{ $car->price_per_day }}<span> {{ __('welcome.fleet_price_unit') }}</span></h2>
                                                    </div>

                                                    <!-- Button -->
                                                    <div class="perfect-fleet-btn">
                                                        <a href="/car/{{ $car->car_slug }}"
                                                            class="section-icon-btn">
                                                            <img src="/images/arrow-white.svg" alt="Icon">
                                                        </a>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- Perfect Fleets Item End -->
                                    </div>
                                @endforeach
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="car-details-btn">
                                <div class="car-button-prev"></div>
                                <div class="car-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Perfect Fleets Section End -->

    <!-- Luxury Collection Section Start -->
    <section class="luxury-collection">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <div class="luxury-collection-box">
                        <!-- Luxury Collection Item Start -->
                        <div class="luxury-collection-item wow fadeInUp">
                            <div class="luxury-collection-image" data-cursor-text="{{ __('welcome.luxury_view') }}">
                                <a href="/cars">
                                    <figure>
                                        <img src="/images/cars/limozina.webp" alt="{{ __('welcome.luxury_limousine') }}">
                                    </figure>
                                </a>
                            </div>
                            <div class="luxury-collection-title">
                                <h2>{{ __('welcome.luxury_limousine') }}</h2>
                            </div>
                            <div class="luxury-collection-btn">
                                <a href="/cars" class="section-icon-btn"><img src="/images/arrow-white.svg" alt="Icon"></a>
                            </div>
                        </div>
                        <!-- Luxury Collection Item End -->

                        <!-- Luxury Collection Item Start -->
                        <div class="luxury-collection-item wow fadeInUp" data-wow-delay="0.25s">
                            <div class="luxury-collection-image" data-cursor-text="{{ __('welcome.luxury_view') }}">
                                <a href="/cars">
                                    <figure>
                                        <img src="/images/cars/lek-avtomobil.png" alt="BMW">
                                    </figure>
                                </a>
                            </div>
                            <div class="luxury-collection-title">
                                <h2>{{ __('welcome.luxury_car') }}</h2>
                            </div>
                            <div class="luxury-collection-btn">
                                <a href="/cars" class="section-icon-btn"><img src="/images/arrow-white.svg" alt="Icon"></a>
                            </div>
                        </div>
                        <!-- Luxury Collection Item End -->

                        <!-- Luxury Collection Item Start -->
                        <div class="luxury-collection-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="luxury-collection-image" data-cursor-text="{{ __('welcome.luxury_view') }}">
                                <a href="/cars">
                                    <figure>
                                        <img src="/images/cars/suv.png" alt="SUV">
                                    </figure>
                                </a>
                            </div>
                            <div class="luxury-collection-title">
                                <h2>{{ __('welcome.luxury_suv') }}</h2>
                            </div>
                            <div class="luxury-collection-btn">
                                <a href="/cars" class="section-icon-btn"><img src="/images/arrow-white.svg" alt="Icon"></a>
                            </div>
                        </div>
                        <!-- Luxury Collection Item End -->

                        <!-- Luxury Collection Item Start -->
                        <div class="luxury-collection-item wow fadeInUp" data-wow-delay="0.75s">
                            <div class="luxury-collection-image" data-cursor-text="{{ __('welcome.luxury_view') }}">
                                <a href="/cars">
                                    <figure>
                                        <img src="/images/cars/mercedes2.png" alt="Mercedes">
                                    </figure>
                                </a>
                            </div>
                            <div class="luxury-collection-title">
                                <h2>{{ __('welcome.luxury_van') }}</h2>
                            </div>
                            <div class="luxury-collection-btn">
                                <a href="/cars" class="section-icon-btn"><img src="/images/arrow-white.svg" alt="Icon"></a>
                            </div>
                        </div>
                        <!-- Luxury Collection Item End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Luxury Collection Section End -->

    <!-- About Us Section Start -->
    <section class="about-us">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 align-self-start">
                    <div class="vision-image">
                        <figure class="image-anime reveal">
                            <img src="/images/about-img-1.jpg" alt="About Us" class="img-fluid">
                        </figure>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">

                        <div class="section-title">
                            <h3>{{ __('welcome.about_subtitle') }}</h3>
                            <h2>{{ __('welcome.about_title') }}</h2>
                            <p>{{ __('welcome.about_description') }}</p>
                        </div>

                        <div class="about-content-body">

                            <div class="about-trusted-booking">
                                <div class="icon-box">
                                    <img src="/images/icon-about-trusted-1.svg" alt="Icon">
                                </div>
                                <div class="trusted-booking-content">
                                    <h3>{{ __('welcome.about_trusted_1_title') }}</h3>
                                    <p>{{ __('welcome.about_trusted_1_text') }}</p>
                                </div>
                            </div>

                            <div class="about-trusted-booking">
                                <div class="icon-box">
                                    <img src="/images/icon-about-trusted-2.svg" alt="Icon">
                                </div>
                                <div class="trusted-booking-content">
                                    <h3>{{ __('welcome.about_trusted_2_title') }}</h3>
                                    <p>{{ __('welcome.about_trusted_2_text') }}</p>
                                </div>
                            </div>

                        </div>

                        <div class="about-content-footer mt-4">
                            <a href="/about" class="btn-default">{{ __('welcome.about_btn_learn') }}</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About Us Section End -->


    @include('components.frontend.our-services')

    <!-- Exclusive Partners Section Start -->
    <section class="exclusive-partners bg-section mt-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6 col-12">

                    <!-- DESKTOP -->
                    <div class="d-none d-lg-block">

                        <h3 class="mb-3">
                            {{ __('welcome.partners_title') }}
                        </h3>

                        <p>{{ __('welcome.partners_paragraph_1') }}</p>

                        <p>{{ __('welcome.partners_paragraph_2') }}</p>

                        <p>
                            <strong>{{ __('welcome.partners_premium_label') }}</strong> {{ __('welcome.partners_premium_text') }}
                        </p>

                    </div>

                </div>

                <!-- RIGHT VIDEO -->
                <div class="col-lg-6 col-12">
                    <video
                        width="100%"
                        controls
                        preload="none"
                        poster="/images/cars-22.png"
                        class="w-100"
                    >
                        <source src="/Best-Cars-web.mp4" type="video/mp4" />
                        {{ __('welcome.partners_video_fallback') }}
                    </video>
                </div>

            </div>
        </div>
    </section>
    <!-- Exclusive Partners Section End -->


    <!-- How It Work Section Start -->
    <section class="how-it-work">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="how-work-content">

                        <div class="section-title">
                            <h3>{{ __('welcome.how_subtitle') }}</h3>
                            <h2>{{ __('welcome.how_title') }}</h2>
                            <p>{{ __('welcome.how_description') }}</p>
                        </div>

                        <div class="how-work-accordion" id="workaccordion">

                            <!-- Step 1 -->
                            <div class="accordion-item">
                                <div class="icon-box">
                                    <img src="/images/icon-how-it-work-1.svg" alt="Icon">
                                </div>
                                <h2 class="accordion-header" id="workheading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#workcollapse1" aria-expanded="true"
                                        aria-controls="workcollapse1">
                                        {{ __('welcome.how_step_1_title') }}
                                    </button>
                                </h2>
                                <div id="workcollapse1" class="accordion-collapse collapse show"
                                    aria-labelledby="workheading1" data-bs-parent="#workaccordion">
                                    <div class="accordion-body">
                                        <p>{{ __('welcome.how_step_1_text') }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="accordion-item">
                                <div class="icon-box">
                                    <img src="/images/icon-how-it-work-2.svg" alt="Icon">
                                </div>
                                <h2 class="accordion-header" id="workheading2">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#workcollapse2"
                                        aria-expanded="false" aria-controls="workcollapse2">
                                        {{ __('welcome.how_step_2_title') }}
                                    </button>
                                </h2>
                                <div id="workcollapse2" class="accordion-collapse collapse"
                                    aria-labelledby="workheading2" data-bs-parent="#workaccordion">
                                    <div class="accordion-body">
                                        <p>{{ __('welcome.how_step_2_text') }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="accordion-item">
                                <div class="icon-box">
                                    <img src="/images/icon-how-it-work-3.svg" alt="Icon">
                                </div>
                                <h2 class="accordion-header" id="workheading3">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#workcollapse3"
                                        aria-expanded="false" aria-controls="workcollapse3">
                                        {{ __('welcome.how_step_3_title') }}
                                    </button>
                                </h2>
                                <div id="workcollapse3" class="accordion-collapse collapse"
                                    aria-labelledby="workheading3" data-bs-parent="#workaccordion">
                                    <div class="accordion-body">
                                        <p>{{ __('welcome.how_step_3_text') }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="vision-image">

                        <figure class="image-anime reveal">
                            <img src="/images/cars2.png" alt="How it works" class="img-fluid">
                        </figure>

                        <div class="trusted-client mt-4">
                            <div class="trusted-client-content">
                                <h3><span class="counter">1000</span>{{ __('welcome.how_clients_text') }}</h3>
                            </div>
                            <div class="trusted-client--image">
                                <img class="imgClients" src="/images/trusted-client-img.png" alt="Icon">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- How It Work Section End -->


    <!-- Testimonials Start -->
    <section class="our-testimonial">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
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
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials End -->

</x-frontend-layout>
