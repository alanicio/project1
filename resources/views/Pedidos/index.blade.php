@extends('principal')
@section('content')
  <table class="table table-propia">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">PROVEEDOR</th>
        <th scope="col">ORDEN</th>
<!--         <th scope="col">GUIA</th> -->
        <th scope="col">ENTREGA</th>
        <th scope="col">STATUS</th>
        <th scope="col">INFO</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($pedidos as $pedido)
	  	  	<tr>
	  	      <th scope="row">{{$pedido->id}}</th>
	  	      <td>{{$pedido->proveedor->nombre}}</td>
	  	      <td>{{$pedido->orden}}</td>
	  	      <!-- <td>
              @if($pedido->status!=3)
                <input type="text" class="form-control" id="{{$pedido->id}}" aria-describedby="emailHelp" name="guia" value="{{$pedido->guia}}" style="width: 200px">  
              @else
                {{$pedido->guia}} 
              @endif
              
            </td> -->
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
                <td>
                  <a href="{{url('pedidos/'.$pedido->id.'/archivos')}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i><strong> Ver mas</strong></a>
                </td>                      
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
            if(value!='Si')//selecciono no o cancelar
            {
              save=0;
              window.location.href = "{{route('pedidos.index')}}";
            }
            else{
              $.ajax({
                url:"{{url('/status')}}/"+$(this).attr("name"),
                type:'POST',
                data:{"_token": "{{CSRF_TOKEN()}}",
                      "status":status,
                        },
                success: function(res){
                  window.location.href = "{{route('pedidos_finalizados')}}";
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