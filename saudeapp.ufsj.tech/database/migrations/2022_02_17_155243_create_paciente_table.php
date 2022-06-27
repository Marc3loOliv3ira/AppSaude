<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nome')->nullable();
            $table->date('dataNascimento')->nullable();
            $table->string('sexo')->nullable();
            $table->string('estadoCivil')->nullable();
            $table->string('raca')->nullable();
            $table->string('endereco')->nullable();
            $table->string('ubsResponsavel')->nullable();
            $table->string('numeroUBS')->nullable();
            $table->string('nomeResponsavel')->nullable();
            $table->string('grauParentesco')->nullable();
            $table->string('contatoResponsavel')->nullable();
            $table->string('moradia')->nullable();
            $table->string('localizacao')->nullable();
            $table->string('anosDeEstudo')->nullable();
            $table->string('ocupacao')->nullable();
            $table->string('fRenda')->nullable();
            $table->json('condSaude')->nullable();
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacients');
    }
};
