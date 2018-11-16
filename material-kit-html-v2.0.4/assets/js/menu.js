$(document).ready(main);
var contador = 1;
print("si da javascript")

function main() {
    $('.menu_bar').click(function() {
        if (contador == 1) {
            $('#fila_nav').animate({
                left = '0'
            });
            contador = 0;
        } else {
            $('#fila_nav').animate({
                left = '-100%'
            });
        }
    });
};