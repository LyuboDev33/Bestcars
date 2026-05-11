<x-frontend-layout>

    @section('seo')
        <title>Bestcars | Луксозни автомобили</title>
    @endsection

    <div class="page-header bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Шоурум</h1>

                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <section class="page-fleets">
        <div class="container">
            <div class="row">
          
                <div class="col-lg-12">
                    <!-- Fleets Collection Box Start -->
                    <div class="fleets-collection-box">
                        <div class="row">
                            
                            @foreach ($cars as $car)
                                <div class="col-lg-3 col-md-6">
                                    <!-- Perfect Fleets Item Start -->
                                    <div class="perfect-fleet-item fleets-collection-item wow fadeInUp">
                                        <!-- Image Box Start -->
                                        <div class="image-box">
                                            <img src="/images/cars/{{ $car->main_image }}" alt="{{ $car->car_name }}">
                                        </div>
                                        <!-- Image Box End -->

                                        <!-- Perfect Fleets Content Start -->
                                        <div class="perfect-fleet-content">
                                            <!-- Perfect Fleets Title Start -->
                                            <div class="perfect-fleet-title">
                                                <h3>Вид: {{ $car->vehicle_type }}</h3>
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
                                                    <h2>{{ $car->price_per_day }} €<span>/ден</span></h2>
                                                </div>
                                                <!-- Perfect Fleets Pricing End -->

                                                <!-- Perfect Fleets Btn Start -->
                                                <div class="perfect-fleet-btn">
                                                    <a href="/car/{{$car->car_slug}}" class="section-icon-btn">
                                                        <img
                                                            src="/images/arrow-white.svg" alt="{{ $car->car_name }}">
                                                        </a>
                                                </div>
                                                <!-- Perfect Fleets Btn End -->
                                            </div>
                                            <!-- Perfect Fleets Footer End -->
                                        </div>
                                        <!-- Perfect Fleets Content End -->
                                    </div>
                                    <!-- Perfect Fleets Item End -->
                                </div>
                            @endforeach


                           
                        </div>
                    </div>
                    <!-- Fleets Collection Box End -->
                </div>
            </div>
        </div>
    </section>

</x-frontend-layout>
