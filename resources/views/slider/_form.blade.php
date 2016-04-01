<div class="col-xs-12 col-md-6">
	<div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
		<label for="imagen">Imagen</label>
		<input type="file" id="imagen" name="imagen" class="form-control">
		@if ($errors->has('imagen'))
            <span class="help-block">
                <strong>{{ $errors->first('imagen') }}</strong>
            </span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
		<label for="title">Titulo</label>
		{!! Form::text('title', old('title'), ['id' => 'title', 'class' => 'form-control']) !!}
		@if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
	</div>
</div>