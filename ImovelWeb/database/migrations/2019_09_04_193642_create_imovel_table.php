<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('proprietarios_id');
            $table->unsignedInteger('inquilinos_id');
            $table->date('data_aluguel');
            $table->date('data_encerramento');
            $table->float('vlr_aluguel', 8, 2);
            $table->char('disponivel', 1);           
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
        Schema::dropIfExists('imovel');
    }
}
