	
<?php session_start();
		$_SESSION['usuario']="willy";
		 $_SESSION['id']=2;
		$_SESSION['contraseña']="dfdfsdf";
 	 
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sistema Academico  Docente</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css?v=1.2.1" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/assets-for-demo/vertical-nav.css" rel="stylesheet" />
	<link href="assets/assets-for-demo/demo.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/indice.css">
	<link rel="stylesheet" href="assets/demo/demo.css">
	 
</head>
<body>
	
	<?php include 'partes/header.php'; ?>
	<div class="row" style="margin:  16px;">
		<?php include 'partes/div_cursos_prof.php'; ?>
		<div class=" col-md-5" id="publicaciones">
				 
					<div  id="contenido_publicacion">
		        		<div class="row" style="padding: 0px !important">
		        			<div >
		        				<div class="media-area" id="conatiner_posts_2">
		        					 
		        					 <?php require 'php_esencial/onsultar_post.php'; ?>
  							    </div>
		        			</div>
		        		</div>

		        				 
		        				 
		       		</div>

 
		    </div>
		 
					 
			 
		<?php include 'partes/div_tareas_prof.php'; ?>
	</div>
	
	<?php include 'partes/modal_tarea_alumno.php'; ?>
<!-- modal foto-->
	<?php include 'partes/modal_camniar_foto.php'; ?>
	
	 
	
 
<!-- Modal alert confirmar cambio de foto de perfil-->	
<?php include 'partes/modal_confirmar_foto.php'; ?>
<?php include 'partes/footer.php'; ?>
	 
</body>


 <script type="text/javascript">
function loadnuevatareas(c,g,s) {
 
    var id_d= document.getElementById("des").value;
    var id_f_i=document.getElementById("fech_ini").value;
      var id_f = document.getElementById("fec_fin").value;
       var id_doc = document.getElementsByName("archivo").value;
        var id_t = document.getElementById("titulo").value;

  
      $.ajax({
          type:'POST',
          url:'php_esencial/registrar_tarea.php',
          data:('titulo='+ id_t +'&des='+ id_d + '&fec_fin=' +id_f  +"&fec_ini=" + id_f_i+ "&C="+ c +"&S=" + s+ "&G=" +g),

          success:function(respuestazz){
         

                       
        		 
            
             
         
      
          }

      })
  document.getElementById("enviar_file").submit();  
reload();
    }

   
  
 
</script>
     
 <?php require 'partes/scripts.php'; ?>

  <script type="text/javascript">
            $(function () {
                $('.datetimepicker').datetimepicker();
            });
        </script>
 
  
 <script type="text/javascript">
 


function listar_alumnos(curso,grado,seccion,tarea) {
  		
    $("div#publicaciones").load('modelo/revisar_tarea.php');

      $.ajax({
          type:'POST',
          url:'php_esencial/cargar_alumnos.php',
          data:('id_curso='+ curso+'&id_grado='+ grado+'&id_seccion='+ seccion+'&id_tarea='+tarea),

          success:function(respuestasa){
           

         
             
            
          
            document.getElementById("body").innerHTML = respuestasa;
       
                      
            
      
          }

      })

    }



    function calificar(usuarioc,tareac ){

    var notac=  document.getElementsByTagName("notas").value;

   $.ajax({
          type:'POST',
          url:'php_esencial/calificar.php',
          data:('tarea='+ tareac+'&alumno='+ usuarioc+'&nota='+ notac),

          success:function(respuestasc){
           
              alert(respuestasc)

      
          }

      })

    }
 
</script>

	</html>