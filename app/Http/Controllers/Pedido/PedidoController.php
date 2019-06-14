<?php

namespace App\Http\Controllers\Pedido;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pedido;
use App\User;
use App\Proveedor;
use App\Archivo;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $pedidos=Pedido::where('status','!=',3)->get();
        return view('Pedidos.index',['pedidos'=>$pedidos]);   
    }

    public function finalizadosIndex()
    {
        $pedidos=Pedido::where('status',3)->get();
        return view('Pedidos.index',['pedidos'=>$pedidos]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pedidos.create',['empleados'=>User::get(),'proveedores'=>Proveedor::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pedido::create($request->all());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido=Pedido::find($id);
        return view('Pedidos.edit',['pedido'=>$pedido]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);
        $pedido=Pedido::find($id);
        $pedido->status=$request->status;
        $pedido->update();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function clientePedido(Request $request)
    {
        //dd($request->all());
        $pedidos=Pedido::where('correo_cliente',$request->correo_cliente)->get();
        return view('Pedidos.cliente',['pedidos'=>$pedidos]);
    }

    public function statusUpdate(Request $request,$id)
    {
        $pedido=Pedido::find($id);
        $pedido->status=$request->status;
        $pedido->update();
        return 'status cambiado';
    }

    public function guiaStore(Request $request,$id)
    {
        $pedido=Pedido::find($id);
        $pedido->guia=$request->guia;
        $pedido->update();
        return 'guia actualizada';
    }

    public function archivoCreate($id)
    {
        $archivos=Pedido::find($id)->archivos->all();
        return view('Pedidos.archivos',['pedido'=>Pedido::find($id),'archivos'=>$archivos]);
    }

    public function archivoStore(Request $request,$id)
    {
        $request->file->storeAs('pedidos_files',$request->file->getClientOriginalName());
        $archivo=new Archivo($request->all());
        $archivo->nombre=$request->file->getClientOriginalName();
        $archivo->pedido_id=$id;
        $archivo->save();
        return $this->archivoCreate($id);
    }
}
