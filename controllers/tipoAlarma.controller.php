<?php
Class ctrTipoAlarma{
  public function ctrVerTipoAlarma(){
    $tabla = "tipo_alrma";
    $respuesta = (new mdlTipoAlarma)->mdlVerTipoAlarma($tabla);
    return $respuesta;
  }
  public function ctrCrearTipoAlarma($nomTipoA){
    $tabla = "tipo_alrma";
    $respuesta = (new mdlTipoAlarma)->mdlCrearTipoAlarma($nomTipoA, $tabla);
    return $respuesta;
  }
  public function ctrEditarTipoAlarma($idTipoA){
    $tabla = "tipo_alrma";
    $respuesta = (new mdlTipoAlarma)-> mdlEditarTipoAlarma($idTipoA, $tabla);
    return $respuesta;
  }
  public function ctrActualizarTipoAlarma($idTipoA, $nomTipoA){
    $tabla = "tipo_alrma";
    $respuesta = (new mdlTipoAlarma)->mdlActualizarTipoAlarma($idTipoA, $nomTipoA, $tabla);
    return $respuesta;
  }
  public function ctrEliminarTipoAlarma($idTipoA){
    $tabla = "tipo_alrma";
    $respuesta = (new mdlTipoAlarma)->mdlEliminarTipoAlarma($idTipoA, $tabla);
    return $respuesta;
  }
}
?>
