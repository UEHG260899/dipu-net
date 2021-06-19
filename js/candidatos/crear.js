$(document).ready(function () {

    $("#guardar").click(function () {
        var valResult = validarCampos($('.validar'));
        if (valResult.success) {
            $("#formRegistrar").submit();
        }
    });

    $("#formRegistrar").submit(function () {
        $.ajax({
            type: "POST",
            url: "CRUD.php",
            data: {
                opc: "registrar",
                nombreCan: $('#nombreCan').val(),
                apPatCan: $('#apPatCan').val(),
                apMatCan: $('#apMatCan').val(),
                generoCan: $('#generoCan').val(),
                estadoCan: $('#estadoCan').val(),
                municipioCan: $('#municipioCan').val(),
                nacimientoCan: $('#nacimientoCan').val(),
                imgCan: $('#imgCan').val(),
                partidoCan: $('#partidoCan').val(),
                tipoCan: $('#tipoCan').val(),
                distritoCan: $('#distritoCan').val(),
                gradoCan: $('#gradoCan').val(),
                institucionCan: $('#institucionCan').val(),
                puestoCan: $('#puestoCan').val()

            },
            success: function (response) {

                $(location).attr('href',"http://localhost/dipu-net/php/Administrador/home.php");

            }
        });
    });
});