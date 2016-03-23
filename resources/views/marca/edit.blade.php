@extends('layouts.admin')

@section('content')
<div class="container admin">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Marca</h3>
	  </div>
	  <div class="panel-body">
	  	{!! Form::model($marca, ['method' => 'PATCH', 'action' => ['MarcaController@update', $marca->id ]]) !!}
	  		@include('marca._form')
	  	{!! Form::close() !!}
	  </div>
	</div>
</div>
@endsection