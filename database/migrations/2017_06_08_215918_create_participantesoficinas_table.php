<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesoficinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantesoficinas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nome', 100);
            $table->integer(cpf);
            $table->char('oficina', 50);
            $table->char('endereco', 100);
            $table->char('telefone', 15);
         	$table->char('bairro', 50);
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
        Schema::dropIfExists('participantesoficinas');
    }
}
