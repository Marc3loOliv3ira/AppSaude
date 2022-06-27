@extends('layouts.main')

@section('title', 'Editando: '. $formulario->id)

@section('content')


<!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="exame_fisico-tab" data-bs-toggle="tab" data-bs-target="#exame_fisico" type="button" role="tab" aria-controls="exame_fisico" aria-selected="true">Exame
            Físico</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link {{old('tab') == 'av_psicossocial' ? 'active' : ''}}" id="av_psicossocial-tab" data-bs-toggle="tab" data-bs-target="#av_psicossocial" type="button" role="tab" aria-controls="av_psicossocial" aria-selected="false">Avaliação Psicossocial</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link {{old('tab') == 'av_funcional' ? 'active' : ''}}" id="av_funcional-tab" data-bs-toggle="tab" data-bs-target="#av_funcional" type="button" role="tab" aria-controls="messages" aria-selected="false">Avaliação Funcional</button>
    </li>
</ul>


<!-- Tab panes -->

<div class="tab-content">

    <div class="tab-pane active" id="exame_fisico" role="tabpanel" aria-labelledby="exame_fisico-tab">
        <div id="form-create-container" class="col-md-6 offset-md-3">
            <form action="/form/update/{{ $formulario->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <h1>EDITANDO: EXAME FÍSICO</h1>
                <h3>Exame da cabeça e do pescoço</h3>

                <input type="hidden" name="paciente_id" id="paciente_id" value="{{ $formulario->pacient_id }}" class="form-control">

                <div class="form-group">
                    <p>Couro cabeludo:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_couroCabeludo[0]" value="normal - sem alteração" {{ (is_array(old('exam_couroCabeludo')) && in_array('normal - sem alteração', old('exam_couroCabeludo'))) ? ' checked' : '' }} />
                                <label>Normal - sem alteração</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_couroCabeludo[1]" value="higienização comprometida" {{ (is_array(old('exam_couroCabeludo')) && in_array('higienização comprometida', old('exam_couroCabeludo'))) ? ' checked' : '' }}>
                                <label>Higienização comprometida</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_couroCabeludo[2]" value="dermatite seborreica" {{ (is_array(old('exam_couroCabeludo')) && in_array('dermatite seborreica', old('exam_couroCabeludo'))) ? ' checked' : '' }}>
                                <label>Dermatite seborreica</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_couroCabeludo[3]" value="pediculose" {{ (is_array(old('exam_couroCabeludo')) && in_array('pediculose', old('exam_couroCabeludo'))) ? ' checked' : '' }}>
                                <label>Pediculose</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_couroCabeludo[4]" value="foliculite" {{ (is_array(old('exam_couroCabeludo')) && in_array('foliculite', old('exam_couroCabeludo'))) ? ' checked' : '' }}>
                                <label>Foliculite</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_couroCabeludo[5]" value="calvíce" {{ (is_array(old('exam_couroCabeludo')) && in_array('calvíce', old('exam_couroCabeludo'))) ? ' checked' : '' }}>
                                <label>Calvíce</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_couroCabeludo[6]" value="alopécia" {{ (is_array(old('exam_couroCabeludo')) && in_array('alopécia', old('exam_couroCabeludo'))) ? ' checked' : '' }}>
                                <label>Alopécia</label>
                            </td>
                            <td>
                                <input type="text" name="exam_couroCabeludo[7]" placeholder="Outro" class="form-control" value="{{ old('exam_couroCabeludo.7') }}">
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Olhos:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="acuidade visual sem alterações" {{ (is_array(old('exam_olhos')) && in_array('acuidade visual sem alterações', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>Acuidade visual sem alterações</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="acuidade visual alterada" {{ (is_array(old('exam_olhos')) && in_array('acuidade visual sem alterações', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>Acuidade visual alterada</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="edema de pálpebras" {{ (is_array(old('exam_olhos')) && in_array('edema de pálpebras', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>Edema de pálpebras</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="exantelasma" {{ (is_array(old('exam_olhos')) && in_array('exantelasma', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>Exantelasma</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="tersol ou blefarite" {{ (is_array(old('exam_olhos')) && in_array('tersol ou blefarite', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>tersol ou blefarite </label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="ptose palpebral" {{ (is_array(old('exam_olhos')) && in_array('ptose palpebral', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>ptose palpebral </label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="miastemia" {{ (is_array(old('exam_olhos')) && in_array('miastemia', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>miastemia</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="lagoftalmia" {{ (is_array(old('exam_olhos')) && in_array('lagoftalmia', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>lagoftalmia</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="Cataratas" {{ (is_array(old('exam_olhos')) && in_array('Cataratas', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>Cataratas</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="Glaucoma" {{ (is_array(old('exam_olhos')) && in_array('Glaucoma', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>Glaucoma</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="Cirurgia ocular recente" {{ (is_array(old('exam_olhos')) && in_array('Cirurgia ocular recente', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>Cirurgia ocular recente </label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="Faz controle oftalmológico anual" {{ (is_array(old('exam_olhos')) && in_array('Faz controle oftalmológico anual', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>Faz controle oftalmológico anual </label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="Sem exame oftalmológico há mais de 1 ano" {{ (is_array(old('exam_olhos')) && in_array('Sem exame oftalmológico há mais de 1 ano', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>Sem exame oftalmológico há mais de 1 ano</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="Nunca fez exame oftalmológico" {{ (is_array(old('exam_olhos')) && in_array('Nunca fez exame oftalmológico', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>Nunca fez exame oftalmológico </label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_olhos[]" value="outros" {{ (is_array(old('exam_olhos')) && in_array('outros', old('exam_olhos'))) ? ' checked' : '' }}>
                                <label>Outro</label>
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Ouvidos:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_ouvido[]" value="acuidade auditiva sem alterações" {{ (is_array(old('exam_ouvido')) && in_array('acuidade auditiva sem alterações', old('exam_ouvido'))) ? ' checked' : '' }}>
                                <label>acuidade auditiva sem alterações </label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_ouvido[]" value="problema de audição" {{ (is_array(old('exam_ouvido')) && in_array('problema de audição', old('exam_ouvido'))) ? ' checked' : '' }}>
                                <label>problema de audição</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_ouvido[]" value="Uso de aparelho" {{ (is_array(old('exam_ouvido')) && in_array('Uso de aparelho', old('exam_ouvido'))) ? ' checked' : '' }}>
                                <label>Uso de aparelho</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_ouvido[]" value="manuseia aparelho/depende de outros" {{ (is_array(old('exam_ouvido')) && in_array('manuseia aparelho/depende de outros', old('exam_ouvido'))) ? ' checked' : '' }}>
                                <label>manuseia aparelho/depende de outros</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_ouvido[]" value="nunca fez avaliação auditiva" {{ (is_array(old('exam_ouvido')) && in_array('nunca fez avaliação auditiva', old('exam_ouvido'))) ? ' checked' : '' }}>
                                <label>nunca fez avaliação auditiva</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_ouvido[]" value="Presença de cerúmen" {{ (is_array(old('exam_ouvido')) && in_array('Presença de cerúmen', old('exam_ouvido'))) ? ' checked' : '' }}>
                                <label>Presença de cerúmen </label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_ouvido[]" value="Positivo para teste de sussurro" {{ (is_array(old('exam_ouvido')) && in_array('Positivo para teste de sussurro', old('exam_ouvido'))) ? ' checked' : '' }}>
                                <label>Positivo para teste de sussurro</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_ouvido[]" value="Negativo para teste de sussurro" {{ (is_array(old('exam_ouvido')) && in_array('Negativo para teste de sussurro', old('exam_ouvido'))) ? ' checked' : '' }}>
                                <label>Negativo para teste de sussurro</label>
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Boca:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_boca[]" value="boa condição higiênica, sem presença de lesões na mucosa" {{ (is_array(old('exam_boca')) && in_array('boa condição higiênica, sem presença de lesões na mucosa', old('exam_boca'))) ? ' checked' : '' }}>
                                <label>boa condição higiênica, sem presença de lesões na mucosa</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_boca[]" value="gengivite, aftas ou estomatites" {{ (is_array(old('exam_boca')) && in_array('gengivite, aftas ou estomatites', old('exam_boca'))) ? ' checked' : '' }}>
                                <label>gengivite, aftas ou estomatites</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_boca[]" value="lábios com herpes viral, rachaduras, queilose ou queilite" {{ (is_array(old('exam_boca')) && in_array('lábios com herpes viral, rachaduras, queilose ou queilite', old('exam_boca'))) ? ' checked' : '' }}>
                                <label>lábios com herpes viral, rachaduras, queilose ou queilite; </label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_boca[]" value="língua saburrosa ou acastanhada" {{ (is_array(old('exam_boca')) && in_array('língua saburrosa ou acastanhada', old('exam_boca'))) ? ' checked' : '' }}>
                                <label>língua saburrosa ou acastanhada</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_boca[]" value="boca seca ou xerostomia" {{ (is_array(old('exam_boca')) && in_array('sangramento', old('exam_boca'))) ? ' checked' : '' }}>
                                <label>boca seca ou xerostomia</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_boca[]" value="sangramento" {{ (is_array(old('exam_boca')) && in_array('sangramento', old('exam_boca'))) ? ' checked' : '' }}>
                                <label>sangramento</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_boca[]" value="manchas/leucoplasias" {{ (is_array(old('exam_boca')) && in_array('manchas/leucoplasias', old('exam_boca'))) ? ' checked' : '' }}>
                                <label>manchas/leucoplasias </label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_boca[]" value="dentição prejudicada" {{ (is_array(old('exam_boca')) && in_array('dentição prejudicada', old('exam_boca'))) ? ' checked' : '' }}>
                                <label>dentição prejudicada </label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_boca[]" value="uso de prótese dentária total" {{ (is_array(old('exam_boca')) && in_array('uso de prótese dentária total', old('exam_boca'))) ? ' checked' : '' }}>
                                <label>uso de prótese dentária total</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_boca[]" value="uso de prótese dentária parcial" {{ (is_array(old('exam_boca')) && in_array('uso de prótese dentária parcial', old('exam_boca'))) ? ' checked' : '' }}>
                                <label>uso de prótese dentária parcial </label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_boca[]" value="ausência de dentes" {{ (is_array(old('exam_boca')) && in_array('ausência de dentes', old('exam_boca'))) ? ' checked' : '' }}>
                                <label>ausência de dentes</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_boca[]" value="dor de dente" {{ (is_array(old('exam_boca')) && in_array('dor de dente', old('exam_boca'))) ? ' checked' : '' }}>
                                <label>dor de dente</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="text" name="exam_boca[12]" placeholder="Outro" class="form-control" value="{{ old('exam_boca.12') }}">
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Pescoço:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_pescoco[]" value="não há presença de gânglios visíveis e palpáveis" {{ (is_array(old('exam_pescoco')) && in_array('não há presença de gânglios visíveis e palpáveis', old('exam_pescoco'))) ? ' checked' : '' }}>
                                <label>não há presença de gânglios visíveis e palpáveis</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_pescoco[]" value="presença de gânglios" {{ (is_array(old('exam_pescoco')) && in_array('presença de gânglios', old('exam_pescoco'))) ? ' checked' : '' }}>
                                <label>presença de gânglios</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_pescoco[]" value="veias jugulares ingurgitadas" {{ (is_array(old('exam_pescoco')) && in_array('veias jugulares ingurgitadas', old('exam_pescoco'))) ? ' checked' : '' }}>
                                <label>veias jugulares ingurgitadas</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_pescoco[]" value="desvio de traqueia" {{ (is_array(old('exam_pescoco')) && in_array('desvio de traqueia', old('exam_pescoco'))) ? ' checked' : '' }}>
                                <label>desvio de traqueia</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exam_pescoco[]" value="limitação de movimento" {{ (is_array(old('exam_pescoco')) && in_array('limitação de movimento', old('exam_pescoco'))) ? ' checked' : '' }}>
                                <label>limitação de movimento</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exam_pescoco[]" value="bócio" {{ (is_array(old('exam_pescoco')) && in_array('bócio', old('exam_pescoco'))) ? ' checked' : '' }}>
                                <label>bócio</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="text" name="exam_pescoco[6]" placeholder="Outro" class="form-control" value="{{ old('exam_pescoco.6') }}" />
                            </td>
                        </tbody>
                    </table>
                </div>

                <h3>Sistema respiratório</h3>

                <div class="form-group">
                    <p>Inspeção:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Tórax em tonel" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Tórax em tonel', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Tórax em "tonel"</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Tórax em funil" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Tórax em funil', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Tórax em "funil"</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Peito de pombo" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Peito de pombo', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>“Peito de pombo</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Abaulamento" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Abaulamento', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Abaulamento</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Retração" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Retração', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Retração</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Cifose" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Cifose', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Cifose</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Lordose" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Lordose', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Lordose</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Escoliose" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Escoliose', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Escoliose</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Movimentos simétricos durante a respiração" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Movimentos simétricos durante a respiração', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Movimentos simétricos durante a respiração </label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Movimentos assimétricos durante a respiração" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Movimentos assimétricos durante a respiração', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Movimentos assimétricos durante a respiração</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Circulação colateral" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Circulação colateral', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Circulação colateral </label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Tiragem intercostal" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Tiragem intercostal', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Tiragem intercostal </label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Ginecomastia" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Ginecomastia', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Ginecomastia</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Expansão torácica diminuída" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Expansão torácica diminuída', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Expansão torácica diminuída </label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_inspecao[]" value="Expansão torácica preservada" {{ (is_array(old('sisRespiratorio_inspecao')) && in_array('Expansão torácica preservada', old('sisRespiratorio_inspecao'))) ? ' checked' : '' }}>
                                <label>Expansão torácica preservada</label>
                            </td>
                            <td>
                                <input type="text" name="sisRespiratorio_inspecao[15]" placeholder="Outro" class="form-control" value="{{ old('sisRespiratorio_inspecao.15') }}">
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Palpação:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_palpacao[]" value="Sensibilidade à palpação" {{ (is_array(old('sisRespiratorio_palpacao')) && in_array('Sensibilidade à palpação', old('sisRespiratorio_palpacao'))) ? ' checked' : '' }}>
                                <label>Sensibilidade à palpação</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_palpacao[]" value="Enfisema subcutâneo" {{ (is_array(old('sisRespiratorio_palpacao')) && in_array('Enfisema subcutâneo', old('sisRespiratorio_palpacao'))) ? ' checked' : '' }}>
                                <label>Enfisema subcutâneo </label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_palpacao[]" value="Frêmitos palpáveis bilateralmente" {{ (is_array(old('sisRespiratorio_palpacao')) && in_array('Frêmitos palpáveis bilateralmente', old('sisRespiratorio_palpacao'))) ? ' checked' : '' }}>
                                <label>Frêmitos palpáveis bilateralmente </label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_palpacao[]" value="Frêmitos diminuídos" {{ (is_array(old('sisRespiratorio_palpacao')) && in_array('Frêmitos diminuídos', old('sisRespiratorio_palpacao'))) ? ' checked' : '' }}>
                                <label>Frêmitos diminuídos</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_palpacao[]" id="Nodulo" onChange="disabilitarHabilitarInput()" value="Nodulo" {{ (is_array(old('sisRespiratorio_palpacao')) && in_array('Nodulo', old('sisRespiratorio_palpacao'))) ? ' checked' : '' }}>
                                <label>Nódulo</label>
                                <input type="text" name="sisRespiratorio_palpacao[5]" id="localNodulo" placeholder="Local" disabled class="form-control" value="{{ old('sisRespiratorio_palpacao.5') }}">
                            </td>
                            <td>
                                <input type="text" name="sisRespiratorio_palpacao[6]" placeholder="Outro" class="form-control" value="{{ old('sisRespiratorio_palpacao.6') }}">
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Percussão:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_percussao[]" value="Som claro pulmonar" {{ (is_array(old('sisRespiratorio_percussao')) && in_array('Som claro pulmonar', old('sisRespiratorio_percussao'))) ? ' checked' : '' }}>
                                <label>Som claro pulmonar</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_percussao[]" value="Som timpânico" {{ (is_array(old('sisRespiratorio_percussao')) && in_array('Som timpânico', old('sisRespiratorio_percussao'))) ? ' checked' : '' }}>
                                <label>Som timpânico</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_percussao[]" value="Som maciço" {{ (is_array(old('sisRespiratorio_percussao')) && in_array('Som maciço', old('sisRespiratorio_percussao'))) ? ' checked' : '' }}>
                                <label>Som maciço</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_percussao[]" value="Som submaciço" {{ (is_array(old('sisRespiratorio_percussao')) && in_array('Som submaciço', old('sisRespiratorio_percussao'))) ? ' checked' : '' }}>
                                <label>Som submaciço</label>
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Ausculta:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_ausculta[]" value="Sons brônquicos" {{ (is_array(old('sisRespiratorio_ausculta')) && in_array('Sons brônquicos', old('sisRespiratorio_ausculta'))) ? ' checked' : '' }}>
                                <label>Sons brônquicos</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_ausculta[]" value="Murmúrio vesicular universalmente audível sem ruídos adventícios (MVUA s/ RA)" {{ (is_array(old('sisRespiratorio_ausculta')) && in_array('Murmúrio vesicular universalmente audível sem ruídos adventícios (MVUA s/ RA)', old('sisRespiratorio_ausculta'))) ? ' checked' : '' }}>
                                <label>Murmúrio vesicular universalmente audível sem ruídos adventícios (MVUA s/
                                    RA)</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_ausculta[]" value="eupneico" {{ (is_array(old('sisRespiratorio_ausculta')) && in_array('eupneico', old('sisRespiratorio_ausculta'))) ? ' checked' : '' }}>
                                <label>eupneico</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_ausculta[]" value="bradipneico" {{ (is_array(old('sisRespiratorio_ausculta')) && in_array('bradipneico', old('sisRespiratorio_ausculta'))) ? ' checked' : '' }}>
                                <label>bradipneico</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_ausculta[]" value="taquipneico" {{ (is_array(old('sisRespiratorio_ausculta')) && in_array('taquipneico', old('sisRespiratorio_ausculta'))) ? ' checked' : '' }}>
                                <label>taquipneico </label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="MVReduzido" name="sisRespiratorio_ausculta[]" value="MV reduzido" onChange="disabilitarHabilitarInput()" {{ (is_array(old('sisRespiratorio_ausculta')) && in_array('MV reduzido', old('sisRespiratorio_ausculta'))) ? ' checked' : '' }}>
                                <label>MV reduzido</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="text" id="localMVReduzido" name="sisRespiratorio_ausculta[6]" disabled class="form-control" placeholder="local" value="{{ old('sisRespiratorio_ausculta.6') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="MVAbolido" name="sisRespiratorio_ausculta[]" value="MV abolido" onChange="disabilitarHabilitarInput()" {{ (is_array(old('sisRespiratorio_ausculta')) && in_array('MV abolido', old('sisRespiratorio_ausculta'))) ? ' checked' : '' }}>
                                <label>MV abolido</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="text" id="localMVAbolido" name="sisRespiratorio_ausculta[8]" disabled class="form-control" placeholder="local" value="{{ old('sisRespiratorio_ausculta.8') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="Crepitacoes" name="sisRespiratorio_ausculta[]" value="Crepitações" onChange="disabilitarHabilitarInput()" {{ (is_array(old('sisRespiratorio_ausculta')) && in_array('Crepitações', old('sisRespiratorio_ausculta'))) ? ' checked' : '' }}>
                                <label>Crepitações</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="text" id="localCrepitacoes" name="sisRespiratorio_ausculta[10]" disabled class="form-control" placeholder="local" value="{{ old('sisRespiratorio_ausculta.10') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="Sibilos" name="sisRespiratorio_ausculta[]" value="Sibilos" onChange="disabilitarHabilitarInput()" {{ (is_array(old('sisRespiratorio_ausculta')) && in_array('Sibilos', old('sisRespiratorio_ausculta'))) ? ' checked' : '' }}>
                                <label>Sibilos</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="text" id="localSibilos" name="sisRespiratorio_ausculta[12]" disabled class="form-control" placeholder="local" value="{{ old('sisRespiratorio_ausculta.12') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="Roncos" name="sisRespiratorio_ausculta[]" value="Roncos" onChange="disabilitarHabilitarInput()" {{ (is_array(old('sisRespiratorio_ausculta')) && in_array('Roncos', old('sisRespiratorio_ausculta'))) ? ' checked' : '' }}>
                                <label>Roncos</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="text" id="localRoncos" name="sisRespiratorio_ausculta[14]" disabled class="form-control" placeholder="local" value="{{ old('sisRespiratorio_ausculta.14') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="Estertores" name="sisRespiratorio_ausculta[]" value="Estertores" onChange="disabilitarHabilitarInput()" {{ (is_array(old('sisRespiratorio_ausculta')) && in_array('Estertores', old('sisRespiratorio_ausculta'))) ? ' checked' : '' }}>
                                <label>Estertores</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="text" id="localEstertores" name="sisRespiratorio_ausculta[16]" disabled class="form-control" placeholder="local" value="{{ old('sisRespiratorio_ausculta.16') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="AtritoPleural" name="sisRespiratorio_ausculta[]" value="Atrito pleural" onChange="disabilitarHabilitarInput()" {{ (is_array(old('sisRespiratorio_ausculta')) && in_array('Atrito pleural', old('sisRespiratorio_ausculta'))) ? ' checked' : '' }}>
                                <label>Atrito pleural </label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="text" id="localAtritoPleural" name="sisRespiratorio_ausculta[18]" disabled class="form-control" placeholder="local" value="{{ old('sisRespiratorio_ausculta.18') }}">
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Outras queixas:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_outros[]" value="tosse seca" {{ (is_array(old('sisRespiratorio_outros')) && in_array('tosse seca', old('sisRespiratorio_outros'))) ? ' checked' : '' }}>
                                <label>Tosse seca</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_outros[]" value="tosse produtiva" {{ (is_array(old('sisRespiratorio_outros')) && in_array('tosse produtiva', old('sisRespiratorio_outros'))) ? ' checked' : '' }}>
                                <label>Tosse produtiva</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_outros[]" value="falta de ar aos pequenos esforços" {{ (is_array(old('sisRespiratorio_outros')) && in_array('falta de ar aos pequenos esforços', old('sisRespiratorio_outros'))) ? ' checked' : '' }}>
                                <label>Falta de ar aos pequenos esforços</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisRespiratorio_outros[]" value="gripes frequentes" {{ (is_array(old('sisRespiratorio_outros')) && in_array('gripes frequentes', old('sisRespiratorio_outros'))) ? ' checked' : '' }}>
                                <label>Gripes frequentes</label>
                            </td>
                        </tbody>
                    </table>
                </div>

                <h3>Sistema Cardiovascular</h3>

                <div class="form-group">
                    <p>Inspeção tórax/MMSS/MMII:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_inspecao[]" value="Varizes" {{ (is_array(old('sisCardiovascular_inspecao')) && in_array('Varizes', old('sisCardiovascular_inspecao'))) ? ' checked' : '' }}>
                                <label>Varizes</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_inspecao[]" value="Tromboflebite" {{ (is_array(old('sisCardiovascular_inspecao')) && in_array('Tromboflebite', old('sisCardiovascular_inspecao'))) ? ' checked' : '' }}>
                                <label>Tromboflebite</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_inspecao[]" value="Cianose de extremidades" {{ (is_array(old('sisCardiovascular_inspecao')) && in_array('Cianose de extremidades', old('sisCardiovascular_inspecao'))) ? ' checked' : '' }}>
                                <label>Cianose de extremidades</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_inspecao[]" value="Pulsações aparentes" {{ (is_array(old('sisCardiovascular_inspecao')) && in_array('Pulsações aparentes', old('sisCardiovascular_inspecao'))) ? ' checked' : '' }}>
                                <label>Pulsações aparentes</label>
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Palpação:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_palpacao[]" value="Pulsos arteriais palpáveis" {{ (is_array(old('sisCardiovascular_palpacao')) && in_array('Pulsos arteriais palpáveis', old('sisCardiovascular_palpacao'))) ? ' checked' : '' }}>
                                <label>Pulsos arteriais palpáveis</label>
                            </td>
                            <td>
                                <input type="checkbox" id="Edema" name="sisCardiovascular_palpacao[]" value="Edema" onchange="disabilitarHabilitarInput()" {{ (is_array(old('sisCardiovascular_palpacao')) && in_array('Edema', old('sisCardiovascular_palpacao'))) ? ' checked' : '' }}>
                                <label>Edema</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_palpacao[]" value="ritmo regular" {{ (is_array(old('sisCardiovascular_palpacao')) && in_array('ritmo regular', old('sisCardiovascular_palpacao'))) ? ' checked' : '' }}>
                                <label>Ritmo regular</label>
                            </td>
                            <td>
                                <input type="checkbox" id="edemaqtd1" disabled name="sisCardiovascular_palpacao[]" value="1+" {{ (is_array(old('sisCardiovascular_palpacao')) && in_array('1+', old('sisCardiovascular_palpacao'))) ? ' checked' : '' }}>
                                <label>1+</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_palpacao[]" value="ritmo irregular" {{ (is_array(old('sisCardiovascular_palpacao')) && in_array('ritmo irregular', old('sisCardiovascular_palpacao'))) ? ' checked' : '' }}>
                                <label>Ritmo irregular</label>
                            </td>
                            <td>
                                <input type="checkbox" id="edemaqtd2" disabled name="sisCardiovascular_palpacao[]" value="2+" {{ (is_array(old('sisCardiovascular_palpacao')) && in_array('2+', old('sisCardiovascular_palpacao'))) ? ' checked' : '' }}>
                                <label>2+</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_palpacao[]" value="simétricos" {{ (is_array(old('sisCardiovascular_palpacao')) && in_array('simétricos', old('sisCardiovascular_palpacao'))) ? ' checked' : '' }}>
                                <label>Simétricos</label>
                            </td>
                            <td>
                                <input type="checkbox" id="edemaqtd3" disabled name="sisCardiovascular_palpacao[]" value="3+" {{ (is_array(old('sisCardiovascular_palpacao')) && in_array('3+', old('sisCardiovascular_palpacao'))) ? ' checked' : '' }}>
                                <label>3+</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_palpacao[]" value="assimétricos" {{ (is_array(old('sisCardiovascular_palpacao')) && in_array('assimétricos', old('sisCardiovascular_palpacao'))) ? ' checked' : '' }}>
                                <label>Assimétricos</label>
                            </td>
                            <td>
                                <input type="checkbox" id="edemaqtd4" disabled name="sisCardiovascular_palpacao[]" value="4+" {{ (is_array(old('sisCardiovascular_palpacao')) && in_array('4+', old('sisCardiovascular_palpacao'))) ? ' checked' : '' }}>
                                <label>4+</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_palpacao[]" value="filiformes" {{ (is_array(old('sisCardiovascular_palpacao')) && in_array('filiformes', old('sisCardiovascular_palpacao'))) ? ' checked' : '' }}>
                                <label>Filiformes</label>
                            </td>
                            <td>
                                <input type="text" id="localEdema" disabled name="sisCardiovascular_palpacao[11]" class="form-control" placeholder="local" value="{{ old('sisCardiovascular_palpacao.11') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_palpacao[]" value="amplitude normal" {{ (is_array(old('sisCardiovascular_palpacao')) && in_array('amplitude normal', old('sisCardiovascular_palpacao'))) ? ' checked' : '' }}>
                                <label>Amplitude normal</label>
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Ausculta:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_ausculta[]" value="bulhas normofonéticas" {{ (is_array(old('sisCardiovascular_ausculta')) && in_array('bulhas normofonéticas', old('sisCardiovascular_ausculta'))) ? ' checked' : '' }}>
                                <label>Bulhas normofonéticas</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_ausculta[]" value="bulhas hipofonéticas" {{ (is_array(old('sisCardiovascular_ausculta')) && in_array('bulhas hipofonéticas', old('sisCardiovascular_ausculta'))) ? ' checked' : '' }}>
                                <label>Bulhas hipofonéticas </label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_ausculta[]" value="bulhas hiperfonéticas" {{ (is_array(old('sisCardiovascular_ausculta')) && in_array('bulhas hiperfonéticas', old('sisCardiovascular_ausculta'))) ? ' checked' : '' }}>
                                <label>Bulhas hiperfonéticas</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_ausculta[]" value="Sopros" {{ (is_array(old('sisCardiovascular_ausculta')) && in_array('Sopros', old('sisCardiovascular_ausculta'))) ? ' checked' : '' }}>
                                <label>Sopros</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_ausculta[]" value="B3" {{ (is_array(old('sisCardiovascular_ausculta')) && in_array('B3', old('sisCardiovascular_ausculta'))) ? ' checked' : '' }}>
                                <label>B3</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_ausculta[]" value="B4" {{ (is_array(old('sisCardiovascular_ausculta')) && in_array('B4', old('sisCardiovascular_ausculta'))) ? ' checked' : '' }}>
                                <label>B4</label>
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Considerações gerais:</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_outros[]" value="normocárdico" {{ (is_array(old('sisCardiovascular_outros')) && in_array('normocárdico', old('sisCardiovascular_outros'))) ? ' checked' : '' }}>
                                <label>Normocárdico</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_outros[]" value="bradicárdico" {{ (is_array(old('sisCardiovascular_outros')) && in_array('bradicárdico', old('sisCardiovascular_outros'))) ? ' checked' : '' }}>
                                <label>Bradicárdico</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_outros[]" value="taquicárdico" {{ (is_array(old('sisCardiovascular_outros')) && in_array('taquicárdico', old('sisCardiovascular_outros'))) ? ' checked' : '' }}>
                                <label>Taquicárdico</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_outros[]" value="normotenso" {{ (is_array(old('sisCardiovascular_outros')) && in_array('normotenso', old('sisCardiovascular_outros'))) ? ' checked' : '' }}>
                                <label>Normotenso</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_outros[]" value="hipotenso" {{ (is_array(old('sisCardiovascular_outros')) && in_array('hipotenso', old('sisCardiovascular_outros'))) ? ' checked' : '' }}>
                                <label>Hipotenso </label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_outros[]" value="hipertenso" {{ (is_array(old('sisCardiovascular_outros')) && in_array('hipertenso', old('sisCardiovascular_outros'))) ? ' checked' : '' }}>
                                <label>Hipertenso</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisCardiovascular_outros[]" value="hipotensão ortostática" {{ (is_array(old('sisCardiovascular_outros')) && in_array('hipotensão ortostática', old('sisCardiovascular_outros'))) ? ' checked' : '' }}>
                                <label>hipotensão ortostática </label>
                            </td>
                        </tbody>
                    </table>
                </div>

                <h3>Sistema urológico</h3>

                <div class="form-group">
                    <p>Perda de urina quando tosse, espirra, carrega peso ou ri?</p>
                    <input type="radio" name='sisUrologico_perdaDeUrinaTosseEspirraCarregaPesoRi' value='sim' {{ $exameFisico->sisUrologico_perdaDeUrinaTosseEspirraCarregaPesoRi == "sim" ? 'checked' : '' }}/>
                    <label>Sim</label>

                    <input type="radio" name='sisUrologico_perdaDeUrinaTosseEspirraCarregaPesoRi' value='nao' {{ $exameFisico->sisUrologico_perdaDeUrinaTosseEspirraCarregaPesoRi == "nao" ? 'checked' : '' }}/>
                    <label>Não</label>
                </div>

                <div class="form-group">
                    <p>Perda de urina quando tem uma vontade urgente de ir ao banheiro?</p>
                    <input type="radio" name='sisUrologico_perdaUrinaVontadeDeIrNoBanheiro' value='sim' {{ $exameFisico->sisUrologico_perdaUrinaVontadeDeIrNoBanheiro == "sim" ? 'checked' : '' }}/>
                    <label>Sim</label>

                    <input type="radio" name='sisUrologico_perdaUrinaVontadeDeIrNoBanheiro' value='nao' {{ $exameFisico->sisUrologico_perdaUrinaVontadeDeIrNoBanheiro == "nao" ? 'checked' : '' }}/>
                    <label>Não</label>
                </div>

                <div class="form-group">
                    <p>Frequência urinário por dia</p>
                    <input type="text" class="form-control" name="sisUrologico_frequenciaUrinaria" value="{{ $exameFisico->sisUrologico_frequenciaUrinaria }}">
                </div>

                <div class="form-group">
                    <p>Coloração/aspecto</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="radio" name="sisUrologico_coloracao" value="transparente" {{ $exameFisico->sisUrologico_coloracao == "transparente" ? 'checked' : '' }}>
                                <label>transparente</label>
                            </td>
                            <td>
                                <input type="radio" name="sisUrologico_coloracao" value="amarela claro" {{ $exameFisico->sisUrologico_coloracao == "amarela claro" ? 'checked' : '' }}>
                                <label>amarela claro</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="radio" name="sisUrologico_coloracao" value="amarela âmbar" {{ $exameFisico->sisUrologico_coloracao == "amarela âmbar" ? 'checked' : '' }}>
                                <label>amarela âmbar</label>
                            </td>
                            <td>
                                <input type="radio" name="sisUrologico_coloracao" value="laranja" {{ $exameFisico->sisUrologico_coloracao == "laranja" ? 'checked' : '' }}>
                                <label>laranja</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="radio" name=sisUrologico_coloracao" value="rósea/avermelhada" {{ $exameFisico->sisUrologico_coloracao == "rósea/avermelhada" ? 'checked' : '' }}>
                                <label>rósea/avermelhada </label>
                            </td>
                            <td>
                                <input type="radio" name="sisUrologico_coloracao" value="acastanhada" {{ $exameFisico->sisUrologico_coloracao == "acastanhada" ? 'checked' : '' }}>
                                <label>acastanhada</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="radio" name="sisUrologico_coloracao" value="esverdeada/azulada" {{ $exameFisico->sisUrologico_coloracao == "esverdeada/azulada" ? 'checked' : '' }}>
                                <label>esverdeada/azulada</label>
                            </td>
                            <td>
                                <input type="radio" name="sisUrologico_coloracao" value="hemática" {{ $exameFisico->sisUrologico_coloracao == "hemática" ? 'checked' : '' }}>
                                <label>hemática</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="radio" name="sisUrologico_coloracao" value="espumosa" {{ $exameFisico->sisUrologico_coloracao == "espumosa" ? 'checked' : '' }}>
                                <label>espumosa</label>
                            </td>
                            <td>
                                <input type="radio" name="sisUrologico_coloracao" value="piúria" {{ $exameFisico->sisUrologico_coloracao == "piúria" ? 'checked' : '' }}>
                                <label>piúria</label>
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Noctúria</p>
                    <input type="radio" name='sisUrologico_nocturia' value='sim' {{ $exameFisico->sisUrologico_nocturia == "sim" ? 'checked' : '' }}/>
                    <label>Sim</label>

                    <input type="radio" name='sisUrologico_nocturia' value='nao' {{ $exameFisico->sisUrologico_nocturia == "nao" ? 'checked' : '' }}/>
                    <label>Não</label>

                    <input type="text" name="sisUrologico_nocturia_qtd" class="form-control" placeholder="Se sim, quantas vezes por noite?" value="{{ $exameFisico->sisUrologico_nocturia_qtd }}">
                </div>

                <div class="form-group">
                    <p>Perda de urina durante o sexo</p>
                    <input type="radio" name='sisUrologico_perdaUrinaDuranteSexo' value='sim' {{ $exameFisico->sisUrologico_perdaUrinaDuranteSexo == "sim" ? 'checked' : '' }}/>
                    <label>Sim</label>

                    <input type="radio" name='sisUrologico_perdaUrinaDuranteSexo' value='nao' {{ $exameFisico->sisUrologico_perdaUrinaDuranteSexo == "nao" ? 'checked' : '' }}/>
                    <label>Não</label>
                </div>

                <div class="form-group">
                    <p>Uso de proteção (absorventes, panos, etc)</p>
                    <input type="radio" name='sisUrologico_usoProtecao' value='sim' {{ $exameFisico->sisUrologico_usoProtecao == "sim" ? 'checked' : '' }}/>
                    <label>Sim</label>

                    <input type="radio" name='sisUrologico_usoProtecao' value='nao' {{ $exameFisico->sisUrologico_usoProtecao == "nao" ? 'checked' : '' }}/>
                    <label>Não</label>
                </div>

                <div class="form-group">
                    <p>Esvaziamento completo da bexiga</p>
                    <input type="radio" name='sisUrologico_esvaziamentoCompleto' value='sim' {{ $exameFisico->sisUrologico_esvaziamentoCompleto == "sim" ? 'checked' : '' }}/>
                    <label>Sim</label>

                    <input type="radio" name='sisUrologico_esvaziamentoCompleto' value='nao' {{ $exameFisico->sisUrologico_esvaziamentoCompleto == "nao" ? 'checked' : '' }}/>
                    <label>Não</label>
                </div>

                <div class="form-group">
                    <p>Esforço para urinar</p>
                    <input type="radio" name='sisUrologico_esforcoParaUrinar' value='sim' {{ $exameFisico->sisUrologico_esforcoParaUrinar == "sim" ? 'checked' : '' }}/>
                    <label>Sim</label>

                    <input type="radio" name='sisUrologico_esforcoParaUrinar' value='nao' {{ $exameFisico->sisUrologico_esforcoParaUrinar == "nao" ? 'checked' : '' }}/>
                    <label>Não</label>
                </div>

                <div class="form-group">
                    <p>Odor de ureia</p>
                    <input type="radio" name='sisUrologico_odorUreia' value='sim' {{ $exameFisico->sisUrologico_odorUreia == "sim" ? 'checked' : '' }}/>
                    <label>Sim</label>

                    <input type="radio" name='sisUrologico_odorUreia' value='nao' {{ $exameFisico->sisUrologico_odorUreia == "nao" ? 'checked' : '' }}/>
                    <label>Não</label>
                </div>

                <div class="form-group">
                    <p>Urgência para usar o banheiro</p>
                    <input type="radio" name='sisUrologico_urgenciaParaBanheiro' value='sim' {{ $exameFisico->sisUrologico_urgenciaParaBanheiro == "sim" ? 'checked' : '' }}/>
                    <label>Sim</label>

                    <input type="radio" name='sisUrologico_urgenciaParaBanheiro' value='nao' {{ $exameFisico->sisUrologico_urgenciaParaBanheiro == "nao" ? 'checked' : '' }}/>
                    <label>Não</label>
                </div>

                <div class="form-group">
                    <p>Dor ao urinar</p>
                    <input type="radio" name='sisUrologico_dorAoUrinar' value='sim' {{ $exameFisico->sisUrologico_dorAoUrinar == "sim" ? 'checked' : '' }}/>
                    <label>Sim</label>

                    <input type="radio" name='sisUrologico_dorAoUrinar' value='nao' {{ $exameFisico->sisUrologico_dorAoUrinar == "nao" ? 'checked' : '' }}/>
                    <label>Não</label>
                </div>

                <div class="form-group">
                    <p>Dor renal</p>
                    <input type="radio" name='sisUrologico_dorRenal' value='sim' {{ $exameFisico->sisUrologico_dorRenal == "sim" ? 'checked' : '' }}/>
                    <label>Sim</label>

                    <input type="radio" name='sisUrologico_dorRenal' value='nao' {{ $exameFisico->sisUrologico_dorRenal == "nao" ? 'checked' : '' }}/>
                    <label>Não</label>
                </div>

                <div class="form-group">
                    <p>Presença de globo vesical palpável</p>
                    <input type="radio" name='sisUrologico_globoVesicalPalpavel' value='sim' {{ $exameFisico->sisUrologico_globoVesicalPalpavel == "sim" ? 'checked' : '' }}/>
                    <label>Sim</label>

                    <input type="radio" name='sisUrologico_globoVesicalPalpavel' value='nao' {{ $exameFisico->sisUrologico_globoVesicalPalpavel == "nao" ? 'checked' : '' }}/>
                    <label>Não</label>
                </div>

                <h3>Exame das Mamas – Genitálias (Se necessário de acordo com entrevista):</h3>

                <div class="form-group">
                    <p>Mamas</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exameMamas[]" value="mamas simétricas" {{ (is_array(old('exameMamas')) && in_array('mamas simétricas', old('exameMamas'))) ? ' checked' : '' }}>
                                <label>Mamas simétricas</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exameMamas[]" value="mamas assimétricas" {{ (is_array(old('exameMamas')) && in_array('mamas assimétricas', old('exameMamas'))) ? ' checked' : '' }}>
                                <label>Mamas assimétricas</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exameMamas[]" value="abaulamento" {{ (is_array(old('exameMamas')) && in_array('abaulamento', old('exameMamas'))) ? ' checked' : '' }}>
                                <label>Abaulamento</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exameMamas[]" value="retração" {{ (is_array(old('exameMamas')) && in_array('retração', old('exameMamas'))) ? ' checked' : '' }}>
                                <label>Retração</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exameMamas[]" value="hiperemia" {{ (is_array(old('exameMamas')) && in_array('hiperemia', old('exameMamas'))) ? ' checked' : '' }}>
                                <label>Hiperemia</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exameMamas[]" value="edema" {{ (is_array(old('exameMamas')) && in_array('edema', old('exameMamas'))) ? ' checked' : '' }}>
                                <label>Edema</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exameMamas[]" value="nódulo palpável" {{ (is_array(old('exameMamas')) && in_array('nódulo palpável', old('exameMamas'))) ? ' checked' : '' }}>
                                <label>Nódulo palpável</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exameMamas[]" value="ulceração" {{ (is_array(old('exameMamas')) && in_array('ulceração', old('exameMamas'))) ? ' checked' : '' }}>
                                <label>Ulceração</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="exameMamas[]" value="gânglios palpáveis" {{ (is_array(old('exameMamas')) && in_array('gânglios palpáveis', old('exameMamas'))) ? ' checked' : '' }}>
                                <label>Dânglios palpáveis</label>
                            </td>
                            <td>
                                <input type="checkbox" name="exameMamas[]" value="dor à palpação" {{ (is_array(old('exameMamas')) && in_array('dor à palpação', old('exameMamas'))) ? ' checked' : '' }}>
                                <label>Dor à palpação</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="DescargaPapilar" name="exameMamas[]" value="descarga papilar" onchange="disabilitarHabilitarInput()" {{ (is_array(old('exameMamas')) && in_array('descarga papilar', old('exameMamas'))) ? ' checked' : '' }}>
                                <label>Descarga papilar</label>
                                <input type="text" id="localDescargaPapilar" disabled class="form-control" name="exameMamas[11]" placeholder="Aspecto/Local" value="{{ old('exameMamas.11') }}">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="exameMamas[12]" placeholder="Outro" value="{{ old('exameMamas.12') }}">
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Genitálias</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" id="CorrimentoVaginal" name="exameMamas[]" value="Corrimento vaginal" onchange="disabilitarHabilitarInput()" {{ (is_array(old('exameMamas')) && in_array('Corrimento vaginal', old('exameMamas'))) ? ' checked' : '' }}>
                                <label>Corrimento vaginal</label>
                                <input type="text" id="aspectoCorrimentoVaginal" disabled class="form-control" name="exameMamas[14]" placeholder="Aspecto" value="{{ old('exameMamas.14') }}">
                            </td>
                            <td>
                                <input type="checkbox" id="OutraQueixa" name="exameMamas[]" value="Outra queixa" onchange="disabilitarHabilitarInput()" {{ (is_array(old('exameMamas')) && in_array('Outra queixa', old('exameMamas'))) ? ' checked' : '' }}>
                                <label>Outra queixa</label>
                                <input type="text" id="descricaoOutraQueixa" disabled class="form-control" name="exameMamas[16]" placeholder="descreva" value="{{ old('exameMamas.16') }}">
                            </td>
                        </tbody>
                    </table>
                </div>

                <h3>Sistema Gastrointestinal</h3>

                <div class="form-group">
                    <p>Inspeção do abdome</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_inpecaoAbdomen[]" value="Globoso" {{ (is_array(old('sisGastrointestinal_inpecaoAbdomen')) && in_array('Globoso', old('sisGastrointestinal_inpecaoAbdomen'))) ? ' checked' : '' }}>
                                <label>Globoso</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_inpecaoAbdomen[]" value="Flácido" {{ (is_array(old('sisGastrointestinal_inpecaoAbdomen')) && in_array('Flácido', old('sisGastrointestinal_inpecaoAbdomen'))) ? ' checked' : '' }}>
                                <label>Flácido</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_inpecaoAbdomen[]" value="Forma de avental" {{ (is_array(old('sisGastrointestinal_inpecaoAbdomen')) && in_array('Forma de avental', old('sisGastrointestinal_inpecaoAbdomen'))) ? ' checked' : '' }}>
                                <label>Forma de avental</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_inpecaoAbdomen[]" value="distendido" {{ (is_array(old('sisGastrointestinal_inpecaoAbdomen')) && in_array('distendido', old('sisGastrointestinal_inpecaoAbdomen'))) ? ' checked' : '' }}>
                                <label>Distendido</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_inpecaoAbdomen[]" value="ascítico" {{ (is_array(old('sisGastrointestinal_inpecaoAbdomen')) && in_array('ascítico', old('sisGastrointestinal_inpecaoAbdomen'))) ? ' checked' : '' }}>
                                <label>Ascítico</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_inpecaoAbdomen[]" value="caquexia" {{ (is_array(old('sisGastrointestinal_inpecaoAbdomen')) && in_array('caquexia', old('sisGastrointestinal_inpecaoAbdomen'))) ? ' checked' : '' }}>
                                <label>Caquexia</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_inpecaoAbdomen[]" value="presença de circulação colateral" {{ (is_array(old('sisGastrointestinal_inpecaoAbdomen')) && in_array('presença de circulação colateral', old('sisGastrointestinal_inpecaoAbdomen'))) ? ' checked' : '' }}>
                                <label>Presença de circulação colateral</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_inpecaoAbdomen[]" value="Lipodistrofia" {{ (is_array(old('sisGastrointestinal_inpecaoAbdomen')) && in_array('Lipodistrofia', old('sisGastrointestinal_inpecaoAbdomen'))) ? ' checked' : '' }}>
                                <label>Lipodistrofia</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_inpecaoAbdomen[]" value="equimose" {{ (is_array(old('sisGastrointestinal_inpecaoAbdomen')) && in_array('equimose', old('sisGastrointestinal_inpecaoAbdomen'))) ? ' checked' : '' }}>
                                <label>Equimose</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_inpecaoAbdomen[]" value="outros" {{ (is_array(old('sisGastrointestinal_inpecaoAbdomen')) && in_array('outros', old('sisGastrointestinal_inpecaoAbdomen'))) ? ' checked' : '' }}>
                                <label>Outros</label>
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Ausculta abdominal</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_auscultaAbdominal[]" value="ruídos hidroaéreos presentes" {{ (is_array(old('sisGastrointestinal_auscultaAbdominal')) && in_array('ruídos hidroaéreos presentes', old('sisGastrointestinal_auscultaAbdominal'))) ? ' checked' : '' }}>
                                <label>Ruídos hidroaéreos presentes </label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_auscultaAbdominal[]" value="ruídos hidroaéreos diminuídos" {{ (is_array(old('sisGastrointestinal_auscultaAbdominal')) && in_array('ruídos hidroaéreos diminuídos', old('sisGastrointestinal_auscultaAbdominal'))) ? ' checked' : '' }}>
                                <label>Ruídos hidroaéreos diminuídos</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_auscultaAbdominal[]" value="ruídos hidroaéreos aumentados" {{ (is_array(old('sisGastrointestinal_auscultaAbdominal')) && in_array('ruídos hidroaéreos aumentados', old('sisGastrointestinal_auscultaAbdominal'))) ? ' checked' : '' }}>
                                <label>Ruídos hidroaéreos aumentados</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_auscultaAbdominal[]" value="sopro aórtico" {{ (is_array(old('sisGastrointestinal_auscultaAbdominal')) && in_array('sopro aórtico', old('sisGastrointestinal_auscultaAbdominal'))) ? ' checked' : '' }}>
                                <label>Sopro aórtico</label>
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Percussão</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_percussao[]" value="timpanismo fisiológico" {{ (is_array(old('sisGastrointestinal_percussao')) && in_array('timpanismo fisiológico', old('sisGastrointestinal_percussao'))) ? ' checked' : '' }}>
                                <label>Timpanismo fisiológico</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="LiquidoIntrabdominal" onchange="disabilitarHabilitarInput()" name="sisGastrointestinal_percussao[]" value="líquido intrabdominal" {{ (is_array(old('sisGastrointestinal_percussao')) && in_array('líquido intrabdominal', old('sisGastrointestinal_percussao'))) ? ' checked' : '' }}>
                                <label>Líquido intrabdominal</label>
                                <input type="text" id="localLiquidoIntrabdominal" disabled class="form-control" name="sisGastrointestinal_percussao[2]" placeholder="local" value="{{ old('sisGastrointestinal_percussao.2') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="MassaIntrabdominal" onchange="disabilitarHabilitarInput()" name="sisGastrointestinal_percussao[]" value="massa intrabdominal" {{ (is_array(old('sisGastrointestinal_percussao')) && in_array('massa intrabdominal', old('sisGastrointestinal_percussao'))) ? ' checked' : '' }}>
                                <label>Massa intrabdominal</label>
                                <input type="text" id="localMassaIntrabdominal" disabled class="form-control" name="sisGastrointestinal_percussao[4]" placeholder="local" value="{{ old('sisGastrointestinal_percussao.4') }}">
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Palpação</p>
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_palpacao[]" value="indolor à palpação" {{ (is_array(old('sisGastrointestinal_palpacao')) && in_array('indolor à palpação', old('sisGastrointestinal_palpacao'))) ? ' checked' : '' }}>
                                <label>indolor à palpação</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_palpacao[]" value="abdome livre" {{ (is_array(old('sisGastrointestinal_palpacao')) && in_array('abdome livre', old('sisGastrointestinal_palpacao'))) ? ' checked' : '' }}>
                                <label>abdome livre </label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_palpacao[]" value="sem massas ou visceromegalias" {{ (is_array(old('sisGastrointestinal_palpacao')) && in_array('sem massas ou visceromegalias', old('sisGastrointestinal_palpacao'))) ? ' checked' : '' }}>
                                <label>sem massas ou visceromegalias</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_palpacao[]" value="hepatomegalia" {{ (is_array(old('sisGastrointestinal_palpacao')) && in_array('hepatomegalia', old('sisGastrointestinal_palpacao'))) ? ' checked' : '' }}>
                                <label>hepatomegalia</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_palpacao[]" value="massa" {{ (is_array(old('sisGastrointestinal_palpacao')) && in_array('massa', old('sisGastrointestinal_palpacao'))) ? ' checked' : '' }}>
                                <label>massa</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_palpacao[]" value="hérnia" {{ (is_array(old('sisGastrointestinal_palpacao')) && in_array('hérnia', old('sisGastrointestinal_palpacao'))) ? ' checked' : '' }}>
                                <label>hérnia</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_palpacao[]" value="esplenomegalia" {{ (is_array(old('sisGastrointestinal_palpacao')) && in_array('esplenomegalia', old('sisGastrointestinal_palpacao'))) ? ' checked' : '' }}>
                                <label>esplenomegalia</label>
                            </td>
                            <td>
                                <input type="checkbox" name="sisGastrointestinal_palpacao[]" value="outros" {{ (is_array(old('sisGastrointestinal_palpacao')) && in_array('outros', old('sisGastrointestinal_palpacao'))) ? ' checked' : '' }}>
                                <label>outros</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="DorPF" onchange="disabilitarHabilitarInput()" name="sisGastrointestinal_palpacao[]" value="dor à palpação superficial" {{ (is_array(old('sisGastrointestinal_palpacao')) && in_array('dor à palpação superficial', old('sisGastrointestinal_palpacao'))) ? ' checked' : '' }}>
                                <label>Dor à palpação superficial</label>
                                <input type="text" id="localDorPF" disabled class="form-control" name="sisGastrointestinal_palpacao[9]" placeholder="local" value="{{ old('sisGastrointestinal_palpacao.9') }}">
                            </td>
                            <td>
                                <input type="checkbox" id="DorPP" onchange="disabilitarHabilitarInput()" name="sisGastrointestinal_palpacao[]" value="dor à palpação profunda" {{ (is_array(old('sisGastrointestinal_palpacao')) && in_array('dor à palpação profunda', old('sisGastrointestinal_palpacao'))) ? ' checked' : '' }}>
                                <label>Dor à palpação profunda</label>
                                <input type="text" id="localDorPP" disabled class="form-control" name="sisGastrointestinal_palpacao[11]" placeholder="local" value="{{ old('sisGastrointestinal_palpacao.11') }}">
                            </td>
                        </tbody>
                    </table>
                </div>

                <h3>Integridade cutâneo-mucosa</h3>

                <div class="form-group">
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="intCutaneoMucosa[]" value="Mucosas coradas" {{ (is_array(old('intCutaneoMucosa')) && in_array('Mucosas coradas', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Mucosas coradas</label>
                            </td>
                            <td>
                                <input type="checkbox" name="intCutaneoMucosa[]" value="Mucosas hipocoradas" {{ (is_array(old('intCutaneoMucosa')) && in_array('Mucosas hipocoradas', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Mucosas hipocoradas</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="intCutaneoMucosa[]" value="palidez" {{ (is_array(old('intCutaneoMucosa')) && in_array('palidez', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Palidez</label>
                            </td>
                            <td>
                                <input type="checkbox" name="intCutaneoMucosa[]" value="icterícia" {{ (is_array(old('intCutaneoMucosa')) && in_array('icterícia', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Icterícia</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="intCutaneoMucosa[]" value="hidratado(a)" {{ (is_array(old('intCutaneoMucosa')) && in_array('hidratado(a)', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Hidratado(a)</label>
                            </td>
                            <td>
                                <input type="checkbox" name="intCutaneoMucosa[]" value="desidratado(a)" {{ (is_array(old('intCutaneoMucosa')) && in_array('desidratado(a)', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Desidratado (a)</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="intCutaneoMucosa[]" value="rubor" {{ (is_array(old('intCutaneoMucosa')) && in_array('rubor', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Rubor</label>
                            </td>
                            <td>
                                <input type="checkbox" name="intCutaneoMucosa[]" value="sudorese" {{ (is_array(old('intCutaneoMucosa')) && in_array('sudorese', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Sudorese</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="intCutaneoMucosa[]" value="pele oleosa" {{ (is_array(old('intCutaneoMucosa')) && in_array('pele oleosa', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Pele oleosa</label>
                            </td>
                            <td>
                                <input type="checkbox" name="intCutaneoMucosa[]" value="afebril" {{ (is_array(old('intCutaneoMucosa')) && in_array('afebril', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Afebril</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="intCutaneoMucosa[]" value="hipotérmico(a)" {{ (is_array(old('intCutaneoMucosa')) && in_array('hipotérmico(a)', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Hipotérmico(a)</label>
                            </td>
                            <td>
                                <input type="checkbox" name="intCutaneoMucosa[]" value="febril" {{ (is_array(old('intCutaneoMucosa')) && in_array('febril', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Febril</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="Escoriacao" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="escoriação" {{ (is_array(old('intCutaneoMucosa')) && in_array('escoriação', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Escoriação</label>
                                <input type="text" id="descricaoEscoriacao" disabled class="form-control" name="intCutaneoMucosa[13]" placeholder="descrição" value="{{ old('intCutaneoMucosa.13') }}">
                            </td>
                            <td>
                                <input type="checkbox" id="Macula" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="mácula" {{ (is_array(old('intCutaneoMucosa')) && in_array('mácula', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Mácula</label>
                                <input type="text" id="descricaoMacula" disabled class="form-control" name="intCutaneoMucosa[15]" placeholder="descrição" value="{{ old('intCutaneoMucosa.15') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="Papula" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="pápula" {{ (is_array(old('intCutaneoMucosa')) && in_array('pápula', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Pápula</label>
                                <input type="text" id="descricaoPapula" disabled class="form-control" name="intCutaneoMucosa[17]" placeholder="descrição" value="{{ old('intCutaneoMucosa.17') }}">
                            </td>
                            <td>
                                <input type="checkbox" id="Pustula" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="pústula" {{ (is_array(old('intCutaneoMucosa')) && in_array('pústula', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Pústula</label>
                                <input type="text" id="descricaoPustula" disabled class="form-control" name="intCutaneoMucosa[19]" placeholder="descrição" value="{{ old('intCutaneoMucosa.19') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="Vesicula" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="vesícula" {{ (is_array(old('intCutaneoMucosa')) && in_array('vesícula', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Vesícula</label>
                                <input type="text" id="descricaoVesicula" disabled class="form-control" name="intCutaneoMucosa[21]" placeholder="descrição" value="{{ old('intCutaneoMucosa.21') }}">
                            </td>
                            <td>
                                <input type="checkbox" id="Erupcao" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="erupção" {{ (is_array(old('intCutaneoMucosa')) && in_array('erupção', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Erupção</label>
                                <input type="text" id="descricaoErupcao" disabled class="form-control" name="intCutaneoMucosa[23]" placeholder="descrição" value="{{ old('intCutaneoMucosa.23') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="Cisto" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="cisto" {{ (is_array(old('intCutaneoMucosa')) && in_array('cisto', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Cisto</label>
                                <input type="text" id="descricaoCisto" disabled class="form-control" name="intCutaneoMucosa[25]" placeholder="descrição" value="{{ old('intCutaneoMucosa.25') }}">
                            </td>
                            <td>
                                <input type="checkbox" id="Tumor" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="tumor" {{ (is_array(old('intCutaneoMucosa')) && in_array('tumor', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Tumor</label>
                                <input type="text" id="descricaoTumor" disabled class="form-control" name="intCutaneoMucosa[27]" placeholder="descrição" value="{{ old('intCutaneoMucosa.27') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="Descamacao" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="descamação" {{ (is_array(old('intCutaneoMucosa')) && in_array('descamação', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Descamação</label>
                                <input type="text" id="descricaoDescamacao" disabled class="form-control" name="intCutaneoMucosa[29]" placeholder="descrição" value="{{ old('intCutaneoMucosa.29') }}">
                            </td>
                            <td>
                                <input type="checkbox" id="Cicatriz" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="cicatriz" {{ (is_array(old('intCutaneoMucosa')) && in_array('cicatriz', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Cicatriz</label>
                                <input type="text" id="descricaoCicatriz" disabled class="form-control" name="intCutaneoMucosa[31]" placeholder="descrição" value="{{ old('intCutaneoMucosa.31') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="Fissura" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="fissura" {{ (is_array(old('intCutaneoMucosa')) && in_array('fissura', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Fissura </label>
                                <input type="text" id="descricaoFissura" disabled class="form-control" name="intCutaneoMucosa[33]" placeholder="descrição" value="{{ old('intCutaneoMucosa.33') }}">
                            </td>
                            <td>
                                <input type="checkbox" id="Ulcera" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="úlcera" {{ (is_array(old('intCutaneoMucosa')) && in_array('úlcera', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Úlcera</label>
                                <input type="text" id="descricaoUlcera" disabled class="form-control" name="intCutaneoMucosa[35]" placeholder="descrição" value="{{ old('intCutaneoMucosa.35') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="LesaoPressao" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="lesão por pressão" {{ (is_array(old('intCutaneoMucosa')) && in_array('lesão por pressão', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Lesão por pressão </label>
                                <input type="text" id="descricaoLesaoPressao" disabled class="form-control" name="intCutaneoMucosa[37]" placeholder="descrição" value="{{ old('intCutaneoMucosa.37') }}">
                            </td>
                            <td>
                                <input type="checkbox" id="PurpuraSenil" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="púrpura senil" {{ (is_array(old('intCutaneoMucosa')) && in_array('púrpura senil', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Púrpura senil </label>
                                <input type="text" id="descricaoPurpuraSenil" disabled class="form-control" name="intCutaneoMucosa[39]" placeholder="descrição" value="{{ old('intCutaneoMucosa.39') }}">
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" id="Hemangioma" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="hemangioma" {{ (is_array(old('intCutaneoMucosa')) && in_array('hemangioma', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Hemangioma</label>
                                <input type="text" id="descricaoHemangioma" disabled class="form-control" name="intCutaneoMucosa[41]" placeholder="descrição" value="{{ old('intCutaneoMucosa.41') }}">
                            </td>
                            <td>
                                <input type="checkbox" id="Spider" onchange="disabilitarHabilitarInput()" name="intCutaneoMucosa[]" value="spider" {{ (is_array(old('intCutaneoMucosa')) && in_array('spider', old('intCutaneoMucosa'))) ? ' checked' : '' }}>
                                <label>Spider</label>
                                <input type="text" id="descricaoSpider" disabled class="form-control" name="intCutaneoMucosa[43]" placeholder="descrição" value="{{ old('intCutaneoMucosa.43') }}">
                            </td>
                        </tbody>
                    </table>
                </div>

                <h3>Avaliação dos pés</h3>

                <div class="form-group">
                    <table class="table table-borderless">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Pé plano" {{ (is_array(old('avPes')) && in_array('Pé plano', old('avPes'))) ? ' checked' : '' }}>
                                <label>Pé plano</label>
                            </td>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Pé varo (supinado)" {{ (is_array(old('avPes')) && in_array('Pé varo (supinado)', old('avPes'))) ? ' checked' : '' }}>
                                <label>Pé varo (supinado)</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Pé valgo (pronado)" {{ (is_array(old('avPes')) && in_array('Pé valgo (pronado)', old('avPes'))) ? ' checked' : '' }}>
                                <label>Pé valgo (pronado)</label>
                            </td>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Pé cavo" {{ (is_array(old('avPes')) && in_array('Pé cavo', old('avPes'))) ? ' checked' : '' }}>
                                <label>Pé cavo</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Dedos em garra" {{ (is_array(old('avPes')) && in_array('Dedos em garra', old('avPes'))) ? ' checked' : '' }}>
                                <label>Dedos em garra</label>
                            </td>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Esporão de calcâneo" {{ (is_array(old('avPes')) && in_array('Esporão de calcâneo', old('avPes'))) ? ' checked' : '' }}>
                                <label>Esporão de calcâneo</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Hálux vago/joanete" {{ (is_array(old('avPes')) && in_array('Hálux vago/joanete', old('avPes'))) ? ' checked' : '' }}>
                                <label>Hálux vago/joanete</label>
                            </td>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Hiperqueratose" {{ (is_array(old('avPes')) && in_array('Hiperqueratose', old('avPes'))) ? ' checked' : '' }}>
                                <label>Hiperqueratose</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Calosidade" {{ (is_array(old('avPes')) && in_array('Calosidade', old('avPes'))) ? ' checked' : '' }}>
                                <label>Calosidade</label>
                            </td>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Ressecamento" {{ (is_array(old('avPes')) && in_array('Ressecamento', old('avPes'))) ? ' checked' : '' }}>
                                <label>Ressecamento</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Fissura/rachadura" {{ (is_array(old('avPes')) && in_array('Fissura/rachadura', old('avPes'))) ? ' checked' : '' }}>
                                <label>Fissura/rachadura</label>
                            </td>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Tinea pedis" {{ (is_array(old('avPes')) && in_array('Tinea pedis', old('avPes'))) ? ' checked' : '' }}>
                                <label>Tinea pedis</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Tinea interdigital" {{ (is_array(old('avPes')) && in_array('Tinea interdigital', old('avPes'))) ? ' checked' : '' }}>
                                <label>Tinea interdigital</label>
                            </td>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Alteração ungueal" {{ (is_array(old('avPes')) && in_array('Alteração ungueal', old('avPes'))) ? ' checked' : '' }}>
                                <label>Alteração ungueal</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="avPes[]" value="unhas aparadas" {{ (is_array(old('avPes')) && in_array('unhas aparadas', old('avPes'))) ? ' checked' : '' }}>
                                <label>unhas aparadas</label>
                            </td>
                            <td>
                                <input type="checkbox" name="avPes[]" value="unhas com corte inadequado" {{ (is_array(old('avPes')) && in_array('unhas com corte inadequado', old('avPes'))) ? ' checked' : '' }}>
                                <label>unhas com corte inadequado</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="avPes[]" value="calçados apertados" {{ (is_array(old('avPes')) && in_array('calçados apertados', old('avPes'))) ? ' checked' : '' }}>
                                <label>calçados apertados</label>
                            </td>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Pulsos pediosos palpáveis" {{ (is_array(old('avPes')) && in_array('Pulsos pediosos palpáveis', old('avPes'))) ? ' checked' : '' }}>
                                <label>Pulsos pediosos palpáveis</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name="avPes[]" value="Pulsos pediosos não palpáveis" {{ (is_array(old('avPes')) && in_array('Pulsos pediosos não palpáveis', old('avPes'))) ? ' checked' : '' }}>
                                <label>Pulsos pediosos não palpáveis</label>
                            </td>
                            <td>
                                <input type="checkbox" id="Dor" onchange="disabilitarHabilitarInput()" name="avPes[]" value="dor" {{ (is_array(old('avPes')) && in_array('dor', old('avPes'))) ? ' checked' : '' }}>
                                <label>dor</label>
                                <input type="text" id="descricaoDor" disabled class="form-control" name="avPes[20]" placeholder="descrição" value="{{ old('avPes.20') }}">
                            </td>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                <label>1</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='2' {{ (is_array(old('areaSensibilidadePes')) && in_array('2', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>2</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='3' {{ (is_array(old('areaSensibilidadePes')) && in_array('3', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>3</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='4' {{ (is_array(old('areaSensibilidadePes')) && in_array('4', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>4</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='5' {{ (is_array(old('areaSensibilidadePes')) && in_array('5', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>5</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='6' {{ (is_array(old('areaSensibilidadePes')) && in_array('6', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>6</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='7' {{ (is_array(old('areaSensibilidadePes')) && in_array('7', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>7</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='8' {{ (is_array(old('areaSensibilidadePes')) && in_array('8', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>8</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='9' {{ (is_array(old('areaSensibilidadePes')) && in_array('9', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>9</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='10' {{ (is_array(old('areaSensibilidadePes')) && in_array('10', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>10</label>
                            </td>
                        </tbody>
                        <tbody>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='11' {{ (is_array(old('areaSensibilidadePes')) && in_array('11', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>11</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='12' {{ (is_array(old('areaSensibilidadePes')) && in_array('12', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>12</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='13' {{ (is_array(old('areaSensibilidadePes')) && in_array('13', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>13</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='14' {{ (is_array(old('areaSensibilidadePes')) && in_array('14', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>14</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='15' {{ (is_array(old('areaSensibilidadePes')) && in_array('15', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>15</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='16' {{ (is_array(old('areaSensibilidadePes')) && in_array('16', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>16</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='17' {{ (is_array(old('areaSensibilidadePes')) && in_array('17', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>17</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='18' {{ (is_array(old('areaSensibilidadePes')) && in_array('18', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>18</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='19' {{ (is_array(old('areaSensibilidadePes')) && in_array('19', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>19</label>
                            </td>
                            <td>
                                <input type="checkbox" name='areaSensibilidadePes[]' value='20' {{ (is_array(old('areaSensibilidadePes')) && in_array('20', old('areaSensibilidadePes'))) ? ' checked' : '' }} />
                                <label>20</label>
                            </td>
                        </tbody>
                    </table>
                </div>
            </form>
            <div class="form-group">
                <p>Outras informações relevantes:</p>
                <input type="text" name="avPes_outros" id="avPes_outros" class="form-control" value="{{ old('avPes_outros') }}">
            </div>
        </div>
    </div>

    <div class="tab-pane {{old('tab') == 'av_psicossocial' ? 'active' : null}}" id="av_psicossocial" role="tabpanel" aria-labelledby="av_psicossocial-tab">
        <div id="form-create-container" class="col-md-6 offset-md-3">
            <h1>II - AVALIAÇÃO PSICOSSOCIAL</h1>
            <h4>Psíquica: Cognição</h4>
            <h4>Mini-exame do estado mental (MEEM)</h4>

            <form action="/form/update/{{ $formulario->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="paciente_id" id="paciente_id" value="{{ $formulario->pacient_id }}" class="form-control">

                <div class="form-group">
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
                                    <input type="radio" name="orientacaoTemporal_quest1" value="0" {{ $examePsicossocial->orientacaoTemporal_quest1 == "0" ? 'checked' : '' }} {{ old('orientacaoTemporal_quest1') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="orientacaoTemporal_quest1" value="1" {{ $examePsicossocial->orientacaoTemporal_quest1 == "1" ? 'checked' : '' }} {{ old('orientacaoTemporal_quest1') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Em que mês estamos?</td>
                                <td>
                                    <input type="radio" name="orientacaoTemporal_quest2" value="0" {{ $examePsicossocial->orientacaoTemporal_quest2 == "0" ? 'checked' : '' }} {{ old('orientacaoTemporal_quest2') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="orientacaoTemporal_quest2" value="1" {{ $examePsicossocial->orientacaoTemporal_quest2 == "1" ? 'checked' : '' }} {{ old('orientacaoTemporal_quest2') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Em que ano estamos?</td>
                                <td>
                                    <input type="radio" name="orientacaoTemporal_quest3" value="0" {{ $examePsicossocial->orientacaoTemporal_quest3 == "0" ? 'checked' : '' }} {{ old('orientacaoTemporal_quest3') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="orientacaoTemporal_quest3" value="1" {{ $examePsicossocial->orientacaoTemporal_quest3 == "1" ? 'checked' : '' }} {{ old('orientacaoTemporal_quest3') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Em que dia da semana estamos?</td>
                                <td>
                                    <input type="radio" name="orientacaoTemporal_quest4" value="0" {{ $examePsicossocial->orientacaoTemporal_quest4 == "0" ? 'checked' : '' }} {{ old('orientacaoTemporal_quest4') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="orientacaoTemporal_quest4" value="1" {{ $examePsicossocial->orientacaoTemporal_quest4 == "1" ? 'checked' : '' }} {{ old('orientacaoTemporal_quest4') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Qual a hora aproximada? (Considere a variação de mais ou menos uma hora)
                                </td>
                                <td>
                                    <input type="radio" name="orientacaoTemporal_quest5" value="0" {{ $examePsicossocial->orientacaoTemporal_quest5 == "0" ? 'checked' : '' }} {{ old('orientacaoTemporal_quest5') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="orientacaoTemporal_quest5" value="1" {{ $examePsicossocial->orientacaoTemporal_quest5 == "1" ? 'checked' : '' }} {{ old('orientacaoTemporal_quest5') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                    <input type="radio" name="orientacaoEspacial_quest1" value="0" {{ $examePsicossocial->orientacaoEspacial_quest1 == "0" ? 'checked' : '' }} {{ old('orientacaoEspacial_quest1') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="orientacaoEspacial_quest1" value="1" {{ $examePsicossocial->orientacaoEspacial_quest1 == "1" ? 'checked' : '' }} {{ old('orientacaoEspacial_quest1') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Que local é este aqui? (apontando ao redor em um sentido mais amplo:
                                    hospital, casa de repouso, própria casa)</td>
                                <td>
                                    <input type="radio" name="orientacaoEspacial_quest2" value="0" {{ $examePsicossocial->orientacaoEspacial_quest2 == "0" ? 'checked' : '' }} {{ old('orientacaoEspacial_quest2') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="orientacaoEspacial_quest2" value="1" {{ $examePsicossocial->orientacaoEspacial_quest2 == "1" ? 'checked' : '' }} {{ old('orientacaoEspacial_quest2') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Em que bairro estamos ou qual o nome de uma rua próxima?</td>
                                <td>
                                    <input type="radio" name="orientacaoEspacial_quest3" value="0" {{ $examePsicossocial->orientacaoEspacial_quest3 == "0" ? 'checked' : '' }} {{ old('orientacaoEspacial_quest3') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="orientacaoEspacial_quest3" value="1" {{ $examePsicossocial->orientacaoEspacial_quest3 == "1" ? 'checked' : '' }} {{ old('orientacaoEspacial_quest3') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Em que cidade nós estamos?</td>
                                <td>
                                    <input type="radio" name="orientacaoEspacial_quest4" value="0" {{ $examePsicossocial->orientacaoEspacial_quest4 == "0" ? 'checked' : '' }} {{ old('orientacaoEspacial_quest4') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="orientacaoEspacial_quest4" value="1" {{ $examePsicossocial->orientacaoEspacial_quest4 == "1" ? 'checked' : '' }} {{ old('orientacaoEspacial_quest4') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Em que Estado nós estamos?</td>
                                <td>
                                    <input type="radio" name="orientacaoEspacial_quest5" value="0" {{ $examePsicossocial->orientacaoEspacial_quest5 == "0" ? 'checked' : '' }} {{ old('orientacaoEspacial_quest5') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="orientacaoEspacial_quest5" value="1" {{ $examePsicossocial->orientacaoEspacial_quest5 == "1" ? 'checked' : '' }} {{ old('orientacaoEspacial_quest5') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                    <input type="radio" name="memoriaImediata_quest1" value="0" {{ $examePsicossocial->memoriaImediata_quest1 == "0" ? 'checked' : '' }} {{ old('memoriaImediata_quest1') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="memoriaImediata_quest1" value="1" {{ $examePsicossocial->memoriaImediata_quest1 == "1" ? 'checked' : '' }} {{ old('memoriaImediata_quest1') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                    <input type="radio" name="calculo_quest1" value="0" {{ $examePsicossocial->calculo_quest1 == "0" ? 'checked' : '' }} {{ old('calculo_quest1') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="calculo_quest1" value="1" {{ $examePsicossocial->calculo_quest1 == "1" ? 'checked' : '' }} {{ old('calculo_quest1') == "1" ? 'checked' : '' }}>
                                    <span>1</span>

                                    <input type="radio" name="calculo_quest1" value="2" {{ $examePsicossocial->calculo_quest1 == "2" ? 'checked' : '' }} {{ old('calculo_quest1') == "2" ? 'checked' : '' }}>
                                    <span>2</span>

                                    <input type="radio" name="calculo_quest1" value="3" {{ $examePsicossocial->calculo_quest1 == "3" ? 'checked' : '' }} {{ old('calculo_quest1') == "3" ? 'checked' : '' }}>
                                    <span>3</span>

                                    <input type="radio" name="calculo_quest1" value="4" {{ $examePsicossocial->calculo_quest1 == "4" ? 'checked' : '' }} {{ old('calculo_quest1') == "4" ? 'checked' : '' }}>
                                    <span>4</span>

                                    <input type="radio" name="calculo_quest1" value="5" {{ $examePsicossocial->calculo_quest1 == "5" ? 'checked' : '' }} {{ old('calculo_quest1') == "5" ? 'checked' : '' }}>
                                    <span>5</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                    <input type="radio" name="evocacaoPalavras_quest1" value="0" {{ $examePsicossocial->evocacaoPalavras_quest1 == "0" ? 'checked' : '' }} {{ old('evocacaoPalavras_quest1') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="evocacaoPalavras_quest1" value="1" {{ $examePsicossocial->evocacaoPalavras_quest1 == "1" ? 'checked' : '' }} {{ old('evocacaoPalavras_quest1') == "1" ? 'checked' : '' }}>
                                    <span>1</span>

                                    <input type="radio" name="evocacaoPalavras_quest1" value="2" {{ $examePsicossocial->evocacaoPalavras_quest1 == "2" ? 'checked' : '' }} {{ old('evocacaoPalavras_quest1') == "2" ? 'checked' : '' }}>
                                    <span>2</span>

                                    <input type="radio" name="evocacaoPalavras_quest1" value="3" {{ $examePsicossocial->evocacaoPalavras_quest1 == "3" ? 'checked' : '' }} {{ old('evocacaoPalavras_quest1') == "3" ? 'checked' : '' }}>
                                    <span>3</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                    <input type="radio" name="nomeacao_quest1" value="0" {{ $examePsicossocial->nomeacao_quest1 == "0" ? 'checked' : '' }} {{ old('nomeacao_quest1') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="nomeacao_quest1" value="1" {{ $examePsicossocial->nomeacao_quest1 == "1" ? 'checked' : '' }} {{ old('nomeacao_quest1') == "1" ? 'checked' : '' }}>
                                    <span>1</span>

                                    <input type="radio" name="nomeacao_quest1" value="2" {{ $examePsicossocial->nomeacao_quest1 == "2" ? 'checked' : '' }} {{ old('nomeacao_quest1') == "2" ? 'checked' : '' }}>
                                    <span>2</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                    <input type="radio" name="repeticao_quest1" value="0" {{ $examePsicossocial->repeticao_quest1 == "0" ? 'checked' : '' }} {{ old('repeticao_quest1') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="repeticao_quest1" value="1" {{ $examePsicossocial->repeticao_quest1 == "1" ? 'checked' : '' }} {{ old('repeticao_quest1') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                    <input type="radio" name="comando_quest1" value="0" {{ $examePsicossocial->comando_quest1 == "0" ? 'checked' : '' }} {{ old('comando_quest1') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="comando_quest1" value="1" {{ $examePsicossocial->comando_quest1 == "1" ? 'checked' : '' }} {{ old('comando_quest1') == "1" ? 'checked' : '' }}>
                                    <span>1</span>

                                    <input type="radio" name="comando_quest1" value="2" {{ $examePsicossocial->comando_quest1 == "2" ? 'checked' : '' }} {{ old('comando_quest1') == "2" ? 'checked' : '' }}>
                                    <span>2</span>

                                    <input type="radio" name="comando_quest1" value="3" {{ $examePsicossocial->comando_quest1 == "3" ? 'checked' : '' }} {{ old('comando_quest1') == "3" ? 'checked' : '' }}>
                                    <span>3</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                    <input type="radio" name="leitura_quest1" value="0" {{ $examePsicossocial->leitura_quest1 == "0" ? 'checked' : '' }} {{ old('leitura_quest1') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="leitura_quest1" value="1" {{ $examePsicossocial->leitura_quest1 == "1" ? 'checked' : '' }} {{ old('leitura_quest1') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                    <input type="radio" name="escreverFrase_quest1" value="0" {{ $examePsicossocial->escreverFrase_quest1 == "0" ? 'checked' : '' }} {{ old('escreverFrase_quest1') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="escreverFrase_quest1" value="1" {{ $examePsicossocial->escreverFrase_quest1 == "1" ? 'checked' : '' }} {{ old('escreverFrase_quest1') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                    <input type="radio" name="copiarDiagrama_quest1" value="0" {{ $examePsicossocial->copiarDiagrama_quest1 == "0" ? 'checked' : '' }} {{ old('copiarDiagrama_quest1') == "0" ? 'checked' : '' }}>
                                    <span>0</span>

                                    <input type="radio" name="copiarDiagrama_quest1" value="1" {{ $examePsicossocial->copiarDiagrama_quest1 == "1" ? 'checked' : '' }} {{ old('copiarDiagrama_quest1') == "1" ? 'checked' : '' }}>
                                    <span>1</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <br>
                <h4>Psíquica: Humor</h4>
                <h4>Escala de depressão geriátrica – GDS-15 (PEREIRA, 2017) </h4>

                <div class="form-group">
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
                                    <input type="radio" name="humor_quest1" value="1" {{ $examePsicossocial->humor_quest1 == "1" ? 'checked' : '' }} {{ old('humor_quest1') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest1" value="0" {{ $examePsicossocial->humor_quest1 == "0" ? 'checked' : '' }} {{ old('humor_quest1') == "0" ? 'checked' : '' }}>
                                    <span>não</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você deixou de realizar atividades de seu interesse?
                                </td>
                                <td>
                                    <input type="radio" name="humor_quest2" value="1" {{ $examePsicossocial->humor_quest2 == "1" ? 'checked' : '' }} {{ old('humor_quest2') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest2" value="0" {{ $examePsicossocial->humor_quest2 == "0" ? 'checked' : '' }} {{ old('humor_quest2') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você sentiu que sua vida estava vazia?</td>
                                <td>
                                    <input type="radio" name="humor_quest3" value="1" {{ $examePsicossocial->humor_quest3 == "1" ? 'checked' : '' }} {{ old('humor_quest3') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest3" value="0" {{ $examePsicossocial->humor_quest3 == "0" ? 'checked' : '' }} {{ old('humor_quest3') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você sentiu aborrecido(a)?</td>
                                <td>
                                    <input type="radio" name="humor_quest4" value="1" {{ $examePsicossocial->humor_quest4 == "1" ? 'checked' : '' }} {{ old('humor_quest4') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest4" value="0" {{ $examePsicossocial->humor_quest4 == "0" ? 'checked' : '' }} {{ old('humor_quest4') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você estava animado na maior parte do tempo?</td>
                                <td>
                                    <input type="radio" name="humor_quest5" value="1" {{ $examePsicossocial->humor_quest5 == "1" ? 'checked' : '' }} {{ old('humor_quest5') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest5" value="0" {{ $examePsicossocial->humor_quest5 == "0" ? 'checked' : '' }} {{ old('humor_quest5') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você teve medo que alguma coisa ruim iria acontecer
                                    contigo?</td>
                                <td>
                                    <input type="radio" name="humor_quest6" value="1" {{ $examePsicossocial->humor_quest6 == "1" ? 'checked' : '' }} {{ old('humor_quest6') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest6" value="0" {{ $examePsicossocial->humor_quest6 == "0" ? 'checked' : '' }} {{ old('humor_quest6') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você sentiu feliz na maior parte do tempo?</td>
                                <td>
                                    <input type="radio" name="humor_quest7" value="1" {{ $examePsicossocial->humor_quest7 == "1" ? 'checked' : '' }} {{ old('humor_quest7') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest7" value="0" {{ $examePsicossocial->humor_quest7 == "0" ? 'checked' : '' }} {{ old('humor_quest7') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você sentiu sozinho(a)?</td>
                                <td>
                                    <input type="radio" name="humor_quest8" value="1" {{ $examePsicossocial->humor_quest8 == "1" ? 'checked' : '' }} {{ old('humor_quest8') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest8" value="0" {{ $examePsicossocial->humor_quest8 == "0" ? 'checked' : '' }} {{ old('humor_quest8') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você preferiu ficar em casa do que ter saído e feito
                                    coisas novas?</td>
                                <td>
                                    <input type="radio" name="humor_quest9" value="1" {{ $examePsicossocial->humor_quest9 == "1" ? 'checked' : '' }} {{ old('humor_quest9') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest9" value="0" {{ $examePsicossocial->humor_quest9 == "0" ? 'checked' : '' }} {{ old('humor_quest9') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você sentiu que teve mais problemas de memória do
                                    que a maioria das pessoas?</td>
                                <td>
                                    <input type="radio" name="humor_quest10" value="1" {{ $examePsicossocial->humor_quest10 == "1" ? 'checked' : '' }} {{ old('humor_quest10') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest10" value="0" {{ $examePsicossocial->humor_quest10 == "0" ? 'checked' : '' }} {{ old('humor_quest10') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você sentiu que era maravilhoso estar vivo(a)?</td>
                                <td>
                                    <input type="radio" name="humor_quest11" value="1" {{ $examePsicossocial->humor_quest11 == "1" ? 'checked' : '' }} {{ old('humor_quest11') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest11" value="0" {{ $examePsicossocial->humor_quest11 == "0" ? 'checked' : '' }} {{ old('humor_quest11') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você sentiu inútil?</td>
                                <td>
                                    <input type="radio" name="humor_quest12" value="1" {{ $examePsicossocial->humor_quest12 == "1" ? 'checked' : '' }} {{ old('humor_quest12') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest12" value="0" {{ $examePsicossocial->humor_quest12 == "0" ? 'checked' : '' }} {{ old('humor_quest12') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você sentiu cheio(a) de energia?</td>
                                <td>
                                    <input type="radio" name="humor_quest13" value="1" {{ $examePsicossocial->humor_quest13 == "1" ? 'checked' : '' }} {{ old('humor_quest13') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest13" value="0" {{ $examePsicossocial->humor_quest13 == "0" ? 'checked' : '' }} {{ old('humor_quest13') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você sentiu que sua situação era sem esperança?</td>
                                <td>
                                    <input type="radio" name="humor_quest14" value="1" {{ $examePsicossocial->humor_quest14 == "1" ? 'checked' : '' }} {{ old('humor_quest14') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest14" value="0" {{ $examePsicossocial->humor_quest14 == "0" ? 'checked' : '' }} {{ old('humor_quest14') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nesta última semana você achou que a maioria das pessoas estava melhor
                                    do que você?</td>
                                <td>
                                    <input type="radio" name="humor_quest15" value="1" {{ $examePsicossocial->humor_quest15 == "1" ? 'checked' : '' }} {{ old('humor_quest15') == "1" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="humor_quest15" value="0" {{ $examePsicossocial->humor_quest15 == "0" ? 'checked' : '' }} {{ old('humor_quest15') == "0" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                    <input type="radio" name="lesoesCorporaisInexplicadas" value="sim" {{ $examePsicossocial->lesoesCorporaisInexplicadas == "sim" ? 'checked' : '' }} {{ old('lesoesCorporaisInexplicadas') == "sim" ? 'checked' : '' }}>
                                    <span>Sim</span>

                                    <input type="radio" name="lesoesCorporaisInexplicadas" value="nao" {{ $examePsicossocial->lesoesCorporaisInexplicadas == "nao" ? 'checked' : '' }} {{ old('lesoesCorporaisInexplicadas') == "0" ? 'checked' : '' }}>
                                    <span>Não</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Descuido com higiene pessoal</td>
                                <td>
                                    <input type="radio" name="descuidoHigienePessoal" value="sim" {{ $examePsicossocial->descuidoHigienePessoal == "sim" ? 'checked' : '' }} {{ old('descuidoHigienePessoal') == "sim" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="descuidoHigienePessoal" value="nao" {{ $examePsicossocial->descuidoHigienePessoal == "nao" ? 'checked' : '' }} {{ old('descuidoHigienePessoal') == "nao" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Demora em buscar atendimento médico</td>
                                <td>
                                    <input type="radio" name="demoraBuscarAntendimentoMedico" value="sim" {{ $examePsicossocial->demoraBuscarAntendimentoMedico == "sim" ? 'checked' : '' }} {{ old('demoraBuscarAntendimentoMedico') == "sim" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="demoraBuscarAntendimentoMedico" value="nao" {{ $examePsicossocial->demoraBuscarAntendimentoMedico == "nao" ? 'checked' : '' }} {{ old('demoraBuscarAntendimentoMedico') == "nao" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Discordâncias entre a história do paciente e a do cuidador</td>
                                <td>
                                    <input type="radio" name="discordanciaDeHistoria" value="sim" {{ $examePsicossocial->discordanciaDeHistoria == "sim" ? 'checked' : '' }} {{ old('discordanciaDeHistoria') == "sim" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="discordanciaDeHistoria" value="nao" {{ $examePsicossocial->discordanciaDeHistoria == "nao" ? 'checked' : '' }} {{ old('discordanciaDeHistoria') == "nao" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Internações frequentes por não adesão a tratamentos</td>
                                <td>
                                    <input type="radio" name="InternacoesFrequentes" value="sim" {{ $examePsicossocial->InternacoesFrequentes == "sim" ? 'checked' : '' }} {{ old('InternacoesFrequentes') == "sim" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="InternacoesFrequentes" value="nao" {{ $examePsicossocial->InternacoesFrequentes == "nao" ? 'checked' : '' }} {{ old('InternacoesFrequentes') == "nao" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Ausência de familiar na consulta</td>
                                <td>
                                    <input type="radio" name="AusenciaDeFamiliar" value="sim" {{ $examePsicossocial->AusenciaDeFamiliar == "sim" ? 'checked' : '' }} {{ old('AusenciaDeFamiliar') == "sim" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="AusenciaDeFamiliar" value="nao" {{ $examePsicossocial->AusenciaDeFamiliar == "nao" ? 'checked' : '' }} {{ old('AusenciaDeFamiliar') == "nao"? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Recusa/resistência à visita domiciliar</td>
                                <td>
                                    <input type="radio" name="RecusaAVisitaDomiciliar" value="sim" {{ $examePsicossocial->RecusaAVisitaDomiciliar == "sim" ? 'checked' : '' }} {{ old('RecusaAVisitaDomiciliar') == "sim" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="RecusaAVisitaDomiciliar" value="nao" {{ $examePsicossocial->RecusaAVisitaDomiciliar == "nao" ? 'checked' : '' }} {{ old('RecusaAVisitaDomiciliar') == "nao" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                    <input type="radio" name="religioso" value="sim" {{ $examePsicossocial->religioso == "sim" ? 'checked' : '' }} {{ old('religioso') == "sim" ? 'checked' : '' }}>
                                    <span>Sim</span>

                                    <input type="radio" name="religioso" value="nao" {{ $examePsicossocial->religioso == "nao" ? 'checked' : '' }} {{ old('religioso') == "nao" ? 'checked' : '' }}>
                                    <span>Não</span>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td scope="row">Você tem crenças espirituais ou religiosas que te ajudam a lidar com
                                    problemas?</td>
                                <td>
                                    <input type="radio" name="religiaoAjuda" value="sim" {{ $examePsicossocial->religiaoAjuda == "sim" ? 'checked' : '' }} {{ old('religiaoAjuda') == "sim" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="religiaoAjuda" value="nao" {{ $examePsicossocial->religiaoAjuda == "nao" ? 'checked' : '' }} {{ old('religiaoAjuda') == "nao" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td scope="row">Você faz parte de alguma comunidade religiosa ou espiritual?</td>
                                <td>
                                    <input type="radio" name="parteDeComuniddReligiosa" value="sim" {{ $examePsicossocial->parteDeComuniddReligiosa == "sim" ? 'checked' : '' }} {{ old('parteDeComuniddReligiosa') == "sim" ? 'checked' : '' }}>
                                    <span>sim</span>

                                    <input type="radio" name="parteDeComuniddReligiosa" value="nao" {{ $examePsicossocial->parteDeComuniddReligiosa == "nao" ? 'checked' : '' }} {{ old('parteDeComuniddReligiosa') == "nao" ? 'checked' : '' }}>
                                    <span>nao</span>
                                </td>
                                <td>
                                    <input type="text" id="nomeComuniddReligiosa" name="nomeComuniddReligiosa" class="form-control" placeholder="Se sim, qual?" value="{{ $examePsicossocial->nomeComuniddReligiosa }}">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>

    <div class="tab-pane {{old('tab') == 'av_funcional' ? ' active' : null}}" id="av_funcional" role="tabpanel" aria-labelledby="messages-tab">
        <div id="form-create-container" class="col-md-6 offset-md-3">
            <h1>III - Avaliação Funcional</h1>
            <h4>Atividades de Vida Diária (AVD) – Índice de Katz</h4><br>

            <form action="/form/update/{{ $formulario->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="paciente_id" id="paciente_id" value="{{ $formulario->pacient_id }}" class="form-control">

                <div class="form-group">
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
                                    <input type="radio" name="banhoDependencia" value="0" {{ $exameFuncional->banhoDependencia == "0" ? 'checked' : '' }} {{ old('banhoDependencia') == "0" ? 'checked' : '' }}>
                                    <span>Requer ajuda somente para lavar uma única parte do corpo (como as costas ou
                                        membro deficiente) ou toma banho sozinho</span>
                                </td>
                                <td>
                                    <input type="radio" name="banhoDependencia" value="1" {{ $exameFuncional->banhoDependencia == "1" ? 'checked' : '' }} {{ old('banhoDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Requer ajuda para lavar mais de uma parte do corpo, ou para entrar ou sair da
                                        banheira, ou não toma banho sozinho</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Vestir-se</th>
                                <td>
                                    <input type="radio" name="vestirseDependencia" value="0" {{ $exameFuncional->vestirseDependencia == "0" ? 'checked' : '' }} {{ old('vestirseDependencia') == "0" ? 'checked' : '' }}>
                                    <span>Pega as roupas nos armários e gavetas, veste-as, coloca órteses ou próteses,
                                        manuseia fechos. Exclui-se o ato de amarrar sapatos.</span>
                                </td>
                                <td>
                                    <input type="radio" name="vestirseDependencia" value="1" {{ $exameFuncional->vestirseDependencia == "1" ? 'checked' : '' }} {{ old('vestirseDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Veste-se apenas parcialmente ou não se veste sozinho</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Uso do vaso sanitário</th>
                                <td>
                                    <input type="radio" name="usoVasoSanitarioDpendencia" value="0" {{ $exameFuncional->usoVasoSanitarioDpendencia == "0" ? 'checked' : '' }} {{ old('usoVasoSanitarioDpendencia') == "0" ? 'checked' : '' }}>
                                    <span>Vai ao vaso sanitário, senta-se e levanta-se do vaso; ajeita as roupas, faz a
                                        higiene íntima (pode usar comadre ou similar somente à noite e pode ou não estar
                                        usando suportes mecânicos)</span>
                                </td>
                                <td>
                                    <input type="radio" name="usoVasoSanitarioDpendencia" value="1" {{ $exameFuncional->usoVasoSanitarioDpendencia == "1" ? 'checked' : '' }} {{ old('usoVasoSanitarioDpendencia') == "1" ? 'checked' : '' }}>
                                    <span>Usa comadre ou similar, controlado por terceiros, ou recebe ajuda para ir até
                                        o vaso sanitário e usá-lo.</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Transferência</th>
                                <td>
                                    <input type="radio" name="transferenciaDependencia" value="0" {{ $exameFuncional->transferenciaDependencia == "0" ? 'checked' : '' }} {{ old('transferenciaDependencia') == "0" ? 'checked' : '' }}>
                                    <span>Deita-se e sai da cama sozinho, senta e se levanta da cadeira sozinho (pode
                                        estar usando objeto de apoio)</span>
                                </td>
                                <td>
                                    <input type="radio" name="transferenciaDependencia" value="1" {{ $exameFuncional->transferenciaDependencia == "1" ? 'checked' : '' }} {{ old('transferenciaDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Requer ajuda para deitar-se na cama ou sentar na cadeira, ou para levantar-se;
                                        não faz uma ou mais transferências</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Continência</th>
                                <td>
                                    <input type="radio" name="continenciaDependencia" value="0" {{ $exameFuncional->continenciaDependencia == "0" ? 'checked' : '' }} {{ old('continenciaDependencia') == "0" ? 'checked' : '' }}>
                                    <span>Micção e evacuação inteiramente autocontrolados</span>
                                </td>
                                <td>
                                    <input type="radio" name="continenciaDependencia" value="1" {{ $exameFuncional->continenciaDependencia == "1" ? 'checked' : '' }} {{ old('continenciaDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Incontinência parcial ou total para micção ou evacuação; controle parcial ou
                                        total por enemas e/ou cateteres; uso de urinóis ou comadre controlado por
                                        terceiros. Acidentes “ocasionais”.</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Alimentar-se</th>
                                <td>
                                    <input type="radio" name="alimentarseDependencia" value="0" {{ $exameFuncional->alimentarseDependencia == "0" ? 'checked' : '' }} {{ old('alimentarseDependencia') == "0" ? 'checked' : '' }}>
                                    <span>Leva a comida do prato (ou de seu equivalente) à boca. O corte prévio da carne
                                        e o preparo do alimento, como passar manteiga no pão, são excluídos da
                                        avaliação</span>
                                </td>
                                <td>
                                    <input type="radio" name="alimentarseDependencia" value="1" {{ $exameFuncional->alimentarseDependencia == "1" ? 'checked' : '' }} {{ old('alimentarseDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Requer ajuda para levar a comida do prato (ou de seu equivalente) à boca; não
                                        come nada ou recebe alimentação parenteral</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
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
                                    <input type="radio" name="usoTelefoneDependencia" value="3" {{ $exameFuncional->usoTelefoneDependencia == "3" ? 'checked' : '' }} {{ old('usoTelefoneDependencia') == "3" ? 'checked' : '' }}>
                                    <span>Recebe e faz ligações sem assistência</span>
                                </td>
                                <td>
                                    <input type="radio" name="usoTelefoneDependencia" value="2" {{ $exameFuncional->usoTelefoneDependencia == "2" ? 'checked' : '' }} {{ old('usoTelefoneDependencia') == "2" ? 'checked' : '' }}>
                                    <span>Necessita de assistência para realizar ligações telefônicas</span>
                                </td>
                                <td>
                                    <input type="radio" name="usoTelefoneDependencia" value="1" {{ $exameFuncional->usoTelefoneDependencia == "1" ? 'checked' : '' }} {{ old('usoTelefoneDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Não tem ou hábito ou é incapaz de usar telefone</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Em relação às viagens...</th>
                                <td>
                                    <input type="radio" name="viagensDependencia" value="3" {{ $exameFuncional->viagensDependencia == "3" ? 'checked' : '' }} {{ old('viagensDependencia') == "0" ? 'checked' : '' }}>
                                    <span>Realiza viagens sozinha</span>
                                </td>
                                <td>
                                    <input type="radio" name="viagensDependencia" value="2" {{ $exameFuncional->viagensDependencia == "2" ? 'checked' : '' }} {{ old('viagensDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Somente viaja quando tem companhia</span>
                                </td>
                                <td>
                                    <input type="radio" name="viagensDependencia" value="1" {{ $exameFuncional->viagensDependencia == "1" ? 'checked' : '' }} {{ old('viagensDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Não tem ou hábito ou é incapaz de viajar</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Em relação à realização de compras...</th>
                                <td>
                                    <input type="radio" name="comprasDependencia" value="3" {{ $exameFuncional->comprasDependencia == "3" ? 'checked' : '' }} {{ old('comprasDependencia') == "0" ? 'checked' : '' }}>
                                    <span>Realiza compras, quando é fornecido transporte</span>
                                </td>
                                <td>
                                    <input type="radio" name="comprasDependencia" value="2" {{ $exameFuncional->comprasDependencia == "2" ? 'checked' : '' }} {{ old('comprasDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Somente faz compras quando tem companhia</span>
                                </td>
                                <td>
                                    <input type="radio" name="comprasDependencia" value="1" {{ $exameFuncional->comprasDependencia == "1" ? 'checked' : '' }} {{ old('comprasDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Não tem o hábito ou é incapaz de realizar compras</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Em relação ao preparo de refeições...</th>
                                <td>
                                    <input type="radio" name="preparoRefeicoesDependencia" value="3" {{ $exameFuncional->preparoRefeicoesDependencia == "3" ? 'checked' : '' }} {{ old('preparoRefeicoesDependencia') == "0" ? 'checked' : '' }}>
                                    <span>Planeja e cozinha as refeições completas</span>
                                </td>
                                <td>
                                    <input type="radio" name="preparoRefeicoesDependencia" value="2" {{ $exameFuncional->preparoRefeicoesDependencia == "2" ? 'checked' : '' }} {{ old('preparoRefeicoesDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Prepara somente refeições pequenas ou quando recebe ajuda</span>
                                </td>
                                <td>
                                    <input type="radio" name="preparoRefeicoesDependencia" value="1" {{ $exameFuncional->preparoRefeicoesDependencia == "1" ? 'checked' : '' }} {{ old('preparoRefeicoesDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Não tem ou hábito ou é incapaz de preparar refeições</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Em relação ao trabalho doméstico...</th>
                                <td>
                                    <input type="radio" name="trabalhoDomesticoDependencia" value="3" {{ $exameFuncional->trabalhoDomesticoDependencia == "3" ? 'checked' : '' }} {{ old('trabalhoDomesticoDependencia') == "0" ? 'checked' : '' }}>
                                    <span>Realiza tarefas pesadas</span>
                                </td>
                                <td>
                                    <input type="radio" name="trabalhoDomesticoDependencia" value="2" {{ $exameFuncional->trabalhoDomesticoDependencia == "2" ? 'checked' : '' }} {{ old('trabalhoDomesticoDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Realiza tarefas leves, necessitando de ajuda nas pesadas</span>
                                </td>
                                <td>
                                    <input type="radio" name="trabalhoDomesticoDependencia" value="1" {{ $exameFuncional->trabalhoDomesticoDependencia == "1" ? 'checked' : '' }} {{ old('trabalhoDomesticoDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Não tem ou hábito ou é incapaz de realizar trabalhos domésticos</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Em relação ao uso de medicamentos...</th>
                                <td>
                                    <input type="radio" name="usoMedicamentoDependencia" value="3" {{ $exameFuncional->usoMedicamentoDependencia == "3" ? 'checked' : '' }} {{ old('usoMedicamentoDependencia') == "0" ? 'checked' : '' }}>
                                    <span>Faz uso de medicamentos sem assistência</span>
                                </td>
                                <td>
                                    <input type="radio" name="usoMedicamentoDependencia" value="2" {{ $exameFuncional->usoMedicamentoDependencia == "2" ? 'checked' : '' }} {{ old('usoMedicamentoDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Necessita de lembretes ou de assistência</span>
                                </td>
                                <td>
                                    <input type="radio" name="usoMedicamentoDependencia" value="1" {{ $exameFuncional->usoMedicamentoDependencia == "1" ? 'checked' : '' }} {{ old('usoMedicamentoDependencia') == "1" ? 'checked' : '' }}>
                                    <span>É incapaz de controlar sozinho o uso dos medicamentos</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Em relação ao manuseio do dinheiro</th>
                                <td>
                                    <input type="radio" name="manuseioDinheiroDependencia" value="3" {{ $exameFuncional->manuseioDinheiroDependencia == "3" ? 'checked' : '' }} {{ old('manuseioDinheiroDependencia') == "0" ? 'checked' : '' }}>
                                    <span>Preenche cheques e paga contas sem auxílio</span>
                                </td>
                                <td>
                                    <input type="radio" name="manuseioDinheiroDependencia" value="2" {{ $exameFuncional->manuseioDinheiroDependencia == "2" ? 'checked' : '' }} {{ old('manuseioDinheiroDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Necessita de assistência para uso de cheques e contas</span>
                                </td>
                                <td>
                                    <input type="radio" name="manuseioDinheiroDependencia" value="1" {{ $exameFuncional->manuseioDinheiroDependencia == "1" ? 'checked' : '' }} {{ old('manuseioDinheiroDependencia') == "1" ? 'checked' : '' }}>
                                    <span>Não tem ou hábito de lidar com o dinheiro ou é incapaz de manusear dinheiro,
                                        contas...</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <br>
                <h4>Rastreio da Vulnerabilidade – VES -13</h4><br>

                <div class="form-group">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th colspan="2">Idade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="radio" name="idade" value="1" {{ $exameFuncional->idade == "1" ? 'checked' : '' }} {{ old('idade') == "1" ? 'checked' : '' }}>
                                    <span>75 a 84 anos</span>
                                </td>
                                <td>
                                    <input type="radio" name="idade" value="3" {{ $exameFuncional->idade == "3" ? 'checked' : '' }} {{ old('idade') == "3" ? 'checked' : '' }}>
                                    <span>>ou igual a 84 anos</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group" id="teste">
                    <p>Autopercepção da saúde</p>
                    <label>Em geral, comparando com outras pessoas de sua idade, você diria que sua saúde é:</label>
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
                                    <input type="radio" name="autopercepcaoSaude" value="0" {{ $exameFuncional->autopercepcaoSaude == "0" ? 'checked' : '' }} {{ old('autopercepcaoSaude') == "0" ? 'checked' : '' }}>
                                    <span>Exelente</span>
                                </td>
                                <td>
                                    <input type="radio" name="autopercepcaoSaude" value="0" {{ $exameFuncional->autopercepcaoSaude == "0" ? 'checked' : '' }} {{ old('autopercepcaoSaude') == "0" ? 'checked' : '' }}>
                                    <span>Muito boa</span>
                                </td>
                                <td>
                                    <input type="radio" name="autopercepcaoSaude" value="0" {{ $exameFuncional->autopercepcaoSaude == "0" ? 'checked' : '' }} {{ old('autopercepcaoSaude') == "0" ? 'checked' : '' }}>
                                    <span>Boa</span>
                                </td>
                                <td>
                                    <input type="radio" name="autopercepcaoSaude" value="1" {{ $exameFuncional->autopercepcaoSaude == "1" ? 'checked' : '' }} {{ old('autopercepcaoSaude') == "1" ? 'checked' : '' }}>
                                    <span>Regular</span>
                                </td>
                                <td>
                                    <input type="radio" name="autopercepcaoSaude" value="1" {{ $exameFuncional->autopercepcaoSaude == "1" ? 'checked' : '' }} {{ old('autopercepcaoSaude') == "1" ? 'checked' : '' }}>
                                    <span>Ruim</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group" id="teste">
                    <p>Limitação física</p>
                    <label>Em média, quanta dificuldade você tem para fazer as seguintes atividades físicas:</label>
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
                                    <input type="radio" name="limitacaoFisica_quest1" value="0" {{ $exameFuncional->limitacaoFisica_quest1 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest1') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest1" value="0" {{ $exameFuncional->limitacaoFisica_quest1 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest1') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest1" value="0" {{ $exameFuncional->limitacaoFisica_quest1 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest1') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest1" value="1" {{ $exameFuncional->limitacaoFisica_quest1 == "1" ? 'checked' : '' }} {{ old('limitacaoFisica_quest1') == "1" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest1" value="1" {{ $exameFuncional->limitacaoFisica_quest1 == "1" ? 'checked' : '' }} {{ old('limitacaoFisica_quest1') == "1" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Levantar ou carregar objetos com peso aproximado de 5 kg?</th>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest2" value="0" {{ $exameFuncional->limitacaoFisica_quest2 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest2') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest2" value="0" {{ $exameFuncional->limitacaoFisica_quest2 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest2') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest2" value="0" {{ $exameFuncional->limitacaoFisica_quest2 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest2') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest2" value="1" {{ $exameFuncional->limitacaoFisica_quest2 == "1" ? 'checked' : '' }} {{ old('limitacaoFisica_quest2') == "1" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest2" value="1" {{ $exameFuncional->limitacaoFisica_quest2 == "1" ? 'checked' : '' }} {{ old('limitacaoFisica_quest2') == "1" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Elevar ou estender os braços acima do nível do ombro</th>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest3" value="0" {{ $exameFuncional->limitacaoFisica_quest3 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest3') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest3" value="0" {{ $exameFuncional->limitacaoFisica_quest3 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest3') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest3" value="0" {{ $exameFuncional->limitacaoFisica_quest3 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest3') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest3" value="1" {{ $exameFuncional->limitacaoFisica_quest3 == "1" ? 'checked' : '' }} {{ old('limitacaoFisica_quest3') == "1" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest3" value="1" {{ $exameFuncional->limitacaoFisica_quest3 == "1" ? 'checked' : '' }} {{ old('limitacaoFisica_quest3') == "1" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Escrever ou manusear e segurar pequenos objetos?</th>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest4" value="Nenhuma dificuldade" {{ $exameFuncional->limitacaoFisica_quest4 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest4') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest4" value="0" {{ $exameFuncional->limitacaoFisica_quest4 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest4') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest4" value="0" {{ $exameFuncional->limitacaoFisica_quest4 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest4') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest4" value="1" {{ $exameFuncional->limitacaoFisica_quest4 == "1" ? 'checked' : '' }} {{ old('limitacaoFisica_quest4') == "1" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest4" value="1" {{ $exameFuncional->limitacaoFisica_quest4 == "1" ? 'checked' : '' }} {{ old('limitacaoFisica_quest4') == "1" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Andar 400 m (aproximadamente quatro quarteirões)?</th>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest5" value="Nenhuma dificuldade" {{ $exameFuncional->limitacaoFisica_quest5 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest5') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest5" value="0" {{ $exameFuncional->limitacaoFisica_quest5 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest5') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest5" value="0" {{ $exameFuncional->limitacaoFisica_quest5 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest5') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest5" value="1" {{ $exameFuncional->limitacaoFisica_quest5 == "1" ? 'checked' : '' }} {{ old('limitacaoFisica_quest5') == "1" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest5" value="1" {{ $exameFuncional->limitacaoFisica_quest5 == "1" ? 'checked' : '' }} {{ old('limitacaoFisica_quest5') == "1" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Fazer serviço doméstico pesado como esfregar o chão ou limpar janelas?
                                </th>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest6" value="Nenhuma dificuldade" {{ $exameFuncional->limitacaoFisica_quest6 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest6') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest6" value="0" {{ $exameFuncional->limitacaoFisica_quest6 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest6') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest6" value="0" {{ $exameFuncional->limitacaoFisica_quest6 == "0" ? 'checked' : '' }} {{ old('limitacaoFisica_quest6') == "0" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest6" value="1" {{ $exameFuncional->limitacaoFisica_quest6 == "1" ? 'checked' : '' }} {{ old('limitacaoFisica_quest6') == "1" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="limitacaoFisica_quest6" value="1" {{ $exameFuncional->limitacaoFisica_quest6 == "1" ? 'checked' : '' }} {{ old('limitacaoFisica_quest6') == "1" ? 'checked' : '' }}>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <p>Incapacidades</p>
                    <span>Por causa de sua saúde ou condição física, você tem alguma dificuldade para:</span>

                    <p>Fazer compras de itens pessoais (como produtos de higiene e medicamentos)?</p>
                    <input type="radio" id="fazerComprasSim" onchange="disabilitarHabilitarInput()" name="incapacidades_quest1" value="4" {{ $exameFuncional->incapacidades_quest1 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest1') == "4" ? 'checked' : '' }}>
                    <span>Sim</span>

                    <input type="radio" id="fazerComprasNao" onchange="disabilitarHabilitarInput()" name="incapacidades_quest1" value="0" {{ $exameFuncional->incapacidades_quest1 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest1') == "0" ? 'checked' : '' }}>
                    <span>Não</span>

                    <input type="radio" id="fazerComprasNaoFaco" onchange="disabilitarHabilitarInput()" name="incapacidades_quest1" value="0" {{ $exameFuncional->incapacidades_quest1 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest1') == "0" ? 'checked' : '' }}>
                    <span>Não faço compras</span>

                    <p id="fazerComprasQuest2" aria-disabled="true">Você recebe ajuda para fazer compras</p>
                    <input type="radio" id="simQuest2Compras" disabled name="incapacidades_quest1_1" value="4" {{ $exameFuncional->incapacidades_quest1_1 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest1_1') == "4" ? 'checked' : '' }}>
                    <span id="fazerComprasSimSpan2" aria-disabled="true">Sim</span>

                    <input type="radio" id="naoQuest2Compras" disabled name="incapacidades_quest1_1" value="0" {{ $exameFuncional->incapacidades_quest1_1 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest1_1') == "0" ? 'checked' : '' }}>
                    <span id="fazerComprasNaoSpan2" aria-disabled="true">Não</span>

                    <p id="fazerComprasQuest3" aria-disabled="true">Isso acontece por conta da sua saúde?</p>
                    <input type="radio" id="simQuest3Compras" disabled name="incapacidades_quest1_2" value="4" {{ $exameFuncional->incapacidades_quest1_2 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest1_2') == "4" ? 'checked' : '' }}>
                    <span id="fazerComprasSimSpan3" aria-disabled="true">Sim</span>

                    <input type="radio" id="naoQuest3Compras" disabled name="incapacidades_quest1_2" value="0" {{ $exameFuncional->incapacidades_quest1_2 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest1_2') == "0" ? 'checked' : '' }}>
                    <span id="fazerComprasNaoSpan3" aria-disabled="true">Não</span>


                    <p>Lidar com dinheiro (como controlar suas despesas, gastos ou pagar contas)?</p>
                    <input type="radio" id="lidaDinheiroSim" onchange="disabilitarHabilitarInput()" name="incapacidades_quest2" value="4" {{ $exameFuncional->incapacidades_quest2 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest2') == "4" ? 'checked' : '' }}>
                    <span>Sim</span>

                    <input type="radio" id="lidaDinheiroNao" onchange="disabilitarHabilitarInput()" name="incapacidades_quest2" value="0" {{ $exameFuncional->incapacidades_quest2 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest2') == "0" ? 'checked' : '' }}>
                    <span>Não</span>

                    <input type="radio" id="naolidaDinheiro" onchange="disabilitarHabilitarInput()" name="incapacidades_quest2" value="0" {{ $exameFuncional->incapacidades_quest2 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest2') == "0" ? 'checked' : '' }}>
                    <span>Não lido com dinheiro</span>

                    <p id="lidaDinheiroQuest2" aria-disabled="true">Você recebe ajuda para lidar com dinheiro?</p>
                    <input type="radio" id="simQuest2Dinheiro" disabled name="incapacidades_quest2_1" value="4" {{ $exameFuncional->incapacidades_quest2_1 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest2_1') == "4" ? 'checked' : '' }}>
                    <span id="lidaDinheiroSimSpan2" aria-disabled="true">Sim</span>

                    <input type="radio" id="naoQuest2Dinheiro" disabled name="incapacidades_quest2_1" value="0" {{ $exameFuncional->incapacidades_quest2_1 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest2_1') == "0" ? 'checked' : '' }}>
                    <span id="lidaDinheiroNaoSpan2" aria-disabled="true">Não</span>

                    <p id="lidaDinheiroQuest3" aria-disabled="true">Isso acontece por conta da sua saúde?</p>
                    <input type="radio" id="simQuest3Dinheiro" disabled name="incapacidades_quest2_2" value="4" {{ $exameFuncional->incapacidades_quest2_2 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest2_2') == "4" ? 'checked' : '' }}>
                    <span id="lidaDinheiroSimSpan3" aria-disabled="true">Sim</span>

                    <input type="radio" id="naoQuest3Dinheiro" disabled name="incapacidades_quest2_2" value="0" {{ $exameFuncional->incapacidades_quest2_2 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest2_2') == "0" ? 'checked' : '' }}>
                    <span id="lidaDinheiroNaoSpan3" aria-disabled="true">Não</span>


                    <p>Atravessar o quarto andando ou caminhando pela sala?</p>
                    <input type="radio" id="atravessaQuartoSim" onchange="disabilitarHabilitarInput()" name="incapacidades_quest3" value="4" {{ $exameFuncional->incapacidades_quest3 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest3') == "4" ? 'checked' : '' }}>
                    <span>Sim</span>

                    <input type="radio" type="radio" id="atravessaQuartoNao" onchange="disabilitarHabilitarInput()" name="incapacidades_quest3" value="0" {{ $exameFuncional->incapacidades_quest3 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest3') == "0" ? 'checked' : '' }}>
                    <span>Não</span>

                    <input type="radio" type="radio" id="naoAnda" onchange="disabilitarHabilitarInput()" name="incapacidades_quest3" value="0" {{ $exameFuncional->incapacidades_quest3 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest3') == "0" ? 'checked' : '' }}>
                    <span>Não ando</span>

                    <p id="andarQuest2" aria-disabled="true">Você recebe ajuda para andar</p>
                    <input type="radio" id="simQuest2Andar" disabled name="incapacidades_quest3_1" value="4" {{ $exameFuncional->incapacidades_quest3_2 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest3_1') == "4" ? 'checked' : '' }}>
                    <span id="andarSimSpan2" aria-disabled="true">Sim</span>

                    <input type="radio" id="naoQuest2Andar" disabled name="incapacidades_quest3_1" value="0" {{ $exameFuncional->incapacidades_quest3_2 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest3_1') == "0" ? 'checked' : '' }}>
                    <span id="andarNaoSpan2" aria-disabled="true">Não</span>

                    <p id="andarQuest3" aria-disabled="true">Isso acontece por conta da sua saúde?</p>
                    <input type="radio" id="simQuest3Andar" disabled name="incapacidades_quest3_2" value="4" {{ $exameFuncional->incapacidades_quest3_2 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest3_2') == "4" ? 'checked' : '' }}>
                    <span id="andarSimSpan3" aria-disabled="true">Sim</span>

                    <input type="radio" id="naoQuest3Andar" disabled name="incapacidades_quest3_2" value="0" {{ $exameFuncional->incapacidades_quest3_2 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest3_2') == "0" ? 'checked' : '' }}>
                    <span id="andarNaoSpan3" aria-disabled="true">Não</span>


                    <p>Realizar tarefas domésticas leves (como lavar pratos, arrumar a casa ou fazer limpeza leve)?</p>
                    <input type="radio" id="tarefaDomesticaSim" onchange="disabilitarHabilitarInput()" name="incapacidades_quest4" value="4" {{ $exameFuncional->incapacidades_quest4 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest4') == "4" ? 'checked' : '' }}>
                    <span>Sim</span>

                    <input type="radio" id="tarefaDomesticaNao" onchange="disabilitarHabilitarInput()" name="incapacidades_quest4" value="0" {{ $exameFuncional->incapacidades_quest4 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest4') == "0" ? 'checked' : '' }}>
                    <span>Não</span>

                    <input type="radio" id="naoFacoTarefaDomestica" onchange="disabilitarHabilitarInput()" name="incapacidades_quest4" value="0" {{ $exameFuncional->incapacidades_quest4 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest4') == "0" ? 'checked' : '' }}>
                    <span>Não faço tarefas domésticas leves</span>

                    <p id="tarefaDomesticaQuest2" aria-disabled="true">Você recebe ajuda para tarefas domésticas leves?
                    </p>
                    <input type="radio" id="simQuest2TarefaDomestica" disabled name="incapacidades_quest4_1" value="4" {{ $exameFuncional->incapacidades_quest4_1 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest4_1') == "4" ? 'checked' : '' }}>
                    <span id="tarefaDomesticaSimSpan2" aria-disabled="true">Sim</span>

                    <input type="radio" id="naoQuest2TarefaDomestica" disabled name="incapacidades_quest4_1" value="0" {{ $exameFuncional->incapacidades_quest4_1 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest4_1') == "0" ? 'checked' : '' }}>
                    <span id="tarefaDomesticaNaoSpan2" aria-disabled="true">Não</span>

                    <p id="tarefaDomesticaQuest3" aria-disabled="true">Isso acontece por conta da sua saúde?</p>
                    <input type="radio" type="radio" id="simQuest3TarefaDomestica" disabled name="incapacidades_quest4_2" value="4" {{ $exameFuncional->incapacidades_quest4_2 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest4_2') == "4" ? 'checked' : '' }}>
                    <span id="tarefaDomesticaSimSpan3" aria-disabled="true">Sim</span>

                    <input type="radio" id="naoQuest3TarefaDomestica" disabled name="incapacidades_quest4_2" value="0" {{ $exameFuncional->incapacidades_quest4_2 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest4_2') == "0" ? 'checked' : '' }}>
                    <span id="tarefaDomesticaNaoSpan3" aria-disabled="true">Não</span>


                    <p>Tomar banho de chuveiro ou banheira?</p>
                    <input type="radio" id="tomaBanhoSim" onchange="disabilitarHabilitarInput()" name="incapacidades_quest5" value="4" {{ $exameFuncional->incapacidades_quest5 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest5') == "4" ? 'checked' : '' }}>
                    <span>Sim</span>

                    <input type="radio" id="tomaBanhoNao" onchange="disabilitarHabilitarInput()" name="incapacidades_quest5" value="0" {{ $exameFuncional->incapacidades_quest5 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest5') == "0" ? 'checked' : '' }}>
                    <span>Não</span>

                    <input type="radio" id="naoTomaBanho" onchange="disabilitarHabilitarInput()" name="incapacidades_quest5" value="0" {{ $exameFuncional->incapacidades_quest5 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest5') == "0" ? 'checked' : '' }}>
                    <span>Não tomo banho de chuveiro ou banheira</span>

                    <p id="tomaBanhoQuest2" aria-disabled="true">Você recebe ajuda para tomar banho de chuveiro?</p>
                    <input type="radio" id="simQuest2TomaBanho" disabled name="incapacidades_quest5_1" value="4" {{ $exameFuncional->incapacidades_quest5_1 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest5_1') == "4" ? 'checked' : '' }}>
                    <span id="tomaBanhoSimSpan2" aria-disabled="true">Sim</span>

                    <input type="radio" id="naoQuest2TomaBanho" disabled name="incapacidades_quest5_1" value="0" {{ $exameFuncional->incapacidades_quest5_1 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest5_1') == "0" ? 'checked' : '' }}>
                    <span id="tomaBanhoNaoSpan2" aria-disabled="true">Não</span>

                    <p id="tomaBanhoQuest3" aria-disabled="true">Isso acontece por conta da sua saúde?</p>
                    <input type="radio" id="simQuest3TomaBanho" name="incapacidades_quest5_2" value="4" {{ $exameFuncional->incapacidades_quest5_2 == "4" ? 'checked' : '' }} {{ old('incapacidades_quest5_2') == "4" ? 'checked' : '' }}>
                    <span id="tomaBanhoSimSpan3" aria-disabled="true">Sim</span>

                    <input type="radio" id="naoQuest3TomaBanho" name="incapacidades_quest5_2" value="0" {{ $exameFuncional->incapacidades_quest5_2 == "0" ? 'checked' : '' }} {{ old('incapacidades_quest5_2') == "0" ? 'checked' : '' }}>
                    <span id="tomaBanhoNaoSpan3" aria-disabled="true">Não</span>
                </div>
                <br>

                <h4>Avaliação da mobilidade</h4>
                <div class="form-group">
                    <p>Timed up and go test (PODSIADLO E RICHARDSON, 1991)</p>

                    <input type="radio" name="av_mobilidade" value="baixo risco de quedas" {{ $exameFuncional->av_mobilidade == "baixo risco de quedas" ? 'checked' : '' }} {{ old('av_mobilidade') == "baixo risco de quedas" ? 'checked' : '' }}>
                    <label>Tempo de realização inferior a 15 segundos – baixo risco de quedas</label><br>

                    <input type="radio" name="av_mobilidade" value="risco de quedas moderado" {{ $exameFuncional->av_mobilidade == "risco de quedas moderado" ? 'checked' : '' }} {{ old('av_mobilidade') == "risco de quedas moderado" ? 'checked' : '' }}>
                    <label>Tempo de realização de 20 a 30 segundos – risco de quedas moderado</label><br>

                    <input type="radio" name="av_mobilidade" value="alto risco para quedas" {{ $exameFuncional->av_mobilidade == "alto risco para quedas" ? 'checked' : '' }} {{ old('av_mobilidade') == "alto risco para quedas" ? 'checked' : '' }}>
                    <label>Tempo de realização superior a 35 segundos – alto risco para quedas</label>br
                </div>

                <br>
                <h4>Avaliação ambiental – Escala ambiental de risco de quedas</h4>
                <br>
                <div class="form-group">

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
                                    <input type="radio" name="areaLocomocao_areaLocomocaoDesimpedida" value="sim" {{ $exameFuncional->areaLocomocao_areaLocomocaoDesimpedida == "sim" ? 'checked' : '' }} {{ old('areaLocomocao_areaLocomocaoDesimpedida') == "sim" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="areaLocomocao_areaLocomocaoDesimpedida" value="nao" {{ $exameFuncional->areaLocomocao_areaLocomocaoDesimpedida == "nao" ? 'checked' : '' }} {{ old('areaLocomocao_areaLocomocaoDesimpedida') == "nao" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Presença de barras de apoio</span>
                                </td>
                                <td>
                                    <input type="radio" name="areaLocomocao_barrasDeApoio" value="sim" {{ $exameFuncional->areaLocomocao_barrasDeApoio == "sim" ? 'checked' : '' }} {{ old('areaLocomocao_barrasDeApoio') == "sim" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="areaLocomocao_barrasDeApoio" value="nao" {{ $exameFuncional->areaLocomocao_barrasDeApoio == "nao" ? 'checked' : '' }} {{ old('areaLocomocao_barrasDeApoio') == "nao" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Pisos uniformes e tapetes bem fixos</span>
                                </td>
                                <td>
                                    <input type="radio" name="areaLocomocao_pisosUniformesTapetesFixos" value="sim" {{ $exameFuncional->areaLocomocao_pisosUniformesTapetesFixos == "sim" ? 'checked' : '' }} {{ old('areaLocomocao_pisosUniformesTapetesFixos') == "sim" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="areaLocomocao_pisosUniformesTapetesFixos" value="nao" {{ $exameFuncional->areaLocomocao_pisosUniformesTapetesFixos == "nao" ? 'checked' : '' }} {{ old('areaLocomocao_pisosUniformesTapetesFixos') == "nao" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="2">Iluminação</th>
                                <td>
                                    <span>Presença de iluminação suficiente para clarear todo o interior de cada cômodo,
                                        incluindo degraus</span>
                                </td>
                                <td>
                                    <input type="radio" name="iluminacao_presencaIluminacao" value="sim" {{ $exameFuncional->iluminacao_presencaIluminacao == "sim" ? 'checked' : '' }} {{ old('iluminacao_presencaIluminacao') == "sim" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="iluminacao_presencaIluminacao" value="nao" {{ $exameFuncional->iluminacao_presencaIluminacao == "nao" ? 'checked' : '' }} {{ old('iluminacao_presencaIluminacao') == "nao" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Interruptores acessíveis na entrada dos cômodos</span>
                                </td>
                                <td>
                                    <input type="radio" name="iluminacao_interruptoresAcessiveis" value="sim" {{ $exameFuncional->iluminacao_interruptoresAcessiveis == "sim" ? 'checked' : '' }} {{ old('iluminacao_interruptoresAcessiveis') == "sim" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="iluminacao_interruptoresAcessiveis" value="nao" {{ $exameFuncional->iluminacao_interruptoresAcessiveis == "nao" ? 'checked' : '' }} {{ old('iluminacao_interruptoresAcessiveis') == "nao" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="2">Banheiro</th>
                                <td>
                                    <span>Área do chuveiro com antiderrapante</span>
                                </td>
                                <td>
                                    <input type="radio" name="banheiro_areaChuveiroAntiderrapante" value="sim" {{ $exameFuncional->banheiro_areaChuveiroAntiderrapante == "sim" ? 'checked' : '' }} {{ old('banheiro_areaChuveiroAntiderrapante') == "sim" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="banheiro_areaChuveiroAntiderrapante" value="nao" {{ $exameFuncional->banheiro_areaChuveiroAntiderrapante == "nao" ? 'checked' : '' }} {{ old('banheiro_areaChuveiroAntiderrapante') == "nao" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Box com abertura fácil ou presença de cortina bem firme</span>
                                </td>
                                <td>
                                    <input type="radio" name="banheiro_boxAberturaFacil" value="sim" {{ $exameFuncional->banheiro_boxAberturaFacil == "sim" ? 'checked' : '' }} {{ old('banheiro_boxAberturaFacil') == "sim" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="banheiro_boxAberturaFacil" value="nao" {{ $exameFuncional->banheiro_boxAberturaFacil == "nao" ? 'checked' : '' }} {{ old('banheiro_boxAberturaFacil') == "nao" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="2">Cozinha e quarto</th>
                                <td>
                                    <span>Armários: baixos, sem necessidade de uso de escada</span>
                                </td>
                                <td>
                                    <input type="radio" name="cozinhaEQuarto_camaBoa" value="sim" {{ $exameFuncional->cozinhaEQuarto_camaBoa == "sim" ? 'checked' : '' }} {{ old('cozinhaEQuarto_camaBoa') == "sim" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="cozinhaEQuarto_camaBoa" value="nao" {{ $exameFuncional->cozinhaEQuarto_camaBoa == "nao" ? 'checked' : '' }} {{ old('cozinhaEQuarto_camaBoa') == "nao" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Cama de boa altura (45 cm)</span>
                                </td>
                                <td>
                                    <input type="radio" name="cozinhaEQuarto_armariosBaixos" value="sim" {{ $exameFuncional->cozinhaEQuarto_armariosBaixos == "sim" ? 'checked' : '' }} {{ old('cozinhaEQuarto_armariosBaixos') == "sim" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="cozinhaEQuarto_armariosBaixos" value="nao" {{ $exameFuncional->cozinhaEQuarto_armariosBaixos == "nao" ? 'checked' : '' }} {{ old('cozinhaEQuarto_armariosBaixos') == "nao" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="2">Escada</th>
                                <td>
                                    <span>Piso antiderrapante</span>
                                </td>
                                <td>
                                    <input type="radio" name="escada_pisoAntiderrapante" value="sim" {{ $exameFuncional->escada_pisoAntiderrapante == "sim" ? 'checked' : '' }} {{ old('escada_pisoAntiderrapante') == "sim" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="escada_pisoAntiderrapante" value="nao" {{ $exameFuncional->escada_pisoAntiderrapante == "nao" ? 'checked' : '' }} {{ old('escada_pisoAntiderrapante') == "nao" ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Corrimão dos dois lados e firme</span>
                                </td>
                                <td>
                                    <input type="radio" name="escada_corrimaoDoisLados" value="sim" {{ $exameFuncional->escada_corrimaoDoisLados == "sim" ? 'checked' : '' }} {{ old('escada_corrimaoDoisLados') == "sim" ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="escada_corrimaoDoisLados" value="nao" {{ $exameFuncional->escada_corrimaoDoisLados == "nao" ? 'checked' : '' }} {{ old('escada_corrimaoDoisLados') == "nao" ? 'checked' : '' }}>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <br>
                <h4>Sono</h4>
                <div class="form-group">

                    <p>Sonolência excessiva (hiperssonia)</p>

                    <input type="radio" id="simQuest3TomaBanho" name="hiperssonia" value="sim" {{ $exameFuncional->hiperssonia == "sim" ? 'checked' : '' }} {{ old('hiperssonia') == "sim" ? 'checked' : '' }}>
                    <span>Sim</span>

                    <input type="radio" id="simQuest3TomaBanho" name="hiperssonia" value="nao" {{ $exameFuncional->hiperssonia == "nao" ? 'checked' : '' }} {{ old('hiperssonia') == "nao" ? 'checked' : '' }}>
                    <span>Não</span>

                    <p>Dificuldade em iniciar/manter o sono (insônia)</p>

                    <input type="radio" id="simQuest3TomaBanho" name="insonia" value="sim" {{ $exameFuncional->insonia == "sim" ? 'checked' : '' }} {{ old('insonia') == "sim" ? 'checked' : '' }}>
                    <span>Sim</span>

                    <input type="radio" id="simQuest3TomaBanho" name="insonia" value="nao" {{ $exameFuncional->insonia == "nao" ? 'checked' : '' }} {{ old('insonia') == "nao" ? 'checked' : '' }}>
                    <span>Não</span>

                    <p>Comportamentos estranhos ou não usuais durante o sono (parassonia)</p>

                    <input type="radio" id="simQuest3TomaBanho" name="parassonia" value="sim" {{ $exameFuncional->parassonia == "sim" ? 'checked' : '' }} {{ old('parassonia') == "sim" ? 'checked' : '' }}>
                    <span>Sim</span>

                    <input type="radio" id="simQuest3TomaBanho" name="parassonia" value="nao" {{ $exameFuncional->parassonia == "nao" ? 'checked' : '' }} {{ old('parassonia') == "nao" ? 'checked' : '' }}>
                    <span>Não</span>
                </div>

                <br>
                <h4>Nutrição</h4>

                <div class="form-group">
                    <p>Peso</p>
                    <input type="number" step="any" name="peso" placeholder="Kg" class="form-control" value="{{ $exameFuncional->peso }}">
                    <p>Altura</p>
                    <input type="number" step="any" name="altura" placeholder="m²" class="form-control" value="{{ $exameFuncional->altura }}">
                </div>

                <input type="submit" class="btn btn-primary" value="Salvar formulário">
            </form>
        </div>
    </div>

</div>




<script>
    function disabilitarHabilitarInput() {

        let Nodulo = document.getElementById('Nodulo');

        let MVReduzido = document.getElementById('MVReduzido');
        let MVAbolido = document.getElementById('MVAbolido');
        let Crepitacoes = document.getElementById('Crepitacoes');
        let Sibilos = document.getElementById('Sibilos');
        let Roncos = document.getElementById('Roncos');
        let Estertores = document.getElementById('Estertores');
        let AtritoPleural = document.getElementById('AtritoPleural');

        let Edema = document.getElementById('Edema');

        let DescargaPapilar = document.getElementById('DescargaPapilar');
        let CorrimentoVaginal = document.getElementById('CorrimentoVaginal');
        let OutraQueixa = document.getElementById('OutraQueixa');

        let LiquidoIntrabdominal = document.getElementById('LiquidoIntrabdominal');
        let MassaIntrabdominal = document.getElementById('MassaIntrabdominal');

        let DorPF = document.getElementById('DorPF');
        let DorPP = document.getElementById('DorPP');

        let Escoriacao = document.getElementById('Escoriacao');
        let Macula = document.getElementById('Macula');
        let Papula = document.getElementById('Papula');
        let Pustula = document.getElementById('Pustula');
        let Vesicula = document.getElementById('Vesicula');
        let Erupcao = document.getElementById('Erupcao');
        let Cisto = document.getElementById('Cisto');
        let Tumor = document.getElementById('Tumor');
        let Descamacao = document.getElementById('Descamacao');
        let Cicatriz = document.getElementById('Cicatriz');
        let Fissura = document.getElementById('Fissura');
        let Ulcera = document.getElementById('Ulcera');
        let LesaoPressao = document.getElementById('LesaoPressao');
        let PurpuraSenil = document.getElementById('PurpuraSenil');
        let Hemangioma = document.getElementById('Hemangioma');
        let Spider = document.getElementById('Spider');

        let Dor = document.getElementById('Dor');

        let fazerComprasSim = document.getElementById('fazerComprasSim');
        let fazerComprasNaoFaco = document.getElementById('fazerComprasNaoFaco');

        let lidaDinheiroSim = document.getElementById('lidaDinheiroSim');
        let naolidaDinheiro = document.getElementById('naolidaDinheiro');

        let atravessaQuartoSim = document.getElementById('atravessaQuartoSim');
        let naoAnda = document.getElementById('naoAnda');

        let tarefaDomesticaSim = document.getElementById('tarefaDomesticaSim');
        let naoFacoTarefaDomestica = document.getElementById('naoFacoTarefaDomestica');

        let tomaBanhoSim = document.getElementById('tomaBanhoSim');
        let naoTomaBanho = document.getElementById('naoTomaBanho');

        if (tomaBanhoSim.checked) {
            document.querySelector('#simQuest2TomaBanho').disabled = false;
            document.querySelector('#naoQuest2TomaBanho').disabled = false;
            document.querySelector('#tomaBanhoQuest2').setAttribute('aria-disabled', 'false');
            document.querySelector('#tomaBanhoSimSpan2').setAttribute('aria-disabled', 'false');
            document.querySelector('#tomaBanhoNaoSpan2').setAttribute('aria-disabled', 'false');
        } else {
            document.querySelector('#simQuest2TomaBanho').disabled = true;
            document.querySelector('#naoQuest2TomaBanho').disabled = true;
            document.querySelector('#tomaBanhoQuest2').setAttribute('aria-disabled', 'true');
            document.querySelector('#tomaBanhoSimSpan2').setAttribute('aria-disabled', 'true');
            document.querySelector('#tomaBanhoNaoSpan2').setAttribute('aria-disabled', 'true');
        }

        if (naoTomaBanho.checked) {
            document.querySelector('#simQuest3TomaBanho').disabled = false;
            document.querySelector('#naoQuest3TomaBanho').disabled = false;
            document.querySelector('#tomaBanhoQuest3').setAttribute('aria-disabled', 'false');
            document.querySelector('#tomaBanhoSimSpan3').setAttribute('aria-disabled', 'false');
            document.querySelector('#tomaBanhoNaoSpan3').setAttribute('aria-disabled', 'false');
        } else {
            document.querySelector('#simQuest3TomaBanho').disabled = true;
            document.querySelector('#naoQuest3TomaBanho').disabled = true;
            document.querySelector('#tomaBanhoQuest3').setAttribute('aria-disabled', 'true');
            document.querySelector('#tomaBanhoSimSpan3').setAttribute('aria-disabled', 'true');
            document.querySelector('#tomaBanhoNaoSpan3').setAttribute('aria-disabled', 'true');
        }

        if (tarefaDomesticaSim.checked) {
            document.querySelector('#simQuest2TarefaDomestica').disabled = false;
            document.querySelector('#naoQuest2TarefaDomestica').disabled = false;
            document.querySelector('#tarefaDomesticaQuest2').setAttribute('aria-disabled', 'false');
            document.querySelector('#tarefaDomesticaSimSpan2').setAttribute('aria-disabled', 'false');
            document.querySelector('#tarefaDomesticaNaoSpan2').setAttribute('aria-disabled', 'false');
        } else {
            document.querySelector('#simQuest2TarefaDomestica').disabled = true;
            document.querySelector('#naoQuest2TarefaDomestica').disabled = true;
            document.querySelector('#tarefaDomesticaQuest2').setAttribute('aria-disabled', 'true');
            document.querySelector('#tarefaDomesticaSimSpan2').setAttribute('aria-disabled', 'true');
            document.querySelector('#tarefaDomesticaNaoSpan2').setAttribute('aria-disabled', 'true');
        }

        if (naoFacoTarefaDomestica.checked) {
            document.querySelector('#simQuest3TarefaDomestica').disabled = false;
            document.querySelector('#naoQuest3TarefaDomestica').disabled = false;
            document.querySelector('#tarefaDomesticaQuest3').setAttribute('aria-disabled', 'false');
            document.querySelector('#tarefaDomesticaSimSpan3').setAttribute('aria-disabled', 'false');
            document.querySelector('#tarefaDomesticaNaoSpan3').setAttribute('aria-disabled', 'false');
        } else {
            document.querySelector('#simQuest3TarefaDomestica').disabled = true;
            document.querySelector('#naoQuest3TarefaDomestica').disabled = true;
            document.querySelector('#tarefaDomesticaQuest3').setAttribute('aria-disabled', 'true');
            document.querySelector('#tarefaDomesticaSimSpan3').setAttribute('aria-disabled', 'true');
            document.querySelector('#tarefaDomesticaNaoSpan3').setAttribute('aria-disabled', 'true');
        }

        if (atravessaQuartoSim.checked) {
            document.querySelector('#simQuest2Andar').disabled = false;
            document.querySelector('#naoQuest2Andar').disabled = false;
            document.querySelector('#andarQuest2').setAttribute('aria-disabled', 'false');
            document.querySelector('#andarSimSpan2').setAttribute('aria-disabled', 'false');
            document.querySelector('#andarNaoSpan2').setAttribute('aria-disabled', 'false');
        } else {
            document.querySelector('#simQuest2Andar').disabled = true;
            document.querySelector('#naoQuest2Andar').disabled = true;
            document.querySelector('#andarQuest2').setAttribute('aria-disabled', 'true');
            document.querySelector('#andarSimSpan2').setAttribute('aria-disabled', 'true');
            document.querySelector('#andarNaoSpan2').setAttribute('aria-disabled', 'true');
        }

        if (naoAnda.checked) {
            document.querySelector('#simQuest3Andar').disabled = false;
            document.querySelector('#naoQuest3Andar').disabled = false;
            document.querySelector('#andarQuest3').setAttribute('aria-disabled', 'false');
            document.querySelector('#andarSimSpan3').setAttribute('aria-disabled', 'false');
            document.querySelector('#andarNaoSpan3').setAttribute('aria-disabled', 'false');
        } else {
            document.querySelector('#simQuest3Andar').disabled = true;
            document.querySelector('#naoQuest3Andar').disabled = true;
            document.querySelector('#andarQuest3').setAttribute('aria-disabled', 'true');
            document.querySelector('#andarSimSpan3').setAttribute('aria-disabled', 'true');
            document.querySelector('#andarNaoSpan3').setAttribute('aria-disabled', 'true');
        }

        if (lidaDinheiroSim.checked) {
            document.querySelector('#simQuest2Dinheiro').disabled = false;
            document.querySelector('#naoQuest2Dinheiro').disabled = false;
            document.querySelector('#lidaDinheiroQuest2').setAttribute('aria-disabled', 'false');
            document.querySelector('#lidaDinheiroSimSpan2').setAttribute('aria-disabled', 'false');
            document.querySelector('#lidaDinheiroNaoSpan2').setAttribute('aria-disabled', 'false');
        } else {
            document.querySelector('#simQuest2Dinheiro').disabled = true;
            document.querySelector('#naoQuest2Dinheiro').disabled = true;
            document.querySelector('#lidaDinheiroQuest2').setAttribute('aria-disabled', 'true');
            document.querySelector('#lidaDinheiroSimSpan2').setAttribute('aria-disabled', 'true');
            document.querySelector('#lidaDinheiroNaoSpan2').setAttribute('aria-disabled', 'true');
        }

        if (naolidaDinheiro.checked) {
            document.querySelector('#simQuest3Dinheiro').disabled = false;
            document.querySelector('#naoQuest3Dinheiro').disabled = false;
            document.querySelector('#lidaDinheiroQuest3').setAttribute('aria-disabled', 'false');
            document.querySelector('#lidaDinheiroSimSpan3').setAttribute('aria-disabled', 'false');
            document.querySelector('#lidaDinheiroNaoSpan3').setAttribute('aria-disabled', 'false');
        } else {
            document.querySelector('#simQuest3Dinheiro').disabled = true;
            document.querySelector('#naoQuest3Dinheiro').disabled = true;
            document.querySelector('#lidaDinheiroQuest3').setAttribute('aria-disabled', 'true');
            document.querySelector('#lidaDinheiroSimSpan3').setAttribute('aria-disabled', 'true');
            document.querySelector('#lidaDinheiroNaoSpan3').setAttribute('aria-disabled', 'true');
        }


        if (fazerComprasSim.checked) {
            document.querySelector('#simQuest2Compras').disabled = false;
            document.querySelector('#naoQuest2Compras').disabled = false;
            document.querySelector('#fazerComprasQuest2').setAttribute('aria-disabled', 'false');
            document.querySelector('#fazerComprasSimSpan2').setAttribute('aria-disabled', 'false');
            document.querySelector('#fazerComprasNaoSpan2').setAttribute('aria-disabled', 'false');
        } else {
            document.querySelector('#simQuest2Compras').disabled = true;
            document.querySelector('#naoQuest2Compras').disabled = true;
            document.querySelector('#fazerComprasQuest2').setAttribute('aria-disabled', 'true');
            document.querySelector('#fazerComprasSimSpan2').setAttribute('aria-disabled', 'true');
            document.querySelector('#fazerComprasNaoSpan2').setAttribute('aria-disabled', 'true');
        }

        if (fazerComprasNaoFaco.checked) {
            document.querySelector('#simQuest3Compras').disabled = false;
            document.querySelector('#naoQuest3Compras').disabled = false;
            document.querySelector('#fazerComprasQuest3').setAttribute('aria-disabled', 'false');
            document.querySelector('#fazerComprasSimSpan3').setAttribute('aria-disabled', 'false');
            document.querySelector('#fazerComprasNaoSpan3').setAttribute('aria-disabled', 'false');
        } else {
            document.querySelector('#simQuest3Compras').disabled = true;
            document.querySelector('#naoQuest3Compras').disabled = true;
            document.querySelector('#fazerComprasQuest3').setAttribute('aria-disabled', 'true');
            document.querySelector('#fazerComprasSimSpan3').setAttribute('aria-disabled', 'true');
            document.querySelector('#fazerComprasNaoSpan3').setAttribute('aria-disabled', 'true');
        }

        if (Nodulo.checked) {
            document.querySelector('#localNodulo').disabled = false;
        } else {
            document.querySelector('#localNodulo').disabled = true;
        }

        if (MVReduzido.checked) {
            document.querySelector('#localMVReduzido').disabled = false;
        } else {
            document.querySelector('#localMVReduzido').disabled = true;
        }

        if (MVAbolido.checked) {
            document.querySelector('#localMVAbolido').disabled = false;
        } else {
            document.querySelector('#localMVAbolido').disabled = true;
        }

        if (Crepitacoes.checked) {
            document.querySelector('#localCrepitacoes').disabled = false;
        } else {
            document.querySelector('#localCrepitacoes').disabled = true;
        }

        if (Sibilos.checked) {
            document.querySelector('#localSibilos').disabled = false;
        } else {
            document.querySelector('#localSibilos').disabled = true;
        }

        if (Roncos.checked) {
            document.querySelector('#localRoncos').disabled = false;
        } else {
            document.querySelector('#localRoncos').disabled = true;
        }

        if (Estertores.checked) {
            document.querySelector('#localEstertores').disabled = false;
        } else {
            document.querySelector('#localEstertores').disabled = true;
        }

        if (AtritoPleural.checked) {
            document.querySelector('#localAtritoPleural').disabled = false;
        } else {
            document.querySelector('#localAtritoPleural').disabled = true;
        }

        if (Edema.checked) {
            document.querySelector('#localEdema').disabled = false;
            document.querySelector('#edemaqtd1').disabled = false;
            document.querySelector('#edemaqtd2').disabled = false;
            document.querySelector('#edemaqtd3').disabled = false;
            document.querySelector('#edemaqtd4').disabled = false;
        } else {
            document.querySelector('#localEdema').disabled = true;
            document.querySelector('#edemaqtd1').disabled = true;
            document.querySelector('#edemaqtd2').disabled = true;
            document.querySelector('#edemaqtd3').disabled = true;
            document.querySelector('#edemaqtd4').disabled = true;
        }

        if (DescargaPapilar.checked) {
            document.querySelector('#localDescargaPapilar').disabled = false;
        } else {
            document.querySelector('#localDescargaPapilar').disabled = true;
        }

        if (CorrimentoVaginal.checked) {
            document.querySelector('#aspectoCorrimentoVaginal').disabled = false;
        } else {
            document.querySelector('#aspectoCorrimentoVaginal').disabled = true;
        }

        if (OutraQueixa.checked) {
            document.querySelector('#descricaoOutraQueixa').disabled = false;
        } else {
            document.querySelector('#descricaoOutraQueixa').disabled = true;
        }

        if (LiquidoIntrabdominal.checked) {
            document.querySelector('#localLiquidoIntrabdominal').disabled = false;
        } else {
            document.querySelector('#localLiquidoIntrabdominal').disabled = true;
        }

        if (MassaIntrabdominal.checked) {
            document.querySelector('#localMassaIntrabdominal').disabled = false;
        } else {
            document.querySelector('#localMassaIntrabdominal').disabled = true;
        }

        if (DorPP.checked) {
            document.querySelector('#localDorPP').disabled = false;
        } else {
            document.querySelector('#localDorPP').disabled = true;
        }

        if (DorPF.checked) {
            document.querySelector('#localDorPF').disabled = false;
        } else {
            document.querySelector('#localDorPF').disabled = true;
        }

        if (Escoriacao.checked) {
            document.querySelector('#descricaoEscoriacao').disabled = false;
        } else {
            document.querySelector('#descricaoEscoriacao').disabled = true;
        }

        if (Macula.checked) {
            document.querySelector('#descricaoMacula').disabled = false;
        } else {
            document.querySelector('#descricaoMacula').disabled = true;
        }

        if (Papula.checked) {
            document.querySelector('#descricaoPapula').disabled = false;
        } else {
            document.querySelector('#descricaoPapula').disabled = true;
        }

        if (Pustula.checked) {
            document.querySelector('#descricaoPustula').disabled = false;
        } else {
            document.querySelector('#descricaoPustula').disabled = true;
        }

        if (Vesicula.checked) {
            document.querySelector('#descricaoVesicula').disabled = false;
        } else {
            document.querySelector('#descricaoVesicula').disabled = true;
        }

        if (Erupcao.checked) {
            document.querySelector('#descricaoErupcao').disabled = false;
        } else {
            document.querySelector('#descricaoErupcao').disabled = true;
        }

        if (Cisto.checked) {
            document.querySelector('#descricaoCisto').disabled = false;
        } else {
            document.querySelector('#descricaoCisto').disabled = true;
        }

        if (Tumor.checked) {
            document.querySelector('#descricaoTumor').disabled = false;
        } else {
            document.querySelector('#descricaoTumor').disabled = true;
        }

        if (Descamacao.checked) {
            document.querySelector('#descricaoDescamacao').disabled = false;
        } else {
            document.querySelector('#descricaoDescamacao').disabled = true;
        }

        if (Cicatriz.checked) {
            document.querySelector('#descricaoCicatriz').disabled = false;
        } else {
            document.querySelector('#descricaoCicatriz').disabled = true;
        }

        if (Fissura.checked) {
            document.querySelector('#descricaoFissura').disabled = false;
        } else {
            document.querySelector('#descricaoFissura').disabled = true;
        }

        if (Ulcera.checked) {
            document.querySelector('#descricaoUlcera').disabled = false;
        } else {
            document.querySelector('#descricaoUlcera').disabled = true;
        }

        if (LesaoPressao.checked) {
            document.querySelector('#descricaoLesaoPressao').disabled = false;
        } else {
            document.querySelector('#descricaoLesaoPressao').disabled = true;
        }

        if (PurpuraSenil.checked) {
            document.querySelector('#descricaoPurpuraSenil').disabled = false;
        } else {
            document.querySelector('#descricaoPurpuraSenil').disabled = true;
        }

        if (Hemangioma.checked) {
            document.querySelector('#descricaoHemangioma').disabled = false;
        } else {
            document.querySelector('#descricaoHemangioma').disabled = true;
        }

        if (Spider.checked) {
            document.querySelector('#descricaoSpider').disabled = false;
        } else {
            document.querySelector('#descricaoSpider').disabled = true;
        }

        if (Dor.checked) {
            document.querySelector('#descricaoDor').disabled = false;
        } else {
            document.querySelector('#descricaoDor').disabled = true;
        }

    }
</script>
<script>
    $(document).ready(function() {
        $('#myTab a[href="#{{ old('
           , tab,') }}"]').tab('show');
    });
</script>


@endsection