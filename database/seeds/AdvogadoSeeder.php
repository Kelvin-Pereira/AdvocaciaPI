<?php

use Illuminate\Database\Seeder;

class AdvogadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advogados')->insert([
            ['advogados.nome'=>'Kelvin', 'advogados.registro_oab'=>123456
            ,'advogados.email'=>'kelvinteste@gmail.com', 'advogados.telefone1'=>'3333-6666'
            ,'advogados.telefone2'=>'3333-5555', 'advogados.nivel_acesso_id'=>1],
        ]);
    }
}
