@extends('principal')
@section('content')
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Empleado asignado</th>
        <th scope="col">Proveedor</th>
        <th scope="col">No de orden</th>
        <th scope="col">Guia</th>
        <th scope="col">Fecha y hora en que se hizo el pedido</th>
        <th scope="col">Status</th>
        <th>Accion</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($pedidos as $pedido)
	  	  	<tr>
	  	      <th scope="row">{{$pedido->id}}</th>
	  	      <td>{{$pedido->empleado->name}}</td>
	  	      <td>{{$pedido->proveedor->nombre}}</td>
	  	      <td>{{$pedido->orden}}</td>
	  	      <td>{{$pedido->guia}}</td>
	  	      <td>{{$pedido->created_at->toDateString()}} a las {{$pedido->created_at->format('H:i:s')}}</td>
            @if($pedido->status==1)
	  	        <td style="background-color: red"></td>
            @elseif($pedido->status==2)
              <td style="background-color: yellow"></td>
            @elseif($pedido->status==3)
              <td style="background-color: green"></td>
            @endif
            <td>
              @if(Auth::user()->id==$pedido->empleado->id)
                <a type="button" class="btn btn-info" href="{{route('pedidos.edit',['id'=>$pedido->id])}}"><i class="fas fa-eye"></i>Ver mas</a>
              @else
                Ninguna
              @endif
            </td>
	  	    </tr>
    	@endforeach
    </tbody>
  </table>

  
@endsection