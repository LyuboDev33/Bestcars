<x-frontend-layout>

    @section('seo')
        <title>BestCars | {{ $car->car_name }}</title>
    @endsection
    <!-- Page Feets Single Start -->
    <div class="page-fleets-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Feets Single Sidebar Start -->
                    <div class="fleets-single-sidebar">
                        <div class="fleets-single-sidebar-box">
                            <!-- Feets Single Sidebar Pricing Start -->
                            <div class="fleets-single-sidebar-pricing">
                                <h2>{{ $car->price_per_day }}€<span>/ден</span></h2>
                            </div>
                            <!-- Feets Single Sidebar Pricing End -->

                            <!-- Feets Single Sidebar List Start -->
                            <div class="fleets-single-sidebar-list">
                                <ul>
                                    <li>
                                        <img src="/images/icon-fleets-single-sidebar-list-1.svg"
                                            alt="{{ $car->car_name }}">
                                        {{ __('welcome.max_passengers') }}
                                        <span>{{ $car->max_passengers }}</span>
                                    </li>

                                    <li>
                                        <img src="/images/icon-fleets-single-sidebar-list-2.svg"
                                            alt="{{ $car->car_name }}">
                                        {{ __('welcome.max_luggage') }}
                                        <span>{{ $car->luggage }}</span>
                                    </li>

                                    <li>
                                        <img src="/images/icon-fleets-single-sidebar-list-3.svg"
                                            alt="{{ $car->car_name }}">
                                        {{ __('welcome.doors') }}
                                        <span>{{ $car->doors }}</span>
                                    </li>

                                    <li>
                                        <img src="/images/icon-fleets-single-sidebar-list-4.svg" alt="">
                                        {{ __('welcome.transmission') }}
                                        <span>{{ __('welcome.automatic') }}</span>
                                    </li>

                                    <li>
                                        <img src="/images/icon-fleets-single-sidebar-list-6.svg"
                                            alt="{{ $car->car_name }}">
                                        {{ __('welcome.year') }}
                                        <span>{{ $car->car_year }}</span>
                                    </li>

                                    <li>
                                        <img src="/images/horse-power-1.png" alt="{{ $car->car_name }}">
                                        {{ __('welcome.horse_power') }}
                                        <span>{{ $car->car_power }}</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Feets Single Sidebar List End -->

                            <!-- Feets Single Sidebar Btn Start -->
                            <div class="fleets-single-sidebar-btn">
                                <a href="/contact" class="btn-default popup-with-form">
                                       {{ __('welcome.save_now') }}
                                </a>
                      
                            </div>
                            <!-- Feets Single Sidebar Btn End -->
                        </div>

                        <!-- Booking Form Box Start -->
                        <div class="booking-form-box">
                            <!-- Booking PopUp Form Start -->
                            <form id="bookingform" class="white-popup-block mfp-hide booking-form">
                                <div class="section-title">
                                    <h2>Reserve your vehicle today!</h2>
                                    <p>Fill out the form below to reserve your vehicle. Complete the necessary details
                                        to ensure a smooth rental experience.</p>
                                </div>
                                <fieldset>
                                    <div class="row">
                                        <div class="booking-form-group col-md-6 mb-4">
                                            <input type="text" name="name" class="booking-form-control"
                                                id="name" placeholder="Full Name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="booking-form-group col-md-6 mb-4">
                                            <input type="email" name ="email" class="booking-form-control"
                                                id="email" placeholder="Enter Your Email" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="booking-form-group col-md-6 mb-4">
                                            <input type="text" name="phone" class="booking-form-control"
                                                id="phone" placeholder="Enter Your Number" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="booking-form-group col-md-6 mb-4">
                                            <select name="cartype" class="booking-form-control form-select"
                                                id="cartype" required>
                                                <option value="" disabled selected>Choose Car Type</option>
                                                <option value="sport_car">sport car</option>
                                                <option value="convertible_car">convertible car</option>
                                                <option value="sedan_car">sedan car</option>
                                                <option value="luxury_car">luxury car</option>
                                                <option value="electric_car">electric car</option>
                                                <option value="coupe_car">coupe car</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="booking-form-group col-md-6 mb-4">
                                            <select name="location" class="booking-form-control form-select"
                                                id="pickuplocation" required>
                                                <option value="" disabled selected>Pick Up Location</option>
                                                <option value="abu_dhabi">abu dhabi</option>
                                                <option value="alain">alain</option>
                                                <option value="dubai">dubai</option>
                                                <option value="sharjah">sharjah</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="booking-form-group col-md-6 mb-4">
                                            <input type="text" name="date" placeholder="PickUp Date"
                                                class="booking-form-control datepicker" id="pickupdate" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="booking-form-group col-md-6 mb-4">
                                            <select name="droplocation" class="booking-form-control form-select"
                                                id="droplocation" required>
                                                <option value="" disabled selected>Drop Off Location</option>
                                                <option value="abu_dhabi">abu dhabi</option>
                                                <option value="alain">alain</option>
                                                <option value="sharjah">sharjah</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="booking-form-group col-md-6 mb-4">
                                            <input type="text" name="date" class="booking-form-control datepicker"
                                                id="returndate" placeholder="Return Date" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="booking-form-group col-md-12 mb-4">
                                            <textarea name="msg" class="booking-form-control" id="msg" rows="3" placeholder="Write Your Message"
                                                required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="col-md-12 booking-form-group">
                                            <button type="submit" class="btn-default btn-highlighted">rent
                                                now</button>
                                            <div id="msgSubmit" class="h3 hidden"></div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                            <!-- Booking PopUp Form End -->
                        </div>
                        <!-- Booking Form Box End -->
                    </div>
                    <!-- Feets Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Feets Single Content Start -->
                    <div class="fleets-single-content">
                        <!-- Feets Single Slider Start -->
                        <div class="fleets-single-slider">
                            <h2 class="mb-3 text-center">{{ $car->car_name }}</h2>
                            <div class="swiper">
                                <div class="swiper-wrapper">

                                    @foreach (json_decode($car->gallery_images) as $image)
                                        <!-- Fleets Image Slide Start -->
                                        <div class="swiper-slide">
                                            <div class="fleets-slider-image text-center">
                                                <figure class="image-anime">
                                                    <img src="/images/cars_gallery/{{ $image }}"
                                                        alt="{{ $car->car_name }}">
                                                </figure>
                                            </div>
                                        </div>
                                        <!-- Fleets Image Slide End -->
                                    @endforeach

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <!-- Feets Single Slider End -->

                        <!-- Feets Benefits Start -->
                        <div class="fleets-benefits wow fadeInUp">

                            <!-- Feets Benefits Item Start -->
                            <div class="fleets-benefits-item">
                                <div class="icon-box">
                                    <img src="/images/icon-fleets-benefits-1.svg" alt="">
                                </div>

                                <div class="fleets-benefits-content">
                                    <h3>{{ __('welcome.fully_equipped_cars') }}</h3>
                                    <p>{{ __('welcome.fully_equipped_cars_text') }}</p>
                                </div>
                            </div>
                            <!-- Feets Benefits Item End -->

                            <!-- Feets Benefits Item Start -->
                            <div class="fleets-benefits-item">
                                <div class="icon-box">
                                    <img src="/images/icon-fleets-benefits-2.svg" alt="">
                                </div>

                                <div class="fleets-benefits-content">
                                    <h3>{{ __('welcome.easy_rental_process') }}</h3>
                                    <p>{{ __('welcome.easy_rental_process_text') }}</p>
                                </div>
                            </div>
                            <!-- Feets Benefits Item End -->

                        </div>
                        <!-- Feets Benefits End -->


                        <!-- Feets Information Start -->
                        <div class="fleets-information">
                            <!-- Section Title Start -->
                            <div class="section-title">

                                <h3 class="wow fadeInUp">{{ __('welcome.main_information') }}</h3>

                                <div class="row g-4">

                                    <!-- TABLE 1 -->
                                    <div class="{{ !empty($car->car_text2) ? 'col-lg-6' : 'col-12' }}">
                                        <div class="tinymce-table-wrapper">
                                            {!! $car->car_text1 !!}
                                        </div>
                                    </div>

                                    <!-- TABLE 2 (optional) -->
                                    @if (!empty($car->car_text2))
                                        <div class="col-lg-6">
                                            <div class="tinymce-table-wrapper">
                                                {!! $car->car_text2 !!}
                                            </div>
                                        </div>
                                    @endif

                                    @if (!empty($car->car_text3))
                                        <div class="col-lg-12">
                                            <div class="tinymce-table-wrapper">
                                                {!! $car->car_text3 !!}
                                            </div>
                                        </div>
                                    @endif

                                </div>

                            </div>


                            <!-- Section Title End -->

                            <!-- Feets Information List Start -->
                            <div class="fleets-information-list">
                                <ul>
                                    <li>{{ __('welcome.free_cancellation') }}</li>
                                    <li>{{ __('welcome.pay_on_pickup') }}</li>
                                    <li>{{ __('welcome.fully_insured_cars') }}</li>
                                </ul>
                            </div>
                            <!-- Feets Information List End -->

                        </div>
                        <!-- Feets Information End -->

                        <!-- Feets Amenities Start -->
                        <div class="fleets-amenities">

                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">
                                    {{ __('welcome.amenities_small_title') }}
                                </h3>

                                <h2 class="text-anime-style-3" data-cursor="-opaque">
                                    {{ __('welcome.amenities_title') }}
                                </h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Feets Amenities List Start -->
                            <div class="fleets-amenities-list wow fadeInUp" data-wow-delay="0.25s">
                                <ul>
                                    @foreach (json_decode($car->extras) as $extra)
                                        <li>{{ $extra }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Feets Amenities List End -->

                        </div>
                        <!-- Feets Amenities End -->


                        <div>
                            <!-- About Us Content Start -->
                            <div class="about-content">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h3>
                                        {{ __('welcome.documents_small_title') }}
                                    </h3>
                                    <h2>
                                        {{ __('welcome.documents_title') }}
                                    </h2>
                                    <p>
                                        {{ __('welcome.documents_description') }}
                                    </p>
                                </div>
                                <!-- Section Title End -->


                                <!-- About Content Body Start -->
                                <div class="about-content-body">
                                    <!-- Trusted Booking Item -->
                                    <div class="about-trusted-booking">
                                        <div class="icon-box">
                                            <img src="/images/icon-about-trusted-1.svg" alt="">
                                        </div>
                                        <div class="trusted-booking-content">
                                            <h3>
                                                {{ __('welcome.cancel_title') }}
                                            </h3>
                                            <p>
                                                {{ __('welcome.cancel_description') }}
                                            </p>
                                        </div>
                                    </div>


                                    <!-- Trusted Booking Item -->
                                    <div class="about-trusted-booking">
                                        <div class="icon-box">
                                            <img src="/images/icon-about-trusted-2.svg" alt="">
                                        </div>
                                        <div class="trusted-booking-content">
                                            <h3>
                                                {{ __('welcome.payment_title') }}
                                            </h3>
                                            <p>
                                                {{ __('welcome.payment_description') }}
                                            </p>
                                        </div>
                                    </div>


                                    <!-- Trusted Booking Item -->
                                    <div class="about-trusted-booking">
                                        <div class="icon-box">
                                            <img src="/images/icon-about-trusted-2.svg" alt="">
                                        </div>
                                        <div class="trusted-booking-content">
                                            <h3>
                                                {{ __('welcome.invoice_title') }}
                                            </h3>
                                            <p>
                                                {{ __('welcome.invoice_description') }}
                                            </p>
                                        </div>
                                    </div>


                                    <!-- Trusted Booking Item -->
                                    <div class="about-trusted-booking">
                                        <div class="icon-box">
                                            <img src="/images/icon-about-trusted-2.svg" alt="">
                                        </div>
                                        <div class="trusted-booking-content">
                                            <h3>
                                                {{ __('welcome.required_documents_title') }}
                                            </h3>
                                            <p>
                                                {{ __('welcome.required_documents_description') }}
                                            </p>
                                        </div>
                                    </div>


                                    <!-- Trusted Booking Item -->
                                    <div class="about-trusted-booking">
                                        <div class="icon-box">
                                            <img src="/images/icon-about-trusted-2.svg" alt="">
                                        </div>
                                        <div class="trusted-booking-content">
                                            <h3>
                                                {{ __('welcome.deposit_title') }}
                                            </h3>

                                            <p>
                                                {{ __('welcome.deposit_description') }}
                                            </p>
                                        </div>
                                    </div>


                                    <!-- Trusted Booking Item -->
                                    <div class="about-trusted-booking">
                                        <div class="icon-box">
                                            <img src="/images/icon-about-trusted-2.svg" alt="">
                                        </div>
                                        <div class="trusted-booking-content">
                                            <h3>
                                                {{ __('welcome.fines_title') }}
                                            </h3>

                                            <p>
                                                {{ __('welcome.fines_description') }}
                                            </p>
                                        </div>
                                    </div>


                                    <!-- Trusted Booking Item -->
                                    <div class="about-trusted-booking">
                                        <div class="icon-box">
                                            <img src="/images/icon-about-trusted-2.svg" alt="">
                                        </div>
                                        <div class="trusted-booking-content">
                                            <h3>
                                                {{ __('welcome.accidents_title') }}
                                            </h3>
                                            <p>
                                                {{ __('welcome.accidents_description') }}
                                            </p>
                                        </div>

                                    </div>

                                </div>
                                <!-- About Content Body End -->
                            </div>
                            <!-- About Us Content End -->
                        </div>

                    </div>
                    <!-- Feets Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Feets Single End -->



</x-frontend-layout>
