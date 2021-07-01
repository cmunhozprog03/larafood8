@extends('adminlte::page')

@section('title', 'Plano')

@section('content_header')
    <div class="row justify-content-between">
        <h1>Detalhes do Plano: </h1>

    </div>


@stop

@section('content')
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card bg-dark">
          <div class="card-body">
            <h5>Nome: </h5>
            {{ $detail->name }}
            <hr>

            <div class="row justify-content-around">
              <form action="{{ route('details.plan.destroy', [$plan->url, $detail->id]) }}" method="POST">
              @csrf
              @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Excluir</button>
              </form>

              <a href="{{ route('details.plan.edit', [$plan->url, $detail->id]) }}" class="btn w3-indigo"><i class="fas fa-pen"></i> EDITAR</a>
              <a href="{{ route('details.plan.index', $plan->url) }}" class="btn w3-purple"><i class="fas fa-arrow-alt-circle-left"></i> VOLTAR</a>

            </div>
            @if (session('error'))
                <div class="alert-alert-danger">
                    {{ session('error') }}
                </div>
            @endif

          </div>

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
