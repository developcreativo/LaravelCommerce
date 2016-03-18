<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Image;

class Producto extends Model
{
    use SoftDeletes;

    protected $table = 'productos';

    protected $fotosdir = 'fotos/productos/';

    protected $fillable = [
    		'categoria_id',
    		'tipo_id',
    		'marca_id',
    		'titulo_es',
    		'titulo_en',
    		'titulo_br',
    		'descripcion_es',
    		'descripcion_en',
    		'descripcion_br',
    		'moneda_id',
    		'precio',
            'stock_minimo',
            'stock',
    		'url', //this field is self-generate by the title in spanish
    ];

    protected $dates = ['deleted_at'];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    public  function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }

    public function marca()
    {
        return $this->belongsTo('App\Marca');
    }

    public function moneda()
    {
        return $this->belongsTo('App\Moneda');
    }

    public function getPrecioFormateadoAttribute()
    {
        return $this->moneda->simbolo . ' ' .  number_format($this->precio, 2, '.', ' ');
    }

    public function fotos()
    {
        return $this->morphMany('App\Foto', 'fotoable');
    }

    public function addFoto($file)
    {
        $path = $this->fotosdir . $this->id . '/';
        $name = str_slug($this->nombre . '-' . microtime()) . '.' . $file->getClientOriginalExtension();
        if(!file_exists($path . 'min'))
            mkdir($path . 'min', 0777, true);
        Image::make($file)
            ->fit(233,323)
            ->save($path . 'min/' . $name);
        Image::make($file)
            ->fit(426,590)
            ->save($path . $name);
        return $this->fotos()->create([
            'ruta'              => '/' . $path . $name,
            'ruta_miniatura'    => '/' . $path . 'min/' . $name
        ]);
    }
}

