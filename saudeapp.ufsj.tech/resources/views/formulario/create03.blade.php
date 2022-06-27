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