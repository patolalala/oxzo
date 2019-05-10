<?php
require_once "../controllers/usuario.controller.php";
require_once "../models/usuario.model.php";
Class ajaxUsuario {
  public $_idUsuario;
  public $_nomUsuario;
  public $_correoUsuario;
  public $_pass1Usuario;
  public $_pass2Usuario;
  public $_rolUsuario;
  public function ajaxCrearUsuario(){
    if (($this->_pass1Usuario) == ($this->_pass2Usuario)) {
      $datos = array( "nomUsuario"=>$this->_nomUsuario,
                      "correoUsuario"=>$this->_correoUsuario,
                      "passUsuario"=>$this->_pass1Usuario,
                      "rolUsuario"=>$this->_rolUsuario);
      $respuesta = (new ctrUsuario)->ctrCrearUsuario($datos);
      echo $respuesta;
    } else {
      echo "passNo";
    }
  }
  public function ajaxEditarUsuario(){
    $idUsuario = $this->_idUsuario;
    $respuesta = (new ctrUsuario)->ctrEditarUsuario($idUsuario);
    echo json_encode($respuesta);
  }
  public function ajaxActualizarUsuario(){
    if (($this->_pass1Usuario) == ($this->_pass2Usuario)) {
      $datos = array( "nomUsuario"=>$this->_nomUsuario,
                      "correoUsuario"=>$this->_correoUsuario,
                      "passUsuario"=>$this->_pass1Usuario,
                      "rolUsuario"=>$this->_rolUsuario,
                      "idUsuario"=>$this->_idUsuario);
      $respuesta = (new ctrUsuario)->ctrActualizarUsuario($datos);
      echo $respuesta;
    } else {
      echo "passNo";
    }
  }
  public function ajaxEliminarUsuario(){
    $idUsuario = $this->_idUsuario;
    $respuesta = (new ctrUsuario)->ctrEliminarUsuario($idUsuario);
    echo $respuesta;
  }

}
$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "crearUsuario") {
  $crearUsuario = (new ajaxUsuario);
  $crearUsuario -> _nomUsuario = ucwords(strtolower($_POST["nomUsuario"]));
  $crearUsuario -> _correoUsuario = $_POST["correoUsuario"];
  $crearUsuario -> _pass1Usuario = $_POST["passUsuario"];
  $crearUsuario -> _pass2Usuario = $_POST["repPassUsuario"];
  $crearUsuario -> _rolUsuario = $_POST["rolUsuario"];
  $crearUsuario -> ajaxCrearUsuario();
}
if ($tipoOperacion == "editarUsuario") {
  $editarUsuario = (new ajaxUsuario);
  $editarUsuario -> _idUsuario = $_POST["idUsuario"];
  $editarUsuario -> ajaxEditarUsuario();
}
if ($tipoOperacion == "actualizarUsuario") {
  $actualizarUsuario = (new ajaxUsuario);
  $actualizarUsuario -> _idUsuario = $_POST["idUsuario"];
  $actualizarUsuario -> _nomUsuario = ucwords(strtolower($_POST["EnomUsuario"]));
  $actualizarUsuario -> _correoUsuario = $_POST["EcorreoUsuario"];
  $actualizarUsuario -> _pass1Usuario = $_POST["EpassUsuario"];
  $actualizarUsuario -> _pass2Usuario = $_POST["ErepPassUsuario"];
  $actualizarUsuario -> _rolUsuario = $_POST["ErolUsuario"];
  $actualizarUsuario -> ajaxActualizarUsuario();
}
if ($tipoOperacion == "eliminarUsuario") {
  $eliminarUsuario = (new ajaxUsuario);
  $eliminarUsuario -> _idUsuario = $_POST["idUsuario"];
  $eliminarUsuario -> ajaxEliminarUsuario();
}
?>
