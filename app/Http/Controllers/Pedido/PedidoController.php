<?php

namespace App\Http\Controllers\Pedido;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pedido;
use App\User;
use App\Proveedor;
use App\Archivo;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{

    // public function __construct() {
    //     $this->middleware(function ($request, $next) {
    //         if(Auth::check()) {
                
    //             return $next($request);
                              
    //          return redirect('/principal');
                 
    //         }
    //         return redirect('/');           
    //     });
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(Auth::check())
        {

        }
        else
        {
            return redirect('/');
        }
        $pedidos=Pedido::where('status','!=',3)->get();
        return view('Pedidos.index',['pedidos'=>$pedidos]);   
    }

    public function finalizadosIndex()
    {
        if(Auth::check())
        {

        }
        else
        {
            return redirect('/');
        }
        $pedidos=Pedido::where('status',3)->get();
        return view('Pedidos.index',['pedidos'=>$pedidos]);  
    }

    public function pedidoSelected($id)
    {
        if(Auth::check())
        {

        }
        else
        {
            return redirect('/');
        }
        $pedidos=Pedido::where('status','!=',3)->get();
        return view('Pedidos.index',['pedidos'=>$pedidos,'selected'=>$id]);
    }

    public function finalizadoSelected($id)
    {
        if(Auth::check())
        {

        }
        else
        {
            return redirect('/');
        }
        $pedidos=$pedidos=Pedido::where('status',3)->get();
        return view('Pedidos.index',['pedidos'=>$pedidos,'selected'=>$id]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check())
        {

        }
        else
        {
            return redirect('/');
        }
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
        if(Auth::check())
        {

        }
        else
        {
            return redirect('/');
        }
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
        if(Auth::check())
        {

        }
        else
        {
            return redirect('/');
        }
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
        if(Auth::check())
        {

        }
        else
        {
            return redirect('/');
        }
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
        if(Auth::check())
        {

        }
        else
        {
            return redirect('/');
        }
        $pedido=Pedido::find($id);
        $pedido->status=$request->status;
        $pedido->update();
        return 'status cambiado';
    }

    public function guiaStore(Request $request,$id)
    {
        if(Auth::check())
        {

        }
        else
        {
            return redirect('/');
        }
        $pedido=Pedido::find($id);
        $pedido->guia=$request->guia;
        $pedido->update();
        return 'guia actualizada';
    }

    public function archivoCreate($id)
    {
        if(Auth::check())
        {

        }
        else
        {
            return redirect('/');
        }
        $archivos=Pedido::find($id)->archivos->all();
        return view('Pedidos.archivos',['pedido'=>Pedido::find($id),'archivos'=>$archivos]);
    }

    public function archivoStore(Request $request,$id)
    {
        if(Auth::check())
        {

        }
        else
        {
            return redirect('/');
        }
        $request->file->storeAs('pedidos_files',$request->file->getClientOriginalName());
        $archivo=new Archivo($request->all());
        $archivo->nombre=$request->file->getClientOriginalName();
        $archivo->pedido_id=$id;
        $archivo->save();
        return $this->archivoCreate($id);
    }

    public function dataStore(Request $request, $id)
    {
        if(Auth::check())
        {

        }
        else
        {
            return redirect('/');
        }
        $pedido=Pedido::find($id);
        $pedido->comentarios_publicos=$request->publicos;
        $pedido->comentarios_privados=$request->privados;
        $pedido->guia=$request->guia;
        $pedido->envio_a_cargo_de=$request->envio_a_cargo_de;
        $pedido->update();
        return $this->archivoCreate($id);
    }
}
