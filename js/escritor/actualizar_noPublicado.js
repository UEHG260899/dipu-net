$(document).ready(function () {

    var editor = new Jodit('#editor');
    $("#editor").on('change', function (e) {
        $("#articulo").val(editor.value);
    });


    $("#actualizar").click(function () {
        var valResult = validarCampos($('.validar'));
        if (valResult.success) {
            $.ajax({
                type: "POST",
                url: "articulo/CRUD.php",
                data: {
                    operacion: "editar_noPublicado",
                    id: id,
                    articulo: $('#articulo').val()

                },
                success: function (response) {
                    var jsonData = JSON.parse(response);
                    alert(jsonData.msg);
                }
            });

        }

    });

});