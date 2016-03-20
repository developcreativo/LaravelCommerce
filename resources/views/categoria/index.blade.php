@extends('layouts.admin')

@section('content')
<hr>
<div class="container admin">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Categorias</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<table id="table"></table>
	  	</div>
	  	<div class="row">
	  		<a href="{!! action('CategoriaController@create') !!}" class="btn btn-primary">Nueva Categoría</a>
	  	</div>
	  </div>
	</div>
</div>
@endsection

@section('scripts')
	<script>
		$('#table').bootstrapTable({
		    url: '/api/getAllCategorias',
		    columns: [{
		        field: 'id',
		        title: 'Id',
		        align: 'center',
		    }, {
		        field: 'nombre_es',
		        title: 'Titulo español',
		        align: 'center',
		    }, {
		        field: 'nombre_en',
		        title: 'Titulo inglés',
		        align: 'center'
		    }, {
		        field: 'nombre_br',
		        title: 'Titulo inglés',
		        align: 'center'
		    }, {
		        field: 'imagen',
		        title: 'Imagen',
		        align: 'center'
		    }, {
		        field: 'acciones',
		        title: 'Acciones',
		        align: 'center'
		    },],
		    search: true,
		    pagination: true,
		    striped: true
		});
	</script>
	@include('errors.alerts');
@endsection