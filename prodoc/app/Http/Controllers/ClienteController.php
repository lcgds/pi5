<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
     //Pagina Inicial
     public function index(){
        return view('cliente.index')->with('clientes', Cliente::all());
    }
    //Criar Documento
    public function create(){
        return view('cliente.create');
        }
    //Armazenar dados no banco
        public function store(Request $request){
          cliente::create($request->all());
          session()->flash('success', 'cliente cadastrado com sucesso!');
          //Redireciona a rota pra pagina inicial
          return redirect(route('cliente.index'));
            }
          
      public function edit(Cliente $cliente){
   return view('cliente.edit')->with('cliente', $cliente);
      }

      public function update(Request $request, Cliente $cliente){
          $cliente->update($request->all());
          session()->flash('success', 'cliente alterado com sucesso!');
          return redirect(route('cliente.index'));
      }
}
