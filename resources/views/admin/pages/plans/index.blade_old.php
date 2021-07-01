@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <div class="row justify-content-between">
        <h1>Planos</h1>
        <a href="{{ route('plans.create') }}" class="btn btn-dark">Novo Plano</a>
    </div>


@stop

@section('content')
 

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@stop

@section('js')
    <script> </script>
@stop
