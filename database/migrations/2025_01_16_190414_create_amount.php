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
        Schema::create('amount', function (Blueprint $table) {
            $table->id();
            $table->text('category')->nullable();
            $table->text('city_name')->nullable();
            $table->text('area_name')->nullable();
            $table->text('amount')->nullable();
            $table->enum('status', ['Y', 'N']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights_amount');
    }
};
