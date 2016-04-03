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
	  	<div class="clear-fix"></div>
	  	<hr>
	  	<h3>Vista Previa</h3>
	  	<hr>
	  	<div class="flexslider">
			<ul class="slides">
				@foreach($sliders as $slider)
				<li style="background-image: url({{$slider->image}});">
					<p class="flex-caption">Adventurer Cheesecake Brownie</p>
				</li>
				@endforeach
			</ul>
		</div>
		<div class="clear-fix"></div>
	  </div>
	</div>
</div>
@endsection

@section('scripts')
	<script>
		$('#table').bootstrapTable({
		    url: '/api/getAllSliders',
		    columns: [{
		        field: 'title',
		        title: 'Titulo',
		        align: 'center'
		    }, {
		        field: 'text',
		        title: 'Texto',
		        align: 'center'
		    }, {
		        field: 'actions',
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
	<script>
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide"
			});
		});
	</script>
@endsection