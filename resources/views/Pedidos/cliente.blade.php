@extends('clientes')
@section('content')
  <!-- <table class="table table-propia">
    <thead>
      <tr>
        <th scope="col">FECHA Y HORA</th>
        <th scope="col">STATUS</th>
        <th scope="col">FECHA DE ENTREGA</th>
      </tr>
    </thead>
      <tbody>
      	@foreach($pedidos as $pedido)
  	  	  	<tr>
  	  	      <td>{{$pedido->created_at->format('d/m/y')}} a las {{$pedido->created_at->format('H:i')}}</td>
              @if($pedido->status==1)
  	  	        <td style="background-color: red; width: 150px; text-align: center; color: white">Por procesar</td>
              @elseif($pedido->status==2)
                <td style="background-color: yellow; width: 150px; text-align: center; color: white">Procesand</td>
              @elseif($pedido->status==3)
                <td style="background-color: green; width: 150px; text-align: center; color: white">Entregado</td>
              @endif
              <td>{{date('d/m/y',strtotime($pedido->fecha_entrega))}}</td>
  	  	    </tr>
      	@endforeach
      </tbody>
  </table>
 -->
 <!-- <span class="border border-dark">texto</span> -->
  @foreach($pedidos as $pedido)
    <table class="border border-dark table table-borderless table-cliente">
      <thead>
        <tr>
          <th scope="col" style="width:200px; ">FECHA Y HORA</th>
          <th scope="col">STATUS</th>
          <th scope="col">COMENTARIOS</th>
          <th scope="col">FECHA DE ENTREGA</th>
        </tr>
      </thead>
      <tbody>
        
            <tr>
              <td>{{$pedido->created_at->format('d/m/y')}} a las {{$pedido->created_at->format('H:i')}}</td>
              @if($pedido->status==1)
                <td style="background-color: red; width: 150px; text-align: center; color: white">Por procesar</td>
              @elseif($pedido->status==2)
                <td style="background-color: yellow; width: 150px; text-align: center; color: white">Procesand</td>
              @elseif($pedido->status==3)
                <td style="background-color: green; width: 150px; text-align: center; color: white">Entregado</td>
              @endif
              <td>{{$pedido->comentarios_publicos}}</td>
              <td>{{date('d/m/y',strtotime($pedido->fecha_entrega))}}</td>
            </tr>
       
      </tbody> 
    </table>
  @endforeach

  
@endsection