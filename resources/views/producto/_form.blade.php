<div class="row">
	<div class="col-xs-12 col-md-6">
		<div class="form-group{{ $errors->has('categoria_id') ? ' has-error' : '' }}">
			<label for="">Categoría:</label>
			<div class="input-group">
				{!! Form::select('categoria_id', ['' => 'Seleccione categoría'] + $categorias, null,['id' => 'categoria_id', 'class' => 'form-control']) !!}
		    	<span class="input-group-btn">
		        	<button class="btn btn-default" data-toggle="modal" data-target="#modalCategoria" data-whatever="@mdo" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
		    	</span>
		    </div>
		    @if ($errors->has('categoria_id'))
	            <span class="help-block">
	                <strong>{{ $errors->first('categoria_id') }}</strong>
	            </span>
            @endif
		</div>
		<div class="form-group{{ $errors->has('tipo_id') ? ' has-error' : '' }}">
			<label for="">Tipo:</label>
			<div class="input-group">
		    	{!! Form::select('tipo_id', ['' => 'Seleccione tipo'] + $tipos, null,['id' => 'tipo_id', 'class' => 'form-control']) !!}
		    	<span class="input-group-btn">
		        	<button class="btn btn-default" data-toggle="modal" data-target="#modalTipo" data-whatever="@mdo" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
		    	</span>
		    </div>
		    @if ($errors->has('tipo_id'))
	            <span class="help-block">
	                <strong>{{ $errors->first('tipo_id') }}</strong>
	            </span>
            @endif
		</div>
		<div class="form-group{{ $errors->has('marca_id') ? ' has-error' : '' }}">
			<label for="">Marca:</label>
			<div class="input-group">
		    	{!! Form::select('marca_id', ['' => 'Seleccione marca'] + $marcas, null,['id' => 'marca_id', 'class' => 'form-control']) !!}
		    	<span class="input-group-btn">
		        	<button class="btn btn-default" data-toggle="modal" data-target="#modalMarca" data-whatever="@mdo" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
		    	</span>
		    </div>
		    @if ($errors->has('marca_id'))
	            <span class="help-block">
	                <strong>{{ $errors->first('marca_id') }}</strong>
	            </span>
            @endif
		</div>

		<div class="from-group{{ $errors->has('titulo_es') ? ' has-error' : '' }}">
			<label for="titulo_es">Titulo español:</label>
			{!! Form::text('titulo_es', null, ['id' => 'titulo_es', 'class' => 'form-control']) !!}
			@if ($errors->has('titulo_es'))
	            <span class="help-block">
	                <strong>{{ $errors->first('titulo_es') }}</strong>
	            </span>
            @endif
		</div>
		<div class="from-group{{ $errors->has('descripcion_es') ? ' has-error' : '' }}">
			<label for="">Descripción español:</label>
			{!! Form::textarea('descripcion_es', null, ['id' => 'descripcion_es', 'class' => 'form-control']) !!}
			<script>
				CKEDITOR.replace( 'descripcion_es' );
			</script>
			@if ($errors->has('descripcion_es'))
	            <span class="help-block">
	                <strong>{{ $errors->first('descripcion_es') }}</strong>
	            </span>
            @endif
		</div>
		<br>
		<div class="from-group{{ $errors->has('titulo_en') ? ' has-error' : '' }}">
			<label for="titulo_en">Titulo ingles:</label>
			{!! Form::text('titulo_en', null, ['id' => 'titulo_en', 'class' => 'form-control']) !!}
			@if ($errors->has('titulo_en'))
	            <span class="help-block">
	                <strong>{{ $errors->first('titulo_en') }}</strong>
	            </span>
            @endif
		</div>
		<div class="from-group{{ $errors->has('descripcion_br') ? ' has-error' : '' }}">
			<label for="">Descripción ingles:</label>
			{!! Form::textarea('descripcion_en', null, ['id' => 'descripcion_en', 'class' => 'form-control']) !!}
			<script>
				CKEDITOR.replace( 'descripcion_en' );
			</script>
			@if ($errors->has('descripcion_br'))
	            <span class="help-block">
	                <strong>{{ $errors->first('descripcion_br') }}</strong>
	            </span>
            @endif
		</div>
		<br>
		<div class="from-group{{ $errors->has('titulo_br') ? ' has-error' : '' }}">
			<label for="titulo_br">Titulo portugués:</label>
			{!! Form::text('titulo_br', null, ['id' => 'titulo_br', 'class' => 'form-control']) !!}
			@if ($errors->has('titulo_br'))
	            <span class="help-block">
	                <strong>{{ $errors->first('titulo_br') }}</strong>
	            </span>
            @endif
		</div>
		<div class="from-group{{ $errors->has('descripcion_br') ? ' has-error' : '' }}">
			<label for="">Descripción portugués:</label>
			{!! Form::textarea('descripcion_br', null, ['id' => 'descripcion_br', 'class' => 'form-control']) !!}
			<script>
				CKEDITOR.replace( 'descripcion_br' );
			</script>
			@if ($errors->has('descripcion_br'))
	            <span class="help-block">
	                <strong>{{ $errors->first('descripcion_br') }}</strong>
	            </span>
            @endif
		</div>
		<br>
	</div>
	<div class="col-xs-12 col-md-6">
		<div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
			<div>
				<label for="">Precio</label>
			</div>
			<div class="col-md-4">
				{!! Form::select('moneda_id', $monedas, null,['id' => 'moneda_id', 'class' => 'form-control']) !!}
			</div>
			<div class="col-md-8 input-group">
				{!! Form::text('precio', null, ['id' => 'precio', 'class' => 'form-control']) !!}
				<span class="input-group-addon">.00</span>
			</div>
			@if ($errors->has('precio'))
	            <span class="help-block">
	                <strong>{{ $errors->first('precio') }}</strong>
	            </span>
            @endif
		</div>
		<div class="for-group{{ $errors->has('stock') ? ' has-error' : '' }}">
			<label for="">Stock Disponible</label>
			{!! Form::number('stock', null, ['id' => 'stock', 'class' => 'form-control']) !!}
			@if ($errors->has('stock'))
	            <span class="help-block">
	                <strong>{{ $errors->first('stock') }}</strong>
	            </span>
            @endif
		</div>
		<br>	
		<div class="for-group{{ $errors->has('stock_minimo') ? ' has-error' : '' }}">
			<label for="">Stock Minimo</label>
			{!! Form::number('stock_minimo', null, ['id' => 'stock_minimo', 'class' => 'form-control', 'title' => 'Ingrese un stock minimo para que el sistema lo notifique cuando se este agotando']) !!}
			@if ($errors->has('stock_minimo'))
	            <span class="help-block">
	                <strong>{{ $errors->first('stock_minimo') }}</strong>
	            </span>
            @endif
		</div>
		<br>
		<div class="for-group{{ $errors->has('activo') ? ' has-error' : '' }}">
			<label for="">Estado de item</label>
			{!! Form::select('activo', ['1' => 'Activo', '0' => 'Inactivo'], null, ['id' => 'activo', 'class' => 'form-control']) !!}
			@if ($errors->has('activo'))
	            <span class="help-block">
	                <strong>{{ $errors->first('activo') }}</strong>
	            </span>
            @endif
		</div>
	</div>
</div>
<div class="clear-fix"></div>
<div class="row">
	<button type="submit" class="btn btn-primary">Guardar</button>
</div>