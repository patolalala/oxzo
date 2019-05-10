<?php
Class ctrSensor {
  public function ctrVerSensor(){
    $tabla = "sensor";
    $respuesta = (new mdlSensor)->mdlVerSensor($tabla);
    return $respuesta;
  }
  public function ctrCrearSensor($datos){
    $tabla = "sensor";
    $respuesta = (new mdlSensor)->mdlCrearSensor($datos, $tabla);
    return $respuesta;
  }
  public function ctrEditarSensor($idSensor){
    $tabla = "sensor";
    $respuesta = (new mdlSensor)->mdlEditarSensor($idSensor, $tabla);
    return $respuesta;
  }
  public function ctrActualizarSensor($datos){
    $tabla = "sensor";
    $respuesta = (new mdlSensor)->mdlActualizarSensor($datos, $tabla);
    return $respuesta;
  }
  public function ctrEliminarSensor($idSensor){
    $tabla = "sensor";
    $respuesta = (new mdlSensor)->mdlEliminarSensor($idSensor, $tabla);
    return $respuesta;
  }
}
?>
