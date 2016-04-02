<?php

use Illuminate\Database\Seeder;
use App\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([ 
        	'image' => '/fotos/sliders/1/032325000-1459608108.jpeg',
        	'title' => 'Se viene el invierno', 
        	'text'  => 'Sacos, abrigos y chaquetas'
        	]);
        Slider::create([
        	'image' => '/fotos/sliders/2/016693100-1459608244.jpeg',
        	'title' => 'Sale en Botas',
        	'text'	=> 'Las mejores marcas, al mejor precio'
        	]);
        Slider::create([
			'image'	=> '/fotos/sliders/3/054120800-1459608382.jpg',
			'title'	=> 'Lentes de Sol',
			'text'	=> 'Los lentes de sol que están en la moda'
        	]);
        Slider::create([
        	'image'	=> '/fotos/sliders/4/076506700-1459612363.jpg',
        	'title'	=> 'Relojes ', 
        	'text'	=> 'Relojes todas las marcas y modelos'
        	]);
        
        Slider::create([
        	'image' => '/fotos/sliders/5/076673500-1459613541.jpg',
        	'title' => 'Zapatos',
        	'text'	=> 'Te gustan los Zapatos? Nosotros lo sabemos'
        	]);
    }
}
