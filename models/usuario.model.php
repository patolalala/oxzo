<?php
require_once "conexion.php";
Class mdlUsuario {
  public function mdlVerUsuario($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT id_usuario, usuario, nombre, rol_usuario FROM $tabla");
    $sql -> execute();
    return $sql->fetchAll();
  }
  public function mdlCrearUsuario($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() VALUES(NULL, :correoUsuario, md5(:passUsuario), :nomUsuario, :rolUsuario, NULL)");
    $sql->bindParam(":nomUsuario", $datos["nomUsuario"], PDO::PARAM_STR);
    $sql->bindParam(":correoUsuario", $datos["correoUsuario"], PDO::PARAM_STR);
    $sql->bindParam(":passUsuario", $datos["passUsuario"], PDO::PARAM_STR);
    $sql->bindParam(":rolUsuario", $datos["rolUsuario"], PDO::PARAM_STR);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEditarUsuario($idUsuario, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT id_usuario, usuario, nombre, rol_usuario, clave FROM $tabla WHERE id_usuario = :idUsuario");
    $sql->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
    $sql -> execute();
    return $sql -> fetch();
  }
  public function mdlActualizarUsuario($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET nombre = :nomUsuario, usuario = :correoUsuario, clave = :passUsuario, rol_usuario = :rolUsuario WHERE id_usuario = :idUsuario");
    $sql->bindParam(":idUsuario", $datos["idUsuario"], PDO::PARAM_INT);
    $sql->bindParam(":nomUsuario", $datos["nomUsuario"], PDO::PARAM_STR);
    $sql->bindParam(":correoUsuario", $datos["correoUsuario"], PDO::PARAM_STR);
    $sql->bindParam(":passUsuario", $datos["passUsuario"], PDO::PARAM_STR);
    $sql->bindParam(":rolUsuario", $datos["rolUsuario"], PDO::PARAM_STR);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEliminarUsuario($idUsuario, $tabla){
    $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_usuario = :idUsuario");
    $sql->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "false";
    }
  }
}
?>
