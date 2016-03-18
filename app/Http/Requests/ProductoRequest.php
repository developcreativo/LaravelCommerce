<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'categoria_id'  => 'required|exists:categorias,id',
            'tipo_id'       => 'required|exists:tipos,id',
            'marca_id'      => 'exists:marcas,id',
            'titulo_es'     => 'required|max:50',
            'titulo_en'     => 'max:50',
            'titulo_br'     => 'max:50',
            'descripcion_es'=> 'max:500',
            'descripcion_en'=> 'max:500',
            'descripcion_br'=> 'max:500',
            'moneda_id'     => 'exists:monedas,id',
            'precio'        => 'numeric|max:2147483647|min:0',
            'stock'         => 'numeric|max:2147483647|min:0',
            'stock_minimo'  => 'numeric|max:2147483647|min:0'
        ];
    }
}
