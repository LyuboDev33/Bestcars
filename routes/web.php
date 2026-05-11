<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;



Route::fallback(function () {
    return view('404');
});

Route::get('/change-language/{lang}', function ($lang) {

    $available = ['en', 'bg'];

    if (!in_array($lang, $available)) {
        $lang = 'bg';
    }
    Session::put('locale', $lang);

    // set for текущата заявка
    App::setLocale($lang);

    return redirect()->back();

})->name('change-language');

Route::get('/', [FrontEndController::class, 'home']);
Route::get('/about', [FrontEndController::class, 'about']);
Route::get('/services', [FrontEndController::class, 'service']);
Route::get('/legal/condtions', [FrontEndController::class, 'conditions']);
Route::get('/legal/terms', [FrontEndController::class, 'terms']);


/** Contact routes */
Route::get('/contact', [FrontEndController::class, 'contact']);
Route::post('/contact/form/send', [FrontEndController::class, 'sendContactForm'])->name('contact.form.send');


Route::get('/cars', [CarsController::class, 'home']);
Route::get('/car/{car_slug}', [CarsController::class, 'show']);


Route::middleware('auth')->group(function () {


    Route::prefix('dashboard/cars')->group(function () {
        Route::get('/list', [CarsController::class, 'dashboard'])->name('dashboard');
        Route::get('/list/{id}/edit', [CarsController::class, 'edit']);

        Route::get('/create', [CarsController::class, 'createCarView'])->name('cars.create.view');
        Route::post('/create', [CarsController::class, 'create'])->name('car.create');
        Route::patch('/update', [CarsController::class, 'update'])->name('car.update');
        Route::delete('/delete', [CarsController::class, 'delete'])->name('car.delete');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
