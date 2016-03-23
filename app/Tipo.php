<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo extends Model
{
    use SoftDeletes;

    protected $table = 'tipos';

    protected $fillable = [
    	'nombre_es',
    	'nombre_en',
    	'nombre_br',
    	'url'
    ];

    protected $dates = ['deleted_at'];

    public function productos()
    {
    	$this->hasMany('App\Producto');
    }

    public function getEditarButtonAttribute()
    {
        return '<a href="/tipo/'. $this->id. '/edit"><i class="fa fa-pencil"></i></a>';
    }

    public function getAccionesAttribute()
    {
        return $this->editarButton;
    }
}
