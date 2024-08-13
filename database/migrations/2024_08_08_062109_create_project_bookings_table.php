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
        Schema::create('project_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('message')->nullable();
            $table->boolean('status')->default(1)->comment('1 = active, 0 = inactive');
            $table->boolean('is_seen')->default(0)->comment('1 = seen, 0 = not seen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_bookings');
    }
};
