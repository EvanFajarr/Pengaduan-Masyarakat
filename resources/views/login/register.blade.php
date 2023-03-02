@extends('template.extlogin')

<div class="container">
	<div class="screen"> 
		<div class="screen__content">
		<h1 class="text-start">Register</h1>
        @include('pesan.pesan')
			<form action="/login/create"  method="post" class="login">
				@csrf
				<div class="login__field">
					{{-- <i class="login__icon fas fa-lock"></i> --}}
					<input type="text" name="nik" value="{{ Session::get('nik') }}"  class="login__input" placeholder="Nik">
				</div>

                <div class="login__field">
					{{-- <i class="login__icon fas fa-lock"></i> --}}
					<input type="text" name="name" value="{{ Session::get('name') }}"  class="login__input" placeholder="name">
				</div>
                
				<div class="login__field">
					{{-- <i class="login__icon fas fa-user"></i> --}}
					<input type="email"  name="email" value="{{ Session::get('email') }}"  class="login__input" placeholder=" Email">
				</div>

				<div class="login__field">
					{{-- <i class="login__icon fas fa-lock"></i> --}}
					<input type="password" name="password" class="login__input" placeholder="Password">
				</div>
				
                <div class="login__field">
					{{-- <i class="login__icon fas fa-lock"></i> --}}
					<input type="text" name="tlp" value="{{ Session::get('tlp') }}"  class="login__input" placeholder="Nomor telephone">
				</div>


				<button class="button login__submit" type="submit">
					<span class="button__text">Register</span>
					{{-- <i class="button__icon fas fa-chevron-right"></i> --}}
				</button>				
			</form>
			
		<div class="login__field">
            <p class="text2">have account? <a href="/"
                    class="text-dark fw-bold">login</a></p>
		</div>

		</div>
		<div class="screen__background">
			{{-- <span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span> --}}
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
<style>
	* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;	
	font-family: Raleway, sans-serif;
}

body {
	background: linear-gradient(90deg, #FFF, #85CDFD);	
}

.container {
	display: flex;
	align-items: center;
	justify-content: center;
	height: 165vh;
}

.screen {		
	background: linear-gradient(90deg, #000000, #85CDFD);		
	position: relative;	
	height: 950px;
	width: 360px;	
	box-shadow: 0px 0px 24px #000;
}

.screen__content {
	z-index: 1;
	position: relative;	
	height: 100%;
}

.screen__background {		
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);	
}

.screen__background__shape {
	position: absolute;
}

.screen__background__shape1 {
	height: 950px;
	width: 550px;
	background: #FFF;	
	border-radius:50px;
	right: 120px;	
}

/* .screen__background__shape2 {
	height: 220px;
	width: 220px;
	background: #B7C4CF;
	border-radius:200px;
	right: 0;	
}

.screen__background__shape3 {
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg, #72FFFF, #FFD32D);
	right: 0;
} */

.text-start{
	margin-top: 10px;
	font-size:30px;
	font-family:  sans-serif;
	font-weight:bold;
	padding-left: 24px;
}
.text2{
	font-weight:bold;
	padding-left: 24px;
}
.login {
	width: 320px;
	padding: 30px;
	padding-top: 90px;
}

.login__field {
	padding: 20px 0px;	
	position: relative;	
	height:100px;
}

/* .login__icon {
	position: absolute;
	top: 30px;
	color: #7875B5;
} */

.login__input {
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 10px;
	padding-left: 24px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
}

.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: #85CDFD;
}

.login__submit {
	background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 50%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #5C5696;
	cursor: pointer;
}




	</style>
</div>