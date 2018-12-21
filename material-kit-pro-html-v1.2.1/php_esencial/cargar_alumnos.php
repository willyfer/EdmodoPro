

<?php 
 

 require 'conexion_w.php';

 try {
 	
 
  $id_ss=$_POST['id_seccion'];
$id_cc=$_POST['id_curso'];
$id_gg=$_POST['id_grado'];
$id_tarea=$_POST['id_tarea'];


 
 	 	
 	$statement = $conn->prepare('SELECT tb_usuario_id from tb_usuario_curso  where     tb_curso_id=:id_c and tb_grado_id=:id_g and tb_seccion_id=:id_s');
		$statement->execute( array(  ':id_c' => $id_cc,':id_g' => $id_gg,':id_s' => $id_ss));
		$resultados=$statement->fetchAll();
				foreach ($resultados as $key  ) {
					 	$id_usuario=$key['tb_usuario_id'];
					 	



					
					 		$tipo="e";	

					 	$statement2 = $conn->prepare('SELECT * from tb_usuario where     tb_usuario_id=:id_u and tb_usuario_tipo=:tipo' );
						$statement2->execute( array(  ':id_u' => $id_usuario, ':tipo' => $tipo));
						$resultados2=$statement2->fetchAll();

						foreach ($resultados2 as $key2) {
							$_usuario_n =$key2['tb_usuario_nom'];
							$_usuario_ape =$key2['tb_usuario_ape'];

				 
						 
						 
 ?>
			 <tr>
			 	 
              <td><?php echo $_usuario_n . "  ". $_usuario_ape; ?></td>
              <td><a href=""class="" >file.doc</a></td>
              <td><input type="text"  name="notas" class="input_calificar" id="input"></td>
              <td>
              <a href="#" class= "btn btn-success btn-xs" type="button" onclick="javascipt:calificar(<?php echo $id_usuario . "," . $id_tarea ?>);"  >guardar</a>  
              </td>		
             
 
 <?php 
				
  	}

 				}
				
			}

	
   catch (	Exception $e) {
 	echo "Error: " . $e->getMenssage();
 	
 }
	
 

 ?>
 

