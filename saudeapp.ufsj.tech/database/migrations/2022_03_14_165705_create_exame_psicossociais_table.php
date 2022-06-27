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
        Schema::create('exame_psicossocials', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacients')->onDelete('cascade');

            $table->integer('orientacaoTemporal')->nullable();
            $table->integer('orientacaoTemporal_quest1')->nullable();
            $table->integer('orientacaoTemporal_quest2')->nullable();
            $table->integer('orientacaoTemporal_quest3')->nullable();
            $table->integer('orientacaoTemporal_quest4')->nullable();
            $table->integer('orientacaoTemporal_quest5')->nullable();

            $table->integer('orientacaoEspacial')->nullable();
            $table->integer('orientacaoEspacial_quest1')->nullable();
            $table->integer('orientacaoEspacial_quest2')->nullable();
            $table->integer('orientacaoEspacial_quest3')->nullable();
            $table->integer('orientacaoEspacial_quest4')->nullable();
            $table->integer('orientacaoEspacial_quest5')->nullable();

            $table->integer('memoriaImediata')->nullable();
            $table->integer('memoriaImediata_quest1')->nullable();

            $table->integer('calculo')->nullable();
            $table->integer('calculo_quest1')->nullable();

            $table->integer('evocacaoPalavras')->nullable();
            $table->integer('evocacaoPalavras_quest1')->nullable();

            $table->integer('nomeacao')->nullable();
            $table->integer('nomeacao_quest1')->nullable();

            $table->integer('repeticao')->nullable();
            $table->integer('repeticao_quest1')->nullable();

            $table->integer('comando')->nullable();
            $table->integer('comando_quest1')->nullable();

            $table->integer('leitura')->nullable();
            $table->integer('leitura_quest1')->nullable();

            $table->integer('escreverFrase')->nullable();
            $table->integer('escreverFrase_quest1')->nullable();

            $table->integer('copiarDiagrama')->nullable();
            $table->integer('copiarDiagrama_quest1')->nullable();

            $table->integer('pontuacaoTotalCognicao')->nullable();
            
            $table->string('classificacaoCognicao')->nullable();

            $table->string('comprometimentoCognitivo')->nullable();
            

            $table->integer('humor_quest1')->nullable();
            $table->integer('humor_quest2')->nullable();
            $table->integer('humor_quest3')->nullable();
            $table->integer('humor_quest4')->nullable();
            $table->integer('humor_quest5')->nullable();
            $table->integer('humor_quest6')->nullable();
            $table->integer('humor_quest7')->nullable();
            $table->integer('humor_quest8')->nullable();
            $table->integer('humor_quest9')->nullable();
            $table->integer('humor_quest10')->nullable();
            $table->integer('humor_quest11')->nullable();
            $table->integer('humor_quest12')->nullable();
            $table->integer('humor_quest13')->nullable();
            $table->integer('humor_quest14')->nullable();
            $table->integer('humor_quest15')->nullable();

            $table->integer('pontuacaoTotalHumor')->nullable();
            $table->string('classificacaoHumor')->nullable();

            $table->string('lesoesCorporaisInexplicadas')->nullable();
            $table->string('descuidoHigienePessoal')->nullable();
            $table->string('demoraBuscarAntendimentoMedico')->nullable();
            $table->string('discordanciaDeHistoria')->nullable();
            $table->string('InternacoesFrequentes')->nullable();
            $table->string('AusenciaDeFamiliar')->nullable();
            $table->string('RecusaAVisitaDomiciliar')->nullable();
            $table->string('sinaisViolenciaDomestica')->nullable();

            $table->string('religioso')->nullable();
            $table->string('religiaoAjuda')->nullable();
            $table->string('parteDeComuniddReligiosa')->nullable();
            $table->string('nomeComuniddReligiosa')->nullable();



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
        Schema::dropIfExists('exame_psicossociais');
    }
};
