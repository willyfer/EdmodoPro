
<?php 



try {
	require 'conexion_w.php';

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 
 
	$id_usuario_session=$_SESSION['id'];

 $statement7 = $conn->prepare('SELECT tb_usuario_nom, tb_usuario_ape from tb_usuario where tb_usuario_id= :id');
$statement7->execute( array(':id' => $id_usuario_session ));
$resultados7=$statement7->fetchAll();
foreach ($resultados7 as $key7  ) {
	 $nombre_usuario1=utf8_decode($key7['tb_usuario_nom'] . "  " .  $key7['tb_usuario_ape']);
}




 $statement1 = $conn->prepare('SELECT tb_curso_id, tb_grado_id, tb_seccion_id from tb_usuario_curso where tb_usuario_id= :id');
$statement1->execute( array(':id' => $id_usuario_session ));
$resultados1=$statement1->fetchAll();


$cont=0;
foreach ($resultados1 as $key ) {

			$curso_id=$key['tb_curso_id'];

			$grado_id=$key['tb_grado_id'];

			$seccion_id=$key['tb_seccion_id'];
 $statement5 = $conn->prepare('SELECT tb_curso_nombre  from tb_curso where tb_curso_id= :id');
$statement5->execute( array(':id' => $curso_id ));
$resultados5=$statement5->fetchAll();

foreach ($resultados5 as $key5 ) {
	$nombre_curso=$key5['tb_curso_nombre'];
}

$statement = $conn->prepare('SELECT tb_tarea_id, tb_post_id from tb_post where tb_curso_id=:id_c and tb_seccion_id=:id_s and tb_grado_id=:id_g');
		$statement->execute( array( ':id_c' => $curso_id,':id_s' => $seccion_id,':id_g' => $grado_id));
		$resultados2=$statement->fetchAll();
		
		foreach ($resultados2 as $cant) {
		 		$id_post=$cant['tb_post_id'];
		 		 
			$id_tarea=$cant['tb_tarea_id'];
	
		$statement2 = $conn->prepare('SELECT * from tb_tarea where tb_tarea_id= :id');
		$statement2->execute( array(':id' => $id_tarea ));
		$resultados3=$statement2->fetchAll();
			
			foreach ($resultados3 as $key2) {
	 ?>			 

			 <div class="media">

		        						<a class="pull-left" href="# ">
		        							<div class="avatar">
		        								<img class="media-object" src="assets/img/faces/marc.jpg" alt="...">
		        							</div>
		        						</a>
		        						<div class="media-body">
		        							<h4 class="media-heading h4">  <?php echo $nombre_usuario1  ?><i class="material-icons" style="vertical-align: middle;">chevron_right</i> <small style="color: black"> <?php echo $nombre_curso ?></small></h4>
		        							<h6 class=" ">  <?php echo $key2['tb_tarea_nombre']  ?></h6>
		        							 
    					
    										<?php $id_txt=$cont . "t" ;
    												$id_div= $cont . "d";
    												$id_b=$cont ."b";

    										?>
												 
		        							<h5> <?php echo $key2['tb_tarea_desc']  ?></h5>
		        							 
		        							<div class="media-footer "  >
		        								<a href="#" id="<?php echo $id_b ?>" class="btn btn-default btn-simple pull-right"
		        								 rel="tooltip"  onclick='javascript:ver(<?php echo  '"' . $id_txt . '","' . $id_div . '"' ?>);' data-original-title="Reply to Comment">
		        									<i class="material-icons">reply</i> comentar
		        								<div class="ripple-container"></div></a>
		        								<a href="#pablo" class="btn btn-danger btn-simple pull-right">
		        									<i class="material-icons">favorite</i> 243
		        								<div class="ripple-container"></div></a>
		        							</div>
								
		        							<div id ="<?php echo $id_div ?>" class="media media-post " style="display: none;">
		        								<a class="pull-left" href="#pablo">
					                                    <div class="img_small">
					                                       	<img class="media-object img-circle" src="assets/img/faces/marc.jpg" alt="...">
					                                    </div>
	           										</a>
 
		        									
		        								<div class="media-body " >
		        										<div class="form-group is-empty row " style="display: flex;">

		        											<form action="php_esencial/registrar_comentario.php" method="POST">
		        											<textarea class="form-control " id ="<?php echo $id_txt ?>" placeholder="Comentar algo..." rows="1"></textarea>
		        											<a id "send_coment" href="#" type="button" class="btn  btn-rose btn-xs pull-right" onclick='javascript:enviar_comentario(<?php echo '"' .  $id_txt . '",' . $id_usuario_session .',' .$id_post ?>);'>
		        												<i class="material-icons">reply</i> enviar
		        													 
		        											</a>
		        											<span class="material-input"></span>
		        											</form>
		        											
		        										</div>
		        										 
		        								</div>
		        							</div>
		        						
		        						</div>
		        						<div id="comentarios">
		        							 <?php include 'cargar_comentarios.php'; ?>
		        						</div>
		        						 

		       </div>

								
 <?php
		        				}
$cont++;

	}


}
 
} catch (Exception $e) {
	echo $e->getMessage();
}

 ?>
 

 <script>	
 
function ver(id_txt,id_div){ 

 
document.getElementById(id_div).style.display  ="inherit";
 
 document.getElementById(id_txt).focus();

 

}

 

 

		function enviar_comentario(id_text, usuario,id_post) {
var desc=document.getElementById(id_text).value;

      $.ajax({
          type:'POST',
          url:'php_esencial/registrar_comentario.php',
          data:('des='+ desc+'&id_user='+ usuario+ "&id_post="+id_post),

          success:function(respuestas){
           

           location.reload();
           
       
                      
            
      
          }

      })


}


 
 
   
 
 </script>


 <script>	 
 /*function loadcomment(id) {
  		
 

      $.ajax({
          type:'POST',
          url:'php_esencial/cargar_comentarios.php',
          data:('id_poste='+ id),

          success:function(respuestasxs){
           

             alert(respuestasxs);
           
       
                      
            
      
          }

      })

    }
var vercomentarios=loadcomment(<?php echo $id_post; ?>);
  document.getElementById("comentarios").innerHTML = vercomentarios; 

 */
 	</script>