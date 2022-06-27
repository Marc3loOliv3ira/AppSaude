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
        Schema::create('exame_funcionals', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacients')->onDelete('cascade');

            $table->integer('banhoDependencia')->nullable();
            $table->integer('vestirseDependencia')->nullable();
            $table->integer('usoVasoSanitarioDpendencia')->nullable();
            $table->integer('transferenciaDependencia')->nullable();
            $table->integer('continenciaDependencia')->nullable();
            $table->integer('alimentarseDependencia')->nullable();
            $table->integer('ptTotalAVD')->nullable();
            $table->string('interpretacaoAVD')->nullable();

            $table->integer('usoTelefoneDependencia')->nullable();
            $table->integer('viagensDependencia')->nullable();
            $table->integer('comprasDependencia')->nullable();
            $table->integer('preparoRefeicoesDependencia')->nullable();
            $table->integer('trabalhoDomesticoDependencia')->nullable();
            $table->integer('usoMedicamentoDependencia')->nullable();
            $table->integer('manuseioDinheiroDependencia')->nullable();
            $table->integer('ptTotalAIVD')->nullable();
            $table->string('interpretacaoAIVD')->nullable();

            $table->integer('idade')->nullable();
            $table->integer('autopercepcaoSaude')->nullable();

            $table->integer('limitacaoFisica')->nullable();
            $table->integer('limitacaoFisica_quest1')->nullable();
            $table->integer('limitacaoFisica_quest2')->nullable();
            $table->integer('limitacaoFisica_quest3')->nullable();
            $table->integer('limitacaoFisica_quest4')->nullable();
            $table->integer('limitacaoFisica_quest5')->nullable();
            $table->integer('limitacaoFisica_quest6')->nullable();

            $table->integer('incapacidades')->nullable();
            $table->integer('incapacidades_quest1')->nullable();
            $table->integer('incapacidades_quest2')->nullable();
            $table->integer('incapacidades_quest3')->nullable();
            $table->integer('incapacidades_quest4')->nullable();
            $table->integer('incapacidades_quest5')->nullable();
            $table->integer('incapacidades_quest1_1')->nullable();
            $table->integer('incapacidades_quest2_1')->nullable();
            $table->integer('incapacidades_quest3_1')->nullable();
            $table->integer('incapacidades_quest4_1')->nullable();
            $table->integer('incapacidades_quest5_1')->nullable();
            $table->integer('incapacidades_quest1_2')->nullable();
            $table->integer('incapacidades_quest2_2')->nullable();
            $table->integer('incapacidades_quest3_2')->nullable();
            $table->integer('incapacidades_quest4_2')->nullable();
            $table->integer('incapacidades_quest5_2')->nullable();

            $table->integer('ptTotalVES')->nullable();
            $table->string('estratificacaoVES')->nullable();

            $table->string('av_mobilidade')->nullable();

            $table->string('areaLocomocao_areaLocomocaoDesimpedida')->nullable();
            $table->string('areaLocomocao_barrasDeApoio')->nullable();
            $table->string('areaLocomocao_pisosUniformesTapetesFixos')->nullable();
            $table->string('iluminacao_presencaIluminacao')->nullable();
            $table->string('iluminacao_interruptoresAcessiveis')->nullable();
            $table->string('banheiro_areaChuveiroAntiderrapante')->nullable();
            $table->string('banheiro_boxAberturaFacil')->nullable();
            $table->string('cozinhaEQuarto_camaBoa')->nullable();
            $table->string('cozinhaEQuarto_armariosBaixos')->nullable();
            $table->string('escada_pisoAntiderrapante')->nullable();
            $table->string('escada_corrimaoDoisLados')->nullable();
            $table->string('ambienteSemSeguranca')->nullable();

            $table->string('hiperssonia')->nullable();
            $table->string('insonia')->nullable();
            $table->string('parassonia')->nullable();

            $table->float('IMC')->nullable();
            $table->float('peso')->nullable();
            $table->float('altura')->nullable();
            $table->string('classificacaoNutricional')->nullable();

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
        Schema::dropIfExists('exame_funcionais');
    }
};
