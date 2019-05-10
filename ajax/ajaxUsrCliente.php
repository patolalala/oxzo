<?php
require_once "../controllers/usrCliente.controller.php";
require_once "../models/usrCliente.model.php";
Class ajaxUsrCliente {
  public $_idUsrCliente;
  public $_nomUsrCliente;
  public $_correoUsrCliente;
  public $_pass1UsrCliente;
  public $_pass2UsrCliente;
  public $_rolUsrCliente;
  public $_idCliente;
  public function ajaxCrearUsrCliente(){
    if (($this->_pass1UsrCliente) == ($this->_pass2UsrCliente)) {
      $datos = array( "nomUsrCliente"=>$this->_nomUsrCliente,
                      "correoUsrCliente"=>$this->_correoUsrCliente,
                      "passUsrCliente"=>$this->_pass1UsrCliente,
                      "rolUsrCliente"=>$this->_rolUsrCliente,
                      "idCliente"=>$this->_idCliente);
      $respuesta = (new ctrUsrCliente)->ctrCrearUsrCliente($datos);
      echo $respuesta;
    } else {
      echo "passNo";
    }
  }
  public function ajaxEditarUsrCliente(){
    $idUsrCliente = $this->_idUsrCliente;
    $respuesta = (new ctrUsrCliente)->ctrEditarUsrCliente($idUsrCliente);
    echo json_encode($respuesta);
  }
  public function ajaxActualizarUsrCliente(){
    if (($this->_pass1UsrCliente) == ($this->_pass2UsrCliente)) {
      $datos = array( "nomUsrCliente"=>$this->_nomUsrCliente,
                      "correoUsrCliente"=>$this->_correoUsrCliente,
                      "passUsrCliente"=>$this->_pass1UsrCliente,
                      "rolUsrCliente"=>$this->_rolUsrCliente,
                      "idCliente"=>$this->_idCliente,
                      "idUsrCliente"=>$this->_idUsrCliente);
      $respuesta = (new ctrUsrCliente)->ctrActualizarUsrCliente($datos);
      echo $respuesta;
    } else {
      echo "passNo";
    }
  }
  public function ajaxEliminarUsrCliente(){
    $idUsrCliente = $this->_idUsrCliente;
    $respuesta = (new ctrUsrCliente)->ctrEliminarUsrCliente($idUsrCliente);
    echo $respuesta;
  }

}
$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "crearUsrCliente") {
  $crearUsrCliente = (new ajaxUsrCliente);
  $crearUsrCliente -> _nomUsrCliente = ucwords(strtolower($_POST["nomUsrCliente"]));
  $crearUsrCliente -> _correoUsrCliente = $_POST["correoUsrCliente"];
  $crearUsrCliente -> _pass1UsrCliente = $_POST["passUsrCliente"];
  $crearUsrCliente -> _pass2UsrCliente = $_POST["repUsrCliente"];
  $crearUsrCliente -> _rolUsrCliente = $_POST["rolUsrCliente"];
  $crearUsrCliente -> _idCliente = $_POST["empresaUsrCliente"];
  $crearUsrCliente -> ajaxCrearUsrCliente();
}
if ($tipoOperacion == "editarUsrCliente") {
  $editarUsrCliente = (new ajaxUsrCliente);
  $editarUsrCliente -> _idUsrCliente = $_POST["idUsrCliente"];
  $editarUsrCliente -> ajaxEditarUsrCliente();
}
if ($tipoOperacion == "actualizarUsrCliente") {
  $actualizarUsrCliente = (new ajaxUsrCliente);
  $actualizarUsrCliente -> _idUsrCliente = $_POST["idUsrCliente"];
  $actualizarUsrCliente -> _nomUsrCliente = ucwords(strtolower($_POST["EnomUsrCliente"]));
  $actualizarUsrCliente -> _correoUsrCliente = $_POST["EcorreoUsrCliente"];
  $actualizarUsrCliente -> _pass1UsrCliente = $_POST["EpassUsrCliente"];
  $actualizarUsrCliente -> _pass2UsrCliente = $_POST["ErepUsrCliente"];
  $actualizarUsrCliente -> _idCliente = $_POST["EempresaUsrCliente"];
  $actualizarUsrCliente -> _rolUsrCliente = $_POST["ErolUsrCliente"];
  $actualizarUsrCliente -> ajaxActualizarUsrCliente();
}
if ($tipoOperacion == "eliminarUsrCliente") {
  $eliminarUsrCliente = (new ajaxUsrCliente);
  $eliminarUsrCliente -> _idUsrCliente = $_POST["idUsrCliente"];
  $eliminarUsrCliente -> ajaxEliminarUsrCliente();
}
?>
