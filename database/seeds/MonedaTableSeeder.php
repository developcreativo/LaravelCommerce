<?php

use Illuminate\Database\Seeder;
use App\Moneda;

class MonedaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Moneda::create([
        		'nombre' 	=> 'Dolar',
        		'simbolo'	=> 'U$S',
        		'codigo'	=> 'USD'
        	]);
        Moneda::create([
                'nombre'    => 'Peso Uruguayo',
                'simbolo'   => 'U$',
                'codigo'    => 'UYU'
            ]);
        Moneda::create([
                'nombre'    => 'Peso Argentino',
                'simbolo'   => 'A$',
                'codigo'    => 'ARS'
            ]);
        Moneda::create([
                'nombre'    => 'Real',
                'simbolo'   => 'R$',
                'codigo'    => 'BRL'
            ]);
    }
}
