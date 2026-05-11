<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->string('car_name');
            $table->string('car_slug');
            $table->string('brand');
            $table->decimal('price_per_day', 10, 2);

            $table->string('vehicle_type');
            $table->string('fuel_type');
            $table->string('max_passengers');
            $table->string('doors');
            $table->string('luggage');
            $table->string('car_power');
            $table->string('car_year');
            $table->longText('car_text1');
            $table->longText('car_text2')->nullable();
            $table->longText('car_text3')->nullable();


            $table->string('main_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->json('extras')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
