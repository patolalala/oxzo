// CRUD Tipo Alarma
// Crear tipoAlarma
$("#nuevoTipoAlarma").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxTipoAlarma.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Tipo de Alarma ingresado con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "tipoAlarma"
          }
        })
      }
    }
  })
})
// Editar tipoAlarma
$(".btnEditarTipoAlarma").on("click", function(){
  var idTipoAlarma = $(this).attr("id_tipoalarma")
  var datos = new FormData
  datos.append("idTipoAlarma", idTipoAlarma)
  datos.append("tipoOperacion", "editarTipoAlarma")
  $.ajax({
    url: 'ajax/ajaxTipoAlarma.php',
    type: 'POST',
    data: datos,
    processData: false,
    contentType: false,
    success: function(respuesta){
      var valor = JSON.parse(respuesta)
      $("#EnomTipoAlarma").val(valor.tipoalarma)
      $("input[name=idTipoAlarma]").val(valor.id_tipoalarma)
    }
  })
})
// Actualizar tipoAlarma
$("#actualizarTipoAlarma").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxTipoAlarma.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Tipo de Alarma a sido Actualizada con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "tipoAlarma"
          }
        })
      }
    }
  })
})
// Eliminar tipoAlarma
$(".btnEliminarTipoAlarma").on("click", function(){
  var idTipoAlarma = $(this).attr("id_tipoalarma")
  var datos = new FormData()
  datos.append("idTipoAlarma", idTipoAlarma)
  datos.append("tipoOperacion", "eliminarTipoAlarma")
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
        url: 'ajax/ajaxTipoAlarma.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta){
          if (respuesta.trim() == "ok") {
            Swal.fire(
              'Eliminado!',
              'Tipo de Alarma fue Eliminado con Éxito.',
              'success'
            ).then((result) => {
              if (result.value) {
                window.location = "tipoAlarma"
              }
            })
          }
        }
      })
    }
  })
})
