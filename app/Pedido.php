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
        'status',
        'correo_cliente',
        'fecha_entrega',
        'comentarios_publicos',
        'comentarios_privados',
        'envio_a_cargo_de'
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

    public function archivos(){
        return $this->hasMany('App\Archivo');
    }
}
