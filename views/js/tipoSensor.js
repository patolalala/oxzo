// CRUD Tipo Sensor
// Crear tipoSensor
$("#nuevoTipoSensor").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxTipoSensor.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Tipo de Sensor ingresado con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "tipoSensor"
          }
        })
      }
    }
  })
})
// Editar tipoSensor
$(".btnEditarTipoSensor").on("click", function(){
  var idTipoSensor = $(this).attr("id_tiposensor")
  var datos = new FormData
  datos.append("idTipoSensor", idTipoSensor)
  datos.append("tipoOperacion", "editarTipoSensor")
  $.ajax({
    url: 'ajax/ajaxTipoSensor.php',
    type: 'POST',
    data: datos,
    processData: false,
    contentType: false,
    success: function(respuesta){
      var valor = JSON.parse(respuesta)
      $("#EnomTipoSensor").val(valor.tiposensor)
      $("input[name=idTipoSensor]").val(valor.id_tiposensor)
    }
  })
})
// Actualizar tipoSensor
$("#actualizarTipoSensor").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxTipoSensor.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Tipo de Sensor a sido Actualizado con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "tipoSensor"
          }
        })
      }
    }
  })

})
// Eliminar tipoSensor
$(".btnEliminarTipoSensor").on("click", function(){
  var idTipoSensor = $(this).attr("id_tiposensor")
  var datos = new FormData()
  datos.append("idTipoSensor", idTipoSensor)
  datos.append("tipoOperacion", "eliminarTipoSensor")
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
        url: 'ajax/ajaxTipoSensor.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta){
          if (respuesta.trim() == "ok") {
            Swal.fire(
              'Eliminado!',
              'Tipo de Sensor fue Eliminado con Éxito.',
              'success'
            ).then((result) => {
              if (result.value) {
                window.location = "tipoSensor"
              }
            })
          }
        }
      })
    }
  })
})
