<!-- MODAL CATEGORIAS-->

<div class="modal fade" id="modalTipo" tabindex="-1" role="dialog" aria-labelledby="modalCategoriaLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Nuevo Tipo</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(['method' => 'POST', 'id' => 'tipo', 'action' => 'TipoController@store', 'class' => 'modal-form']) !!}
          <div id="group-nombre_es" class="form-group{{ $errors->has('nombre_es') ? ' has-error' : '' }}">
            <label for="" class="control-label">Nombre español:</label>
            {!! Form::text('nombre_es', null,['class' => 'form-control']) !!}
            @if ($errors->has('nombre_es'))
	            <span class="help-block">
	                <strong>{{ $errors->first('nombre_es') }}</strong>
	            </span>
            @endif
          </div>
          <div id="group-nombre_en" class="form-group{{ $errors->has('nombre_en') ? ' has-error' : '' }}">
            <label for="" class="control-label">Nombre inglés:</label>
            {!! Form::text('nombre_en', old('nombre_es'),['class' => 'form-control']) !!}
            @if ($errors->has('nombre_en'))
	            <span class="help-block">
	                <strong>{{ $errors->first('nombre_en') }}</strong>
	            </span>
        	  @endif
          </div>
          <div id="group-nombre_br" class="form-group{{ $errors->has('nombre_br') ? ' has-error' : '' }}">
            <label for="" class="control-label">Nombre portugués:</label>
            {!! Form::text('nombre_br', null,['class' => 'form-control']) !!}
            @if ($errors->has('nombre_br'))
	            <span class="help-block">
	                <strong>{{ $errors->first('nombre_br') }}</strong>
	            </span>
        	@endif
          </div>
        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="guardarTipo()">Agregar</button>
      </div>
    </div>
  </div>
</div>