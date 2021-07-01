@extends('adminlte::page')

@section('title', 'Perfil Perfil')

@section('content_header')
    <div class="row justify-content-between">
        <h1>Editar Perfil: <b>{{ $permission->name }}</b></h1>

    </div>
@stop

@section('content')
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card bg-dark">
          <div class="card-body">
            <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
              @csrf
              @method('PUT')

              @include('admin.pages.permissions._partials.form')

              <a href="{{ route('permissions.index') }}" class="btn btn-secondary">CANCELAR</a>
              <button type="submit" class="btn btn-success float-right font-weight-bold">ATUALIZAR</button>

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
