@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <div class="row justify-content-between">
        <h1>Planos</h1>
        <a href="{{ route('plans.create') }}" class="btn btn-dark">Novo Plano</a>
    </div>


@stop

@section('content')
    <div class="row justify-content-center">
      <div class="table-responsive">
        <table class="table table-striped table-hover table-dark">
            <thead>
              <tr class="text-center">
                <th width="5%">ID</th>
                <th width="50%">Nome</th>
                <th width="20%">Valor</th>
                <th colspan="2">Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($plans as $plan)
                  <tr>
                      <td>{{ $plan->id }}</td>
                      <td>{{ $plan->name }}</td>
                      <td class="text-right">{{ $plan->price }}</td>
                      <td class="text-center">
                        <a href="" class="btn btn-outline-warning">Editar</a>
                        <a href="" class="btn btn-outline-info">Ver</a>
                      </td>
                  </tr>
              @endforeach
            </tbody>
        </table>
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
