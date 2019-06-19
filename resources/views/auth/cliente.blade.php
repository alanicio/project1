@extends('login_style')
@section('content')
    <div class="container">
        <div class="row justify-content-center">                                    
            

            <form id="cliente" action="{{url('cliente')}}" method="POST">
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Direccion de correo</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="correo_cliente">
                <small id="emailHelp" class="form-text text-muted">Monitorice el estatus de su pedido.</small>
              </div>
              <button type="submit" class="btn btn-primary">Monitorizar</button>
            </form>

        </div>
    </div>
@endsection
