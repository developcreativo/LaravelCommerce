<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'fotos';
    protected $fillable = [
    	'ruta',
    	'ruta_miniatura'
    ];

    /**
     * Get all of the owning fotoable models.
     */
    public function fotoable()
    {
        return $this->morphTo();
    }
}
