<?php 
session_start();
include ("conexion.php");
if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['usuario']) && !empty($_POST['usuario']) &&
	isset($_POST['password']) && !empty($_POST['password']) &&
	isset($_POST['password2']) && !empty($_POST['password2']) &&
	$_POST['password'] == $_POST['password2']) 
{
	$conex = mysql_connect($host, $usua) or die("Problemas al conectar con el servidor");
	mysql_select_db($bd, $conex) or die("Problemas al conectar con la Base de Datos");


	mysql_query("INSERT INTO reg_usuario (Nombre, Usuario, Password)
	VALUES ('$_POST[nombre]', '$_POST[usuario]', '$_POST[password]')", $conex);
	echo "Registro Ingresado";
	header('location:index.html');
}
else
{
	echo "Verifica que todos los campos esten llenos y que los password coincidan";
}
 ?>