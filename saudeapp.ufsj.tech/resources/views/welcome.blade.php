@extends('layouts.main')
@extends('menu_navbar.menu')
@section('title', 'Saude App')

@section('content')

<form action="/welcome" method="GET">
<div class="search-container">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Buscar paciente" aria-label="Recipient's username" name="search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-search">
                <ion-icon name="search-sharp"></ion-icon>
            </button>
        </div>
    </div>
</form>
</div>
<div id="pacients-conteiner" class="col-md-12">

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Paciente</th>
                <th scope="col">Endereço</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($pacientes as $pacient)
            <tr>
                <th scope="row">{{$pacient->id}}</th>
                <td>{{$pacient->nome}}</td>
                <td>{{$pacient->endereco}}</td>
                <td>
                    <a href="/paciente/{{ $pacient->id }}" class="btn btn-primary" id="eye" title="Ver detalhes">
                        <ion-icon name="eye"></ion-icon>
                    </a>
                    <a href="/form/{{ $pacient->id }}/create" class="btn btn-primary">
                        <ion-icon name="document-text"></ion-icon>
                    </a>
                </td>
            </tr>
            @endforeach
            @if(count($pacientes) == 0 && $search)
            <p>Não foi possivel encontrar nenhum paciente com {{ $search }}! <a href="/">Ver todos!</a></p>
            @elseif(count($pacientes) == 0)
            <p>Não há pacientes cadastrados</p>
            @endif
        </tbody>
    </table>
</div>



@endsection