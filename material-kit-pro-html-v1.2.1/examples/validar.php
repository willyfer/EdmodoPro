<?php
require '../conexion.php';

$usuarios = $mysqli->query("SELECT Nombre, Tipo_usuario
FROM usuario
Where Usuario = '".$_POST['usuariolg']."'
AND Password = '".$_POST['passlg']."'");

if($usuarios->num_rows == 1):
	$datos = $usuarios-> fetch_assoc();
	echo json_encode(array('error' => false, 'tipo' => $datos['Tipo_usuario']));
else:
	echo json_encode(array('error' => true));
endif;

$mysqli-> close();

?>
