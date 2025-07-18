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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->integer('uuid')->unique();
            $table->integer('report_nub')->unique();
            $table->text('qty')->nullable();
            $table->text('owner_name')->nullable();
            $table->text('driver_name')->nullable();
            $table->text('will_take')->nullable();
            $table->text('item_info')->nullable();
            $table->text('date')->nullable();
            $table->text('particular_name')->nullable();
            $table->text('village')->nullable();
            $table->text('vihicle_number')->nullable();
            $table->text('transport_fare')->nullable();
            $table->text('filling_charge')->nullable();
            $table->text('receipt_charge')->nullable();
            $table->text('commission_a')->nullable();
            $table->text('market_hamali_charge_b')->nullable();
            $table->text('commission_taken_c')->nullable();
            $table->text('advance_commission')->nullable();
            $table->text('remaring_commission')->nullable();
            $table->text('total')->nullable();
            $table->text('parent')->nullable();
            $table->text('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
