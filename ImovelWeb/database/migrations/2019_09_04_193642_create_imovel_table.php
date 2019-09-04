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
            $table->string('registro', 13);
            $table->string('categoria',2);
            $table->string('inquilino', 70)->nullable();
            $table->string('proprietario', 70);
            $table->string('corretor')->nullable();
            $table->string('endereco', 80);
            $table->string('bairro', 40);
            $table->string('cidade', 40);
            $table->string('cep', 10);
            $table->string('uf', 2);
            $table->string('status', 5);
            $table->string('valor', 8);
            $table->string('condominio', 8)->nullable();
            $table->string('vagas', 2);
            $table->string('dormitorios', 2);
            $table->string('banheiros', 2);
            $table->string('comodos', 2);
            $table->string('tamanho', 5);
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
