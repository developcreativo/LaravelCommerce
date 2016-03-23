<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MarcaRequest;
use App\Http\Controllers\Controller;
use App\Marca;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('marca.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('marca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarcaRequest $request)
    {
        if($request->ajax())
        {
            $marca = Marca::create($request->all());
            $marca->url = str_slug($marca->nombre) . $marca->id;
            $marca->save();
            return response()->json(['ok' => 'se ha creado']);
        }else{
            $marca = Marca::create($request->all());
            $marca->url = str_slug($marca->nombre) . $marca->id;
            $marca->save();
            return redirect()->to('/marca');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marca = Marca::findOrfail($id);
        return View('marca.edit', compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarcaRequest $request, $id)
    {
        $marca = Marca::findOrfail($id);
        $marca->update($request->all());
        $marca->url = str_slug($marca->nombre) . $marca->id;
        $marca->save();

        return redirect()->to('/marca');
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
        $marcas = Marca::orderBy('nombre')->get();

        return response()->json($marcas->lists('nombre', 'id'));
    }

    public function getAll()
    {
        $marcas = Marca::all();

        $fractal = new Manager();
        $resource = new Collection($marcas, function(Marca $m) {
               return [
                    'id'            => $m->id,
                    'nombre'        => $m->nombre,
                    'logo'          => $m->tieneLogo,
                    'url'     => $m->url,
                    'acciones'      => $m->acciones
                ];
        });

        $marcas = $fractal->createData($resource)->toArray();

        return $marcas;
    }
}
