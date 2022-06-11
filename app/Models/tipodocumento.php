<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipodocumento extends Model
{
    use HasFactory;
    protected $fillable = ['id','nome','descricao'];

    //Pertence a muitos
    /*
    public function documentos(){
        return $this->hasMany(Documento::class);
    }
    */
    
}
