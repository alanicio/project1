@extends('principal')
@section('content')
<div class="row">
  <div>
    <form action="{{url('pedidos/'.$pedido->id.'/storeArchivos')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlFile1">Archivo</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
        </div>
        <button type="submit" class="btn btn-primary">Cargar archivo</button>
    </form>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Archivos subidos para este pedido</h5>
        <p class="card-text">Clickee un archivo para verlo.</p>
      </div>
      <ul class="list-group list-group-flush">
        @foreach ($archivos as $archivo)
            <li class="list-group-item"><a href="/storage/pedidos_files/{{$archivo->nombre}}" target="_blank" class="card-link">{{$archivo->nombre}}</a></li>
        @endforeach
      </ul>
    </div>
  </div>
  <form action="{{url('pedidos/'.$pedido->id.'/storeData')}}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Comentarios Publicos</label>
        <textarea class="form-control" id="publicos" rows="3" name="publicos">{{$pedido->comentarios_publicos}}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Comentarios Privados</label>
        <textarea class="form-control" id="privados" rows="3" name="privados">{{$pedido->comentarios_privados}}</textarea>
      </div>
      <label>Guia</label>
      <input type="text" class="form-control" id="{{$pedido->id}}" aria-describedby="emailHelp" name="guia" value="{{$pedido->guia}}">  
    </div>
    <button type="submit" class="btn btn-primary">Guardar datos</button>
  </form>
</div>

@endsection