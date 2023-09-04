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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover_image')->nullable();
            $table->text('description')->nullable();
            $table->integer('price')->nullable();
            $table->integer('rating')->nullable();
            $table->integer('max_guest')->nullable();
            $table->integer('min_age')->nullable();
            $table->string('duration')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->tinyInteger('type')->nullable()->comment('0: Domestic, 1: International, 2: Car Rental, 3: Event');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
