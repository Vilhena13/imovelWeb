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
            $table->string('endereco',80);
            $table->string('bairro',40);
            $table->string('cidade',40);
            $table->string('cep',10);
            $table->string('uf',2);
            $table->string('fone',15);
            $table->string('email',50);
            $table->string('cpf', 11);
            $table->char('status_pagamento', 1);           
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
