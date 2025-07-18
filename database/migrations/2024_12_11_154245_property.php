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
        Schema::create('property', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('slug')->nullable();
            $table->text('location')->nullable();
            $table->text('price')->nullable();
            $table->text('gallery')->nullable();
            $table->text('thumbnail')->nullable();
            $table->text('purpose')->nullable();
            $table->text('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('arrea')->nullable();
            $table->string('furnished_status')->nullable();
            $table->string('more_detail')->nullable();
            $table->string('construction_age')->nullable();
            $table->string('property_description')->nullable();
            $table->string('additional_description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_tags')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
