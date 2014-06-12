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
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Desplegar</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		
		<a href="colegioabc.esy.es" class="navbar-brand">ColegioABC</a>
		
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav2 nav-tabs navbar-nav navbar-right">

				<li ><a href="../index.html">Inicio</a></li>
				<li class="dropdown">
				<a href="../QuienesS/Vision.html" class="dropdown-toggle" data-toggle="dropdown">¿Quienes Somos?<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="../QuienesS/Vision.html">Visi&oacute;n</a></li>
					<li><a href="../QuienesS/Mision.html">Misi&oacute;n</a></li>
					<li><a href="../QuienesS/Valores.html">Valores</a></li>
				</ul>

				</li>
				<li class="dropdown">
				<a href="../Carreras/PeritoC.html" class="dropdown-toggle" data-toggle="dropdown">Carreras<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="../Carreras/PeritoC.html">Diversificado 3 a&ntilde;os</a></li>
					<li><a href="../Carreras/BachC.html">Diversificado 2 a&ntilde;os</a></li>
				</ul>
				</li>
				<li><a href="../Actividad/Arte.html">Actividades</a></li>
				<li ><a href="../Galeria.html">Galeria</a></li>
				<li><a href="CerrarSesion.php">Cerrar Sesion</a></li>

			</ul>
			
		</div>

		</div>			

	</div>
			

			<!--Logo y Slide-->
<?php 
session_start();
include ("conexion.php");
	echo "<div class=' container banner'>		
			<div class='row-fluid'>
				<div class='col-xs-6 col-sm-4 col-md-4'>
					<img src='../img/LogoabcG.png' alt='Logo' class=' img-circle  bannerimg'>
				</div>
				<div class='col-xs-2 col-sm-2 col-md-4'>
				

				</div>
				<div class='col-xs-4 col-sm-4 col-md-4'>
					<h4 class='bannerh1'>Usuario: Administrador</h4>
					<h4 class='bannerh1'>Nombre:  ". $_SESSION['nombreusuario']."</h4>

				</div>					
			</div>
				
		
	</div>"
?>

<!--MENU Datos-->

	<div class="container-fluid ">
		<div class="row">
		<div class="col-xs-12 col-sm-2 col-md-2 ">	

		<!--Menu Vertical-->

	<div class="navbar navbar-default ">
		<div class="container-fluid colorMenu">
		
	<!--Boton Desplegable-->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
			<span class="sr-only">Desplegar</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<a href="#" class="navbar-brand2">Menu Administrador</a>
			
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="navVer nav-tabs nav-stacked">
				
						<li ><a href="AdmonAlumno.php ">Alumno</a></li>
						<li class="active"><a href="AdmonCatedratico.php ">Catedratico</a></li>
						<li><a href="AdmonReportes.php ">Reportes</a></li>
												
				
					</ul>
			
				</div>
			</div>
		</div>
	</div>

<!--Botones-->

