@extends('layouts.app')

@section('content')
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Registro</h1>
		<em></em>
		<h2><a href="index.html">Inicio</a><label>/</label>Registro</h2>
	</div>
</div>
<!--login-->
<div class="container">
		<div class="login">
			{!! Form::open(['method' => 'POST', 'files'=>true, 'action' => 'Auth\AuthController@postRegister']) !!}
			<div class="col-md-6 login-do">
			<div class="login-mail">
					<input type="text" id="nombre" name="nombre" placeholder="Nombre">
					<i  class="glyphicon glyphicon-user"></i>
				</div>
				<div class="login-mail">
					<input type="text" id="telefono" name="telefono" placeholder="Teléfono">
					<i  class="glyphicon glyphicon-phone"></i>
				</div>
				<div class="login-mail">
					<input type="text" id="email" name="email" placeholder="Email">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" id="password" name="password" placeholder="Contraseña">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				<div class="login-mail">
					<input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repita la Contraseña">
					<i class="glyphicon glyphicon-lock"></i>
				</div>

				@include('errors.listerrors')

				<label class="hvr-skew-backward">
					<input type="submit" value="Enviar">
				</label>
			
			</div>
			<div class="col-md-6 login-right">
				 <h3>Ya tiene cuenta</h3>
				 
				 <p>Si ya tiene cuenta evite nuevamente el registro y entra aqui</p>
				<a href="{!! url('auth/login') !!}" class="hvr-skew-backward">Entrar</a>

			</div>
			
			<div class="clearfix"> </div>
			{!! Form::close() !!}
		</div>

	</div>
<br>
@endsection