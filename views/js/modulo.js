// Crear Modulo
$("#nuevoModulo").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
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
              window.location = "modulo"
          }
        })
      }
    }
  })
})
// Editar Modulo
$(".btnEditarModulo").on("click", function(){
  var idModulo = $(this).attr("id_modulo")
  var datos = new FormData()
  datos.append("idModulo", idModulo)
  datos.append("tipoOperacion", "editarModulo")
  $.ajax({
    url: 'ajax/ajaxModulo.php',
    type: 'POST',
    data: datos,
    processData: false,
    contentType: false,
    success: function(respuesta){
      var valor = JSON.parse(respuesta)
      $("input[name=EnomModulo]").val(valor.nom_modulo)
      $("#EcentroModulo option[value="+valor.id_centro+"]").attr("selected", true)
      $("input[name=idModulo]").val(valor.id_modulo)
    }
  })
})
// Actualizar Modulo
$("#actualizarModulo").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxModulo.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Modulo Actualizado con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "modulo"
          }
        })
      }
    }
  })
})
// Eliminar Modulo
$(".btnEliminarModulo").on("click", function(){
  var idModulo = $(this).attr("id_modulo")
  var datos = new FormData()
  datos.append("idModulo", idModulo)
  datos.append("tipoOperacion", "eliminarModulo")
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
        url: 'ajax/ajaxModulo.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta){
          console.log(respuesta)
          if (respuesta.trim() == "ok") {
            Swal.fire(
              'Eliminado!',
              'El Modulo fue Eliminado con Éxito.',
              'success'
            ).then((result) => {
              if (result.value) {
                window.location = "modulo"
              }
            })
          }
        }
      })
    }
  })
})
// Modales Regresivos
$("#modalCrearCentroModulo").on("click", function(){
  $("#modal-nuevo-modulo").modal("hide")
})
$("#modalCrearClienteModulo").on("click", function(){
  $("#modal-nuevo-centroModulo").modal("hide")
})
//Nuevo CentroModulo
$("#nuevoCentroModulo").submit(function(e){
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
            $("#modal-nuevo-centroModulo").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerCentroModulo")
            $.ajax({
              url: 'ajax/ajaxModulo.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function(respuesta){
                var valor = JSON.parse(respuesta)
                var ultimoValor = valor.length - 1
                $("#select-centroModulo").append("<option value='"+valor[ultimoValor][0]+"'>"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nuevo-modulo").modal("show")
          }
        })
      }
    }
  })
})
// Nueva EmpresaModulo
$("#nuevaEmpresaModulo").submit(function(e){
  e.preventDefault()
  datos = $(this).serialize()
  console.log(datos)
  $.ajax({
    url: 'ajax/ajaxCliente.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Empresa ingresada con éxito'
        }).then((result) => {
          if (result.value) {
            $("#modal-nuevo-clienteModulo").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerClienteModulo")
            $.ajax({
              url: 'ajax/ajaxModulo.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function(respuesta){
                var valor = JSON.parse(respuesta)
                var ultimoValor = valor.length - 1
                $("#select-clienteModulo").append("<option value='"+valor[ultimoValor][0]+"'>"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nuevo-centroModulo").modal("show")
          }
        })
      }
    }
  })
})
