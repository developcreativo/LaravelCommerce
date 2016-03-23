<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TipoRequest;
use App\Http\Controllers\Controller;
use App\Tipo;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use Log;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('tipo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('tipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoRequest $request)
    {
        if($request->ajax())
        {
            $tipo = Tipo::create($request->all());
            $tipo->url = str_slug($tipo->nombre_es) . $tipo->id;
            $tipo->save();
            return response()->json(['ok' => 'se ha creado']);
        }else{
            $tipo = Tipo::create($request->all());
            $tipo->url = str_slug($tipo->nombre_es) . $tipo->id;
            $tipo->save();
            return redirect()->to('/tipo');
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
        $tipo = Tipo::findOrFail($id);
        return View('tipo.edit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipo = Tipo::findOrFail($id);
        $tipo->update($request->all());
        $tipo->url = str_slug($tipo->nombre_es) . $tipo->id;
        $tipo->save();

        return redirect()->to('/tipo');
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
        $tipos = Tipo::orderBy('nombre_es')->get();

        return response()->json($tipos->lists('nombre_es', 'id'));
    }

    public function getAll()
    {
    	$tipos = Tipo::all();

        $fractal = new Manager();
        $resource = new Collection($tipos, function(Tipo $t) {
               return [
                    'id'            => $t->id,
                    'nombre_es'     => $t->nombre_es,
                    'nombre_en'     => $t->nombre_en,
                    'nombre_br'     => $t->nombre_br,
                    'acciones'      => $t->acciones
                ];
        });

        $tipos = $fractal->createData($resource)->toArray();

        return $tipos;
    }
}
