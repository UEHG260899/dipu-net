$(document).ready(function () {


    $("#actualizar").click(function () {
        $.ajax({
            type: "POST",
            url: "articulo/CRUD.php",
            data: {
                operacion: "editar_noPublicado",
                id: id,
                articulo: $('#taArticulo').val()

            },
            success: function (response) {
                var jsonData = JSON.parse(response);
                alert(jsonData.msg);
            }
        });

    });

});