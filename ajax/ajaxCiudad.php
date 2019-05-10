<?php
require_once "../controllers/ciudad.controller.php";
require_once "../models/ciudad.model.php";
Class ajaxCiudad{
  public $_idCiudad;
  public $_idRegion;
  public $_nomCiudad;

  public function ajaxNuevaCiudad(){
    $nomCiudad = $this->_nomCiudad;
    $idRegion = $this->_idRegion;
    $respuesta = (new ctrCiudad)->ctrNuevaCiudad($nomCiudad, $idRegion);
    echo $respuesta;
  }
  public function ajaxEditarCiudad(){
    $idCiudad = $this->_idCiudad;
    $respuesta = (new ctrCiudad)->ctrEditarCiudad($idCiudad);
    echo json_encode($respuesta);
  }
  public function ajaxActualizarCiudad(){
    $datos = array( "idCiudad"=>$this->_idCiudad,
                    "nomCiudad"=>$this->_nomCiudad,
                    "idRegion"=>$this->_idRegion);
    $respuesta = (new ctrCiudad)->ctrActualizarCiudad($datos);
    echo $respuesta;
  }
  public function ajaxEliminarCiudad(){
    $idCiudad = $this->_idCiudad;
    $respuesta = (new ctrCiudad)->ctrEliminarCiudad($idCiudad);
    echo $respuesta;
  }
  public function ajaxTraerRegion(){
    $respuesta = (new ctrCiudad)->ctrTraerRegion();
    echo json_encode($respuesta);
  }
}
$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "nuevaCiudad") {
  $nuevaCiudad = (new ajaxCiudad);
  $nuevaCiudad -> _nomCiudad = ucwords(strtolower($_POST["nomCiudad"]));
  $nuevaCiudad -> _idRegion = $_POST["region"];
  $nuevaCiudad -> ajaxNuevaCiudad();
}
if ($tipoOperacion == "editarCiudad") {
  $editarCiudad = (new ajaxCiudad);
  $editarCiudad  -> _idCiudad = $_POST["idCiudad"];
  $editarCiudad -> ajaxEditarCiudad();
}
if ($tipoOperacion == "actualizarCiudad") {
  $actualizarCiudad = (new ajaxCiudad);
  $actualizarCiudad -> _idCiudad = $_POST["EidCiudad"];
  $actualizarCiudad -> _nomCiudad = ucwords(strtolower($_POST["EnomCiudad"]));
  $actualizarCiudad -> _idRegion = $_POST["Eregion"];
  $actualizarCiudad -> ajaxActualizarCiudad();
}
if ($tipoOperacion == "eliminarCiudad") {
  $eliminarCiudad = (new ajaxCiudad);
  $eliminarCiudad -> _idCiudad = $_POST["idCiudad"];
  $eliminarCiudad -> ajaxEliminarCiudad();
}
if ($tipoOperacion == "traerRegion") {
  $eliminarCiudad = (new ajaxCiudad);
  $eliminarCiudad -> ajaxTraerRegion();
}
?>
