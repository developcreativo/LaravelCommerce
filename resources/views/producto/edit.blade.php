@extends('layouts.admin')

@section('content')
<div class="container admin">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Nuevo Producto</h3>
	  </div>
	  <div class="panel-body">
	  	{!! Form::model($producto, ['method' => 'PATCH', 'action' => ['ProductoController@update', $producto->id ]]) !!}
	  		@include('producto._form')
	  	{!! Form::close() !!}
	  </div>
	</div>
</div>

@include('modal.categorias')
@include('modal.tipos')
@include('modal.marcas')

@endsection

@section('scripts')
<script>
	$(document).ready(function($) {
	});
</script>
@endsection