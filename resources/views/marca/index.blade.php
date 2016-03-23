@extends('layouts.admin')

@section('content')
<hr>
<div class="container admin">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Marcas</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<table id="table"></table>
	  	</div>
	  	<div class="row">
	  		<a href="{!! action('MarcaController@create') !!}" class="btn btn-primary">Nueva Marca</a>
	  	</div>
	  </div>
	</div>
</div>
@endsection

@section('scripts')
	<script>
		$('#table').bootstrapTable({
		    url: '/api/getAllMarcas',
		    columns: [{
		        field: 'id',
		        title: 'Id',
		        align: 'center',
		    }, {
		        field: 'nombre',
		        title: 'Nombre',
		        align: 'center',
		    }, {
		        field: 'logo',
		        title: 'Tiene Logo',
		        align: 'center'
		    }, {
		        field: 'url',
		        title: 'Url',
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