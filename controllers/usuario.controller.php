<?php
Class ctrUsuario {
  public function ctrVerUsuario(){
    $tabla = "usuarios";
    $respuesta = (new mdlUsuario)->mdlVerUsuario($tabla);
    return $respuesta;
  }
  public function ctrCrearUsuario($datos){
    $tabla = "usuarios";
    $respuesta = (new mdlUsuario)->mdlCrearUsuario($datos, $tabla);
    return $respuesta;
  }
  public function ctrEditarUsuario($idUsuario){
    $tabla = "usuarios";
    $respuesta = (new mdlUsuario)->mdlEditarUsuario($idUsuario, $tabla);
    return $respuesta;
  }
  public function ctrActualizarUsuario($datos){
    $tabla = "usuarios";
    $respuesta = (new mdlUsuario)->mdlActualizarUsuario($datos, $tabla);
    return $respuesta;
  }
  public function ctrEliminarUsuario($idUsuario){
    $tabla = "usuarios";
    $respuesta = (new mdlUsuario)->mdlEliminarUsuario($idUsuario, $tabla);
    return $respuesta;
  }
}
?>
