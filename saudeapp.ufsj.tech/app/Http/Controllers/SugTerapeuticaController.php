<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacient;
use App\Models\Formulario;
use App\Models\ExameFisico;
use App\Models\ExameFuncional;
use App\Models\ExamePsicossocial;
use App\Models\SugestoesTerapeuticas;

class SugTerapeuticaController extends Controller
{
    public function create($id)
    {
        $formulario = Formulario::findOrFail($id);
        $pacient = Pacient::all();
        $exameFisico = ExameFisico::all();
        $exameFuncional = ExameFuncional::all();
        $examePsicossocial = ExamePsicossocial::all();

        return view('formulario.sugestaoTerapeutica', ['pacient' => $pacient, 'formulario' => $formulario, 'exameFisico' => $exameFisico, 'exameFuncional' => $exameFuncional, 'examePsicossocial' => $examePsicossocial]);
    }

    public function store(Request $request){
        $sugTerapeutica = new SugestoesTerapeuticas();

        $sugTerapeutica->paciente_id = $request->paciente_id;
        $sugTerapeutica->form_id = $request->form_id;

        $sugTerapeutica->comprometimento_cognitivo = $request->comprometimento_cognitivo;
        $sugTerapeutica->violencia_domestica = $request->violencia_domestica;
        $sugTerapeutica->dependencia_uma_ou_mais_funcoes = $request->dependencia_uma_ou_mais_funcoes;
        $sugTerapeutica->dependencia_parcial = $request->dependencia_parcial;
        $sugTerapeutica->dependencia_total = $request->dependencia_total;
        $sugTerapeutica->idoso_risco_fragilizacao = $request->idoso_risco_fragilizacao;
        $sugTerapeutica->idoso_fragil = $request->idoso_fragil;
        $sugTerapeutica->baixo_risco_quedas = $request->baixo_risco_quedas;
        $sugTerapeutica->risco_quedas_moderado = $request->risco_quedas_moderado;
        $sugTerapeutica->alto_risco_quedas = $request->alto_risco_quedas;
        $sugTerapeutica->ambiente_sem_seguranca = $request->ambiente_sem_seguranca;
        $sugTerapeutica->hipersonia = $request->hipersonia;
        $sugTerapeutica->insonia = $request->insonia;
        $sugTerapeutica->parassonia = $request->parassonia;
        $sugTerapeutica->incontinencia_urinaria = $request->incontinencia_urinaria;
        $sugTerapeutica->baixo_peso = $request->baixo_peso;
        $sugTerapeutica->sobre_peso = $request->sobre_peso;
        $sugTerapeutica->suspeita_depressao = $request->suspeita_depressao;

        $sugTerapeutica->save();

        return redirect('/welcome')->with('msg', 'Sugestão cadastrada com sucesso!');
    }
}
