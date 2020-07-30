@extends('layout.site')

@section('titulo','Cliente')

@section('conteudo')
  <div class="container">
    <h3 class="center">Editar informação</h3>
    <div class="row">
      <form class="" action="{{ route('admin.clientes.atualizar', $registros->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.clientes._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>

@endsection