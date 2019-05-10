// Crear Grupo
$("#nuevoGrupo").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
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
              window.location = "grupo"
          }
        })
      }
    }
  })
})
// Editar Grupo
$(".btnEditarGrupo").on("click", function(){
  var idGrupo = $(this).attr("id_grupo")
  var datos = new FormData()
  datos.append("idGrupo", idGrupo)
  datos.append("tipoOperacion", "editarGrupo")
  $.ajax({
    url: 'ajax/ajaxGrupo.php',
    type: 'POST',
    data: datos,
    processData: false,
    contentType: false,
    success: function(respuesta){
      var valor = JSON.parse(respuesta)
      $("input[name=EnomGrupo]").val(valor.nom_grupo)
      $("#EoxyviewGrupo option[value="+valor.id_oxyview+"]").attr("selected", true)
      $("input[name=idGrupo]").val(valor.id_grupo)
    }
  })
})
// Actualizar Grupo
$("#actualizarGrupo").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxGrupo.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Grupo Actualizado con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "grupo"
          }
        })
      }
    }
  })
})
// Eliminar Grupo
$(".btnEliminarGrupo").on("click", function(){
  var idGrupo = $(this).attr("id_grupo")
  var datos = new FormData()
  datos.append("idGrupo", idGrupo)
  datos.append("tipoOperacion", "eliminarGrupo")
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
        url: 'ajax/ajaxGrupo.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta){
          console.log(respuesta)
          if (respuesta.trim() == "ok") {
            Swal.fire(
              'Eliminado!',
              'El Grupo fue Eliminado con Éxito.',
              'success'
            ).then((result) => {
              if (result.value) {
                window.location = "grupo"
              }
            })
          }
        }
      })
    }
  })
})
// Modales Regresivos
$("#modalCrearOxyviewGrupo").on("click", function(){
  $("#modal-nuevo-grupo").modal("hide")
})
$("#modalCrearModuloGrupo").on("click", function(){
  $("#modal-nuevo-oxyviewGrupo").modal("hide")
})
$("#modalCrearCentroGrupo").on("click", function(){
  $("#modal-nuevo-moduloGrupo").modal("hide")
})
// Nuevo OxyviewGrupo
$("#nuevoOxyviewGrupo").submit(function(e){
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
            $("#modal-nuevo-oxyviewGrupo").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerOxyviewGrupo")
            $.ajax({
              url: 'ajax/ajaxGrupo.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function(respuesta){
                var valor = JSON.parse(respuesta)
                var ultimoValor = valor.length - 1
                $("#select-oxyviewGrupo").append("<option value='"+valor[ultimoValor][0]+"'>"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nuevo-grupo").modal("show")
          }
        })
      }
    }
  })
})
// Nuevo ModuloOxyview
$("#nuevoModuloGrupo").submit(function(e){
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
            $("#modal-nuevo-moduloGrupo").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerModuloGrupo")
            $.ajax({
              url: 'ajax/ajaxGrupo.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function(respuesta){
                var valor = JSON.parse(respuesta)
                var ultimoValor = valor.length - 1
                $("#select-moduloGrupo").append("<option value='"+valor[ultimoValor][0]+"'>"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nuevo-oxyviewGrupo").modal("show")
          }
        })
      }
    }
  })
})
//Nuevo CentroOxyview
$("#nuevoCentroGrupo").submit(function(e){
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
            $("#modal-nuevo-centroGrupo").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerCentroGrupo")
            $.ajax({
              url: 'ajax/ajaxGrupo.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function(respuesta){
                var valor = JSON.parse(respuesta)
                var ultimoValor = valor.length - 1
                $("#select-centroGrupo").append("<option value='"+valor[ultimoValor][0]+"'>"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nuevo-moduloGrupo").modal("show")
          }
        })
      }
    }
  })
})
