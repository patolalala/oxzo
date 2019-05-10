$("#repUsrCliente").blur(function(){
    var pass1 = $("#passUsrCliente").val()
    var pass2 = $(this).val()
    if ((pass1 == pass2)) {
      $("#repUsrCliente").css("border", "")
      $(".passIncorrecta").attr("class", "passIncorrecta alert alert-success")
      $(".passIncorrecta").show()
      $(".passIncorrecta").html("Contraseñas Coinciden")
    }else {
      $("#repUsrCliente").css("border", "1px solid #e44e4e")
      $(".passIncorrecta").attr("class", "passIncorrecta alert alert-danger")
      $(".passIncorrecta").html("Contraseñas no Coinciden")
      $(".passIncorrecta").show()
    }
})
$("#ErepUsrCliente").blur(function(){
    var pass1 = $("#EpassUsrCliente").val()
    var pass2 = $(this).val()
    if ((pass1 == pass2)) {
      $("#ErepUsrCliente").css("border", "")
      $(".EpassIncorrecta").attr("class", "EpassIncorrecta alert alert-success")
      $(".EpassIncorrecta").show()
      $(".EpassIncorrecta").html("Contraseñas Coinciden")
    }else {
      $("#ErepUsrCliente").css("border", "1px solid #e44e4e")
      $(".EpassIncorrecta").attr("class", "EpassIncorrecta alert alert-danger")
      $(".EpassIncorrecta").html("Contraseñas no Coinciden")
      $(".EpassIncorrecta").show()
    }
})

// Crear UsrClinete
$("#nuevoUsrCliente").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  console.log(datos)
  $.ajax({
    url: 'ajax/ajaxUsrCliente.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      console.log(respuesta)
      if (respuesta == "passNo") {
        alert("lalalal")
      }
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Usuario ingresado con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "usrCliente"
          }
        })
      }
    }
  })
})
// Editar UsrClinete
$(".btnEditarUsrCliente").on("click", function(){
  var idUsrCliente = $(this).attr("id_usrcliente")
  var datos = new FormData()
  datos.append("idUsrCliente", idUsrCliente)
  datos.append("tipoOperacion", "editarUsrCliente")
  $.ajax({
    url: 'ajax/ajaxUsrCliente.php',
    type: 'POST',
    data: datos,
    processData: false,
    contentType: false,
    success: function(respuesta){
      var valor = JSON.parse(respuesta)
      console.log(valor)
      $("input[name=EnomUsrCliente]").val(valor.nom_usrcliente)
      $("input[name=EcorreoUsrCliente]").val(valor.usr_usrcliente)
      $("input[name=EpassUsrCliente]").val(valor.pas_usrcliente)
      $("input[name=ErepUsrCliente]").val(valor.pas_usrcliente)
      $("#EempresaUsrCliente option[value="+valor.id_cliente+"]").attr("selected", true)
      $("#ErolUsrCliente option[value="+valor.rol_usrcliente+"]").attr("selected", true)
      $("input[name=idUsrCliente]").val(valor.id_usrcliente)

    }
  })
})
// Actualiar UsrClinete
$("#actualizarUsrCliente").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  console.log(datos)
  $.ajax({
    url: 'ajax/ajaxUsrCliente.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "passNo") {
        alert("lalalal")
      }
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Usuario actualizado con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "usrCliente"
          }
        })
      }
    }
  })
})
// Eliminar UsrClinete
$(".btnEliminarUsrCliente").on("click", function(){
  var idUsrCliente = $(this).attr("id_usrcliente")
  var datos = new FormData()
  datos.append("idUsrCliente", idUsrCliente)
  datos.append("tipoOperacion", "eliminarUsrCliente")
  Swal.fire({
    title: '¿Estas Seguro?',
    text: "Los cambios son Irreversibles",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, Eliminar'
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: 'ajax/ajaxUsrCliente.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta){
          console.log(respuesta)
          if (respuesta.trim() == "ok") {
            Swal.fire(
              'Eliminado!',
              'El Usuario fue Eliminado con Éxito.',
              'success'
            ).then((result) => {
              if (result.value) {
                window.location = "usrCliente"
              }
            })
          }
        }
      })
    }
  })
})
