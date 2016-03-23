@extends('layouts.admin')

@section('content')
<div class="container admin">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Nueva Categor&iacute;a</h3>
	  </div>
	  <div class="panel-body">
	  	{!! Form::open(['method' => 'POST', 'action' => 'CategoriaController@store']) !!}
	  		@include('categoria._form')
	  	{!! Form::close() !!}
	  </div>
	</div>
</div>
@endsection

@section('scripts')
<script>
	$(document).ready(function($) {

	});
</script>
@endsection