<?php 
require 'conexion_w.php';
    
try {
 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 
 
	$id_usuario_session=$_SESSION['id'];
 
$statement = $conn->prepare('SELECT tb_curso_id, tb_grado_id, tb_seccion_id from tb_usuario_curso where tb_usuario_id= :id');
$statement->execute( array(':id' => $id_usuario_session ));
$resultados=$statement->fetchAll();
  
?>  
  <table class="table">
  	<thead> 
  		<tr>
  		 <th class="text-center " scope="col"> </th>
  		 <th>  Curso  </th> 
  		 <th> Grado</th>
  		 <th> Seccion</th>
  		</tr><thead><tbody class="blanco">
 <?php 
 foreach ($resultados as $cant  ) {


 	  $id_curso=$cant['tb_curso_id'];

 	  $id_grado=$cant['tb_grado_id'];
 	  $id_seccion=$cant['tb_seccion_id'];

 
 	 		$statement2 = $conn->prepare('SELECT tb_curso_nombre from tb_curso where tb_curso_id= :id');
			$statement2->execute( array(':id' => $id_curso ));
			$resultados2=$statement2->fetchAll();

			  foreach ($resultados2 as $curso  ) {
			  		$nombre_curso=$curso['tb_curso_nombre'];

					$statement3 = $conn->prepare('SELECT tb_grado_val from tb_grado where tb_grado_id= :id');
					$statement3->execute( array(':id' => $id_grado ));
					$resultados3=$statement3->fetchAll();
					  foreach ($resultados3 as $grado  ) {
						  	$nombre_grado=$grado['tb_grado_val'];
						  	$statement4 = $conn->prepare('SELECT tb_seccion_val from tb_seccion where tb_seccion_id= :id');
							$statement4->execute( array(':id' => $id_seccion ));
							$resultados4=$statement4->fetchAll();
							  foreach ($resultados4 as $seccion ) {
							  	 $nombre_seccion=$seccion['tb_seccion_val'];




									$tem_name=  $nombre_curso . "1" ;
?>
 	 		 	 		  <tr>
 	 		 	 		  	<td>
 	 		 	 		  		<img  id="<?php   echo  $nombre_curso . 1 ?>" src="assets/img/Cursos/calculadora.png" alt="">
 	 		 	 		  	</td>
 	 		 	 		  	<td>
 	 		 	 		  		<a type="button"     href="#" id="<?php  echo $tem_name?> " onclick='javascript:loadtareas(<?php echo  $id_curso . ',' .   $id_grado . ',' .  $id_seccion . ',"' . $nombre_curso . '"' ?>);' ><?php echo $nombre_curso?> </a>
 	 		 	 		  	</td>
 	 		 	 		  	<td> <?php echo $nombre_grado ?> </td>
 	 		 	 		  	<td><?php echo $nombre_seccion ?> </td></tr>
<?php  
				  }  
			  }
		 }
	             

 	 }

 		?>
 	   </tbody>
 	</table>

 <?php 	   
 	 
 
} catch (PDOException $e) {
	echo "Error: " . $e->getMenssage();

	
}
 

 ?>

 <script type="text/javascript">
function loadtareas(c,g,s,n) {
 
   
      
      $.ajax({
          type:'POST',
          url:'php_esencial/consultar_tareas.php',
          data:('CURSO= '+ c+'&GRADO='+ g + '&SECCION='+s +'&nc='+n  ),

          success:function(respuestaw){
        
          document.getElementById('tareas_docente').innerHTML =respuestaw;
         
      
          }

      })
    }
   
  
 
 
   </script>
    <?php require 'partes/scripts.php'; ?>
    
     <script type="text/javascript">
            $(function () {
                $('.datetimepicker').datetimepicker();
            });
        </script>