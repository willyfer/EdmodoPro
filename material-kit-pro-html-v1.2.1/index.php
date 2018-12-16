<?php
    require 'conexion.php';
?>


<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <title>
            Edmodo Pro
        </title>
        <meta charset="utf-8"/>
        <link href="assets/css/estili_willy.css" rel="stylesheet">
            <link href="./assets/img/apple-icon.png" rel="apple-touch-icon" sizes="76x76">
                <link href="./assets/img/favicon.png" rel="icon" type="image/png">
                    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
                    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport"/>
                    <!--     Fonts and icons     -->
                    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" rel="stylesheet" type="text/css"/>
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
                        <!-- CSS Files -->
                        <link href="./assets/css/material-kit-nuevo.css" rel="stylesheet"/>
                        <!-- CSS Just for demo purpose, don't include it in your project -->
                        <link href="./assets/demo/demo.css" rel="stylesheet"/>
                    </link>
                </link>
            </link>
        </link>
    </head>
    <body>
        <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-translate">
                    <button aria-expanded="true" aria-label="Toggle navigation" class="navbar-toggler navbar-brand" data-toggle="collapse" id="btn_menu">
                        <span class="sr-only">
                            Toggle navigation ffffffff
                        </span>
                        <span class="navbar-toggler-icon">
                        </span>
                        <span class="navbar-toggler-icon">
                        </span>
                        <span class="navbar-toggler-icon">
                        </span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class=" nav-item">
                            <a class="toggle nav-lin btn-success btn-lg" href="examples/login-page.php" onclick="menu.html" style="background-color: #042E66">
                                <i class="material-icons">
                                    supervisor_account
                                </i>
                                Iniciar Sesion
                            </a>
                            <li>
                                <button style="visibility: hidden;">
                                    Email
                                </button>
                                <button style="visibility: hidden;">
                                    Contraseña
                                </button>
                                <button style="visibility: hidden;">
                                    Iniciar
                                </button>
                            </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/Index1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <div class="brand text-center">
                            <h1>
                                Campus Excelsis
                                <h3 class="title text-center">
                                    Bienvenido
                                </h3>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main main-raised">
            <div class="container">
                <div class="section text-center">
                    <h3 class="title mt-0">
                        Seleccione una opción.
                    </h3>
                    <div>
                        <button class="btn btn-primary btn-lg" data-target="#loginModal" data-toggle="modal" href="menu.html" style="background-color: #00BCD4">
                            <i class="material-icons" style="padding: 6%">
                                school
                            </i>
                            Alumno
                        </button>
                        <button class="btn btn-primary btn-lg" data-target="#loginModal" data-toggle="modal" style="background-color: #3F51B5">
                            <i class="material-icons" style="padding: 6%">
                                work
                            </i>
                            Docente
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="section text-center">
                <h2 class="title">
                    Nuestro Equipo
                </h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="team-player">
                                <div class="card card-plain">
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <img alt="Thumbnail Image" class="img-raised rounded-circle img-fluid" src="assets/img/willy.jpg">
                                        </img>
                                    </div>
                                    <h4 class="card-title">
                                        Willy Fernández Gastelo
                                        <br>
                                            <small class="card-description text-muted">
                                                Desarrollador
                                            </small>
                                        </br>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">
                                            Estudiante de Ingeniería de Sistemas
                                            <p class="card-description">
                                                Sìguelo en sus redes sociales.
                                            </p>
                                        </p>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <a class="btn btn-link btn-just-icon" href="#WillyFernandez">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                        <a class="btn btn-link btn-just-icon" href="#WillyFernandez">
                                            <i class="fa fa-instagram">
                                            </i>
                                        </a>
                                        <a class="btn btn-link btn-just-icon" href="https://www.facebook.com/willy.fernandezgastelo">
                                            <i class="fa fa-facebook-square">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <div class="card card-plain">
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <img alt="Thumbnail Image" class="img-raised rounded-circle img-fluid" src="assets/img/gustavo.jpg">
                                        </img>
                                    </div>
                                    <h4 class="card-title">
                                        Gustavo Reyes Castro
                                        <br>
                                            <small class="card-description text-muted">
                                                Desarrollador
                                            </small>
                                        </br>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">
                                            Estudiante de Ingeniería de Sistemas
                                            <p class="card-description">
                                                Sìguelo en sus redes sociales.
                                            </p>
                                        </p>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <a class="btn btn-link btn-just-icon" href="#GustavoReyes">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                        <a class="btn btn-link btn-just-icon" href="#GustavoReyes">
                                            <i class="fa fa-instagram">
                                            </i>
                                        </a>
                                        <a class="btn btn-link btn-just-icon" href="https://www.facebook.com/gustavo.rey6">
                                            <i class="fa fa-facebook-square">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <div class="card card-plain">
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <img alt="Thumbnail Image" class="img-raised rounded-circle img-fluid" src="assets/img/puican.jpg">
                                        </img>
                                    </div>
                                    <h4 class="card-title">
                                        Jhonny Puican Velasquez
                                        <br>
                                            <small class="card-description text-muted">
                                                Documentador
                                            </small>
                                        </br>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">
                                            Estudiante de Ingeniería de Sistemas
                                            <p class="card-description">
                                                Sìguelo en sus redes sociales.
                                            </p>
                                        </p>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <a class="btn btn-link btn-just-icon" href="#JhonnyPuican">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                        <a class="btn btn-link btn-just-icon" href="#JhonnyPuican">
                                            <i class="fa fa-instagram">
                                            </i>
                                        </a>
                                        <a class="btn btn-link btn-just-icon" href="https://www.facebook.com/jpvSistCib">
                                            <i class="fa fa-facebook-square">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <div class="col-md-12">
        <footer class="footer " style="background:#062044">
            <div class="container">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="http://www.unprg.edu.pe/univ/" style="color: white">
                                <i class="material-icons" style="padding: 6%">
                                    business
                                </i>
                                Universidad Nacional Pedro Ruiz Gallo
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right" style="color: white">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <script src="./assets/jss/core/jquery.min.js" type="text/javascript">
                    </script>
                    <script src="./assets/jss/core/popper.min.js" type="text/javascript">
                    </script>
                    <script src="./assets/jss/core/bootstrap-material-design.min.js" type="text/javascript">
                    </script>
                    <script src="./assets/jss/plugins/moment.min.js">
                    </script>
                    <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
                    <script src="./assets/jss/plugins/bootstrap-datetimepicker.js" type="text/javascript">
                    </script>
                    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
                    <script src="./assets/jss/plugins/nouislider.min.js" type="text/javascript">
                    </script>
                    <!--  Plugin for Sharrre btn -->
                    <script src="./assets/jss/plugins/jquery.sharrre.js" type="text/javascript">
                    </script>
                    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
                    <script src="./assets/jss/material-kit.js?v=2.0.4" type="text/javascript">
                    </script>
                    todos los derechos reservados, con colaboracion de
                    <a href="https://www.creative-tim.com/" style="color:aqua" target="blank">
                        MidoriyaCorp.
                    </a>
                </div>
            </div>
        </footer>
    </div>
</html>
<!-- Login Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="loginModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        <i class="material-icons">
                            clear
                        </i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="form" method="">
                        <p class="description text-center">
                            Inserte Codigo
                        </p>
                        <div class="card-content">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">
                                        face
                                    </i>
                                </span>
                                <input class="form-control" placeholder="Codigo..." type="text">
                                </input>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">
                                        lock_outline
                                    </i>
                                </span>
                                <input class="form-control" placeholder="Password..." type="password"/>
                            </div>
                            <!-- If you want to add a checkbox to this form, uncomment this code

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                    Subscribe to newsletter
                                </label>
                            </div> -->
                        </div>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <a class="btn btn-primary btn-simple btn-wd btn-lg" href="menu_alumno.php">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->
