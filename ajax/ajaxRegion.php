<?php
require_once "../controllers/region.controller.php";
require_once "../models/region.model.php";

Class ajaxRegion {
  public $_idRegion;
  public $_nomRegion;

  public function ajaxNuevaRegion(){
    $nomRegion = $this->_nomRegion;
    $respuesta = (new ctrRegion)->ctrNuevaRegion($nomRegion);
    echo $respuesta;
  }
  public function ajaxEditarRegion(){
    $idRegion = $this->_idRegion;
    $respuesta = (new ctrRegion)->ctrEditarRegion($idRegion);
    echo json_encode($respuesta);
  }
  public function ajaxActualizarRegion(){
    $nomRegion = $this->_nomRegion;
    $idRegion = $this->_idRegion;
    $respuesta = (new ctrRegion)->ctrActualizarRegion($nomRegion, $idRegion);
    echo $respuesta;
  }
  public function ajaxEliminarRegion(){
    $idRegion = $this->_idRegion;
    $respuesta = (new ctrRegion)->ctrEliminarRegion($idRegion);
    echo $respuesta;
  }
}

$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "nuevaRegion") {
  $nuevaregion = (new ajaxRegion);
  $nuevaregion -> _nomRegion = ucwords(strtolower($_POST["nomRegion"]));
  $nuevaregion -> ajaxNuevaRegion();
}
if ($tipoOperacion == "editarRegion") {
  $editarRegion = (new ajaxRegion);
  $editarRegion  -> _idRegion = $_POST["idRegion"];
  $editarRegion -> ajaxEditarRegion();
}
if ($tipoOperacion == "actualizarRegion") {
  $actualizarRegion = (new ajaxRegion);
  $actualizarRegion -> _idRegion = $_POST["idRegion"];
  $actualizarRegion -> _nomRegion = ucwords(strtolower($_POST["EnomRegion"]));
  $actualizarRegion -> ajaxActualizarRegion();
}
if ($tipoOperacion == "eliminarRegion") {
  $eliminarRegion = (new ajaxRegion);
  $eliminarRegion -> _idRegion = $_POST["idRegion"];
  $eliminarRegion -> ajaxEliminarRegion();
}
?>
