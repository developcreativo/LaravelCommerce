<?php

use Illuminate\Database\Seeder;
use App\Marca;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create([
        	'nombre' 	=> 'Fila',
        	'logo'		=> 'images/ic.png',
        	'url'		=> 'fila'
        	]);
        Marca::create([
        	'nombre' 	=> 'Reebok',
        	'logo'		=> 'images/ic1.png',
        	'url'		=> 'reebok'
        	]);
        Marca::create([
        	'nombre' 	=> 'Puma',
        	'logo'		=> 'images/ic2.png',
        	'url'		=> 'puma'
        	]);
        Marca::create([
        	'nombre' 	=> 'Adidas',
        	'logo'		=> 'images/ic3.png',
        	'url'		=> 'adidas'
        	]);
    }
}
