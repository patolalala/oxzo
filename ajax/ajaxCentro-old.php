<?php
require_once "../controllers/centro.controller.php";
require_once "../models/centro.model.php";
require_once "../controllers/cliente.controller.php";
require_once "../models/cliente.model.php";
Class ajaxCentro {
  public $_idCentro;
  public $_nomCentro;
  public $_dirCentro;
  public $_mapCentro;
  public $_contactoCentro;
  public $_emailCentro;
  public $_idCliente;

  public function ajaxCrearCentro(){
    $datos = array( "nomCentro"=>$this->_nomCentro,
                    "dirCentro"=>$this->_dirCentro,
                    "mapCentro"=>$this->_mapCentro,
                    "contactoCentro"=>$this->_contactoCentro,
                    "emailCentro"=>$this->_emailCentro,
                    "idCliente"=>$this->_idCliente);
    $respuesta = (new ctrCentro)->ctrCrearCentro($datos);
    echo $respuesta;
  }
  public function ajaxEditarCentro(){
    $idCentro = $this->_idCentro;
    $respuesta = (new ctrCentro)->ctrEditarCentro($idCentro);
    echo json_encode($respuesta);
  }
  public function ajaxActualizarCentro(){
    $datos = array( "nomCentro"=>$this->_nomCentro,
                    "dirCentro"=>$this->_dirCentro,
                    "mapCentro"=>$this->_mapCentro,
                    "contactoCentro"=>$this->_contactoCentro,
                    "emailCentro"=>$this->_emailCentro,
                    "idCliente"=>$this->_idCliente,
                    "idCentro"=>$this->_idCentro);
    $respuesta = (new ctrCentro)->ctrActualizarCentro($datos);
    echo $respuesta;
  }
  public function ajaxEliminarCentro(){
    $idCentro = $this->_idCentro;
    $respuesta = (new ctrCentro)->ctrEliminarCentro($idCentro);
    echo $respuesta;
  }
  // Modales Regresivos
  public function ajaxTraerEmpresaCentro(){
    $respuesta = (new ctrCliente)->ctrVerCliente();
    echo json_encode($respuesta);
  }

}
$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "crearCentro") {
  $crearCentro = (new ajaxCentro);
  $crearCentro -> _nomCentro = ucwords(strtolower($_POST["nomCentro"]));
  $crearCentro -> _dirCentro = ucwords(strtolower($_POST["dirCentro"]));
  $crearCentro -> _mapCentro = $_POST["mapCentro"];
  $crearCentro -> _contactoCentro = $_POST["contactoCentro"];
  $crearCentro -> _emailCentro = $_POST["emailCentro"];
  $crearCentro -> _idCliente = $_POST["clienteCentro"];
  $crearCentro -> ajaxCrearCentro();
}
if ($tipoOperacion == "editarCentro") {
  $editarCentro = (new ajaxCentro);
  $editarCentro -> _idCentro = $_POST["idCentro"];
  $editarCentro -> ajaxEditarCentro();
}
if ($tipoOperacion == "actualizarCentro") {
  $actualizarCentro = (new ajaxCentro);
  $actualizarCentro -> _nomCentro = ucwords(strtolower($_POST["EnomCentro"]));
  $actualizarCentro -> _dirCentro = ucwords(strtolower($_POST["EdirCentro"]));
  $actualizarCentro -> _mapCentro = $_POST["EmapCentro"];
  $actualizarCentro -> _contactoCentro = $_POST["EcontactoCentro"];
  $actualizarCentro -> _emailCentro = $_POST["EemailCentro"];
  $actualizarCentro -> _idCliente = $_POST["EclienteCentro"];
  $actualizarCentro -> _idCentro = $_POST["idCentro"];
  $actualizarCentro -> ajaxActualizarCentro();
}
if ($tipoOperacion == "eliminarCentro") {
  $eliminarCentro = (new ajaxCentro);
  $eliminarCentro -> _idCentro = $_POST["idCentro"];
  $eliminarCentro -> ajaxEliminarCentro();
}
// Modales Regresivos
if ($tipoOperacion == "traerEmpresaCentro") {
  $traerEmpresaCentro = (new ajaxCentro);
  $traerEmpresaCentro -> ajaxTraerEmpresaCentro();
}
?>
