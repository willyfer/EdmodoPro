<?php 
 
require 'conexion.php';
    // set the PDO error mode to exception
 $sql = "INSERT INTO tb_publicacion (tb_publicacion_id,tb_publicacion_asunto, tb_publicacion_desc,tb_publicacion_tipo,tb_usuario_receptor_id,	tb_usuario_emisor_id)
    VALUES ('', '2nada de asunto', '2hola como esta esta es la descrpcion','2p','4321','2333')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
   
   
 
 ?>