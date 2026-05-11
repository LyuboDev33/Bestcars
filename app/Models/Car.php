<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /** The attributes that are mass assignable. */

    
    protected $fillable = [
        'car_name',
        'car_slug',
        'brand',
        'price_per_day',
        'vehicle_type',
        'fuel_type',
        'max_passengers',
        'doors',
        'luggage',
        'main_image',
        'gallery_images',
        'extras',
        'car_power',
        'car_year',
        'car_text1', 
        'car_text2',
           'car_text3'
    ];
}
