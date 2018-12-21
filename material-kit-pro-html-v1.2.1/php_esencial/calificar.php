

<?php 
 

 require 'conexion_w.php';

try {
	

 	
 
  $id_tarea=$_POST['tarea'];
$id_alumno=$_POST['alumno'];
$id_nota=$_POST['nota'];
 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO tb_usuario_tarea (tb_usuario_tarea_id,tb_usuario_id,tb_tarea_id,tb_usuario_tarea_nota) VALUES (null,'$id_alumno','$id_tarea','$id_nota')";
    
    #print_r( $sql) ;   // use exec() because no results are returned
    $conn->exec($sql);


 
 	  
		 
 
 

 		 
	 
} catch (Exception $e) {
echo "Error: " . $e->getMenssage();
}
 

 ?>


