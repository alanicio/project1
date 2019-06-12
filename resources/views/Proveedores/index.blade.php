@extends('principal')
@section('content')
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Direccion</th>
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