<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;


class CarsController extends Controller
{
    /** Show cars on front end
     * @return View
     */
    public function home(): View
    {
        $cars = Car::get();


        return view('FrontEnd.cars', [
            'cars' => $cars
        ]);
    }

    /** Show a single car on front end
     * @param int $id
     * @return View
     */
    public function show($car_slug)
    {
        $car = Car::where('car_slug', $car_slug)->first();

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
        $cars = Car::get();

        return view('BackEnd.dashboard', [
            'cars' => $cars
        ]);
    }

    /** Edit a car in the dashboard
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $car = Car::where('id', $id)->first();

        if (!$car) {
            return view('404');
        }

        return view('BackEnd.cars.edit', [
            'car' => $car
        ]);
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
            'car_name' => 'required|string',
            'brand' => 'required|string',
            'price_per_day' => 'required|numeric|min:0',
            'vehicle_type' => 'required|string',
            'fuel_type' => 'required|string',
            'max_passengers' => 'required|string',
            'doors' => 'required',
            'luggage' => 'required',
            'extras' => 'required',
            'car_power' => 'required',
            'car_year' => 'required',
            'car_text1' => 'required',

            // REQUIRED IMAGES
            'main_image' => 'required|image|max:512',
            'gallery_images' => 'required|array|min:1',
            'gallery_images.*' => 'image|max:512',
        ]);


        // Upload main image without spaces
        $imageURL = preg_replace('/\s+/', '', time() . '_' . $request->file('main_image')->getClientOriginalName());
        $request->main_image->move(public_path('/images/cars'), $imageURL);

        // Upload gallery
        $galleryPaths = [];

        foreach ($request->file('gallery_images') as $image) {
            $imageName = preg_replace('/\s+/', '', time() . '_' . $image->getClientOriginalName());
            $image->move(public_path('/images/cars_gallery'), $imageName);
            $galleryPaths[] = $imageName;
        }


        // Create car
        Car::create([
            'car_name' => $validated['car_name'],
            'car_slug' => Str::slug($validated['car_name']),
            'brand' => $validated['brand'],
            'price_per_day' => $validated['price_per_day'],
            'vehicle_type' => $validated['vehicle_type'],
            'fuel_type' => $validated['fuel_type'],
            'max_passengers' => $validated['max_passengers'],
            'doors' => $validated['doors'],
            'luggage' => $validated['luggage'],
            'car_power' => $validated['car_power'],
            'car_year' => $validated['car_year'],
            'car_text1' => $validated['car_text1'],
            'car_text2' => $request->car_text2,
            'car_text3' => $request->car_text3,

            'main_image' => $imageURL,
            'gallery_images' => json_encode($galleryPaths),
            'extras' => json_encode($request->extras ?? []),
        ]);

        return redirect()->route('cars.create.view')->with('success', 'Car added successfully.');
    }

    /** Update a car
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {

        $id = $request->carId;

        $car = Car::where('id', $id)->first();

        if (!$car) {
            return redirect()->route('cars.create.view')->with('noSuchCar', 'Няма такъв автомобил.');
        }

        $validated = $request->validate([
            'car_name' => 'required|string',
            'brand' => 'required|string',
            'price_per_day' => 'required|numeric|min:0',
            'vehicle_type' => 'required|string',
            'fuel_type' => 'required|string',
            'max_passengers' => 'required|string',
            'doors' => 'required',
            'luggage' => 'required',
            'extras' => 'required',
            'car_power' => 'required',
            'car_year' => 'required',
            'car_text1' => 'required',

            // OPTIONAL IMAGES FOR UPDATE
            'main_image' => 'nullable|image|max:512',
            'gallery_images' => 'nullable|array|min:1',
            'gallery_images.*' => 'image|max:512',
        ]);

        // Prepare update data
        $updateData = [
            'car_name' => $validated['car_name'],
            'car_slug' => Str::slug($validated['car_name']),
            'brand' => $validated['brand'],
            'price_per_day' => $validated['price_per_day'],
            'vehicle_type' => $validated['vehicle_type'],
            'fuel_type' => $validated['fuel_type'],
            'max_passengers' => $validated['max_passengers'],
            'doors' => $validated['doors'],
            'luggage' => $validated['luggage'],
            'car_power' => $validated['car_power'],
            'car_year' => $validated['car_year'],
            'car_text1' => $validated['car_text1'],
            'car_text2' => $request->car_text2,
            'car_text3' => $request->car_text3,
            'extras' => json_encode($request->extras ?? []),
        ];

        // Upload main image if provided
        if ($request->hasFile('main_image')) {
            $imageURL = preg_replace('/\s+/', '', time() . '_' . $request->file('main_image')->getClientOriginalName());
            $request->main_image->move(public_path('/images/cars'), $imageURL);
            $updateData['main_image'] = $imageURL;
        }

        // Upload gallery images if provided
        if ($request->hasFile('gallery_images')) {
            $galleryPaths = [];

            foreach ($request->file('gallery_images') as $image) {
                $imageName = preg_replace('/\s+/', '', time() . '_' . $image->getClientOriginalName());
                $image->move(public_path('/images/cars_gallery'), $imageName);
                $galleryPaths[] = $imageName;
            }

            $updateData['gallery_images'] = json_encode($galleryPaths);
        }

        // Update car
        $car->update($updateData);

        return redirect('/dashboard/cars/list/' . $car->id . '/edit')->with('successUpdate', 'Автомобилът е редактиран успешно.');
    }

    /** Delete a car
     * @param Request $request
     * @return RedirectResponse
     */
    public function delete(Request $request)
    {
        $id = $request->modalCarId;

        $car = Car::where('id', $id)->first();

        if (!$car) {
            return redirect()->route('cars.create.view')->with('noSuchCar', 'Няма такъв автомобил.');
        }

        $car->delete();

        return redirect()->route('cars.create.view')->with('successCarDeletion', 'Колата беше изтрита успешно');
    }
}
