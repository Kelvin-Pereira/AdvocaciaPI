<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('valor_causa',30)->nullable();
            $table->string('assunto',100);
            $table->integer('numero_processo');
            $table->integer('cliente_id')->unsigned(); 
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->integer('tipo_processo')->unsigned(); 
            $table->foreign('tipo_processo')->references('id')->on('tipo_processos');
            $table->integer('vara_id')->unsigned(); 
            $table->foreign('vara_id')->references('id')->on('varas');
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
        Schema::dropIfExists('processos');
    }
}
