<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
	use SoftDeletes;

    protected $table = 'sliders';

    protected $fotosdir = 'fotos/productos/';

    protected $fillable = [
    		'image',
    		'title',
    		'text'
    ];

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

    public function getEditarAttribute()
    {
    	return '<a href="/slider/'. $this->id .'/edit"><i class="fa fa-pencil"></i></a>';
    }

    public function getDeleteAttribute()
    {
    	return '<a onclick="delete('.$this->id.', 1)"><i class="fa fa-trash"></i></a>';
    }

   	public function getActionsAttribute()
   	{
   		return $this->edit . '&nbsp;' . $this->delete; 
   	}
}
