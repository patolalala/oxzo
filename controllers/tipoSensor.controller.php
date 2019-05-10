<?php
Class ctrTipoSensor {
  public function ctrVerTipoSensor(){
    $tabla = "tiposensor";
    $respuesta = (new mdlTipoSensor)->mdlVerTipoSensor($tabla);
    return $respuesta;
  }
  public function ctrCrearTipoSensor($nomTipoS){
    $tabla = "tiposensor";
    $respuesta = (new mdlTipoSensor)->mdlCrearTipoSensor($nomTipoS, $tabla);
    return $respuesta;
  }
  public function ctrEditarTipoSensor($idTipoS){
    $tabla = "tiposensor";
    $respuesta = (new mdlTipoSensor)-> mdlEditarTipoSensor($idTipoS, $tabla);
    return $respuesta;
  }
  public function ctrActualizarTipoSensor($idTipoS, $nomTipoS){
    $tabla = "tiposensor";
    $respuesta = (new mdlTipoSensor)->mdlActualizarTipoSensor($idTipoS, $nomTipoS, $tabla);
    return $respuesta;
  }
  public function ctrEliminarTipoSensor($idTipoS){
    $tabla = "tiposensor";
    $respuesta = (new mdlTipoSensor)->mdlEliminarTipoSensor($idTipoS, $tabla);
    return $respuesta;
  }
}
?>
