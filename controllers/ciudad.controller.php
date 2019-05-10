<?php
Class ctrCiudad {
  // CRUD Ciudad
  public function ctrVerCiudad(){
    $tabla = "ciudad";
    $respuesta = (new mdlCiudad)->mdlVerCiudad($tabla);
    return $respuesta;
  }
  public function ctrNuevaCiudad($nomCiudad, $idRegion){
    $tabla = "ciudad";
    $respuesta = (new mdlCiudad)->mdlNuevaCiudad($nomCiudad, $idRegion, $tabla);
    return $respuesta;
  }
  public function ctrEditarCiudad($idCiudad){
    $tabla = "ciudad";
    $respuesta = (new mdlCiudad)->mdlEditarCiudad($idCiudad, $tabla);
    return $respuesta;
  }
  public function ctrActualizarCiudad($datos){
    $tabla = "ciudad";
    $respuesta = (new mdlCiudad)->mdlActualizarCiudad($datos, $tabla);
    return $respuesta;
  }
  public function ctrEliminarCiudad($idCiudad){
    $tabla = "ciudad";
    $respuesta = (new mdlCiudad)->mdlEliminarCiudad($idCiudad, $tabla);
    return $respuesta;
  }
  // Modales Regresivos
  public function ctrTraerCiudad(){
    $tabla = "ciudad";
    $respuesta = (new mdlCiudad)->mdltraerCiudad($tabla);
    return $respuesta;
  }
  public function ctrTraerRegion(){
    $tabla = "region";
    $respuesta = (new mdlCiudad)->mdlTraerRegion($tabla);
    return $respuesta;
  }
}
?>
