@inject('slider', 'App\Slider')

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
	  		@if($slider->count() >= 5)
	  		<p>Se ha alcanzado el n&uacute;mero m&aacute;ximo de sliders. Elimine alguno para agregar m&aacute;s</p>
	  		@else
	  		<a href="{!! action('SliderController@create') !!}" class="btn btn-primary">Nuevo Slider</a>
	  		@endif
	  	</div>
	  	<div class="clear-fix"></div>
	  	<hr>
	  	<h3>Vista Previa</h3>
	  	<hr>
	  	<div class="flexslider-container">
		    <div class="flexslider">
		        <ul class="slides">
		            @foreach($sliders as $slider)
		            <li style="background-image: url({{$slider->image}});">
		                <div class="flex-capition">
		                    <p class="{{$slider->invertirfuente == 1 ? 'flex-slider_title-invert' : 'flex-slider_title'}}">{{ $slider->title }}</p>
		                    <p class="{{$slider->invertirfuente == 1 ? 'flex-slider_text-invert' : 'flex-slider_text'}}">{{ $slider->text }}</p>
		                </div>
		            </li>
		            @endforeach
		        </ul>
		    </div>
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
		        field: 'fuente',
		        title: 'Color fuente',
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