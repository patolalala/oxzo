$("#repPassUsuario").blur(function(){
    var pass1 = $("#passUsuario").val()
    var pass2 = $(this).val()
    if ((pass1 == pass2)) {
      $("#repPassUsuario").css("border", "")
      $(".passIncorrectaUsuario").attr("class", "passIncorrectaUsuario alert alert-success")
      $(".passIncorrectaUsuario").show()
      $(".passIncorrectaUsuario").html("Contraseñas Coinciden")
    }else {
      $("#repPassUsuario").css("border", "1px solid #e44e4e")
      $(".passIncorrectaUsuario").attr("class", "passIncorrectaUsuario alert alert-danger")
      $(".passIncorrectaUsuario").html("Contraseñas no Coinciden")
      $(".passIncorrectaUsuario").show()
    }
})
$("#ErepPassUsuario").blur(function(){
    var pass1 = $("#EpassUsuario").val()
    var pass2 = $(this).val()
    if ((pass1 == pass2)) {
      $("#ErepPassUsuario").css("border", "")
      $(".EpassIncorrectaUsuario").attr("class", "EpassIncorrectaUsuario alert alert-success")
      $(".EpassIncorrectaUsuario").show()
      $(".EpassIncorrectaUsuario").html("Contraseñas Coinciden")
    }else {
      $("#ErepPassUsuario").css("border", "1px solid #e44e4e")
      $(".EpassIncorrectaUsuario").attr("class", "EpassIncorrectaUsuario alert alert-danger")
      $(".EpassIncorrectaUsuario").html("Contraseñas no Coinciden")
      $(".EpassIncorrectaUsuario").show()
    }
})

// Crear Usuario
$("#nuevoUsuario").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  console.log(datos)
  $.ajax({
    url: 'ajax/ajaxUsuario.php',
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
              window.location = "usuario"
          }
        })
      }
    }
  })
})
// Editar UsrClinete
$(".btnEditarUsuario").on("click", function(){
  var idUsuario = $(this).attr("id_usuario")
  var datos = new FormData()
  datos.append("idUsuario", idUsuario)
  datos.append("tipoOperacion", "editarUsuario")
  $.ajax({
    url: 'ajax/ajaxUsuario.php',
    type: 'POST',
    data: datos,
    processData: false,
    contentType: false,
    success: function(respuesta){
      var valor = JSON.parse(respuesta)
      console.log(valor.rol_usuario)
      $("input[name=EnomUsuario]").val(valor.nombre)
      $("input[name=EcorreoUsuario]").val(valor.usuario)
      $("input[name=EpassUsuario]").val(valor.clave)
      $("input[name=ErepPassUsuario]").val(valor.clave)
      $("#ErolUsuario option[value="+valor.rol_usuario+"]").attr("selected", true)
      $("input[name=idUsuario]").val(valor.id_usuario)

    }
  })
})
// Actualiar UsrClinete
$("#actualizarUsuario").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  console.log(datos)
  $.ajax({
    url: 'ajax/ajaxUsuario.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      console.log(respuesta)
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
              window.location = "usuario"
          }
        })
      }
    }
  })
})
// Eliminar UsrClinete
$(".btnEliminarUsuario").on("click", function(){
  var idUsuario = $(this).attr("id_usuario")
  var datos = new FormData()
  datos.append("idUsuario", idUsuario)
  datos.append("tipoOperacion", "eliminarUsuario")
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
        url: 'ajax/ajaxUsuario.php',
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
                window.location = "usuario"
              }
            })
          }
        }
      })
    }
  })
})
