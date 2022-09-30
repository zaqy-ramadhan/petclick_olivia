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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('pet_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('address');
            $table->string('city');
            $table->date('app_date');
            $table->integer('session');
            $table->integer('branch');
            $table->string('notelp');
            // $table->string('pet');
            $table->integer('petsex');
            $table->integer('petages');
            $table->integer('petweights');
            $table->string('detail');
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
        Schema::dropIfExists('appointments');
    }
};
