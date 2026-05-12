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
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                            <div class="split-line" style="display: block; text-align: center; position: relative;">
                                <div class="position-relative">
                                    Създаване на автомобил
                                </div>
                            </div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us-form container pb-5">
        <form action="{{ route('car.create') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="row">

                <!-- Car Name - BULGARIAN -->
                <div class="form-group col-md-4 mb-4">
                    <label>Име на автомобила (БГ)</label>
                    <input type="text" value="{{ old('car_name_bg') }}" name="car_name_bg" class="form-control"
                        placeholder="Въведете име на автомобила">
                    @error('car_name_bg')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Car Name - ENGLISH -->
                <div class="form-group col-md-4 mb-4">
                    <label>Car Name (EN)</label>
                    <input type="text" value="{{ old('car_name_en') }}" name="car_name_en" class="form-control"
                        placeholder="Enter car name">
                    @error('car_name_en')
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
                    <input type="number" value="{{ old('price_per_day') }}" name="price_per_day" class="form-control"
                        placeholder="Въведете цена" step="0.01">
                    @error('price_per_day')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Vehicle Type - BULGARIAN -->
                <div class="form-group col-md-4 mb-4">
                    <label>Вид на автомобила (БГ)</label>
                    <select required name="vehicle_type_bg" class="form-control">
                        <option value="">Изберете вид</option>
                        <option value="Лека кола">Лека кола</option>
                        <option value="SUV">SUV</option>
                        <option value="Бус">Бус</option>
                        <option value="Луксозни лимузини">Луксозни лимузини</option>
                    </select>
                    @error('vehicle_type_bg')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Vehicle Type - ENGLISH -->
                <div class="form-group col-md-4 mb-4">
                    <label>Vehicle Type (EN)</label>
                    <select required name="vehicle_type_en" class="form-control">
                        <option value="">Select type</option>
                        <option value="Sedan">Sedan</option>
                        <option value="SUV">SUV</option>
                        <option value="Van">Van</option>
                        <option value="Luxury Limousine">Luxury Limousine</option>
                    </select>
                    @error('vehicle_type_en')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Power - BULGARIAN -->
                <div class="form-group col-md-4 mb-4">
                    <label>Мощност на автомобила (БГ)</label>
                    <input type="text" value="{{ old('car_power_bg') }}" name="car_power_bg" class="form-control"
                        placeholder="Въведете мощност на автомобила">
                    @error('car_power_bg')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Power - ENGLISH -->
                <div class="form-group col-md-4 mb-4">
                    <label>Car Power (EN)</label>
                    <input type="text" value="{{ old('car_power_en') }}" name="car_power_en" class="form-control"
                        placeholder="Enter car power">
                    @error('car_power_en')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Car Year -->
                <div class="form-group col-md-4 mb-4">
                    <label>Добавете година</label>
                    <select required name="car_year" class="form-control">
                        <option selected disabled value="">Изберете година</option>
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

                <!-- BG -->
                <div class="form-group col-md-4 mb-4">
                    <label>Вид гориво (BG)</label>

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

                <!-- EN -->
                <div class="form-group col-md-4 mb-4">
                    <label>Fuel Type (EN)</label>

                    <select required name="fuel_type_en" class="form-control">
                        <option disabled selected value="">Select fuel type</option>

                        <option value="Diesel">Diesel</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Hybrid">Hybrid</option>
                        <option value="Fully Electric">Fully Electric</option>
                    </select>

                    @error('fuel_type_en')
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
                    <input type="file" name="main_image" class="form-control" accept="image/*">
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

                <!-- Extras BG -->
                <div class="form-group col-md-12 mb-4">
                    <label>Екстри</label>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Климатроник"
                                    class="form-check-input" id="climatronic_bg">
                                <label class="form-check-label" for="climatronic_bg">Климатроник</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Климатик" class="form-check-input"
                                    id="ac_bg">
                                <label class="form-check-label" for="ac_bg">Климатик</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Подгрев на седалките"
                                    class="form-check-input" id="heated_bg">
                                <label class="form-check-label" for="heated_bg">Подгрев на седалките</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Обдухване на седалките"
                                    class="form-check-input" id="ventilated_bg">
                                <label class="form-check-label" for="ventilated_bg">Обдухване на седалките</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Масаж на седалките"
                                    class="form-check-input" id="massage_bg">
                                <label class="form-check-label" for="massage_bg">Масаж на седалките</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Line Assist"
                                    class="form-check-input" id="lineassist_bg">
                                <label class="form-check-label" for="lineassist_bg">Line Assist</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Хладилна жабка"
                                    class="form-check-input" id="coolbox_bg">
                                <label class="form-check-label" for="coolbox_bg">Хладилна жабка</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Панорамен таван"
                                    class="form-check-input" id="panorama_bg">
                                <label class="form-check-label" for="panorama_bg">Панорамен таван</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Електрически багажник"
                                    class="form-check-input" id="electrictrunk_bg">
                                <label class="form-check-label" for="electrictrunk_bg">Електрически багажник</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Втори ред седалки е с кресла"
                                    class="form-check-input" id="captainseats_bg">
                                <label class="form-check-label" for="captainseats_bg">Втори ред седалки е с
                                    кресла</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Монитори за задните седалки - TV"
                                    class="form-check-input" id="rearTV_bg">
                                <label class="form-check-label" for="rearTV_bg">Монитори за задните седалки -
                                    TV</label>
                            </div>
                        </div>
                    </div>
                    @error('extras_bg')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <hr>

                <!-- Extras EN -->
                <div class="form-group col-md-12 mb-4">
                    <label>Extras</label>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Climatronic"
                                    class="form-check-input" id="climatronic_en">
                                <label class="form-check-label" for="climatronic_en">Climatronic</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Air conditioning"
                                    class="form-check-input" id="ac_en">
                                <label class="form-check-label" for="ac_en">Air conditioning</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Heated seats"
                                    class="form-check-input" id="heated_en">
                                <label class="form-check-label" for="heated_en">Heated seats</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Ventilated seats"
                                    class="form-check-input" id="ventilated_en">
                                <label class="form-check-label" for="ventilated_en">Ventilated seats</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Massage seats"
                                    class="form-check-input" id="massage_en">
                                <label class="form-check-label" for="massage_en">Massage seats</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Line Assist"
                                    class="form-check-input" id="lineassist_en">
                                <label class="form-check-label" for="lineassist_en">Line Assist</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Cooling glovebox"
                                    class="form-check-input" id="coolbox_en">
                                <label class="form-check-label" for="coolbox_en">Cooling glovebox</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Panoramic roof"
                                    class="form-check-input" id="panorama_en">
                                <label class="form-check-label" for="panorama_en">Panoramic roof</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Electric trunk"
                                    class="form-check-input" id="electrictrunk_en">
                                <label class="form-check-label" for="electrictrunk_en">Electric trunk</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Second row captain seats"
                                    class="form-check-input" id="captainseats_en">
                                <label class="form-check-label" for="captainseats_en">Second row captain seats</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Rear seat monitors - TV"
                                    class="form-check-input" id="rearTV_en">
                                <label class="form-check-label" for="rearTV_en">Rear seat monitors - TV</label>
                            </div>
                        </div>
                    </div>
                    @error('extras_en')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- TABLE 1 - BULGARIAN -->
                <div class="form-group col-md-12 mb-4">
                    <label for="car_text1_bg">Таблица 1 (БГ)</label>
                    <textarea class="mt-3" name="car_text1_bg" id="createCar_bg" cols="30" rows="10">{{ old('car_text1_bg') }}</textarea>
                    @error('car_text1_bg')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- TABLE 1 - ENGLISH -->
                <div class="form-group col-md-12 mb-4">
                    <label for="car_text1_en">Table 1 (EN)</label>
                    <textarea class="mt-3" name="car_text1_en" id="createCar_en" cols="30" rows="10">{{ old('car_text1_en') }}</textarea>
                    @error('car_text1_en')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- TABLE 2 - BULGARIAN -->
                <div class="form-group col-md-12 mb-4">
                    <label for="car_text2_bg">Таблица 2 (БГ)</label>
                    <textarea class="mt-3" name="car_text2_bg" id="createCar2_bg" cols="30" rows="10">{{ old('car_text2_bg') }}</textarea>
                    @error('car_text2_bg')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- TABLE 2 - ENGLISH -->
                <div class="form-group col-md-12 mb-4">
                    <label for="car_text2_en">Table 2 (EN)</label>
                    <textarea class="mt-3" name="car_text2_en" id="createCar2_en" cols="30" rows="10">{{ old('car_text2_en') }}</textarea>
                    @error('car_text2_en')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- CAR TEXT - BULGARIAN -->
                <div class="form-group col-md-12 mb-4">
                    <label for="car_text3_bg">Текст за колите (БГ)</label>
                    <textarea class="mt-3" name="car_text3_bg" id="createCar3_bg" cols="30" rows="10">{{ old('car_text3_bg') }}</textarea>
                    @error('car_text3_bg')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- CAR TEXT - ENGLISH -->
                <div class="form-group col-md-12 mb-4">
                    <label for="car_text3_en">Car Text (EN)</label>
                    <textarea class="mt-3" name="car_text3_en" id="createCar3_en" cols="30" rows="10">{{ old('car_text3_en') }}</textarea>
                    @error('car_text3_en')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

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
