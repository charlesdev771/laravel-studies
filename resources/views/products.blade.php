@extends('layouts.main')

@section('title', 'Produto')

@section('content')


    @if ($id != null)
        <p>DM</p>
    @else
        <p>:(</p>
    @endif

@endsection
