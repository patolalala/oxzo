$("#nuevaRegion").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize();
  console.log(datos)
  $.ajax({
    url: 'ajax/ajaxRegion.php',
    type:'POST',
    data: datos,
    success: function(respuesta){
      if (respuesta.trim() == "ok") {
        swal.fire({
            type: 'success',
            title: 'Excelente',
            text: 'Región ingresada con éxito'
        }).then((result) => {
            if (result.value) {
                window.location = "region"
            }
        })
      }
    }
  })
})
$(".btnEditarRegion").on("click", function(){
  var idRegion = $(this).attr("id_region")
  var datos = new FormData()
  datos.append("idRegion", idRegion)
  datos.append("tipoOperacion", "editarRegion")
  $.ajax({
    url: 'ajax/ajaxRegion.php',
    type: 'POST',
    data: datos,
    processData: false,
		contentType: false,
    success: function(respuesta){
      var valor = JSON.parse(respuesta)
      $("input[name=EnomRegion]").val(valor.nom_region)
      $("input[name=idRegion]").val(idRegion)
    }
  })
})
$("#actualizarRegion").submit(function(e){
  e.preventDefault()
  var datos = $(this).serialize()
  $.ajax({
    url: 'ajax/ajaxRegion.php',
    type: 'POST',
    data: datos,
    success: function (respuesta){
      console.log(respuesta)
      if (respuesta.trim() == "ok") {
        swal.fire({
            type: 'success',
            title: 'Genial',
            text: 'Región editada con éxito'
        }).then((result) => {
            if (result.value) {
                window.location = "region"
            }
        })
      }
    }
  })
})
$(".btnEliminarRegion").on("click", function(){
  var idRegion = $(this).attr("id_region")
  var datos = new FormData
  datos. append("idRegion", idRegion)
  datos.append("tipoOperacion", "eliminarRegion")
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
        url: 'ajax/ajaxRegion.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta){
          console.log(respuesta)
          if (respuesta.trim() == "ok") {
            Swal.fire(
              'Eliminado!',
              'La region fue Eliminada con Éxito.',
              'success'
            ).then((result) => {
              if (result.value) {
                window.location = "region"
              }
            })
          }
        }
      })
    }
  })
})
