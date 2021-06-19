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


    $("#borrar").click(function () {
        $("#formBorrar").submit();
    });

    $("#formBorrar").submit(function () {
        $.ajax({
            type: "POST",
            url: "CRUD.php",
            data: {
                opc: "borrar",
                id : id
            },
            success: function (response) {
                var jsonData = JSON.parse(response);
                alert(jsonData.msg);
            }
        });
    });
});