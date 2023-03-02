@extends('template.extlogin')



<div class="container">
	<link rel="stylesheet" href="login.css">
	<div class="screen">
		<div class="screen__content">
		<h1 class="text-start">Login</h1>
		@include('pesan.pesan')
			<form action="/"  method="post" class="login">
				@csrf
				<div class="login__field">
					{{-- <i class="login__icon fas fa-lock"></i> --}}
					<input type="text" name="nik" value="{{ Session::get('nik') }}"  class="login__input" placeholder="Nik">
				</div>
				<div class="login__field">
					{{-- <i class="login__icon fas fa-user"></i> --}}
					<input type="email"  name="email" value="{{ Session::get('email') }}"  class="login__input" placeholder=" Email">
				</div>
				<div class="login__field">
					{{-- <i class="login__icon fas fa-lock"></i> --}}
					<input type="password" name="password" class="login__input" placeholder="Password">
				</div>
				
				<button class="button login__submit" type="submit">
					<span class="button__text">Log In </span>
					{{-- <i class="button__icon fas fa-chevron-right"></i> --}}
				</button>				
			</form>
			
		<div class="login__field">
            <p class="text2 text-dark fw-bold"><a href="login/register">Register here</a></p>
		</div>

		</div>
		<div class="screen__background">
			{{-- <span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span> --}}
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>



</div>