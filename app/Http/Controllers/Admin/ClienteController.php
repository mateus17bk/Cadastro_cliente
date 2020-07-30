<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    /***
     * Metodo a view das informação dos clientes
     */
    public function index(){
        
        $registros = Cliente::all();
        
    return view('admin.clientes.index' ,compact('registros'));
       
    }

    /***
     * Metodo para cadastrar clientes
     */
    public function adicionar(){

      return view('admin.clientes.adicionar');  
    }

     /***
     * Metodo de salvar os dados do cliente
     */
    public function salvar(Request $request){
      
      /**
       * Parametro do request
       */
      $dados = $request->all();

      /**
       * Verificação do publica 
       */
      if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
      }else{
        $dados['publicado'] = 'nao';
      }

      /**
       * Mandando para o banco de dados
       */
      Cliente::create($dados);

      return redirect()->route('admin.clientes');

    }

    /***
     * Acessa a view para editar
     */
    public function editar($id){

      $registros = Cliente::find($id);

      return view('admin.clientes.editar' ,compact('registros'));
    }


    public function atualizar(Request $request, $id){
      
      /**
       * Parametro do request
       */
      $dados = $request->all();

      /**
       * Verificação do publica 
       */
      if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
      }else{
        $dados['publicado'] = 'nao';
      }

      /**
       * Mandando para o banco de dados
       */
      Cliente::find($id)->update($dados);

      return redirect()->route('admin.clientes');

    }
    
    /**
    * Mandando para deletar as informação
    */
    public function deletar($id){

      cliente::find($id)->delete();

      return redirect()->route('admin.clientes'); 
    }

}
