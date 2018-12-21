<?php 
require 'conexion_w.php';
 
try {

  
  if (isset($_POST['doc']) && isset($_POST['titulo']) &&  isset($_POST['des'])&&isset($_POST['fec_fin']) &&isset($_POST['C']) &&isset($_POST['S'])&&isset($_POST['G'])) {   


  }
 
      $nombre_tareaw=$_POST['titulo'];
       $arc=$_POST['archivo'];
     
$desc_tarea=$_POST['des'];
 
$fech_final=substr($_POST['fec_fin'],0,10);
$fech_inicial=substr($_POST['fec_ini'],0,10);
 
$tipo="n";
$nulo=null;
$CC=$_POST['C'];
$GG=$_POST['G'];
$SS=$_POST['S'];
 

 //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 //
 //


      //var_dump($_FILES["file"]);


    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO tb_tarea (tb_tarea_id,tb_tarea_nombre,tb_tarea_desc,tb_tarea_fec_ini,tb_tarea_fecha_fin,tb_tarea_tipo) VALUES (null,'$nombre_tareaw','$desc_tarea','$fech_inicial','$fech_final','$tipo')";
    // use exec() because no results are returned
    $conn->exec($sql);

$last_id = $conn->lastInsertId();
   


 $sql2 = "INSERT INTO tb_post (tb_post_id,tb_tarea_id,tb_curso_id,tb_grado_id,tb_seccion_id,tb_file_id) VALUES (null,'$last_id','$CC','$GG','$SS',null)";
    // use exec() because no results are returned
    $conn->exec($sql2);

 
header('Location: ../menu_prof.php');
      
 
catch(Exception $e) {
     echo     $e->getMessage();
      

 }
 
 ?>
 
 