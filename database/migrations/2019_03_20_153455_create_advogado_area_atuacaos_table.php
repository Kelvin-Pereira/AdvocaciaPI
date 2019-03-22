<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvogadoAreaAtuacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advogado_area_atuacaos', function (Blueprint $table) {
            $table->integer('area_atuacao')->unsigned();
            $table->foreign('area_atuacao')->references('id')->on('area_atuacaos');
            $table->integer('advogado')->unsigned();
            $table->foreign('advogado')->references('id')->on('advogados');
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
        Schema::dropIfExists('advogado_area_atuacaos');
    }
}
