<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    //Pagina Inicial
    public function index(){
        return view('departamento.index');
    }
    //Criar Departamento
    public function create(){
        return view('departamento.create');
        }
    //Armazenar dados no banco
        public function store(Request $request){
          departamento::create($request->all());
            }

}
