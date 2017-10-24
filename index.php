<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
	<style>
		@font-face {
		  font-family: 'icomoon';
		  src:  url('fonts/icomoon.eot?ekx9l3');
		  src:  url('fonts/icomoon.eot?ekx9l3#iefix') format('embedded-opentype'),
		    url('fonts/icomoon.ttf?ekx9l3') format('truetype'),
		    url('fonts/icomoon.woff?ekx9l3') format('woff'),
		    url('fonts/icomoon.svg?ekx9l3#icomoon') format('svg');
		  font-weight: normal;
		  font-style: normal;
		}
		[class^="icon-"], [class*=" icon-"] {
		  font-family: 'icomoon' !important;
		  speak: none;
		  font-style: normal;
		  font-weight: normal;
		  font-variant: normal;
		  text-transform: none;
		  line-height: 1;
		  -webkit-font-smoothing: antialiased;
		  -moz-osx-font-smoothing: grayscale;
		}
		.icon-user:before {
		  content: "\e971";
		  font-size: 25px;
		}
		.icon-key:before {
		  content: "\e98d";
		  font-size: 23px;
		}
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			background: #2C3E50;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			text-align: center;
			color: #fff;
    		font-family: 'Source Sans Pro', sans-serif;
		}
		a{
			color: #2980B9;
			transition: .2s;
			will-change:color;
			text-decoration: none;
		}
		a:hover{
			color: #50BCF9;
		}
		.container{
			display: flex;
			width: 100%;
			max-width: 400px;
			flex-wrap: wrap;
			align-items: center;
			justify-content: center;
		}
		.cont-logo{
			display: flex;
			justify-content: center;
			width: 100%;
			margin-bottom: 50px;
		}
		.logo{
			width: 180px;
			height: 180px;
		}
		form{
			width: 90%;
			display: flex;
			flex-direction: column;
		}
		.inputField{
			margin-bottom: 20px;
			width: 100%;
			position: relative;
			height: 45px;
			border-radius: 50px;
			background: rgba(21,36,48,.5);
		}
		.inputField input{
    		font-family: 'Source Sans Pro', sans-serif;
			position: absolute;
			width: 88%;
			right: 0;
			border: 0;
			line-height: 45px;
			font-size: 16px;
			color: rgba(236,240,241,.6);
			background: rgba(0,0,0,0);
		}
		.inputField input:hover .inputField{
			border: 1px solid #2980B9; 
		}
		.icon{
			position: absolute;
			line-height: 45px;
			left: 13px;
			color: #2980B9;
		}
		.btn{
		    font-family: 'Source Sans Pro', sans-serif;
			font-weight: 600;
			background: #2980B9;
			height: 45px;
			border: 0;
			border-radius: 45px;
			cursor: pointer;
			color: #fff;
			font-size: 20px;
			margin: 20px 0;
			transition: .2s;
		}
		.btn:hover{
			background: #289CDD;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="cont-logo">
		<img src="logo.png" class="logo" alt="">
	</div>
	<form>
		<div class="inputField">
			<span class="icon icon-user"></span>
			<input type="text" value="23123" placeholder="Nombre de usuario.">
		</div>
		<div class="inputField">
			<span class="icon icon-key"></span>
			<input type="password" placeholder="Contraseña.">
		</div>
		<a href="#">¿Olvidaste tu contraseña?</a>
		<button class="btn" type="submit">Entrar</button>
		<p>¿No tienes una cuenta? <a href="#">Regístrate</a></p>
	</form>
</div>
</body>
</html>