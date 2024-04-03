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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            
         
            $table->string('type');
            $table->string('address');
            $table->string('price'); // in cents or smallest currency unit
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('area'); // in square meters
            $table->string('floor');
            $table->string('parking'); // number of parking spaces
            $table->longText('description'); // number of parking spaces
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
