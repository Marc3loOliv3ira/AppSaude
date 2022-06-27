<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Criando Paciente
    </title>
    <link rel="stylesheet" href="/css/formularios/formulario.css">

</head>

<body>

    <!-- Create Form -->
    <form id="form" action="/paciente" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Details -->
        <div class="form-control">
            <b><p>Nome:</p></b>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome completo">
        </div>

        <div class="form-control">
            <b><p>Data de Nascimento:</p></b>
            <input type="date" name="dataNascimento" id="dataNascimento" class="form-control">
        </div>

        <div class="form-control">
        <b><p>Sexo:</p></b>
            <input id='_feminino' type="radio" name='sexo' value='feminino' /> Feminino

            <input id='_masculino' type="radio" name='sexo' value='masculino' /> Masculino


            <input id='_naodeterminado' type="radio" name='sexo' value='nao determinado' />Não determinado
        </div>

        <div class="form-control">

        </div>

        <div class="form-control">
        <b><p>Estado civil:</p></b>
            <input id='_solteiro' type="radio" name='estadoCivil' value='Solteiro(a)' />Solteiro(a)<p></p>

            <input id='_casado' type="radio" name='estadoCivil' value='Casado(a) / morando junto' />Casado(a) / morando junto<p></p>

            <input id='_separado' type="radio" name='estadoCivil' value='Separado(a) / desquitado(a)' />
            Separado(a) / desquitado(a)<p></p>

            <input id='_viuvo' type="radio" name='estadoCivil' value='Viuvo(a)' />
            Viuvo(a)<p></p>

        </div>
        <div class="form-control">
        <b><p>Raça / Cor:</p></b>
            <input id='_branca' type="radio" name='raca' value='Branca' />Branca<p></p>

            <input id='_preta' type="radio" name='raca' value='Preta' />Preta<p></p>

            <input id='_parde' type="radio" name='raca' value='Parda' />Parda<p></p>

            <input id='_amarela' type="radio" name='raca' value='Amarela' />Amarela<p></p>

            <input id='_indigena' type="radio" name='raca' value='Indígena' />Indigena<p></p>
        </div>

        <div class="form-control">
        <b><p>Endereço:</p></b>
            <input id='endereco' type="text" name='endereco' class='form-control' placeholder='Nome da rua, n' />
        </div>

        <div class="form-control">
        <b></b><p>Unidade Básica de Saúde Responsável:</p>
            <input id='unidadeBSR' type="text" name='ubsResponsavel' class='form-control' placeholder='Nome da unidade' />
            <input id='numeroUBS' type="text" name='numeroUBS' class='form-control' placeholder='Numero da UBS' />
        </div>

        <div class="form-control">
        <b><p>Responsável:</p></b>
            <input id='nomeResponsavel' name='nomeResponsavel' type="text" class='form-control' placeholder='Nome do responsável' />
            <input id='grauParentesco' name='grauParentesco' type="text" class='form-control' placeholder='Grau de parentesco' />
            <input id='contatoResponsavel' name='contatoResponsavel' type="text" class='form-control' placeholder='Contato' />
        </div>

        <div class="form-control">
        <b><p>Moradia:</p></b>
            <input id='residenciaPropria' type="radio" name='moradia' value='Residencia Própria' />Residencia Própria<p></p>

            <input id='residenciaAlugada' type="radio" name='moradia' value='Residencia Alugada' />Residencia Alugada<p></p>

            <input id='ILPI' type="radio" name='moradia' value='Instituição de Longa Permanência para Idosos' />Instituição de Longa Permanência para Idosos<p></p>

            <input id='residenciaFamiliar' type="radio" name='moradia' value='Residência Familiar' />Residência Familiar<p></p>

            
        </div>

        <div class="form-control">
        <b><p>Localização:</p></b>
            <input id='zonaUrbana' type="radio" name='localizacao' value='Zona Urbana' />Zona Urbana<p></p>

            <input id='zonaRural' type="radio" name='localizacao' value='Zona Rural' />Zona Rural<p></p>
        </div>

        <div class="form-control">
        <b><p>Grau de estudo:</p></b>
            <table class="table table-borderless" cellspacing="20">
                <tbody>
                    <tr>
                        <td>
                            <input id='naoEstudou' type="radio" name='anosDeEstudo' value='Não estudou' />Não estudou
                        </td>
                        <td>
                            <input id='naoConcEBasico' type="radio" name='anosDeEstudo' value='Não concluiu o ensino básico' />Não concluiu o ensino básico        
                        </td>
                        <td>
                            <input id='ensinoBasicoComp' type="radio" name='anosDeEstudo' value='Ensino básico completo' />   Ensino básico completo 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id='ensinoBasicoInco' type="radio" name='anosDeEstudo' value='Ensino básico incompleto' />Ensino básico incompleto
                        </td>
                        <td>
                            <input id='pGrauComp' type="radio" name='anosDeEstudo' value='Primeiro grau complet0' />Primeiro grau completo
                        </td>
                        <td>
                            <input id='pGrauInco' type="radio" name='anosDeEstudo' value='Primeiro grau incompleto' />Primeiro grau incompleto
                        </td>
                    </tr>
                    <p></p>
                    <tr>
                        <td>
                            <input id='sGrauComp' type="radio" name='anosDeEstudo' value='Segundo grau completo' />Segundo grau completo
                        </td>
                        <td>
                            <input id='sGrauInco' type="radio" name='anosDeEstudo' value='Segundo grau incompleto' />Segundo grau incompleto
                        </td>
                        <td>
                            <input id='eSuperiorComp' type="radio" name='anosDeEstudo' value='Ensino superior completo' />Ensino superior completo
                        </td>
                    </tr>
                    <p></p>
                    <tr>
                        <td>
                            <input id='eSuperiorInco' type="radio" name='anosDeEstudo' value='Ensino superior incompleto' />Ensino superior incompleto
                        </td>
                        <td>
                            <input id='especializacaoComp' type="radio" name='anosDeEstudo' value='Especialização completa' />Especialização completa
                        </td>
                        <td>
                            <input id='especializacaoInco' type="radio" name='anosDeEstudo' value='Especialização incompleta' />Especialização incompleta
                        </td>
                    </tr>
                    <p></p>
                    <tr>
                        <td>
                            <input id='mestrado' type="radio" name='anosDeEstudo' value='Mestrado' />Mestrado
                        </td>
                        <td>
                            <input id='doutorado' type="radio" name='anosDeEstudo' value='Doutorado' />Doutorado
                        </td>
                        <td>
                            <input id='posDoutorado' type="radio" name='anosDeEstudo' value='Pós-doutorado' />Pós-doutorado
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-control">
        <b><p>Ocupação / Renda:</p></b><br>
            <input id='ocupacao' name='ocupacao' type="text" class="form-control" placeholder='Última profissão/Ocupação que exercia' />

            <b><label for="renda">Fonte de renda:</label></b><br>
            <input id='aposentadoria' type="radio" name='fRenda' value='Aposentadoria' />Aposentadoria<p></p>

            <input id='pensao' type="radio" name='fRenda' value='Pensão' />Pensão<p></p>

            <input id='salario' type="radio" name='fRenda' value='Salário' />Salário<p></p>

            <input id='outros' type="radio" name='fRenda' value='Outros' />Outros<p></p>
            
        </div>


        <!-- Multi-line Text Input Control -->
        <button class="btn fifth" type="submit" value="Cadastrar paciente">
            Cadastrar
        </button>
    </form>
</body>

</html>
