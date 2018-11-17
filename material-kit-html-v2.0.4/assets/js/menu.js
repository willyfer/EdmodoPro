$(document).ready(main);
var contador = 1;

function main() {
    $('.menu-bar').click(function() {
        $('.menu-bar').css({})
        if (contador == 1) {
            $('#fila_nav').animate({
                "left": '0'
            });
            contador = 0;
        } else {
            $('#fila_nav').animate({
                "left": '-100%'
            });
            contador = 1;
        }
    });
}