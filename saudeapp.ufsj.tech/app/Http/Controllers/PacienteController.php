<?php

namespace App\Http\Controllers;

use App\Models\Pacient;
use App\Models\Formulario;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function welcome(){
        $search = request('search');

        if($search){
            $pacientes = Pacient::where('nome', 'like', '%'.$search.'%')->get();
        }else{
            $pacientes = Pacient::all();
        }
        return view('welcome', ['pacientes' => $pacientes, 'search' => $search]);
    }

    public function create(){
        return view('paciente.createPaciente');
    }

    public function store(Request $request){
        $form = new Pacient;

        $form->nome = $request->nome;
        $form->dataNascimento = $request->dataNascimento;
        $form->sexo = $request->sexo;
        $form->estadoCivil = $request->estadoCivil;
        $form->raca = $request->raca;
        $form->endereco = $request->endereco;
        $form->ubsResponsavel = $request->ubsResponsavel;
        $form->numeroUBS = $request->numeroUBS;
        $form->nomeResponsavel = $request->nomeResponsavel;
        $form->grauParentesco = $request->grauParentesco;
        $form->contatoResponsavel = $request->contatoResponsavel;
        $form->moradia = $request->moradia;
        $form->localizacao = $request->localizacao;
        $form->anosDeEstudo = $request->anosDeEstudo;
        $form->ocupacao = $request->ocupacao;
        $form->fRenda = $request->fRenda;
        $form->condSaude = $request->condSaude;
        
        $form->save();

        return redirect('/welcome')->with('msg', 'Paciente cadastrado com sucesso!');
    }

    public function show($id) {

        $pacient = Pacient::findOrFail($id);
        $formularios = Formulario::all();

        return view('paciente.show', ['pacient' => $pacient, 'formularios' => $formularios]);
    }
}
