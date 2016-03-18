<?php

use Illuminate\Database\Seeder;
use App\Producto;
use App\Foto;


class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
        	'categoria_id' => '2',
        	'tipo_id' => '11',
        	'marca_id' => null,
        	'titulo_es' => 'Camiseta manga corta hombre',
        	'titulo_en' => 'T-Sirth',
        	'titulo_br' => 'Camiseta manga curta',
        	'descripcion_es' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut saepe quas nesciunt rem quibusdam eius, sit nisi, eum! Quia voluptatem aspernatur, doloremque pariatur aliquid consequuntur sint consequatur harum molestias quod!',
        	'descripcion_en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, nostrum quaerat! Quia ullam accusamus tempore iste quibusdam iusto nostrum explicabo, rerum suscipit vel praesentium, dolorum tenetur minima repellat veritatis inventore.',
        	'descripcion_br' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo magni illum veritatis consequatur, natus, repellat non placeat blanditiis cum cumque nobis quia consequuntur, nihil, ipsum voluptate velit dignissimos. Cumque, ipsa.',
        	'moneda_id' => '1',
        	'precio' => '70',
        	'stock'	=> '200',
        	'stock_minimo' => '20',
        	'url' => str_slug('Camiseta manga corta-1')
        	]);
        Foto::create([
            'fotoable_id' => '1',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/images/pc4.jpg',
            'ruta_miniatura'=> '/images/pc4.jpg',
            ]);

        Producto::create([
        	'categoria_id' => '1',
        	'tipo_id' => '12',
        	'marca_id' =>  '1',
        	'titulo_es' => 'Camisa de dama verde',
        	'titulo_en' => 'Shirt lady green',
        	'titulo_br' => 'Camisa de mulher verde',
        	'descripcion_es' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates hic maxime modi commodi itaque eum cum quaerat, suscipit autem iste, quisquam officiis explicabo rem expedita aut dignissimos iusto, dolores enim.',
        	'descripcion_en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis non cumque, ratione alias sed! Cupiditate necessitatibus quisquam, cumque amet harum excepturi, aperiam soluta, adipisci, corporis saepe velit debitis suscipit earum?',
        	'descripcion_br' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quae non odit saepe minus repellendus tenetur reiciendis voluptates natus perspiciatis, maxime quaerat veritatis reprehenderit rerum molestias expedita mollitia enim impedit.',
        	'moneda_id' => '1',
        	'precio' => '70',
        	'stock_minimo' => '5',
        	'stock' => '50',
        	'url' => str_slug('Camisa de dama verde-2')
        	]);
        Foto::create([
            'fotoable_id' => '2',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/images/pc.jpg',
            'ruta_miniatura'=> '/images/pc.jpg',
            ]);

        Producto::create([
        	'categoria_id' => '1',
            'tipo_id' => '11',
            'marca_id' =>  '3',
            'titulo_es' => 'Camisa de dama verde',
            'titulo_en' => 'Shirt lady green',
            'titulo_br' => 'Camisa de mulher verde',
            'descripcion_es' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates hic maxime modi commodi itaque eum cum quaerat, suscipit autem iste, quisquam officiis explicabo rem expedita aut dignissimos iusto, dolores enim.',
            'descripcion_en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis non cumque, ratione alias sed! Cupiditate necessitatibus quisquam, cumque amet harum excepturi, aperiam soluta, adipisci, corporis saepe velit debitis suscipit earum?',
            'descripcion_br' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quae non odit saepe minus repellendus tenetur reiciendis voluptates natus perspiciatis, maxime quaerat veritatis reprehenderit rerum molestias expedita mollitia enim impedit.',
            'moneda_id' => '1',
            'precio' => '70',
            'stock_minimo' => '5',
            'stock' => '50',
            'url' => str_slug('Camisa de dama verde-3')
        	]);
        Foto::create([
            'fotoable_id' => '3',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/images/pc1.jpg',
            'ruta_miniatura'=> '/images/pc1.jpg',
            ]);

        Producto::create([
        	'categoria_id' => '1',
            'tipo_id' => '12',
            'marca_id' =>  '1',
            'titulo_es' => 'Camisa de dama verde',
            'titulo_en' => 'Shirt lady green',
            'titulo_br' => 'Camisa de mulher verde',
            'descripcion_es' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates hic maxime modi commodi itaque eum cum quaerat, suscipit autem iste, quisquam officiis explicabo rem expedita aut dignissimos iusto, dolores enim.',
            'descripcion_en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis non cumque, ratione alias sed! Cupiditate necessitatibus quisquam, cumque amet harum excepturi, aperiam soluta, adipisci, corporis saepe velit debitis suscipit earum?',
            'descripcion_br' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quae non odit saepe minus repellendus tenetur reiciendis voluptates natus perspiciatis, maxime quaerat veritatis reprehenderit rerum molestias expedita mollitia enim impedit.',
            'moneda_id' => '1',
            'precio' => '70',
            'stock_minimo' => '5',
            'stock' => '50',
            'url' => str_slug('Camisa de dama verde-4')
        	]);
        Foto::create([
            'fotoable_id' => '4',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/images/pc2.jpg',
            'ruta_miniatura'=> '/images/pc2.jpg',
            ]);

        Producto::create([
        	'categoria_id' => '1',
            'tipo_id' => '12',
            'marca_id' =>  '1',
            'titulo_es' => 'Camisa de dama verde',
            'titulo_en' => 'Shirt lady green',
            'titulo_br' => 'Camisa de mulher verde',
            'descripcion_es' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates hic maxime modi commodi itaque eum cum quaerat, suscipit autem iste, quisquam officiis explicabo rem expedita aut dignissimos iusto, dolores enim.',
            'descripcion_en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis non cumque, ratione alias sed! Cupiditate necessitatibus quisquam, cumque amet harum excepturi, aperiam soluta, adipisci, corporis saepe velit debitis suscipit earum?',
            'descripcion_br' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quae non odit saepe minus repellendus tenetur reiciendis voluptates natus perspiciatis, maxime quaerat veritatis reprehenderit rerum molestias expedita mollitia enim impedit.',
            'moneda_id' => '1',
            'precio' => '70',
            'stock_minimo' => '5',
            'stock' => '50',
            'url' => str_slug('Camisa de dama verde-5')
        	]);
        Foto::create([
            'fotoable_id' => '5',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/images/pc3.jpg',
            'ruta_miniatura'=> '/images/pc3.jpg',
            ]);

        Producto::create([
        	'categoria_id' => '1',
            'tipo_id' => '12',
            'marca_id' =>  '1',
            'titulo_es' => 'Camisa de dama verde',
            'titulo_en' => 'Shirt lady green',
            'titulo_br' => 'Camisa de mulher verde',
            'descripcion_es' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates hic maxime modi commodi itaque eum cum quaerat, suscipit autem iste, quisquam officiis explicabo rem expedita aut dignissimos iusto, dolores enim.',
            'descripcion_en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis non cumque, ratione alias sed! Cupiditate necessitatibus quisquam, cumque amet harum excepturi, aperiam soluta, adipisci, corporis saepe velit debitis suscipit earum?',
            'descripcion_br' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quae non odit saepe minus repellendus tenetur reiciendis voluptates natus perspiciatis, maxime quaerat veritatis reprehenderit rerum molestias expedita mollitia enim impedit.',
            'moneda_id' => '1',
            'precio' => '70',
            'stock_minimo' => '5',
            'stock' => '50',
            'url' => str_slug('Camisa de dama verde-6')
        	]);
        Foto::create([
            'fotoable_id' => '6',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/images/pc5.jpg',
            'ruta_miniatura'=> '/images/pc5.jpg',
            ]);

        Producto::create([
        	'categoria_id' => '1',
            'tipo_id' => '12',
            'marca_id' =>  '1',
            'titulo_es' => 'Camisa de dama verde',
            'titulo_en' => 'Shirt lady green',
            'titulo_br' => 'Camisa de mulher verde',
            'descripcion_es' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates hic maxime modi commodi itaque eum cum quaerat, suscipit autem iste, quisquam officiis explicabo rem expedita aut dignissimos iusto, dolores enim.',
            'descripcion_en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis non cumque, ratione alias sed! Cupiditate necessitatibus quisquam, cumque amet harum excepturi, aperiam soluta, adipisci, corporis saepe velit debitis suscipit earum?',
            'descripcion_br' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quae non odit saepe minus repellendus tenetur reiciendis voluptates natus perspiciatis, maxime quaerat veritatis reprehenderit rerum molestias expedita mollitia enim impedit.',
            'moneda_id' => '1',
            'precio' => '70',
            'stock_minimo' => '5',
            'stock' => '50',
            'url' => str_slug('Camisa de dama verde-7')
        	]);
        Foto::create([
            'fotoable_id' => '7',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/images/pc6.jpg',
            'ruta_miniatura'=> '/images/pc6.jpg',
            ]);

        Producto::create([
            'categoria_id' => '1',
            'tipo_id' => '5',
            'marca_id' =>  '1',
            'titulo_es' => 'Camisa de dama verde',
            'titulo_en' => 'Shirt lady green',
            'titulo_br' => 'Camisa de mulher verde',
            'descripcion_es' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates hic maxime modi commodi itaque eum cum quaerat, suscipit autem iste, quisquam officiis explicabo rem expedita aut dignissimos iusto, dolores enim.',
            'descripcion_en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis non cumque, ratione alias sed! Cupiditate necessitatibus quisquam, cumque amet harum excepturi, aperiam soluta, adipisci, corporis saepe velit debitis suscipit earum?',
            'descripcion_br' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quae non odit saepe minus repellendus tenetur reiciendis voluptates natus perspiciatis, maxime quaerat veritatis reprehenderit rerum molestias expedita mollitia enim impedit.',
            'moneda_id' => '1',
            'precio' => '1500',
            'stock_minimo' => '5',
            'stock' => '50',
            'url' => str_slug('Camisa de dama verde-9')
            ]);
        Foto::create([
            'fotoable_id' => '8',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/fotos/productos/9/031654800-1458106499.jpg',
            'ruta_miniatura'=> '/fotos/productos/9/min/031654800-1458106499.jpg',
            ]);
        Foto::create([
            'fotoable_id' => '8',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/fotos/productos/9/012570800-1458106502.jpg',
            'ruta_miniatura'=> '/fotos/productos/9/min/012570800-1458106502.jpg',
            ]);
        Foto::create([
            'fotoable_id' => '8',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/fotos/productos/9/039155200-1458106499.jpg',
            'ruta_miniatura'=> '/fotos/productos/9/min/039155200-1458106499.jpg',
            ]);

        Producto::create([
            'categoria_id' => '1',
            'tipo_id' => '5',
            'marca_id' =>  '1',
            'titulo_es' => 'Camisa de dama verde',
            'titulo_en' => 'Shirt lady green',
            'titulo_br' => 'Camisa de mulher verde',
            'descripcion_es' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates hic maxime modi commodi itaque eum cum quaerat, suscipit autem iste, quisquam officiis explicabo rem expedita aut dignissimos iusto, dolores enim.',
            'descripcion_en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis non cumque, ratione alias sed! Cupiditate necessitatibus quisquam, cumque amet harum excepturi, aperiam soluta, adipisci, corporis saepe velit debitis suscipit earum?',
            'descripcion_br' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quae non odit saepe minus repellendus tenetur reiciendis voluptates natus perspiciatis, maxime quaerat veritatis reprehenderit rerum molestias expedita mollitia enim impedit.',
            'moneda_id' => '1',
            'precio' => '1500',
            'stock_minimo' => '5',
            'stock' => '50',
            'url' => str_slug('Camisa de dama verde-9')
            ]);
        Foto::create([
            'fotoable_id' => '9',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/fotos/productos/9/031654800-1458106499.jpg',
            'ruta_miniatura'=> '/fotos/productos/9/min/031654800-1458106499.jpg',
            ]);
        Foto::create([
            'fotoable_id' => '9',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/fotos/productos/9/012570800-1458106502.jpg',
            'ruta_miniatura'=> '/fotos/productos/9/min/012570800-1458106502.jpg',
            ]);
        Foto::create([
            'fotoable_id' => '9',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/fotos/productos/9/039155200-1458106499.jpg',
            'ruta_miniatura'=> '/fotos/productos/9/min/039155200-1458106499.jpg',
            ]);

        Producto::create([
            'categoria_id' => '1',
            'tipo_id' => '5',
            'marca_id' =>  '1',
            'titulo_es' => 'Camisa de dama verde',
            'titulo_en' => 'Shirt lady green',
            'titulo_br' => 'Camisa de mulher verde',
            'descripcion_es' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates hic maxime modi commodi itaque eum cum quaerat, suscipit autem iste, quisquam officiis explicabo rem expedita aut dignissimos iusto, dolores enim.',
            'descripcion_en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis non cumque, ratione alias sed! Cupiditate necessitatibus quisquam, cumque amet harum excepturi, aperiam soluta, adipisci, corporis saepe velit debitis suscipit earum?',
            'descripcion_br' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quae non odit saepe minus repellendus tenetur reiciendis voluptates natus perspiciatis, maxime quaerat veritatis reprehenderit rerum molestias expedita mollitia enim impedit.',
            'moneda_id' => '1',
            'precio' => '1500',
            'stock_minimo' => '5',
            'stock' => '50',
            'url' => str_slug('Camisa de dama verde-10')
            ]);
        Foto::create([
            'fotoable_id' => '10',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/fotos/productos/10/006434100-1458106995.jpg',
            'ruta_miniatura'=> '/fotos/productos/10/min/006434100-1458106995.jpg',
            ]);
        Foto::create([
            'fotoable_id' => '10',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/fotos/productos/10/010422800-1458106993.jpg',
            'ruta_miniatura'=> '/fotos/productos/10/min/010422800-1458106993.jpg',
            ]);
        Foto::create([
            'fotoable_id' => '10',
            'fotoable_type' => 'App\Producto',
            'ruta'          => '/fotos/productos/10/012823000-1458106993.jpg',
            'ruta_miniatura'=> '/fotos/productos/10/min/012823000-1458106993.jpg',
            ]);
    }
}
