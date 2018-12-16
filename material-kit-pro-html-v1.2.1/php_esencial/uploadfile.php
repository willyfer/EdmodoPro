<?php 
require  'conexion.php';
 try {
 	//var_dump($_FILES["file"]);
$directorio="../assets/img/faces/";
  $nombre= basename($_FILES["archivo"]["name"]);
$archivo=$directorio  . $nombre;
 echo $nombre;
$tipoderarchivo= strtolower(pathinfo($archivo,PATHINFO_EXTENSION));
// valida quees imagen
$size=getimagesize($_FILES["archivo"]["tmp_name"]);
   
  $nulo=null;
if($size!=false){
	echo "es una imagen, por favor escoga un documento";

}else{

		if (move_uploaded_file($_FILES["archivo"]["tmp_name"],$archivo)) {
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql= "INSERT INTO tb_file (tb_file_id,tb_file_conatiner) VALUES (null, '$nombre')";
			echo $sql;
			 
 

			  $conn->exec($sql);

			 echo "archivo subido exitosamente!!! ";
			
		
		}else{
			echo "error al subir archivo";
		}
}
 } catch (Exception $e) {
 	echo "Error: " . $e->getMenssage();
 }


 ?>