<form ACTION ="AdmonCatedratico.php" METHOD = "POST">	
	<div class='col-xs-12 col-sm-4 col-md-4 ColorM'>
	
		<table align="center">
			<tr >
				<h1 class="Sesion">DatosAdministrador</h1>
				<?php 
					
					$con = mysql_connect($host, $usua, $pw);
					mysql_select_db($bd, $con) or die("No se pudo conectar a la base de datos");
			 
					$admon = mysql_query("SELECT  a.Nombre, a.Puesto
							 FROM administrador a Inner join usuario u on a.Id = u.Administrador_Id
							 	WHERE u.Administrador_Id = '$_SESSION[idusuario]'",$con);
					$dato = mysql_fetch_array($admon);

					echo "<h4>Nombre: ".$dato['Nombre']."</h4>
						<h4>Puesto: ".$dato['Puesto']."</h4>";

				?>	
			</tr>
			<tr>
				<td class="btn btn-default btn-lg btn-block"><input type="submit" name="Crear" value="Crear Catedratico"></td>
			</tr>
			<tr>
				<td class="btn btn-default btn-lg btn-block"><input type="submit" name="Editar" value="Editar/Guardar Catedratico"></td>
			</tr>
			<tr>
				<td class="btn btn-default btn-lg btn-block"><input type="submit" name="Borrar" value="Borrar Catedratico"></td>
			</tr>
			
		</table>

	
	</div>

<!--Datos-->
	<div class='col-xs-12 col-sm-6 col-md-6 colorCont'>
		
		<table class="tableSesion " >
			<thead>
				<tr><h4>
				Datos Catedratico</h4></tr>
			</thead>
				<tr><td>Id:</td><td><input type=text name="idc" ></td></tr>
				<tr><td>Nombre: </td><td><input type=text name="nombrec" placeholder="Nombre y Apellidos"></td></tr>
				<tr><td>Direcci&oacute;n: </td><td><input type=text name="direccionc" placeholder="Direccion"></td></tr>
				<tr><td>Telefono: </td><td><input type=text name="telefonoc" placeholder="7777777"></td></tr>
				
				
		</table>		

	</div>
</form>

	</div>
</div>

<?php 

	if (isset($_POST["Crear"])) 
	{
		$mensaje = "<script name='accion'>alert('Catedratico Ingresado Correctamente') </script>";
			
			$conexion = mysql_connect($host, $usua, $pw);
			
			if(!$conexion)
			{
				echo "No hay Conexion, verifique el Servidor, Usuario y Contraseña";
			}
			
			if(!mysql_select_db($bd,$conexion))
			{
				echo "Verifique la Base de Datos, No se localiza";
			}	
			
			// Ingreso de datos
			if($_POST != Null)
			{

			$insertar=mysql_query("INSERT INTO catedratico (Nombre, Telefono, Direccion)
	VALUES ('$_POST[nombrec]', '$_POST[telefonoc]', '$_POST[direccionc]')", $conexion);
			
			
			//Verificacion de Ingreso
			 if(!$insertar)
			 {
			 	die( "No se pudo ingresar error: ".mysql_error($conexion)); 
			 }
			
			echo "$mensaje";
			}
			
				
		//cerrar conexión
		mysql_close($conexion);
	}
	

	if (isset($_POST["Editar"])) {
				$mensaje = "<script name='accion'>alert('Dato Actualizado Correctamente') </script>";
				
			$conexion = mysql_connect($host, $usua, $pw);
			
			if(!$conexion)
			{
				echo "No hay Conexion, verifique el Servidor, Usuario y Contraseña";
			}
			
			if(!mysql_select_db($bd,$conexion))
			{
				echo "Verifique la Base de Datos, No se localiza";
			}
			
			// Edicion de datos
			if($_POST != Null)
			{
			$datos = "Update catedratico
								Nombre = '$_POST[nombrec]',
								Telefono = '$_POST[telefonoc]',
								Direccion = ' $_POST[direccionc]',
								WHERE catedratico.id = '$_POST[idc]'";
			
			$consulta = mysql_query($datos, $conexion);
			
			
			//Verificacion de Edicion
			if(!$consulta)
			 {
			 	die( "No se pudo ingresar error: ".mysql_error($conexion)); 
			 }
			
			echo $mensaje;
			}
			
				
		//cerrar conexión
		mysql_close($conexion);
		}	

	if (isset($_POST['Borrar'])) {
			$mensaje = "<script name='accion'>alert('Dato Borrados Correctamente') </script>";
				
			$conexion = mysql_connect($host, $usua, $pw);
			
			if(!$conexion)
			{
				echo "No hay Conexion, verifique el Servidor, Usuario y Contraseña";
			}
			
			if(!mysql_select_db($bd,$conexion))
			{
				echo "Verifique la Base de Datos, No se localiza";
			}
			
			// Borrar de datos
			if($_POST["idc"] != Null)
			{
			$datosql = "Delete from catedratico
								 WHERE catedratico.id = '". $_POST["idc"]."'";
			
			$consulta = mysql_query($datosql, $conexion);
			
			//Verificacion de Borrado
			if(!$consulta)
			{
				die( "No se pudo ingresar error: ".mysql_error($conexion)); 
			}
			
			echo $mensaje;
			}
			
				
		//cerrar conexión
		mysql_close($conexion);
		}	




 ?>

<!--Galeria de Imagenes-->
	

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