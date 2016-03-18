<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marca extends Model
{
    use SoftDeletes;

    protected $table = 'marcas';

    protected $fillable = [
    	'nombre',
    	'logo',
    	'url'
    ];

    protected $dates = ['deleted_at'];

    public function productos()
    {
    	$this->hasMany('App\Producto');
    }
}
