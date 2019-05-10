// Crear Oxyview
$("#nuevoOxyview").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
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
              window.location = "oxyview"
          }
        })
      }
    }
  })
})
// Editar Oxyview
$(".btnEditarOxyview").on("click", function(){
  var idOxyview = $(this).attr("id_oxyview")
  var datos = new FormData()
  datos.append("idOxyview", idOxyview)
  datos.append("tipoOperacion", "editarOxyview")
  $.ajax({
    url: 'ajax/ajaxOxyview.php',
    type: 'POST',
    data: datos,
    processData: false,
    contentType: false,
    success: function(respuesta){
      var valor = JSON.parse(respuesta)
      $("input[name=EnSerieOxyview]").val(valor.nserie_oxyview)
      $("#EmoduloOxyview option[value="+valor.id_modulo+"]").attr("selected", true)
      $("input[name=idOxyview]").val(valor.id_oxyview)
    }
  })
})
// Actualizar Oxyview
$("#actualizarOxyview").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxOxyview.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Oxyview Actualizado con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "oxyview"
          }
        })
      }
    }
  })
})
// Eliminar Oxyview
$(".btnEliminarOxyview").on("click", function(){
  var idOxyview = $(this).attr("id_oxyview")
  var datos = new FormData()
  datos.append("idOxyview", idOxyview)
  datos.append("tipoOperacion", "eliminarOxyview")
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
        url: 'ajax/ajaxOxyview.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta){
          console.log(respuesta)
          if (respuesta.trim() == "ok") {
            Swal.fire(
              'Eliminado!',
              'El Oxyview fue Eliminado con Éxito.',
              'success'
            ).then((result) => {
              if (result.value) {
                window.location = "oxyview"
              }
            })
          }
        }
      })
    }
  })
})
// Modales Regresivos
$("#modalCrearModuloOxyview").on("click", function(){
  $("#modal-nuevo-oxyview").modal("hide")
})
$("#modalCrearCentroOxyview").on("click", function(){
  $("#modal-nuevo-moduloOxyview").modal("hide")
})
// Nueva ModuloOxyview
$("#nuevoModuloOxyview").submit(function(e){
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
            $("#modal-nuevo-moduloOxyview").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerModuloOxyview")
            $.ajax({
              url: 'ajax/ajaxOxyview.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function(respuesta){
                var valor = JSON.parse(respuesta)
                var ultimoValor = valor.length - 1
                $("#select-moduloOxyview").append("<option value='"+valor[ultimoValor][0]+"'>"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nuevo-oxyview").modal("show")
          }
        })
      }
    }
  })
})
//Nuevo CentroOxyview
$("#nuevoCentroOxyview").submit(function(e){
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
            $("#modal-nuevo-centroOxyview").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerCentroOxyview")
            $.ajax({
              url: 'ajax/ajaxOxyview.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function(respuesta){
                var valor = JSON.parse(respuesta)
                var ultimoValor = valor.length - 1
                $("#select-centroOxyview").append("<option value='"+valor[ultimoValor][0]+"'>"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nuevo-moduloOxyview").modal("show")
          }
        })
      }
    }
  })
})
