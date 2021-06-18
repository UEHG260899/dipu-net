var partidoSelected;

$(document).ready(function () {
    
    $("#btnElegir").click(function (e) { 
        
        e.preventDefault();
        
        partidoSelected = $('input[name="optradio"]:checked').val();

        $("#iptPartidoPolitico").attr('dataId',partidoSelected);
        
        $("#iptPartidoPolitico").val(getPartidoPolitico(partidoSelected));
    });

    $("#btnBuscar").click(function (e) { 
        
        e.preventDefault();

        var str = $("#iptNomCandidato").val();

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $("#rowCards").html(this.responseText);
        }
        };
        xmlhttp.open("GET", "../../php/articulo/getArticulosNombre.php?candidato=" + str, true);
        xmlhttp.send();
        
    });

    $("#btnFiltrar").click(function (e) { 
        
        $("#iptNomCandidato").val('');

        let gardoAcademico = $('#selGradoAcad').children("option:selected").val();
        let rangoEdad = $('#selRangoEdad').children("option:selected").val();
        let partido = $('#iptPartidoPolitico').attr('dataId');
        let sexo = $('#formFiltrado').find('input[name=rbsexo]:checked').val();
        
        

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $("#rowCards").html(this.responseText);
        }
        };
        xmlhttp.open("GET", "../../php/articulo/getArticulosFiltro.php?gradoAcademico=" + gardoAcademico
                                                                    +"&rangoEdad="+rangoEdad
                                                                    +"&partido="+partido
                                                                    +"&sexo="+sexo
                                                                    +"&idProceso=2", true);
        xmlhttp.send();

    });

    $("#btnLimpiar").click(function (e) { 
        
        $("#iptNomCandidato").val('');

        $('#selGradoAcad').val('cualquiera').prop('selected', true);
        $('#selRangoEdad').val('1').prop('selected', true);
        $('#formFiltrado').find('input[id=rbAmbos]').prop('checked', true);
        $('#iptPartidoPolitico').attr('dataId','todos');
        $('#iptPartidoPolitico').val('Todos');

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $("#rowCards").html(this.responseText);
        }
        };
        xmlhttp.open("GET", "../../php/articulo/getArticulosFiltro.php?idProceso=1", true);
        xmlhttp.send();
    });  
    
    $(".btnMasTarde").click(function (e) { 

        masTarde($(this).attr('dataId'));

        
    });
    
    $(".btnVerCompleto").click(function (e) { 
    
        verCompleto($(this).attr('id_candidato'));
        
    });

    $("#btnIrLogin").click(function (e) { 
        $("#formLogin").submit();
    });
    
});

function masTarde(idArticulo){
    
        
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        //$("#rowCards").html(this.responseText);
        
        if(this.responseText == 2){
            $("#mdlLogin").modal('show');
        }
        else if(this.responseText == 1){
            $("#titleResult").html("¡Error!");
            $("#pResult").html("Ocurrió un problema inesperado al agregar el artículo.");
            $("#mdlError").modal('show');
        }
        else if(this.responseText == 0){
            $("#titleResult").html("¡Guardado!");
            $("#pResult").html("El artículo se ha agregado a su lista para leer más tarde.")
            $("#mdlError").modal('show');

            
        }
        else{
            $("#titleResult").html("¡Error!");
            $("#pResult").html("El usuario no se encuentra registrado como lector.");
            $("#mdlError").modal('show');
        }
    }
    };
    xmlhttp.open("GET", "../../php/articulo/insertMasTarde.php?idArticulo="+idArticulo, true);
    xmlhttp.send();
}

function verCompleto(idCandidato){
    $("#candidato").val(idCandidato);    
    $("#formIdArt").submit();
}

function getPartidoPolitico(value){
    
    var partido = ""; 

    switch(value){
        case "todos":
            partido = "Todos";
            break;
        case "pan":
            partido = "Partido Acción Nacional";
            break;
        case "pri":
            partido = "Partido Revolucionario Institucional";
            break;
        case "prd":
            partido = "Partido de la Revolución Democrática";
            break;
        case "pt":
            partido = "Partido del Trabajo";
            break;
        case "pv":
            partido = "Partido Verde Ecologista de México";
            break;  
        case "mc":
            partido = "Movimiento Ciudadano";
            break;               
        case "morena":
            partido = "MORENA";
            break;
        case "pes":
            partido = "Partido Encuentro Solidario";
            break;
        case "rsp":
            partido = "Redes Sociales Progresistas";
            break;
        case "fuerza":
            partido = "Fuerza por México";
            break;
        case "vpm":
            partido = "Va por México";
            break;
        case "jhh":
            partido = "Juntos Haremos Historia";
            break;  
        case "indep":
            partido = "Candidatura Independiente";
            break;                   

    }

    return partido;

}