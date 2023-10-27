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
            $table->text('description')->nullable();
            $table->text('itinerary')->nullable();
            $table->text('term_condition')->nullable();
            $table->integer('price')->nullable();
            $table->integer('min_guest')->nullable();
            $table->string('duration')->nullable();
            $table->string('type')->nullable()->comment('TOUR_DOMESTIC, TOUR_INTERNATIONAL, ACCOMODATION, EVENT, TRANSPORTATION');

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
