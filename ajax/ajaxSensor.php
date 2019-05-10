<?php
require_once "../controllers/sensor.controller.php";
require_once "../controllers/tipoSensor.controller.php";
require_once "../controllers/grupo.controller.php";
require_once "../controllers/oxyview.controller.php";
require_once "../controllers/modulo.controller.php";
require_once "../controllers/centro.controller.php";
require_once "../models/sensor.model.php";
require_once "../models/tipoSensor.model.php";
require_once "../models/grupo.model.php";
require_once "../models/oxyview.model.php";
require_once "../models/modulo.model.php";
require_once "../models/centro.model.php";
Class ajaxSensor {
  public $_idSensor;
  public $_nSerieSensor;
  public $_profSensor;
  public $_idTipoSensor;
  public $_idGrupo;

  public function ajaxCrearSensor(){
    $datos = array( "nSerieSensor"=>$this->_nSerieSensor,
                    "profSensor"=>$this->_profSensor,
                    "idTipoSensor"=>$this->_idTipoSensor,
                    "idGrupo"=>$this->_idGrupo);
    $respuesta = (new ctrSensor)->ctrCrearSensor($datos);
    echo $respuesta;
  }
  public function ajaxEditarSensor(){
    $idSensor = $this->_idSensor;
    $respuesta = (new ctrSensor)->ctrEditarSensor($idSensor);
    echo json_encode($respuesta);
  }
  public function ajaxActualizarSensor(){
    $datos = array( "nSerieSensor"=>$this->_nSerieSensor,
                    "profSensor"=>$this->_profSensor,
                    "idTipoSensor"=>$this->_idTipoSensor,
                    "idGrupo"=>$this->_idGrupo,
                    "idSensor"=>$this->_idSensor);
    $respuesta = (new ctrSensor)->ctrActualizarSensor($datos);
    echo $respuesta;
  }
  public function ajaxEliminarSensor(){
    $idSensor = $this->_idSensor;
    $respuesta = (new ctrSensor)->ctrEliminarSensor($idSensor);
    echo $respuesta;
  }
  // Modal Regresivo
  public function ajaxTraerGrupoSensor(){
    $respuesta = (new ctrGrupo)->ctrVerGrupo();
    echo json_encode($respuesta);
  }
  public function ajaxTraerOxyviewSensor(){
    $respuesta = (new ctrOxyview)->ctrVerOxyview();
    echo json_encode($respuesta);
  }
  public function ajaxTraerModuloSensor(){
    $respuesta = (new ctrModulo)->ctrVerModulo();
    echo json_encode($respuesta);
  }
  public function ajaxTraerCentroSensor(){
    $respuesta = (new ctrCentro)->ctrVerCentro();
    echo json_encode($respuesta);
  }
  public function ajaxTraerTipoSensorSensor(){
    $respuesta = (new ctrTipoSensor)->ctrVerTipoSensor();
    echo json_encode($respuesta);
  }
}
$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "crearSensor") {
  $crearSensor = (new ajaxSensor);
  $crearSensor -> _nSerieSensor = $_POST["nSerieSensor"];
  $crearSensor -> _idTipoSensor = $_POST["tipoSensorSensor"];
  $crearSensor -> _idGrupo = $_POST["grupoSensor"];
  $crearSensor -> _profSensor = $_POST["profSensor"];
  $crearSensor -> ajaxCrearSensor();
}
if ($tipoOperacion == "editarSensor") {
  $editarSensor = (new ajaxSensor);
  $editarSensor -> _idSensor = $_POST["idSensor"];
  $editarSensor -> ajaxEditarSensor();
}
if ($tipoOperacion == "actualizarSensor") {
  $actualizarSensor = (new ajaxSensor);
  $actualizarSensor = (new ajaxSensor);
  $actualizarSensor -> _nSerieSensor = $_POST["EnSerieSensor"];
  $actualizarSensor -> _idTipoSensor = $_POST["EtipoSensorSensor"];
  $actualizarSensor -> _idGrupo = $_POST["EgrupoSensor"];
  $actualizarSensor -> _profSensor = $_POST["EprofSensor"];
  $actualizarSensor -> _idSensor = $_POST["idSensor"];
  $actualizarSensor -> ajaxActualizarSensor();
}
if ($tipoOperacion == "eliminarSensor") {
  $eliminarSensor = (new ajaxSensor);
  $eliminarSensor -> _idSensor = $_POST["idSensor"];
  $eliminarSensor -> ajaxEliminarSensor();
}
// Modales Regresivo
if ($tipoOperacion == "traerGrupoSensor") {
  $traerGrupoSensor = (new ajaxSensor);
  $traerGrupoSensor -> ajaxTraerGrupoSensor();
}
if ($tipoOperacion == "traerOxyviewSensor") {
  $traerOxyviewSensor = (new ajaxSensor);
  $traerOxyviewSensor -> ajaxTraerOxyviewSensor();
}
if ($tipoOperacion == "traerModuloSensor") {
  $traerModuloSensor = (new ajaxSensor);
  $traerModuloSensor -> ajaxTraerModuloSensor();
}
if ($tipoOperacion == "traerCentroSensor") {
  $traerCentroSensor = (new ajaxSensor);
  $traerCentroSensor -> ajaxTraerCentroSensor();
}
if ($tipoOperacion == "traerTipoSensorSensor") {
  $traerTipoSensorSensor = (new ajaxSensor);
  $traerTipoSensorSensor -> ajaxTraerTipoSensorSensor();
}
?>
