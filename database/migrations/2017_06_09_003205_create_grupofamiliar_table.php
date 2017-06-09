<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupofamiliarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupofamiliar', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nome', 100);
            $table->char('nis', 20);
            $table->char('sexo', 1);
            $table->longText('familia');
            $table->char('endereco', 50);
            $table->char('bairro', 50);
            $table->date(datanascimento);
            $table->char('paif', 5);
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
        Schema::dropIfExists('grupofamiliar');
    }
}
