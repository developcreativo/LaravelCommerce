@extends('layouts.admin')

@section('content')
<div class="container admin">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Nuevo Elemento del Slider</h3>
	  </div>
	  <div class="panel-body">
	  	{!! Form::open(['method' => 'POST', 'action' => 'SliderController@store', 'files' => true]) !!}
	  		@include('slider._form')
	  	{!! Form::close() !!}
	  </div>
	</div>
</div>
@endsection
