<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{

  
    
    use HasFactory;
    protected $fillable = ['documentos_id','departamento_id','users_id','observacao'];


public function documento() {
    //  Documento' pertence a ' 1 Movimentacao' 
    return $this->belongsTo(documento::class, 'documentos_id' /*FK na minha tabela*/,   'id' /*PK na tabela ' Documento'*/);
}

public function departamento() {
    // 1 'departamento' pertence a ' Vários Documento' 
    return $this->hasMany(departamento::class, 'departamentos_id' /*FK na minha tabela*/,   'id' /*PK na tabela Departamento'*/);
}

public function users() {
    // 1 'usuario' pertence a ' 1 Documento' 
    return $this->belongsTo(users::class, 'users_id' /*FK na minha tabela*/,   'id' /*PK na tabela Usuario'*/);
}
}
