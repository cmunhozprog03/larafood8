@extends('adminlte::page')

@section('title', 'Editar Plano')

@section('content_header')
    <div class="row justify-content-between">
        <h1>Editar Plano</b></h1>

    </div>
@stop

@section('content')
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card bg-dark">
          <div class="card-body">
            <form action="{{ route('plans.update', $plan->url) }}" method="POST">
              @csrf
              @method('PUT')

              @include('admin.pages.plans._partials.form')

              <a href="{{ route('plans.index') }}" class="btn btn-secondary">Cancelar</a>
              <button type="submit" class="btn btn-success float-right font-weight-bold">Atualizar</button>


            </form>
          </div>
        </div>
      </div>
    </div>




@stop

@section('css')

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@stop

@section('js')
    <script> </script>
@stop
