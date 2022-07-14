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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('photo', 500);
            $table->integer('price');
            $table->integer('weight');
            $table->string('desc', 200);
            $table->integer('cal');
            $table->integer('carbon');
            $table->integer('fats');
            $table->integer('protein');
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('categories');
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
        Schema::dropIfExists('items');
    }
};
