<?php
require_once "conexion.php";
Class mdlTipoAlarma {
  public function mdlVerTipoAlarma($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT id_tipoalarma, tipoalarma FROM $tabla");
    $sql -> execute();
    return $sql -> fetchAll();
  }
  public function mdlCrearTipoAlarma($nomTipoA, $tabla){
    $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() VALUES(NULL, :nomTipoAlarma)");
    $sql->bindParam(":nomTipoAlarma", $nomTipoA, PDO::PARAM_STR);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEditarTipoAlarma($idTipoA, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT id_tipoalarma, tipoalarma FROM $tabla WHERE id_tipoalarma = :idTipoAlarma");
    $sql->bindParam("idTipoAlarma", $idTipoA, PDO::PARAM_INT);
    $sql -> execute();
    return $sql->fetch();
  }
  public function mdlActualizarTipoAlarma($idTipoA, $nomTipoA, $tabla){
    $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET tipoalarma = :nomTipoAlarma WHERE id_tipoalarma = :idTipoAlarma");
    $sql->bindParam(":idTipoAlarma", $idTipoA, PDO::PARAM_INT);
    $sql->bindParam(":nomTipoAlarma", $nomTipoA, PDO::PARAM_STR);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEliminarTipoAlarma($idTipoA, $tabla) {
    $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_tipoalarma = :idTipoAlarma");
    $sql->bindParam(":idTipoAlarma", $idTipoA, PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
}
?>
