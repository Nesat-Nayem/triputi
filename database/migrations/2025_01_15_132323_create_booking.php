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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->integer('uuid')->unique();
            $table->text('will_sand')->nullable();
            $table->text('will_take')->nullable();
            $table->text('date')->nullable();
            $table->text('item_name')->nullable();
            $table->text('phone')->nullable();
            $table->text('category')->nullable();
            $table->text('city')->nullable();
            $table->text('area')->nullable();
            $table->text('pincode')->nullable();
            $table->text('pincode')->nullable();
            $table->text('qty')->nullable();
            $table->text('transportation_fare')->nullable();
            $table->text('filled_up')->nullable();
            $table->text('receipt_charge')->nullable();
            $table->text('we_attacked')->nullable();
            $table->text('total')->nullable();
            $table->text('billed_by')->nullable();
            $table->text('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
