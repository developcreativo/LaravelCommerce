@extends('layouts.admin')

@section('content')
<div class="container admin">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Un paso más...</h3>
	  </div>
	  <div class="panel-body">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<form id="addFotosForm"
				action="{{ route('store_foto_producto', ['producto' => $producto]) }}"
				method="POST"
				class="dropzone">
				{{ csrf_field() }}
			</form>
			<hr>
			@foreach($producto->fotos->chunk(4) as $set)
				<div class="row">
				@foreach($set as $foto)
				<div class="col-xs-12 col-md-3">
					<img src="{{ $foto->ruta_miniatura }}" alt="" class="img-responsive">
				</div>
				@endforeach			
				</div>	
				<div class="clear-fix"></div>
			@endforeach
			</div>
		</div>
	  </div>
	</div>
</div>
@endsection

@section('scripts')
	<script>
		Dropzone.options.addFotosForm = {
			paramName: 'foto',
			acceptedFiles: '.jpg, .png, .jpeg, .bmp',
			dictDefaultMessage: 'Arrastra las fotos aquí'
		}
	</script>
@stop