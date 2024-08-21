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
        Schema::create('landowners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact_person')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('locality');
            $table->string('address');
            $table->string('size');
            $table->string('road_width');
            $table->unsignedTinyInteger('category')->comment('1 = Freehold, 2 = Leasehold');
            $table->unsignedTinyInteger('facing')->comment('1 = North, 2 = South, 3 = East, 4 = West');
            $table->unsignedTinyInteger('feature')->comment('1 = Lakeside, 2 = Corner Plot, 3 = Park View, 4 = Main Road, 5 = Others');
            $table->boolean('is_seen')->default(false)->comment('1 = seen, 0 = not seen');
            $table->boolean('status')->default(1)->comment('1 = active, 0 = inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landowners');
    }
};
