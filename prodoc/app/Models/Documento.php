<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $fillable = ['id','descricao', 'tipodocumentos_id'];

    public function tipodocumento() {
        // 1 'Tipo de Documento' pertence a 'Documento' 
        return $this->belongsTo(tipodocumento::class, 'tipodocumentos_id' /*FK na minha tabela*/,   'id' /*PK na tabela 'Tipo de Documento'*/);
    }
}
