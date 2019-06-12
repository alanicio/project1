<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    
	protected $table = 'pedidos';
    protected $fillable = [
        'empleado_id',
        'proveedor_id',
        'orden',
        'guia',
        'status'
    ];

   
    protected $hidden = [
        'remember_token','created_at',
    ];

    public function empleado(){
    	return $this->belongsTo('App\User','empleado_id');
    }

    public function proveedor(){
    	return $this->belongsTo('App\Proveedor','proveedor_id');
    }
}
