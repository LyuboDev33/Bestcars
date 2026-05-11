<x-frontend-layout>

    @section('seo')
        <title>Bestcars | Услуги</title>
    @endsection

    <!-- About Us Section Start -->
    <section class="about-us">
        <div class="container">
            <div class="row align-items-center">

                <!-- Text + Services -->
                <div class="col-lg-6">
                    <div class="vision-mission-content">
                        <div class="section-title">
                            <h3>{{ __('service.about_subtitle') }}</h3>
                            <h2 class="text-anime-style-3">
                                {{ __('service.about_title') }}
                            </h2>

                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                {{ __('service.about_description') }}
                            </p>
                        </div>

                        <!-- Services Start -->
                        <div class="about-content-body mt-4">

                            <!-- Service 1: Driver hire -->
                            <div class="about-trusted-booking">
                                <div class="icon-box">
                                    <img src="/images/icon-about-trusted-1.svg" alt="">
                                </div>
                                <div class="trusted-booking-content">
                                    <h3>{{ __('service.service_1_title') }}</h3>
                                    <p>{{ __('service.service_1_text') }}</p>
                                </div>
                            </div>

                            <!-- Service 2: Transfers -->
                            <div class="about-trusted-booking">
                                <div class="icon-box">
                                    <img src="/images/icon-service-1.svg" alt="">
                                </div>
                                <div class="trusted-booking-content">
                                    <h3>{{ __('service.service_2_title') }}</h3>
                                    <p>{{ __('service.service_2_text') }}</p>
                                </div>
                            </div>

                            <!-- Service 3: Car wash -->
                            <div class="about-trusted-booking">
                                <div class="icon-box">
                                    <img src="/images/icon-about-trusted-2.svg" alt="">
                                </div>
                                <div class="trusted-booking-content">
                                    <h3>{{ __('service.service_3_title') }}</h3>
                                    <p>{{ __('service.service_3_text') }}</p>
                                </div>
                            </div>

                        </div>
                        <!-- Services End -->

                        <div class="about-content-footer mt-4">
                            <a href="/contact" class="btn-default">
                                {{ __('service.btn_contact') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-lg-6 align-self-start">
                    <div class="vision-image">
                        <figure class="image-anime reveal">
                            <img src="/images/services.jpg" alt="BestRentCars">
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Rates Section Start -->
    <section class="our-services mt-5 mb-5">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h3>{{ __('service.rates_subtitle') }}</h3>
                <h2 class="text-anime-style-3">{{ __('service.rates_title') }}</h2>
            </div>

            <div class="row">
                <!-- BG Rates Table -->
                <div class="col-lg-6 mb-4">
                    <div class="tinymce-table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>{{ __('service.th_route') }}</th>
                                    <th>{{ __('service.th_distance') }}</th>
                                    <th>{{ __('service.th_duration') }}</th>
                                    <th>{{ __('service.th_price_3') }}</th>
                                    <th>{{ __('service.th_price_7') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ __('service.route_airport') }}</td>
                                    <td>{{ __('service.dist_airport') }}</td>
                                    <td>{{ __('service.dur_airport') }}</td>
                                    <td>€ 50</td>
                                    <td>€ 70</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_bansko') }}</td>
                                    <td>{{ __('service.dist_bansko') }}</td>
                                    <td>{{ __('service.dur_bansko') }}</td>
                                    <td>€ 180</td>
                                    <td>€ 200</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_pamporovo') }}</td>
                                    <td>{{ __('service.dist_pamporovo') }}</td>
                                    <td>{{ __('service.dur_pamporovo') }}</td>
                                    <td>€ 230</td>
                                    <td>€ 280</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_borovets') }}</td>
                                    <td>{{ __('service.dist_borovets') }}</td>
                                    <td>{{ __('service.dur_borovets') }}</td>
                                    <td>€ 100</td>
                                    <td>€ 150</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_plovdiv') }}</td>
                                    <td>{{ __('service.dist_plovdiv') }}</td>
                                    <td>{{ __('service.dur_plovdiv') }}</td>
                                    <td>€ 150</td>
                                    <td>€ 190</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_velingrad') }}</td>
                                    <td>{{ __('service.dist_velingrad') }}</td>
                                    <td>{{ __('service.dur_velingrad') }}</td>
                                    <td>€ 150</td>
                                    <td>€ 190</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_koprivshtitsa') }}</td>
                                    <td>{{ __('service.dist_koprivshtitsa') }}</td>
                                    <td>{{ __('service.dur_koprivshtitsa') }}</td>
                                    <td>€ 140</td>
                                    <td>€ 180</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_melnik') }}</td>
                                    <td>{{ __('service.dist_melnik') }}</td>
                                    <td>{{ __('service.dur_melnik') }}</td>
                                    <td>€ 190</td>
                                    <td>€ 250</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_veliko_tarnovo') }}</td>
                                    <td>{{ __('service.dist_veliko_tarnovo') }}</td>
                                    <td>{{ __('service.dur_veliko_tarnovo') }}</td>
                                    <td>€ 240</td>
                                    <td>€ 280</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_rila_monastery') }}</td>
                                    <td>{{ __('service.dist_rila_monastery') }}</td>
                                    <td>{{ __('service.dur_rila_monastery') }}</td>
                                    <td>€ 150</td>
                                    <td>€ 250</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_ruse') }}</td>
                                    <td>{{ __('service.dist_ruse') }}</td>
                                    <td>{{ __('service.dur_ruse') }}</td>
                                    <td>€ 330</td>
                                    <td>€ 380</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_belogradchik') }}</td>
                                    <td>{{ __('service.dist_belogradchik') }}</td>
                                    <td>{{ __('service.dur_belogradchik') }}</td>
                                    <td>€ 185</td>
                                    <td>€ 250</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_varna') }}</td>
                                    <td>{{ __('service.dist_varna') }}</td>
                                    <td>{{ __('service.dur_varna') }}</td>
                                    <td>€ 480</td>
                                    <td>€ 550</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_burgas') }}</td>
                                    <td>{{ __('service.dist_burgas') }}</td>
                                    <td>{{ __('service.dur_burgas') }}</td>
                                    <td>€ 400</td>
                                    <td>€ 490</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- EU Rates Table -->
                <div class="col-lg-6 mb-4">
                    <div class="tinymce-table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>{{ __('service.th_route') }}</th>
                                    <th>{{ __('service.th_distance') }}</th>
                                    <th>{{ __('service.th_duration') }}</th>
                                    <th>{{ __('service.th_price_3') }}</th>
                                    <th>{{ __('service.th_price_7') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ __('service.route_thessaloniki') }}</td>
                                    <td>{{ __('service.dist_thessaloniki') }}</td>
                                    <td>{{ __('service.dur_thessaloniki') }}</td>
                                    <td>€ 300</td>
                                    <td>€ 350</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_belgrade') }}</td>
                                    <td>{{ __('service.dist_belgrade') }}</td>
                                    <td>{{ __('service.dur_belgrade') }}</td>
                                    <td>€ 400</td>
                                    <td>€ 450</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_bucharest') }}</td>
                                    <td>{{ __('service.dist_bucharest') }}</td>
                                    <td>{{ __('service.dur_bucharest') }}</td>
                                    <td>€ 450</td>
                                    <td>€ 500</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_zagreb') }}</td>
                                    <td>{{ __('service.dist_zagreb') }}</td>
                                    <td>{{ __('service.dur_zagreb') }}</td>
                                    <td>€ 900</td>
                                    <td>€ 1000</td>
                                </tr>
                                <tr>
                                    <td>{{ __('service.route_budapest') }}</td>
                                    <td>{{ __('service.dist_budapest') }}</td>
                                    <td>{{ __('service.dur_budapest') }}</td>
                                    <td>€ 800</td>
                                    <td>€ 900</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rates Section End -->

    @include('components.frontend.our-services')

</x-frontend-layout>
