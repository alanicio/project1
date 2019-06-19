@extends('clientes')
@section('content')
  <table class="table table-propia">
    <thead>
      <tr>
        <th scope="col">FEHCA Y HORA</th>
        <th scope="col">STATUS</th>
        <th scope="col">LEYENDA Y STATUS</th>
        <th scope="col">FECHA DE ENTREGA</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($pedidos as $pedido)
	  	  	<tr>
	  	      <td>{{$pedido->created_at->format('d/m/y')}} a las {{$pedido->created_at->format('H:i')}}</td>
            @if($pedido->status==1)
	  	        <td style="background-color: red; width: 10px;"></td>
              <td>Por procesar</td>
            @elseif($pedido->status==2)
              <td style="background-color: yellow;width: 10px"></td>
              <td>Procesando</td>
            @elseif($pedido->status==3)
              <td style="background-color: green;width: 10px"></td>
              <td>Entregado</td>
            @endif
            <td>{{date('d/m/y',strtotime($pedido->fecha_entrega))}}</td>
	  	    </tr>
    	@endforeach
    </tbody>
  </table>

  
@endsection