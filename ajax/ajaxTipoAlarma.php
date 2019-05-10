<?php
require_once "../controllers/tipoAlarma.controller.php";
require_once "../models/tipoAlarma.model.php";
Class ajaxTipoAlarma {
  public $_idTipoAlarma;
  public $_nomTipoAlarma;
  public function ajaxCrearTipoAlarma(){
    $nomTipoA = $this->_nomTipoAlarma;
    $respuesta = (new ctrTipoAlarma)->ctrCrearTipoAlarma($nomTipoA);
    echo $respuesta;
  }
  public function ajaxEditarTipoAlarma(){
    $idTipoA = $this->_idTipoAlarma;
    $respuesta = (new ctrTipoAlarma)->ctrEditarTipoAlarma($idTipoA);
    echo json_encode($respuesta);
  }
  public function ajaxActualizarTipoAlarma(){
    $idTipoA = $this->_idTipoAlarma;
    $nomTipoA = $this->_nomTipoAlarma;
    $respuesta = (new ctrTipoAlarma)->ctrActualizarTipoAlarma($idTipoA, $nomTipoA);
    echo $respuesta;
  }
  public function ajaxEliminarTipoAlarma(){
    $idTipoA = $this->_idTipoAlarma;
    $respuesta = (new ctrTipoAlarma)->ctrEliminarTipoAlarma($idTipoA);
    echo $respuesta;
  }
}
$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "crearTipoAlarma") {
  $crearTipoAlarma = (new ajaxTipoAlarma);
  $crearTipoAlarma -> _nomTipoAlarma = ucwords(strtolower($_POST["nomTipoAlarma"]));
  $crearTipoAlarma -> ajaxCrearTipoAlarma();
}
if ($tipoOperacion == "editarTipoAlarma") {
  $editarTipoAlarma = (new ajaxTipoAlarma);
  $editarTipoAlarma -> _idTipoAlarma = $_POST["idTipoAlarma"];
  $editarTipoAlarma -> ajaxEditarTipoAlarma();
}
if ($tipoOperacion == "actualizarTipoAlarma") {
  $actualizarTipoAlarma = (new ajaxTipoAlarma);
  $actualizarTipoAlarma -> _idTipoAlarma = $_POST["idTipoAlarma"];
  $actualizarTipoAlarma -> _nomTipoAlarma = ucwords(strtolower($_POST["EnomTipoAlarma"]));
  $actualizarTipoAlarma -> ajaxActualizarTipoAlarma();
}
if ($tipoOperacion == "eliminarTipoAlarma") {
  $eliminarTipoAlarma = (new ajaxTipoAlarma);
  $eliminarTipoAlarma -> _idTipoAlarma = $_POST["idTipoAlarma"];
  $eliminarTipoAlarma -> ajaxEliminarTipoAlarma();
}
?>
