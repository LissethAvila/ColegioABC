<?php 
session_start();
include ("conexion.php");

if (isset($_POST['usuario']) && !empty($_POST['usuario']) &&
	isset($_POST['password']) && !empty($_POST['password'])) 
{
	//$conex = mysql_connect($host, $usua) or die("Problemas al conectar con el servidor");
	//mysql_select_db($bd, $conex) or die("Problemas al conectar con la Base de Datos");
	$conex = mysql_connect($host, $usua, $pw) or die("Problemas al conectar con el servidor");
	mysql_select_db($bd, $conex) or die("Problemas al conectar con la Base de Datos");
	
	$selec=mysql_query("SELECT *
							FROM usuario 
								WHERE  Nombre = '".$_POST['usuario']."'",$conex);
	$sesion = mysql_fetch_array($selec);
	
	

	if ($_POST['password'] == $sesion['Contrasena'])
	{
		

		if ($sesion['Tipo_Usuario_Id'] == '1') 
		{
			
			$_SESSION['nombreusuario'] = $_POST['usuario'];
			$_SESSION['idusuario'] = $sesion['Administrador_Id'];
		
			header('location: AdmonAlumno.php');
			echo "<meta http-equiv=refresh content=0;URL=AdmonAlumno.php />";
			
		}
		elseif ($sesion['Tipo_Usuario_Id'] == '2') 
		{
			$_SESSION['nombreusuario'] = $_POST['usuario'];
			$_SESSION['idusuario'] = $sesion['Catedratico_Id'];
		
			header("Location: Catedratico.php");
			echo "<meta http-equiv=refresh content=0;URL=Catedratico.php />";
			//echo "<h1>tipo: ".$sesion['Tipo_Usuario_Id']." </h1>";
		}
		elseif ($sesion['Tipo_Usuario_Id'] == '3') 
		{
			$_SESSION['nombreusuario'] = $_POST['usuario'];
			$_SESSION['idusuario'] = $sesion['Alumno_Id'];
		
			header('location: Alumno.php');
			echo "<meta http-equiv=refresh content=0;URL=Alumno.php />";
		}
	}
	else
	{
		echo "Verifica que tu usuario y contraseña esten correctos"; 
		//echo "<br><a href=Registrar.html> REGISTRARME</a>";
		//header('location:Registrar.html');
	}
}
else
{
	echo "Debes llenar ambos campos"; 
}

 ?>
