@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <h1>Produtos</h1>

    @if ($busca != '')
        <p>Pesquisa: {{$busca}}</p>
    @else
        <p>Vazio</p>
    @endif
        @endsection
