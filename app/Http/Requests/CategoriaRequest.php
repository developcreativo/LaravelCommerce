<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoriaRequest extends Request
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
            'nombre_es' => 'required|max:255',
            'nombre_en' => 'max:255',
            'nombre_br' => 'max:255'
        ];
    }
}
