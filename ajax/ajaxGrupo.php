<?php
require_once "../controllers/grupo.controller.php";
require_once "../controllers/oxyview.controller.php";
require_once "../controllers/modulo.controller.php";
require_once "../controllers/centro.controller.php";
require_once "../models/grupo.model.php";
require_once "../models/oxyview.model.php";
require_once "../models/modulo.model.php";
require_once "../models/centro.model.php";
Class ajaxGrupo {
  public $_idGrupo;
  public $_nomGrupo;
  public $_idOxyview;

  public function ajaxCrearGrupo(){
    $datos = array( "nomGrupo"=>$this->_nomGrupo,
                    "idOxyview"=>$this->_idOxyview);
    $respuesta = (new ctrGrupo)->ctrCrearGrupo($datos);
    echo $respuesta;
  }
  public function ajaxEditarGrupo(){
    $idGrupo = $this->_idGrupo;
    $respuesta = (new ctrGrupo)->ctrEditarGrupo($idGrupo);
    echo json_encode($respuesta);
  }
  public function ajaxActualizarGrupo(){
    $datos = array( "nomGrupo"=>$this->_nomGrupo,
                    "idOxyview"=>$this->_idOxyview,
                    "idGrupo"=>$this->_idGrupo);
    $respuesta = (new ctrGrupo)->ctrActualizarGrupo($datos);
    echo $respuesta;
  }
  public function ajaxEliminarGrupo(){
    $idGrupo = $this->_idGrupo;
    $respuesta = (new ctrGrupo)->ctrEliminarGrupo($idGrupo);
    echo $respuesta;
  }
  // Modal Regresivo
  public function ajaxTraerOxyviewGrupo(){
    $respuesta = (new ctrOxyview)->ctrVerOxyview();
    echo json_encode($respuesta);
  }
  public function ajaxTraerModuloGrupo(){
    $respuesta = (new ctrModulo)->ctrVerModulo();
    echo json_encode($respuesta);
  }
  public function ajaxTraerCentroGrupo(){
    $respuesta = (new ctrCentro)->ctrVerCentro();
    echo json_encode($respuesta);
  }
}
$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "crearGrupo") {
  $crearGrupo = (new ajaxGrupo);
  $crearGrupo -> _nomGrupo = ucwords(strtolower($_POST["nomGrupo"]));
  $crearGrupo -> _idOxyview = $_POST["oxyviewGrupo"];
  $crearGrupo -> ajaxCrearGrupo();
}
if ($tipoOperacion == "editarGrupo") {
  $editarGrupo = (new ajaxGrupo);
  $editarGrupo -> _idGrupo= $_POST["idGrupo"];
  $editarGrupo -> ajaxEditarGrupo();
}
if ($tipoOperacion == "actualizarGrupo") {
  $actualizarGrupo = (new ajaxGrupo);
  $actualizarGrupo -> _nomGrupo = ucwords(strtolower($_POST["EnomGrupo"]));
  $actualizarGrupo -> _idOxyview = $_POST["EoxyviewGrupo"];
  $actualizarGrupo -> _idGrupo = $_POST["idGrupo"];
  $actualizarGrupo -> ajaxActualizarGrupo();
}
if ($tipoOperacion == "eliminarGrupo") {
  $eliminarGrupo = (new ajaxGrupo);
  $eliminarGrupo -> _idGrupo = $_POST["idGrupo"];
  $eliminarGrupo -> ajaxEliminarGrupo();
}
// Modales Regresivo
if ($tipoOperacion == "traerOxyviewGrupo") {
  $traerOxyviewGrupo = (new ajaxGrupo);
  $traerOxyviewGrupo -> ajaxTraerOxyviewGrupo();
}
if ($tipoOperacion == "traerModuloGrupo") {
  $traerModuloGrupo = (new ajaxGrupo);
  $traerModuloGrupo -> ajaxTraerModuloGrupo();
}
if ($tipoOperacion == "traerCentroGrupo") {
  $traerCentroGrupo = (new ajaxGrupo);
  $traerCentroGrupo -> ajaxTraerCentroGrupo();
}
?>
