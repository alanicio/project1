@extends('principal')
@section('content')
	<div class="badge badge-primary text-wrap" style="width: 18rem;">
		<h4>Bienvenid@ {{Auth::user()->name}}</h4>
	</div>
@endsection
