<?php
Class ctrModulo {
  public function ctrVerModulo(){
    $tabla = "modulo";
    $respuesta = (new mdlModulo)->mdlVerModulo($tabla);
    return $respuesta;
  }
  public function ctrCrearModulo($datos){
    $tabla = "modulo";
    $respuesta = (new mdlModulo)->mdlCrearModulo($datos, $tabla);
    return $respuesta;
  }
  public function ctrEditarModulo($idModulo){
    $tabla = "modulo";
    $respuesta = (new mdlModulo)->mdlEditarModulo($idModulo, $tabla);
    return $respuesta;
  }
  public function ctrActualizarModulo($datos){
    $tabla = "modulo";
    $respuesta = (new mdlModulo)->mdlActualizarModulo($datos, $tabla);
    return $respuesta;
  }
  public function ctrEliminarModulo($idModulo){
    $tabla = "modulo";
    $respuesta = (new mdlModulo)->mdlEliminarModulo($idModulo, $tabla);
    return $respuesta;
  }
}
?>
