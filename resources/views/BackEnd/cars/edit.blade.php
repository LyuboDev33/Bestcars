<x-frontend-layout>

    @section('seo')
        <title>Табло за управление</title>
    @endsection

    <div class="page-header bg-section parallaxie"
        style="background-image: url('{{ asset('images/page-header-bg.jpg') }}');
               background-size: cover; background-repeat: no-repeat;
               background-attachment: fixed; background-position: center 52.0664px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                            <div class="split-line" style="display: block; text-align: center; position: relative;">
                                <div class="position-relative">
                                    Редактиране на автомобил {{ $carBg->car_name }}
                                </div>
                            </div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
        $extrasBg = old('extras_bg', json_decode($carBg->extras, true) ?? []);
        $extrasEn = old('extras_en', json_decode(optional($carEn)->extras, true) ?? []);
    @endphp



    <div class="contact-us-form container pb-5">

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <strong>Validation failed:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('car.update', $carBg->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="col-lg-12 mt-3 mb-3">
                <div class="contact-form-btn">
                    <button type="submit" class="btn-default">Запази новите промени</button>
                </div>
            </div>

            <div class="row">

                <!-- Car Name - BULGARIAN -->
                <div class="form-group col-md-4 mb-4">
                    <label>Име на автомобила (БГ)</label>
                    <input type="text" value="{{ old('car_name_bg', $carBg->car_name) }}" name="car_name_bg"
                        class="form-control" placeholder="Въведете име на автомобила">
                    @error('car_name_bg')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Car Name - ENGLISH -->
                <div class="form-group col-md-4 mb-4">
                    <label>Car Name (EN)</label>
                    <input type="text" value="{{ old('car_name_en', optional($carEn)->car_name) }}"
                        name="car_name_en" class="form-control" placeholder="Enter car name">
                    @error('car_name_en')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Brand -->
                <div class="form-group col-md-4 mb-4">
                    <label>Марка</label>
                    <select required name="brand" class="form-control">
                        <option value="" disabled>Изберете марка</option>
                        @foreach (['BMW', 'Jeep', 'Mercedes', 'Mini', 'Hyundai'] as $brand)
                            <option value="{{ $brand }}"
                                {{ old('brand', $carBg->brand) == $brand ? 'selected' : '' }}>{{ $brand }}
                            </option>
                        @endforeach
                    </select>
                    @error('brand')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Price Per Day -->
                <div class="form-group col-md-4 mb-4">
                    <label>Цена на ден (в евро)</label>
                    <input type="number" value="{{ old('price_per_day', $carBg->price_per_day) }}"
                        name="price_per_day" class="form-control" placeholder="Въведете цена" step="0.01">
                    @error('price_per_day')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Vehicle Type - BULGARIAN -->
                <div class="form-group col-md-4 mb-4">
                    <label>Вид на автомобила (БГ)</label>
                    <select required name="vehicle_type_bg" class="form-control">
                        <option value="">Изберете вид</option>
                        @foreach (['Лека кола', 'SUV', 'Бус', 'Луксозни лимузини'] as $type)
                            <option value="{{ $type }}"
                                {{ old('vehicle_type_bg', $carBg->vehicle_type) == $type ? 'selected' : '' }}>
                                {{ $type }}</option>
                        @endforeach
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
                        @foreach (['Sedan', 'SUV', 'Van', 'Luxury Limousine'] as $type)
                            <option value="{{ $type }}"
                                {{ old('vehicle_type_en', optional($carEn)->vehicle_type) == $type ? 'selected' : '' }}>
                                {{ $type }}</option>
                        @endforeach
                    </select>
                    @error('vehicle_type_en')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Power - BULGARIAN -->
                <div class="form-group col-md-4 mb-4">
                    <label>Мощност на автомобила (БГ)</label>
                    <input type="text" value="{{ old('car_power_bg', $carBg->car_power) }}" name="car_power_bg"
                        class="form-control" placeholder="Въведете мощност на автомобила">
                    @error('car_power_bg')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Power - ENGLISH -->
                <div class="form-group col-md-4 mb-4">
                    <label>Car Power (EN)</label>
                    <input type="text" value="{{ old('car_power_en', optional($carEn)->car_power) }}"
                        name="car_power_en" class="form-control" placeholder="Enter car power">
                    @error('car_power_en')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Car Year -->
                <div class="form-group col-md-4 mb-4">
                    <label>Добавете година</label>
                    <select required name="car_year" class="form-control">
                        <option disabled value="">Изберете година</option>
                        @foreach (range(2016, 2026) as $year)
                            <option value="{{ $year }}"
                                {{ old('car_year', $carBg->car_year) == $year ? 'selected' : '' }}>{{ $year }}
                            </option>
                        @endforeach
                    </select>
                    @error('car_year')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Fuel Type - BG -->
                <div class="form-group col-md-4 mb-4">
                    <label>Вид гориво (BG)</label>
                    <select required name="fuel_type" class="form-control">
                        <option disabled value="">Изберете гориво</option>
                        @foreach (['Дизел', 'Бензин', 'Хибрид', 'Изцяло електрическа'] as $fuel)
                            <option value="{{ $fuel }}"
                                {{ old('fuel_type', $carBg->fuel_type) == $fuel ? 'selected' : '' }}>
                                {{ $fuel }}</option>
                        @endforeach
                    </select>
                    @error('fuel_type')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Fuel Type - EN -->
                <div class="form-group col-md-4 mb-4">
                    <label>Fuel Type (EN)</label>
                    <select required name="fuel_type_en" class="form-control">
                        <option disabled value="">Select fuel type</option>
                        @foreach (['Diesel', 'Petrol', 'Hybrid', 'Fully Electric'] as $fuel)
                            <option value="{{ $fuel }}"
                                {{ old('fuel_type_en', optional($carEn)->fuel_type) == $fuel ? 'selected' : '' }}>
                                {{ $fuel }}</option>
                        @endforeach
                    </select>
                    @error('fuel_type_en')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Max Passengers -->
                <div class="form-group col-md-4 mb-4">
                    <label>Максимален брой пътници</label>
                    <select required name="max_passengers" class="form-control">
                        <option disabled value="">Изберете</option>
                        @foreach (['3 + 1', '4 + 1', '6 + 1', '8 + 1'] as $p)
                            <option value="{{ $p }}"
                                {{ old('max_passengers', $carBg->max_passengers) == $p ? 'selected' : '' }}>
                                {{ $p }}</option>
                        @endforeach
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
                        @foreach ([2, 4] as $d)
                            <option value="{{ $d }}"
                                {{ old('doors', $carBg->doors) == $d ? 'selected' : '' }}>{{ $d }}</option>
                        @endforeach
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
                        @foreach ([2, 3, 4, 5] as $l)
                            <option value="{{ $l }}"
                                {{ old('luggage', $carBg->luggage) == $l ? 'selected' : '' }}>{{ $l }}
                            </option>
                        @endforeach
                    </select>
                    @error('luggage')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Main Image -->
                <div class="form-group col-md-6 mb-4">
                    <label>Главна снимка на автомобила</label>
                    @if ($carBg->main_image)
                        <div class="mb-2">
                            <img src="{{ asset('/images/cars/' . $carBg->main_image) }}" alt="Current Image"
                                style="max-width: 150px; max-height: 100px;">
                            <small class="d-block text-muted">Текуща снимка</small>
                        </div>
                    @endif
                    <input type="file" name="main_image" class="form-control" accept="image/*">
                    @error('main_image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <!-- Gallery -->
                <div class="form-group col-md-6 mb-4">
                    <label>Галерия на автомобила</label>
                    @if ($carBg->gallery_images)
                        <div class="mb-2 d-flex flex-wrap gap-2">
                            @foreach (json_decode($carBg->gallery_images, true) ?? [] as $image)
                                <img src="{{ asset('/images/cars_gallery/' . $image) }}" alt="Gallery Image"
                                    style="max-width: 80px; max-height: 60px;">
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

                <!-- Extras BG -->
                <div class="form-group col-md-12 mb-4">
                    <label>Екстри (БГ)</label>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Климатроник"
                                    class="form-check-input" id="climatronic_bg"
                                    {{ in_array('Климатроник', $extrasBg) ? 'checked' : '' }}>
                                <label class="form-check-label" for="climatronic_bg">Климатроник</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Климатик" class="form-check-input"
                                    id="ac_bg" {{ in_array('Климатик', $extrasBg) ? 'checked' : '' }}>
                                <label class="form-check-label" for="ac_bg">Климатик</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Подгрев на седалките"
                                    class="form-check-input" id="heated_bg"
                                    {{ in_array('Подгрев на седалките', $extrasBg) ? 'checked' : '' }}>
                                <label class="form-check-label" for="heated_bg">Подгрев на седалките</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Обдухване на седалките"
                                    class="form-check-input" id="ventilated_bg"
                                    {{ in_array('Обдухване на седалките', $extrasBg) ? 'checked' : '' }}>
                                <label class="form-check-label" for="ventilated_bg">Обдухване на седалките</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Масаж на седалките"
                                    class="form-check-input" id="massage_bg"
                                    {{ in_array('Масаж на седалките', $extrasBg) ? 'checked' : '' }}>
                                <label class="form-check-label" for="massage_bg">Масаж на седалките</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Line Assist"
                                    class="form-check-input" id="lineassist_bg"
                                    {{ in_array('Line Assist', $extrasBg) ? 'checked' : '' }}>
                                <label class="form-check-label" for="lineassist_bg">Line Assist</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Хладилна жабка"
                                    class="form-check-input" id="coolbox_bg"
                                    {{ in_array('Хладилна жабка', $extrasBg) ? 'checked' : '' }}>
                                <label class="form-check-label" for="coolbox_bg">Хладилна жабка</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Панорамен таван"
                                    class="form-check-input" id="panorama_bg"
                                    {{ in_array('Панорамен таван', $extrasBg) ? 'checked' : '' }}>
                                <label class="form-check-label" for="panorama_bg">Панорамен таван</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Електрически багажник"
                                    class="form-check-input" id="electrictrunk_bg"
                                    {{ in_array('Електрически багажник', $extrasBg) ? 'checked' : '' }}>
                                <label class="form-check-label" for="electrictrunk_bg">Електрически багажник</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Втори ред седалки е с кресла"
                                    class="form-check-input" id="captainseats_bg"
                                    {{ in_array('Втори ред седалки е с кресла', $extrasBg) ? 'checked' : '' }}>
                                <label class="form-check-label" for="captainseats_bg">Втори ред седалки е с
                                    кресла</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_bg[]" value="Монитори за задните седалки - TV"
                                    class="form-check-input" id="rearTV_bg"
                                    {{ in_array('Монитори за задните седалки - TV', $extrasBg) ? 'checked' : '' }}>
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
                    <label>Extras (EN)</label>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Climatronic"
                                    class="form-check-input" id="climatronic_en"
                                    {{ in_array('Climatronic', $extrasEn) ? 'checked' : '' }}>
                                <label class="form-check-label" for="climatronic_en">Climatronic</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Air conditioning"
                                    class="form-check-input" id="ac_en"
                                    {{ in_array('Air conditioning', $extrasEn) ? 'checked' : '' }}>
                                <label class="form-check-label" for="ac_en">Air conditioning</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Heated seats"
                                    class="form-check-input" id="heated_en"
                                    {{ in_array('Heated seats', $extrasEn) ? 'checked' : '' }}>
                                <label class="form-check-label" for="heated_en">Heated seats</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Ventilated seats"
                                    class="form-check-input" id="ventilated_en"
                                    {{ in_array('Ventilated seats', $extrasEn) ? 'checked' : '' }}>
                                <label class="form-check-label" for="ventilated_en">Ventilated seats</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Massage seats"
                                    class="form-check-input" id="massage_en"
                                    {{ in_array('Massage seats', $extrasEn) ? 'checked' : '' }}>
                                <label class="form-check-label" for="massage_en">Massage seats</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Line Assist"
                                    class="form-check-input" id="lineassist_en"
                                    {{ in_array('Line Assist', $extrasEn) ? 'checked' : '' }}>
                                <label class="form-check-label" for="lineassist_en">Line Assist</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Cooling glovebox"
                                    class="form-check-input" id="coolbox_en"
                                    {{ in_array('Cooling glovebox', $extrasEn) ? 'checked' : '' }}>
                                <label class="form-check-label" for="coolbox_en">Cooling glovebox</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Panoramic roof"
                                    class="form-check-input" id="panorama_en"
                                    {{ in_array('Panoramic roof', $extrasEn) ? 'checked' : '' }}>
                                <label class="form-check-label" for="panorama_en">Panoramic roof</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Electric trunk"
                                    class="form-check-input" id="electrictrunk_en"
                                    {{ in_array('Electric trunk', $extrasEn) ? 'checked' : '' }}>
                                <label class="form-check-label" for="electrictrunk_en">Electric trunk</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Second row captain seats"
                                    class="form-check-input" id="captainseats_en"
                                    {{ in_array('Second row captain seats', $extrasEn) ? 'checked' : '' }}>
                                <label class="form-check-label" for="captainseats_en">Second row captain seats</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="extras_en[]" value="Rear seat monitors - TV"
                                    class="form-check-input" id="rearTV_en"
                                    {{ in_array('Rear seat monitors - TV', $extrasEn) ? 'checked' : '' }}>
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
                    <label for="createCar_bg">Таблица 1 (БГ)</label>
                    <textarea class="mt-3" name="car_text1_bg" id="createCar_bg" cols="30" rows="10">{{ old('car_text1_bg', $carBg->car_text1) }}</textarea>
                    @error('car_text1_bg')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- TABLE 1 - ENGLISH -->
                <div class="form-group col-md-12 mb-4">
                    <label for="createCar_en">Table 1 (EN)</label>
                    <textarea class="mt-3" name="car_text1_en" id="createCar_en" cols="30" rows="10">{{ old('car_text1_en', optional($carEn)->car_text1) }}</textarea>
                    @error('car_text1_en')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- TABLE 2 - BULGARIAN -->
                <div class="form-group col-md-12 mb-4">
                    <label for="createCar2_bg">Таблица 2 (БГ)</label>
                    <textarea class="mt-3" name="car_text2_bg" id="createCar2_bg" cols="30" rows="10">{{ old('car_text2_bg', $carBg->car_text2) }}</textarea>
                    @error('car_text2_bg')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- TABLE 2 - ENGLISH -->
                <div class="form-group col-md-12 mb-4">
                    <label for="createCar2_en">Table 2 (EN)</label>
                    <textarea class="mt-3" name="car_text2_en" id="createCar2_en" cols="30" rows="10">{{ old('car_text2_en', optional($carEn)->car_text2) }}</textarea>
                    @error('car_text2_en')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- CAR TEXT - BULGARIAN -->
                <div class="form-group col-md-12 mb-4">
                    <label for="createCar3_bg">Текст за колите (БГ)</label>
                    <textarea class="mt-3" name="car_text3_bg" id="createCar3_bg" cols="30" rows="10">{{ old('car_text3_bg', $carBg->car_text3) }}</textarea>
                    @error('car_text3_bg')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- CAR TEXT - ENGLISH -->
                <div class="form-group col-md-12 mb-4">
                    <label for="createCar3_en">Car Text (EN)</label>
                    <textarea class="mt-3" name="car_text3_en" id="createCar3_en" cols="30" rows="10">{{ old('car_text3_en', optional($carEn)->car_text3) }}</textarea>
                    @error('car_text3_en')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Submit -->
                <div class="col-lg-12 mt-5">
                    <div class="contact-form-btn">
                        <button type="submit" class="btn-default">Запази новите промени</button>
                    </div>
                </div>

            </div>

            <input type="hidden" name="carBgId" value="{{ $carBg->id }}">
            <input type="hidden" name="carEnId" value="{{ optional($carEn)->id }}">
        </form>
    </div>

</x-frontend-layout>
