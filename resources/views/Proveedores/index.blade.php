@extends('principal')
@section('content')
  <table class="table table-propia">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">DESCRIPCION</th>
        <th scope="col">DIRECCION</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($proveedores as $proveedor)
  	  	<tr>
  	      <th scope="row">{{$proveedor->id}}</th>
  	      <td>{{$proveedor->nombre}}</td>
  	      <td>{{$proveedor->descripcion}}</td>
  	      <td>{{$proveedor->direccion}}</td>
  	    </tr>
    	@endforeach
    </tbody>
  </table>
@endsection