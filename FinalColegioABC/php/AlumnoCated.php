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
					<h4 class='bannerh1'>Usuario: Alumno</h4>
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

		<a href="#" class="navbar-brand2">Menu Alumno</a>
			
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="navVer nav-tabs nav-stacked">
				
						<li><a href="AlumnoNota.php">Notas</a></li>
						<li><a href="AlumnoCurso.php">Cursos</a></li>
						<li class="active"><a href="AlumnoCated.php">Catedraticos</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<!--Botones-->

<form ACTION ='Alumno.php' METHOD = POST>	
	<div class='col-xs-12 col-sm-4 col-md-4 ColorM'>
	
		<?php
		//Conexion a la base de datos mysql 
			$con = mysql_connect($host, $usua, $pw);
			mysql_select_db($bd, $con) or die("No se pudo conectar a la base de datos");
		?>
		<table border="1">
			
			<?php
				$result = mysql_query("SELECT a.Id, a.Nombre, a.Telefono, a.Direccion, c.Nombre as Carrera 
					from carrera c INNER JOIN alumno a ON c.Id = a.Carrera_Id 
									INNER JOIN usuario u ON a.Id = u.Alumno_Id
										where a.Id = '$_SESSION[idusuario]'", $con);
				while($row = mysql_fetch_array($result)){ ?>
		
				<div>
					<h2 class="Sesion">PERFIL ALUMNO</h2>
				</div>
				<table class="tableSesion" >
				<tr>
					<li><h4>ID ALUMNO: <?php echo $row["Id"];?></h4></li>
					<li><h4>NOMBRE: <?php echo $row["Nombre"];?></h4></li>
					<li><h4>TELEFONO: <?php echo $row["Telefono"];?></h4></li>
					<li><h4>DIRECCION: <?php echo $row["Direccion"];?></h4></li>
					<li><h4>CARRERA: <?php echo $row["Carrera"];?></h4></li>
					<!-- <td align="center"> <a href="">Agregar</a> </td>

				 -->
				 </tr>
				</table>
			
			<?php 
				}
			?>
		</table>

	
	</div>

<!--Datos-->
	<div class='col-xs-12 col-sm-6 col-md-6 ColorL'>
		<table class = "table tabeSesion table-bordered">
			<tr>
				<td colspan="5" align="center"><h2>****** CATEDRATICOS ASIGNADOS ******</h2></td><!--COLSPAN QUIERE DECIR QUE ESA FILA VA A OCUPAR LO MISMO QUE 4 COLUMNAS-->
			</tr>
			<tr>
				<td align="center"><h4>ID</h4></td>
				<td align="center"><h4>NOMBRE CATEDRATICO</h4></td>
				<td align="center"><h4>CURSO</h4></td>
			</tr>
			<?php
				$query = ("SELECT cat.Id as Idcat, cat.Nombre as moncat, cu.nombre as cur from Alumno a
							INNER JOIN carrera c ON a.Carrera_Id = c.Id 
							INNER JOIN detalleCurso dc ON dc.Carrera_Id = c.Id 
							INNER JOIN curso cu ON cu.Id = dc.Curso_Id 
							INNER JOIN detalleCatedratico dcat ON cu.id = dcat.Curso_Id 
							INNER JOIN catedratico cat ON dcat.Catedratico_Id = cat.Id where a.Id = '$_SESSION[idusuario]' group by cu.nombre order by cat.Id");
				$result = mysql_query($query, $con);
				while($row = mysql_fetch_array($result)){ ?>
				<tr class="">
					<td align="center"><?php echo $row["Idcat"];?></td>
					<td><?php echo $row["moncat"];?></td>
					<td><?php echo $row["cur"];?></td>				
				</tr>
			<?php 
				}
			?>
		</table>		
	


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