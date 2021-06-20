
function validarCampos(formData) {
    var valResult = {
        success: true,
   };
   $.each(formData, function (index, field) {
        var value = $(field).val();
        var id = $(field).attr('id');
        switch (id) {
   
            case 'articulo':
                if (value < 1) {
                    valResult.success = false;
                    highlightError(field, true);
                    $('.art').html("Ingrese información en la sección de edición de arriba");
                } else {
                    highlightError(field, false);
                    $('.art').html("");

                }
                break;
        }
    });
    return valResult;
}


function highlightError(field, boolean) {

    if (boolean) {
        $(field).addClass('is-invalid');
    } else {
        $(field).removeClass('is-invalid');
    }
}


