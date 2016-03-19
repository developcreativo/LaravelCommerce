<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProductoRequest;
use App\Http\Controllers\Controller;
use App\Producto;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use App\Moneda;
use App\Categoria;
use App\Tipo;
use App\Marca;
use Log;

class ProductoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('producto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $monedas = Moneda::all()->lists('simbolo', 'id');
        $categorias = Categoria::orderBy('nombre_es')->get()->lists('nombre_es', 'id')->toArray();
        $tipos = Tipo::orderBy('nombre_es')->get()->lists('nombre_es', 'id')->toArray();
        $marcas = Marca::orderBy('nombre')->get()->lists('nombre', 'id')->toArray();

        return View('producto.create', compact('monedas', 'categorias', 'tipos', 'marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request)
    {
        $producto = Producto::create($request->all());
        $producto->url = str_slug($producto->titulo_es . '-' . $producto->id);
        $producto->save();

        return redirect()->to('pro/'. $producto->id .'/agregar-foto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::findOrfail($id);
        return View('frontend.single-product', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $monedas = Moneda::all()->lists('simbolo', 'id');
        $categorias = Categoria::orderBy('nombre_es')->get()->lists('nombre_es', 'id')->toArray();
        $tipos = Tipo::orderBy('nombre_es')->get()->lists('nombre_es', 'id')->toArray();
        $marcas = Marca::orderBy('nombre')->get()->lists('nombre', 'id')->toArray();

        return View('producto.edit', compact('producto', 'monedas', 'categorias', 'tipos', 'marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoRequest $request, $id)
    {
        $producto = Producto::findOrfail($id);
        $producto->update($request->all());

        return redirect()->to('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAll()
    {
        $productos = Producto::with('categoria', 'tipo', 'marca', 'moneda')->get();

        $fractal = new Manager();
        $resource = new Collection($productos, function(Producto $p) {
               return [
                    'id'            => $p->id,
                    'titulo'        => $p->titulo_es,
                    'categoria'     => $p->categoria->nombre_es,
                    'tipo'          => $p->tipo->nombre_es,
                    'marca'         => $p->marca ? $p->marca->nombre : '' ,
                    'precio'        => $p->precioFormateado,
                    'acciones'      => $p->botones
                ];
        });

        $productos = $fractal->createData($resource)->toArray();

        return $productos;
    }

    public function showAddFoto($id)
    {   
        $producto = Producto::findOrfail($id);
        return View('producto.addfotos', compact('producto'));
    }

    public function guardarFoto($id, Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|mimes:jpg,jpeg,png,bmp'
        ]);
        $producto = Producto::findOrFail($id)->addFoto($request->file('foto'));
    }
}
