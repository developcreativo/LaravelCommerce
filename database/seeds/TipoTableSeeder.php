<?php

use Illuminate\Database\Seeder;
use App\Tipo;

class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create([
        	'nombre_es' 	=> 'Accesorios',
        	'nombre_en'		=> 'Accesories',
        	'nombre_br'		=> 'Acessórios',
        	'url'			=> 'accesorios',
        	]);
        Tipo::create([
        	'nombre_es' 	=> 'Pantalones',
        	'nombre_en'		=> 'Bags',
        	'nombre_br'		=> 'Calças',
        	'url'			=> 'pantalones',
        	]);
        Tipo::create([
        	'nombre_es' 	=> 'Capas y Sombreros',
        	'nombre_en'		=> 'Caps and Hats',
        	'nombre_br'		=> 'Capas y Chapéus',
        	'url'			=> 'capas-sombreros',
        	]);
        Tipo::create([
        	'nombre_es' 	=> 'Deportiva',
        	'nombre_en'		=> 'Sports',
        	'nombre_br'		=> 'Esportes',
        	'url'			=> 'deportes',
        	]);
        Tipo::create([
        	'nombre_es' 	=> 'Camperas y Abrigos',
        	'nombre_en'		=> 'Jackets and Coats',
        	'nombre_br'		=> 'Jaquetas e Casacos',
        	'url'			=> 'camperas-abrigos',
        	]);
        Tipo::create([
        	'nombre_es' 	=> 'Jeans',
        	'nombre_en'		=> 'Jeans',
        	'nombre_br'		=> 'Jeans',
        	'url'			=> 'jeans',
        	]);
        Tipo::create([
        	'nombre_es' 	=> 'Joyería',
        	'nombre_en'		=> 'Jewellery',
        	'nombre_br'		=> 'Jóias',
        	'url'			=> 'joyeria',
        	]);
        Tipo::create([
        	'nombre_es' 	=> 'Jumpers y Cardigans',
        	'nombre_en'		=> 'Jumpers and Cardigans',
        	'nombre_br'		=> 'Jumpers e Cardigans',
        	'url'			=> 'jumpers-cardigans'
        	]);
        Tipo::create([
        	'nombre_es' 	=> 'Camperas de Cuero',
        	'nombre_en'		=> 'Leather Jackets',
        	'nombre_br'		=> 'Jaquetas de Couro',
        	'url'			=> 'camperas-cuero'
        	]);
        Tipo::create([
        	'nombre_es' 	=> 'Camisetas manga larga',
        	'nombre_en'		=> 'Long Sleeve T-Shirts',
        	'nombre_br'		=> 'Camisetas manga larga',
        	'url'			=> 'camisetas-m-larga'
        	]);
        Tipo::create([
            'nombre_es'     => 'Camisetas',
            'nombre_en'     => 'T-Shirts',
            'nombre_br'     => 'Camisetas',
            'url'           => 'camisetas'
            ]);
        Tipo::create([
        	'nombre_es' 	=> 'Camisas',
        	'nombre_en'		=> 'Shirts',
        	'nombre_br'		=> 'Camisas',
        	'url'			=> 'camisas'
        	]);
        Tipo::create([
        	'nombre_es' 	=> 'Zapatos, botas y championes',
        	'nombre_en'		=> 'Shoes, Boots & Trainers',
        	'nombre_br'		=> 'Sapatos, botas y tenis',
        	'url'			=> 'zapatos-botas-champienos'
        	]);
        Tipo::create([
        	'nombre_es' 	=> 'Lentes de sol',
        	'nombre_en'		=> 'Sunglasses',
        	'nombre_br'		=> 'Óculos de sol',
        	'url'			=> 'lentes-sol'
        	]);
        Tipo::create([
        	'nombre_es' 	=> 'Trajes de baño',
        	'nombre_en'		=> 'Swimwear',
        	'nombre_br'		=> 'Roupa de banho',
        	'url'			=> 'trajes-baño'
        	]);

    }
}
