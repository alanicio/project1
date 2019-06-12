@extends('principal')
@section('content')
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <!-- <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
  	@foreach($empleados as $empleado)
	  	<tr>
	      <th scope="row">{{$empleado->id}}</th>
	      <td>{{$empleado->name}}</td>
	      <td>{{$empleado->email}}</td>
	    </tr>
  	@endforeach
  </tbody>
</table>

@endsection