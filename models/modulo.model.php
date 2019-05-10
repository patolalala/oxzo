<?php
require_once "conexion.php";
Class mdlModulo {
  public function mdlVerModulo($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT m.id_modulo, m.nom_modulo, m.id_centro, c.nom_centro FROM $tabla m, centro c WHERE m.id_centro = c.id_centro");
    $sql -> execute();
    return $sql -> fetchAll();
  }
  public function mdlCrearModulo($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla VALUES(NULL, :nomModulo, :idCentro)");
    $sql->bindParam(":nomModulo", $datos["nomModulo"], PDO::PARAM_STR);
    $sql->bindParam(":idCentro", $datos["idCentro"], PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEditarModulo($idModulo, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT m.id_modulo, m.nom_modulo, m.id_centro, c.nom_centro FROM $tabla m, centro c WHERE m.id_centro = c.id_centro AND m.id_modulo = :idModulo");
    $sql->bindParam(":idModulo", $idModulo, PDO::PARAM_INT);
    $sql -> execute();
    return $sql -> fetch();
  }
  public function mdlActualizarModulo($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET nom_modulo = :nomModulo, id_centro = :idCentro WHERE id_modulo = :idModulo");
    $sql->bindParam(":nomModulo", $datos["nomModulo"], PDO::PARAM_STR);
    $sql->bindParam(":idCentro", $datos["idCentro"], PDO::PARAM_INT);
    $sql->bindParam(":idModulo", $datos["idModulo"], PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEliminarModulo($idModulo, $tabla){
    $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_modulo = :idModulo");
    $sql->bindParam(":idModulo", $idModulo, PDO::PARAM_INT);
    if ($sql->execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
}
?>
