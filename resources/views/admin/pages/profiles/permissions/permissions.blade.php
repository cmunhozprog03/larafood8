@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <div class="row justify-content-between">
        <h1>Permissões do perfil:  {{ $profile->name }}</h1>
        <a href="" class="btn btn-dark">Nova Premissão</a>
    </div>


@stop

@section('content')
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-dark">
                <thead>
                  <tr class="text-center">
                    <th width="20%">Nome</th>
                    <th width="50%">Descrição</th>
                    <th colspan="2">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($permissions as $profile)
                      <tr>
                          <td>{{ $profile->name }}</td>
                          <td>{{ $profile->description }}</td>

                          <td class="text-center">

                            <a href="{{ route('profiles.edit', $profile->id) }}" class="w3-button w3-small w3-round-large w3-indigo">EDITAR</a>

                          </td>
                      </tr>
                  @endforeach
                </tbody>
            </table>
            {{ $permissions->links() }}
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
