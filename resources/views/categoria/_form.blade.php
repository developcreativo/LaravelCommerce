<div class="row">
	<div class="col-xs-12 col-md-8 col-md-offset-2">
		<div class="from-group{{ $errors->has('nombre_es') ? ' has-error' : '' }}">
			<label for="nombre_es">Nombre español:</label>
			{!! Form::text('nombre_es', null, ['id' => 'nombre_es', 'class' => 'form-control']) !!}
			@if ($errors->has('nombre_es'))
	            <span class="help-block">
	                <strong>{{ $errors->first('nombre_es') }}</strong>
	            </span>
            @endif
		</div>
		<div class="from-group{{ $errors->has('nombre_en') ? ' has-error' : '' }}">
			<label for="nombre_en">Nombre inglés:</label>
			{!! Form::text('nombre_en', null, ['id' => 'nombre_en', 'class' => 'form-control']) !!}
			@if ($errors->has('nombre_en'))
	            <span class="help-block">
	                <strong>{{ $errors->first('nombre_en') }}</strong>
	            </span>
            @endif
		</div>
		<div class="from-group{{ $errors->has('nombre_br') ? ' has-error' : '' }}">
			<label for="nombre_br">Nombre portugués:</label>
			{!! Form::text('nombre_br', null, ['id' => 'nombre_br', 'class' => 'form-control']) !!}
			@if ($errors->has('nombre_br'))
	            <span class="help-block">
	                <strong>{{ $errors->first('nombre_br') }}</strong>
	            </span>
            @endif
		</div>

		<br>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</div>
</div>