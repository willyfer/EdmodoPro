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

      <script  type="text/javascript">
$('.datetimepicker').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
});
      </script>

 <script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="assets/js/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
	<script src="assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	

	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
	<script src="assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script src="assets/js/bootstrap-tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
	<script src="assets/js/jasny-bootstrap.min.js"></script>
		<script src="assets/js/cerrar_modales.js"></script>
		<script src="assets/js/date.js"></script>

	<!-- Plugin For Google Maps -->
	 



	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js?v=1.2.1" type="text/javascript"></script>

	<!-- Fixed Sidebar Nav - JS For Demo Purpose, Don't Include it in your project -->
	<script src="assets/assets-for-demo/modernizr.js" type="text/javascript"></script>
	<script src="assets/assets-for-demo/vertical-nav.js" type="text/javascript"></script>
   <?php require 'partes/scripts.php'; ?>
<!-- menu_prof.php?curso=' . $id_curso . '&seccion=' . $id_seccion .'&grado=' . $id_grado .'" id="' . $nombre_curso . '-->
 <script src="assets/js/cargar_iconos_cursos.js"> </script>