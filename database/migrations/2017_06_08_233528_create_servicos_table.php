<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('mes', 20);
            $table->integer(atendimento);
            $table->integer(atoinfracional);
            $table->integer(denunciasrecebidas);
            $table->integer(indiciplinaescolar);
            $table->integer(notificacao);
            $table->integer(representacaoministerio);
            $table->integer(requisicaocreche);
            $table->integer(requisicaosaude);
            $table->integer(requisicaoservicosocial);
            $table->integer(suspeitaabuso);
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
        Schema::dropIfExists('servicos');
    }
}
