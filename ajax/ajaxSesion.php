<?php
require_once("../controllers/sesion.controller.php");
require_once("../models/sesion.model.php");
session_start();

Class ajaxSesion{
  public $_usuario;
  public $_clave;
  public function ajaxIniciarSesion() {
    $usuario = $this->_usuario;
    $pass = $this->_clave;
    $inicioSesion = (new ctrSesion);
    $respuesta = $inicioSesion -> ctrIniciarSesion($usuario, $pass);

    if (count($respuesta) > 0 ) {
      foreach ($respuesta as $key => $value) {
        $_SESSION["idUser"] = $value["id_usuario"];
        $_SESSION["mail"] = $value["usuario"];
        $_SESSION["nombre"] = $value["nombre"];
        $_SESSION["rol"] = $value["rol_usuario"];
        $_SESSION["avatar"] = $value["avatar"];
        $_SESSION["autenticarrr"] = "ok";
        echo "ok";
      }
    } else {
      echo "error";
    }
  }
}
$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "inicioSesion") {
	$inicioSesion = (new ajaxSesion);
	$inicioSesion -> _usuario = $_POST["usuario"];
	$inicioSesion -> _clave = $_POST["clave"];
	$inicioSesion -> ajaxIniciarSesion();
}
?>
