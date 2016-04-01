@extends('layouts.admin')

@section('content')
<hr>
<div class="container admin">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Sliders</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<table id="table"></table>
	  	</div>
	  	<div class="row">
	  		<a href="{!! action('SliderController@create') !!}" class="btn btn-primary">Nuevo Slider</a>
	  	</div>
	  </div>
	</div>
</div>
@endsection

@section('scripts')
	<script>
		$('#table').bootstrapTable({
		    url: '/api/getAllSliders',
		    columns: [{
		        field: 'titulo',
		        title: 'Titulo',
		        align: 'center'
		    }, {
		        field: 'texto',
		        title: 'texto',
		        align: 'center'
		    }, {
		        field: 'acciones',
		        title: 'Acciones',
		        align: 'center'
		    },],
		    filterShowClear: true,
            align: 'center',
            valign: 'center',
            searchFormatter: true,
            pagination: true,
            pageSize: 10
		});
	</script>
@endsection