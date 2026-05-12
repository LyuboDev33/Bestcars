<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;


class CarsController extends Controller
{
    /** Show cars on front end
     * @return View
     */
    public function home(): View
    {
        $lang = app()->getLocale();
        $cars = Car::orderBy('id', 'desc')
        ->where('lang', $lang)
        ->get();

        return view('FrontEnd.cars', [
            'cars' => $cars
        ]);
    }

    /** Show a single car on front end
     * @param int $car_slug
     * @return View
     */
    public function show($car_slug)
    {
        $lang = app()->getLocale();
        $car = Car::where('car_slug', $car_slug)
        ->where('lang', $lang)
        ->first();

        if (!$car) {
            return view('car-not-found');
        }

        return view('FrontEnd.car-show', [
            'car' => $car
        ]);
    }

    /** Show all cars in the dashboard */
    public function dashboard()
    {
        $lang = app()->getLocale();

        $cars = Car::orderBy('id', 'desc')
            ->where('lang', $lang)
            ->get()
            ->unique('car_slug')
            ->values();

        return view('BackEnd.dashboard', [
            'cars' => $cars
        ]);
    }

    /** Edit a car in the dashboard
     * @param int $car_slug
     * @return View
     */
    public function edit($car_slug)
    {
        $carBg = Car::where('car_slug', $car_slug)
            ->where('lang', 'bg')->first();

        $carEn = Car::where('car_slug', $car_slug)
            ->where('lang', 'en')->first();

        if (!$carBg || !$carEn) {
            return view('404');
        }

        return view('BackEnd.cars.edit', compact('carBg', 'carEn'));
    }



    /** Create a car view */
    public function createCarView()
    {
        return view('BackEnd.cars.create');
    }

