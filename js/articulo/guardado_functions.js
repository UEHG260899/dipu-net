$(document).ready(function () {
    
    var idArticulo = "";

    $("#btnBuscarGuardados").click(function (e) { 
    
        var str = $("#iptNomCandidatoSaved").val();

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $("#rowCardsSaved").html(this.responseText);
        }
        };
        xmlhttp.open("GET", "../../php/articulo/getGuardados.php?candidato=" + str, true);
        xmlhttp.send();

    });     

    $(".btnEliminarGuardado").click(function (e) { 
    
        idArticulo = $(this).attr('dataId');
        $("#mdlConfirm").modal('show'); 
 
    }); 
    
    $("#btnAcept").click(function (e) { 
        
        $("#iptNomCandidatoSaved").val('');
        var str = $("#iptNomCandidatoSaved").val();

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
                if(this.responseText == 0){
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        $("#rowCardsSaved").html(this.responseText);
                    }
                    };
                    xmlhttp.open("GET", "../../php/articulo/getGuardados.php?candidato=" + str, true);
                    xmlhttp.send();

                    $("#titleResultSaved").html("¡Eliminación Exitosa!");
                    $("#pResultSaved").html("El artículo ha sido removido de la lista.");
                    $("#mdlErrorSaved").modal('show'); 
                    
                }
                else{
                    $("#titleResultSaved").html("¡Error!");
                    $("#pResultSaved").html("Ocurrió un problema inesperado al remover el artículo.");
                    $("#mdlErrorSaved").modal('show'); 
                }
            }
        };
        xmlhttp.open("GET", "../../php/articulo/deleteGuardado.php?idArticulo=" + idArticulo, true);
        xmlhttp.send();

    });   
});    