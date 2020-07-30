@extends('layout.site')

@section('titulo','Cliente')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Cliente</h3>
    <div class="row">
      <form class="" action="{{ route('admin.clientes.salvar') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.clientes._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>

@endsection