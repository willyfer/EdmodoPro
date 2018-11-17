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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
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
                    Menu
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
                    <li class="active">
                        <a class=" " href="#">
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
        <div class="container">
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
                        <button class="btn btn-primary btn-block" id="pruebaxxx" onclick="">
                            curso 1
                        </button>
                        <button class="btn btn-primary btn-block glyphicon glyphicon-link" onclick="location.href='php/conexion.php'">
                            curso 2
                        </button>
                        <button class="btn btn-primary btn-block" onclick="location.href='php/insert_post.php'">
                            curso 3
                        </button>
                        <button class="btn btn-primary btn-block">
                            curso 4
                        </button>
                    </div>
                </div>
                <div class=" col-md-7" id="container_posts" style="height: 100%">
                    <iframe scrolling='no' src="plantillas/platilla_publicaciones.html" style="overflow: hidden;height: 100%" width="100%">
                    </iframe>
                </div>
            </div>
        </div>
        <iframe scrolling="no" src="plantillas/plantilla_footer.html" width="100%" id="iframe_footer">
        </iframe>
       
         <script src="assets/js/menu.js">
        </script>
        <script src="php/motrar_sms.js">
        </script>
    </body>
</html>