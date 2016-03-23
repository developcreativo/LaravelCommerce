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

    public function getTieneLogoAttribute()
    {
        if(!$this->logo || $this->logo == '')
            return 'No tiene';
        return 'Si';
    }

    public function getEditarButtonAttribute()
    {
        return '<a href="marca/'. $this->id .'/edit" title="Editar"><i class="fa fa-pencil"></i></a>';
    }

    public function getAccionesAttribute(){
        return $this->editarButton;
    }
}
