$(document).ready(function () {
    
  });
  function getArticulo(str) {
    if (str == "") {
        document.getElementById("publicar").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("publicar").innerHTML = this.responseText;
                document.getElementById("AbrirModalP").click();
            }
        };
        xmlhttp.open("GET", "articulo/getinfo.php?getModalPublicar=" + str, true);
        xmlhttp.send();
    }
}
function EliminarArticulo(str) {
    if (str == "") {
        document.getElementById("eliminar").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("eliminar").innerHTML = this.responseText;
                document.getElementById("AbrirModalE").click();
            }
        };
        xmlhttp.open("GET", "articulo/getinfo.php?modalEliminarArticulo=" + str, true);
        xmlhttp.send();
    }
}

function mostrarCandidatos(str) {
    if (str == "") {
        document.getElementById("candidatos").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("candidatos").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "articulo/getinfo.php?candidatoBHome=" + str, true);
        xmlhttp.send();
    }
}

