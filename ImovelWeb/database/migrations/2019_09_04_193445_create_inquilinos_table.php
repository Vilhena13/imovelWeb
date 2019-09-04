<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquilinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquilinos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 70);
            $table->string('cpf', 11);
            $table->string('rg', 9);
            $table->string('fone',15);
            $table->string('email',50);
            $table->string('imovel',13);
            $table->string('corretor', 70);
            $table->string('creci_corretor', 15)->nullable();
            $table->string('status_pagamento', 8);
            $table->string('contrato',2);
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
        Schema::dropIfExists('inquilinos');
    }
}
