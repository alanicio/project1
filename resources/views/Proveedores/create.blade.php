@extends('principal')
@section('content')
  <form method="POST" action={{route('proveedores.store')}}>
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese nombre del proveedor" name="nombre" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Descripcion</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese la descripcion" name="descripcion" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Direccion</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese la direccion del proveedor" name="direccion" required="">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection