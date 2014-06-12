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
				<li><a href="../Contacto.html">Contacto</a></li>
				<li><a href="CerrarSesion.php">Cerrar Sesion</a></li>

			</ul>
			
		</div>

		</div>			

	</div>
			

			<!--Logo y usuario-->
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
					<h4 class='bannerh1'>Usuario: Catedratico</h4>
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

		<a href="#" class="navbar-brand2">Menu Catedralico</a>
			
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="navVer nav-tabs nav-stacked">
				
						<li class="active"><a href="CatAlumno.php">Listado de  Alumnos</a></li>
						<li><a href="CatCurso.php">Listado de Cursos</a></li>
						<li><a href="IngresarNota.php">Ingresar Notas</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<!--Botones-->

<form ACTION ='CatAlumno.php' METHOD = POST>	
	<div class='col-xs-12 col-sm-4 col-md-4 ColorM'>
	
		<?php
		//Conexion a la base de datos mysql 
			 $con = mysql_connect($host, $usua, $pw);
			 mysql_select_db($bd, $con) or die("No se pudo conectar a la base de datos");
		?>
		<table border="1">
			
			<?php
				$result = mysql_query("SELECT cat.Id, cat.Nombre, cat.Telefono, cat.Direccion 
					from catedratico cat INNER JOIN usuario u ON cat.Id = u.Catedratico_Id
					WHERE cat.Id = '$_SESSION[idusuario]'", $con);
				while($row = mysql_fetch_array($result)){ ?>
		
				<div>
					<h2 class="Sesion">PERFIL CATEDRATICO</h2>
				</div>
				<table class="tableSesion" >
				<tr>
					<li><h4>ID CATEDRATIDO: <?php echo $row["Id"];?></h4></li>
					<li><h4>NOMBRE: <?php echo $row["Nombre"];?></h4></li>
					<li><h4>TELEFONO: <?php echo $row["Telefono"];?></h4></li>
					<li><h4>DIRECCION: <?php echo $row["Direccion"];?></h4></li>
				 </tr>
				</table>
			
			<?php 
				}
			?>
		</table>

	
	</div>

<!--Datos-->
	<div class='col-xs-12 col-sm-6 col-md-6 colorCont'>

	<form ACTION ='CatAlumno.php' METHOD = POST>
		<table class="tableSesion " >
			<thead>
				<tr><h4>
				Seleccionar Carrera</h4></tr>
			</thead>
			<tr>
				<td>Datos: </td><td><select name="Datos">
												<option value="5">Bachillerato en Computacion</option>
												<option value="6">Bachillerato en Ciencias y Letras</option>
												<option value="3">Bachillerato en Mecanica</option>
												<option value="8">Bachillerato en Medicina</option>
												<option value="2">Perito Contador</option>
												<option value="1">Perito en Administración</option>
												
										</select><input type="submit" name="Buscar" value="Buscar"></td>
			</tr>
				
		</table>		
	</form>
<?php 

	
			$conexion = mysql_connect($host, $usua, $pw);
			
			if(!$conexion)
			{
				echo "No hay Conexion, verifique el Servidor, Usuario y Contraseña";
			}
			
			if(!mysql_select_db($bd,$conexion))
			{
				echo "Verifique la Base de Datos, No se localiza";
			}	
			
			if($_POST != Null)
			{
			
			
			$consulta = mysql_query("SELECT a.Id, a.Nombre
				from alumno a Inner Join carrera c on c.Id = a.Carrera_Id
				WHERE a.Carrera_Id = '$_POST[Datos]' ", $conexion);
			


			echo "<table class='table tableSesion'>
				<tr>
					<td class='tabla'><h4>Id</h4></td >
					<td class='tabla'><h4>Nombre</h4></td >
					
				</tr>";
		
		while ($filas = mysql_fetch_array($consulta))
		{
			
			echo "<tr>
					<td class='tabla'>".$filas["Id"]."</td>
					<td class='tabla'>".$filas["Nombre"]."</td>
					
				</tr>";
						
		}
		
		echo "</table>";
		}
		//cerrar conexión
		mysql_close($conexion);
			
 ?>
</div>
	</div>
</form>
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