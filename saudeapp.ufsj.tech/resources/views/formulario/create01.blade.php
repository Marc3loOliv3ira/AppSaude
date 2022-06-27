<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Exame Fisico
    </title>
    <link rel="stylesheet" href="/css/formularios/formulario.css">

</head>

<body>

    <!-- Create Form -->
    <form enctype="multipart/form-data" name="form_fisico">
        @csrf
        <!-- Details -->
        <input type="hidden" name="tab" value="av_psicossocial">
        <input type="hidden" name="paciente_id" id="paciente_id" value="{{ $pacient->id }}" class="form-control">
        <h1>I - EXAME FÍSICO</h1>
        <h3>Exame da cabeça e do pescoço</h3>
        <div class="form-control">

            <b>
                <p>Couro cabeludo:</p>
            </b>
            <table class="table table-borderless" cellspacing=" 20 ">
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_couroCabeludo[0]" value="normal - sem alteração"
                            {{ (is_array(old('exam_couroCabeludo')) && in_array('normal - sem alteração', old('exam_couroCabeludo'))) ? ' checked' : '' }} />
                        Normal - sem alteração
                    </td>
                    <td>
                        <input type="checkbox" name="exam_couroCabeludo[1]" value="higienização comprometida"
                            {{ (is_array(old('exam_couroCabeludo')) && in_array('higienização comprometida', old('exam_couroCabeludo'))) ? ' checked' : '' }}>Higienização
                        comprometida
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_couroCabeludo[2]" value="dermatite seborreica"
                            {{ (is_array(old('exam_couroCabeludo')) && in_array('dermatite seborreica', old('exam_couroCabeludo'))) ? ' checked' : '' }}>Dermatite
                        seborreica
                    </td>
                    <td>
                        <input type="checkbox" name="exam_couroCabeludo[3]" value="pediculose"
                            {{ (is_array(old('exam_couroCabeludo')) && in_array('pediculose', old('exam_couroCabeludo'))) ? ' checked' : '' }}>Pediculose
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_couroCabeludo[4]" value="foliculite"
                            {{ (is_array(old('exam_couroCabeludo')) && in_array('foliculite', old('exam_couroCabeludo'))) ? ' checked' : '' }}>Foliculite
                    </td>
                    <td>
                        <input type="checkbox" name="exam_couroCabeludo[5]" value="calvíce"
                            {{ (is_array(old('exam_couroCabeludo')) && in_array('calvíce', old('exam_couroCabeludo'))) ? ' checked' : '' }}>Calvíce
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_couroCabeludo[6]" value="alopécia"
                            {{ (is_array(old('exam_couroCabeludo')) && in_array('alopécia', old('exam_couroCabeludo'))) ? ' checked' : '' }}>Alopécia
                    </td>
                    <td>
                        <input type="text" name="exam_couroCabeludo[7]" placeholder="Outro" class="form-control"
                            value="{{ old('exam_couroCabeludo.7') }}">
                    </td>
                </tbody>
            </table>

        </div>

        <div class="form-control">
            <b>
                <p>Olhos:</p>
            </b>
            <table class="table table-borderless" cellspacing="20">
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="acuidade visual sem alterações"
                            {{ (is_array(old('exam_olhos')) && in_array('acuidade visual sem alterações', old('exam_olhos'))) ? ' checked' : '' }}>
                        Acuidade visual sem alterações
                    </td>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="acuidade visual alterada"
                            {{ (is_array(old('exam_olhos')) && in_array('acuidade visual sem alterações', old('exam_olhos'))) ? ' checked' : '' }}>
                        Acuidade visual alterada
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="edema de pálpebras"
                            {{ (is_array(old('exam_olhos')) && in_array('edema de pálpebras', old('exam_olhos'))) ? ' checked' : '' }}>
                        Edema de pálpebras
                    </td>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="exantelasma"
                            {{ (is_array(old('exam_olhos')) && in_array('exantelasma', old('exam_olhos'))) ? ' checked' : '' }}>
                        Exantelasma
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="tersol ou blefarite"
                            {{ (is_array(old('exam_olhos')) && in_array('tersol ou blefarite', old('exam_olhos'))) ? ' checked' : '' }}>
                        Tersol ou Blefarite
                    </td>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="ptose palpebral"
                            {{ (is_array(old('exam_olhos')) && in_array('ptose palpebral', old('exam_olhos'))) ? ' checked' : '' }}>
                        Ptose palpebral
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="miastemia"
                            {{ (is_array(old('exam_olhos')) && in_array('miastemia', old('exam_olhos'))) ? ' checked' : '' }}>
                        Miastemia
                    </td>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="lagoftalmia"
                            {{ (is_array(old('exam_olhos')) && in_array('lagoftalmia', old('exam_olhos'))) ? ' checked' : '' }}>
                        Lagoftalmia
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="Cataratas"
                            {{ (is_array(old('exam_olhos')) && in_array('Cataratas', old('exam_olhos'))) ? ' checked' : '' }}>
                        Cataratas
                    </td>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="Glaucoma"
                            {{ (is_array(old('exam_olhos')) && in_array('Glaucoma', old('exam_olhos'))) ? ' checked' : '' }}>
                        Glaucoma
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="Cirurgia ocular recente"
                            {{ (is_array(old('exam_olhos')) && in_array('Cirurgia ocular recente', old('exam_olhos'))) ? ' checked' : '' }}>
                        Cirurgia ocular recente
                    </td>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="Faz controle oftalmológico anual"
                            {{ (is_array(old('exam_olhos')) && in_array('Faz controle oftalmológico anual', old('exam_olhos'))) ? ' checked' : '' }}>
                        Faz controle oftalmológico anual
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="Sem exame oftalmológico há mais de 1 ano"
                            {{ (is_array(old('exam_olhos')) && in_array('Sem exame oftalmológico há mais de 1 ano', old('exam_olhos'))) ? ' checked' : '' }}>
                        Sem exame oftalmológico há mais de 1 ano
                    </td>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="Nunca fez exame oftalmológico"
                            {{ (is_array(old('exam_olhos')) && in_array('Nunca fez exame oftalmológico', old('exam_olhos'))) ? ' checked' : '' }}>
                        Nunca fez exame oftalmológico
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_olhos[]" value="outros"
                            {{ (is_array(old('exam_olhos')) && in_array('outros', old('exam_olhos'))) ? ' checked' : '' }}>
                        Outro
                    </td>
                </tbody>
            </table>

        </div>

        <div class="form-control">
            <b>
                <p>Ouvidos:</p>
            </b>
            <table class="table table-borderless" cellspacing=" 20 ">

                <tbody>
                    <td>
                        <input type="checkbox" name="exam_ouvido[]" value="acuidade auditiva sem alterações"
                            {{ (is_array(old('exam_ouvido')) && in_array('acuidade auditiva sem alterações', old('exam_ouvido'))) ? ' checked' : '' }}>
                        Acuidade auditiva sem alterações
                    </td>
                    <td>
                        <input type="checkbox" name="exam_ouvido[]" value="problema de audição"
                            {{ (is_array(old('exam_ouvido')) && in_array('problema de audição', old('exam_ouvido'))) ? ' checked' : '' }}>
                        Problema de audição
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_ouvido[]" value="Uso de aparelho"
                            {{ (is_array(old('exam_ouvido')) && in_array('Uso de aparelho', old('exam_ouvido'))) ? ' checked' : '' }}>
                        Uso de aparelho
                    </td>
                    <td>
                        <input type="checkbox" name="exam_ouvido[]" value="manuseia aparelho/depende de outros"
                            {{ (is_array(old('exam_ouvido')) && in_array('manuseia aparelho/depende de outros', old('exam_ouvido'))) ? ' checked' : '' }}>
                        Manuseia aparelho/depende de outros
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_ouvido[]" value="nunca fez avaliação auditiva"
                            {{ (is_array(old('exam_ouvido')) && in_array('nunca fez avaliação auditiva', old('exam_ouvido'))) ? ' checked' : '' }}>
                        Nunca fez avaliação auditiva
                    </td>
                    <td>
                        <input type="checkbox" name="exam_ouvido[]" value="Presença de cerúmen"
                            {{ (is_array(old('exam_ouvido')) && in_array('Presença de cerúmen', old('exam_ouvido'))) ? ' checked' : '' }}>
                        Presença de cerúmen
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_ouvido[]" value="Positivo para teste de sussurro"
                            {{ (is_array(old('exam_ouvido')) && in_array('Positivo para teste de sussurro', old('exam_ouvido'))) ? ' checked' : '' }}>
                        Positivo para teste de sussurro
                    </td>
                    <td>
                        <input type="checkbox" name="exam_ouvido[]" value="Negativo para teste de sussurro"
                            {{ (is_array(old('exam_ouvido')) && in_array('Negativo para teste de sussurro', old('exam_ouvido'))) ? ' checked' : '' }}>
                        Negativo para teste de sussurro
                    </td>
                </tbody>
            </table>
        </div>

        <div class="form-control">
            <b>
                <p>Boca:</p>
            </b>
            <table class="table table-borderless" cellspacing="20">
                <thead>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_boca[]"
                            value="boa condição higiênica, sem presença de lesões na mucosa"
                            {{ (is_array(old('exam_boca')) && in_array('boa condição higiênica, sem presença de lesões na mucosa', old('exam_boca'))) ? ' checked' : '' }}>
                        Boa condição higiênica, sem presença de lesões na mucosa
                    </td>
                    <td>
                        <input type="checkbox" name="exam_boca[]" value="gengivite, aftas ou estomatites"
                            {{ (is_array(old('exam_boca')) && in_array('gengivite, aftas ou estomatites', old('exam_boca'))) ? ' checked' : '' }}>
                        Gengivite, aftas ou estomatites
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_boca[]"
                            value="lábios com herpes viral, rachaduras, queilose ou queilite"
                            {{ (is_array(old('exam_boca')) && in_array('lábios com herpes viral, rachaduras, queilose ou queilite', old('exam_boca'))) ? ' checked' : '' }}>
                        Lábios com herpes viral, rachaduras, queilose ou queilite;
                    </td>
                    <td>
                        <input type="checkbox" name="exam_boca[]" value="língua saburrosa ou acastanhada"
                            {{ (is_array(old('exam_boca')) && in_array('língua saburrosa ou acastanhada', old('exam_boca'))) ? ' checked' : '' }}>
                        Língua saburrosa ou acastanhada
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_boca[]" value="boca seca ou xerostomia"
                            {{ (is_array(old('exam_boca')) && in_array('sangramento', old('exam_boca'))) ? ' checked' : '' }}>
                        Boca seca ou xerostomia
                    </td>
                    <td>
                        <input type="checkbox" name="exam_boca[]" value="sangramento"
                            {{ (is_array(old('exam_boca')) && in_array('sangramento', old('exam_boca'))) ? ' checked' : '' }}>
                        Sangramento
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_boca[]" value="manchas/leucoplasias"
                            {{ (is_array(old('exam_boca')) && in_array('manchas/leucoplasias', old('exam_boca'))) ? ' checked' : '' }}>
                        Manchas/leucoplasias
                    </td>
                    <td>
                        <input type="checkbox" name="exam_boca[]" value="dentição prejudicada"
                            {{ (is_array(old('exam_boca')) && in_array('dentição prejudicada', old('exam_boca'))) ? ' checked' : '' }}>
                        Dentição prejudicada
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_boca[]" value="uso de prótese dentária total"
                            {{ (is_array(old('exam_boca')) && in_array('uso de prótese dentária total', old('exam_boca'))) ? ' checked' : '' }}>
                        Uso de prótese dentária total
                    </td>
                    <td>
                        <input type="checkbox" name="exam_boca[]" value="uso de prótese dentária parcial"
                            {{ (is_array(old('exam_boca')) && in_array('uso de prótese dentária parcial', old('exam_boca'))) ? ' checked' : '' }}>
                        Uso de prótese dentária parcial
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_boca[]" value="ausência de dentes"
                            {{ (is_array(old('exam_boca')) && in_array('ausência de dentes', old('exam_boca'))) ? ' checked' : '' }}>
                        Ausência de dentes
                    </td>
                    <td>
                        <input type="checkbox" name="exam_boca[]" value="dor de dente"
                            {{ (is_array(old('exam_boca')) && in_array('dor de dente', old('exam_boca'))) ? ' checked' : '' }}>
                        Dor de dente
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="text" name="exam_boca[12]" placeholder="Outro" class="form-control"
                            value="{{ old('exam_boca.12') }}">
                    </td>
                </tbody>
            </table>

        </div>
        <div class="form-control">
            <b>
                <p>Pescoço:</p>
            </b>
            <table class="table table-borderless" cellspacing="20">
                <thead>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_pescoco[]"
                            value="não há presença de gânglios visíveis e palpáveis"
                            {{ (is_array(old('exam_pescoco')) && in_array('não há presença de gânglios visíveis e palpáveis', old('exam_pescoco'))) ? ' checked' : '' }}>
                        Não há presença de gânglios visíveis e palpáveis
                    </td>
                    <td>
                        <input type="checkbox" name="exam_pescoco[]" value="presença de gânglios"
                            {{ (is_array(old('exam_pescoco')) && in_array('presença de gânglios', old('exam_pescoco'))) ? ' checked' : '' }}>
                        Presença de gânglios
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_pescoco[]" value="veias jugulares ingurgitadas"
                            {{ (is_array(old('exam_pescoco')) && in_array('veias jugulares ingurgitadas', old('exam_pescoco'))) ? ' checked' : '' }}>
                        Veias jugulares ingurgitadas
                    </td>
                    <td>
                        <input type="checkbox" name="exam_pescoco[]" value="desvio de traqueia"
                            {{ (is_array(old('exam_pescoco')) && in_array('desvio de traqueia', old('exam_pescoco'))) ? ' checked' : '' }}>
                        Desvio de traqueia
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="exam_pescoco[]" value="limitação de movimento"
                            {{ (is_array(old('exam_pescoco')) && in_array('limitação de movimento', old('exam_pescoco'))) ? ' checked' : '' }}>
                        Limitação de movimento
                    </td>
                    <td>
                        <input type="checkbox" name="exam_pescoco[]" value="bócio"
                            {{ (is_array(old('exam_pescoco')) && in_array('bócio', old('exam_pescoco'))) ? ' checked' : '' }}>
                        Bócio
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="text" name="exam_pescoco[6]" placeholder="Outro" class="form-control"
                            value="{{ old('exam_pescoco.6') }}" />
                    </td>
                </tbody>
            </table>
        </div>
        <h3>Sistema respiratório</h3>
        <div class="form-control">
            <b>
                <p>Inspeção:</p>
            </b>
            <table class="table table-borderless" cellspacing="20">
                <thead>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Tórax em tonel"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Tórax em tonel', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Tórax em "tonel"
                    </td>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Tórax em funil"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Tórax em funil', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Tórax em "funil"
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Peito de pombo"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Peito de pombo', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Peito de pombo
                    </td>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Abaulamento"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Abaulamento', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Abaulamento
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Retração"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Retração', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Retração
                    </td>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Cifose"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Cifose', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Cifose
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Lordose"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Lordose', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Lordose
                    </td>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Escoliose"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Escoliose', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Escoliose
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]"
                            value="Movimentos simétricos durante a respiração"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Movimentos simétricos durante a respiração', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Movimentos simétricos durante a respiração
                    </td>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]"
                            value="Movimentos assimétricos durante a respiração"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Movimentos assimétricos durante a respiração', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Movimentos assimétricos durante a respiração
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Circulação colateral"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Circulação colateral', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Circulação colateral
                    </td>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Tiragem intercostal"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Tiragem intercostal', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Tiragem intercostal
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Ginecomastia"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Ginecomastia', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Ginecomastia
                    </td>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Expansão torácica diminuída"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Expansão torácica diminuída', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Expansão torácica diminuída
                    </td>
                </tbody>
                <tbody>
                    <td>
                        <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Expansão torácica preservada"
                            {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Expansão torácica preservada', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                        Expansão torácica preservada
                    </td>
                    <td>
                        <input type="text" name="sisRespiratorio_inspecao[15]" placeholder="Outro" class="form-control"
                            value="{{ old('sisRespiratorio_inspecao.15') }}">
                    </td>
                </tbody>
            </table>
        </div>

        <div class="form-control">
            <b>
                <p>Palpação:</p>
            </b>
            <table class="table table-borderless" cellspacing ="20">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_palpacao[]" value="Sensibilidade à palpação" {{ (is_array(old('sisRespiratorio_palpacao')) && in_array('Sensibilidade à palpação', old('sisRespiratorio_palpacao'))) ? ' checked' : '' }}>
                                 Sensibilidade à palpação 
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_palpacao[]" value="Enfisema subcutâneo" {{ (is_array(old('sisRespiratorio_palpacao')) && in_array('Enfisema subcutâneo', old('sisRespiratorio_palpacao'))) ? ' checked' : '' }}>
                                 Enfisema subcutâneo  
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_palpacao[]" value="Frêmitos palpáveis bilateralmente" {{ (is_array(old('sisRespiratorio_palpacao')) && in_array('Frêmitos palpáveis bilateralmente', old('sisRespiratorio_palpacao'))) ? ' checked' : '' }}>
                                 Frêmitos palpáveis bilateralmente  
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_palpacao[]" value="Frêmitos diminuídos" {{ (is_array(old('sisRespiratorio_palpacao')) && in_array('Frêmitos diminuídos', old('sisRespiratorio_palpacao'))) ? ' checked' : '' }}>
                                 Frêmitos diminuídos 
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_palpacao[]" id="Nodulo" onChange="disabilitarHabilitarInput()" value="Nodulo" {{ (is_array(old('sisRespiratorio_palpacao')) && in_array('Nodulo', old('sisRespiratorio_palpacao'))) ? ' checked' : '' }}>
                                 Nódulo 
                                <input type="text" name="sisRespiratorio_palpacao[5]" id="localNodulo" placeholder="Local" disabled class="form-control" value="{{ old('sisRespiratorio_palpacao.5') }}">
                            </td>
                            <td>
                                <input type="text" name="sisRespiratorio_palpacao[6]" placeholder="Outro" class="form-control" value="{{ old('sisRespiratorio_palpacao.6') }}">
                            </td>
                        </tbody>
                    </table>

        </div>
        <h3>Integridade cutâneo-mucosa</h3>

<div class=" form-control">
    <table class="table table-borderless">
        <thead>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <td>
                <input type="checkbox" name="intCutaneoMucosa[]" value="Mucosas coradas" {{ (is_array(old('intCutaneoMucosa')) && in_array('Mucosas coradas', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Mucosas coradas 
            </td>
            <td>
                <input type="checkbox" name="intCutaneoMucosa[]" value="Mucosas hipocoradas" {{ (is_array(old('intCutaneoMucosa')) && in_array('Mucosas hipocoradas', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Mucosas hipocoradas 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="intCutaneoMucosa[]" value="palidez" {{ (is_array(old('intCutaneoMucosa')) && in_array('palidez', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Palidez 
            </td>
            <td>
                <input type="checkbox" name="intCutaneoMucosa[]" value="icterícia" {{ (is_array(old('intCutaneoMucosa')) && in_array('icterícia', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Icterícia 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="intCutaneoMucosa[]" value="hidratado(a)" {{ (is_array(old('intCutaneoMucosa')) && in_array('hidratado(a)', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Hidratado(a) 
            </td>
            <td>
                <input type="checkbox" name="intCutaneoMucosa[]" value="desidratado(a)" {{ (is_array(old('intCutaneoMucosa')) && in_array('desidratado(a)', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Desidratado (a) 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="intCutaneoMucosa[]" value="rubor" {{ (is_array(old('intCutaneoMucosa')) && in_array('rubor', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Rubor 
            </td>
            <td>
                <input type="checkbox" name="intCutaneoMucosa[]" value="sudorese" {{ (is_array(old('intCutaneoMucosa')) && in_array('sudorese', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Sudorese 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="intCutaneoMucosa[]" value="pele oleosa" {{ (is_array(old('intCutaneoMucosa')) && in_array('pele oleosa', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Pele oleosa 
            </td>
            <td>
                <input type="checkbox" name="intCutaneoMucosa[]" value="afebril" {{ (is_array(old('intCutaneoMucosa')) && in_array('afebril', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Afebril 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="intCutaneoMucosa[]" value="hipotérmico(a)" {{ (is_array(old('intCutaneoMucosa')) && in_array('hipotérmico(a)', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Hipotérmico(a) 
            </td>
            <td>
                <input type="checkbox" name="intCutaneoMucosa[]" value="febril" {{ (is_array(old('intCutaneoMucosa')) && in_array('febril', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Febril 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" id="Escoriacao" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="escoriação" {{ (is_array(old('intCutaneoMucosa')) && in_array('escoriação', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Escoriação 
                <input type="text" id="descricaoEscoriacao" disabled class="form-control" name="intCutaneoMucosa[13]" placeholder="descrição" value="{{ old('intCutaneoMucosa.13') }}">
            </td>
            <td>
                <input type="checkbox" id="Macula" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="mácula" {{ (is_array(old('intCutaneoMucosa')) && in_array('mácula', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Mácula 
                <input type="text" id="descricaoMacula" disabled class="form-control" name="intCutaneoMucosa[15]" placeholder="descrição" value="{{ old('intCutaneoMucosa.15') }}">
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" id="Papula" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="pápula" {{ (is_array(old('intCutaneoMucosa')) && in_array('pápula', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Pápula 
                <input type="text" id="descricaoPapula" disabled class="form-control" name="intCutaneoMucosa[17]" placeholder="descrição" value="{{ old('intCutaneoMucosa.17') }}">
            </td>
            <td>
                <input type="checkbox" id="Pustula" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="pústula" {{ (is_array(old('intCutaneoMucosa')) && in_array('pústula', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Pústula 
                <input type="text" id="descricaoPustula" disabled class="form-control" name="intCutaneoMucosa[19]" placeholder="descrição" value="{{ old('intCutaneoMucosa.19') }}">
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" id="Vesicula" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="vesícula" {{ (is_array(old('intCutaneoMucosa')) && in_array('vesícula', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Vesícula 
                <input type="text" id="descricaoVesicula" disabled class="form-control" name="intCutaneoMucosa[21]" placeholder="descrição" value="{{ old('intCutaneoMucosa.21') }}">
            </td>
            <td>
                <input type="checkbox" id="Erupcao" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="erupção" {{ (is_array(old('intCutaneoMucosa')) && in_array('erupção', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Erupção 
                <input type="text" id="descricaoErupcao" disabled class="form-control" name="intCutaneoMucosa[23]" placeholder="descrição" value="{{ old('intCutaneoMucosa.23') }}">
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" id="Cisto" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="cisto" {{ (is_array(old('intCutaneoMucosa')) && in_array('cisto', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Cisto 
                <input type="text" id="descricaoCisto" disabled class="form-control" name="intCutaneoMucosa[25]" placeholder="descrição" value="{{ old('intCutaneoMucosa.25') }}">
            </td>
            <td>
                <input type="checkbox" id="Tumor" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="tumor" {{ (is_array(old('intCutaneoMucosa')) && in_array('tumor', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Tumor 
                <input type="text" id="descricaoTumor" disabled class="form-control" name="intCutaneoMucosa[27]" placeholder="descrição" value="{{ old('intCutaneoMucosa.27') }}">
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" id="Descamacao" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="descamação" {{ (is_array(old('intCutaneoMucosa')) && in_array('descamação', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Descamação 
                <input type="text" id="descricaoDescamacao" disabled class="form-control" name="intCutaneoMucosa[29]" placeholder="descrição" value="{{ old('intCutaneoMucosa.29') }}">
            </td>
            <td>
                <input type="checkbox" id="Cicatriz" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="cicatriz" {{ (is_array(old('intCutaneoMucosa')) && in_array('cicatriz', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Cicatriz 
                <input type="text" id="descricaoCicatriz" disabled class="form-control" name="intCutaneoMucosa[31]" placeholder="descrição" value="{{ old('intCutaneoMucosa.31') }}">
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" id="Fissura" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="fissura" {{ (is_array(old('intCutaneoMucosa')) && in_array('fissura', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Fissura  
                <input type="text" id="descricaoFissura" disabled class="form-control" name="intCutaneoMucosa[33]" placeholder="descrição" value="{{ old('intCutaneoMucosa.33') }}">
            </td>
            <td>
                <input type="checkbox" id="Ulcera" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="úlcera" {{ (is_array(old('intCutaneoMucosa')) && in_array('úlcera', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Úlcera 
                <input type="text" id="descricaoUlcera" disabled class="form-control" name="intCutaneoMucosa[35]" placeholder="descrição" value="{{ old('intCutaneoMucosa.35') }}">
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" id="LesaoPressao" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="lesão por pressão" {{ (is_array(old('intCutaneoMucosa')) && in_array('lesão por pressão', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Lesão por pressão  
                <input type="text" id="descricaoLesaoPressao" disabled class="form-control" name="intCutaneoMucosa[37]" placeholder="descrição" value="{{ old('intCutaneoMucosa.37') }}">
            </td>
            <td>
                <input type="checkbox" id="PurpuraSenil" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="púrpura senil" {{ (is_array(old('intCutaneoMucosa')) && in_array('púrpura senil', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Púrpura senil  
                <input type="text" id="descricaoPurpuraSenil" disabled class="form-control" name="intCutaneoMucosa[39]" placeholder="descrição" value="{{ old('intCutaneoMucosa.39') }}">
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" id="Hemangioma" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="hemangioma" {{ (is_array(old('intCutaneoMucosa')) && in_array('hemangioma', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Hemangioma 
                <input type="text" id="descricaoHemangioma" disabled class="form-control" name="intCutaneoMucosa[41]" placeholder="descrição" value="{{ old('intCutaneoMucosa.41') }}">
            </td>
            <td>
                <input type="checkbox" id="Spider" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="spider" {{ (is_array(old('intCutaneoMucosa')) && in_array('spider', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                 Spider 
                <input type="text" id="descricaoSpider" disabled class="form-control" name="intCutaneoMucosa[43]" placeholder="descrição" value="{{ old('intCutaneoMucosa.43') }}">
            </td>
        </tbody>
    </table>
</div>

<h3>Avaliação dos pés</h3>

<div class=" form-control">
    <table class="table table-borderless">
        <thead>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <td>
                <input type="checkbox" name="avPes[]" value="Pé plano" {{ (is_array(old('avPes')) && in_array('Pé plano', old('avPes'))) ? ' checked' : '' }}>
                 Pé plano 
            </td>
            <td>
                <input type="checkbox" name="avPes[]" value="Pé varo (supinado)" {{ (is_array(old('avPes')) && in_array('Pé varo (supinado)', old('avPes'))) ? ' checked' : '' }}>
                 Pé varo (supinado) 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="avPes[]" value="Pé valgo (pronado)" {{ (is_array(old('avPes')) && in_array('Pé valgo (pronado)', old('avPes'))) ? ' checked' : '' }}>
                 Pé valgo (pronado) 
            </td>
            <td>
                <input type="checkbox" name="avPes[]" value="Pé cavo" {{ (is_array(old('avPes')) && in_array('Pé cavo', old('avPes'))) ? ' checked' : '' }}>
                 Pé cavo 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="avPes[]" value="Dedos em garra" {{ (is_array(old('avPes')) && in_array('Dedos em garra', old('avPes'))) ? ' checked' : '' }}>
                 Dedos em garra 
            </td>
            <td>
                <input type="checkbox" name="avPes[]" value="Esporão de calcâneo" {{ (is_array(old('avPes')) && in_array('Esporão de calcâneo', old('avPes'))) ? ' checked' : '' }}>
                 Esporão de calcâneo 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="avPes[]" value="Hálux vago/joanete" {{ (is_array(old('avPes')) && in_array('Hálux vago/joanete', old('avPes'))) ? ' checked' : '' }}>
                 Hálux vago/joanete 
            </td>
            <td>
                <input type="checkbox" name="avPes[]" value="Hiperqueratose" {{ (is_array(old('avPes')) && in_array('Hiperqueratose', old('avPes'))) ? ' checked' : '' }}>
                 Hiperqueratose 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="avPes[]" value="Calosidade" {{ (is_array(old('avPes')) && in_array('Calosidade', old('avPes'))) ? ' checked' : '' }}>
                 Calosidade 
            </td>
            <td>
                <input type="checkbox" name="avPes[]" value="Ressecamento" {{ (is_array(old('avPes')) && in_array('Ressecamento', old('avPes'))) ? ' checked' : '' }}>
                 Ressecamento 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="avPes[]" value="Fissura/rachadura" {{ (is_array(old('avPes')) && in_array('Fissura/rachadura', old('avPes'))) ? ' checked' : '' }}>
                 Fissura/rachadura 
            </td>
            <td>
                <input type="checkbox" name="avPes[]" value="Tinea pedis" {{ (is_array(old('avPes')) && in_array('Tinea pedis', old('avPes'))) ? ' checked' : '' }}>
                 Tinea pedis 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="avPes[]" value="Tinea interdigital" {{ (is_array(old('avPes')) && in_array('Tinea interdigital', old('avPes'))) ? ' checked' : '' }}>
                 Tinea interdigital 
            </td>
            <td>
                <input type="checkbox" name="avPes[]" value="Alteração ungueal" {{ (is_array(old('avPes')) && in_array('Alteração ungueal', old('avPes'))) ? ' checked' : '' }}>
                 Alteração ungueal 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="avPes[]" value="unhas aparadas" {{ (is_array(old('avPes')) && in_array('unhas aparadas', old('avPes'))) ? ' checked' : '' }}>
                 unhas aparadas 
            </td>
            <td>
                <input type="checkbox" name="avPes[]" value="unhas com corte inadequado" {{ (is_array(old('avPes')) && in_array('unhas com corte inadequado', old('avPes'))) ? ' checked' : '' }}>
                 unhas com corte inadequado 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="avPes[]" value="calçados apertados" {{ (is_array(old('avPes')) && in_array('calçados apertados', old('avPes'))) ? ' checked' : '' }}>
                 calçados apertados 
            </td>
            <td>
                <input type="checkbox" name="avPes[]" value="Pulsos pediosos palpáveis" {{ (is_array(old('avPes')) && in_array('Pulsos pediosos palpáveis', old('avPes'))) ? ' checked' : '' }}>
                 Pulsos pediosos palpáveis 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name="avPes[]" value="Pulsos pediosos não palpáveis" {{ (is_array(old('avPes')) && in_array('Pulsos pediosos não palpáveis', old('avPes'))) ? ' checked' : '' }}>
                 Pulsos pediosos não palpáveis 
            </td>
            <td>
                <input type="checkbox" id="Dor" onchange="disabilitarHabilitarInput()" name="avPes[]" value="dor" {{ (is_array(old('avPes')) && in_array('dor', old('avPes'))) ? ' checked' : '' }}>
                 dor 
                <input type="text" id="descricaoDor" disabled class="form-control" name="avPes[20]" placeholder="descrição" value="{{ old('avPes.20') }}">
            </td>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <img src="/img/pe.jpg" alt="pe"><br><br>
    <p>Marque a área de sensibilidade de acordo com a figura acima</p>
    <table class="table table-borderless">
        <thead>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='1' {{ (is_array(old('areaSensibilidadePes')) && in_array('1', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 1 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='2' {{ (is_array(old('areaSensibilidadePes')) && in_array('2', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 2 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='3' {{ (is_array(old('areaSensibilidadePes')) && in_array('3', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 3 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='4' {{ (is_array(old('areaSensibilidadePes')) && in_array('4', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 4 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='5' {{ (is_array(old('areaSensibilidadePes')) && in_array('5', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 5 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='6' {{ (is_array(old('areaSensibilidadePes')) && in_array('6', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 6 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='7' {{ (is_array(old('areaSensibilidadePes')) && in_array('7', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 7 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='8' {{ (is_array(old('areaSensibilidadePes')) && in_array('8', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 8 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='9' {{ (is_array(old('areaSensibilidadePes')) && in_array('9', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 9 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='10' {{ (is_array(old('areaSensibilidadePes')) && in_array('10', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 10 
            </td>
        </tbody>
        <tbody>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='11' {{ (is_array(old('areaSensibilidadePes')) && in_array('11', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 11 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='12' {{ (is_array(old('areaSensibilidadePes')) && in_array('12', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 12 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='13' {{ (is_array(old('areaSensibilidadePes')) && in_array('13', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 13 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='14' {{ (is_array(old('areaSensibilidadePes')) && in_array('14', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 14 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='15' {{ (is_array(old('areaSensibilidadePes')) && in_array('15', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 15 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='16' {{ (is_array(old('areaSensibilidadePes')) && in_array('16', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 16 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='17' {{ (is_array(old('areaSensibilidadePes')) && in_array('17', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 17 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='18' {{ (is_array(old('areaSensibilidadePes')) && in_array('18', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 18 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='19' {{ (is_array(old('areaSensibilidadePes')) && in_array('19', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 19 
            </td>
            <td>
                <input type="checkbox" name='areaSensibilidadePes[]' value='20' {{ (is_array(old('areaSensibilidadePes')) && in_array('20', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                 20 
            </td>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <p>Outras informações relevantes:</p>
    <input type="text" name="avPes_outros" id="avPes_outros" class="form-control" value="{{ old('avPes_outros') }}">
</div>
<input type="submit" class="btn btn-primary" value="Salvar e continuar" onclick="fisico()">
</div>
</div>

<div class="tab-pane {{old('tab') == 'av_psicossocial' ? 'active' : null}}" id="av_psicossocial" role="tabpanel" aria-labelledby="av_psicossocial-tab">
<div id="form-create-container" class="col-md-6 offset-md-3">
<h1>II - AVALIAÇÃO PSICOSSOCIAL</h1>
<h4>Psíquica: Cognição</h4>
<h4>Mini-exame do estado mental (MEEM)</h4>

<form enctype="multipart/form-data" name="form_psicossocial">
@csrf

<input type="hidden" name="tab" value="av_funcional">
<input type="hidden" name="paciente_id" id="paciente_id" value="{{ $pacient->id }}" class="form-control">

<div class=" form-control">
    <p>Orientação temporal - 05 pontos:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Pontuação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Que dia é hoje?</td>
                <td>
                    <input type="radio" name="orientacaoTemporal_quest1" value="0" {{ old('orientacaoTemporal_quest1') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="orientacaoTemporal_quest1" value="1" {{ old('orientacaoTemporal_quest1') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Em que mês estamos?</td>
                <td>
                    <input type="radio" name="orientacaoTemporal_quest2" value="0" {{ old('orientacaoTemporal_quest2') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="orientacaoTemporal_quest2" value="1" {{ old('orientacaoTemporal_quest2') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Em que ano estamos?</td>
                <td>
                    <input type="radio" name="orientacaoTemporal_quest3" value="0" {{ old('orientacaoTemporal_quest3') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="orientacaoTemporal_quest3" value="1" {{ old('orientacaoTemporal_quest3') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Em que dia da semana estamos?</td>
                <td>
                    <input type="radio" name="orientacaoTemporal_quest4" value="0" {{ old('orientacaoTemporal_quest4') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="orientacaoTemporal_quest4" value="1" {{ old('orientacaoTemporal_quest4') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Qual a hora aproximada? (Considere a variação de mais ou menos uma hora)
                </td>
                <td>
                    <input type="radio" name="orientacaoTemporal_quest5" value="0" {{ old('orientacaoTemporal_quest5') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="orientacaoTemporal_quest5" value="1" {{ old('orientacaoTemporal_quest5') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <p>Orientação espacial - 05 pontos:</p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Pontuação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Em que local nós estamos? (consultório, dormitório, sala – apontando para o chão)
                </td>
                <td>
                    <input type="radio" name="orientacaoEspacial_quest1" value="0" {{ old('orientacaoEspacial_quest1') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="orientacaoEspacial_quest1" value="1" {{ old('orientacaoEspacial_quest1') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Que local é este aqui? (apontando ao redor em um sentido mais amplo:
                    hospital, casa de repouso, própria casa)</td>
                <td>
                    <input type="radio" name="orientacaoEspacial_quest2" value="0" {{ old('orientacaoEspacial_quest2') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="orientacaoEspacial_quest2" value="1" {{ old('orientacaoEspacial_quest2') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Em que bairro estamos ou qual o nome de uma rua próxima?</td>
                <td>
                    <input type="radio" name="orientacaoEspacial_quest3" value="0" {{ old('orientacaoEspacial_quest3') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="orientacaoEspacial_quest3" value="1" {{ old('orientacaoEspacial_quest3') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Em que cidade nós estamos?</td>
                <td>
                    <input type="radio" name="orientacaoEspacial_quest4" value="0" {{ old('orientacaoEspacial_quest4') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="orientacaoEspacial_quest4" value="1" {{ old('orientacaoEspacial_quest4') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Em que Estado nós estamos?</td>
                <td>
                    <input type="radio" name="orientacaoEspacial_quest5" value="0" {{ old('orientacaoEspacial_quest5') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="orientacaoEspacial_quest5" value="1" {{ old('orientacaoEspacial_quest5') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <p>Memória imediata - 01 ponto:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Pontuação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Repita as palavras: CARRO, VASO e TIJOLO</td>
                <td>
                    <input type="radio" name="memoriaImediata_quest1" value="0" {{ old('memoriaImediata_quest1') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="memoriaImediata_quest1" value="1" {{ old('memoriaImediata_quest1') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <p>Cálculo - 05 pontos:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Pontuação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Subtraia 100 – 7 = 93 – 7 = 86 – 7 = 79 – 7 = 72 – 7 = 65</td>
                <td>
                    <input type="radio" name="calculo_quest1" value="0" {{ old('calculo_quest1') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="calculo_quest1" value="1" {{ old('calculo_quest1') == "1" ? 'checked' : '' }}>
                    <span>1</span>

                    <input type="radio" name="calculo_quest1" value="2" {{ old('calculo_quest1') == "2" ? 'checked' : '' }}>
                    <span>2</span>

                    <input type="radio" name="calculo_quest1" value="3" {{ old('calculo_quest1') == "3" ? 'checked' : '' }}>
                    <span>3</span>

                    <input type="radio" name="calculo_quest1" value="4" {{ old('calculo_quest1') == "4" ? 'checked' : '' }}>
                    <span>4</span>

                    <input type="radio" name="calculo_quest1" value="5" {{ old('calculo_quest1') == "5" ? 'checked' : '' }}>
                    <span>5</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <p>Evocação das palavras - 03 pontos:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Pontuação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Quais as três palavras perguntadas anteriormente?</td>
                <td>
                    <input type="radio" name="evocacaoPalavras_quest1" value="0" {{ old('evocacaoPalavras_quest1') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="evocacaoPalavras_quest1" value="1" {{ old('evocacaoPalavras_quest1') == "1" ? 'checked' : '' }}>
                    <span>1</span>

                    <input type="radio" name="evocacaoPalavras_quest1" value="2" {{ old('evocacaoPalavras_quest1') == "2" ? 'checked' : '' }}>
                    <span>2</span>

                    <input type="radio" name="evocacaoPalavras_quest1" value="3" {{ old('evocacaoPalavras_quest1') == "3" ? 'checked' : '' }}>
                    <span>3</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <p>Nomeação - 05 pontos:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Pontuação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ex: caneta, relógio</td>
                <td>
                    <input type="radio" name="nomeacao_quest1" value="0" {{ old('nomeacao_quest1') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="nomeacao_quest1" value="1" {{ old('nomeacao_quest1') == "1" ? 'checked' : '' }}>
                    <span>1</span>

                    <input type="radio" name="nomeacao_quest1" value="2" {{ old('nomeacao_quest1') == "2" ? 'checked' : '' }}>
                    <span>2</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <p>Repetição - 01 ponto:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Pontuação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>“NEM AQUI, NEM ALI, NEM LÁ”</td>
                <td>
                    <input type="radio" name="repeticao_quest1" value="0" {{ old('repeticao_quest1') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="repeticao_quest1" value="1" {{ old('repeticao_quest1') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <p>Comando - 03 pontos:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Pontuação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>“Apanhe esta folha de papel com a mão direita, dobre-a ao meio e coloque-a no chão”
                </td>
                <td>
                    <input type="radio" name="comando_quest1" value="0" {{ old('comando_quest1') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="comando_quest1" value="1" {{ old('comando_quest1') == "1" ? 'checked' : '' }}>
                    <span>1</span>

                    <input type="radio" name="comando_quest1" value="2" {{ old('comando_quest1') == "2" ? 'checked' : '' }}>
                    <span>2</span>

                    <input type="radio" name="comando_quest1" value="3" {{ old('comando_quest1') == "3" ? 'checked' : '' }}>
                    <span>3</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <p>Leitura - 01 ponto:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Pontuação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>“FECHE SEUS OLHOS”</td>
                <td>
                    <input type="radio" name="leitura_quest1" value="0" {{ old('leitura_quest1') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="leitura_quest1" value="1" {{ old('leitura_quest1') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <p>Escrever uma frase completa - 01 ponto:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Pontuação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>“Escreva alguma frase que tenha começo, meio e fim”</td>
                <td>
                    <input type="radio" name="escreverFrase_quest1" value="0" {{ old('escreverFrase_quest1') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="escreverFrase_quest1" value="1" {{ old('escreverFrase_quest1') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <p>Copiar diagrama - 01 ponto:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Pontuação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img src="/img/diagrama.png" alt="">
                </td>
                <td>
                    <input type="radio" name="copiarDiagrama_quest1" value="0" {{ old('copiarDiagrama_quest1') == "0" ? 'checked' : '' }}>
                    <span>0</span>

                    <input type="radio" name="copiarDiagrama_quest1" value="1" {{ old('copiarDiagrama_quest1') == "1" ? 'checked' : '' }}>
                    <span>1</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <p>Pontos de corte (de acordo com a escolaridade)</p>
    <span>• Analfabeto: 20</span><br>
    <span>• 1 a 4 anos de escolaridade: 25</span><br>
    <span>•	5 a 8 anos de escolaridade: 26,5</span><br>
    <span>•	9 a 11 anos de escolaridade: 28</span><br>
    <span>•	> 11 anos de escolaridade: 29</span><br><br>

    <input type="radio" name="comprometimentoCognitivo" value="Ausência de compromentimento cognitivo" {{ old('comprometimentoCognitivo') == "Ausência de compromentimento cognitivo" ? 'checked' : '' }}>
    <span>Ausência de compromentimento cognitivo</span><br>

    <input type="radio" name="comprometimentoCognitivo" value="Presença de compromentimento cognitivo" {{ old('comprometimentoCognitivo') == "Presença de compromentimento cognitivo" ? 'checked' : '' }}>
    <span>Presença de compromentimento cognitivo (escore baixo)</span>
</div>

<br>
<h4>Psíquica: Humor</h4>
<h4>Escala de depressão geriátrica – GDS-15 (PEREIRA, 2017) </h4>

<div class=" form-control">
    <p>Orientação espacial - 05 pontos:</p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Respostas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nesta última semana você estava satisfeito(a) com sua vida?</td>
                <td>
                    <input type="radio" name="humor_quest1" value="0" {{ old('humor_quest1') == "0" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest1" value="1" {{ old('humor_quest1') == "1" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você deixou de realizar atividades de seu interesse?
                </td>
                <td>
                    <input type="radio" name="humor_quest2" value="1" {{ old('humor_quest2') == "1" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest2" value="0" {{ old('humor_quest2') == "0" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você sentiu que sua vida estava vazia?</td>
                <td>
                    <input type="radio" name="humor_quest3" value="1" {{ old('humor_quest3') == "1" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest3" value="0" {{ old('humor_quest3') == "0" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você sentiu aborrecido(a)?</td>
                <td>
                    <input type="radio" name="humor_quest4" value="1" {{ old('humor_quest4') == "1" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest4" value="0" {{ old('humor_quest4') == "0" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você estava animado na maior parte do tempo?</td>
                <td>
                    <input type="radio" name="humor_quest5" value="0" {{ old('humor_quest5') == "0" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest5" value="1" {{ old('humor_quest5') == "1" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você teve medo que alguma coisa ruim iria acontecer
                    contigo?</td>
                <td>
                    <input type="radio" name="humor_quest6" value="1" {{ old('humor_quest6') == "1" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest6" value="0" {{ old('humor_quest6') == "0" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você sentiu feliz na maior parte do tempo?</td>
                <td>
                    <input type="radio" name="humor_quest7" value="0" {{ old('humor_quest7') == "0" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest7" value="1" {{ old('humor_quest7') == "1" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você sentiu sozinho(a)?</td>
                <td>
                    <input type="radio" name="humor_quest8" value="1" {{ old('humor_quest8') == "1" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest8" value="0" {{ old('humor_quest8') == "0" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você preferiu ficar em casa do que ter saído e feito
                    coisas novas?</td>
                <td>
                    <input type="radio" name="humor_quest9" value="1" {{ old('humor_quest9') == "1" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest9" value="0" {{ old('humor_quest9') == "0" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você sentiu que teve mais problemas de memória do
                    que a maioria das pessoas?</td>
                <td>
                    <input type="radio" name="humor_quest10" value="1" {{ old('humor_quest10') == "1" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest10" value="0" {{ old('humor_quest10') == "0" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você sentiu que era maravilhoso estar vivo(a)?</td>
                <td>
                    <input type="radio" name="humor_quest11" value="0" {{ old('humor_quest11') == "0" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest11" value="1" {{ old('humor_quest11') == "1" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você sentiu inútil?</td>
                <td>
                    <input type="radio" name="humor_quest12" value="1" {{ old('humor_quest12') == "1" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest12" value="0" {{ old('humor_quest12') == "0" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você sentiu cheio(a) de energia?</td>
                <td>
                    <input type="radio" name="humor_quest13" value="0" {{ old('humor_quest13') == "0" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest13" value="1" {{ old('humor_quest13') == "1" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você sentiu que sua situação era sem esperança?</td>
                <td>
                    <input type="radio" name="humor_quest14" value="1" {{ old('humor_quest14') == "1" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest14" value="0" {{ old('humor_quest14') == "0" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Nesta última semana você achou que a maioria das pessoas estava melhor
                    do que você?</td>
                <td>
                    <input type="radio" name="humor_quest15" value="1" {{ old('humor_quest15') == "1" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="humor_quest15" value="0" {{ old('humor_quest15') == "0" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <h4>Sinais de violência doméstica</h4>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Respostas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Lesões corporais inexplicadas</td>
                <td>
                    <input type="radio" name="lesoesCorporaisInexplicadas" value="sim" {{ old('lesoesCorporaisInexplicadas') == "sim" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="lesoesCorporaisInexplicadas" value="nao" {{ old('lesoesCorporaisInexplicadas') == "0" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Descuido com higiene pessoal</td>
                <td>
                    <input type="radio" name="descuidoHigienePessoal" value="sim" {{ old('descuidoHigienePessoal') == "sim" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="descuidoHigienePessoal" value="nao" {{ old('descuidoHigienePessoal') == "nao" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Demora em buscar atendimento médico</td>
                <td>
                    <input type="radio" name="demoraBuscarAntendimentoMedico" value="sim" {{ old('demoraBuscarAntendimentoMedico') == "sim" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="demoraBuscarAntendimentoMedico" value="nao" {{ old('demoraBuscarAntendimentoMedico') == "nao" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Discordâncias entre a história do paciente e a do cuidador</td>
                <td>
                    <input type="radio" name="discordanciaDeHistoria" value="sim" {{ old('discordanciaDeHistoria') == "sim" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="discordanciaDeHistoria" value="nao" {{ old('discordanciaDeHistoria') == "nao" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Internações frequentes por não adesão a tratamentos</td>
                <td>
                    <input type="radio" name="InternacoesFrequentes" value="sim" {{ old('InternacoesFrequentes') == "sim" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="InternacoesFrequentes" value="nao" {{ old('InternacoesFrequentes') == "nao" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Ausência de familiar na consulta</td>
                <td>
                    <input type="radio" name="AusenciaDeFamiliar" value="sim" {{ old('AusenciaDeFamiliar') == "sim" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="AusenciaDeFamiliar" value="nao" {{ old('AusenciaDeFamiliar') == "nao"? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
            <tr>
                <td scope="row">Recusa/resistência à visita domiciliar</td>
                <td>
                    <input type="radio" name="RecusaAVisitaDomiciliar" value="sim" {{ old('RecusaAVisitaDomiciliar') == "sim" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="RecusaAVisitaDomiciliar" value="nao" {{ old('RecusaAVisitaDomiciliar') == "nao" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <h4>Espiritualidade</h4>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perguntas</th>
                <th>Respostas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Você se considera religioso ou espiritualizado?</td>
                <td>
                    <input type="radio" name="religioso" value="sim" {{ old('religioso') == "sim" ? 'checked' : '' }}>
                    <span>sim</span>
                    <input type="radio" name="religioso" value="nao" {{ old('religioso') == "nao" ? 'checked' : '' }}><span>não</span>
                   
                </td>
                <td></td>
            </tr>
            <tr>
                <td scope="row">Você tem crenças espirituais ou religiosas que te ajudam a lidar com
                    problemas?</td>
                <td>
                    <input type="radio" name="religiaoAjuda" value="sim" {{ old('religiaoAjuda') == "sim" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="religiaoAjuda" value="nao" {{ old('religiaoAjuda') == "nao" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
                <td></td>
            </tr>
            <tr>
                <td scope="row">Você faz parte de alguma comunidade religiosa ou espiritual?</td>
                <td>
                    <input type="radio" name="parteDeComuniddReligiosa" value="sim" {{ old('parteDeComuniddReligiosa') == "sim" ? 'checked' : '' }}>
                    <span>sim</span>

                    <input type="radio" name="parteDeComuniddReligiosa" value="nao" {{ old('parteDeComuniddReligiosa') == "nao" ? 'checked' : '' }}>
                    <span>não</span>
                </td>
                <td>
                    <input type="text" id="nomeComuniddReligiosa" name="nomeComuniddReligiosa" class="form-control" placeholder="Se sim, qual?">
                </td>
            </tr>
        </tbody>
    </table>
</div>
<input type="submit" class="btn btn-primary" value="Salvar e continuar" onclick="psicossocial()">
</div>
</div>

<div class="tab-pane {{old('tab') == 'av_funcional' ? ' active' : null}}" id="av_funcional" role="tabpanel" aria-labelledby="messages-tab">
<div id="form-create-container" class="col-md-6 offset-md-3">
<h1>III - Avaliação Funcional</h1>
<h4>Atividades de Vida Diária (AVD) – Índice de Katz</h4><br>
<form enctype="multipart/form-data" name="form_funcional">
@csrf
<input type="hidden" name="tab" value="av_funcional">
<input type="hidden" name="paciente_id" id="paciente_id" value="{{ $pacient->id }}" class="form-control">

<div class=" form-control">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Função</th>
                <th scope="col">Independência</th>
                <th scope="col">Dependência</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Banho</th>
                <td>
                    <input type="radio" name="banhoDependencia" value="0" {{ old('banhoDependencia') == "0" ? 'checked' : '' }}>
                    <span>Requer ajuda somente para lavar uma única parte do corpo (como as costas ou
                        membro deficiente) ou toma banho sozinho</span>
                </td>
                <td>
                    <input type="radio" name="banhoDependencia" value="1" {{ old('banhoDependencia') == "1" ? 'checked' : '' }}>
                    <span>Requer ajuda para lavar mais de uma parte do corpo, ou para entrar ou sair da
                        banheira, ou não toma banho sozinho</span>
                </td>
            </tr>
            <tr>
                <th scope="row">Vestir-se</th>
                <td>
                    <input type="radio" name="vestirseDependencia" value="0" {{ old('vestirseDependencia') == "0" ? 'checked' : '' }}>
                    <span>Pega as roupas nos armários e gavetas, veste-as, coloca órteses ou próteses,
                        manuseia fechos. Exclui-se o ato de amarrar sapatos.</span>
                </td>
                <td>
                    <input type="radio" name="vestirseDependencia" value="1" {{ old('vestirseDependencia') == "1" ? 'checked' : '' }}>
                    <span>Veste-se apenas parcialmente ou não se veste sozinho</span>
                </td>
            </tr>
            <tr>
                <th scope="row">Uso do vaso sanitário</th>
                <td>
                    <input type="radio" name="usoVasoSanitarioDpendencia" value="0" {{ old('usoVasoSanitarioDpendencia') == "0" ? 'checked' : '' }}>
                    <span>Vai ao vaso sanitário, senta-se e levanta-se do vaso; ajeita as roupas, faz a
                        higiene íntima (pode usar comadre ou similar somente à noite e pode ou não estar
                        usando suportes mecânicos)</span>
                </td>
                <td>
                    <input type="radio" name="usoVasoSanitarioDpendencia" value="1" {{ old('usoVasoSanitarioDpendencia') == "1" ? 'checked' : '' }}>
                    <span>Usa comadre ou similar, controlado por terceiros, ou recebe ajuda para ir até
                        o vaso sanitário e usá-lo.</span>
                </td>
            </tr>
            <tr>
                <th scope="row">Transferência</th>
                <td>
                    <input type="radio" name="transferenciaDependencia" value="0" {{ old('transferenciaDependencia') == "0" ? 'checked' : '' }}>
                    <span>Deita-se e sai da cama sozinho, senta e se levanta da cadeira sozinho (pode
                        estar usando objeto de apoio)</span>
                </td>
                <td>
                    <input type="radio" name="transferenciaDependencia" value="1" {{ old('transferenciaDependencia') == "1" ? 'checked' : '' }}>
                    <span>Requer ajuda para deitar-se na cama ou sentar na cadeira, ou para levantar-se;
                        não faz uma ou mais transferências</span>
                </td>
            </tr>
            <tr>
                <th scope="row">Continência</th>
                <td>
                    <input type="radio" name="continenciaDependencia" value="0" {{ old('continenciaDependencia') == "0" ? 'checked' : '' }}>
                    <span>Micção e evacuação inteiramente autocontrolados</span>
                </td>
                <td>
                    <input type="radio" name="continenciaDependencia" value="1" {{ old('continenciaDependencia') == "1" ? 'checked' : '' }}>
                    <span>Incontinência parcial ou total para micção ou evacuação; controle parcial ou
                        total por enemas e/ou cateteres; uso de urinóis ou comadre controlado por
                        terceiros. Acidentes “ocasionais”.</span>
                </td>
            </tr>
            <tr>
                <th scope="row">Alimentar-se</th>
                <td>
                    <input type="radio" name="alimentarseDependencia" value="0" {{ old('alimentarseDependencia') == "0" ? 'checked' : '' }}>
                    <span>Leva a comida do prato (ou de seu equivalente) à boca. O corte prévio da carne
                        e o preparo do alimento, como passar manteiga no pão, são excluídos da
                        avaliação</span>
                </td>
                <td>
                    <input type="radio" name="alimentarseDependencia" value="1" {{ old('alimentarseDependencia') == "1" ? 'checked' : '' }}>
                    <span>Requer ajuda para levar a comida do prato (ou de seu equivalente) à boca; não
                        come nada ou recebe alimentação parenteral</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <br>
    <h4>Atividades Instrumentais da Vida Diária (AIVD) – Escala de Lawton & Brody</h4><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Perguntas</th>
                <th colspan="3">Respostas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Em relação ao uso do telefone...</th>
                <td>
                    <input type="radio" name="usoTelefoneDependencia" value="3" {{ old('usoTelefoneDependencia') == "3" ? 'checked' : '' }}>
                    <span>Recebe e faz ligações sem assistência</span>
                </td>
                <td>
                    <input type="radio" name="usoTelefoneDependencia" value="2" {{ old('usoTelefoneDependencia') == "2" ? 'checked' : '' }}>
                    <span>Necessita de assistência para realizar ligações telefônicas</span>
                </td>
                <td>
                    <input type="radio" name="usoTelefoneDependencia" value="1" {{ old('usoTelefoneDependencia') == "1" ? 'checked' : '' }}>
                    <span>Não tem ou hábito ou é incapaz de usar telefone</span>
                </td>
            </tr>
            <tr>
                <th scope="row">Em relação às viagens...</th>
                <td>
                    <input type="radio" name="viagensDependencia" value="3" {{ old('viagensDependencia') == "0" ? 'checked' : '' }}>
                    <span>Realiza viagens sozinha</span>
                </td>
                <td>
                    <input type="radio" name="viagensDependencia" value="2" {{ old('viagensDependencia') == "1" ? 'checked' : '' }}>
                    <span>Somente viaja quando tem companhia</span>
                </td>
                <td>
                    <input type="radio" name="viagensDependencia" value="1" {{ old('viagensDependencia') == "1" ? 'checked' : '' }}>
                    <span>Não tem ou hábito ou é incapaz de viajar</span>
                </td>
            </tr>
            <tr>
                <th scope="row">Em relação à realização de compras...</th>
                <td>
                    <input type="radio" name="comprasDependencia" value="3" {{ old('comprasDependencia') == "0" ? 'checked' : '' }}>
                    <span>Realiza compras, quando é fornecido transporte</span>
                </td>
                <td>
                    <input type="radio" name="comprasDependencia" value="2" {{ old('comprasDependencia') == "1" ? 'checked' : '' }}>
                    <span>Somente faz compras quando tem companhia</span>
                </td>
                <td>
                    <input type="radio" name="comprasDependencia" value="1" {{ old('comprasDependencia') == "1" ? 'checked' : '' }}>
                    <span>Não tem o hábito ou é incapaz de realizar compras</span>
                </td>
            </tr>
            <tr>
                <th scope="row">Em relação ao preparo de refeições...</th>
                <td>
                    <input type="radio" name="preparoRefeicoesDependencia" value="3" {{ old('preparoRefeicoesDependencia') == "0" ? 'checked' : '' }}>
                    <span>Planeja e cozinha as refeições completas</span>
                </td>
                <td>
                    <input type="radio" name="preparoRefeicoesDependencia" value="2" {{ old('preparoRefeicoesDependencia') == "1" ? 'checked' : '' }}>
                    <span>Prepara somente refeições pequenas ou quando recebe ajuda</span>
                </td>
                <td>
                    <input type="radio" name="preparoRefeicoesDependencia" value="1" {{ old('preparoRefeicoesDependencia') == "1" ? 'checked' : '' }}>
                    <span>Não tem ou hábito ou é incapaz de preparar refeições</span>
                </td>
            </tr>
            <tr>
                <th scope="row">Em relação ao trabalho doméstico...</th>
                <td>
                    <input type="radio" name="trabalhoDomesticoDependencia" value="3" {{ old('trabalhoDomesticoDependencia') == "0" ? 'checked' : '' }}>
                    <span>Realiza tarefas pesadas</span>
                </td>
                <td>
                    <input type="radio" name="trabalhoDomesticoDependencia" value="2" {{ old('trabalhoDomesticoDependencia') == "1" ? 'checked' : '' }}>
                    <span>Realiza tarefas leves, necessitando de ajuda nas pesadas</span>
                </td>
                <td>
                    <input type="radio" name="trabalhoDomesticoDependencia" value="1" {{ old('trabalhoDomesticoDependencia') == "1" ? 'checked' : '' }}>
                    <span>Não tem ou hábito ou é incapaz de realizar trabalhos domésticos</span>
                </td>
            </tr>
            <tr>
                <th scope="row">Em relação ao uso de medicamentos...</th>
                <td>
                    <input type="radio" name="usoMedicamentoDependencia" value="3" {{ old('usoMedicamentoDependencia') == "0" ? 'checked' : '' }}>
                    <span>Faz uso de medicamentos sem assistência</span>
                </td>
                <td>
                    <input type="radio" name="usoMedicamentoDependencia" value="2" {{ old('usoMedicamentoDependencia') == "1" ? 'checked' : '' }}>
                    <span>Necessita de lembretes ou de assistência</span>
                </td>
                <td>
                    <input type="radio" name="usoMedicamentoDependencia" value="1" {{ old('usoMedicamentoDependencia') == "1" ? 'checked' : '' }}>
                    <span>É incapaz de controlar sozinho o uso dos medicamentos</span>
                </td>
            </tr>
            <tr>
                <th scope="row">Em relação ao manuseio do dinheiro</th>
                <td>
                    <input type="radio" name="manuseioDinheiroDependencia" value="3" {{ old('manuseioDinheiroDependencia') == "0" ? 'checked' : '' }}>
                    <span>Preenche cheques e paga contas sem auxílio</span>
                </td>
                <td>
                    <input type="radio" name="manuseioDinheiroDependencia" value="2" {{ old('manuseioDinheiroDependencia') == "1" ? 'checked' : '' }}>
                    <span>Necessita de assistência para uso de cheques e contas</span>
                </td>
                <td>
                    <input type="radio" name="manuseioDinheiroDependencia" value="1" {{ old('manuseioDinheiroDependencia') == "1" ? 'checked' : '' }}>
                    <span>Não tem ou hábito de lidar com o dinheiro ou é incapaz de manusear dinheiro,
                        contas...</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<br>
<h4>Rastreio da Vulnerabilidade – VES -13</h4><br>

<div class=" form-control">
    <table class="table table-striped">
        <thead>
            <tr>
                <th colspan="2">Idade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="radio" name="idade" value="1" {{ old('idade') == "1" ? 'checked' : '' }}>
                    <span>75 a 84 anos</span>
                </td>
                <td>
                    <input type="radio" name="idade" value="3" {{ old('idade') == "3" ? 'checked' : '' }}>
                    <span>>ou igual a 84 anos</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class=" form-control" id="teste">
    <p>Autopercepção da saúde</p>
     Em geral, comparando com outras pessoas de sua idade, você diria que sua saúde é: 
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th colspan="5"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="radio" name="autopercepcaoSaude" value="0" {{ old('autopercepcaoSaude') == "0" ? 'checked' : '' }}>
                    <span>Exelente</span>
                </td>
                <td>
                    <input type="radio" name="autopercepcaoSaude" value="0" {{ old('autopercepcaoSaude') == "0" ? 'checked' : '' }}>
                    <span>Muito boa</span>
                </td>
                <td>
                    <input type="radio" name="autopercepcaoSaude" value="0" {{ old('autopercepcaoSaude') == "0" ? 'checked' : '' }}>
                    <span>Boa</span>
                </td>
                <td>
                    <input type="radio" name="autopercepcaoSaude" value="1" {{ old('autopercepcaoSaude') == "1" ? 'checked' : '' }}>
                    <span>Regular</span>
                </td>
                <td>
                    <input type="radio" name="autopercepcaoSaude" value="1" {{ old('autopercepcaoSaude') == "1" ? 'checked' : '' }}>
                    <span>Ruim</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control" id="teste">
    <p>Limitação física</p>
     Em média, quanta dificuldade você tem para fazer as seguintes atividades físicas: 
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nenhuma dificuldade</th>
                <th scope="col">Pouca dificuldade</th>
                <th scope="col">Média dificuldade</th>
                <th scope="col">Muita dificuldade</th>
                <th scope="col">Incapaz de fazer</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Curvar-se, agachar ou ajoelhar-se</th>
                <td>
                    <input type="radio" name="limitacaoFisica_quest1" value="0" {{ old('limitacaoFisica_quest1') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest1" value="0" {{ old('limitacaoFisica_quest1') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest1" value="0" {{ old('limitacaoFisica_quest1') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest1" value="1" {{ old('limitacaoFisica_quest1') == "1" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest1" value="1" {{ old('limitacaoFisica_quest1') == "1" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <th scope="row">Levantar ou carregar objetos com peso aproximado de 5 kg?</th>
                <td>
                    <input type="radio" name="limitacaoFisica_quest2" value="0" {{ old('limitacaoFisica_quest2') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest2" value="0" {{ old('limitacaoFisica_quest2') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest2" value="0" {{ old('limitacaoFisica_quest2') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest2" value="1" {{ old('limitacaoFisica_quest2') == "1" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest2" value="1" {{ old('limitacaoFisica_quest2') == "1" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <th scope="row">Elevar ou estender os braços acima do nível do ombro</th>
                <td>
                    <input type="radio" name="limitacaoFisica_quest3" value="0" {{ old('limitacaoFisica_quest3') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest3" value="0" {{ old('limitacaoFisica_quest3') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest3" value="0" {{ old('limitacaoFisica_quest3') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest3" value="1" {{ old('limitacaoFisica_quest3') == "1" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest3" value="1" {{ old('limitacaoFisica_quest3') == "1" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <th scope="row">Escrever ou manusear e segurar pequenos objetos?</th>
                <td>
                    <input type="radio" name="limitacaoFisica_quest4" value="0" {{ old('limitacaoFisica_quest4') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest4" value="0" {{ old('limitacaoFisica_quest4') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest4" value="0" {{ old('limitacaoFisica_quest4') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest4" value="1" {{ old('limitacaoFisica_quest4') == "1" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest4" value="1" {{ old('limitacaoFisica_quest4') == "1" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <th scope="row">Andar 400 m (aproximadamente quatro quarteirões)?</th>
                <td>
                    <input type="radio" name="limitacaoFisica_quest5" value="0" {{ old('limitacaoFisica_quest5') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest5" value="0" {{ old('limitacaoFisica_quest5') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest5" value="0" {{ old('limitacaoFisica_quest5') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest5" value="1" {{ old('limitacaoFisica_quest5') == "1" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest5" value="1" {{ old('limitacaoFisica_quest5') == "1" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <th scope="row">Fazer serviço doméstico pesado como esfregar o chão ou limpar janelas?
                </th>
                <td>
                    <input type="radio" name="limitacaoFisica_quest6" value="0" {{ old('limitacaoFisica_quest6') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest6" value="0" {{ old('limitacaoFisica_quest6') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest6" value="0" {{ old('limitacaoFisica_quest6') == "0" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest6" value="1" {{ old('limitacaoFisica_quest6') == "1" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="limitacaoFisica_quest6" value="1" {{ old('limitacaoFisica_quest6') == "1" ? 'checked' : '' }}>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class=" form-control">
    <p>Incapacidades</p>
    <span>Por causa de sua saúde ou condição física, você tem alguma dificuldade para:</span>

    <p>Fazer compras de itens pessoais (como produtos de higiene e medicamentos)?</p>
    <input type="radio" id="fazerComprasSim" onchange="disabilitarHabilitarInput()" name="incapacidades_quest1" value="4" {{ old('incapacidades_quest1') == "4" ? 'checked' : '' }}>
    <span>sim</span>

    <input type="radio" id="fazerComprasNao" onchange="disabilitarHabilitarInput()" name="incapacidades_quest1" value="0" {{ old('incapacidades_quest1') == "0" ? 'checked' : '' }}>
    <span>não</span>

    <input type="radio" id="fazerComprasNaoFaco" onchange="disabilitarHabilitarInput()" name="incapacidades_quest1" value="0" {{ old('incapacidades_quest1') == "0" ? 'checked' : '' }}>
    <span>Não faço compras</span>

    <p id="fazerComprasQuest2" aria-disabled="true">Você recebe ajuda para fazer compras</p>
    <input type="radio" id="simQuest2Compras" disabled name="incapacidades_quest1_1" value="4" {{ old('incapacidades_quest1_1') == "4" ? 'checked' : '' }}>
    <span id="fazerComprasSimSpan2" aria-disabled="true">Sim</span>

    <input type="radio" id="naoQuest2Compras" disabled name="incapacidades_quest1_1" value="0" {{ old('incapacidades_quest1_1') == "0" ? 'checked' : '' }}>
    <span id="fazerComprasNaoSpan2" aria-disabled="true">Não</span>

    <p id="fazerComprasQuest3" aria-disabled="true">Isso acontece por conta da sua saúde?</p>
    <input type="radio" id="simQuest3Compras" disabled name="incapacidades_quest1_2" value="4" {{ old('incapacidades_quest1_2') == "4" ? 'checked' : '' }}>
    <span id="fazerComprasSimSpan3" aria-disabled="true">Sim</span>

    <input type="radio" id="naoQuest3Compras" disabled name="incapacidades_quest1_2" value="0" {{ old('incapacidades_quest1_2') == "0" ? 'checked' : '' }}>
    <span id="fazerComprasNaoSpan3" aria-disabled="true">Não</span>


    <p>Lidar com dinheiro (como controlar suas despesas, gastos ou pagar contas)?</p>
    <input type="radio" id="lidaDinheiroSim" onchange="disabilitarHabilitarInput()" name="incapacidades_quest2" value="4" {{ old('incapacidades_quest2') == "4" ? 'checked' : '' }}>
    <span>Sim</span>

    <input type="radio" id="lidaDinheiroNao" onchange="disabilitarHabilitarInput()" name="incapacidades_quest2" value="0" {{ old('incapacidades_quest2') == "0" ? 'checked' : '' }}>
    <span>Não</span>

    <input type="radio" id="naolidaDinheiro" onchange="disabilitarHabilitarInput()" name="incapacidades_quest2" value="0" {{ old('incapacidades_quest2') == "0" ? 'checked' : '' }}>
    <span>Não lido com dinheiro</span>

    <p id="lidaDinheiroQuest2" aria-disabled="true">Você recebe ajuda para lidar com dinheiro?</p>
    <input type="radio" id="simQuest2Dinheiro" disabled name="incapacidades_quest2_1" value="4" {{ old('incapacidades_quest2_1') == "4" ? 'checked' : '' }}>
    <span id="lidaDinheiroSimSpan2" aria-disabled="true">Sim</span>

    <input type="radio" id="naoQuest2Dinheiro" disabled name="incapacidades_quest2_1" value="0" {{ old('incapacidades_quest2_1') == "0" ? 'checked' : '' }}>
    <span id="lidaDinheiroNaoSpan2" aria-disabled="true">Não</span>

    <p id="lidaDinheiroQuest3" aria-disabled="true">Isso acontece por conta da sua saúde?</p>
    <input type="radio" id="simQuest3Dinheiro" disabled name="incapacidades_quest2_2" value="4" {{ old('incapacidades_quest2_2') == "4" ? 'checked' : '' }}>
    <span id="lidaDinheiroSimSpan3" aria-disabled="true">Sim</span>

    <input type="radio" id="naoQuest3Dinheiro" disabled name="incapacidades_quest2_2" value="0" {{ old('incapacidades_quest2_2') == "0" ? 'checked' : '' }}>
    <span id="lidaDinheiroNaoSpan3" aria-disabled="true">Não</span>


    <p>Atravessar o quarto andando ou caminhando pela sala?</p>
    <input type="radio" id="atravessaQuartoSim" onchange="disabilitarHabilitarInput()" name="incapacidades_quest3" value="4" {{ old('incapacidades_quest3') == "4" ? 'checked' : '' }}>
    <span>Sim</span>

    <input type="radio" type="radio" id="atravessaQuartoNao" onchange="disabilitarHabilitarInput()" name="incapacidades_quest3" value="0" {{ old('incapacidades_quest3') == "0" ? 'checked' : '' }}>
    <span>Não</span>

    <input type="radio" type="radio" id="naoAnda" onchange="disabilitarHabilitarInput()" name="incapacidades_quest3" value="0" {{ old('incapacidades_quest3') == "0" ? 'checked' : '' }}>
    <span>Não ando</span>

    <p id="andarQuest2" aria-disabled="true">Você recebe ajuda para andar</p>
    <input type="radio" id="simQuest2Andar" disabled name="incapacidades_quest3_1" value="4" {{ old('incapacidades_quest3_1') == "4" ? 'checked' : '' }}>
    <span id="andarSimSpan2" aria-disabled="true">Sim</span>

    <input type="radio" id="naoQuest2Andar" disabled name="incapacidades_quest3_1" value="0" {{ old('incapacidades_quest3_1') == "0" ? 'checked' : '' }}>
    <span id="andarNaoSpan2" aria-disabled="true">Não</span>

    <p id="andarQuest3" aria-disabled="true">Isso acontece por conta da sua saúde?</p>
    <input type="radio" id="simQuest3Andar" disabled name="incapacidades_quest3_2" value="4" {{ old('incapacidades_quest3_2') == "4" ? 'checked' : '' }}>
    <span id="andarSimSpan3" aria-disabled="true">Sim</span>

    <input type="radio" id="naoQuest3Andar" disabled name="incapacidades_quest3_2" value="0" {{ old('incapacidades_quest3_2') == "0" ? 'checked' : '' }}>
    <span id="andarNaoSpan3" aria-disabled="true">Não</span>


    <p>Realizar tarefas domésticas leves (como lavar pratos, arrumar a casa ou fazer limpeza leve)?</p>
    <input type="radio" id="tarefaDomesticaSim" onchange="disabilitarHabilitarInput()" name="incapacidades_quest4" value="4" {{ old('incapacidades_quest4') == "4" ? 'checked' : '' }}>
    <span>Sim</span>

    <input type="radio" id="tarefaDomesticaNao" onchange="disabilitarHabilitarInput()" name="incapacidades_quest4" value="0" {{ old('incapacidades_quest4') == "0" ? 'checked' : '' }}>
    <span>Não</span>

    <input type="radio" id="naoFacoTarefaDomestica" onchange="disabilitarHabilitarInput()" name="incapacidades_quest4" value="0" {{ old('incapacidades_quest4') == "0" ? 'checked' : '' }}>
    <span>Não faço tarefas domésticas leves</span>

    <p id="tarefaDomesticaQuest2" aria-disabled="true">Você recebe ajuda para tarefas domésticas leves?
    </p>
    <input type="radio" id="simQuest2TarefaDomestica" disabled name="incapacidades_quest4_1" value="4" {{ old('incapacidades_quest4_1') == "4" ? 'checked' : '' }}>
    <span id="tarefaDomesticaSimSpan2" aria-disabled="true">Sim</span>

    <input type="radio" id="naoQuest2TarefaDomestica" disabled name="incapacidades_quest4_1" value="0" {{ old('incapacidades_quest4_1') == "0" ? 'checked' : '' }}>
    <span id="tarefaDomesticaNaoSpan2" aria-disabled="true">Não</span>

    <p id="tarefaDomesticaQuest3" aria-disabled="true">Isso acontece por conta da sua saúde?</p>
    <input type="radio" type="radio" id="simQuest3TarefaDomestica" disabled name="incapacidades_quest4_2" value="4" {{ old('incapacidades_quest4_2') == "4" ? 'checked' : '' }}>
    <span id="tarefaDomesticaSimSpan3" aria-disabled="true">Sim</span>

    <input type="radio" id="naoQuest3TarefaDomestica" disabled name="incapacidades_quest4_2" value="0" {{ old('incapacidades_quest4_2') == "0" ? 'checked' : '' }}>
    <span id="tarefaDomesticaNaoSpan3" aria-disabled="true">Não</span>


    <p>Tomar banho de chuveiro ou banheira?</p>
    <input type="radio" id="tomaBanhoSim" onchange="disabilitarHabilitarInput()" name="incapacidades_quest5" value="4" {{ old('incapacidades_quest5') == "4" ? 'checked' : '' }}>
    <span>Sim</span>

    <input type="radio" id="tomaBanhoNao" onchange="disabilitarHabilitarInput()" name="incapacidades_quest5" value="0" {{ old('incapacidades_quest5') == "0" ? 'checked' : '' }}>
    <span>Não</span>

    <input type="radio" id="naoTomaBanho" onchange="disabilitarHabilitarInput()" name="incapacidades_quest5" value="0" {{ old('incapacidades_quest5') == "0" ? 'checked' : '' }}>
    <span>Não tomo banho de chuveiro ou banheira</span>

    <p id="tomaBanhoQuest2" aria-disabled="true">Você recebe ajuda para tomar banho de chuveiro?</p>
    <input type="radio" id="simQuest2TomaBanho" disabled name="incapacidades_quest5_1" value="4" {{ old('incapacidades_quest5_1') == "4" ? 'checked' : '' }}>
    <span id="tomaBanhoSimSpan2" aria-disabled="true">Sim</span>

    <input type="radio" id="naoQuest2TomaBanho" disabled name="incapacidades_quest5_1" value="0" {{ old('incapacidades_quest5_1') == "0" ? 'checked' : '' }}>
    <span id="tomaBanhoNaoSpan2" aria-disabled="true">Não</span>

    <p id="tomaBanhoQuest3" aria-disabled="true">Isso acontece por conta da sua saúde?</p>
    <input type="radio" id="simQuest3TomaBanho" name="incapacidades_quest5_2" value="4" {{ old('incapacidades_quest5_2') == "4" ? 'checked' : '' }}>
    <span id="tomaBanhoSimSpan3" aria-disabled="true">Sim</span>

    <input type="radio" id="naoQuest3TomaBanho" name="incapacidades_quest5_2" value="0" {{ old('incapacidades_quest5_2') == "0" ? 'checked' : '' }}>
    <span id="tomaBanhoNaoSpan3" aria-disabled="true">Não</span>
</div>
<br>

<h4>Avaliação da mobilidade</h4>
<div class=" form-control">
    <p>Timed up and go test (PODSIADLO E RICHARDSON, 1991)</p>

    <input type="radio" name="av_mobilidade" value="baixo risco de quedas" {{ old('av_mobilidade') == "baixo risco de quedas" ? 'checked' : '' }}>
     Tempo de realização inferior a 15 segundos – baixo risco de quedas <br>

    <input type="radio" name="av_mobilidade" value="risco de quedas moderado" {{ old('av_mobilidade') == "risco de quedas moderado" ? 'checked' : '' }}>
     Tempo de realização de 20 a 30 segundos – risco de quedas moderado <br>

    <input type="radio" name="av_mobilidade" value="alto risco para quedas" {{ old('av_mobilidade') == "alto risco para quedas" ? 'checked' : '' }}>
     Tempo de realização superior a 35 segundos – alto risco para quedas br
</div>

<br>
<h4>Avaliação ambiental – Escala ambiental de risco de quedas</h4>
<br>
<div class=" form-control">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Local</th>
                <th scope="col">Avaliação</th>
                <th scope="col">Sim</th>
                <th scope="col">Não</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th rowspan="3">Áreas de locomoção</th>
                <td>
                    <span>Áreas de locomoção desimpedidas</span>
                </td>
                <td>
                    <input type="radio" name="areaLocomocao_areaLocomocaoDesimpedida" value="sim" {{ old('areaLocomocao_areaLocomocaoDesimpedida') == "sim" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="areaLocomocao_areaLocomocaoDesimpedida" value="nao" {{ old('areaLocomocao_areaLocomocaoDesimpedida') == "nao" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Presença de barras de apoio</span>
                </td>
                <td>
                    <input type="radio" name="areaLocomocao_barrasDeApoio" value="sim" {{ old('areaLocomocao_barrasDeApoio') == "sim" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="areaLocomocao_barrasDeApoio" value="nao" {{ old('areaLocomocao_barrasDeApoio') == "nao" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Pisos uniformes e tapetes bem fixos</span>
                </td>
                <td>
                    <input type="radio" name="areaLocomocao_pisosUniformesTapetesFixos" value="sim" {{ old('areaLocomocao_pisosUniformesTapetesFixos') == "sim" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="areaLocomocao_pisosUniformesTapetesFixos" value="nao" {{ old('areaLocomocao_pisosUniformesTapetesFixos') == "nao" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <th rowspan="2">Iluminação</th>
                <td>
                    <span>Presença de iluminação suficiente para clarear todo o interior de cada cômodo,
                        incluindo degraus</span>
                </td>
                <td>
                    <input type="radio" name="iluminacao_presencaIluminacao" value="sim" {{ old('iluminacao_presencaIluminacao') == "sim" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="iluminacao_presencaIluminacao" value="nao" {{ old('iluminacao_presencaIluminacao') == "nao" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Interruptores acessíveis na entrada dos cômodos</span>
                </td>
                <td>
                    <input type="radio" name="iluminacao_interruptoresAcessiveis" value="sim" {{ old('iluminacao_interruptoresAcessiveis') == "sim" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="iluminacao_interruptoresAcessiveis" value="nao1" {{ old('iluminacao_interruptoresAcessiveis') == "nao" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <th rowspan="2">Banheiro</th>
                <td>
                    <span>Área do chuveiro com antiderrapante</span>
                </td>
                <td>
                    <input type="radio" name="banheiro_areaChuveiroAntiderrapante" value="sim" {{ old('banheiro_areaChuveiroAntiderrapante') == "sim" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="banheiro_areaChuveiroAntiderrapante" value="nao" {{ old('banheiro_areaChuveiroAntiderrapante') == "nao" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Box com abertura fácil ou presença de cortina bem firme</span>
                </td>
                <td>
                    <input type="radio" name="banheiro_boxAberturaFacil" value="sim" {{ old('banheiro_boxAberturaFacil') == "sim" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="banheiro_boxAberturaFacil" value="nao" {{ old('banheiro_boxAberturaFacil') == "nao" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <th>Cozinha</th>
                <td>
                    <span>Armários: baixos, sem necessidade de uso de escada</span>
                </td>
                <td>
                    <input type="radio" name="cozinhaEQuarto_camaBoa" value="sim" {{ old('cozinhaEQuarto_camaBoa') == "sim" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="cozinhaEQuarto_camaBoa" value="nao" {{ old('cozinhaEQuarto_camaBoa') == "nao" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <th rowspan="2">Escada</th>
                <td>
                    <span>Piso antiderrapante</span>
                </td>
                <td>
                    <input type="radio" name="escada_pisoAntiderrapante" value="sim" {{ old('escada_pisoAntiderrapante') == "sim" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="escada_pisoAntiderrapante" value="nao" {{ old('escada_pisoAntiderrapante') == "nao" ? 'checked' : '' }}>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Corrimão dos dois lados e firme</span>
                </td>
                <td>
                    <input type="radio" name="escada_corrimaoDoisLados" value="sim" {{ old('escada_corrimaoDoisLados') == "sim" ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="radio" name="escada_corrimaoDoisLados" value="nao" {{ old('escada_corrimaoDoisLados') == "nao" ? 'checked' : '' }}>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<br>
<h4>Sono</h4>
<div class=" form-control">

    <p>Sonolência excessiva (hiperssonia)</p>

    <input type="radio" id="simQuest3TomaBanho" name="hiperssonia" value="sim" {{ old('hiperssonia') == "sim" ? 'checked' : '' }}>
    <span>Sim</span>

    <input type="radio" id="simQuest3TomaBanho" name="hiperssonia" value="nao" {{ old('hiperssonia') == "nao" ? 'checked' : '' }}>
    <span>Não</span>

    <p>Dificuldade em iniciar/manter o sono (insônia)</p>

    <input type="radio" id="simQuest3TomaBanho" name="insonia" value="sim" {{ old('insonia') == "sim" ? 'checked' : '' }}>
    <span>Sim</span>

    <input type="radio" id="simQuest3TomaBanho" name="insonia" value="nao" {{ old('insonia') == "nao" ? 'checked' : '' }}>
    <span>Não</span>

    <p>Comportamentos estranhos ou não usuais durante o sono (parassonia)</p>

    <input type="radio" id="simQuest3TomaBanho" name="parassonia" value="sim" {{ old('parassonia') == "sim" ? 'checked' : '' }}>
    <span>Sim</span>

    <input type="radio" id="simQuest3TomaBanho" name="parassonia" value="nao" {{ old('parassonia') == "nao" ? 'checked' : '' }}>
    <span>Não</span>
</div>

<br>
<h4>Nutrição</h4>

<div class=" form-control">
    <p>Peso</p>
    <input type="number" step="any" name="peso" placeholder="Kg" class="form-control" value="{{ old('peso') }}">
    <p>Altura</p>
    <input type="number" step="any" name="altura" placeholder="m²" class="form-control" value="{{ old('altura') }}">
</div>
<input type="submit" class="btn btn-primary" value="Salvar formulário" onclick="funcional()">

      
        <button type="submit" value="Cadastrar paciente">
            Cadastrar
        </button>
    </form>
</body>

</html>