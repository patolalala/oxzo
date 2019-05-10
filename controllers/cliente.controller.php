<?php
Class ctrCliente {
  // CRUD Cliente
  public function ctrVerCliente(){
    $tabla = "cliente";
    $respuesta = (new mdlCliente)->mdlVerCliente($tabla);
    return $respuesta;
  }
  public function ctrTraerCiudad(){
    $tabla = "ciudad";
    $respuesta = (new mdlCliente)->mdlTraerCiudad($tabla);
    return $respuesta;
  }
  public function ctrCrearEmpresa($datos){
    $tabla = "cliente";
    $respuesta = (new mdlCliente)->mdlCrearEmpresa($datos, $tabla);
    return $respuesta;
  }
  public function ctrEditarCliente($idCliente){
    $tabla = "cliente";
    $respuesta = (new mdlCliente)->mdlEditarCliente($idCliente, $tabla);
    return $respuesta;
  }
  public function ctrActualizarCliente($datos){
    $tabla = "cliente";
    $respuesta = (new mdlCliente)->mdlActualizarCliente($datos, $tabla);
    return $respuesta;
  }
  public function ctrEliminarCliente($idCliente){
    $tabla = "cliente";
    $respuesta = (new mdlCliente)->mdlEliminarCliente($idCliente, $tabla);
    return $respuesta;
  }








  public function ctrTraerCliente($idCliente){
    $tabla = "cliente";
    $respuesta = (new mdlCliente)->mdlTraerCliente($idCliente, $tabla);
    return $respuesta;
  }
  public function ctrVerCentroEmpresa($idCliente){
    $tabla = "centro";
    $respuesta = (new mdlCliente)->mdlVerCentroEmpresa($idCliente, $tabla);
    return $respuesta;
  }
  public function ctrVerEquipoEmpresa($idCliente){
    $tabla = "oxyview";
    $respuesta = (new mdlCliente)->mdlVerequipoEmpresa($idCliente, $tabla);
    return $respuesta;
  }
  public function ctrVerUsuarioEmpresa($idCliente){
    $tabla = "usr_cliente";
    $respuesta = (new mdlCliente)->mdlVerUsuarioEmpresa($idCliente, $tabla);
    return $respuesta;
  }
  // Modal Regresivo

}


?>
