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
        Schema::create('exame_fisicos', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacients')->onDelete('cascade');

            $table->json('exam_couroCabeludo')->nullable();
            $table->json('exam_olhos')->nullable();
            $table->json('exam_ouvido')->nullable();
            $table->json('exam_boca')->nullable();
            $table->json('exam_pescoco')->nullable();

            $table->json('sisRespiratorio_inspecao')->nullable();
            $table->json('sisRespiratorio_palpacao')->nullable();
            $table->json('sisRespiratorio_percussao')->nullable();
            $table->json('sisRespiratorio_ausculta')->nullable();
            $table->json('sisRespiratorio_outros')->nullable();

            $table->json('sisCardiovascular_inspecao')->nullable();
            $table->json('sisCardiovascular_palpacao')->nullable();
            $table->json('sisCardiovascular_ausculta')->nullable();
            $table->json('sisCardiovascular_outros')->nullable();

            $table->string('sisUrologico_perdaDeUrinaTosseEspirraCarregaPesoRi')->nullable();
            $table->string('sisUrologico_perdaUrinaVontadeDeIrNoBanheiro')->nullable();
            $table->string('sisUrologico_frequenciaUrinaria')->nullable();
            $table->string('sisUrologico_coloracao')->nullable();
            $table->json('sisUrologico_nocturia')->nullable();
            $table->json('sisUrologico_nocturia_qtd')->nullable();
            $table->string('sisUrologico_perdaUrinaDuranteSexo')->nullable();
            $table->string('sisUrologico_usoProtecao')->nullable();
            $table->string('sisUrologico_esvaziamentoIncompleto')->nullable();
            $table->string('sisUrologico_esforcoParaUrinar')->nullable();
            $table->string('sisUrologico_odorUreia')->nullable();
            $table->string('sisUrologico_urgenciaParaBanheiro')->nullable();
            $table->string('sisUrologico_dorAoUrinar')->nullable();
            $table->string('sisUrologico_dorRenal')->nullable();
            $table->string('sisUrologico_globoVesicalPalpavel')->nullable();
            $table->string('sisUrologico_incontinenciaUrinaria')->nullable();

            $table->json('exameMamas')->nullable();

            $table->json('sisGastrointestinal_inpecaoAbdomen')->nullable();
            $table->json('sisGastrointestinal_auscultaAbdominal')->nullable();
            $table->json('sisGastrointestinal_percussao')->nullable();
            $table->json('sisGastrointestinal_palpacao')->nullable();

            $table->json('intCutaneoMucosa')->nullable();

            $table->json('avPes')->nullable();
            $table->json('areaSensibilidadePes')->nullable();
            $table->string('avPes_outros')->nullable();

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
        Schema::dropIfExists('exame_fisicos');
        Schema::table('exame_fisicos', function(Blueprint $table){
            $table->foreignId('exame_id')->constrained()->onDelete('cascade');
        });
    }
};
