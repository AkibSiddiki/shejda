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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('client')->nullable();
            $table->string('architect')->nullable();
            $table->string('location')->nullable();
            $table->string('size')->nullable();
            $table->string('year_completed')->nullable();
            $table->string('categories')->nullable();
            $table->unsignedTinyInteger('property_type')->default(1)->comment('1 = residential, 2 = commercial');
            $table->unsignedTinyInteger('type')->default(1)->comment('1 = upcoming, 2 = ongoing, 3 = completed');
            $table->boolean('status')->default(1)->comment('1 = active, 0 = inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
