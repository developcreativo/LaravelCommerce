<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Moneda extends Model
{
	use SoftDeletes;
	
    protected $table = 'monedas';

    protected $fillable = [
    		'nombre',
    		'simbolo',
    		'codigo'
    ];

    protected $deletes = ['deleted_at'];

    public function productos()
    {
    	$this->hasMany('App\Producto');
    }
}
