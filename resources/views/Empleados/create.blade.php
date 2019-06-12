@extends('principal')
@section('content')
  <form method="POST" action={{route('empleados.store')}}>
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese nombre del empleado" name="name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Correo</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese correo" name="email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection