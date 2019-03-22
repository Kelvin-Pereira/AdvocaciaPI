<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvogadoProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advogado_processos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('advogado_id')->unsigned();
            $table->foreign('advogado_id')->references('id')->on('advogados');
            $table->integer('processo_id')->unsigned();
            $table->foreign('processo_id')->references('id')->on('processos');
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
        Schema::dropIfExists('advogado_processos');
    }
}
