<x-frontend-layout>

    @section('seo')
        <title>Табло за управление</title>
    @endsection


    <div class="page-header bg-section parallaxie"
        style="
        background-image: url(&quot;file:///Users/user/Desktop/PC/Projects/BestCars/themeforest-76pclvDh-novaride-car-rental-html-template/html%20-%20dark/images/page-header-bg.jpg&quot;);
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
                                    Табло за управление
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
                    <!-- FAQs section start -->
                    <div class="rental-condition-accordion" id="general_information">
                        <div
                            class="section-title faqs-section-title contact-us-form d-flex flex-column flex-lg-row gap-3">
                            <a href="/dashboard/cars/create" class="btn-main flex-1">Създай автомобил</a>
                            <input placeholder="Потърсете автомобил по име" class="form-control flex-3" type="text">
                        </div>
                        <hr>
                    </div>
                    <!-- FAQs section End -->

                    <!-- Fleets Collection Box Start -->
                    <div class="fleets-collection-box">
                        <div class="row">

                            <!-- Display all cars -->
                            @foreach ($cars as $car)
                                <div class="col-lg-4 col-md-6">
                                    <!-- Perfect Fleets Item Start -->
                                    <div class="perfect-fleet-item fleets-collection-item">
                                        <!-- Image Box Start -->
                                        <div class="image-box">
                                            <img src="/images/cars/{{ $car->main_image }}" alt="{{ $car->car_name }}">
                                        </div>
                                        <!-- Image Box End -->

                                        <!-- Perfect Fleets Content Start -->
                                        <div class="perfect-fleet-content">
                                            <!-- Perfect Fleets Title Start -->
                                            <div class="perfect-fleet-title">
                                                <h3>{{ $car->vehicle_type }}</h3>
                                                <h2>{{ $car->car_name }}</h2>
                                            </div>
                                            <!-- Perfect Fleets Content End -->

                                            <!-- Perfect Fleets Body Start -->
                                            <div class="perfect-fleet-body">
                                                <ul>
                                                    <li><img src="/images/icon-fleet-list-1.svg" alt="">
                                                        {{ $car->max_passengers }}</li>
                                                    <li><img src="/images/icon-fleet-list-2.svg" alt="">
                                                        {{ $car->doors }}
                                                    </li>
                                                    <li><img src="/images/icon-fleet-list-3.svg"
                                                            alt="">{{ $car->luggage }}</li>
                                                    <li><img src="/images/icon-fleet-list-4.svg"
                                                            alt="">{{ $car->fuel_type }} </li>
                                                </ul>
                                            </div>
                                            <!-- Perfect Fleets Body End -->

                                            <!-- Perfect Fleets Footer Start -->
                                            <div class="perfect-fleet-footer">
                                                <!-- Perfect Fleets Pricing Start -->
                                                <div class="perfect-fleet-pricing">
                                                    <h2>{{ $car->price_per_day }}<span> EUR /ден</span></h2>
                                                </div>
                                                <!-- Perfect Fleets Pricing End -->

                                                <!-- Perfect Fleets Btn Start -->
                                                <div class="perfect-fleet-btn">
                                                    {{-- <a href="#" class="section-icon-btn"><img
                                                            src="/images/arrow-white.svg" alt=""></a> --}}
                                                </div>
                                                <!-- Perfect Fleets Btn End -->
                                            </div>
                                            <hr>
                                            <div class="d-flex flex-column align-items-center gap-3">
                                                <a class="btn-default"
                                                    href="/dashboard/cars/list/{{ $car->car_slug }}/edit">
                                                    Редактирай
                                                </a>
                                                <button class="deleteCar btn btn-danger text-white rounded-pill w-100">
                                                    Изтрий
                                                </button>
                                                <input value="{{ $car->car_slug }}" type="hidden" class="carId">
                                            </div>
                                            <!-- Perfect Fleets Footer End -->
                                        </div>
                                        <!-- Perfect Fleets Content End -->
                                    </div>
                                    <!-- Perfect Fleets Item End -->
                                </div>
                            @endforeach
                            <!-- Display all cars -->

                        </div>
                    </div>
                    <!-- Fleets Collection Box End -->



                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('car.delete') }}" class="background-modal">
        @csrf
        @method('delete')
        <div class="custom-modal animate__animated animate__fadeInUp">
            <h3 class="text-center text-dark">Сигурни ли сте, че искате да изтриете този автомобил?</h3>
            <div class="d-flex gap-3 justify-content-center align-items-center mt-3">
                <button type="submit" class="btn btn-danger rounded-3">Потвърждавам</button>

                <button onclick="this.closest('form').style.display = 'none'" type="button"
                    class="btn btn-info rounded-3 text-white">Затвори</button>
            </div>
        </div>
        <input class="carDeleteInput" type="hidden" name="carSlug">
    </form>


</x-frontend-layout>
