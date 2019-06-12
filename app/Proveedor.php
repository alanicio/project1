<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
	protected $table = 'proveedores';
     protected $fillable = [
        'nombre', 'descripcion', 'direccion',
    ];

   
    protected $hidden = [
        'remember_token',
    ];
}
