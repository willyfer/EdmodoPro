$(document).ready(function() {
    var contador = 1;
    var x = window.matchMedia("(max-width: 340px)")
    if (x.matches) {
        $('#btn_calendario').css({
            "display": 'initial'
        });
        $('#datepicker').css({
            "display": 'none'
        });
        $('#btn_calendario').click(function() {
            if (contador == 1) {
                $('#datepicker').css({
                    "display": 'initial'
                });
                contador = 0
            } else {
                $('#datepicker').css({
                    "display": 'none'
                });
                contador = 1;
            }
        });
    }
});