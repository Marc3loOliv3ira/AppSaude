@extends('layouts.main')

@section('title', $pacient->nome)

@section('content')

<div id="pacients-conteiner" class="col-md-12">
    <h2>Sr(a) {{ $pacient->nome }} </h2>
    <p class="subtitle">Veja os formulários já cadastrados no sistema</p>
    <div class="form-container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data</th>

                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($formularios as $formulario)
                @if($formulario->paciente_id == $pacient->id)
                <tr>
                    <th scope="row">{{$formulario->id}}</th>
                    <td>{{$formulario->updated_at}}</td>
                    <td>
                        <a href="/form/{{ $formulario->id }}" class="btn btn-primary"><ion-icon name="eye"></ion-icon></a>
                        <a href="/sugestaoTerapeutica/{{ $formulario->id }}/edit" class="btn btn-primary"><ion-icon name="document-text"></ion-icon></a>
                        <a href="/sugestaoTerapeutica/{{ $formulario->id }}/create" class="btn btn-primary"><ion-icon name="medkit"></ion-icon></a>
                        <a href="/sugestaoTerapeutica/{{ $formulario->id }}/results" class="btn btn-primary"><ion-icon name="pulse"></ion-icon></a>
                        
                        <form action="/form/{{ $formulario->id }}/delete" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger delete-btn">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>
                        </form>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="/welcome" class="btn btn-primary">Voltar</a>
</div>

@endsection