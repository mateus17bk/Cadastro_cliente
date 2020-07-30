@extends('layout.site')

@section('titulo','Clientes')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de Clientes</h3>
   
    <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <a href="{{route('admin.clientes')}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <h4 class="center">Comece agora a cadastrar os clientes</h4>
            </div>
          </div>
        </div>
      </div>
               

@endsection
