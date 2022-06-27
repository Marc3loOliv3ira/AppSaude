@extends('layouts.main')

@section('title', 'Sugestões Terapêuticas')

@section('content')

<div id="pacients-conteiner" class="col-md-6 offset-md-3">
    <h1>Sugestões terapêuticas</h1>
    <p class="subtitle">Preencha abaixo as sugestões terapêuticas</p>

    <form action="/sugestaoTerapeutica" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="paciente_id" id="paciente_id" value="{{$formulario->paciente_id}}" class="form-control">
        <input type="hidden" name="form_id" id="form_id" value="{{$formulario->id}}" class="form-control">

        @foreach($examePsicossocial as $examePsicossocial)
        @if($examePsicossocial->id == $formulario->id)
        @if($examePsicossocial->comprometimentoCognitivo == 'Presença de compromentimento cognitivo')
        <div class="form-group">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Cognição</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="8">Compromentimento Cognitivo:</th>
                        <td>
                            <input type="checkbox" name="comprometimento_cognitivo[]" value="Encaminhar para atenção especializada">
                            <span>Encaminhar para atenção especializada</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="comprometimento_cognitivo[]" value="Estimular adesão a exercícios físicos">
                            <span>Estimular adesão a exercícios físicos</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="comprometimento_cognitivo[]" value="Estimular atividades significativas de vida diária, de forma independente e com auxílio se necessário">
                            <span>Estimular atividades significativas de vida diária, de forma independente e com auxílio se necessário</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="comprometimento_cognitivo[]" value="Incentivar adesão a exercícios de estímulo cognitivo (jogos de palavras, quebra-cabeças, música, culinária, jardinagem e discussão de eventos passados ​​e presentes)">
                            <span>Incentivar adesão a exercícios de estímulo cognitivo (jogos de palavras, quebra-cabeças, música, culinária, jardinagem e discussão de eventos passados ​​e presentes) </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="comprometimento_cognitivo[]" value="Incentivar atividades com música e dança">
                            <span>Incentivar atividades com música e dança</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="comprometimento_cognitivo[]" value="Estimular a memória com fotografias, figuras, músicas, história da cidade e da vida">
                            <span>Estimular a memória com fotografias, figuras, músicas, história da cidade e da vida </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="comprometimento_cognitivo[]" value="Estimular orientação no tempo através de calendários e datas comemorativas">
                            <span>Estimular orientação no tempo através de calendários e datas comemorativas</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="comprometimento_cognitivo[]" value="Orientar ao cuidador medidas de segurança, como manter objetos que possam oferecer perigo longe do idoso, janelas trancadas e chaves guardadas">
                            <span>Orientar ao cuidador medidas de segurança, como manter objetos que possam oferecer perigo longe do idoso, janelas trancadas e chaves guardadas</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($examePsicossocial->classificacaoHumor == 'Presença de sintomatologia depressiva')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Humor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="8">Suspeita de depressão:</th>
                        <td>
                            <input type="checkbox" name="suspeita_depressao[]" value="Encaminhar para atenção especializada">
                            <span>Encaminhar para atenção especializada</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="suspeita_depressao[]" value="Estimular realização de atividades prazerosas que favoreçam a distração">
                            <span>Estimular realização de atividades prazerosas que favoreçam a distração</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="suspeita_depressao[]" value="Incentivar relacionamento saudável entre família e amigos">
                            <span>Incentivar relacionamento saudável entre família e amigos</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="suspeita_depressao[]" value="Incentivar adesão ao tratamento medicamentoso e psicoterápico, se necessário">
                            <span>Incentivar adesão ao tratamento medicamentoso e psicoterápico, se necessário</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="suspeita_depressao[]" value="Apoiar práticas espirituais e religiosas">
                            <span>Apoiar práticas espirituais e religiosas</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="suspeita_depressao[]" value="Promover participação do idoso em atividades de lazer e recreação">
                            <span>Promover participação do idoso em atividades de lazer e recreação</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="suspeita_depressao[]" value="Ajudar o idoso a identificar pontos importantes e vantagens pessoais">
                            <span>Ajudar o idoso a identificar pontos importantes e vantagens pessoais</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="suspeita_depressao[]" value="Proporcionar ambiente de acolhimento com empatia, escuta ativa, incentivo à verbalização e expressão de sentimentos">
                            <span>Proporcionar ambiente de acolhimento com empatia, escuta ativa, incentivo à verbalização e expressão de sentimentos</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($examePsicossocial->sinaisViolenciaDomestica == 'sim')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Social</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="8">Suspeita de violência doméstica:</th>
                        <td>
                            <input type="checkbox" name="violencia_domestica[]" value="Comunicar às autoridades de segurança e órgãos para denúncia (Disque 100 - “Módulo Idoso do Disque Direitos Humanos” ou Delegacia do Idoso)">
                            <span>Comunicar às autoridades de segurança e órgãos para denúncia (Disque 100 - “Módulo Idoso do Disque Direitos Humanos” ou Delegacia do Idoso)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="violencia_domestica[]" value="Preencher ficha de notificação à Vigilância Sanitária do Município">
                            <span>Preencher ficha de notificação à Vigilância Sanitária do Município</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="violencia_domestica[]" value="Encaminhamento para serviço especializado da Política de Assistência Social, delegacia especializada ou CAPS em caso de saúde mental">
                            <span>Encaminhamento para serviço especializado da Política de Assistência Social, delegacia especializada ou CAPS em caso de saúde mental</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="violencia_domestica[]" value="Solicitar hospitalização ou institucionalização temporária">
                            <span>Solicitar hospitalização ou institucionalização temporária</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="violencia_domestica[]" value="Solicitar suporte de equipe multiprofissional e interdisciplinar">
                            <span>Solicitar suporte de equipe multiprofissional e interdisciplinar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="violencia_domestica[]" value="Estabelecer acolhimento e acompanhamento do caso">
                            <span>Estabelecer acolhimento e acompanhamento do caso</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="violencia_domestica[]" value="Oferecer espaço para escuta do sofrimento">
                            <span>Oferecer espaço para escuta do sofrimento</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif
        @endif
        @endforeach

        @foreach($exameFuncional as $exameFuncional)
        @if($exameFuncional->id == $formulario->id)
        @if($exameFuncional->ptTotalAVD != 0)
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Atividades de Vida Diária (AVD)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Dependência para uma ou mais funções:</th>
                        <td>
                            <input type="checkbox" name="dependencia_uma_ou_mais_funcoes[]" value="Orientar movimentação frequente de membros inferiores para prevenção de trombose">
                            <span>Orientar movimentação frequente de membros inferiores para prevenção de trombose</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_uma_ou_mais_funcoes[]" value="Suspender “drogas fúteis” ou contraindicadas para idosos">
                            <span>Suspender “drogas fúteis” ou contraindicadas para idosos</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_uma_ou_mais_funcoes[]" value="Orientar medidas de prevenção de pneumonia">
                            <span>Orientar medidas de prevenção de pneumonia</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_uma_ou_mais_funcoes[]" value="Orientar banho de sol três vezes por semana no horário de 10 às 15h por 15 minutos com protetor solar">
                            <span>Orientar banho de sol três vezes por semana no horário de 10 às 15h por 15 minutos com protetor solar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_uma_ou_mais_funcoes[]" value=" Orientar medidas de prevenção de lesão por pressão">
                            <span> Orientar medidas de prevenção de lesão por pressão</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_uma_ou_mais_funcoes[]" value="Estimular hidratação da pele com cremes ou loções sem fragrância">
                            <span>Estimular hidratação da pele com cremes ou loções sem fragrância</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_uma_ou_mais_funcoes[]" value="Estimular a execução das atividades de forma autônoma e orientar oferecimento de auxílio quando necessário">
                            <span>Estimular a execução das atividades de forma autônoma e orientar oferecimento de auxílio quando necessário</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_uma_ou_mais_funcoes[]" value="Dispensar atenção ao cuidador">
                            <span>Dispensar atenção ao cuidador</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_uma_ou_mais_funcoes[]" value="Incentivar hábitos de higiene">
                            <span>Incentivar hábitos de higiene</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_uma_ou_mais_funcoes[]" value="Orientar medidas de controle da dor">
                            <span>Orientar medidas de controle da dor</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_uma_ou_mais_funcoes[]" value="Estabelecer comunicação de forma clara, paciente e compreensiva para o idoso">
                            <span>Estabelecer comunicação de forma clara, paciente e compreensiva para o idoso</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_uma_ou_mais_funcoes[]" value="Prestar apoio à família e ao cuidador">
                            <span>Prestar apoio à família e ao cuidador</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($exameFuncional->interpretacaoAIVD == 'Dependência parcial')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Atividades Instrumentais da Vida Diária (AIVD)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Dependência parcial</th>
                        <td>
                            <input type="checkbox" name="dependencia_parcial[]" value="Orientar movimentação frequente de membros inferiores para prevenção de trombose">
                            <span>Orientar movimentação frequente de membros inferiores para prevenção de trombose</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_parcial[]" value="Suspender “drogas fúteis” ou contraindicadas para idosos">
                            <span>Suspender “drogas fúteis” ou contraindicadas para idosos</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_parcial[]" value="Orientar medidas de prevenção de pneumonia">
                            <span>Orientar medidas de prevenção de pneumonia</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_parcial[]" value="Orientar banho de sol três vezes por semana no horário de 10 às 15h por 15 minutos com protetor solar">
                            <span>Orientar banho de sol três vezes por semana no horário de 10 às 15h por 15 minutos com protetor solar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_parcial[]" value=" Orientar medidas de prevenção de lesão por pressão">
                            <span> Orientar medidas de prevenção de lesão por pressão</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_parcial[]" value="Estimular hidratação da pele com cremes ou loções sem fragrância">
                            <span>Estimular hidratação da pele com cremes ou loções sem fragrância</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_parcial[]" value="Estimular a execução das atividades de forma autônoma e orientar oferecimento de auxílio quando necessário">
                            <span>Estimular a execução das atividades de forma autônoma e orientar oferecimento de auxílio quando necessário</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_parcial[]" value="Dispensar atenção ao cuidador">
                            <span>Dispensar atenção ao cuidador</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_parcial[]" value="Incentivar hábitos de higiene">
                            <span>Incentivar hábitos de higiene</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_parcial[]" value="Orientar medidas de controle da dor">
                            <span>Orientar medidas de controle da dor</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_parcial[]" value="Estabelecer comunicação de forma clara, paciente e compreensiva para o idoso">
                            <span>Estabelecer comunicação de forma clara, paciente e compreensiva para o idoso</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_parcial[]" value="Prestar apoio à família e ao cuidador">
                            <span>Prestar apoio à família e ao cuidador</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($exameFuncional->interpretacaoAIVD == 'Dependência total')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Atividades Instrumentais da Vida Diária (AIVD)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Dependência total</th>
                        <td>
                            <input type="checkbox" name="dependencia_total[]" value="Orientar movimentação frequente de membros inferiores para prevenção de trombose">
                            <span>Orientar movimentação frequente de membros inferiores para prevenção de trombose</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_total[]" value="Suspender “drogas fúteis” ou contraindicadas para idosos">
                            <span>Suspender “drogas fúteis” ou contraindicadas para idosos</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_total[]" value="Orientar medidas de prevenção de pneumonia">
                            <span>Orientar medidas de prevenção de pneumonia</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_total[]" value="Orientar banho de sol três vezes por semana no horário de 10 às 15h por 15 minutos com protetor solar">
                            <span>Orientar banho de sol três vezes por semana no horário de 10 às 15h por 15 minutos com protetor solar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_total[]" value=" Orientar medidas de prevenção de lesão por pressão">
                            <span> Orientar medidas de prevenção de lesão por pressão</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_total[]" value="Estimular hidratação da pele com cremes ou loções sem fragrância">
                            <span>Estimular hidratação da pele com cremes ou loções sem fragrância</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_total[]" value="Estimular a execução das atividades de forma autônoma e orientar oferecimento de auxílio quando necessário">
                            <span>Estimular a execução das atividades de forma autônoma e orientar oferecimento de auxílio quando necessário</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_total[]" value="Dispensar atenção ao cuidador">
                            <span>Dispensar atenção ao cuidador</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_total[]" value="Incentivar hábitos de higiene">
                            <span>Incentivar hábitos de higiene</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_total[]" value="Orientar medidas de controle da dor">
                            <span>Orientar medidas de controle da dor</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_total[]" value="Estabelecer comunicação de forma clara, paciente e compreensiva para o idoso">
                            <span>Estabelecer comunicação de forma clara, paciente e compreensiva para o idoso</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="dependencia_total[]" value="Prestar apoio à família e ao cuidador">
                            <span>Prestar apoio à família e ao cuidador</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($exameFuncional->estratificacaoVES == 'Idoso em risco de fragilização - risco médio')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Rastreio da vulnerabilidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Idoso em risco de fragilização</th>
                        <td>
                            <input type="checkbox" name="idoso_risco_fragilizacao[]" value="Orientar movimentação frequente de membros inferiores para prevenção de trombose">
                            <span>Orientar movimentação frequente de membros inferiores para prevenção de trombose</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_risco_fragilizacao[]" value="Suspender “drogas fúteis” ou contraindicadas para idosos">
                            <span>Suspender “drogas fúteis” ou contraindicadas para idosos</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_risco_fragilizacao[]" value="Orientar medidas de prevenção de pneumonia">
                            <span>Orientar medidas de prevenção de pneumonia</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_risco_fragilizacao[]" value="Orientar banho de sol três vezes por semana no horário de 10 às 15h por 15 minutos com protetor solar">
                            <span>Orientar banho de sol três vezes por semana no horário de 10 às 15h por 15 minutos com protetor solar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_risco_fragilizacao[]" value=" Orientar medidas de prevenção de lesão por pressão">
                            <span> Orientar medidas de prevenção de lesão por pressão</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_risco_fragilizacao[]" value="Estimular hidratação da pele com cremes ou loções sem fragrância">
                            <span>Estimular hidratação da pele com cremes ou loções sem fragrância</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_risco_fragilizacao[]" value="Estimular a execução das atividades de forma autônoma e orientar oferecimento de auxílio quando necessário">
                            <span>Estimular a execução das atividades de forma autônoma e orientar oferecimento de auxílio quando necessário</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_risco_fragilizacao[]" value="Dispensar atenção ao cuidador">
                            <span>Dispensar atenção ao cuidador</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_risco_fragilizacao[]" value="Incentivar hábitos de higiene">
                            <span>Incentivar hábitos de higiene</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_risco_fragilizacao[]" value="Orientar medidas de controle da dor">
                            <span>Orientar medidas de controle da dor</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_risco_fragilizacao[]" value="Estabelecer comunicação de forma clara, paciente e compreensiva para o idoso">
                            <span>Estabelecer comunicação de forma clara, paciente e compreensiva para o idoso</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_risco_fragilizacao[]" value="Prestar apoio à família e ao cuidador">
                            <span>Prestar apoio à família e ao cuidador</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($exameFuncional->estratificacaoVES == 'Idoso frágil - risco alto')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Rastreio da vulnerabilidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Idoso frágil</th>
                        <td>
                            <input type="checkbox" name="idoso_fragil[]" value="Orientar movimentação frequente de membros inferiores para prevenção de trombose">
                            <span>Orientar movimentação frequente de membros inferiores para prevenção de trombose</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_fragil[]" value="Suspender “drogas fúteis” ou contraindicadas para idosos">
                            <span>Suspender “drogas fúteis” ou contraindicadas para idosos</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_fragil[]" value="Orientar medidas de prevenção de pneumonia">
                            <span>Orientar medidas de prevenção de pneumonia</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_fragil[]" value="Orientar banho de sol três vezes por semana no horário de 10 às 15h por 15 minutos com protetor solar">
                            <span>Orientar banho de sol três vezes por semana no horário de 10 às 15h por 15 minutos com protetor solar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_fragil[]" value=" Orientar medidas de prevenção de lesão por pressão">
                            <span> Orientar medidas de prevenção de lesão por pressão</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_fragil[]" value="Estimular hidratação da pele com cremes ou loções sem fragrância">
                            <span>Estimular hidratação da pele com cremes ou loções sem fragrância</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_fragil[]" value="Estimular a execução das atividades de forma autônoma e orientar oferecimento de auxílio quando necessário">
                            <span>Estimular a execução das atividades de forma autônoma e orientar oferecimento de auxílio quando necessário</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_fragil[]" value="Dispensar atenção ao cuidador">
                            <span>Dispensar atenção ao cuidador</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_fragil[]" value="Incentivar hábitos de higiene">
                            <span>Incentivar hábitos de higiene</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_fragil[]" value="Orientar medidas de controle da dor">
                            <span>Orientar medidas de controle da dor</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_fragil[]" value="Estabelecer comunicação de forma clara, paciente e compreensiva para o idoso">
                            <span>Estabelecer comunicação de forma clara, paciente e compreensiva para o idoso</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="idoso_fragil[]" value="Prestar apoio à família e ao cuidador">
                            <span>Prestar apoio à família e ao cuidador</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($exameFuncional->av_mobilidade == 'risco de quedas moderado')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Risco de queda relacionado à mobilidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Risco de quedas moderado</th>
                        <td>
                            <input type="checkbox" name="risco_quedas_moderado[]" value="Verificar acuidade auditiva e visual">
                            <span>Verificar acuidade auditiva e visual</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="risco_quedas_moderado[]" value="Estimular adesão a exercícios físicos (mínimo 30 minutos por dia por 5 dias na semana)">
                            <span>Estimular adesão a exercícios físicos (mínimo 30 minutos por dia por 5 dias na semana)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="risco_quedas_moderado[]" value="Desencorajar o uso de sapatos de salto, com solas escorregadias ou que não se encaixam bem nos pés">
                            <span>Desencorajar o uso de sapatos de salto, com solas escorregadias ou que não se encaixam bem nos pés</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="risco_quedas_moderado[]" value="Orientar cuidados com os pés (unhas cortadas e calos tratados)">
                            <span>Orientar cuidados com os pés (unhas cortadas e calos tratados)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="risco_quedas_moderado[]" value="Orientar uso de dispositivos auxiliadores de marcha">
                            <span>Orientar uso de dispositivos auxiliadores de marcha</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="risco_quedas_moderado[]" value="Encorajar criação de lista telefônica acessível com números de contato em caso de emergência">
                            <span>Encorajar criação de lista telefônica acessível com números de contato em caso de emergência</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="risco_quedas_moderado[]" value="Aconselhar a locomoção sempre com cuidado e devagar">
                            <span>Aconselhar a locomoção sempre com cuidado e devagar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="risco_quedas_moderado[]" value="Orientar sentar-se na cama antes de levantar para prevenir hipotensão ortostática">
                            <span>Orientar sentar-se na cama antes de levantar para prevenir hipotensão ortostática</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($exameFuncional->av_mobilidade == 'baixo risco de quedas')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Risco de queda relacionado à mobilidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Baixo risco de quedas</th>
                        <td>
                            <input type="checkbox" name="baixo_risco_quedas[]" value="Verificar acuidade auditiva e visual">
                            <span>Verificar acuidade auditiva e visual</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_risco_quedas[]" value="Estimular adesão a exercícios físicos (mínimo 30 minutos por dia por 5 dias na semana)">
                            <span>Estimular adesão a exercícios físicos (mínimo 30 minutos por dia por 5 dias na semana)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_risco_quedas[]" value="Desencorajar o uso de sapatos de salto, com solas escorregadias ou que não se encaixam bem nos pés">
                            <span>Desencorajar o uso de sapatos de salto, com solas escorregadias ou que não se encaixam bem nos pés</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_risco_quedas[]" value="Orientar cuidados com os pés (unhas cortadas e calos tratados)">
                            <span>Orientar cuidados com os pés (unhas cortadas e calos tratados)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_risco_quedas[]" value="Orientar uso de dispositivos auxiliadores de marcha">
                            <span>Orientar uso de dispositivos auxiliadores de marcha</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_risco_quedas[]" value="Encorajar criação de lista telefônica acessível com números de contato em caso de emergência">
                            <span>Encorajar criação de lista telefônica acessível com números de contato em caso de emergência</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_risco_quedas[]" value="Aconselhar a locomoção sempre com cuidado e devagar">
                            <span>Aconselhar a locomoção sempre com cuidado e devagar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_risco_quedas[]" value="Orientar sentar-se na cama antes de levantar para prevenir hipotensão ortostática">
                            <span>Orientar sentar-se na cama antes de levantar para prevenir hipotensão ortostática</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($exameFuncional->av_mobilidade == 'alto risco para quedas')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Risco de queda relacionado à mobilidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Alto risco para quedas</th>
                        <td>
                            <input type="checkbox" name="alto_risco_quedas[]" value="Verificar acuidade auditiva e visual">
                            <span>Verificar acuidade auditiva e visual</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="alto_risco_quedas[]" value="Estimular adesão a exercícios físicos (mínimo 30 minutos por dia por 5 dias na semana)">
                            <span>Estimular adesão a exercícios físicos (mínimo 30 minutos por dia por 5 dias na semana)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="alto_risco_quedas[]" value="Desencorajar o uso de sapatos de salto, com solas escorregadias ou que não se encaixam bem nos pés">
                            <span>Desencorajar o uso de sapatos de salto, com solas escorregadias ou que não se encaixam bem nos pés</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="alto_risco_quedas[]" value="Orientar cuidados com os pés (unhas cortadas e calos tratados)">
                            <span>Orientar cuidados com os pés (unhas cortadas e calos tratados)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="alto_risco_quedas[]" value="Orientar uso de dispositivos auxiliadores de marcha">
                            <span>Orientar uso de dispositivos auxiliadores de marcha</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="alto_risco_quedas[]" value="Encorajar criação de lista telefônica acessível com números de contato em caso de emergência">
                            <span>Encorajar criação de lista telefônica acessível com números de contato em caso de emergência</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="alto_risco_quedas[]" value="Aconselhar a locomoção sempre com cuidado e devagar">
                            <span>Aconselhar a locomoção sempre com cuidado e devagar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="alto_risco_quedas[]" value="Orientar sentar-se na cama antes de levantar para prevenir hipotensão ortostática">
                            <span>Orientar sentar-se na cama antes de levantar para prevenir hipotensão ortostática</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($exameFuncional->ambienteSemSeguranca == 'Ambiente sem segurança')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Risco de queda relacionado à avaliação ambiental</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Ambiente sem segurança</th>
                        <td>
                            <input type="checkbox" name="ambiente_sem_seguranca[]" value="Retirar objetos/obstáculos da área de locomoção que impedem a passagem">
                            <span>Retirar objetos/obstáculos da área de locomoção que impedem a passagem</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="ambiente_sem_seguranca[]" value="Instalação de barras de apoio em corredores e banheiros, se possível">
                            <span>Instalação de barras de apoio em corredores e banheiros, se possível</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="ambiente_sem_seguranca[]" value="Retirada ou fixação de tapetes no chão">
                            <span>Retirada ou fixação de tapetes no chão</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="ambiente_sem_seguranca[]" value="Uniformizar pisos">
                            <span>Uniformizar pisos</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="ambiente_sem_seguranca[]" value="Iluminação suficiente para clarear os cômodos">
                            <span>Iluminação suficiente para clarear os cômodos</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="ambiente_sem_seguranca[]" value="Instalação de antiderrapante na área do chuveiro e áreas de locomoção, se possível">
                            <span>Instalação de antiderrapante na área do chuveiro e áreas de locomoção, se possível</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="ambiente_sem_seguranca[]" value="Fixação de cortina no banheiro">
                            <span>Fixação de cortina no banheiro</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="ambiente_sem_seguranca[]" value="Instalação de armários baixos, sem necessidade de escadas">
                            <span>Instalação de armários baixos, sem necessidade de escadas</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($exameFuncional->hiperssonia == 'sim')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Sono</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Hipersonia</th>
                        <td>
                            <input type="checkbox" name="hipersonia[]" value="Identificar as causas da sonolência excessiva">
                            <span>Identificar as causas da sonolência excessiva</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="hipersonia[]" value="Orientar o estabelecimento de horários e rotinas regulares para deitar e acordar">
                            <span>Orientar o estabelecimento de horários e rotinas regulares para deitar e acordar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="hipersonia[]" value="Orientar a manter o mínimo de cochilos ao longo do dia com duração de 10 a 15 minutos">
                            <span>Orientar a manter o mínimo de cochilos ao longo do dia com duração de 10 a 15 minutos</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="hipersonia[]" value="Desincentivar a permanência na cama ao acordar">
                            <span>Desincentivar a permanência na cama ao acordar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="hipersonia[]" value="Orientar a dormir o número de horas suficientes para um bom descanso">
                            <span>Orientar a dormir o número de horas suficientes para um bom descanso</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="hipersonia[]" value="Estimular a adesão ao tratamento medicamentoso prescrito, na posologia adequada">
                            <span>Estimular a adesão ao tratamento medicamentoso prescrito, na posologia adequada</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="hipersonia[]" value="Orientar exposição à luz do dia">
                            <span>Orientar exposição à luz do dia</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($exameFuncional->insonia == 'sim')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Sono</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Insônia</th>
                        <td>
                            <input type="checkbox" name="insonia[]" value="Orientar o estabelecimento de horários rígidos para deitar e acordar">
                            <span>Orientar o estabelecimento de horários rígidos para deitar e acordar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="insonia[]" value="Identificar as causas de insônia">
                            <span>Identificar as causas de insônia</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="insonia[]" value="Estimular a adesão ao tratamento medicamentoso prescrito, na posologia adequada">
                            <span>Estimular a adesão ao tratamento medicamentoso prescrito, na posologia adequada</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="insonia[]" value="Orientar uso da cama somente para dormir e para atividade sexual">
                            <span>Orientar uso da cama somente para dormir e para atividade sexual</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="insonia[]" value="Orientar evitar refeições pesadas, cigarro, bebidas com cafeína e exercícios físicos vigorosos antes de deitar">
                            <span>Orientar evitar refeições pesadas, cigarro, bebidas com cafeína e exercícios físicos vigorosos antes de deitar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="insonia[]" value="Incentivar diminuição da ingesta hídrica antes de deitar">
                            <span>Incentivar diminuição da ingesta hídrica antes de deitar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="insonia[]" value="Instruir adequação da iluminação (indireta e de baixa intensidade), nível baixo de ruído e temperatura confortável do quarto para facilitar o sono">
                            <span>Instruir adequação da iluminação (indireta e de baixa intensidade), nível baixo de ruído e temperatura confortável do quarto para facilitar o sono</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="insonia[]" value="Incentivar leitura ou ouvir música para induzir o sono">
                            <span>Incentivar leitura ou ouvir música para induzir o sono</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="insonia[]" value="Estimular execução de rituais de dormir como preparo da cama, roupa adequada, banho morno, esvaziamento da bexiga, orações ou meditação">
                            <span>Estimular execução de rituais de dormir como preparo da cama, roupa adequada, banho morno, esvaziamento da bexiga, orações ou meditação</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="insonia[]" value="Orientar aquecimento de pés e mãos antes de dormir">
                            <span>Orientar aquecimento de pés e mãos antes de dormir</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="insonia[]" value="Orientar manutenção do quarto limpo e arejado">
                            <span>Orientar manutenção do quarto limpo e arejado</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="insonia[]" value="Orientar o idoso a caso não adormecer em 20 minutos, levantar-se, ir para outro cômodo e permanecer até sentir vontade de dormir novamente">
                            <span>Orientar o idoso a caso não adormecer em 20 minutos, levantar-se, ir para outro cômodo e permanecer até sentir vontade de dormir novamente</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($exameFuncional->parassonia == 'sim')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Sono</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Parassonia</th>
                        <td>
                            <input type="checkbox" name="parassonia[]" value="Estimular a adesão ao tratamento medicamentoso prescrito, na posologia adequada">
                            <span>Estimular a adesão ao tratamento medicamentoso prescrito, na posologia adequada</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="parassonia[]" value="Orientar exposição à luz do dia">
                            <span>Orientar exposição à luz do dia</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="parassonia[]" value="Orientar promoção da segurança do quarto, para prevenção do risco de quedas">
                            <span>Orientar promoção da segurança do quarto, para prevenção do risco de quedas</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="parassonia[]" value="Incentivar a restrição do sono diurno">
                            <span>Incentivar a restrição do sono diurno</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($exameFuncional->classificacaoNutricional == 'Baixo peso')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Nutrição</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Baixo peso</th>
                        <td>
                            <input type="checkbox" name="baixo_peso[]" value="Investigar as causas da prevalência de baixo peso">
                            <span>Investigar as causas da prevalência de baixo peso</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_peso[]" value="Monitorar as tendências de ganho e perda de peso">
                            <span>Monitorar as tendências de ganho e perda de peso</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_peso[]" value="Encaminhar para atenção especializada/nutricionista">
                            <span>Encaminhar para atenção especializada/nutricionista</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_peso[]" value="Incentivar ambiente relaxante e agradável para as refeições">
                            <span>Incentivar ambiente relaxante e agradável para as refeições</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_peso[]" value="Encorajar o aumento da ingesta calórica">
                            <span>Encorajar o aumento da ingesta calórica</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_peso[]" value="Determinar preferências alimentares do idoso e adequá-las ao dia-a-dia">
                            <span>Determinar preferências alimentares do idoso e adequá-las ao dia-a-dia</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_peso[]" value="Sensibilizar o idoso sobre atenção às necessidades nutricionais">
                            <span>Sensibilizar o idoso sobre atenção às necessidades nutricionais</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_peso[]" value="Orientar o respeito à regularidade de horários das refeições, sendo indispensáveis o desjejum, o almoço, o lanche e o jantar, e não pular as refeições">
                            <span>Orientar o respeito à regularidade de horários das refeições, sendo indispensáveis o desjejum, o almoço, o lanche e o jantar, e não pular as refeições</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_peso[]" value="Incentivar o consumo de alimentos ricos em fibras, como frutas (três porções ou mais por dia), legumes e verduras (pelo menos três porções) e cereais integrais">
                            <span>Incentivar o consumo de alimentos ricos em fibras, como frutas (três porções ou mais por dia), legumes e verduras (pelo menos três porções) e cereais integrais</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_peso[]" value="Incentivar ingestão hídrica (em média de 6 a 8 copos de água ou outros líquidos por dia)">
                            <span>Incentivar ingestão hídrica (em média de 6 a 8 copos de água ou outros líquidos por dia)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_peso[]" value="Estimular adesão a atividade física (30 min por dia)">
                            <span>Estimular adesão a atividade física (30 min por dia)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="baixo_peso[]" value="Desencorajar o consumo de sal, açúcar, doces, alimentos gordurosos, alimentos e temperos industrializados, ingestão de bebidas adoçadas, alcoólicas e refrigerantes">
                            <span>Desencorajar o consumo de sal, açúcar, doces, alimentos gordurosos, alimentos e temperos industrializados, ingestão de bebidas adoçadas, alcoólicas e refrigerantes</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif

        @if($exameFuncional->classificacaoNutricional == 'Sobrepeso')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Nutrição</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Sobrepeso</th>
                        <td>
                            <input type="checkbox" name="sobre_peso[]" value="Encaminhar para atenção especializada/nutricionista">
                            <span>Encaminhar para atenção especializada/nutricionista</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="sobre_peso[]" value="Monitorar as tendências de ganho e perda de peso">
                            <span>Monitorar as tendências de ganho e perda de peso</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="sobre_peso[]" value="Incentivar o consumo de alimentos ricos em fibras, como frutas (três porções ou mais por dia), legumes e verduras (pelo menos três porções) e cereais integrais">
                            <span>Incentivar o consumo de alimentos ricos em fibras, como frutas (três porções ou mais por dia), legumes e verduras (pelo menos três porções) e cereais integrais</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="sobre_peso[]" value="Orientar o respeito à regularidade de horários das refeições, sendo indispensáveis o desjejum, o almoço, o lanche e o jantar, e não pular as refeições">
                            <span>Orientar o respeito à regularidade de horários das refeições, sendo indispensáveis o desjejum, o almoço, o lanche e o jantar, e não pular as refeições</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="sobre_peso[]" value="Identificar estímulos que levam a hábitos inadequados">
                            <span>Identificar estímulos que levam a hábitos inadequados</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="sobre_peso[]" value="Estabelecer acolhimento, sem recriminação/estigmatização e com empatia">
                            <span>Estabelecer acolhimento, sem recriminação/estigmatização e com empatia</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="sobre_peso[]" value="Mostrar a importância do emagrecimento">
                            <span>Mostrar a importância do emagrecimento</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="sobre_peso[]" value="Estimular adesão a atividade física (30 min por dia)">
                            <span>Estimular adesão a atividade física (30 min por dia)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="sobre_peso[]" value="Orientar o consumo de menores quantidades de alimentos por refeição">
                            <span>Orientar o consumo de menores quantidades de alimentos por refeição</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="sobre_peso[]" value="Incentivar ingestão hídrica (em média de 6 a 8 copos de água ou outros líquidos por dia)">
                            <span>Incentivar ingestão hídrica (em média de 6 a 8 copos de água ou outros líquidos por dia)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="sobre_peso[]" value="Desencorajar o consumo de sal, açúcar, doces, alimentos gordurosos, alimentos e temperos industrializados, ingestão de bebidas adoçadas, alcoólicas e refrigerantes">
                            <span>Desencorajar o consumo de sal, açúcar, doces, alimentos gordurosos, alimentos e temperos industrializados, ingestão de bebidas adoçadas, alcoólicas e refrigerantes</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif
        @endif
        @endforeach

        @foreach($exameFisico as $exameFisico)
        @if($exameFisico->id == $formulario->id)
        @if($exameFisico->sisUrologico_incontinenciaUrinaria == 'Incontinência urinária')
        <div class="form-group">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Eliminações vesicais</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="12">Incontinência urinária</th>
                        <td>
                            <input type="checkbox" name="incontinencia_urinaria[]" value="Identificar as causas para o surgimento da incontinência">
                            <span>Identificar as causas para o surgimento da incontinência</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="incontinencia_urinaria[]" value="Definir horários para micção">
                            <span>Definir horários para micção</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="incontinencia_urinaria[]" value="Orientar técnicas corporais para fortalecer a musculatura vesical">
                            <span>Orientar técnicas corporais para fortalecer a musculatura vesical</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="incontinencia_urinaria[]" value="Orientar uso de fraldas, absorventes ou tampões geriátricos">
                            <span>Orientar uso de fraldas, absorventes ou tampões geriátricos</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="incontinencia_urinaria[]" value="Orientar cuidados com a pele perineal – creme barreira e troca de fraldas quando necessário">
                            <span>Orientar cuidados com a pele perineal – creme barreira e troca de fraldas quando necessário</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="incontinencia_urinaria[]" value="Prescrever diário miccional">
                            <span>Prescrever diário miccional</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="incontinencia_urinaria[]" value="Orientar mudança de hábitos de ingestão hídrica">
                            <span>Orientar mudança de hábitos de ingestão hídrica</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="incontinencia_urinaria[]" value="Orientar adaptação das roupas (preferência por velcro ou elástico)">
                            <span>Orientar adaptação das roupas (preferência por velcro ou elástico)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="incontinencia_urinaria[]" value="Indicar o uso de urinol ou cadeira sanitária">
                            <span>Indicar o uso de urinol ou cadeira sanitária</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="incontinencia_urinaria[]" value="Incentivar ingestão hídrica (em média de 6 a 8 copos de água ou outros líquidos por dia)">
                            <span>Incentivar ingestão hídrica (em média de 6 a 8 copos de água ou outros líquidos por dia)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="incontinencia_urinaria[]" value="Desencorajar o consumo de sal, açúcar, doces, alimentos gordurosos, alimentos e temperos industrializados, ingestão de bebidas adoçadas, alcoólicas e refrigerantes">
                            <span>Desencorajar o consumo de sal, açúcar, doces, alimentos gordurosos, alimentos e temperos industrializados, ingestão de bebidas adoçadas, alcoólicas e refrigerantes</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif
        @endif
        @endforeach
        <input type="submit" class="btn btn-primary" value="Salvar formulário">
    </form>
    <a href="/paciente/{{ $formulario->paciente_id }}" class="btn btn-primary">Voltar</a>
</div>

@endsection