// Crear Ciudad
$("#nuevaCiudad").submit(function(e){
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
          title: 'Genial',
          text: 'Ciudad ingresada con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "ciudad"
          }
        })
      }
    }
  })
})
// Crear Region en Ciudad
$("#btn-nuevaRegion").on("click", function(){
  $("#modal-nueva-ciudad").modal("hide")
})
$("#nuevaRegionCiudad").submit(function(e){
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
            $("#modal-nueva-region").modal("hide")
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
                $("#select-region").append("<option value='"+valor[ultimoValor][0]+"' >"+valor[ultimoValor][1]+"</option>")
              }
            })
            $("#modal-nueva-ciudad").modal("show")
          }
        })
      }
    }
  })
})
// Editar Ciudad
$(".btnEditarCiudad").on("click", function(){
  var idCiudad = $(this).attr("id_ciudad")
  var datos = new FormData()
  datos.append("idCiudad", idCiudad)
  datos.append("tipoOperacion", "editarCiudad")
  $.ajax({
    url: 'ajax/ajaxCiudad.php',
    type: 'POST',
    data: datos,
    processData: false,
		contentType: false,
    success: function(respuesta){
      var valor = JSON.parse(respuesta)
      $("input[name=EnomCiudad]").val(valor.nom_ciudad)
      $("#Eselect-region option[value="+valor.id_region+"]").attr("selected", true)
      $("input[name=EidCiudad]").val(idCiudad)
    }
  })
})
//Actualizar ciudad
$("#actualizarCiudad").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  console.log(datos)
  $.ajax({
    url: 'ajax/ajaxCiudad.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
          type: 'success',
          title: 'Genial',
          text: 'Ciudad actualizada con éxito'
        }).then((result) => {
          if (result.value) {
              window.location = "ciudad"
          }
        })
      }
    }
  })
})
// Eliminar ciudad
$(".btnEliminarCiudad").on("click", function(){
  var idCiudad = $(this).attr("id_ciudad")
  var datos = new FormData
  datos. append("idCiudad", idCiudad)
  datos.append("tipoOperacion", "eliminarCiudad")
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
        url: 'ajax/ajaxCiudad.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta){
          console.log(respuesta)
          if (respuesta.trim() == "ok") {
            Swal.fire(
              'Eliminado!',
              'La Ciudad fue Eliminada con Éxito.',
              'success'
            ).then((result) => {
              if (result.value) {
                window.location = "ciudad"
              }
            })
          }
        }
      })
    }
  })
})
