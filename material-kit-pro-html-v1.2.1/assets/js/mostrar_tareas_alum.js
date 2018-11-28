$(document).ready(function() {
    $("#mate").click(function() {
        $("div#tareas_docente").load('modelo/cargar_tareas_alum.php');
    });
    $("#comunicacion").click(function() {
        $("div#tareas_docente").load('modelo/cargar_tareas_alum.php');
    });
    $("#biologia").click(function() {
        $("div#tareas_docente").load('modelo/cargar_tareas_alum.php');
    });
    $("#fisica").click(function() {
        $("div#tareas_docente").load('modelo/cargar_tareas_alum.php');
    });
    $("#historia").click(function() {
        $("div#tareas_docente").load('modelo/cargar_tareas_alum.php');
    });
});