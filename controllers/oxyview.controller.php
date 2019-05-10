<?php
Class ctrOxyview {
  public function ctrVerOxyview(){
    $tabla = "oxyview";
    $respuesta = (new mdlOxyview)->mdlVerOxyview($tabla);
    return $respuesta;
  }
  public function ctrCrearOxyview($datos){
    $tabla = "oxyview";
    $respuesta = (new mdlOxyview)->mdlCrearOxyview($datos, $tabla);
    return $respuesta;
  }
  public function ctrEditarOxyview($idOxyview){
    $tabla = "oxyview";
    $respuesta = (new mdlOxyview)->mdlEditarOxyview($idOxyview, $tabla);
    return $respuesta;
  }
  public function ctrActualizarOxyview($datos){
    $tabla = "oxyview";
    $respuesta = (new mdlOxyview)->mdlActualizarOxyview($datos, $tabla);
    return $respuesta;
  }
  public function ctrEliminarOxyview($idOxyview){
    $tabla = "oxyview";
    $respuesta = (new mdlOxyview)->mdlEliminarOxyview($idOxyview, $tabla);
    return $respuesta;
  }
}
?>
