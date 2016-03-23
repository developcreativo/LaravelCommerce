<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AplicacionTest extends TestCase
{
    use DatabaseTransactions;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_nuevo_usuario()
    {
        $this->visit('/')
        ->click('Registrar')
        ->seePageIs('auth/register')
        ->see('Registro')
        ->type('Yasser', 'nombre')
        ->type('091336302', 'telefono')
        ->type('yasser.mussa@gmail.com', 'email')
        ->type('entrar', 'password')
        ->type('entrar', 'password_confirmation')
        ->press('Enviar')
        ->seePageIs('/')
        ->seeInDatabase('users', [
        	'nombre' 	=> 'Yasser',
        	'telefono'	=> '091336302',
        	'email'		=> 'yasser.mussa@gmail.com'
        	]);
    }

    public function test_nuevo_producto()
    {
        $this->visit('/')
        ->click('Entrar')
        ->seePageIs('auth/login')
        ->see('Login')
        ->type('yasser.mussa@gmail.com', 'email')
        ->type('entrar', 'password')
        ->press('Entrar')
        ->seePageIs('/')
        ->see('Yasser')
        ->click('Yasser')
        ->seePageIs('/productos')
        ->click('Nuevo Producto')
        ->seePageIs('productos/create')
        ->select('1', 'categoria_id')
        ->select('2', 'tipo_id')
        ->select('1', 'marca_id')
        ->type('Pantalon Dama Fila', 'titulo_es')
        ->type('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate saepe nobis ut necessitatibus vero, possimus tempore aspernatur. Debitis quasi quos ad! Incidunt ratione laborum commodi dolore, illo tenetur sed amet.', 'descripcion_es')
        ->type('Pants for Lady Fila', 'titulo_en')
        ->type('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quibusdam quia ratione velit voluptatem, earum, sunt architecto ipsam adipisci reprehenderit ipsum dolore illum quasi cupiditate ullam cumque fugiat quis harum!', 'descripcion_en')
        ->type('Calzas mulher Fila', 'titulo_br')
        ->type('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, ratione! Magni sunt nesciunt, praesentium dolorum maxime ut mollitia reiciendis maiores est, obcaecati, dolore, aspernatur ea cupiditate quam assumenda esse iusto.', 'descripcion_br')
        ->select('4', 'moneda_id')
        ->type('500', 'precio')
        ->type('50', 'stock')
        ->type('5', 'stock_minimo')
        ->press('Guardar')
        ->seePageIs('/pro/1/agregar-foto')
        ->seeInDatabase('productos',[
            'categoria_id' => '1',
            'tipo_id' => '2',
            'marca_id' => '1',
            'titulo_es' => 'Pantalon Dama Fila',
            'titulo_en' => 'Pants for Lady Fila',
            'titulo_br' => 'Calzas mulher Fila',
            'descripcion_es' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate saepe nobis ut necessitatibus vero, possimus tempore aspernatur. Debitis quasi quos ad! Incidunt ratione laborum commodi dolore, illo tenetur sed amet.',
            'descripcion_en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quibusdam quia ratione velit voluptatem, earum, sunt architecto ipsam adipisci reprehenderit ipsum dolore illum quasi cupiditate ullam cumque fugiat quis harum!',
            'descripcion_br' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, ratione! Magni sunt nesciunt, praesentium dolorum maxime ut mollitia reiciendis maiores est, obcaecati, dolore, aspernatur ea cupiditate quam assumenda esse iusto.',
            'moneda_id' => '4',
            'precio' => '500.00',
            'stock' => '50',
            'stock_minimo' => '5'
            ]);
    }

    public function test_nueva_categoria()
    {
        $this->visit('/')
        ->click('Entrar')
        ->seePageIs('auth/login')
        ->see('Login')
        ->type('yasser.mussa@gmail.com', 'email')
        ->type('entrar', 'password')
        ->press('Entrar')
        ->seePageIs('/')
        ->see('Yasser')
        ->click('Yasser')
        ->seePageIs('/productos')
        ->visit('/categorias')
        ->click('Nueva Categoría')
        ->type('Nueva Categoria', 'nombre_es')
        ->type('new category', 'nombre_en')
        ->type('Nova Categoria', 'nombre_br')
        ->press('Guardar')
        ->seePageIs('/categorias')
        ->seeInDatabase('categorias', [
            'nombre_es' => 'Nueva Categoria',
            'nombre_en' => 'new category',
            'nombre_br' => 'Nova Categoria'
            ]);        
    }
}
