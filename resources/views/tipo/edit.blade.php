@extends('layouts.admin')

@section('content')
<div class="container admin">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Tipo</h3>
	  </div>
	  <div class="panel-body">
	  	{!! Form::model($tipo, ['method' => 'PATCH', 'action' => ['TipoController@update', $tipo->id ]]) !!}
	  		@include('tipo._form')
	  	{!! Form::close() !!}
	  </div>
	</div>
</div>
@endsection
