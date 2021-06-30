@extends('adminlte::page')

@section('title', 'Novo Plano')

@section('content_header')
    <div class="row justify-content-between">
        <h1>Novo Plano</h1>

    </div>
@stop

@section('content')
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card bg-dark">
          <div class="card-body">
            <form action="{{ route('plans.store') }}" method="POST">
              @csrf

              @include('admin.pages.plans._partials.form')

              <a href="{{ route('plans.index') }}" class="btn btn-secondary">Cancelar</a>
              <button type="submit" class="btn btn-success float-right font-weight-bold">Salvar</button>


            </form>
          </div>
        </div>
      </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@stop

@section('js')
    <script> </script>
@stop
