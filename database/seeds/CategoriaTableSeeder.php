<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
        	'nombre_es' => 'Mujer',
        	'nombre_en' => 'Woman',
        	'nombre_br'	=> 'Mulher',
        	'url'		=> 'mujer',
        	'imagen'	=> 'images/back.jpg'
        	]);

        Categoria::create([
        	'nombre_es' => 'Hombre',
        	'nombre_en' => 'Man',
        	'nombre_br'	=> 'Homem',
        	'url'		=> 'hombre',
        	'imagen'	=> 'images/back.jpg'
        	]);

        Categoria::create([
        	'nombre_es' => 'Perfumería',
        	'nombre_en' => 'Perfumery',
        	'nombre_br'	=> 'Perfumeria',
        	'url'		=> 'perfumeria',
        	'imagen'	=> 'images/back.jpg'
        	]);
    }
}
