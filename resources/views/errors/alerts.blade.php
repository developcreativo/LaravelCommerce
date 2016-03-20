@if(Session::has('flash_notification.message'))
	<script>
		swal({
			title: "{{ Session::get('flash_notification.title') }}",
			text: "{{ Session::get('flash_notification.message') }}",
			type: "{{ Session::get('flash_notification.level') }}",
			timer: 1700,
			showConfirmButton: false
		});
	</script>
@endif