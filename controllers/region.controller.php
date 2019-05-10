<?php
Class ctrRegion {
  public function ctrVerRegion(){
    $tabla = "region";
    $respuesta = (new mdlRegion)->mdlVerRegion($tabla);
    return $respuesta;
  }
  public function ctrNuevaRegion($nomRegion){
    $tabla = "region";
    $respuesta = (new mdlRegion)->mdlNuevaRegion($nomRegion, $tabla);
    return $respuesta;
  }
  public function ctrEditarRegion($idRegion){
    $tabla = "region";
    $respuesta = (new mdlRegion)->mdlEditarRegion($idRegion, $tabla);
    return $respuesta;
  }
  public function ctrActualizarRegion($nomRegion, $idRegion){
    $tabla = "region";
    $respuesta = (new mdlRegion)->mdlActualizarRegion($nomRegion, $idRegion, $tabla);
    return $respuesta;
  }
  public function ctrEliminarRegion($idRegion){
    $tabla = "region";
    $respuesta = (new mdlRegion)->mdlEliminarRegion($idRegion, $tabla);
    return $respuesta;
  }
}
?>
