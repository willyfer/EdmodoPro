<?php
    $mysqli = new mysqli('localhost','root','','db_colegio');
    if($mysqli -> connect_errno):
        echo "Error al conectarse con MYSQL debido al error".$mysqli->connect_error;
    endif;
?>