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
        Schema::create('file_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('originalname');
            $table->string('alt_text');
            $table->string('mimetype');
            $table->string('encoding');
            $table->string('path');
            $table->string('destination');
            $table->string('size');
            $table->string('aux');
            $table->string('uploader_id');
            $table->unsignedBigInteger('object_id');
            $table->string('object_type')->comment('Model Namespace, i.e. App\Models\User');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_uploads');
    }
};
