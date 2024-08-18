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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedTinyInteger('type')->comment('1 = Full time, 2 = Part time, 3 = Internship');
            $table->string('location');
            $table->unsignedInteger('salary');
            $table->boolean('is_negotiable')->default(0)->comment('1 = negotiable, 0 = fixed');
            $table->unsignedSmallInteger('experience')->comment('in years');
            $table->unsignedTinyInteger('expertise')->comment('1 = Beginner, 2 = Intermediate, 3 = Expert');
            $table->date('due_date');
            $table->text('overview')->nullable();
            $table->text('description')->nullable();
            $table->text('responsibilities')->nullable();
            $table->text('required_skills')->nullable();
            $table->text('benefits')->nullable();
            $table->boolean('status')->default(1)->comment('1 = active, 0 = inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
