$(document).ready(function () {

    $.ajax({
        type: "POST",
        url: "CRUD.php",
        data: {
            opc: "leer",
            id: id
        },
        success: function (response) {
            var jsonData = JSON.parse(response);
            $('#nombreCan').val(jsonData.nombre);
            $('#apPatCan').val(jsonData.ap_paterno);
            $('#apMatCan').val(jsonData.ap_materno);
            $('#generoCan').val(jsonData.genero);
            $('#estadoCan').val(jsonData.estado);
            $('#municipioCan').val(jsonData.municipio);
            $('#nacimientoCan').val(jsonData.fecha_nacimiento)
            $('#imgCan').val(jsonData.url_imagen);
            $('#partidoCan').val(jsonData.id_partido);
            $('#tipoCan').val(jsonData.tipo_candidatura);
            $('#distritoCan').val(jsonData.distrito);
            $('#gradoCan').val(jsonData.carrera);
            $('#institucionCan').val(jsonData.escuela);
            $('#puestoCan').val(jsonData.puesto_actual);
        }
    });


    $("#actualizar").click(function () {
        var valResult = validarCampos($('.validar'));
        if (valResult.success) {
            $("#formRegistrar").submit();
        }
    });

    $("#formRegistrar").submit(function () {
        console.log($('#nombreCan').val());
        $.ajax({
            type: "POST",
            url: "CRUD.php",
            data: {
                opc: "editar",
                id: id,
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
            }
        });
    });
});