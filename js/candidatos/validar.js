

function validarCampos(formData) {
  var valResult = {
    success: true,
  };
  $.each(formData, function (index, field) {
    var value = $(field).val();
    var id = $(field).attr('id');
    var expNom = /^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/g;
    var expFecha = /^([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))+$/g;
    var exp = /^[A-Za-zÁÉÍÓÚáéíóúñÑ 0-9.-_]+$/g;
    
    switch (id) {

      case 'nombreCan':
        if (!expNom.test(value)) {
          valResult.success = false;
          highlightError(field, true);
          $('.nombreCan').html("Nombre solo puede contener letras");
        } else {
          highlightError(field, false);
          $('.nombreCan').html("");

        }
        break;
      case 'apPatCan':
        if (!expNom.test(value)) {
          valResult.success = false;
          highlightError(field, true);
          $('.apPatCan').html("Apellido Paterno solo puede contener letras");
        } else {
          highlightError(field, false);
          $('.apPatCan').html("");

        }
        break;
      case 'apMatCan':
        if (!expNom.test(value)) {
          valResult.success = false;
          highlightError(field, true);
          $('.apMatCan').html("Apellido Materno solo puede contener letras");
        } else {
          highlightError(field, false);
          $('.apMatCan').html("");

        }
        break;
        //Select
      case 'generoCan':
        if (value == null) {
          valResult.success = false;
          highlightError(field, true);
          $('.generoCan').html("Seleccione una opción");
        } else {
          highlightError(field, false);
          $('.generoCan').html("");

        }
        break;
      //Select
      case 'estadoCan':
        if (value == null) {
          valResult.success = false;
          highlightError(field, true);
          $('.estadoCan').html("Seleccione una opción");
        } else {
          highlightError(field, false);
          $('.estadoCan').html("");

        }
        break;
      //Select
      case 'municipioCan':
        if (value == null) {
          valResult.success = false;
          highlightError(field, true);
          $('.municipioCan').html("Seleccione una opción");
        } else {
          highlightError(field, false);
          $('.municipioCan').html("");

        }
        break;
      case 'nacimientoCan':
        if (!expFecha.test(value)) {
          valResult.success = false;
          highlightError(field, true);
          $('.nacimientoCan').html("Ingrese formato dd-mm-aaaa");
        } else {
          highlightError(field, false);
          $('.nacimientoCan').html("");

        }
        break;
      case 'imgCan':
        if (!exp.test(value)) {
          valResult.success = false;
          highlightError(field, true);
          $('.imgCan').html("Ingrese formato valido nombreArchivo.extensión");
        } else {
          highlightError(field, false);
          $('.imgCan').html("");

        }
        break;
      //Select
      case 'partidoCan':
        if (value == null) {
          valResult.success = false;
          highlightError(field, true);
          $('.partidoCan').html("Seleccione una opción");
        } else {
          highlightError(field, false);
          $('.partidoCan').html("");

        }
        break;
      //Select
      case 'tipoCan':
        if (value == null) {
          valResult.success = false;
          highlightError(field, true);
          $('.tipoCan').html("Seleccione una opción");
        } else {
          highlightError(field, false);
          $('.tipoCan').html("");

        }
        break;
      case 'distritoCan':
        if (!exp.test(value)) {
          valResult.success = false;
          highlightError(field, true);
          $('.distritoCan').html("Ingrese formato de distritos");
        } else {
          highlightError(field, false);
          $('.distritoCan').html("");

        }
        break;



      //Segunda

      //Select


      case 'gradoCan':
        if (!exp.test(value)) {
          valResult.success = false;
          highlightError(field, true);
          $('.gradoCan').html("Seleccione una opción");
        } else {
          highlightError(field, false);
          $('.gradoCan').html("");

        }
        break;
      case 'institucionCan':
        if (!exp.test(value)) {
          valResult.success = false;
          highlightError(field, true);
          $('.institucionCan').html("No son permitidos caracteres especiales");
        } else {
          highlightError(field, false);
          $('.institucionCan').html("");

        }
        break;
      case 'puestoCan':
        if (!exp.test(value)) {
          valResult.success = false;
          highlightError(field, true);
          $('.puestoCan').html("No son permitidos caracteres especiales");
        } else {
          highlightError(field, false);
          $('.puestoCan').html("");

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
