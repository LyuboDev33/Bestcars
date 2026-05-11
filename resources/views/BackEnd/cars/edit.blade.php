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
                                    Редактиране на автомобил {{ $car->car_name }}
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
        <form action="{{ route('car.update', $car->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">

                <!-- Car Name -->
                <div class="form-group col-md-4 mb-4">
                    <label>Име на автомобила</label>
                    <input type="text" value="{{ old('car_name', $car->car_name) }}" name="car_name" class="form-control" placeholder="Въведете име на автомобила">
                    @error('car_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Brand -->
                <div class="form-group col-md-4 mb-4">
                    <label>Марка</label>
                    <select required name="brand" class="form-control">
                        <option value="" disabled>Изберете марка</option>
                        <option value="BMW" {{ old('brand', $car->brand) == 'BMW' ? 'selected' : '' }}>BMW</option>
                        <option value="Jeep" {{ old('brand', $car->brand) == 'Jeep' ? 'selected' : '' }}>Jeep</option>
                        <option value="Mercedes" {{ old('brand', $car->brand) == 'Mercedes' ? 'selected' : '' }}>Mercedes</option>
                        <option value="Mini" {{ old('brand', $car->brand) == 'Mini' ? 'selected' : '' }}>Mini</option>
                        <option value="Hyundai" {{ old('brand', $car->brand) == 'Hyundai' ? 'selected' : '' }}>Hyundai</option>
                    </select>
                    @error('brand')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Price Per Day -->
                <div class="form-group col-md-4 mb-4">
                    <label>Цена на ден (в евро)</label>
                    <input type="number" value="{{ old('price_per_day', $car->price_per_day) }}" name="price_per_day" class="form-control" placeholder="Въведете цена"
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
                        <option value="Лека кола" {{ old('vehicle_type', $car->vehicle_type) == 'Лека кола' ? 'selected' : '' }}>Лека кола</option>
                        <option value="SUV" {{ old('vehicle_type', $car->vehicle_type) == 'SUV' ? 'selected' : '' }}>SUV</option>
                        <option value="Бус" {{ old('vehicle_type', $car->vehicle_type) == 'Бус' ? 'selected' : '' }}>Бус</option>
                        <option value="Луксозни лимузини" {{ old('vehicle_type', $car->vehicle_type) == 'Луксозни лимузини' ? 'selected' : '' }}>Луксозни лимузини</option>
                    </select>
                    @error('vehicle_type')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Power  -->
                <div class="form-group col-md-4 mb-4">
                    <label>Мощност на автомобила</label>
                    <input type="text"
                        value="{{ old('car_power', $car->car_power) }}"
                        name="car_power" class="form-control"
                        placeholder="Въведете мощност на автомобила">

                    @error('car_power')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group col-md-4 mb-4">
                    <label>Добавете година</label>
                    <select required name="car_year" class="form-control">
                        <option disabled value="">Изберете година</option>
                        <option value="2016" {{ old('car_year', $car->car_year) == '2016' ? 'selected' : '' }}>2016</option>
                        <option value="2017" {{ old('car_year', $car->car_year) == '2017' ? 'selected' : '' }}>2017</option>
                        <option value="2018" {{ old('car_year', $car->car_year) == '2018' ? 'selected' : '' }}>2018</option>
                        <option value="2019" {{ old('car_year', $car->car_year) == '2019' ? 'selected' : '' }}>2019</option>
                        <option value="2020" {{ old('car_year', $car->car_year) == '2020' ? 'selected' : '' }}>2020</option>
                        <option value="2021" {{ old('car_year', $car->car_year) == '2021' ? 'selected' : '' }}>2021</option>
                        <option value="2022" {{ old('car_year', $car->car_year) == '2022' ? 'selected' : '' }}>2022</option>
                        <option value="2023" {{ old('car_year', $car->car_year) == '2023' ? 'selected' : '' }}>2023</option>
                        <option value="2024" {{ old('car_year', $car->car_year) == '2024' ? 'selected' : '' }}>2024</option>
                        <option value="2025" {{ old('car_year', $car->car_year) == '2025' ? 'selected' : '' }}>2025</option>
                        <option value="2026" {{ old('car_year', $car->car_year) == '2026' ? 'selected' : '' }}>2026</option>
                    </select>
                    @error('car_year')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Fuel Type -->
                <div class="form-group col-md-4 mb-4">
                    <label>Вид гориво</label>
                    <select required name="fuel_type" class="form-control">
                        <option disabled value="">Изберете гориво</option>
                        <option value="Дизел" {{ old('fuel_type', $car->fuel_type) == 'Дизел' ? 'selected' : '' }}>Дизел</option>
                        <option value="Бензин" {{ old('fuel_type', $car->fuel_type) == 'Бензин' ? 'selected' : '' }}>Бензин</option>
                        <option value="Хибрид" {{ old('fuel_type', $car->fuel_type) == 'Хибрид' ? 'selected' : '' }}>Хибрид</option>
                        <option value="Изцяло електрическа" {{ old('fuel_type', $car->fuel_type) == 'Изцяло електрическа' ? 'selected' : '' }}>Изцяло електрическа</option>
                    </select>
                    @error('fuel_type')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Max Passengers -->
                <div class="form-group col-md-4 mb-4">
                    <label>Максимален брой пътници</label>
                    <select required name="max_passengers" class="form-control">
                        <option disabled value="">Изберете</option>
                        <option value="3 + 1" {{ old('max_passengers', $car->max_passengers) == '3 + 1' ? 'selected' : '' }}>3 + 1</option>
                        <option value="4 + 1" {{ old('max_passengers', $car->max_passengers) == '4 + 1' ? 'selected' : '' }}>4 + 1</option>
                        <option value="6 + 1" {{ old('max_passengers', $car->max_passengers) == '6 + 1' ? 'selected' : '' }}>6 + 1</option>
                        <option value="8 + 1" {{ old('max_passengers', $car->max_passengers) == '8 + 1' ? 'selected' : '' }}>8 + 1</option>
                    </select>
                    @error('max_passengers')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Doors -->
                <div class="form-group col-md-4 mb-4">
                    <label>Брой врати</label>
                    <select required name="doors" class="form-control">
                        <option disabled value="">Изберете</option>
                        <option value="2" {{ old('doors', $car->doors) == '2' ? 'selected' : '' }}>2</option>
                        <option value="4" {{ old('doors', $car->doors) == '4' ? 'selected' : '' }}>4</option>
                    </select>
                    @error('doors')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Luggage -->
                <div class="form-group col-md-4 mb-4">
                    <label>Брой куфари</label>
                    <select required name="luggage" class="form-control">
                        <option disabled value="">Изберете</option>
                        <option value="2" {{ old('luggage', $car->luggage) == '2' ? 'selected' : '' }}>2</option>
                        <option value="3" {{ old('luggage', $car->luggage) == '3' ? 'selected' : '' }}>3</option>
                        <option value="4" {{ old('luggage', $car->luggage) == '4' ? 'selected' : '' }}>4</option>
                        <option value="5" {{ old('luggage', $car->luggage) == '5' ? 'selected' : '' }}>5</option>
                    </select>
                    @error('luggage')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Main Image -->
                <div class="form-group col-md-6 mb-4">
                    <label>Главна снимка на автомобила</label>
                    @if($car->main_image)
                        <div class="mb-2">
                            <img src="{{ asset('/images/cars/' . $car->main_image) }}" alt="Current Image" style="max-width: 150px; max-height: 100px;">
                            <small class="d-block text-muted">Текуща снимка</small>
                        </div>
                    @endif
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
                    @if($car->gallery_images)
                        <div class="mb-2 d-flex flex-wrap gap-2">
                            @foreach(json_decode($car->gallery_images, true) ?? [] as $image)
                                <img src="{{ asset('/images/cars_gallery/' . $image) }}" alt="Gallery Image" style="max-width: 80px; max-height: 60px;">
                            @endforeach
                            <small class="d-block w-100 text-muted">Текущи снимки в галерията</small>
                        </div>
                    @endif
                    <input type="file" name="gallery_images[]" class="form-control" accept="image/*" multiple>
                    @error('gallery_images')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    @error('gallery_images.*')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Extras -->
                @php
                    $carExtras = old('extras', json_decode($car->extras, true) ?? []);
                @endphp
                <div class="form-group col-md-12 mb-4">
                    <label>Екстри</label>
                    <div class="row mt-2">

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Климатроник" class="form-check-input"
                                    id="climatronic" {{ in_array('Климатроник', $carExtras) ? 'checked' : '' }}>
                                <label class="form-check-label" for="climatronic">Климатроник</label>
                            </div>
                        </div>
                        
                          <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Електрически врати" class="form-check-input"
                                    id="climatronic" {{ in_array('Електрически врати', $carExtras) ? 'checked' : '' }}>
                                <label class="form-check-label" for="climatronic">Климатроник</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Климатик" class="form-check-input"
                                    id="ac" {{ in_array('Климатик', $carExtras) ? 'checked' : '' }}>
                                <label class="form-check-label" for="ac">Климатик</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Подгрев на седалките"
                                    class="form-check-input" id="heated" {{ in_array('Подгрев на седалките', $carExtras) ? 'checked' : '' }}>
                                <label class="form-check-label" for="heated">Подгрев на седалките</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Обдухване на седалките"
                                    class="form-check-input" id="ventilated" {{ in_array('Обдухване на седалките', $carExtras) ? 'checked' : '' }}>
                                <label class="form-check-label" for="ventilated">Обдухване на седалките</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Масаж на седалките"
                                    class="form-check-input" id="massage" {{ in_array('Масаж на седалките', $carExtras) ? 'checked' : '' }}>
                                <label class="form-check-label" for="massage">Масаж на седалките</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Line Assist" class="form-check-input"
                                    id="lineassist" {{ in_array('Line Assist', $carExtras) ? 'checked' : '' }}>
                                <label class="form-check-label" for="lineassist">Line Assist</label>
                            </div>
                        </div>

                        <!-- NEW EXTRAS START -->

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Хладилна жабка"
                                    class="form-check-input" id="coolbox" {{ in_array('Хладилна жабка', $carExtras) ? 'checked' : '' }}>
                                <label class="form-check-label" for="coolbox">Хладилна жабка</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Панорамен таван"
                                    class="form-check-input" id="panorama" {{ in_array('Панорамен таван', $carExtras) ? 'checked' : '' }}>
                                <label class="form-check-label" for="panorama">Панорамен таван</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Електрически багажник"
                                    class="form-check-input" id="electrictrunk" {{ in_array('Електрически багажник', $carExtras) ? 'checked' : '' }}>
                                <label class="form-check-label" for="electrictrunk">Електрически багажник</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Втори ред седалки е с кресла"
                                    class="form-check-input" id="captainseats" {{ in_array('Втори ред седалки е с кресла', $carExtras) ? 'checked' : '' }}>
                                <label class="form-check-label" for="captainseats">Втори ред седалки е с
                                    кресла</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras[]" value="Монитори за задните седалки - TV"
                                    class="form-check-input" id="rearTV" {{ in_array('Монитори за задните седалки - TV', $carExtras) ? 'checked' : '' }}>
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

                <textarea class="mt-5 mb-5" 
                name="car_text1" id="createCar" cols="30" rows="10">{{ old('car_text1', $car->car_text1) }}</textarea>

                @error('car_text1')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <textarea class="mt-5" 
                name="car_text2" id="createCar2" cols="30" rows="10">{{ old('car_text2', $car->car_text2) }}</textarea>

                @error('car_text2')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                
                  <textarea class="mt-5" 
                name="car_text3" id="createCar3" cols="30" rows="10">{{ old('car_text3', $car->car_text3) }}</textarea>

                @error('car_text3')
                    <small class="text-danger">{{ $message }}</small>
                @enderror


                <!-- Submit -->
                <div class="col-lg-12 mt-5">
                    <div class="contact-form-btn">
                        <button type="submit" class="btn-default">Запази новите промени</button>
                    </div>
                </div>

            </div>
            <input type="hidden" name="carId" value="{{$car->id}}">
        </form>


    </div>


</x-frontend-layout>