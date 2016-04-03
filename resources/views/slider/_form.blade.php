<div class="col-xs-12 col-md-offset-3 col-md-6">
	<div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
		<label for="imagen">Imagen</label>
		{!! Form::file('imagen', null, ['id' => 'imagen', 'class' => 'form-control']) !!}
		@if ($errors->has('imagen'))
            <span class="help-block">
                <strong>{{ $errors->first('imagen') }}</strong>
            </span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
		<label for="title">Titulo</label>
		{!! Form::text('title', old('title'), ['id' => 'title', 'class' => 'form-control', 'accept' => 'image/gif, image/jpeg, image/png']) !!}
		@if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
		<label for="text">Texto</label>
		{!! Form::text('text', old('text'), ['id' => 'text', 'class' => 'form-control']) !!}
		@if ($errors->has('text'))
            <span class="help-block">
                <strong>{{ $errors->first('text') }}</strong>
            </span>
        @endif
	</div>
	<div class="radio">
		<label>
			{!! Form::radio('invertirfuente', 1, true); !!}
			<b>Fuente Negra</b> Seleccione si el la imagen es clara
		</label>
	</div>
	<div class="radio">
		<label>
			{!! Form::radio('invertirfuente', 0, true); !!}
			<b>Fuente Blanca</b> Seleccione si la imagen es oscura
		</label>
	</div>

	<br>
	<button type="submit" class="btn btn-primary">Guardar</button>
</div>

