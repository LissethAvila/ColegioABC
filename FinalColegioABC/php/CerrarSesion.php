<?php
session_start();
include ("conexion.php");
   if(!isset($_SESSION['nombreusuario']))
   	{
   		echo "No hay ninguna sesion iniciada";
		//esto ocurre cuando la sesion caduca.
    }
   	else
   	{ 
    	session_destroy();
    	//echo "Has cerrado la sesion";
		echo "<meta content='0;URL=../index.html' http-equiv='REFRESH'> </meta>";
    	}
 ?>
