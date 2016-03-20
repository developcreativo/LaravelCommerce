<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoriaRequest;
use App\Http\Controllers\Controller;
use App\Categoria;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use Log;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return View('categoria.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaRequest $request)
    {
        if($request->ajax())
        {
            Categoria::create($request->all());
            return response()->json(['ok' => 'se ha creado']);
        }else{
            Categoria::create($request->all());
            return redirect()->to('/categorias');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'En proceso.';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::findOrfail($id);

        return View('categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaRequest $request, $id)
    {
        $categoria = Categoria::findOrfail($id);
        $categoria->update($request->all());

        flash()->success('Se modifico correctmente la categoria', 'Exelente');
        return redirect()->to('/categorias');
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

    public function getSelect()
    {
        $categorias = Categoria::orderBy('nombre_es')->get();

        return response()->json($categorias->lists('nombre_es', 'id'));
    }

    public function getAll()
    {
        $categorias = Categoria::all();

        $fractal = new Manager();
        $resource = new Collection($categorias, function(Categoria $c) {
               return [
                    'id'            => $c->id,
                    'nombre_es'     => $c->nombre_es,
                    'nombre_en'     => $c->nombre_en,
                    'nombre_br'     => $c->nombre_br,
                    'imagen'        => $c->imagenText,
                    'acciones'      => $c->acciones
                ];
        });

        $categorias = $fractal->createData($resource)->toArray();

        return $categorias;
    }

    public function productosPorCategoria($categoria)
    {
        $categoria = Categoria::where('url', $categoria)->first();
        $productos = Producto::paginate(9);
        return View('frontend.pr
            oduct', compact('productos'));
    }
}
