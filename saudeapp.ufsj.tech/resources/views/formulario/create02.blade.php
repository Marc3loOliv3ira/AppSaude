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
    <table class="table table-striped" cellspacing ="10">
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

    <table class="table table-striped" celsspacing = "10">
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

    <button type="submit" value="Cadastrar paciente">
            Cadastrar
     </button>
    </form>
</body>
</div>
</html>