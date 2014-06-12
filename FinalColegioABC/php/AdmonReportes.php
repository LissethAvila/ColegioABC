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
						<li ><a href="AdmonCatedratico.php ">Catedratico</a></li>
						<li class="active"><a href="AdmonReportes.php ">Reportes</a></li>
												
				
					</ul>
			
				</div>
			</div>
		</div>
	</div>

<!--Botones-->

	
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
					while($dato = mysql_fetch_array($admon)){

					echo "<h4>Nombre: ".$dato['Nombre']."</h4>
						<h4>Puesto: ".$dato['Puesto']."</h4>";
					}
				?>	
			</tr>
						
		</table>

	
	</div>

<!--Datos-->
	<div class='col-xs-12 col-sm-6 col-md-6 colorCont'>

	<form ACTION ='AdmonReportes.php' METHOD = POST>
		<table class="tableSesion " >
			<thead>
				<tr><h4>
				Seleccionar Reporte</h4></tr>
			</thead>
			<tr>
				<td>Datos: </td><td><select name="Datos">
												<option value="1">Alumnos</option>
												<option value="2">Catedraticos</option>
												<option value="3">Cursos</option>
												
										</select><input type="submit" name="Realizar" value="Realizar"></td>
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
switch ($_POST['Datos']) {
    case 1:
        if($_POST != Null)
		{
			
			
			$consulta = mysql_query("SELECT a.Id, a.Nombre, c.Nombre as NombreC
				from alumno a Inner Join carrera c on c.Id = a.Carrera_Id
				WHERE '$_POST[Datos]' = 1
    			Order By c.Id", $conexion);
			
			echo "<h3 >Listado de Alumnos</h3>";
			echo "<table class='table tableSesion'>
				<tr>
					<td class='tabla'>Carn&eacute;</td >
					<td class='tabla'>Nombre</td >
					<td class='tabla'>Carrera</td>
					
				</tr>";
		
		while ($filas = mysql_fetch_array($consulta))
		{
			
			echo "<tr>
					<td class='tabla'>".$filas["Id"]."</td>
					<td class='tabla'>".$filas["Nombre"]."</td>
					<td class='tabla'>".$filas["NombreC"]."</td>
					
				</tr>";
						
		}
		
		echo "</table>";
					
		}
        break;
   
    case 2:
        if($_POST != Null)
		{
			
			
			$consulta = mysql_query("SELECT cat.Nombre, cu.Nombre as NombreCur, ca.Nombre as NombreC
					from catedratico cat inner join detallecatedratico dcat on cat.Id = dcat.Catedratico_Id
                            inner join curso cu on dcat.Curso_Id = cu.Id
                            inner join detallecurso dcu on cu.Id = dcu.Curso_Id
                            inner join carrera ca on dcu.Carrera_Id = ca.Id
                            WHERE '$_POST[Datos]' = 2
    						Order By ca.Id", $conexion);
			
		
			echo "<h3 >Listado de Catedraticos</h3>";
			echo "<table class='table tableSesion'>
				<tr>
					<td class='tabla'>Nombre</td >
					<td class='tabla'>Curso</td >
					<td class='tabla'>Carrera</td>
					
				</tr>";
		
		while ($filas = mysql_fetch_array($consulta))
		{
			
			echo "<tr>
					<td class='tabla'>".$filas["Nombre"]."</td>
					<td class='tabla'>".$filas["NombreCur"]."</td>
					<td class='tabla'>".$filas["NombreC"]."</td>
					
				</tr>";
						
		}
		
		echo "</table>";
		
			
	}

        break;
    case 3:
        if($_POST != Null)
		{
			
			
			$consulta = mysql_query("SELECT ca.Nombre, cu.Nombre as NombreCur
				from  curso cu inner join detallecurso dcu on cu.Id = dcu.Curso_Id
                            inner join carrera ca on dcu.Carrera_Id = ca.Id
               	WHERE '$_POST[Datos]' = 3
    			Order By ca.Id", $conexion);
			
			echo "<h3 >Listado de Cursos</h3>";
			echo "<table class='table tableSesion'>
				<tr>
					<td class='tabla'>Carrera</td >
					<td class='tabla'>Curso</td >
					
					
				</tr>";
		
		while ($filas = mysql_fetch_array($consulta))
		{
			
			echo "<tr>
					<td class='tabla'>".$filas["Nombre"]."</td>
					<td class='tabla'>".$filas["NombreCur"]."</td>
				
					
				</tr>";
						
		}
		
		echo "</table>";
					
		}
        break;
}

}		
		//cerrar conexión
		mysql_close($conexion);
			
			


 ?>


	</div>

	</div>
</div>



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