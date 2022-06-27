@extends('layouts.main')

@section('title', 'App Saúde')

@section('content')

<div id="pacients-conteiner" class="col-md-12">
    <h2>Resultados</h2>
    @foreach($pacient as $pacient)
        @if($formulario->paciente_id == $pacient->id)
        <p class="subtitle">Veja o diagnóstico para {{ $pacient->nome }}</p>
        @endif
    @endforeach

    @foreach($exameFuncional as $exameFuncional)
        @if($formulario->id == $exameFuncional->id)
            <p>Pontuação total Atividade de Vida Diária (AVD): {{ $exameFuncional->ptTotalAVD }}</p>
            <p>Diagnóstico: {{ $exameFuncional->interpretacaoAVD }}</p>

            <p>Atividades Instrumentais da Vida Diária (AIVD): {{ $exameFuncional->ptTotalAIVD }}</p>
            <p>Diagnóstico: {{ $exameFuncional->interpretacaoAIVD }}</p>

            <p>Rastreio da Vulnerabilidade – VES-13: {{ $exameFuncional->ptTotalVES }}</p>
            <p>Diagnóstico: {{ $exameFuncional->estratificacaoVES }}</p>
        @endif
    @endforeach

    @foreach($examePsicossocial as $examePsicossocial)
        @if($formulario->id == $examePsicossocial->id)
            <p>Mini exame do estado mental (MEEM): {{ $examePsicossocial->pontuacaoTotalCognicao }}</p>
            <p>Diagnóstico: {{ $examePsicossocial->classificacaoCognicao }}</p>

            <p>Escala de depressão geriátrica - GDS-15: {{ $examePsicossocial->pontuacaoTotalHumor }}</p>
            <p>Diagnóstico: {{ $examePsicossocial->classificacaoHumor }}</p>
        @endif
    @endforeach

    @foreach($sugTerapeutica as $sugTerapeutica)
    @if($sugTerapeutica->form_id == $formulario->id)

        <h2>Sugestões Terapeuticas</h2>

        @if($sugTerapeutica->comprometimento_cognitivo != null)
            <h4>Comprometimento Cognitivo</h4>
            <ul>
                @foreach($sugTerapeutica->comprometimento_cognitivo as $comprometimento_cognitivo)
                    @if($comprometimento_cognitivo != '')
                        <li>{{ $comprometimento_cognitivo }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->suspeita_depressao != null)
            <h4>sustepeita de depressão</h4>
            <ul>
                @foreach($sugTerapeutica->suspeita_depressao as $suspeita_depressao)
                    @if($suspeita_depressao != '')
                        <li>{{ $suspeita_depressao }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->violencia_domestica != null)
            <h4>Violência Doméstica</h4>
            <ul>
                @foreach($sugTerapeutica->violencia_domestica as $violencia_domestica)
                    @if($violencia_domestica != '')
                        <li>{{ $violencia_domestica }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->dependencia_uma_ou_mais_funcoes != null)
            <h4>Dependência de uma ou mais funções</h4>
            <ul>
                @foreach($sugTerapeutica->dependencia_uma_ou_mais_funcoes as $dependencia_uma_ou_mais_funcoes)
                    @if($dependencia_uma_ou_mais_funcoes != '')
                        <li>{{ $dependencia_uma_ou_mais_funcoes }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->dependencia_parcial != null)
            <h4>Dependência Parcial</h4>
            <ul>
                @foreach($sugTerapeutica->dependencia_parcial as $dependencia_parcial)
                    @if($dependencia_parcial != '')
                        <li>{{ $dependencia_parcial }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->dependencia_total != null)
            <h4>Dependência Total</h4>
            <ul>
                @foreach($sugTerapeutica->dependencia_total as $dependencia_total)
                    @if($dependencia_total != '')
                        <li>{{ $dependencia_total }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->idoso_risco_fragilizacao != null)
            <h4>Idoso em risco de fragilização</h4>
            <ul>
                @foreach($sugTerapeutica->idoso_risco_fragilizacao as $idoso_risco_fragilizacao)
                    @if($idoso_risco_fragilizacao != '')
                        <li>{{ $idoso_risco_fragilizacao }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->idoso_fragil != null)
            <h4>Idoso frágil</h4>
            <ul>
                @foreach($sugTerapeutica->idoso_fragil as $idoso_fragil)
                    @if($idoso_fragil != '')
                        <li>{{ $idoso_fragil }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->baixo_risco_quedas != null)
            <h4>Baixo riscos de quedas</h4>
            <ul>
                @foreach($sugTerapeutica->baixo_risco_quedas as $baixo_risco_quedas)
                    @if($baixo_risco_quedas != '')
                        <li>{{ $baixo_risco_quedas }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->risco_quedas_moderado != null)
            <h4>Risco de quedas moderado</h4>
            <ul>
                @foreach($sugTerapeutica->risco_quedas_moderado as $risco_quedas_moderado)
                    @if($risco_quedas_moderado != '')
                        <li>{{ $risco_quedas_moderado }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->alto_risco_quedas != null)
            <h4>Alto risco de quedas</h4>
            <ul>
                @foreach($sugTerapeutica->alto_risco_quedas as $alto_risco_quedas)
                    @if($alto_risco_quedas != '')
                        <li>{{ $alto_risco_quedas }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->ambiente_sem_seguranca != null)
            <h4>Ambiente sem segurança</h4>
            <ul>
                @foreach($sugTerapeutica->ambiente_sem_seguranca as $ambiente_sem_seguranca)
                    @if($ambiente_sem_seguranca != '')
                        <li>{{ $ambiente_sem_seguranca }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->hipersonia != null)
            <h4>Hipersonia</h4>
            <ul>
                @foreach($sugTerapeutica->hipersonia as $hipersonia)
                    @if($hipersonia != '')
                        <li>{{ $hipersonia }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->insonia != null)
            <h4>Insonia</h4>
            <ul>
                @foreach($sugTerapeutica->insonia as $insonia)
                    @if($insonia != '')
                        <li>{{ $insonia }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->parassonia != null)
            <h4>Parassonia</h4>
            <ul>
                @foreach($sugTerapeutica->parassonia as $parassonia)
                    @if($parassonia != '')
                        <li>{{ $parassonia }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->incontinencia_urinaria != null)
            <h4>Incontinência urinária</h4>
            <ul>
                @foreach($sugTerapeutica->incontinencia_urinaria as $incontinencia_urinaria)
                    @if($incontinencia_urinaria != '')
                        <li>{{ $incontinencia_urinaria }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->baixo_peso != null)
            <h4>Baixo peso</h4>
            <ul>
                @foreach($sugTerapeutica->baixo_peso as $baixo_peso)
                    @if($baixo_peso != '')
                        <li>{{ $baixo_peso }}</li>
                    @endif
                @endforeach
            </ul>
        @endif

        @if($sugTerapeutica->sobre_peso != null)
            <h4>Sobre peso</h4>
            <ul>
                @foreach($sugTerapeutica->sobre_peso as $sobre_peso)
                    @if($sobre_peso != '')
                        <li>{{ $sobre_peso }}</li>
                    @endif
                @endforeach
            </ul>
        @endif
    @endif
    @endforeach
</div>

@endsection