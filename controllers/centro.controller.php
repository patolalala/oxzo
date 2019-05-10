<?php
Class ctrCentro {
  public function ctrTraerEquipoCentro($idCentro){
    $tabla = "oxyview";
    $respuesta = (new mdlCentro)->mdlTraerEquipoCentro($idCentro, $tabla);
    return $respuesta;
  }
  public function ctrTraerUsuarioCentro($idCentro){
    $tabla = "usr_cliente";
    $respuesta = (new mdlCentro)->mdlTraerUsuarioCentro($idCentro, $tabla);
    return $respuesta;
  }




  public function ctrVerCentro(){
    $tabla = "centro";
    $respuesta = (new mdlCentro)->mdlVerCentro($tabla);
    return $respuesta;
  }
  public function ctrCrearCentro($datos){
    $tabla = "centro";
    $respuesta = (new mdlCentro)->mdlCrearCentro($datos, $tabla);
    return $respuesta;
  }
  public function ctrEditarCentro($idCentro){
    $tabla = "centro";
    $respuesta = (new mdlCentro)->mdlEditarCentro($idCentro, $tabla);
    return $respuesta;
  }
  public function ctrActualizarCentro($datos){
    $tabla = "centro";
    $respuesta = (new mdlCentro)->mdlActualizarCentro($datos, $tabla);
    return $respuesta;
  }
  public function ctrEliminarCentro($idCentro){
    $tabla = "centro";
    $respuesta = (new mdlCentro)->mdlEliminarCentro($idCentro, $tabla);
    return $respuesta;
  }
}


?>
