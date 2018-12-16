<?php
include('conexion.php');
if (isset($_POST['login'])) {
	//VARIABLES DEL USUARIO
$usuario = $_POST['textusuario'];
$pass = $_POST['textpass'];
//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
if (empty($usuario) | empty($pass)) 
	{
	header("Location: login-page.php");
	exit();
	}
//VALIDANDO EXISTENCIA DEL USUARIO
$sql = mysql_query("SELECT * FROM  users WHERE usuario = '$usuario' AND  pass = '$pass' ");
if ($row = mysql_fetch_array($sql)) 
		{
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: /../menu_alumno.php");
		}else
			{
			header("Location: login-page.php");
			exit();
		}
}
?>
