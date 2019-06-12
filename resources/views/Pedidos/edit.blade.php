@extends('principal')
@section('content')
<style type="text/css">
  .traffic-light {
  display: block;
  left: 50%;
  top: 50%;
  background-color: #e0e0e0;
  width: 175px;
  height: 60px;
  border-radius: 100px;
}
input {
  appearance: none;
  user-select: none;
  outline: none;
  width: 30px;
  height: 30px;
  margin-top: 15px;
  margin-left: 18px;
  border-radius: 100%;
}
input.color1 {
  background-color: #bd0903;
  box-shadow: 0em 0px 0px 5px #bd0903;
}
input.color1:hover {
  background-color: #fc625d;
  box-shadow: 0em 0px 0px 5px #fc625d;
}
input.color1:checked {
  background-color: #fc625d;
  box-shadow: 0em 0px 0px 5px #fc625d;
}
input.color2 {
  background-color: #a26d02;
  box-shadow: 0em 0px 0px 5px #a26d02;
}
input.color2:hover {
  background-color: #fdbe40;
  box-shadow: 0em 0px 0px 5px #fdbe40;
}
input.color2:checked {
  background-color: #fdbe40;
  box-shadow: 0em 0px 0px 5px #fdbe40;
}
input.color3 {
  background-color: #15511e;
  box-shadow: 0em 0px 0px 5px #15511e;
}
input.color3:hover {
  background-color: #34cb4a;
  box-shadow: 0em 0px 0px 5px #34cb4a;
}
input.color3:checked {
  background-color: #34cb4a;
  box-shadow: 0em 0px 0px 5px #34cb4a;
}
* {
  user-select: none;
  outline: none;
}
</style>

<div class="card">
  <div class="card-header">
	<label for="basic-url">Orden: {{$pedido->orden}}</label>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="basic-addon3">Empleado asignado</span>
	  </div>
	  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$pedido->empleado->name}}" readonly="">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="basic-addon3">Proveedor objetivo</span>
	  </div>
	  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$pedido->proveedor->nombre}}" readonly="">
	</div>
  </div>
  <div class="card-body">
  	<form method="POST" action="{{route('pedidos.update',['id'=>$pedido->id])}}">
  		{{ csrf_field() }}
  		{{ method_field('PUT') }}	
	    <div class="traffic-light">
		  <input type="radio" name="status" class="color1" value="1" {{$pedido->status==1? 'checked="checked"':''}} >
		  <input type="radio" name="status" class="color2" value="2" {{$pedido->status==2? 'checked="checked"':''}}>
		  <input type="radio" name="status" class="color3" value="3" {{$pedido->status==3? 'checked="checked"':''}}>		  
		</div>
		<br>
		<button type="submit" class="btn btn-warning">Guardar status</button>
  	</form>


  </div>
</div>



	
@endsection