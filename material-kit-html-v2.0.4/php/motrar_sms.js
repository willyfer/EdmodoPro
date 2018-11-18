$(document).ready(function() {
    $cont = 0
    var x = window.matchMedia("(max-width: 960px)")
    $("#chat_sms").click(function() {
        if (x.matches) {
            $(".mensaje").css({
                "display": 'none',
            })
        } else {
            $("#fila_nav").css({
                "overflow": 'flex',
            })
            $("#chats_sms").css({})
            if ($cont == 0) {
                $(".mensaje").css({
                    "display": 'block',
                    "position": 'absolute',
                    "top": "71px",
                    "margin": "1px 1px",
                    "background-color": 'white',
                    'color': 'black',
                    "zIndex": '1'
                })
                $cont = 1
            } else {
                $(".mensaje").css({
                    "display": "none",
                })
                $cont = 0
            }
        }
    });
});