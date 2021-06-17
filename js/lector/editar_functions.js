var errores = "";
$(document).ready(function () {
    
    $("#btnUpdate").click(function (e) { 
        e.preventDefault();
        if(validarForm()){
            updateInfo();
        }
        else{
            $("#listaErrores").html(errores);
            $("#mdlValidacion").modal('show');
        }
    });

    $("#btnAceptarEdit").click(function (e) { 
        $("#formGetCatalogo").submit();
    });
});

function updateInfo(){

    let nombre = $("#iptNombre").val();
    let app = $("#iptApp").val();
    let apm = $("#iptApm").val();
    let fec_nac = $("#iptFecNac").val();

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            
            if(this.responseText == 0){
                $("#mdlResultado").modal('show');
            }
            else if(this.responseText == 1){
                alert("1");
            }
            else{
                alert(this.responseText);
            }
        }
    };
    xmlhttp.open("GET", "../../php/lectores/updateLector.php?nombre=" + nombre +
                                                            "&app="+app+
                                                            "&apm="+apm+
                                                            "&fec_nac="+fec_nac        
                                                            , true);
    xmlhttp.send();
}

function validarForm(){

    let regExText = new RegExp("^[a-zA-ZáéíóúÁÉÍÓÚ ]{2,30}$");
    let bandera = true;
    errores = "";

    $.each($(".form-control"), function(index,element){

        let value = $(element).val();
        let id = $(element).prop("id");

        switch(id){
            
            case "iptNombre":
                if (!regExText.test(value)) {
                    bandera = false;
                    errores += "<li class='ml-4'>Error en el campo Nombre: Solo se aceptan de 2 a 30 letras.</li><br>";
                }
            break;

            case "iptApp":
                if (!regExText.test(value)) {
                    bandera = false;
                    errores += "<li class='ml-4'>Error en el campo Apellido Paterno: Solo se aceptan de 2 a 30 letras.</li><br>";
                }
            break;

            case "iptApm":
                if (!regExText.test(value)) {
                    bandera = false;
                    errores += "<li class='ml-4'>Error en el campo Apellido Materno: Solo se aceptan de 2 a 30 letras.</li><br>";
                }
            break;
            
            case "iptFecNac":
                if (value == "") {
                    errores += "<li class='ml-4'>Error en el campo Fecha de Nacimiento: No se aceptan valores vacios.</li><br>";
                    bandera = false;
                } else {
                    let fecha_act = new Date();
                    let fecha = value.split("-");
                    let fecha_nac = new Date(fecha[0], fecha[1] - 1, fecha[2]);
                    if (fecha_nac > fecha_act) {
                        bandera = false;
                        errores += "<li class='ml-4'>La fecha introducida no puede ser mayor a la actual.</li><br>";
                        
                    }
                }
                
            break;
        }
    });

    return bandera;
}