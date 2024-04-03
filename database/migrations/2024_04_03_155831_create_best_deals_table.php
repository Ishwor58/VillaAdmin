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
        Schema::create('best_deals', function (Blueprint $table) {
            $table->id();
            $table->string('type');// Apartment, Villa House, Penthouse, etc.
            $table->string('total_flat_space'); // in square meters
            $table->string('floor_number');
            $table->string('number_of_rooms');
            $table->string('parking_available');
            $table->string('payment_process'); // Bank, etc.
            $table->longText('additional_info');
            $table->string('img');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('best_deals');
    }
};
