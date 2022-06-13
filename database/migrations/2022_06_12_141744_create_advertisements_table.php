<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calendar_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('sector_id');
            $table->unsignedBigInteger('state_id');
            $table->text('description');
            $table->foreign('calendar_id')->references('id')->on('calendar');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('city_id')->references('id')->on('sectors');
            $table->foreign('state_id')->references('id')->on('states');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisements');
    }
};
