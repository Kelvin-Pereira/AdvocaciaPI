<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvogadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advogados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',60);
            $table->integer('registro_oab');
            $table->string('email',60);
            $table->string('telefone1',16);
            $table->string('telefone2',16);
            $table->integer('nivel_acesso_id')->unsigned();
            $table->foreign('nivel_acesso_id')->references('id')->on('nivel_acessos');
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
        Schema::dropIfExists('advogados');
    }
}
