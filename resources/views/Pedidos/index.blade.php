@extends('principal')
@section('content')
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Empleado asignado</th>
        <th scope="col">Proveedor</th>
        <th scope="col">Orden</th>
        <th scope="col">Guia</th>
        <th scope="col">Fecha y hora</th>
        <th scope="col">Fecha entrega</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($pedidos as $pedido)
	  	  	<tr>
	  	      <th scope="row">{{$pedido->id}}</th>
	  	      <td>{{$pedido->empleado->name}}</td>
	  	      <td>{{$pedido->proveedor->nombre}}</td>
	  	      <td>{{$pedido->orden}}</td>
	  	      <td>
              @if($pedido->status!=3)
                <input type="text" class="form-control" id="{{$pedido->id}}" aria-describedby="emailHelp" name="guia" value="{{$pedido->guia}}" >  
              @else
                {{$pedido->guia}} 
              @endif
              
            </td>
	  	      <td>{{$pedido->created_at->format('d/m/y')}} a las {{$pedido->created_at->format('H:i')}}</td>
            <td>{{date('d/m/y',strtotime($pedido->fecha_entrega))}}</td>
	  	        
              <div class="traffic-light">
                @if($pedido->status!=3)
                  <td>
                    <input type="radio" name="{{$pedido->id}}" class="color1" value="1" {{$pedido->status==1? 'checked="checked"':''}}>
                    <input type="radio" name="{{$pedido->id}}" class="color2" value="2" {{$pedido->status==2? 'checked="checked"':''}}>
                    <input type="radio" name="{{$pedido->id}}" class="color3" value="3" {{$pedido->status==3? 'checked="checked"':''}}>
                  </td>
                @else
                  <td style="background-color: green"></td>
                @endif
                      
                </div>  
	  	    </tr>
    	@endforeach
    </tbody>
  </table>
  <script type="text/javascript">
    $('[type="text"]').change(function(){
      $.ajax({
          url:"{{url('/guia')}}/"+$(this).attr("id"),
          type:'POST',
          data:{"_token": "{{CSRF_TOKEN()}}",
                "guia":$(this).val(),
                  },
          success: function(res){
            //location.reload(true);
          },
        });
    });

    $('input[type="radio"]').change(function(){
      var status=$(this).val();
      var save=0;
      if(status==3)
      {
          swal("¿Esta seguro de dar por entregado este pedido?", {
            buttons: {
              Si: true,
              cancel: "No",    
            },
          })
          .then((value) => {
            if(value!='Si')
            {
              location.reload(true);

            }
            else{
              $.ajax({
                url:"{{url('/status')}}/"+$(this).attr("name"),
                type:'POST',
                data:{"_token": "{{CSRF_TOKEN()}}",
                      "status":status,
                        },
                success: function(res){
                  location.reload(true);;
                },
              });
            }
          });
      }
      else
      {
        save=1;
      }
      //alert($(this).attr("name"));
      //alert($(this).val());
      console.log(save);
      if(save)
      {
        $.ajax({
          url:"{{url('/status')}}/"+$(this).attr("name"),
          type:'POST',
          data:{"_token": "{{CSRF_TOKEN()}}",
                "status":status,
                  },
          success: function(res){
            //location.reload(true);
          },
        });
      }
        
      
        
    });
  </script>
@endsection