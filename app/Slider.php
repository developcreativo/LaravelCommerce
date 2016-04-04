<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
	use SoftDeletes;

    protected $table = 'sliders';

    protected $fotosdir = 'fotos/sliders/';

    protected $fillable = [
    		'image',
    		'title',
    		'text',
            'invertirfuente'
    ];

    public function addFoto($file)
    {
        $path = $this->fotosdir . $this->id . '/';
        $name = str_slug($this->nombre . '-' . microtime()) . '.' . $file->getClientOriginalExtension();
        if(!file_exists($path))
            mkdir($path, 0777, true);
        Image::make($file)
            ->fit(1280,720)
            ->save($path . $name);
        $this->image = '/' . $path . $name;
        $this->save();
    }

    public function getFuenteInvertidaAttribute()
    {
        if($this->invertirfuente)
            return 'Negra';
        return 'Blanca';
    }

    public function getEditAttribute()
    {
    	return '<a href="/slider/'. $this->id .'/edit"><i class="fa fa-pencil"></i></a>';
    }

    public function getDeleteAttribute()
    {
    	return '<a onclick="del('.$this->id.', 1)" href="#"><i class="fa fa-trash"></i></a>';
    }

   	public function getActionsAttribute()
   	{
   		return $this->edit . '&nbsp; &nbsp;' . $this->delete; 
   	}
}
