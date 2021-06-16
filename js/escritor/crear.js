$(document).ready(function () {

    $("#guardar").click(function () {
  
      $('#opcion').val("guardar");
      $('#idC').val($('#idCandidato').val());
  
      var valResult = validarCampos($('.validar'));
      if (valResult.success) {
          if($('#idC').val().length!=0){
             $("#formAgregar").submit(); 
          }else{
              $('#modal').modal('show');
          }
          
      }
  
    });
  
    $("#publicar").click(function () {
  
      $('#opcion').val("publicar");
      $('#idC').val($('#idCandidato').val());
  
      var valResult = validarCampos($('.validar'));
      if (valResult.success) {
          if($('#idC').val().length!=0){
             $("#formAgregar").submit(); 
          }else{
              $('#modal').modal('show');
          }
          
      }
    });
  
    $("#articulo").keyup(function(){
      $("#preArticulo").val($("#articulo").val());
    });
  });
  
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
        xmlhttp.open("GET", "getinfo.php?candidatoB=" + str, true);
        xmlhttp.send();
    }
}

function mostrarDatosCandidato(str) {
    if (str == "") {
        document.getElementById("candidato").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("candidato").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getinfo.php?submitElegir=" + str, true);
        xmlhttp.send();
    }
}