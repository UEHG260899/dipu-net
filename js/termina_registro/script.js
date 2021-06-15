let errores = "";

$(document).ready(function () {
    $("#btnFinaliza").click(function () {
        if (!validaciones($(".validar"))) {
            $("#listaErrores").html(errores);
            $("#modalErrores").modal("toggle");
        } else {
            $("#formFinRegistro").submit();
        }
    })
});



const validaciones = (formData) => {
    let control = true;
    errores = "";
    let regExpNombre = new RegExp("^[a-zA-ZáéíóúÁÉÍÓÚ ]{2,30}$");

    $.each(formData, function (index, element) {
        let value = $(element).val();
        let id = $(element).prop("id");

        switch (id) {
            case "nombre":
                if (!regExpNombre.test(value)) {
                    control = false;
                    errores += "<li>Error en el campo nombre: Solo se aceptan de 2 a 30 letras.</li><br>";
                }
                break;
            case "ap_pat":
                if (!regExpNombre.test(value)) {
                    control = false;
                    errores += "<li>Error en el campo Apellido Paterno: Solo se aceptan de 2 a 30 letras.</li><br>";
                }
                break;
            case "ap_mat":
                if (!regExpNombre.test(value)) {
                    control = false;
                    errores += "<li>Error en el campo Apellido Materno: Solo se aceptan de 2 a 30 letras.</li><br>";
                }
                break;
            case "fecha_nac":
                if (value == "") {
                    errores += "<li>Error en el campo Fecha de Nacimiento: No se aceptan valores vacios.</li><br>";
                    control = false;
                } else {
                    let fecha_act = new Date();
                    let fecha = value.split("-");
                    let fecha_nac = new Date(fecha[0], fecha[1] - 1, fecha[2]);
                    if (fecha_nac > fecha_act) {
                        errores += "<li>La fecha introducida es mayor a la actual, por favor cambie este dato.</li><br>";
                        control = false;
                    }
                }
                
                break;

        }
    });

    return control;
}