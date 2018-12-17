

<?php 
require 'conexion.php';

 try {

 
 

 	 	
 	$statement = $conn->prepare('SELECT tb_comment_id from tb_post_comentario where     tb_post_id=:id_s');
		$statement->execute( array(  ':id_s' => $id_post));
		$resultados=$statement->fetchAll();
				foreach ($resultados as $key  ) {
					 	$v=$key['tb_comment_id'];
					 	



					


					 	$statement2 = $conn->prepare('SELECT * from tb_comment where     tb_comment_id=:id_c');
						$statement2->execute( array(  ':id_c' => $v));
						$resultados2=$statement2->fetchAll();

						foreach ($resultados2 as $key2) {
							$_des =$key2['tb_comment_desc'];
							$_id_usuario =$key2['tb_usuario_id'];
							$_fecha =$key2['tb_comment_fecha'];
							$_file =$key2['tb_comment_file'];


							$id_usuario_comemt=$key2['tb_usuario_id'];
					  

					 	 $statement7 = $conn->prepare('SELECT tb_usuario_nom, tb_usuario_ape from tb_usuario where tb_usuario_id= :id');
					$statement7->execute( array(':id' => $id_usuario_comemt ));
					$resultados7=$statement7->fetchAll();
					foreach ($resultados7 as $key7  ) {
						 $nombre_usuario=$key7['tb_usuario_nom'] . "  " .  $key7['tb_usuario_ape'];
					}
							 
  ?>
 
				
 	
		<div class="container" style="display: flex; margin: 5px;" id="comentario" >
			 <a class="pull-left" href="#pablo">
	            <div class="img_small">
	               	<img class="media-object img-circle" src="assets/img/faces/marc.jpg" alt="...">
	            </div>
	        </a>
			<div style="margin-left: 7px">
						<div style="display: flex;">
							
						<p class="media-heading h4" style=" ">  <?php echo $nombre_usuario  ?>  </p>
		        		 <p style="color: black; margin-left: 5px"><?php echo $_des; ?></p>

						</div>
							
	           				
		        		
				   <div style="padding: 0px ">
				 				<label style="font-size: 10px "> <?php echo ". " .  $_fecha ?></label>
						       	<a  id ="send_coment" style="font-size: 12px"   href="#" class=" ">responder</a>		
					</div>
			</div>

			
		        		
		    
		        
		        								 
		 </div>
 	 <?php 		

 				}
				
			}
	
 } catch (	Exception $e) {
 	
 }
	
 

 ?>



 