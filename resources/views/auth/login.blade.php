@extends('login_style')
@section('content')

@if(Auth::check())
     <script>window.location = "/principal";</script>
@endif
<div class="container">
    <div class="row justify-content-center">                                    
        <form method="POST" action="{{ route('login') }}" id="principal_login">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Recuerdame') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-2">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Entrar') }}
                    </button>

                    <!-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Olvidaste tu contra?') }}
                        </a>
                    @endif -->
                </div>
            </div>
        </form>

        <form style="display: none" id="cliente" action="{{url('cliente')}}" method="POST">
            @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Direccion de correo</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="correo_cliente">
            <small id="emailHelp" class="form-text text-muted">Monitorice el estatus de su pedido.</small>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <a type="button" id="login_cliente" class="btn btn-info"><i class="fas fa-eye">Monitorizar mi pedido</a>  
    </div>
</div>

<script type="text/javascript">
    var a=1;
   $('#login_cliente').click(function(){
        
        if(a)
        {
            $('#principal_login').hide();
            $(this).html('Ingresar como empleado');
            $('#cliente').show();
            a=0;
        }
        else
        {
            $('#principal_login').show();
            $(this).html('IMonitorizar mi pedido');
            $('#cliente').hide();
            a=1;
        }
        
   })
</script>
@endsection
