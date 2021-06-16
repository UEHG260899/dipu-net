let errores = ''

$(document).ready(function () {
  $('#btnRegistro').click(function () {
    if (!validaciones($('.validar'))) {
      $('#listaErrores').html(errores)
      $('#modalErrores').modal('toggle')
    } else {
      $('#form-register').submit()
    }
  })
})

const validaciones = formData => {
  let control = true
  errores = ''
  let regExpEmail = new RegExp(
    '^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{1,150}$'
  )

  $.each(formData, function (index, element) {
    let value = $(element).val()
    let id = $(element).prop('id')

    switch (id) {
      case 'email':
        if (!regExpEmail.test(value)) {
          control = false
          highlightError(element, true)
          errores +=
            '<li>Error en el campo <strong>email</strong>: debe coincidir con el formato <strong> correo@correo.com </strong></li><br>'
        } else {
          highlightError(element, false)
        }
        break
      case 'pwd':
        if (value.match(/[a-z]/)) {
          highlightError(element, false)
        } else {
          highlightError(element, true)
          errores +=
            '<li>Error en el campo <strong>contraseña</strong>:  mínimo una minúscula</li><br>'
        }

        //validate capital letter
        if (value.match(/[A-Z]/)) {
          highlightError(element, false)
        } else {
          control = false
          highlightError(element, true)
          errores +=
            '<li>Error en el campo <strong>contraseña</strong>:  mínimo una mayúscula</li><br>'
        }

        //validate number
        if (value.match(/\d/)) {
          highlightError(element, false)
        } else {
          control = false
          highlightError(element, true)
          errores +=
            '<li>Error en el campo <strong>contraseña</strong>:  mínimo un dígito</li><br>'
        }
        if (value.length < 6) {
          control = false
          highlightError(element, true)
          errores +=
            '<li>Error en el campo <strong>contraseña</strong>:  mínimo  6 carácteres</li><br>'
        } else {
          highlightError(element, false)
        }

        break
      case 'pwd-confirm':
        let pwd = $('#pwd').val()

        if (pwd !== value) {
          control = false
          highlightError(element, true)
          errores +=
            '<li>Error en el campo <strong>confirmar contraseña</strong>: Las contraseñas deben coincidir</li><br>'
        } else {
          highlightError(element, false)
        }
        if (value.length === 0) {
          highlightError(element, true)
        }
        break
    }
  })

  return control
}
function highlightError(field, boolean) {
  if (boolean) {
    $(field).addClass('is-invalid')
  } else {
    $(field).removeClass('is-invalid')
  }
}
