@extends('layouts.main')

@section('title', 'Saude App')

@section('content')

    @if
        <p>O usuario está buscando por {{ busca }}</p>
    @endif

@endsection