@extends('principal')
@section('content')
	<form method="POST" action="{{route('pedidos.store')}}">
	  {{ csrf_field() }}
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Empleado</label>
			</div>
			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="empleado_name" value="{{ Auth::user()->name }}" readonly="">
			<input type="hidden" name="empleado_id" value="{{ Auth::user()->id }}">
			
			<!-- <select class="custom-select" id="inputGroupSelect01" name="empleado_id">
				<option selected>Empleado al que se le asignara el pedido</option>
				@foreach($empleados as $empleado)
					<option value="{{$empleado->id}}">{{$empleado->name}}</option>
				@endforeach
			</select> -->
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Proveedor</label>
			</div>
			<select class="custom-select" id="inputGroupSelect01" name="proveedor_id">
				<option selected>Proveedor que dara el producto</option>
				@foreach($proveedores as $proveedor)
					<option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
				@endforeach
			</select>
		</div>
		
		<div class="form-group">
	      <label for="exampleInputEmail1">Numero de orden</label>
	      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="orden">
	    </div>
	    <div class="form-group">
	      <label for="exampleInputEmail1">Correo del cliente</label>
	      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo_cliente">
	    </div>
	    <div class="form-group">
	      <label for="exampleInputEmail1">Fecha de entrega estimada</label>
	      <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fecha_entrega">
	    </div>

	  <!-- <div class="form-group">
	    <label for="exampleInputEmail1">Descripcion</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese la descripcion" name="descripcion">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Direccion</label>
	    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese la direccion del proveedor" name="direccion">
	  </div> -->
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection