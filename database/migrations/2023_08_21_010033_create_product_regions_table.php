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
        Schema::create('product_regions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id');
            $table->char('region_id', 2);
            
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // $table->dropForeign('product_regions_product_id_foreign');
        // $table->dropIndex('product_regions_product_id_index');
        // $table->dropColumn('product_id');
        
        // $table->dropForeign('product_regions_region_id_foreign');
        // $table->dropIndex('product_regions_region_id_index');
        // $table->dropColumn('region_id');

        Schema::dropIfExists('product_regions');
    }
};
