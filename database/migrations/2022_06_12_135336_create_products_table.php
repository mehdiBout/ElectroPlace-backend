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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('categ_id');
            $table->unsignedBigInteger('user_id');
            $table->float('price');
            $table->integer('stockage')->nullable();
            $table->boolean('active')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('categ_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('products');
    }
};
