<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SliderRequest extends Request
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
        if($this->method() == 'POST')
        {
            return [
                'imagen'    => 'required|image|max:10240',
                'title'     => 'required|max:20',
                'text'      => 'max:50'
            ];
        }else{
            return [
                'imagen'    => 'image|max:10240',
                'title'     => 'required|max:20',
                'text'      => 'max:50'
            ];
        }
    }
}
