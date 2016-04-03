@extends('layouts.admin')

@section('content')
<div class="container admin">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Slider</h3>
	  </div>
	  <div class="panel-body">
	  	{!! Form::model($slider, ['method' => 'PATCH', 'action' => ['SliderController@update', $slider->id ]]) !!}
	  		<div class="row">
	  			<div class="col-xs-12 col-md-offset-3 col-md-6">
					<h4>Si no desea cambiar la imagen no seleccione ning&uacute;n archivo</h4>
	  			</div>
	  		</div>
	  		<div class="clear-fix"></div>
	  		@include('slider._form')
	  	{!! Form::close() !!}
	  </div>
	</div>
</div>
@endsection