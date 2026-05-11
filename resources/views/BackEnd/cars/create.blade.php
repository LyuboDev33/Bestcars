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
                                    Създаване на автомобил
                                </div>
                            </div>
                        </h1>

                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us-form container pb-5">
        <form action="{{ route('car.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <!-- Car Name -->
                <div class="form-group col-md-4 mb-4">
                    <label>Име на автомобила</label>
                    <input type="text" value="{{ old('car_name') }}" name="car_name" class="form-control" placeholder="Въведете име на автомобила">
                    @error('car_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Brand -->
                <div class="form-group col-md-4 mb-4">
                    <label>Марка</label>
                    <select required name="brand" class="form-control">
                        <option value="" disabled selected>Изберете марка</option>
                        <option value="BMW">BMW</option>
                        <option value="Jeep">Jeep</option>
                        <option value="Mercedes">Mercedes</option>
                        <option value="Mini">Mini</option>
                        <option value="Hyundai">Hyundai</option>
                    </select>
                    @error('brand')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Price Per Day -->
                <div class="form-group col-md-4 mb-4">
                    <label>Цена на ден (в евро)</label>
                    <input type="number" value="{{ old('price_per_day') }}" name="price_per_day" class="form-control" placeholder="Въведете цена"
                        step="0.01">
                    @error('price_per_day')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Vehicle Type -->
                <div class="form-group col-md-4 mb-4">
                    <label>Вид на автомобила</label>
                    <select required name="vehicle_type" class="form-control">
                        <option value="">Изберете вид</option>
                        <option value="Лека кола">Лека кола</option>
                        <option value="SUV">SUV</option>
                        <option value="Бус">Бус</option>
                        <option value="Луксозни лимузини">Луксозни лимузини</option>
                    </select>
                    @error('vehicle_type')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Power  -->

                <div class="form-group col-md-4 mb-4">
                    <label>Мощност на автомобила</label>
                    <input type="text"
                        value="{{ old('car_power') }}"
                        name="car_power" class="form-control"
                        placeholder="Въведете мощност на автомобила">

                    @error('car_power')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group col-md-4 mb-4">
                    <label>Добавете година</label>
                    <select required name="car_year" class="form-control">
                        <option selected disabled value="">Изберете гориво</option>

                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>


                    </select>
                    @error('car_year')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Fuel Type -->
                <div class="form-group col-md-4 mb-4">
                    <label>Вид гориво</label>
                    <select required name="fuel_type" class="form-control">
                        <option disabled selected value="">Изберете гориво</option>
                        <option value="Дизел">Дизел</option>
                        <option value="Бензин">Бензин</option>
                        <option value="Хибрид">Хибрид</option>
                        <option value="Изцяло електрическа">Изцяло електрическа</option>
                    </select>
                    @error('fuel_type')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Max Passengers -->
                <div class="form-group col-md-4 mb-4">
                    <label>Максимален брой пътници</label>
                    <select required name="max_passengers" class="form-control">
                        <option disabled selected value="">Изберете</option>
                        <option value="3 + 1">3 + 1</option>
                        <option value="4 + 1">4 + 1</option>
                        <option value="6 + 1">6 + 1</option>
                        <option value="8 + 1">8 + 1</option>
                    </select>
                    @error('max_passengers')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Doors -->
                <div class="form-group col-md-4 mb-4">
                    <label>Брой врати</label>
                    <select required name="doors" class="form-control">
                        <option disabled selected value="">Изберете</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                    </select>
                    @error('doors')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Luggage -->
                <div class="form-group col-md-4 mb-4">
                    <label>Брой куфари</label>
                    <select required name="luggage" class="form-control">
                        <option disabled selected value="">Изберете</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    @error('luggage')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Main Image -->
                <div class="form-group col-md-6 mb-4">
                    <label>Главна снимка на автомобила</label>
                    <input type="file"
                    name="main_image"
                    class="form-control"
                    accept="image/*">
                    @error('main_image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Gallery -->
                <div class="form-group col-md-6 mb-4">
                    <label>Галерия на автомобила</label>
                    <input type="file" name="gallery_images[]" class="form-control" accept="image/*" multiple>
                    @error('gallery_images')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    @error('gallery_images.*')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Extras -->
                <div class="form-group col-md-12 mb-4">
                    <label>Екстри</label>
                    <div class="row mt-2">

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Климатроник" class="form-check-input"
                                    id="climatronic">
                                <label class="form-check-label" for="climatronic">Климатроник</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Климатик" class="form-check-input"
                                    id="ac">
                                <label class="form-check-label" for="ac">Климатик</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Подгрев на седалките"
                                    class="form-check-input" id="heated">
                                <label class="form-check-label" for="heated">Подгрев на седалките</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Обдухване на седалките"
                                    class="form-check-input" id="ventilated">
                                <label class="form-check-label" for="ventilated">Обдухване на седалките</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Масаж на седалките"
                                    class="form-check-input" id="massage">
                                <label class="form-check-label" for="massage">Масаж на седалките</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Line Assist" class="form-check-input"
                                    id="lineassist">
                                <label class="form-check-label" for="lineassist">Line Assist</label>
                            </div>
                        </div>

                        <!-- NEW EXTRAS START -->

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Хладилна жабка"
                                    class="form-check-input" id="coolbox">
                                <label class="form-check-label" for="coolbox">Хладилна жабка</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Панорамен таван"
                                    class="form-check-input" id="panorama">
                                <label class="form-check-label" for="panorama">Панорамен таван</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Електрически багажник"
                                    class="form-check-input" id="electrictrunk">
                                <label class="form-check-label" for="electrictrunk">Електрически багажник</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Втори ред седалки е с кресла"
                                    class="form-check-input" id="captainseats">
                                <label class="form-check-label" for="captainseats">Втори ред седалки е с
                                    кресла</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Монитори за задните седалки - TV"
                                    class="form-check-input" id="rearTV">
                                <label class="form-check-label" for="rearTV">Монитори за задните седалки -
                                    TV</label>
                            </div>
                        </div>

                        <!-- NEW EXTRAS END -->

                    </div>

                    @error('extras')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>

                <label for="car_text1">Таблица 1</label>
                <textarea class="mt-5"
                value="{{ old('car_text1') }}"
                name="car_text1" id="createCar" cols="30" rows="10"></textarea>

                @error('car_text1')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <label for="car_text2">Таблица 2</label>
                <textarea class="mt-5"
                value="{{ old('car_text2') }}"
                name="car_text2" id="createCar2" cols="30" rows="10"></textarea>

                @error('car_text2')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <label for="car_text1">Текст за колите</label>
                <textarea class="mt-5"
                value="{{ old('car_text3') }}"
                name="car_text3" id="createCar3" cols="30" rows="10"></textarea>

                @error('car_text3')
                    <small class="text-danger">{{ $message }}</small>
                @enderror


                <!-- Submit -->
                <div class="col-lg-12 mt-5">
                    <div class="contact-form-btn">
                        <button type="submit" class="btn-default">Добави автомобил</button>
                    </div>
                </div>

            </div>
        </form>


    </div>






</x-frontend-layout>
