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
        Schema::create('revista', function (Blueprint $table) {
            //
            $table->increments("id");
            $table->string('nombre');
            $table->integer('num_revista');
            $table->date('fecha_edicion');
            $table->integer('num_paginas');
            $table->string('editorial');
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
        Schema::dropIfExists('revista');
    }
};
