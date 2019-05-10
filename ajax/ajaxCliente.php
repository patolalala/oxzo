<?php
require_once "../controllers/ciudad.controller.php";
require_once "../controllers/cliente.controller.php";
require_once "../models/ciudad.model.php";
require_once "../models/cliente.model.php";

Class ajaxCliente {
  public $_idEmpresa;
  public $_rutEmpresa;
  public $_nomEmpresa;
  public $_giroEmpresa;
  public $_dirEmpresa;
  public $_ciudadEmpresa;

  public function ajaxCrearEmpresa(){
    $datos = array( "rutEmpresa"=>$this->_rutEmpresa,
                    "nomEmpresa"=>$this->_nomEmpresa,
                    "giroEmpresa"=>$this->_giroEmpresa,
                    "dirEmpresa"=>$this->_dirEmpresa,
                    "ciudadEmpresa"=>$this->_ciudadEmpresa);
    $respuesta = (new ctrCliente)->ctrCrearEmpresa($datos);
    echo $respuesta;
  }
  public function ajaxEditarCliente(){
    $idCliente = $this->_idEmpresa;
    $respuesta = (new ctrCliente)->ctrEditarCliente($idCliente);
    echo json_encode($respuesta);
  }
  public function ajaxActualizarCliente(){
    $datos = array( "idCliente"=>$this->_idEmpresa,
                    "rutEmpresa"=>$this->_rutEmpresa,
                    "nomEmpresa"=>$this->_nomEmpresa,
                    "giroEmpresa"=>$this->_giroEmpresa,
                    "dirEmpresa"=>$this->_dirEmpresa,
                    "ciudadEmpresa"=>$this->_ciudadEmpresa);
    $respuesta = (new ctrCliente)->ctrActualizarCliente($datos);
    echo $respuesta;
  }
  public function ajaxEliminarCliente(){
    $idCliente = $this->_idEmpresa;
    $respuesta = (new ctrCliente)->ctrEliminarCliente($idCliente);
    echo $respuesta;
  }
  // Funciones Modal Regresivo
  public function ajaxTraerCiuadEmpresa(){
    $respuesta = (new ctrCiudad)->ctrTraerCiudad();
    echo json_encode($respuesta);
  }
}

$tipoOperacion = $_POST["tipoOperacion"];
// CRUD Cliente
if ($tipoOperacion == "nuevaEmpresa") {
  $nuevaEmpresa = (new ajaxCliente);
  $nuevaEmpresa -> _rutEmpresa = $_POST["rutEmpresa"];
  $nuevaEmpresa -> _nomEmpresa = ucwords(strtolower($_POST["nomEmpresa"]));
  $nuevaEmpresa -> _giroEmpresa = ucwords(strtolower($_POST["giroEmpresa"]));
  $nuevaEmpresa -> _dirEmpresa = ucwords(strtolower($_POST["dirEmpresa"]));
  $nuevaEmpresa -> _ciudadEmpresa = $_POST["ciudadEmpresa"];
  $nuevaEmpresa -> ajaxCrearEmpresa();
}
if ($tipoOperacion == "editarCliente") {
  $editarCliente = (new ajaxCliente);
  $editarCliente -> _idEmpresa = $_POST["idCliente"];
  $editarCliente -> ajaxEditarCliente();
}
if ($tipoOperacion == "actualizarEmpresa") {
  $actualizarEmpresa = (new ajaxCliente);
  $actualizarEmpresa -> _idEmpresa = $_POST["idCliente"];
  $actualizarEmpresa -> _rutEmpresa = $_POST["ErutEmpresa"];
  $actualizarEmpresa -> _nomEmpresa = ucwords(strtolower($_POST["EnomEmpresa"]));
  $actualizarEmpresa -> _giroEmpresa = ucwords(strtolower($_POST["EgiroEmpresa"]));
  $actualizarEmpresa -> _dirEmpresa = ucwords(strtolower($_POST["EdirEmpresa"]));
  $actualizarEmpresa -> _ciudadEmpresa = $_POST["EciudadEmpresa"];
  $actualizarEmpresa -> ajaxActualizarCliente();
}
if ($tipoOperacion == "eliminarCliente") {
  $eliminarCliente = (new ajaxCliente);
  $eliminarCliente -> _idEmpresa = $_POST["idCliente"];
  $eliminarCliente -> ajaxEliminarCliente();
}
// Modal Regresivo
if ($tipoOperacion == "traerCiudadEmpresa") {
  $traerCiudad = (new ajaxCliente);
  $traerCiudad -> ajaxTraerCiuadEmpresa();
}
?>
