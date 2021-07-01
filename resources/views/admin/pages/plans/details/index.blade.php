@extends('adminlte::page')

@section('title', 'Detalhes do Plano')

@section('content_header')

    <h1>Detalhes do Plano: {{ $plan->name }}</h1>
    <a href="{{ route('details.plan.create', $plan->url) }}" class="btn btn-dark">Novo Detalhe</a>

@stop

@section('content')

<div class="row justify-content-center">
    <div class="table-responsive">
        <table class="table table-striped table-hover table-dark">
            <thead>
              <tr class="text-center">
                <th width="5%">ID</th>
                <th width="65%">Nome</th>
                <th width="50%">Ações</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($details as $detail)
                  <tr>

                      <td>{{ $detail->id }}</td>
                      <td>{{ $detail->name }}</td>

                      <td class="text-center">

                        <a href="{{ route('details.plan.edit', [$plan->url, $detail->id]) }}" class="w3-button w3-small w3-round-large w3-indigo">Editar</a>
                        <a href="{{ route('details.plan.show', [$plan->url, $detail->id]) }}" class="w3-button w3-small w3-border-indigo w3-round-large w3-deep-purple">Ver</a>
                      </td>
                  </tr>
              @endforeach
            </tbody>
        </table>

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
