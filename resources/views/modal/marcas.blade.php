<!-- MODAL CATEGORIAS-->

<div class="modal fade" id="modalMarca" tabindex="-1" role="dialog" aria-labelledby="modalCategoriaLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Nueva Marca</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(['method' => 'POST', 'id' => 'marca', 'action' => 'CategoriaController@store', 'class' => 'modal-form']) !!}
          <div id="group-nombre" class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
            <label for="" class="control-label">Nombre:</label>
            {!! Form::text('nombre', null,['class' => 'form-control']) !!}
            @if ($errors->has('nombre'))
	            <span class="help-block">
	                <strong>{{ $errors->first('nombre') }}</strong>
	            </span>
            @endif
          </div>
        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="guardarMarca()">Agregar</button>
      </div>
    </div>
  </div>
</div>