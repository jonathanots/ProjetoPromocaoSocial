<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciasconselhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denunciasconselho', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nome', 100);
            $table->char('email', 100);
            $table->char('telefone', 15);
            $table->char('assunto', 100);
            $table->longText('mensagem');
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
        Schema::dropIfExists('denunciasconselho');
    }
}
