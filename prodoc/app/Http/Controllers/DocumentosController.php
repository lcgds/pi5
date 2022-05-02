<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function index(){
        return view('documento.index');
    }

    public function create(){
        return view('documento.create');
        }
        public function store(Request $request){
          dd ($request->all());
            }

}
