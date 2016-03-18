function getCategorias()
{
	var categorias = $('#categoria_id');

	categorias.find('option').remove();
	categorias.append($("<option />").val(0).text('Seleccione una categoría'));

	$.ajax({
		url: '/api/obtenerCategorias',
		type: 'GET',
		success: function(data){
			$.each(data, function(index, value) {
				categorias.append($("<option />").val(index).text(value));
			});
		}
	});
}

function guardarCategoria()
{
	$.ajax({
		url: '/categoria',
		type: 'POST',
		data: $('form#categoria').serialize(),
		success: function(data){
			//console.log(data);
			getCategorias();
			$('#modalCategoria').modal('toggle');
		},
		error: function(data){
			$.each(data.responseJSON, function(key, value) {
				$('#group-' + key).addClass('has-error');
			});
		}
	});
	
}

function getTipos()
{
	var tipos = $('#tipo_id');

	tipos.find('option').remove();
	tipos.append($("<option />").val(0).text('Seleccione un tipo'));

	$.ajax({
		url: '/api/obtenerTipos',
		type: 'GET',
		success: function(data){
			$.each(data, function(index, value) {
				tipos.append($("<option />").val(index).text(value));
			});
		}
	});
}

function guardarTipo()
{
	$.ajax({
		url: '/tipo',
		type: 'POST',
		data: $('form#tipo').serialize(),
		success: function(data){
			//console.log(data);
			getTipos();
			$('#modalTipo').modal('toggle');
		},
		error: function(data){
			$.each(data.responseJSON, function(key, value) {
				$('#group-' + key).addClass('has-error');
			});
		}
	});
	
}

function getMarcas()
{
	var tipos = $('#marca_id');

	tipos.find('option').remove();
	tipos.append($("<option />").val(0).text('Seleccione una marca'));

	$.ajax({
		url: '/api/obtenerMarcas',
		type: 'GET',
		success: function(data){
			$.each(data, function(index, value) {
				tipos.append($("<option />").val(index).text(value));
			});
		}
	});
}

function guardarMarca()
{
	$.ajax({
		url: '/marca',
		type: 'POST',
		data: $('form#marca').serialize(),
		success: function(data){
			//console.log(data);
			getMarcas();
			$('#modalMarca').modal('toggle');
		},
		error: function(data){
			$.each(data.responseJSON, function(key, value) {
				$('#group-' + key).addClass('has-error');
			});
		}
	});
	
}