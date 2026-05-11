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
                                    <li><img src="/images/icon-fleets-single-sidebar-list-1.svg" alt="{{ $car->car_name }}">Макс. брой
                                        пътници <span>{{ $car->max_passengers }}</span></li>
                                    <li><img src="/images/icon-fleets-single-sidebar-list-2.svg" alt="{{ $car->car_name }}">Макс.
                                        брой куфари <span>{{ $car->luggage }}</span></li>
                                    <li><img src="/images/icon-fleets-single-sidebar-list-3.svg" alt="{{ $car->car_name }}">Врати
                                        <span>{{ $car->doors }}</span>
                                    </li>
                                    <li><img src="/images/icon-fleets-single-sidebar-list-4.svg"
                                            alt="">Трансмисия <span>Автоматик</span></li>
                                    <li><img src="/images/icon-fleets-single-sidebar-list-6.svg" alt="{{ $car->car_name }}">Година
                                        <span>{{ $car->car_year }}</span>
                                    </li>
                                       <li><img src="/images/horse-power-1.png" alt="{{ $car->car_name }}">Конски сили
                                        <span>{{ $car->car_power }}</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Feets Single Sidebar List End -->

                            <!-- Feets Single Sidebar Btn Start -->
                            <div class="fleets-single-sidebar-btn">
                                <a href="/contact" class="btn-default popup-with-form">Запазете сега</a>
                                <span>или </span>
                                <!--<a href="#" class="wp-btn"><i class="fa-brands fa-whatsapp"></i></a>-->
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
                                    <h3>Напълно оборудвани автомобили</h3>
                                    <p>Оборудвани с автокаско, гражданска отговорност и винетка.</p>
                                </div>
                            </div>
                            <!-- Feets Benefits Item End -->

                            <!-- Feets Benefits Item Start -->
                            <div class="fleets-benefits-item">
                                <div class="icon-box">
                                    <img src="/images/icon-fleets-benefits-2.svg" alt="">
                                </div>
                                <div class="fleets-benefits-content">
                                    <h3>Лесен процес на наемане</h3>
                                    <p>Бързо получаване на автомобила с минимални изисквания.</p>
                                </div>
                            </div>
                            <!-- Feets Benefits Item End -->

                        </div>
                        <!-- Feets Benefits End -->


                        <!-- Feets Information Start -->
                        <div class="fleets-information">
                            <!-- Section Title Start -->
                            <div class="section-title">

                                <h3 class="wow fadeInUp">Основна инормация</h3>

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
                            <!-- Feets Information List Start -->
                            <div class="fleets-information-list wow fadeInUp" data-wow-delay="0.5s">
                                <ul>
                                    <li>Безплатна отмяна на резервация до 48 часа</li>
                                    <li>Плащане при получаване на автомобила</li>
                                    <li>Напълно оборудвани автомобили с автокаско и гражданска отговорност</li>
                                </ul>
                            </div>

                            <!-- Feets Information List End -->
                        </div>
                        <!-- Feets Information End -->

                        <!-- Feets Amenities Start -->
                        <div class="fleets-amenities">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">удобства</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Удобства на автомобила</h2>
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
                                    <h3>Документи</h3>
                                    <h2>
                                        Вашият надежден партньор за луксозни и представителни автомобили под наем
                                    </h2>
                                    <p>
                                        Ние предоставяме висок клас автомобили, съчетаващи комфорт, елегантност и
                                        безупречна визия.
                                        Нашата мисия е да предложим премиум рент-а-кар изживяване, което отговаря на
                                        най-високите
                                        изисквания за качество, сигурност и обслужване.
                                        Всички наши автомобили са напълно оборудвани и поддържани в отлично техническо
                                        състояние,
                                        като разполагат с валидно пълно автокаско, гражданска отговорност, технически
                                        преглед
                                        и годишна винетка.
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
                                            <h3>Как работи отказването на резервация?</h3>
                                            <p>
                                                Предлагаме безплатно анулиране на резервация до 48 часа преди началото
                                                на наема.
                                                В този период не се изисква капаро и не се начисляват такси при отказ.
                                                Нашата цел е да осигурим максимална гъвкавост и спокойствие при
                                                планирането на
                                                вашето пътуване.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Trusted Booking Item -->
                                    <div class="about-trusted-booking">
                                        <div class="icon-box">
                                            <img src="/images/icon-about-trusted-2.svg" alt="">
                                        </div>
                                        <div class="trusted-booking-content">
                                            <h3>Как се извършва плащането?</h3>
                                            <p>
                                                Плащането се извършва при получаване на автомобила. При необходимост
                                                можем да
                                                предоставим допълнителна информация за начините на плащане по време на
                                                потвърждаването на резервацията.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Trusted Booking Item -->
                                    <div class="about-trusted-booking">
                                        <div class="icon-box">
                                            <img src="/images/icon-about-trusted-2.svg" alt="">
                                        </div>
                                        <div class="trusted-booking-content">
                                            <h3>Издава ли се фактура?</h3>
                                            <p>
                                                Да. При извършване на плащането се издава фактура, включително и за
                                                фирми.
                                                Ако имате специфични изисквания относно фактуриране, те могат да бъдат
                                                уточнени при получаването на автомобила.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Trusted Booking Item -->
                                    <div class="about-trusted-booking">
                                        <div class="icon-box">
                                            <img src="/images/icon-about-trusted-2.svg" alt="">
                                        </div>
                                        <div class="trusted-booking-content">
                                            <h3>Необходими документи за наемане на автомобил</h3>
                                            <p>
                                                При получаване на автомобила се подписва договор за наем на моторно
                                                превозно средство.
                                                За целта е необходимо да представите валидна шофьорска книжка и лична
                                                карта,
                                                като се изисква минимум 2 години шофьорски стаж.
                                                Подробните условия и отговорности са описани в договора, който се
                                                подписва
                                                при предаването на автомобила.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Trusted Booking Item -->
                                    <div class="about-trusted-booking">
                                        <div class="icon-box">
                                            <img src="/images/icon-about-trusted-2.svg" alt="">
                                        </div>
                                        <div class="trusted-booking-content">
                                            <h3>Изисква ли се депозит?</h3>
                                            <p>
                                                При отдаване на автомобил под наем се изисква депозит в размер на 500
                                                евро,
                                                който се заплаща в брой при получаването на автомобила.
                                                За услугите с осигурен шофьор не се изисква депозит.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Trusted Booking Item -->
                                    <div class="about-trusted-booking">
                                        <div class="icon-box">
                                            <img src="/images/icon-about-trusted-2.svg" alt="">
                                        </div>
                                        <div class="trusted-booking-content">
                                            <h3>Глоби и пътни нарушения</h3>
                                            <p>
                                                Всички глоби, санкции и други пътни нарушения, възникнали по време на
                                                периода
                                                на наемане на автомобила, се поемат от водача.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Trusted Booking Item -->
                                    <div class="about-trusted-booking">
                                        <div class="icon-box">
                                            <img src="/images/icon-about-trusted-2.svg" alt="">
                                        </div>
                                        <div class="trusted-booking-content">
                                            <h3>Пътнотранспортни произшествия</h3>
                                            <p>
                                                В случай на по-сериозно пътнотранспортно произшествие е необходимо да
                                                бъде
                                                изготвен констативен протокол от КАТ – Пътна полиция или двустранен
                                                протокол между участниците в инцидента.
                                                Допълнителните процедури и задължения са подробно описани в договора за
                                                наем.
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
