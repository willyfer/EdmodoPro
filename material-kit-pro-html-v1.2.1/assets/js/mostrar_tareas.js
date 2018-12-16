$(document).ready(function(evento) {
    $("#Matematica").click(function(evento) {
        var id = '<?php  echo $id_curso; ?>';
        evento.preventDefault();
        $("#tareas_titulo").css({
            "color": "green"
        });
        $("div#tareas_docente").load('modelo/cargar_tareas.php', {
            curso: id
        });
    });
    $("#Comunicacion").click(function(evento) {
        evento.preventDefault();
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
    $("#biologia").click(function(evento) {
        evento.preventDefault();
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
    $("#fisica").click(function(evento) {
        evento.preventDefault();
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
    $("#historia").click(function(evento) {
        evento.preventDefault();
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
    $("#Matematica1").click(function(evento) {
        evento.preventDefault();
        $("#tareas_titulo").css({
            "color": "green"
        });
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
    $("#Comunicacion1").click(function(evento) {
        evento.preventDefault();
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
    $("#biologia1").click(function(evento) {
        evento.preventDefault();
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
    $("#fisica1").click(function(evento) {
        evento.preventDefault();
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
    $("#historia1").click(function(evento) {
        evento.preventDefault();
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
});