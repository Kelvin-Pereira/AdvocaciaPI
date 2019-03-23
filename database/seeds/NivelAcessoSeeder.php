<?php

use Illuminate\Database\Seeder;
use App\Nivel_Acesso;

class NivelAcessoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nivel_acessos')->insert([
            'nivel_acessos.nivel'=>'admin',
        ]);
        // Nivel_Acesso::create([
        //     'nome'=>'admin',            
        // ]);
        
    }
}



















