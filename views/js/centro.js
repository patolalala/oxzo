// CRUD Centro
// Crear Centro
$("#nuevoCentro").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxCentro.php',
    type: 'POST',
    data: datos,
    success: function (respuesta){
      console.log(respuesta)
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Centro ingresado con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "centro"
          }
        })
      }
    }
  })
})
// Editar Centro
$(".btnEditarCentro").on("click", function(){
  var idCentro = $(this).attr("id_centro")
  var datos = new FormData()
  datos.append("idCentro", idCentro)
  datos.append("tipoOperacion", "editarCentro")
  $.ajax({
    url: 'ajax/ajaxCentro.php',
    type: 'POST',
    data: datos,
    processData: false,
    contentType: false,
    success: function(respuesta){
      var valor = JSON.parse(respuesta)
      console.log(valor)
      $("input[name=EnomCentro]").val(valor.nom_centro)
      $("input[name=EdirCentro]").val(valor.dir_centro)
      $("input[name=EmapCentro]").val(valor.maps_centro)
      $("input[name=EcontactoCentro]").val(valor.contacto_centro)
      $("input[name=EemailCentro]").val(valor.eml_centro)
      $("#EclienteCentro option[value="+valor.id_cliente+"]").attr("selected", true)
      $("input[name=idCentro]").val(valor.id_centro)
    }
  })
})
// Actualizar Centro
$("#actualizarCentro").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxCentro.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      console.log(respuesta)
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Centro Actualizado con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "centro"
          }
        })
      }
    }
  })
})
// Eliminar Centro
$(".btnEliminarCentro").on("click", function(){
  var idCentro = $(this).attr("id_centro")
  var datos = new FormData()
  datos.append("idCentro", idCentro)
  datos.append("tipoOperacion", "eliminarCentro")
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
        url: 'ajax/ajaxCentro.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta){
          console.log(respuesta)
          if (respuesta.trim() == "ok") {
            Swal.fire(
              'Eliminado!',
              'El Centro fue Eliminado con Éxito.',
              'success'
            ).then((result) => {
              if (result.value) {
                window.location = "centro"
              }
            })
          }
        }
      })
    }
  })
})
// Modal Regresivos
$("#crearEmpresaCentro").on("click", function(){
  $("#modal-nuevo-centro").modal("hide")
})

$("#nuevaEmpresaCentro").submit(function(e){
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
            $("#modal-nueva-empresaCentro").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerEmpresaCentro")
            $.ajax({
              url: 'ajax/ajaxCentro.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function (respuesta){
                console.log(respuesta)
                var valor = JSON.parse(respuesta)
                ultimoValor = valor.length - 1
                $("#select-empresaCentro").append("<option value='"+valor[ultimoValor][0]+"' >"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nuevo-centro").modal("show")
          }
        })
      }
    }
  })
})
$("#nuevaCiudadCliente").on("click", function(){
  $("#modal-nueva-empresaCentro").modal("hide")
})
$("#nuevaCiudadEmpresaCentro").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxCiudad.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Excelente',
          text: 'Ciudad ingresada con éxito'
        }).then((result) => {
          if (result.value) {
            $("#modal-nueva-ciudadEmpresa").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerCiudadEmpresa")
            $.ajax({
              url: 'ajax/ajaxCliente.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function (respuesta){
                console.log(respuesta)
                var valor = JSON.parse(respuesta)
                ultimoValor = valor.length - 1
                $("#select-ciudadEmpresa").append("<option value='"+valor[ultimoValor][0]+"' >"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nueva-empresaCentro").modal("show")
          }
        })
      }
    }
  })
})
$("#btn-nuevaRegionCentro").on("click", function(){
  $("#modal-nueva-ciudadEmpresa").modal("hide")
})
$("#nuevaRegionCentro").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize();
  console.log(datos)
  $.ajax({
    url: 'ajax/ajaxRegion.php',
    type:'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        Swal.fire(
          'Genial!',
          'Ha Ingresado una Región con Éxito.',
          'success'
        ).then((result) => {
          if (result.value) {
            $("#modal-nueva-regionEmpresa").modal("hide")
            var datos = new FormData()
            datos.append("tipoOperacion", "traerRegion")
            $.ajax({
              url: 'ajax/ajaxCiudad.php',
              type: 'POST',
              data: datos,
              processData: false,
              contentType: false,
              success: function (respuesta){
                console.log(respuesta)
                var valor = JSON.parse(respuesta)
                ultimoValor = valor.length - 1
                $("#select-regionEmpresa").append("<option value='"+valor[ultimoValor][0]+"' >"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nueva-ciudadEmpresa").modal("show")
          }
        })
      }
    }
  })

})
