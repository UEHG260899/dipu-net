var partidoSelected;

$(document).ready(function () {
    
    $("#btnElegir").click(function (e) { 
        
        e.preventDefault();
        
        partidoSelected = $('input[name="optradio"]:checked').val();
        
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
});

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