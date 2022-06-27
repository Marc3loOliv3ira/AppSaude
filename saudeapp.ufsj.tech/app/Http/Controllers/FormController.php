<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ExameFisico;
use App\Models\ExamePsicossocial;
use App\Models\ExameFuncional;
use App\Models\Formulario;
use App\Models\Pacient;
use App\Models\SugestoesTerapeuticas;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{

    public function create($id)
    {
        $pacient = Pacient::findOrFail($id);

        return view('formulario.create01', ['pacient' => $pacient]);
    }

    public function store(Request $request)
    {
        $formExFisico = new ExameFisico;
        $formExPsicossocial = new ExamePsicossocial;
        $formExFuncional = new ExameFuncional;
        $formulario = new Formulario;

        $formExFisico->exam_couroCabeludo = $request->exam_couroCabeludo;
        $formExFisico->exam_olhos = $request->exam_olhos;
        $formExFisico->exam_ouvido = $request->exam_ouvido;
        $formExFisico->exam_boca = $request->exam_boca;
        $formExFisico->exam_pescoco = $request->exam_pescoco;

        $formExFisico->sisRespiratorio_inspecao = $request->sisRespiratorio_inspecao;
        $formExFisico->sisRespiratorio_palpacao = $request->sisRespiratorio_palpacao;
        $formExFisico->sisRespiratorio_percussao = $request->sisRespiratorio_percussao;
        $formExFisico->sisRespiratorio_ausculta = $request->sisRespiratorio_ausculta;
        $formExFisico->sisRespiratorio_outros = $request->sisRespiratorio_outros;

        $formExFisico->sisCardiovascular_inspecao = $request->sisCardiovascular_inspecao;
        $formExFisico->sisCardiovascular_palpacao = $request->sisCardiovascular_palpacao;
        $formExFisico->sisCardiovascular_ausculta = $request->sisCardiovascular_ausculta;
        $formExFisico->sisCardiovascular_outros = $request->sisCardiovascular_outros;

        $formExFisico->sisUrologico_perdaDeUrinaTosseEspirraCarregaPesoRi = $request->sisUrologico_perdaDeUrinaTosseEspirraCarregaPesoRi;
        $formExFisico->sisUrologico_perdaUrinaVontadeDeIrNoBanheiro = $request->sisUrologico_perdaUrinaVontadeDeIrNoBanheiro;
        $formExFisico->sisUrologico_frequenciaUrinaria = $request->sisUrologico_frequenciaUrinaria;
        $formExFisico->sisUrologico_coloracao = $request->sisUrologico_coloracao;
        $formExFisico->sisUrologico_nocturia = $request->sisUrologico_nocturia;
        $formExFisico->sisUrologico_nocturia_qtd = $request->sisUrologico_nocturia_qtd;
        $formExFisico->sisUrologico_perdaUrinaDuranteSexo = $request->sisUrologico_perdaUrinaDuranteSexo;
        $formExFisico->sisUrologico_usoProtecao = $request->sisUrologico_usoProtecao;
        $formExFisico->sisUrologico_esvaziamentoIncompleto = $request->sisUrologico_esvaziamentoIncompleto;
        $formExFisico->sisUrologico_esforcoParaUrinar = $request->sisUrologico_esforcoParaUrinar;
        $formExFisico->sisUrologico_odorUreia = $request->sisUrologico_odorUreia;
        $formExFisico->sisUrologico_urgenciaParaBanheiro = $request->sisUrologico_urgenciaParaBanheiro;
        $formExFisico->sisUrologico_dorAoUrinar = $request->sisUrologico_dorAoUrinar;
        $formExFisico->sisUrologico_dorRenal = $request->sisUrologico_dorRenal;
        $formExFisico->sisUrologico_globoVesicalPalpavel = $request->sisUrologico_globoVesicalPalpavel;

        if($request->sisUrologico_perdaDeUrinaTosseEspirraCarregaPesoRi == 'sim' || $request->sisUrologico_perdaUrinaVontadeDeIrNoBanheiro == 'sim' || $request->sisUrologico_nocturia == 'sim' || $request->sisUrologico_perdaUrinaDuranteSexo == 'sim' || $request->sisUrologico_usoProtecao == 'sim' || $request->sisUrologico_esvaziamentoIncompleto == 'sim' || $request->sisUrologico_esforcoParaUrinar == 'sim' || $request->sisUrologico_odorUreia == 'sim' || $request->sisUrologico_urgenciaParaBanheiro == 'sim' || $request->sisUrologico_dorAoUrinar == 'sim' || $request->sisUrologico_dorRenal == 'sim' || $request->sisUrologico_globoVesicalPalpavel == 'sim'){
            $formExFisico->sisUrologico_incontinenciaUrinaria = 'Incontinência urinária';
        }

        $formExFisico->exameMamas = $request->exameMamas;

        $formExFisico->sisGastrointestinal_inpecaoAbdomen = $request->sisGastrointestinal_inpecaoAbdomen;
        $formExFisico->sisGastrointestinal_auscultaAbdominal = $request->sisGastrointestinal_auscultaAbdominal;
        $formExFisico->sisGastrointestinal_percussao = $request->sisGastrointestinal_percussao;
        $formExFisico->sisGastrointestinal_palpacao = $request->sisGastrointestinal_palpacao;

        $formExFisico->intCutaneoMucosa = $request->intCutaneoMucosa;

        $formExFisico->avPes = $request->avPes;
        $formExFisico->areaSensibilidadePes = $request->areaSensibilidadePes;
        $formExFisico->avPes_outros = $request->avPes_outros;

        $formExFisico->paciente_id = $request->paciente_id;

        $formExPsicossocial->paciente_id = $request->paciente_id;

        $formExPsicossocial->orientacaoTemporal_quest1 = $request->orientacaoTemporal_quest1;
        $formExPsicossocial->orientacaoTemporal_quest2 = $request->orientacaoTemporal_quest2;
        $formExPsicossocial->orientacaoTemporal_quest3 = $request->orientacaoTemporal_quest3;
        $formExPsicossocial->orientacaoTemporal_quest4 = $request->orientacaoTemporal_quest4;
        $formExPsicossocial->orientacaoTemporal_quest5 = $request->orientacaoTemporal_quest5;
        $formExPsicossocial->orientacaoTemporal =
            $request->orientacaoTemporal_quest1 +
            $request->orientacaoTemporal_quest2 +
            $request->orientacaoTemporal_quest3 +
            $request->orientacaoTemporal_quest4 +
            $request->orientacaoTemporal_quest5;

        $formExPsicossocial->orientacaoEspacial_quest1 = $request->orientacaoEspacial_quest1;
        $formExPsicossocial->orientacaoEspacial_quest2 = $request->orientacaoEspacial_quest2;
        $formExPsicossocial->orientacaoEspacial_quest3 = $request->orientacaoEspacial_quest3;
        $formExPsicossocial->orientacaoEspacial_quest4 = $request->orientacaoEspacial_quest4;
        $formExPsicossocial->orientacaoEspacial_quest5 = $request->orientacaoEspacial_quest5;
        $formExPsicossocial->orientacaoEspacial =
            $request->orientacaoEspacial_quest1 +
            $request->orientacaoEspacial_quest2 +
            $request->orientacaoEspacial_quest3 +
            $request->orientacaoEspacial_quest4 +
            $request->orientacaoEspacial_quest5;

        $formExPsicossocial->memoriaImediata_quest1 = $request->memoriaImediata_quest1;
        $formExPsicossocial->memoriaImediata = $request->memoriaImediata_quest1;

        $formExPsicossocial->calculo_quest1 = $request->calculo_quest1;
        $formExPsicossocial->calculo = $request->calculo_quest1;

        $formExPsicossocial->evocacaoPalavras_quest1 = $request->evocacaoPalavras_quest1;
        $formExPsicossocial->evocacaoPalavras = $request->evocacaoPalavras_quest1;

        $formExPsicossocial->nomeacao_quest1 = $request->nomeacao_quest1;
        $formExPsicossocial->nomeacao = $request->nomeacao_quest1;

        $formExPsicossocial->repeticao_quest1 = $request->repeticao_quest1;
        $formExPsicossocial->repeticao = $request->repeticao_quest1;

        $formExPsicossocial->comando_quest1 = $request->comando_quest1;
        $formExPsicossocial->comando = $request->comando_quest1;

        $formExPsicossocial->leitura_quest1 = $request->leitura_quest1;
        $formExPsicossocial->leitura = $request->leitura_quest1;

        $formExPsicossocial->escreverFrase_quest1 = $request->escreverFrase_quest1;
        $formExPsicossocial->escreverFrase = $request->escreverFrase_quest1;

        $formExPsicossocial->copiarDiagrama_quest1 = $request->copiarDiagrama_quest1;
        $formExPsicossocial->copiarDiagrama = $request->copiarDiagrama_quest1;

        $formExPsicossocial->pontuacaoTotalCognicao =
            $formExPsicossocial->copiarDiagrama +
            $formExPsicossocial->escreverFrase +
            $formExPsicossocial->leitura +
            $formExPsicossocial->comando +
            $formExPsicossocial->repeticao +
            $formExPsicossocial->nomeacao +
            $formExPsicossocial->evocacaoPalavras +
            $formExPsicossocial->calculo +
            $formExPsicossocial->memoriaImediata +
            $formExPsicossocial->orientacaoEspacial +
            $formExPsicossocial->orientacaoTemporal;

        if ($formExPsicossocial->pontuacaoTotalCognicao <= 20) {
            $formExPsicossocial->classificacaoCognicao = 'Analfabeto.';
        } elseif ($formExPsicossocial->pontuacaoTotalCognicao > 20 && $formExPsicossocial->pontuacaoTotalCognicao <= 25) {
            $formExPsicossocial->classificacaoCognicao = '1 a 4 anos de escolaridade.';
        } elseif ($formExPsicossocial->pontuacaoTotalCognicao > 25 && $formExPsicossocial->pontuacaoTotalCognicao < 28) {
            $formExPsicossocial->classificacaoCognicao = '5 a 8 anos de escolaridade.';
        } elseif ($formExPsicossocial->pontuacaoTotalCognicao == 28) {
            $formExPsicossocial->classificacaoCognicao = '5 a 8 anos de escolaridade.';
        } elseif ($formExPsicossocial->pontuacaoTotalCognicao >= 29 && $formExPsicossocial->pontuacaoTotalCognicao <= 26) {
            $formExPsicossocial->classificacaoCognicao = '> 9 anos de escolaridade.';
        }

        $formExPsicossocial->comprometimentoCognitivo = $request->comprometimentoCognitivo;

        $formExPsicossocial->humor_quest1 = $request->humor_quest1;
        $formExPsicossocial->humor_quest2 = $request->humor_quest2;
        $formExPsicossocial->humor_quest3 = $request->humor_quest3;
        $formExPsicossocial->humor_quest4 = $request->humor_quest4;
        $formExPsicossocial->humor_quest5 = $request->humor_quest5;
        $formExPsicossocial->humor_quest6 = $request->humor_quest6;
        $formExPsicossocial->humor_quest7 = $request->humor_quest7;
        $formExPsicossocial->humor_quest8 = $request->humor_quest8;
        $formExPsicossocial->humor_quest9 = $request->humor_quest9;
        $formExPsicossocial->humor_quest10 = $request->humor_quest10;
        $formExPsicossocial->humor_quest11 = $request->humor_quest11;
        $formExPsicossocial->humor_quest12 = $request->humor_quest12;
        $formExPsicossocial->humor_quest13 = $request->humor_quest13;
        $formExPsicossocial->humor_quest14 = $request->humor_quest14;
        $formExPsicossocial->humor_quest15 = $request->humor_quest15;

        $formExPsicossocial->pontuacaoTotalHumor =
            $request->humor_quest1 +
            $request->humor_quest2 +
            $request->humor_quest3 +
            $request->humor_quest4 +
            $request->humor_quest5 +
            $request->humor_quest6 +
            $request->humor_quest7 +
            $request->humor_quest8 +
            $request->humor_quest9 +
            $request->humor_quest10 +
            $request->humor_quest11 +
            $request->humor_quest12 +
            $request->humor_quest13 +
            $request->humor_quest14 +
            $request->humor_quest15;

        if ($formExPsicossocial->pontuacaoTotalHumor < 6) {
            $formExPsicossocial->classificacaoHumor = 'Ausência de sintomatologia depressiva';
        } else {
            $formExPsicossocial->classificacaoHumor = 'Presença de sintomatologia depressiva';
        }

        $formExPsicossocial->lesoesCorporaisInexplicadas = $request->lesoesCorporaisInexplicadas;
        $formExPsicossocial->descuidoHigienePessoal = $request->descuidoHigienePessoal;
        $formExPsicossocial->demoraBuscarAntendimentoMedico = $request->demoraBuscarAntendimentoMedico;
        $formExPsicossocial->discordanciaDeHistoria = $request->discordanciaDeHistoria;
        $formExPsicossocial->InternacoesFrequentes = $request->InternacoesFrequentes;
        $formExPsicossocial->AusenciaDeFamiliar = $request->AusenciaDeFamiliar;
        $formExPsicossocial->RecusaAVisitaDomiciliar = $request->RecusaAVisitaDomiciliar;

        if($request->lesoesCorporaisInexplicadas == 'sim' && $request->descuidoHigienePessoal == 'sim' 
        || $request->lesoesCorporaisInexplicadas == 'sim' && $request->demoraBuscarAntendimentoMedico == 'sim'
        || $request->lesoesCorporaisInexplicadas == 'sim' && $request->discordanciaDeHistoria == 'sim'
        || $request->lesoesCorporaisInexplicadas == 'sim' && $request->InternacoesFrequentes == 'sim'
        || $request->lesoesCorporaisInexplicadas == 'sim' && $request->AusenciaDeFamiliar == 'sim'
        || $request->lesoesCorporaisInexplicadas == 'sim' && $request->RecusaAVisitaDomiciliar == 'sim' 
        || $request->descuidoHigienePessoal == 'sim' && $request->demoraBuscarAntendimentoMedico == 'sim'
        || $request->descuidoHigienePessoal == 'sim' && $request->discordanciaDeHistoria == 'sim'
        || $request->descuidoHigienePessoal == 'sim' && $request->InternacoesFrequentes == 'sim'
        || $request->descuidoHigienePessoal == 'sim' && $request->AusenciaDeFamiliar == 'sim'
        || $request->descuidoHigienePessoal == 'sim' && $request->RecusaAVisitaDomiciliar == 'sim'
        || $request->demoraBuscarAntendimentoMedico == 'sim' && $request->discordanciaDeHistoria == 'sim'
        || $request->demoraBuscarAntendimentoMedico == 'sim' && $request->InternacoesFrequentes == 'sim'
        || $request->demoraBuscarAntendimentoMedico == 'sim' && $request->AusenciaDeFamiliar == 'sim'
        || $request->demoraBuscarAntendimentoMedico == 'sim' && $request->RecusaAVisitaDomiciliar == 'sim'
        || $request->discordanciaDeHistoria == 'sim' && $request->InternacoesFrequentes == 'sim'
        || $request->discordanciaDeHistoria == 'sim' && $request->AusenciaDeFamiliar == 'sim'
        || $request->discordanciaDeHistoria == 'sim' && $request->RecusaAVisitaDomiciliar == 'sim'
        || $request->InternacoesFrequentes == 'sim' && $request->AusenciaDeFamiliar == 'sim'
        || $request->InternacoesFrequentes == 'sim' && $request->RecusaAVisitaDomiciliar == 'sim'
        || $request->AusenciaDeFamiliar == 'sim' && $request->RecusaAVisitaDomiciliar == 'sim'){
            $formExPsicossocial->sinaisViolenciaDomestica = 'sim';
        }else{
            $formExPsicossocial->sinaisViolenciaDomestica = 'nao';
        }

        $formExPsicossocial->religioso = $request->religioso;
        $formExPsicossocial->religiaoAjuda = $request->religiaoAjuda;
        $formExPsicossocial->parteDeComuniddReligiosa = $request->parteDeComuniddReligiosa;
        $formExPsicossocial->nomeComuniddReligiosa = $request->nomeComuniddReligiosa;

        $formExFuncional->paciente_id = $request->paciente_id;

        $formExFuncional->banhoDependencia = $request->banhoDependencia;
        $formExFuncional->vestirseDependencia = $request->vestirseDependencia;
        $formExFuncional->usoVasoSanitarioDpendencia = $request->usoVasoSanitarioDpendencia;
        $formExFuncional->transferenciaDependencia = $request->transferenciaDependencia;
        $formExFuncional->continenciaDependencia = $request->continenciaDependencia;
        $formExFuncional->alimentarseDependencia = $request->alimentarseDependencia;
        $formExFuncional->ptTotalAVD =
            $request->banhoDependencia +
            $request->vestirseDependencia +
            $request->usoVasoSanitarioDpendencia +
            $request->transferenciaDependencia +
            $request->continenciaDependencia +
            $request->alimentarseDependencia;

        if ($formExFuncional->ptTotalAVD == 0) {
            $formExFuncional->interpretacaoAVD = 'Independente em todas as seis funções';
        } elseif ($formExFuncional->ptTotalAVD == 1) {
            $formExFuncional->interpretacaoAVD = 'Independente em cinco funções e dependente em uma função';
        } elseif ($formExFuncional->ptTotalAVD == 2) {
            $formExFuncional->interpretacaoAVD = 'Independente em quatro funções e dependente em duas';
        } elseif ($formExFuncional->ptTotalAVD == 3) {
            $formExFuncional->interpretacaoAVD = 'Independente em três funções e dependente em três';
        } elseif ($formExFuncional->ptTotalAVD == 4) {
            $formExFuncional->interpretacaoAVD = 'Independente em duas funções e dependente em quatro';
        } elseif ($formExFuncional->ptTotalAVD == 5) {
            $formExFuncional->interpretacaoAVD = 'Independente em uma função e dependente em cinco funções';
        } elseif ($formExFuncional->ptTotalAVD == 6) {
            $formExFuncional->interpretacaoAVD = 'Dependente em todas as seis funções';
        }

        $formExFuncional->usoTelefoneDependencia = $request->usoTelefoneDependencia;
        $formExFuncional->viagensDependencia = $request->viagensDependencia;
        $formExFuncional->comprasDependencia = $request->comprasDependencia;
        $formExFuncional->preparoRefeicoesDependencia = $request->preparoRefeicoesDependencia;
        $formExFuncional->trabalhoDomesticoDependencia = $request->trabalhoDomesticoDependencia;
        $formExFuncional->usoMedicamentoDependencia = $request->usoMedicamentoDependencia;
        $formExFuncional->manuseioDinheiroDependencia = $request->manuseioDinheiroDependencia;
        $formExFuncional->ptTotalAIVD =
            $request->usoTelefoneDependencia +
            $request->viagensDependencia +
            $request->comprasDependencia +
            $request->preparoRefeicoesDependencia +
            $request->trabalhoDomesticoDependencia +
            $request->usoMedicamentoDependencia +
            $request->manuseioDinheiroDependencia;

        if ($formExFuncional->ptTotalAIVD <= 5) {
            $formExFuncional->interpretacaoAIVD = "Dependência total";
        } elseif ($formExFuncional->ptTotalAIVD > 5 && $formExFuncional->ptTotalAIVD < 21) {
            $formExFuncional->interpretacaoAIVD = "Dependência parcial";
        } elseif ($formExFuncional->ptTotalAIVD == 21) {
            $formExFuncional->interpretacaoAIVD = "Independência";
        }

        $formExFuncional->idade = $request->idade;
        $formExFuncional->autopercepcaoSaude = $request->autopercepcaoSaude;
        $formExFuncional->limitacaoFisica_quest1 = $request->limitacaoFisica_quest1;
        $formExFuncional->limitacaoFisica_quest2 = $request->limitacaoFisica_quest2;
        $formExFuncional->limitacaoFisica_quest3 = $request->limitacaoFisica_quest3;
        $formExFuncional->limitacaoFisica_quest4 = $request->limitacaoFisica_quest4;
        $formExFuncional->limitacaoFisica_quest5 = $request->limitacaoFisica_quest5;
        $formExFuncional->limitacaoFisica_quest6 = $request->limitacaoFisica_quest6;


        $formExFuncional->incapacidades_quest1 = $request->incapacidades_quest1;
        $formExFuncional->incapacidades_quest2 = $request->incapacidades_quest2;
        $formExFuncional->incapacidades_quest3 = $request->incapacidades_quest3;
        $formExFuncional->incapacidades_quest4 = $request->incapacidades_quest4;
        $formExFuncional->incapacidades_quest5 = $request->incapacidades_quest5;
        $formExFuncional->incapacidades_quest1_1 = $request->incapacidades_quest1_1;
        $formExFuncional->incapacidades_quest2_1 = $request->incapacidades_quest2_1;
        $formExFuncional->incapacidades_quest3_1 = $request->incapacidades_quest3_1;
        $formExFuncional->incapacidades_quest4_1 = $request->incapacidades_quest4_1;
        $formExFuncional->incapacidades_quest5_1 = $request->incapacidades_quest5_1;
        $formExFuncional->incapacidades_quest1_2 = $request->incapacidades_quest1_2;
        $formExFuncional->incapacidades_quest2_2 = $request->incapacidades_quest2_2;
        $formExFuncional->incapacidades_quest3_2 = $request->incapacidades_quest3_2;
        $formExFuncional->incapacidades_quest4_2 = $request->incapacidades_quest4_2;
        $formExFuncional->incapacidades_quest5_2 = $request->incapacidades_quest5_2;

        $formExFuncional->ptTotalVES =
            $request->idade +
            $request->autopercepcaoSaude +
            $request->limitacaoFisica_quest1 +
            $request->limitacaoFisica_quest2 +
            $request->limitacaoFisica_quest3 +
            $request->limitacaoFisica_quest4 +
            $request->limitacaoFisica_quest5 +
            $request->limitacaoFisica_quest6 +
            $request->incapacidades_quest1 +
            $request->incapacidades_quest2 +
            $request->incapacidades_quest3 +
            $request->incapacidades_quest4 +
            $request->incapacidades_quest5 +
            $request->incapacidades_quest1_1 +
            $request->incapacidades_quest2_1 +
            $request->incapacidades_quest3_1 +
            $request->incapacidades_quest4_1 +
            $request->incapacidades_quest5_1 +
            $request->incapacidades_quest1_2 +
            $request->incapacidades_quest2_2 +
            $request->incapacidades_quest3_2 +
            $request->incapacidades_quest4_2 +
            $request->incapacidades_quest5_2;

        if ($formExFuncional->ptTotalVES <= 2) {
            $formExFuncional->estratificacaoVES = "Idoso robusto - risco baixo";
        } elseif ($formExFuncional->ptTotalVES >= 3 && $formExFuncional->ptTotalVES <= 6) {
            $formExFuncional->estratificacaoVES = "Idoso em risco de fragilização - risco médio";
        } elseif ($formExFuncional->ptTotalVES >= 7) {
            $formExFuncional->estratificacaoVES = "Idoso frágil - risco alto";
        }

        $formExFuncional->av_mobilidade = $request->av_mobilidade;

        $formExFuncional->areaLocomocao_areaLocomocaoDesimpedida = $request->areaLocomocao_areaLocomocaoDesimpedida;
        $formExFuncional->areaLocomocao_barrasDeApoio = $request->areaLocomocao_barrasDeApoio;
        $formExFuncional->areaLocomocao_pisosUniformesTapetesFixos = $request->areaLocomocao_pisosUniformesTapetesFixos;
        $formExFuncional->iluminacao_presencaIluminacao = $request->iluminacao_presencaIluminacao;
        $formExFuncional->iluminacao_interruptoresAcessiveis = $request->iluminacao_interruptoresAcessiveis;
        $formExFuncional->banheiro_areaChuveiroAntiderrapante = $request->banheiro_areaChuveiroAntiderrapante;
        $formExFuncional->banheiro_boxAberturaFacil = $request->banheiro_boxAberturaFacil;
        $formExFuncional->cozinhaEQuarto_camaBoa = $request->cozinhaEQuarto_camaBoa;
        $formExFuncional->cozinhaEQuarto_armariosBaixos = $request->cozinhaEQuarto_armariosBaixos;
        $formExFuncional->escada_pisoAntiderrapante = $request->escada_pisoAntiderrapante;
        $formExFuncional->escada_corrimaoDoisLados = $request->escada_corrimaoDoisLados;

        if($request->areaLocomocao_areaLocomocaoDesimpedida == 'nao' || $request->areaLocomocao_barrasDeApoio == 'nao' || $request->areaLocomocao_pisosUniformesTapetesFixos == 'nao' || $request->iluminacao_presencaIluminacao == 'nao' || $request->iluminacao_interruptoresAcessiveis == 'nao' || $request->banheiro_areaChuveiroAntiderrapante == 'nao' || $request->banheiro_boxAberturaFacil == 'nao' || $request->cozinhaEQuarto_camaBoa == 'nao' || $request->cozinhaEQuarto_armariosBaixos == 'nao' || $request->escada_pisoAntiderrapante == 'nao' || $request->escada_corrimaoDoisLados == 'nao'){
            $formExFuncional->ambienteSemSeguranca = 'Ambiente sem segurança';
        }

        $formExFuncional->hiperssonia = $request->hiperssonia;
        $formExFuncional->insonia = $request->insonia;
        $formExFuncional->parassonia = $request->parassonia;

        $formExFuncional->peso = $request->peso;
        $formExFuncional->altura = $request->altura;

        if ($request->altura != 0) {
            $formExFuncional->IMC = ($request->peso / $request->altura);
        }

        if($formExFuncional->IMC < 22){
            $formExFuncional->classificacaoNutricional = 'Baixo peso';
        }elseif($formExFuncional->IMC > 27){
            $formExFuncional->classificacaoNutricional = 'Sobrepeso';
        }

        $formExFisico->save();
        $formExPsicossocial->save();
        $formExFuncional->save();
        $formulario->paciente_id = $request->paciente_id;
        $formulario->save();

       /* $id = 0;
        $request->id = $id;
        
        $formExPsicossocial->where(['id'=>$id])->update([
            
        ]);*/

        //return redirect()->back()->withInput();

        //return redirect('/welcome')->with('msg', 'Fomulário cadastrado com sucesso!');

        
    /* $formExFisico['success'] = true;
        echo json_encode($formExFisico);

       $formExPsicossocial['success'] = true;
        echo json_encode($formExPsicossocial);

       $formExFuncional['success'] = true;
        echo json_encode($formExFuncional);
        
        return;
        
        $pacient = Pacient::findOrFail($request->paciente_id);
        return view('formulario.create', ['pacient' => $pacient]);
        */
    }

    public function update(Request $request, $id) 
    {
        $formExPsicossocial = new ExamePsicossocial;

        $formExPsicossocial->where(['id'=>$id])->update([
            'orientacaoTemporal_quest1'=>$request->orientacaoTemporal_quest1,
            'paciente_id'=>$request->paciente_id
        ]);
        
    }

    public function show($id)
    {

        $formulario = Formulario::findOrFail($id);
        $pacient = Pacient::all();
        $exameFisico = ExameFisico::all();
        $exameFuncional = ExameFuncional::all();
        $examePsicossocial = ExamePsicossocial::all();
        $sugTerapeutica = SugestoesTerapeuticas::all();


        return view('formulario.show', ['sugTerapeutica' => $sugTerapeutica, 'pacient' => $pacient, 'formulario' => $formulario, 'exameFisico' => $exameFisico, 'exameFuncional' => $exameFuncional, 'examePsicossocial' => $examePsicossocial]);
    }

    public function destroy($id)
    {
        Formulario::findOrFail($id)->delete();
        ExameFisico::findOrFail($id)->delete();
        ExameFuncional::findOrFail($id)->delete();
        ExamePsicossocial::findOrFail($id)->delete();

        return redirect('/welcome')->with('msg', 'Fomulário deletado com sucesso!');
    }
    
}
