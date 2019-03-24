$(document).ready(function () {
    $('#submit').on('click', function () {
        $.ajax({
            type: "POST",
            url: "../php/index.php",
            data: {
                target: "login",
                email: $('#inputEmail').val(),
                passward: $('#inputPassword').val()
            },
            success: function (responce) {
                $('div#alertContent').html(responce);
                $('button#alert').click();
            }
        });
    })

    $('#register').on('click', function () {
        $.ajax({
            type: "POST",
            url: "../php/index.php",
            data: {
                target: "register",
                email: $('#inputEmail').val(),
                passward: $('#inputPassword').val(),
                relName: $('#relName').val(),
                telephone: $('#telephone').val()
            },
            success: function (responce) {
                $('div#alertContent').html(responce);
                $('button#alert').click();
            }
        });
    })

    $('#reInputPassword').blur(function (e) {
        e.preventDefault();
        if ($('#inputPassword').val() != $('#reInputPassword').val()) {
            $('#reInputPassword').val('');
            $('#reInputPassword').css('background-color', 'red');
            // $('#reInputPassward').attr('placehold', "erro");
        }
    });

    $('#reInputPassword').focus(function (e) {
        e.preventDefault();
        $('#reInputPassword').css('background-color', 'white');
    });

    function c_alert(content) {
    }


});