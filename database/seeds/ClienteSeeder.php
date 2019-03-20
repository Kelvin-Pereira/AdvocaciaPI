<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nome'    => 'Maria',
            'email'    => 'Maria@gmail.com',
            'telefone1'  => '(61) 99999-9999',
            'telefone2'  => '(61) 99999-9999',
        ]);
    }
}
