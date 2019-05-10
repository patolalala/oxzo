// Crear Sensor
$("#nuevoSensor").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxSensor.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Sensor ingresado con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "sensor"
          }
        })
      }
    }
  })
})
// Editar Sensor
$(".btnEditarSensor").on("click", function(){
  var idSensor = $(this).attr("id_sensor")
  var datos = new FormData()
  datos.append("idSensor", idSensor)
  datos.append("tipoOperacion", "editarSensor")
  $.ajax({
    url: 'ajax/ajaxSensor.php',
    type: 'POST',
    data: datos,
    processData: false,
    contentType: false,
    success: function(respuesta){
      var valor = JSON.parse(respuesta)
      console.log(valor)
      $("input[name=EnSerieSensor]").val(valor.nserie_sensor)
      $("#EtipoSensorSensor option[value="+valor.id_tiposensor+"]").attr("selected", true)
      $("#EgrupoSensor option[value="+valor.id_grupo+"]").attr("selected", true)
      $("input[name=idSensor]").val(valor.id_sensor)
      $("input[name=EprofSensor]").val(valor.prof_sensor)
    }
  })
})
// Actualizar Sensor
$("#actualizarSensor").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxSensor.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Sensor Actualizado con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "sensor"
          }
        })
      }
    }
  })
})
// Eliminar Sensor
$(".btnEliminarSensor").on("click", function(){
  var idSensor = $(this).attr("id_sensor")
  var datos = new FormData()
  datos.append("idSensor", idSensor)
  datos.append("tipoOperacion", "eliminarSensor")
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
        url: 'ajax/ajaxSensor.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta){
          console.log(respuesta)
          if (respuesta.trim() == "ok") {
            Swal.fire(
              'Eliminado!',
              'El Sensor fue Eliminado con Éxito.',
              'success'
            ).then((result) => {
              if (result.value) {
                window.location = "sensor"
              }
            })
          }
        }
      })
    }
  })
})
// Modales Regresivos
$("#modalCrearGrupoSensor").on("click", function(){
  $("#modal-nuevo-sensor").modal("hide")
})
$("#modalCrearOxyviewSensor").on("click", function(){
  $("#modal-nuevo-grupoSensor").modal("hide")
})
$("#modalCrearModuloSensor").on("click", function(){
  $("#modal-nuevo-oxyviewSensor").modal("hide")
})
$("#modalCrearCentroSensor").on("click", function(){
  $("#modal-nuevo-moduloSensor").modal("hide")
})
$("#modalCrearTipoSensorSensor").on("click", function(){
  $("#modal-nuevo-sensor").modal("hide")
})
// Nuevo GrupoSensor
$("#nuevoGrupoSensor").submit(function(e){
  e.preventDefault()
  datos = $(this).serialize()
  console.log(datos)
  $.ajax({
    url: 'ajax/ajaxGrupo.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Grupo ingresado con éxito'
        }).then((result) => {
          if (result.value) {
            $("#modal-nuevo-grupoSensor").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerGrupoSensor")
            $.ajax({
              url: 'ajax/ajaxSensor.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function(respuesta){
                var valor = JSON.parse(respuesta)
                var ultimoValor = valor.length - 1
                $("#select-grupoSensor").append("<option value='"+valor[ultimoValor][0]+"'>"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nuevo-sensor").modal("show")
          }
        })
      }
    }
  })
})
// Nuevo OxyviewSensor
$("#nuevoOxyviewSensor").submit(function(e){
  e.preventDefault()
  datos = $(this).serialize()
  console.log(datos)
  $.ajax({
    url: 'ajax/ajaxOxyview.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Oxyview ingresado con éxito'
        }).then((result) => {
          if (result.value) {
            $("#modal-nuevo-oxyviewSensor").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerOxyviewSensor")
            $.ajax({
              url: 'ajax/ajaxSensor.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function(respuesta){
                var valor = JSON.parse(respuesta)
                var ultimoValor = valor.length - 1
                $("#select-oxyviewSensor").append("<option value='"+valor[ultimoValor][0]+"'>"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nuevo-grupoSensor").modal("show")
          }
        })
      }
    }
  })
})
// Nuevo ModuloSensor
$("#nuevoModuloSensor").submit(function(e){
  e.preventDefault()
  datos = $(this).serialize()
  console.log(datos)
  $.ajax({
    url: 'ajax/ajaxModulo.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Modulo ingresado con éxito'
        }).then((result) => {
          if (result.value) {
            $("#modal-nuevo-moduloSensor").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerModuloSensor")
            $.ajax({
              url: 'ajax/ajaxSensor.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function(respuesta){
                var valor = JSON.parse(respuesta)
                var ultimoValor = valor.length - 1
                $("#select-moduloSensor").append("<option value='"+valor[ultimoValor][0]+"'>"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nuevo-oxyviewSensor").modal("show")
          }
        })
      }
    }
  })
})
//Nuevo CentroSensor
$("#nuevoCentroSensor").submit(function(e){
  e.preventDefault()
  datos = $(this).serialize()
  console.log(datos)
  $.ajax({
    url: 'ajax/ajaxCentro.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Centro ingresada con éxito'
        }).then((result) => {
          if (result.value) {
            $("#modal-nuevo-centroSensor").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerCentroSensor")
            $.ajax({
              url: 'ajax/ajaxSensor.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function(respuesta){
                var valor = JSON.parse(respuesta)
                var ultimoValor = valor.length - 1
                $("#select-centroSensor").append("<option value='"+valor[ultimoValor][0]+"'>"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nuevo-moduloSensor").modal("show")
          }
        })
      }
    }
  })
})
// Nuevo TipoSensorSensor
$("#nuevoTipoSensorSensor").submit(function(e){
  e.preventDefault()
  datos = $(this).serialize()
  console.log(datos)
  $.ajax({
    url: 'ajax/ajaxTipoSensor.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Tipo Sensor ingresado con éxito'
        }).then((result) => {
          if (result.value) {
            $("#modal-nuevo-tipoSensorSensor").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerTipoSensorSensor")
            $.ajax({
              url: 'ajax/ajaxSensor.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function(respuesta){
                var valor = JSON.parse(respuesta)
                var ultimoValor = valor.length - 1
                $("#select-tipoSensorSensor").append("<option value='"+valor[ultimoValor][0]+"'>"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nuevo-sensor").modal("show")
          }
        })
      }
    }
  })
})
