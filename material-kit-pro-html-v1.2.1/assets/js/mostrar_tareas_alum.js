$(document).ready(function() {
    $("#Matematica").click(function() {
        $("#tareas_titulo").css({
            "color": "green"
        });
    });
    $("div#tareas_docente").load('modelo/cargar_tareas.php');
});
$("#Comunicacion").click(function() {
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
$("#Matematica1").click(function() {
    $("#tareas_titulo").css({
        "color": "green"
    });
    $("div#tareas_docente").load('modelo/cargar_tareas.php');
});
$("#Comunicacion1").click(function() {
    $("div#tareas_docente").load('modelo/cargar_tareas.php');
});
$("#biologia1").click(function() {
    $("div#tareas_docente").load('modelo/cargar_tareas.php');
});
$("#fisica1").click(function() {
    $("div#tareas_docente").load('modelo/cargar_tareas.php');
});
$("#historia1").click(function() {
$("div#tareas_docente").load('modelo/cargar_tareas.php');
});
});