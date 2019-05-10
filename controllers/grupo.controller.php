<?php
Class ctrGrupo{
  public function ctrVerGrupo(){
    $tabla = "grupo";
    $respuesta = (new mdlGrupo)->mdlVerGrupo($tabla);
    return $respuesta;
  }
  public function ctrCrearGrupo($datos){
    $tabla = "grupo";
    $respuesta = (new mdlGrupo)->mdlCrearGrupo($datos, $tabla);
    return $respuesta;
  }
  public function ctrEditarGrupo($idGrupo){
    $tabla = "grupo";
    $respuesta = (new mdlGrupo)->mdlEditarGrupo($idGrupo, $tabla);
    return $respuesta;
  }
  public function ctrActualizarGrupo($datos){
    $tabla = "grupo";
    $respuesta = (new mdlGrupo)->mdlActualizarGrupo($datos, $tabla);
    return $respuesta;
  }
  public function ctrEliminarGrupo($idGrupo){
    $tabla = "grupo";
    $respuesta = (new mdlGrupo)->mdlEliminarGrupo($idGrupo, $tabla);
    return $respuesta;
  }
}
?>
