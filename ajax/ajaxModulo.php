<?php
require_once "../controllers/modulo.controller.php";
require_once "../controllers/centro.controller.php";
require_once "../controllers/cliente.controller.php";
require_once "../models/modulo.model.php";
require_once "../models/centro.model.php";
require_once "../models/cliente.model.php";
Class ajaxModulo {
  public $_idModulo;
  public $_nomModulo;
  public $_idCentro;

  public function ajaxCrearModulo(){
    $datos = array( "nomModulo"=>$this->_nomModulo,
                    "idCentro"=>$this->_idCentro);
    $respuesta = (new ctrModulo)->ctrCrearModulo($datos);
    echo $respuesta;
  }
  public function ajaxEditarModulo(){
    $idModulo = $this->_idModulo;
    $respuesta = (new ctrModulo)->ctrEditarModulo($idModulo);
    echo json_encode($respuesta);
  }
  public function ajaxActualizarModulo(){
    $datos = array( "nomModulo"=>$this->_nomModulo,
                    "idCentro"=>$this->_idCentro,
                    "idModulo"=>$this->_idModulo);
    $respuesta = (new ctrModulo)->ctrActualizarModulo($datos);
    echo $respuesta;
  }
  public function ajaxEliminarModulo(){
    $idModulo = $this->_idModulo;
    $respuesta = (new ctrModulo)->ctrEliminarModulo($idModulo);
    echo $respuesta;
  }
  // Modal Regresivo
  public function ajaxTaerCentroModulo(){
    $respuesta = (new ctrCentro)->ctrVerCentro();
    echo json_encode($respuesta);
  }
  public function ajaxTaerClienteModulo(){
    $respuesta = (new ctrCliente)->ctrVerCliente();
    echo json_encode($respuesta);
  }
}
$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "crearModulo") {
  $crearModulo = (new ajaxModulo);
  $crearModulo -> _nomModulo = ucwords(strtolower($_POST["nomModulo"]));
  $crearModulo -> _idCentro = $_POST["centroModulo"];
  $crearModulo -> ajaxCrearModulo();
}
if ($tipoOperacion == "editarModulo") {
  $editarModulo = (new ajaxModulo);
  $editarModulo -> _idModulo = $_POST["idModulo"];
  $editarModulo -> ajaxEditarModulo();
}
if ($tipoOperacion == "actualizarModulo") {
  $actualizarModulo = (new ajaxModulo);
  $actualizarModulo -> _nomModulo = ucwords(strtolower($_POST["EnomModulo"]));
  $actualizarModulo -> _idCentro = $_POST["EcentroModulo"];
  $actualizarModulo -> _idModulo = $_POST["idModulo"];
  $actualizarModulo -> ajaxActualizarModulo();
}
if ($tipoOperacion == "eliminarModulo") {
  $eliminarModulo = (new ajaxModulo);
  $eliminarModulo -> _idModulo = $_POST["idModulo"];
  $eliminarModulo -> ajaxEliminarModulo();
}
// Modales Regresivos
if ($tipoOperacion == "traerCentroModulo") {
  $traerCentroModulo = (new ajaxModulo);
  $traerCentroModulo -> ajaxTaerCentroModulo();
}
if ($tipoOperacion == "traerClienteModulo") {
  $traerClienteModulo = (new ajaxModulo);
  $traerClienteModulo -> ajaxTaerClienteModulo();
}
?>
