// CRUD cliente
// Nuevo Cliente
$("#nuevaEmpresa").submit(function(e){
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
              window.location = "cliente"
          }
        })
      }
    }
  })
})
// Editar Cliente
$(".btnEditarCliente").on("click", function(){
  var idCliente = $(this).attr("id_cliente")
  var datos = new FormData()
  datos.append("idCliente", idCliente)
  datos.append("tipoOperacion", "editarCliente")
  $.ajax({
    url: 'ajax/ajaxCliente.php',
    type: 'POST',
    data: datos,
    processData: false,
    contentType: false,
    success: function(respuesta){
      var valor = JSON.parse(respuesta)
      console.log(valor.id_ciudad)
      $("input[name=ErutEmpresa]").val(valor.rut_cliente)
      $("input[name=EnomEmpresa]").val(valor.razon_cliente)
      $("input[name=EgiroEmpresa]").val(valor.giro_cliente)
      $("input[name=EdirEmpresa]").val(valor.dir_cliente)
      $("input[name=idCliente]").val(valor.id_cliente)
      $("#Eselect-ciudadEmpresa option[value="+valor.id_ciudad+"]").attr("selected", true)
    }
  })
})
//Actualizar Cliente
$("#actualizarEmpresa").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxCliente.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'La empresa a sido Actualizada con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "cliente"
          }
        })
      }
    }
  })
})
// Eliminar Cliente
$(".btnEliminarCliente").on("click", function(){
  var idCliente = $(this).attr("id_cliente")
  var datos = new FormData()
  datos.append("idCliente", idCliente)
  datos.append("tipoOperacion", "eliminarCliente")
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
        url: 'ajax/ajaxCliente.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta){
          console.log(respuesta)
          if (respuesta.trim() == "ok") {
            Swal.fire(
              'Eliminado!',
              'La Empresa fue Eliminada con Éxito.',
              'success'
            ).then((result) => {
              if (result.value) {
                window.location = "cliente"
              }
            })
          }
        }
      })
    }
  })
})
// Modales Regresivos
// Crear Ciudad
$("#nuevaCiudadCliente").on("click", function(){
  $("#modal-nuevo-cliente").modal("hide")
})
$("#nuevaCiudadEmpresa").submit(function(e){
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
            $("#modal-nuevo-cliente").modal("show")
          }
        })
      }
    }
  })
})
// Crear Region
$("#btn-nuevaRegionCliente").on("click", function(){
  $("#modal-nueva-ciudadEmpresa").modal("hide")
})
$("#nuevaRegionCliente").submit(function(e){
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
