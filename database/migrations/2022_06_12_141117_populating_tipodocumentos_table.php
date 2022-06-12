<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('tipodocumentos')->insert([
            ['nome' => 'Memorando', 'descricao' => 'Comunicação interna entre departamentos.'],
            ['nome' => 'Ofício', 'descricao' => 'Comunicação externa com clientes.'],
            ['nome' => 'Processo judicial', 'descricao' => 'Trânsito restrito ao Departamento Jurídico.']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('tipodocumentos')->delte([
            ['nome' => 'Memorando', 'descricao' => 'Comunicação interna entre departamentos.'],
            ['nome' => 'Ofício', 'descricao' => 'Comunicação externa com clientes.'],
            ['nome' => 'Processo judicial', 'descricao' => 'Trânsito restrito ao Departamento Jurídico.']
        ]);
    }
};
