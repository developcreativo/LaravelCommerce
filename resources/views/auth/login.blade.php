@extends('layouts.app')

@section('content')
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Login</h1>
		<em></em>
		<h2><a href="{!! url('/') !!}">Inicio</a><label>/</label>Login</h2>
	</div>
</div>
<!--login-->
<div class="container">
		<div class="login">
		
			{!! Form::open(['method' => 'POST', 'files'=>true, 'action' => 'Auth\AuthController@postLogin']) !!}
			<div class="col-md-6 login-do">
				<div class="login-mail">
					<input type="text" id="email" name="email" placeholder="Email" required="">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" id="password" name="password" placeholder="Contraseña" required="">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				
				@include('errors.listerrors')

				<label class="hvr-skew-backward">
					<input type="submit" value="Entrar">
				</label>
			</div>
			<div class="col-md-6 login-right">
				 <h3>Cuenta completamente gratis</h3>
				 
				 <p>Si aún no tienes tu cuenta registrate gratis y reciba nuestras ofertas y promociones</p>
				<a href="{!! url('auth/register') !!}" class=" hvr-skew-backward">Registrarme</a>

			</div>
			
			<div class="clearfix"> </div>
			{!! Form::close() !!}
		</div>
<br>
</div>
@endsection