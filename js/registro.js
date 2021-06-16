let errores = "";

$(document).ready(function () {
    $("#btnRegistro").click(function () {
        if (!validaciones($(".validar"))) {
            $("#listaErrores").html(errores);
            $("#modalErrores").modal("toggle");
        } else {
            $("#form-register").submit();
        }
    })
});



const validaciones = (formData) => {
    let control = true;
    errores = "";
    let regExpEmail = new RegExp("^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{1,150}$");
    let regExpPwd = new RegExp("^[A-Z][a-z][0-9]{7,20}$");

    $.each(formData, function (index, element) {
        let value = $(element).val();
        let id = $(element).prop("id");

        switch (id) {
            case "email":
                if (!regExpEmail.test(value)) {
                    control = false;
                    errores += "<li>Error en el campo <strong>email</strong>: debe coincidir con el formato <strong> correo@correo.com </strong></li><br>";
                }
                break;
            case "pwd":
                if (!regExpPwd.test(value)) {
                    control = false;
                    errores += "<li>Error en el campo <strong>contraseña</strong>: debe contener Mayúscula, minúscula, número con un minimo de 6 caracteres</li><br>";
                }
                break;
           
            

        }
    });

    return control;
}