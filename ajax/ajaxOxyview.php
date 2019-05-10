<?php
require_once "../controllers/oxyview.controller.php";
require_once "../controllers/modulo.controller.php";
require_once "../controllers/centro.controller.php";
require_once "../models/oxyview.model.php";
require_once "../models/modulo.model.php";
require_once "../models/centro.model.php";
Class ajaxOxyview {
  public $_idOxyview;
  public $_nSerieOxyview;
  public $_idModulo;

  public function ajaxCrearOxyview(){
    $datos = array( "nSerieOxyview"=>$this->_nSerieOxyview,
                    "idModulo"=>$this->_idModulo);
    $respuesta = (new ctrOxyview)->ctrCrearOxyview($datos);
    echo $respuesta;
  }
  public function ajaxEditarOxyview(){
    $idOxyview = $this->_idOxyview;
    $respuesta = (new ctrOxyview)->ctrEditarOxyview($idOxyview);
    echo json_encode($respuesta);
  }
  public function ajaxActualizarOxyview(){
    $datos = array( "nSerieOxyview"=>$this->_nSerieOxyview,
                    "idModulo"=>$this->_idModulo,
                    "idOxyview"=>$this->_idOxyview);
    $respuesta = (new ctrOxyview)->ctrActualizarOxyview($datos);
    echo $respuesta;
  }
  public function ajaxEliminarOxyview(){
    $idOxyview = $this->_idOxyview;
    $respuesta = (new ctrOxyview)->ctrEliminarOxyview($idOxyview);
    echo $respuesta;
  }
  // Modal Regresivo
  public function ajaxTaerModuloOxyview(){
    $respuesta = (new ctrModulo)->ctrVerModulo();
    echo json_encode($respuesta);
  }
  public function ajaxTaerCentroOxyview(){
    $respuesta = (new ctrCentro)->ctrVerCentro();
    echo json_encode($respuesta);
  }
}
$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "crearOxyview") {
  $crearOxyview = (new ajaxOxyview);
  $crearOxyview -> _nSerieOxyview = $_POST["nSerieOxyview"];
  $crearOxyview -> _idModulo = $_POST["moduloOxyview"];
  $crearOxyview -> ajaxCrearOxyview();
}
if ($tipoOperacion == "editarOxyview") {
  $editarOxyview = (new ajaxOxyview);
  $editarOxyview -> _idOxyview = $_POST["idOxyview"];
  $editarOxyview -> ajaxEditarOxyview();
}
if ($tipoOperacion == "actualizarOxyview") {
  $actualizarOxyview = (new ajaxOxyview);
  $actualizarOxyview -> _nSerieOxyview = $_POST["EnSerieOxyview"];
  $actualizarOxyview -> _idModulo = $_POST["EmoduloOxyview"];
  $actualizarOxyview -> _idOxyview = $_POST["idOxyview"];
  $actualizarOxyview -> ajaxActualizarOxyview();
}
if ($tipoOperacion == "eliminarOxyview") {
  $eliminarOxyview = (new ajaxOxyview);
  $eliminarOxyview -> _idOxyview = $_POST["idOxyview"];
  $eliminarOxyview -> ajaxEliminarOxyview();
}
// Modales Regresivos
if ($tipoOperacion == "traerModuloOxyview") {
  $traerModuloOxyview = (new ajaxOxyview);
  $traerModuloOxyview -> ajaxTaerModuloOxyview();
}
if ($tipoOperacion == "traerCentroOxyview") {
  $traerCentroOxyview = (new ajaxOxyview);
  $traerCentroOxyview -> ajaxTaerCentroOxyview();
}
?>
