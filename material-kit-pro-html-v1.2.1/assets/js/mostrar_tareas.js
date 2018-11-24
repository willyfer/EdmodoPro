$(document).ready(function() {
    $("#mate").click(function() {
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
    $("#comunicacion").click(function() {
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
    $("#biologia").click(function() {
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
    $("#fisica").click(function() {
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
    $("#historia").click(function() {
        $("div#tareas_docente").load('modelo/cargar_tareas.php');
    });
});