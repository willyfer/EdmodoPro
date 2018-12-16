

<?php 
require 'conexion.php';

try {
	
	  
	 if (isset($_POST['CURSO']) && isset($_POST['SECCION']) &&  isset($_POST['GRADO'])&&isset($_POST['nc'])) {
	  
	$curso_id= $_POST['CURSO'];
	$grado_id= $_POST['GRADO'];
	$seccion_id= $_POST['SECCION'];
	$nombre_curso= $_POST['nc'];
 
	 
 
 
	 	 ?>
 
	 <table>

	 	<thead>
				<tr>
					<?php #echo "curso: " . $curso_id . "grado: " . $grado_id . "seccion: " . $seccion_id; ?> 
					<th ><?php 	 echo $nombre_curso  ?></th>
					<th><a href="#" class="btn btn-rose btn-xs" data-toggle="modal" data-target="#nuevatarea"    > <i class="material-icons">add</i>Crear Tarea</a></th>
				</tr>
			</thead><tbody   class="blanco"> 

	<?php	
		$statement = $conn->prepare('SELECT tb_tarea_id from tb_post where tb_curso_id=:id_c and tb_seccion_id=:id_s and tb_grado_id=:id_g');
		$statement->execute( array( ':id_c' => $curso_id,':id_s' => $seccion_id,':id_g' => $grado_id));
		$resultados=$statement->fetchAll();
		 
		foreach ($resultados as $cant) {
		
			$id_tarea=$cant['tb_tarea_id'];
	
		$statement2 = $conn->prepare('SELECT * from tb_tarea where tb_tarea_id= :id');
		$statement2->execute( array(':id' => $id_tarea ));
		$resultados2=$statement2->fetchAll();

		 
 
		
		 foreach ($resultados2 as $cant2  ) {
		 		 
  	 ?>
		 	   <tr>
					<td ><?php echo $cant2['tb_tarea_nombre']  ?></td> 
					<td>  
						<a class="btn btn-warning btn-xs"    id="btn_tarea1" href="#" >
								<i class="material-icons">
								info
								</i>Revisar
						</a>
					</td>
					</tr>
	<?php 	 		 
		           }             

		 	
		 	
		  
		 }  
 ?>

		 </tbody>

		</table>	
 <?php 	
  }
   include '../partes/nueva_tarea.php'; 
} catch (PDOException $e) {
	echo "Error: " . $e->getMenssage();

	
}

 ?>



 <script type="text/javascript">
 
   
  
 
</script>

<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="assets/js/moment.min.js"></script>
<script src="../assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="../assets/js/nouislider.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>

 	<script src="../assets/js/date.js"></script>
 <script src="assets/js/cargar_iconos_cursos.js"> </script>
   