    /** Create a car
     * @param Request $request
     * @return RedirectResponse
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            // ===== Споделени полета =====
            'brand'          => 'required|string',
            'price_per_day'  => 'required|numeric|min:0',
            'car_year'       => 'required',
            'max_passengers' => 'required|string',
            'doors'          => 'required',
            'luggage'        => 'required',

            // ===== BG полета =====
            'car_name_bg'     => 'required|string|unique:cars,car_name',
            'vehicle_type_bg' => 'required|string',
            'fuel_type'       => 'required|string',
            'car_power_bg'    => 'required',
            'car_text1_bg'    => 'required',
            'extras_bg'       => 'required|array|min:1',

            // ===== EN полета =====
            'car_name_en'     => 'required|string|unique:cars,car_name',
            'vehicle_type_en' => 'required|string',
            'fuel_type_en'    => 'required|string',
            'car_power_en'    => 'required',
            'car_text1_en'    => 'required',
            'extras_en'       => 'required|array|min:1',

            'main_image'        => 'required|image|max:512',
            'gallery_images'    => 'required|array|min:1',
            'gallery_images.*'  => 'image|max:512',
        ], [
            'car_name_bg.unique' => 'Вече съществува автомобил с това име на български.',
            'car_name_en.unique' => 'Вече съществува автомобил с това име на английски.',
        ]);
        // ===== Качване на главната снимка =====
        $imageURL = preg_replace('/\s+/', '', time() . '_' . $request->file('main_image')->getClientOriginalName());
        $request->main_image->move(public_path('/images/cars'), $imageURL);

        // ===== Качване на галерията =====
        $galleryPaths = [];
        foreach ($request->file('gallery_images') as $image) {
            $imageName = preg_replace('/\s+/', '', time() . '_' . $image->getClientOriginalName());
            $image->move(public_path('/images/cars_gallery'), $imageName);
            $galleryPaths[] = $imageName;
        }

        $shared = [
            'brand'          => $validated['brand'],
            'price_per_day'  => $validated['price_per_day'],
            'car_year'       => $validated['car_year'],
            'max_passengers' => $validated['max_passengers'],
            'doors'          => $validated['doors'],
            'luggage'        => $validated['luggage'],
            'main_image'     => $imageURL,
            'gallery_images' => json_encode($galleryPaths),
        ];

        Car::create(array_merge($shared, [
            'lang'           => 'bg',
            'car_name'       => $validated['car_name_bg'],
            'car_slug'       => Str::slug($validated['car_name_bg']),
            'vehicle_type'   => $validated['vehicle_type_bg'],
            'fuel_type'      => $validated['fuel_type'],
            'car_power'      => $validated['car_power_bg'],
            'car_text1'      => $validated['car_text1_bg'],
            'car_text2'      => $request->car_text2_bg,
            'car_text3'      => $request->car_text3_bg,
            'extras'         => json_encode($validated['extras_bg']),
        ]));

        Car::create(array_merge($shared, [
            'lang'           => 'en',
            'car_name'       => $validated['car_name_en'],
            'car_slug'       => Str::slug($validated['car_name_bg']),
            'vehicle_type'   => $validated['vehicle_type_en'],
            'fuel_type'      => $validated['fuel_type_en'],
            'car_power'      => $validated['car_power_en'],
            'car_text1'      => $validated['car_text1_en'],
            'car_text2'      => $request->car_text2_en,
            'car_text3'      => $request->car_text3_en,
            'extras'         => json_encode($validated['extras_en']),
        ]));

        return redirect()->route('cars.create.view')->with('success', 'Car added successfully.');
    }

    /** Update a car
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $carBg = Car::find($request->carBgId);
        $carEn = Car::find($request->carEnId);

        if (!$carBg || !$carEn) {
            return redirect()->route('cars.create.view')->with('noSuchCar', 'Няма такъв автомобил.');
        }

        $validated = $request->validate([
            // ===== Споделени полета =====
            'brand'          => 'required|string',
            'price_per_day'  => 'required|numeric|min:0',
            'car_year'       => 'required',
            'max_passengers' => 'required|string',
            'doors'          => 'required',
            'luggage'        => 'required',

            // ===== BG полета =====
            'car_name_bg' => [
                'required',
                'string',
                Rule::unique('cars', 'car_name')
                    ->ignore($carBg->id)
                    ->where('lang', 'bg'),
            ],
            'vehicle_type_bg' => 'required|string',
            'fuel_type'       => 'required|string',
            'car_power_bg'    => 'required',
            'car_text1_bg'    => 'required',
            'extras_bg'       => 'required|array|min:1',

            // ===== EN полета =====
            'car_name_en' => ['required', 'string',
                Rule::unique('cars', 'car_name')
                    ->ignore($carEn->id)
                    ->where('lang', 'en'),
            ],
            'vehicle_type_en' => 'required|string',
            'fuel_type_en'    => 'required|string',
            'car_power_en'    => 'required',
            'car_text1_en'    => 'required',
            'extras_en'       => 'required|array|min:1',

            // ===== Снимки (опционални при update) =====
            'main_image'       => 'nullable|image|max:512',
            'gallery_images'   => 'nullable|array|min:1',
            'gallery_images.*' => 'image|max:512',
        ], [
            'car_name_bg.unique' => 'Вече съществува автомобил с това име на български.',
            'car_name_en.unique' => 'Вече съществува автомобил с това име на английски.',
        ]);


        // ===== Споделени данни (отиват и в двата записа) =====
        $shared = [
            'brand'          => $validated['brand'],
            'price_per_day'  => $validated['price_per_day'],
            'car_year'       => $validated['car_year'],
            'max_passengers' => $validated['max_passengers'],
            'doors'          => $validated['doors'],
            'luggage'        => $validated['luggage'],
        ];

        // ===== Главна снимка (ако е качена нова) =====
        if ($request->hasFile('main_image')) {
            $imageURL = preg_replace('/\s+/', '', time() . '_' . $request->file('main_image')->getClientOriginalName());
            $request->main_image->move(public_path('/images/cars'), $imageURL);
            $shared['main_image'] = $imageURL;
        }

        // ===== Галерия (ако са качени нови) =====
        if ($request->hasFile('gallery_images')) {
            $galleryPaths = [];
            foreach ($request->file('gallery_images') as $image) {
                $imageName = preg_replace('/\s+/', '', time() . '_' . $image->getClientOriginalName());
                $image->move(public_path('/images/cars_gallery'), $imageName);
                $galleryPaths[] = $imageName;
            }
            $shared['gallery_images'] = json_encode($galleryPaths);
        }

        // ===== Update BG запис =====
        $carBg->update(array_merge($shared, [
            'car_name'     => $validated['car_name_bg'],
            'car_slug'     => Str::slug($validated['car_name_bg']),
            'vehicle_type' => $validated['vehicle_type_bg'],
            'fuel_type'    => $validated['fuel_type'],
            'car_power'    => $validated['car_power_bg'],
            'car_text1'    => $validated['car_text1_bg'],
            'car_text2'    => $request->car_text2_bg,
            'car_text3'    => $request->car_text3_bg,
            'extras'       => json_encode($validated['extras_bg']),
        ]));

        // ===== Update EN запис =====
        $carEn->update(array_merge($shared, [
            'car_name'       => $validated['car_name_en'],
            'car_slug'       => Str::slug($validated['car_name_bg']),
            'vehicle_type'   => $validated['vehicle_type_en'],
            'fuel_type'      => $validated['fuel_type_en'],
            'car_power'      => $validated['car_power_en'],
            'car_text1'      => $validated['car_text1_en'],
            'car_text2'      => $request->car_text2_en,
            'car_text3'      => $request->car_text3_en,
            'extras'       => json_encode($validated['extras_en']),
        ]));

        return redirect('/dashboard/cars/list/' . $carBg->car_slug . '/edit')
            ->with('successUpdate', 'Автомобилът е редактиран успешно.');
    }

    /** Delete a car
     * @param Request $request
     * @return RedirectResponse
     */
    public function delete(Request $request)
    {
        $slug = $request->carSlug;

        $cars = Car::where('car_slug', $slug)->get();

        if ($cars->isEmpty()) {
            return redirect()
                ->route('dashboard')
                ->with('noSuchCar', 'Няма такъв автомобил.');
        }

        foreach ($cars as $car) {
            $car->delete();
        }

        return redirect()
            ->route('dashboard')
            ->with('successCarDeletion', 'Колата беше изтрита успешно');
    }
}
