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
	

<!--Inicio de Sesion-->
	<div class=" container-fluid">
		<div class="row-fluid">
		<div class="col-xs-12 col-sm-4 col-md-4">
		</div>	
			<div class="col-xs-12 col-sm-3 col-md-3 colorI">
			<form action="php/usuarios.php" method = "POST">

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

	

</body>
<script type="text/javascript" src="../js/bootstrap.js"></script>

</html>