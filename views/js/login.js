$("#form-login").submit(function(e){
  e.preventDefault()
  var usuario = $("input[name=usuario]").val()
  var clave = $("input[name=pass]").val()
  var datos = new FormData()
  datos.append("usuario", usuario)
  datos.append("clave", clave)
  datos.append("tipoOperacion", "inicioSesion")
  $.ajax({
    url: 'ajax/ajaxSesion.php',
    type: 'POST',
    data: datos,
    processData: false,
		contentType: false,
    success: function (respuesta){
      if(respuesta.trim() == "ok"){
        window.location = "home"
        console.log(respuesta)

      } else if (respuesta.trim() == "error") {
        swal({
				  type: 'warning',
				  title: 'Malas Noticias',
          text: 'Correo y/o Contraseña incorrectos'
				}).then((result) => {
				  if (result.value) {
				    window.location = "login"
				  }
				})
      }
    }
  })
})
