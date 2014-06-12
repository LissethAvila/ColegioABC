<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ColegioABC</title>
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css
	">
	<script type="text/javascript" src="../js/jquery.js"></script>
	
</head>
<body>
	<!--Menu-->
	<div class="navbar navbar-default navbar-static-top">
		<div class="container-fluid colorMenu">
			
	<!--Boton Desplegable-->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
			<span class="sr-only">Desplegar</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		
		<a href="" class="navbar-brand">ColegioABC</a>
		
		<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav2 nav-tabs navbar-nav navbar-right">
				<li><a href="../index.html">Inicio</a></li>
				<li><a href="../Contacto.html">Contacto</a></li>
			</ul>
			
		</div>

		</div>			

	</div>
			
			<!--Logo -->

	<div class=" container banner">		
			<div class="row-fluid">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<img src="../img/LogoabcG.png" alt="Logo" class=" img-circle  bannerimg">
				</div>
				<div class="col-xs-12 col-sm-8 col-md-8">
					<h1 class="bannerh1">Inicio Sesi&oacute;n</h1>

				</div>				
			</div>
				
		
		</div>
	

<!--Inicio de Sesion-->
	<div class=" container-fluid">
		<div class="row-fluid">
		<div class="col-xs-12 col-sm-4 col-md-4">
		</div>	
			<div class="col-xs-12 col-sm-3 col-md-3 colorI">
			<form action="usuarios.php" method = "POST">

				<table class="tablaDiv">
					<tr>
						<td>USUARIO:</td>
						<td> <input name = "usuario" placeholder = "Nombre" type="text"></td>
					</tr>
					<tr>
						<td>PASSWORD:</td>
						<td><input name = "password" placeholder = "Contraseña" type="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><button name= "ingresar">INGRESAR</button></td>
					</tr>
				</table>
				<br>
				<h5>¿Olvidaste tu contraseña?</h5>
				<h5>Cambiar Contraseña</h5>
			</form>				
		</div>
		<div class="col-xs-12 col-sm-5 col-md-5">
			
		</div>
		</div>
	</div>

	<!--Pie de Pagina-->
		<footer class="pie">
		<div class="container-fluid colorMenu">
			<div class="row-fluid">
				<div class="col-xs-12 col-sm-10 col-md-10">
				1ra. Calle 16-89 zona 1, Quetzaltenango<br>
				Telefonos: 7766-5544 y 7766-1122 	
				</div>
					
				<div class="col-xs-12 col-sm-2 col-md-2">
					<img src="../img/fb.jpg"><img src="../img/tw.jpg">
				</div>
			
			</div>
					
		</div>
	</footer>

</body>
<script type="text/javascript" src="../js/bootstrap.js"></script>

</html>