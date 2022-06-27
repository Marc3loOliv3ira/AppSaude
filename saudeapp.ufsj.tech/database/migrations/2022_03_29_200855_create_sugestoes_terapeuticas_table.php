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
        Schema::create('sugestoes_terapeuticas', function (Blueprint $table) {
            $table->id();
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacients')->onDelete('cascade');

            $table->integer('form_id')->unsigned();
            $table->foreign('form_id')->references('id')->on('formularios')->onDelete('cascade');

            $table->json('comprometimento_cognitivo')->nullable();
            $table->json('violencia_domestica')->nullable();
            $table->json('dependencia_uma_ou_mais_funcoes')->nullable();
            $table->json('dependencia_parcial')->nullable();
            $table->json('dependencia_total')->nullable();
            $table->json('idoso_risco_fragilizacao')->nullable();
            $table->json('idoso_fragil')->nullable();
            $table->json('baixo_risco_quedas')->nullable();
            $table->json('risco_quedas_moderado')->nullable();
            $table->json('alto_risco_quedas')->nullable();
            $table->json('ambiente_sem_seguranca')->nullable();
            $table->json('hipersonia')->nullable();
            $table->json('insonia')->nullable();
            $table->json('parassonia')->nullable();
            $table->json('incontinencia_urinaria')->nullable();
            $table->json('baixo_peso')->nullable();
            $table->json('sobre_peso')->nullable();
            $table->json('suspeita_depressao')->nullable();
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
        Schema::dropIfExists('sugestoes_terapeuticas');
    }
};
