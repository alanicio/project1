<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = 'archivos';
    protected $fillable = [
        'nombre', 'pedido_id',
    ];

   
    protected $hidden = [
        'remember_token',
    ];

    public function pedido(){
    	return $this->belongsTo('App\Pedido','pedido_id');
    }
}
