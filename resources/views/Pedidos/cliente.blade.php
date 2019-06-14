@extends('clientes')
@section('content')
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Fecha y hora</th>
        <th scope="col">Status</th>
        <th scope="col">Leyenda de status</th>
        <th scope="col">Fecha estimada de entrega</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($pedidos as $pedido)
	  	  	<tr>
	  	      <td>{{$pedido->created_at->format('d/m/y')}} a las {{$pedido->created_at->format('H:i')}}</td>
            @if($pedido->status==1)
	  	        <td style="background-color: red"></td>
              <td>Por procesar</td>
            @elseif($pedido->status==2)
              <td style="background-color: yellow"></td>
              <td>Procesando</td>
            @elseif($pedido->status==3)
              <td style="background-color: green"></td>
              <td>Entregado</td>
            @endif
            <td>{{date('d/m/y',strtotime($pedido->fecha_entrega))}}</td>
	  	    </tr>
    	@endforeach
    </tbody>
  </table>

  
@endsection