<?php
use App\Producto;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('prueba', function(){
	return Producto::with('fotos')->get();
});

//Routes por categorias
Route::get('categoria/{$categoria?}', 'CategoriaController@productosPorCategoria');


Route::get('products', function(){
	$productos = Producto::paginate(9);
	return View('frontend.product', compact('productos'));
});


Route::get('/', function () {
	$productos = Producto::with('categoria', 'tipo', 'marca', 'moneda')->orderBy('id', 'desc')->take(8)->get();
    return view('welcome', compact('productos'));
});

// Login routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Resources
Route::resource('productos', 'ProductoController');
Route::resource('categoria', 'CategoriaController');
Route::resource('tipo', 'TipoController');
Route::resource('marca', 'MarcaController');

// Productos routes..
Route::get('pro/{id}/agregar-foto', 'ProductoController@showAddFoto');
Route::post('pro/{id}/fotos', ['as' => 'store_foto_producto', 'uses' => 'ProductoController@guardarFoto']);

Route::group(['prefix' => 'api'], function(){
	Route::get('getAllProductos', 'ProductoController@getAll');
	Route::get('obtenerCategorias', 'CategoriaController@getSelect');
	Route::get('obtenerTipos', 'TipoController@getSelect');
	Route::get('obtenerMarcas', 'MarcaController@getSelect');
});