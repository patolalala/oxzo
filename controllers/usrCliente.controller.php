<?php
Class ctrUsrCliente{
  public function ctrVerUsrCliente(){
    $tabla = "usr_cliente";
    $respuesta = (new mdlUsrCliente)->mdlVerUsrCliente($tabla);
    return $respuesta;
  }
  public function ctrCrearUsrCliente($datos){
    $tabla = "usr_cliente";
    $respuesta = (new mdlUsrCliente)->mdlCrearUsrCliente($datos, $tabla);
    return $respuesta;
  }
  public function ctrEditarUsrCliente($idUsrCliente){
    $tabla = "usr_cliente";
    $respuesta = (new mdlUsrCliente)->mdlEditarUsrCliente($idUsrCliente, $tabla);
    return $respuesta;
  }
  public function ctrActualizarUsrCliente($datos){
    $tabla = "usr_cliente";
    $respuesta = (new mdlUsrCliente)->mdlActualizarUsrCliente($datos, $tabla);
    return $respuesta;
  }
  public function ctrEliminarUsrCliente($idUsrCliente){
    $tabla = "usr_cliente";
    $respuesta = (new mdlUsrCliente)->mdlEliminarUsrCliente($idUsrCliente, $tabla);
    return $respuesta;
  }
}
?>
