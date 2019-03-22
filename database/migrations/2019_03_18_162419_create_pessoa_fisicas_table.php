<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaFisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_fisicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cpf',18);
            $table->date('data_nascimento');
            $table->string('estato_civil',15);
            $table->string('escolaridade',15);
            $table->string('profissao',25)->nullable();
            $table->string('sexo',1);
            $table->string('nome_mae',60);
            $table->string('nome_pai',60);
            $table->integer('cliente_id')->unsigned(); 
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->integer('etinia_id')->unsigned(); 
            $table->foreign('etinia_id')->references('id')->on('etinias');
            $table->softDeletes();
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
        Schema::dropIfExists('pessoa_fisicas');
    }
}
