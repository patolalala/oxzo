<?php
require_once "../controllers/tipoSensor.controller.php";
require_once "../models/tipoSensor.model.php";
Class ajaxTipoSensor {
  public $_idTipoSensor;
  public $_nomTipoSensor;
  public function ajaxCrearTipoSensor(){
    $nomTipoS = $this->_nomTipoSensor;
    $respuesta = (new ctrTipoSensor)->ctrCrearTipoSensor($nomTipoS);
    echo $respuesta;
  }
  public function ajaxEditarTipoSensor(){
    $idTipoS = $this->_idTipoSensor;
    $respuesta = (new ctrTipoSensor)->ctrEditarTipoSensor($idTipoS);
    echo json_encode($respuesta);
  }
  public function ajaxActualizarTipoSensor(){
    $idTipoS = $this->_idTipoSensor;
    $nomTipoS = $this->_nomTipoSensor;
    $respuesta = (new ctrTipoSensor)->ctrActualizarTipoSensor($idTipoS, $nomTipoS);
    echo $respuesta;
  }
  public function ajaxEliminarTipoSensor(){
    $idTipoS = $this->_idTipoSensor;
    $respuesta = (new ctrTipoSensor)->ctrEliminarTipoSensor($idTipoS);
    echo $respuesta;
  }
}
$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "crearTipoSensor") {
  $crearTipoSensor = (new ajaxTipoSensor);
  $crearTipoSensor -> _nomTipoSensor = ucwords(strtolower($_POST["nomTipoSensor"]));
  $crearTipoSensor -> ajaxCrearTipoSensor();
}
if ($tipoOperacion == "editarTipoSensor") {
  $editarTipoSensor = (new ajaxTipoSensor);
  $editarTipoSensor -> _idTipoSensor = $_POST["idTipoSensor"];
  $editarTipoSensor -> ajaxEditarTipoSensor();
}
if ($tipoOperacion == "actualizarTipoSensor") {
  $actualizarTipoSensor = (new ajaxTipoSensor);
  $actualizarTipoSensor -> _idTipoSensor = $_POST["idTipoSensor"];
  $actualizarTipoSensor -> _nomTipoSensor = ucwords(strtolower($_POST["EnomTipoSensor"]));
  $actualizarTipoSensor -> ajaxActualizarTipoSensor();
}
if ($tipoOperacion == "eliminarTipoSensor") {
  $eliminarTipoSensor = (new ajaxTipoSensor);
  $eliminarTipoSensor -> _idTipoSensor = $_POST["idTipoSensor"];
  $eliminarTipoSensor -> ajaxEliminarTipoSensor();
}
?>
