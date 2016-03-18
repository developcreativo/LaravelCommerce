function getLocalidades()
{
	var departamento_id = $('#departamento_id').val();
	$.ajax({
		url: '/api/obtenerLocalidades',
		type: 'POST',
		data: 'departamento_id=' + departamento_id,
		success: function(data){
			$('#localidad_id').html('');
			$('#localidad_id').append('<option value>Seleccione localidad</option>');
			$.each(data, function(index, value) {
				$('#localidad_id').append('<option value="' + index + '">' + value + '</option>');
			});
		}
	});
}