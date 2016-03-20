@extends('layouts.admin')

@section('content')
<div class="container admin">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Categoría</h3>
	  </div>
	  <div class="panel-body">
	  	{!! Form::model($categoria, ['method' => 'PATCH', 'action' => ['CategoriaController@update', $categoria->id ]]) !!}
	  		@include('categoria._form')
	  	{!! Form::close() !!}
	  </div>
	</div>
</div>

@include('modal.categorias')
@include('modal.tipos')
@include('modal.marcas')

@endsection
