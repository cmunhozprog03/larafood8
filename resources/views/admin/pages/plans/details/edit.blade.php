@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <div class="row justify-content-between">
        <h1>Editar Detalhe</h1>
    </div>
@stop

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card bg-dark">
        <div class="card-body">
          <form action="{{ route('details.plan.update', [$plan->url, $detail->id]) }}" method="POST">
            @csrf
            @method('PUT')

            @include('admin.pages.plans.details._partials.form')
            <div class="row justify-content-around">
                <a href="{{ route('plans.index') }}" class="btn btn-secondary mb-2">Cancelar</a>
                <button type="submit" class="btn btn-success float-right mb-2 font-weight-bold">Salvar</button>
            </div>



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
