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
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profession');
            $table->string('email');
            $table->string('phone');
            $table->string('mail_address');
            $table->string('preferred_location');
            $table->string('preferred_size');
            $table->string('no_of_car_parking_requirement');
            $table->string('expected_handover_date');
            $table->unsignedTinyInteger('facing_of_the_apartment')->comment('1 = North, 2 = South, 3 = East, 4 = West');
            $table->string('preferred_floor');
            $table->string('minimum_number_of_bedrooms');
            $table->string('minimum_number_of_bathrooms');
            $table->boolean('is_seen')->default(false)->comment('1 = seen, 0 = not seen');
            $table->boolean('status')->default(true)->comment('1 = active, 0 = inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyers');
    }
};
