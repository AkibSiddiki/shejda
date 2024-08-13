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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_post_id');
            $table->string('fname');
            $table->string('lname');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('Nationality');
            $table->string('email');
            $table->string('phone');
            $table->string('cv');
            $table->boolean('is_seen')->default(0)->comment('1 = seen, 0 = not seen');
            $table->boolean('status')->default(1)->comment('1 = active, 0 = inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
