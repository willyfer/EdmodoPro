<?php 

require 'conexion.php';

try {
	  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$id_post=$_POST['id_post'];
$des=$_POST['des'];
$id_user=$_POST['id_user'];
$fecha=date('Y-m-j');
 
#echo $fecha . "descripcion: ". $des ."id usuario :" . $id_user ;
$file=null;
$sql_1='SELECT tb_curso_id,tb_grado_id, tb_seccion_id from tb_post where tb_post_id= :id';
 
 $statement = $conn->prepare($sql_1);
$statement->execute( array(':id' => $id_post ));
$resultados=$statement->fetchAll();
foreach ($resultados as $key  ) {
	 $_c=$key['tb_curso_id'];
	 $_g=$key['tb_grado_id'];
	 $_s=$key['tb_seccion_id'];
	# echo "cruso: " . $_c . "grado" . $_g  . "seccion" . $_s;
}

	$statement9 = $conn->prepare('SELECT tb_usuario_id  from tb_usuario_curso where tb_curso_id= :id_c' and 'tb_grado_id= :id_g' and 'tb_seccion_id= :id_s');
	$statement9->execute( array(':id_c' => $_c , ':id_g' => $_g ,':id_s' => $_s ));
	$resultados9=$statement9->fetchAll(PDO::FETCH_ASSOC);
 
 
	foreach ($resultados9 as $key9 ) {
	
		 $id_usuario_post=$key9['tb_usuario_id'];
		 

}
		   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO tb_comment (tb_comment_id,tb_comment_desc,tb_usuario_id,tb_comment_fecha,tb_comment_file,tb_usuario_post) VALUES (null,'$des','$id_user','$fecha',null,'$id_usuario_post')";
    
    #print_r( $sql) ;   // use exec() because no results are returned
    $conn->exec($sql);

		 
	$last_id = $conn->lastInsertId();
	#echo  "ultimo id " . $last_id ;
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql2 = "INSERT INTO tb_post_comentario (tb_post_comentario_id,tb_comment_id,tb_post_id) VALUES (null,'$last_id', '$id_post')";
    // use exec() because no results are returned
    $conn->exec($sql2);
  #echo $sql2;
	 	

  


 
  
 
} catch (PDOException $e) {

	 echo  "<br>" . $e->getMessage();
	
}

  

 ?>