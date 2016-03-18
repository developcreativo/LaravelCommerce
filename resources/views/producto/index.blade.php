@extends('layouts.admin')

@section('content')
<hr>
<div class="container admin">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Productos</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<table id="table"></table>
	  	</div>
	  	<div class="row">
	  		<a href="{!! action('ProductoController@create') !!}" class="btn btn-primary">Nuevo Producto</a>
	  	</div>
	  </div>
	</div>
</div>
@endsection

@section('scripts')
	<script>
		$('#table').bootstrapTable({
		    url: '/api/getAllProductos',
		    columns: [{
		        field: 'id',
		        title: 'Id',
		        align: 'center'
		    }, {
		        field: 'titulo',
		        title: 'Titulo',
		        align: 'center'
		    }, {
		        field: 'categoria',
		        title: 'Categoría',
		        align: 'center'
		    }, {
		        field: 'tipo',
		        title: 'Tipo',
		        align: 'center'
		    }, {
		        field: 'marca',
		        title: 'Marca',
		        align: 'center'
		    }, {
		        field: 'precio',
		        title: 'Precio',
		        align: 'center'
		    }, {
		        field: 'acciones',
		        title: 'Acciones',
		        align: 'center'
		    },]
		});
	</script>
@endsection