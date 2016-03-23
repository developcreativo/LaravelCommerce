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
		        align: 'center',
		        filterControl: 'input'
		    }, {
		        field: 'titulo',
		        title: 'Titulo',
		        align: 'center',
		        filterControl: 'input'
		    }, {
		        field: 'categoria',
		        title: 'Categoría',
		        align: 'center',
		        filterControl: 'select'
		    }, {
		        field: 'tipo',
		        title: 'Tipo',
		        align: 'center',
		        filterControl: 'select'
		    }, {
		        field: 'marca',
		        title: 'Marca',
		        align: 'center',
		        filterControl: 'select'
		    }, {
		        field: 'precio',
		        title: 'Precio',
		        align: 'center',
		        filterControl: 'input'
		    }, {
		        field: 'acciones',
		        title: 'Acciones',
		        align: 'center'
		    },],
		    filterShowClear: true,
            align: 'center',
            valign: 'center',
            searchFormatter: true,
            filterControl: true,
            pagination: true,
            pageSize: 20
		});
	</script>
@endsection