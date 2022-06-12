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
        DB::table('clientes')->insert([
                'nome' => 'CEAGESP',
                'cnpj' => '62.463.005/0001-08',
                'email' => 'luiz.garrido@ceagesp.gov.br',
                'telefone' => '(11) 3643-3767'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('clientes')->delete([
                'nome' => 'CEAGESP',
                'cnpj' => '62.463.005/0001-08',
                'email' => 'luiz.garrido@ceagesp.gov.br',
                'telefone' => '(11) 3643-3767'
        ]);
    }
};
