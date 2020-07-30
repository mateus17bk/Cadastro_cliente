@extends('layout.site')

@section('titulo','Clientes')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de Clientes</h3>
    
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Email</th>
            <th>Telefone</th>
          </tr>
        </thead>

        <tbody>
         @foreach($registros as $registro) 
          
          <tr>
            <td>{{ $registro->id }}</td>
            <td>{{ $registro->nome }}</td>
            <td>{{ $registro->endereco }}</td>
            <td>{{ $registro->email }}</td>
            <td>{{ $registro->telefone }}</td>
            <td>{{ $registro->publicado }}</td>
            <td>
              <a class="btn deep-orange" href="{{ route ('admin.clientes.editar' , $registro->id) }}">Editar</a>
              <a class="btn red" href="{{ route ('admin.clientes.deletar' , $registro->id) }}">Deletar</a>
            </td>
          </tr>
          @endforeach
        
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.clientes.adicionar') }}">Adicionar</a>

    </div>

  </div>



@endsection
