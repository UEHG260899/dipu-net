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
  