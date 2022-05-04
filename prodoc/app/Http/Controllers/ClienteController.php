<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
     //Pagina Inicial
     public function index(){
        return view('cliente.index');
    }
    //Criar Documento
    public function create(){
        return view('cliente.create');
        }
    //Armazenar dados no banco
        public function store(Request $request){
          cliente::create($request->all());
            }
}
