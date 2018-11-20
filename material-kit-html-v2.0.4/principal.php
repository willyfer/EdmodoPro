<?php 
$lista_sms = array('pedro' => 'hola como estas ', 'rosa' => 'hi', 'juan' => 'pagame', 'pepe' => 'cv', 'crush' => 'te amo' );

 ?>
<!DOCTYPE doctype html>
<meta charset="utf-8"/>
<html lang="en">
    <head>
        <title>
            Edmodo Pro
        
        </title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
         <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/plugins/moment.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/bootstrap-datetimepicker.js"></script>
    <script src="assets/css/datetimepicker.css"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/material-kit.min.css">
    <link rel="stylesheet" href="assets/js/material-kit.js">

     <link href="../assets/demo/demo.css" rel="stylesheet">
 
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Julius+Sans+One|Nanum+Gothic|Pacifico|Shadows+Into+Light|Teko" rel="stylesheet">
      
<script>>
$(function () {
$("#datepicker").datetimepicker();
});
</script>

        
        <link href="https://fonts.googleapis.com/css?family=Allerta" rel="stylesheet">
        </link>
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
        </link>
        <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
        </link>
        <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
        </link>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        </link>
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        </link>
        <link href="assets/css/estili_willy.css" rel="stylesheet">
        </link>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport"/>
        <!--     Fonts and icons     -->
    </head>
    <body>
        <header style="margin-bottom: 7px">
             <div class="menu-bar">
                <a class="bt-menu" href="#">
                    <span class="glyphicon glyphicon-list">
                    </span>
                   MENU
                </a>
            </div>
            <nav id="fila_nav">

                     
                <ul>
                    <li>
                        <img alt="#" class="img-responsive img_logo" src="assets/img/logo2.png ">
                        </img>
                    </li>
                    <li>
                        <div>
                            <form action="#" class="navbar-form">
                                <input class="form-control" id="form_search" placeholder="Buscar..." type="text">
                                </input>
                                <button class="btn glyphicon glyphicon-search " id="btn_buscar" type="submit">
                                </button>
                            </form>
                        </div>
                    </li>
                    <li class="">
                        <a class="activo" href="#">
                            INICIO
                        </a>
                    </li>
                    <li>
                         
                             <a href="#" id="chat_sms" onclick=" ">
                            MENSAJES
                        </a>
                        <div class="mensaje">   
 
                                 <?php  
                               foreach ($lista_sms as $sms => $value) {
                                    echo '<ul >' .  ' <img alt="#" class="img-responsive img_small img-circle" src="assets/img/willy.jpg ">
                        </img>' . '<li>' . $sms . '<a>' . $value . '</a>' . '</li>' . '</ul>';
                               }
     
                                 ?>  
                                 <a href="#" style="color: black"> ver todos </a>                            
                     

                        </div>
                              
                  
                    </li>
                    <li>
                        <a href="#">
                            TAREAS
                        </a>
                    </li>
                    <li>
                        <a class="glyphicon glyphicon-lock" href="#">
                        </a>
                    </li>
                    <li class="rigth_navbar">
                        <a href="#">
                            <span class="glyphicon glyphicon-user">
                            </span>
                            SIGN UP
                        </a>
                    </li>
                    <li class="rigth_navbar ">
                        <a href="examples/login-page.html">
                            <span class="glyphicon glyphicon-log-in">
                            </span>
                            CERRAR SESIÓN
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="container" style="background-color: white;margin-top: 90px;">
            <div class="row">
                <div class="col-md-4 " id="container_perfil">
                    <div class=" " id="perfil">
                        <div>
                            <img alt="foto de perfil" class=" img_big img-raised rounded-circle img-fluid" id="foto_perfil" src="assets/img/tablero-de-ajedrez.png">
                            </img>
                        </div>
                        <div class="container">
                            <label for="">
                                Willy fernandez Gastelo
                            </label>
                        </div>
                        <div class="container">
                            <label for="">
                                Alumno
                            </label>
                        </div>
                    </div>
                    <div>

                      <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active show" href="#studio" role="tab" data-toggle="tab" aria-selected="true">
                           <i><img src="assets/img/matematicas.jpg" class="img_medium" alt="#"> </i> Matemáticas 1
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#works" role="tab" data-toggle="tab" aria-selected="false">
                            <i class="material-icons">palette</i> Ciencias   
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#favorite" role="tab" data-toggle="tab" aria-selected="false">
                            <i class="material-icons"><img src="assets/img/biologia.png" class="img_medium" alt=""></i> Biología
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#favorite" role="tab" data-toggle="tab" aria-selected="false">
                         cc Inglés 
                          </a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link" href="#favorite" role="tab" data-toggle="tab" aria-selected="false">
                            <i ><img src="" alt=""></i> Geografía 
                          </a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link" href="#favorite" role="tab" data-toggle="tab" aria-selected="false">
                            <i class="material-icons"><img src="assets/img/comunicacion.png" class="img_medium" alt=""></i> comunicacion 
                          </a>
                        </li>
                          <li class="nav-item">
                          <a class="nav-link" href="#favorite" role="tab" data-toggle="tab" aria-selected="false">
                            <i class="material-icons">favorite</i> Educación  física
                          </a>
                        </li>

                      </ul>
            
                       
                    </div>
                    <button class="btn btn-primary  " id="btn_calendario" >
                           ver calendario
                    </button>
                    <div id="datepicker">
                         
                    </div>
                </div>
                <div class=" col-md-7" id="container_posts" >
                     <div id="conatiner_posts_2">
                        <div id="posts">
                           <div class="row" id="head_postes" style="padding:5px ;margin:5px">
                                <img alt="#" class="img-rounded img-circle img_small" src="assets/img/willy.jpg">
                                </img>
                                <a href="#" style="color: black">
                                    Willy fernandez Gastelo
                                    <span class="glyphicon glyphicon-play">
                                        <a href="#">
                                            curso I informatica
                                        </a>
                                    </span>
                                </a>
                            </div>
                            <div class="" id="posteado">
                                <label for="#" style="color: black ;font-size: 14px">
                                    publicacion descripcion
                                </label>
                                <div>
                                    <img alt="" class="img_big center-block" src="assets/img/Madoka.jpg">
                                    </img>
                                </div>
                            </div>
                            <div id="options_post">
                                <button class="btn btn-primary glyphicon glyphicon-heart">
                                    like
                                </button>
                                <button class="btn btn-white glyphicon glyphicon-comment">
                                    Comentar
                                </button>
                            </div>
                        </div>
                          <div id="posts">
                           <div class="row" id="head_postes" style="padding:5px ;margin:5px">
                                <img alt="#" class="img-rounded img-circle img_small" src="assets/img/willy.jpg">
                                </img>
                                <a href="#" style="color: black">
                                    Willy fernandez Gastelo
                                    <span class="glyphicon glyphicon-play">
                                        <a href="#">
                                            curso I informatica
                                        </a>
                                    </span>
                                </a>
                            </div>
                            <div class="" id="posteado">
                                <label for="#" style="color: black ;font-size: 14px">
                                    publicacion descripcion
                                </label>
                                <div>
                                    <img alt="" class="img_big center-block" src="assets/img/Madoka.jpg">
                                    </img>
                                </div>
                            </div>
                            <div id="options_post">
                                <button class="btn btn-primary glyphicon glyphicon-heart">
                                    like
                                </button>
                                <button class="btn btn-white glyphicon glyphicon-comment">
                                    Comentar
                                </button>
                            </div>
                        </div>
                          <div id="posts">
                           <div class="row" id="head_postes" style="padding:5px ;margin:5px">
                                <img alt="#" class="img-rounded img-circle img_small" src="assets/img/willy.jpg">
                                </img>
                                <a href="#" style="color: black">
                                    Willy fernandez Gastelo
                                    <span class="glyphicon glyphicon-play">
                                        <a href="#">
                                            curso I informatica
                                        </a>
                                    </span>
                                </a>
                            </div>
                            <div class="" id="posteado">
                                <label for="#" style="color: black ;font-size: 14px">
                                    publicacion descripcion
                                </label>
                                <div>
                                    <img alt="" class="img_big center-block" src="assets/img/Madoka.jpg">
                                    </img>
                                </div>
                            </div>
                            <div id="options_post">
                                <button class="btn btn-primary glyphicon glyphicon-heart">
                                    like
                                </button>
                                <button class="btn btn-white glyphicon glyphicon-comment">
                                    Comentar
                                </button>
                            </div>
                        </div>
                          <div id="posts">
                           <div class="row" id="head_postes" style="padding:5px ;margin:5px">
                                <img alt="#" class="img-rounded img-circle img_small" src="assets/img/willy.jpg">
                                </img>
                                <a href="#" style="color: black">
                                    Willy fernandez Gastelo
                                    <span class="glyphicon glyphicon-play">
                                        <a href="#">
                                            curso I informatica
                                        </a>
                                    </span>
                                </a>
                            </div>
                            <div class="" id="posteado">
                                <label for="#" style="color: black ;font-size: 14px">
                                    publicacion descripcion
                                </label>
                                <div>
                                    <img alt="" class="img_big center-block" src="assets/img/Madoka.jpg">
                                    </img>
                                </div>
                            </div>
                            <div id="options_post">
                                <button class="btn btn-primary glyphicon glyphicon-heart">
                                    like
                                </button>
                                <button class="btn btn-white glyphicon glyphicon-comment">
                                    Comentar
                                </button>
                            </div>
                        </div>
                          <div id="posts">
                           <div class="row" id="head_postes" style="padding:5px ;margin:5px">
                                <img alt="#" class="img-rounded img-circle img_small" src="assets/img/willy.jpg">
                                </img>
                                <a href="#" style="color: black">
                                    Willy fernandez Gastelo
                                    <span class="glyphicon glyphicon-play">
                                        <a href="#">
                                            curso I informatica
                                        </a>
                                    </span>
                                </a>
                            </div>
                            <div class="" id="posteado">
                                <label for="#" style="color: black ;font-size: 14px">
                                    publicacion descripcion
                                </label>
                                <div>
                                    <img alt="" class="img_big center-block" src="assets/img/Madoka.jpg">
                                    </img>
                                </div>
                            </div>
                            <div id="options_post">
                                <button class="btn btn-primary glyphicon glyphicon-heart">
                                    like
                                </button>
                                <button class="btn btn-white glyphicon glyphicon-comment">
                                    Comentar
                                </button>
                            </div>
                        </div>
                          <div id="posts">
                           <div class="row" id="head_postes" style="padding:5px ;margin:5px">
                                <img alt="#" class="img-rounded img-circle img_small" src="assets/img/willy.jpg">
                                </img>
                                <a href="#" style="color: black">
                                    Willy fernandez Gastelo
                                    <span class="glyphicon glyphicon-play">
                                        <a href="#">
                                            curso I informatica
                                        </a>
                                    </span>
                                </a>
                            </div>
                            <div class="" id="posteado">
                                <label for="#" style="color: black ;font-size: 14px">
                                    publicacion descripcion
                                </label>
                                <div>
                                    <img alt="" class="img_big center-block" src="assets/img/Madoka.jpg">
                                    </img>
                                </div>
                            </div>
                            <div id="options_post">
                                <button class="btn btn-primary glyphicon glyphicon-heart">
                                    like
                                </button>
                                <button class="btn btn-white glyphicon glyphicon-comment">
                                    Comentar
                                </button>
                            </div>
                        </div>
                          <div id="posts">
                           <div class="row" id="head_postes" style="padding:5px ;margin:5px">
                                <img alt="#" class="img-rounded img-circle img_small" src="assets/img/willy.jpg">
                                </img>
                                <a href="#" style="color: black">
                                    Willy fernandez Gastelo
                                    <span class="glyphicon glyphicon-play">
                                        <a href="#">
                                            curso I informatica
                                        </a>
                                    </span>
                                </a>
                                        
                            </div>

                            <div class="" id="posteado">
                                <label for="#" style="color: black ;font-size: 14px">
                                    publicacion descripcion
                                </label>
                                <div>
                                    <img alt="" class="img_big center-block" src="assets/img/Madoka.jpg">
                                    </img>
                                </div>
                            </div>
                            <div id="options_post">
                                <button class="btn btn-primary glyphicon glyphicon-heart">
                                    like
                                </button>
                                <button class="btn btn-white glyphicon glyphicon-comment">
                                    Comentar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer_w">
        
        <a href="http://www.unprg.edu.pe" style="color: white"><span class="glyphicon glyphicon-home" ></span> Universidad Nacional Pedro Ruiz Gallo</a>
        <p style="float: right;"> © 2018 todos los derechos reservados </p>

       

        </footer>

       
         <script src="assets/js/menu.js">
        </script>
        <script src="php/motrar_sms.js">
        </script>
         <script src="assets/js/calendario.js">
        </script>
    </body>
</html>