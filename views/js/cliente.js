// Seleccionar y Deseleccionar
$("#btn-irCentro, #btn-irEquipo, #btn-irUsuario, #btn-irPropiedades").on("click", function(){
  // Deseleccionar Opciones
  $(".menuGeneral").attr("estado", 0)
  $(".menuGeneral").removeClass("activo")
  // Seleccionar Opcion
  $(this).attr("estado", 1)
  if ($(this).attr("estado") == 1) { 
    $(this).addClass("activo")
  }
})
$(".centroCliente, #btn-crearCentro").on("click", function(){
  // Deseleccionar Opciones
  $(".centroCliente, #btn-crearCentro").attr("estado", 0)
  $(".centroCliente, #btn-crearCentro").removeClass("activo")
  // Seleccionar Opcion
  $(this).attr("estado", 1)
  if ($(this).attr("estado") == 1) { 
    $(this).addClass("activo")
  }
})
$(".equipoCliente, #btn-crearEquipo").on("click", function(){
  // Deseleccionar Opciones
  $(".equipoCliente, #btn-crearEquipo").attr("estado", 0)
  $(".equipoCliente, #btn-crearEquipo").removeClass("activo")
  // Seleccionar Opcion
  $(this).attr("estado", 1)
  if ($(this).attr("estado") == 1) { 
    $(this).addClass("activo")
  }
})
$(".usuarioCliente, #btn-crearUsuario").on("click", function(){
  // Deseleccionar Opciones
  $(".usuarioCliente, #btn-crearUsuario").attr("estado", 0)
  $(".usuarioCliente, #btn-crearUsuario").removeClass("activo")
  // Seleccionar Opcion
  $(this).attr("estado", 1)
  if ($(this).attr("estado") == 1) { 
    $(this).addClass("activo")
  }
})
$(".infoCentro").on("click", function(){
  // Deseleccionar Opciones
  $(".infoCentro").attr("estado", 0)
  $(".infoCentro").removeClass("activo")
  // Seleccionar Opcion
  $(this).attr("estado", 1)
  if ($(this).attr("estado") == 1) { 
    $(this).addClass("activo")
  }
})


// Ir Centro
$("#btn-irCentro").on("click", function(){
  $(".equipo, .usuario, .propiedades, #crearCentro, #infoCentro, #crearUsuario, #infoUsuario, #infoUsuarioCliente, #propiedadesCentroCliente").css("display", "none")
  $("#irCentro").css("display", "inline-block")
})
// Ir Equipo
$("#btn-irEquipo").on("click", function(){
  $(".centro, .usuario, .propiedades, #crearCentro, #infoCentro, #crearUsuario, #infoUsuario, #infoUsuarioCliente, #propiedadesCentroCliente").css("display", "none")
  $("#irEquipo").css("display", "inline-block")
})
// Ir Usuario
$("#btn-irUsuario").on("click", function(){
  $(".centro, .equipo, .propiedades, #crearCentro, #infoCentro, #crearUsuario, #infoUsuario, #infoUsuarioCliente, #propiedadesCentroCliente").css("display", "none")
  $("#irUsuario").css("display", "inline-block")
})
// Ir Propiedades
$("#btn-irPropiedades").on("click", function(){
  $(".centro, .usuario, .equipo, #crearCentro, #infoCentro, #crearUsuario, #infoUsuario, #infoUsuarioCliente, #propiedadesCentroCliente").css("display", "none")
  $("#irPropiedades").css("display", "inline-block")
})
$("#btn-irEquipoCentro").on("click", function(){
  $("#infoUsuarioCliente, #propiedadesCentroCliente").css("display", "none")
})
$("#btn-irUsuarioCentro").on("click", function(){
  $("#infoEquipoCliente, #propiedadesCentroCliente, #irEquipoCliente").css("display", "none")
})
$("#btn-irPropiedadesCentro").on("click", function(){
  $("#infoUsuarioCliente, #infoEquipoCliente, #irEquipoCliente").css("display", "none")
})


// Ir infoCentro
$(".centroCliente").on("click", function(){
  $("#crearCentro, #infoUsuarioCliente").css("display", "none")
  $("#infoCentro").css("display", "inline-block")
  var idCentro = $(this).attr("idCentro")
  $(".infoCentro").attr("idCentro", idCentro)
})
$("#btn-irEquipoCentro").on("click", function(){
  $("#irEquipoCliente").css("display", "inline-block")
  var idCentro = $(this).attr("idCentro")
  var datos = new FormData()
  datos.append("idCentro", idCentro)
  datos.append("tipoOperacion", "traerEquipoCentro")
  $.ajax({
    url: 'ajax/ajaxCentro.php',
    type: 'POST',
    data: datos,
    contentType: false,
    processData: false,
    success: function(respuesta){
      $("#irEquipoCliente").html(respuesta)
    }
  })
})





// Ir infoUsuario
$(".usuarioCliente").on("click", function(){
  $("#crearCentro, #crearUsuario").css("display", "none")
  $("#infoUsuario").css("display", "inline-block")
})

$("#btn-irUsuarioCentro").on("click", function(){
  $("#infoUsuarioCliente").css("display", "inline-block")
  var idCentro = $(this).attr("idCentro")
  var datos = new FormData()
  datos.append("idCentro", idCentro)
  datos.append("tipoOperacion", "traerUsuarioCentro")
  $.ajax({
    url: 'ajax/ajaxCentro.php',
    type: 'POST',
    data: datos,
    contentType: false,
    processData: false,
    success: function(respuesta){
      console.log(respuesta)
    }
  })
})
// Ir infoPropiedades
$("#btn-irPropiedadesCentro").on("click", function(){
  $("#crearCentro").css("display", "none")
  $("#propiedadesCentroCliente").css("display", "inline-block")
})



// Ir Crear Centro 
$("#btn-crearCentro").on("click", function(){
  $("#infoCentro, #infoUsuario, #infoEquipo, #infoUsuarioCliente, #propiedadesCentroCliente, #irEquipoCliente").css("display", "none")
  $("#crearCentro").css("display", "inline-block")
})
// Ir Crear Equipo 
$("#btn-crearEquipo").on("click", function(){
  $("#infoCentro, #infoUsuario, #infoEquipo, #infoUsuarioCliente, #propiedadesCentroCliente, #irEquipoCliente").css("display", "none")
  $("#crearEquipo").css("display", "inline-block")
})
// Ir Crear Usuario 
$("#btn-crearUsuario").on("click", function(){
  $("#infoCentro, #infoUsuario, #infoEquipo, #infoUsuarioCliente, #propiedadesCentroCliente, #irEquipoCliente").css("display", "none")
  $("#crearUsuario").css("display", "inline-block")
})

