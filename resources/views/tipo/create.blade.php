@extends('layouts.admin')

@section('content')
<div class="container admin">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Nuevo Tipo</h3>
	  </div>
	  <div class="panel-body">
	  	{!! Form::open(['method' => 'POST', 'action' => 'TipoController@store']) !!}
	  		@include('tipo._form')
	  	{!! Form::close() !!}
	  </div>
	</div>
</div>
@endsection
