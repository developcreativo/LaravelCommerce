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
    	'imagen' //es una imagen para hacer un parallax en el top de la pagina, pero se  desabilita por ahora 
    ];

    protected $dates = ['deleted_at'];

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }

    public function getEditButtonAttribute()
    {
        return '<a href="categorias/'. $this->id .'/edit" title="Editar"><i class="fa fa-pencil"></i></a>';
    }

    public function getAccionesAttribute()
    {
        return $this->editButton;
    }

    public function getImagenTextAttribute()
    {
        if($this->imagen == '' || $this->imagen == null)
            return 'No';
        return 'Si';
    }
}
