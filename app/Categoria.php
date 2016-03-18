<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
	use SoftDeletes;

    protected $table = 'categorias';

    protected $fillable = [
    	'nombre_es',
    	'nombre_en',
    	'nombre_br',
    	'url',
    	'imagen'
    ];

    protected $dates = ['deleted_at'];

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
