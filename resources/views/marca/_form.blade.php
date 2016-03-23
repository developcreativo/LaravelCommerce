<div class="row">
	<div class="col-xs-12 col-md-8 col-md-offset-2">
		<div class="from-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
			<label for="nombre">Nombre</label>
			{!! Form::text('nombre', null, ['id' => 'nombre', 'class' => 'form-control']) !!}
			@if ($errors->has('nombre'))
	            <span class="help-block">
	                <strong>{{ $errors->first('nombre') }}</strong>
	            </span>
            @endif
		</div>

		<br>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</div>
</div>