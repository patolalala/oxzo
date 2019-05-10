<?php
require_once "conexion.php";
Class mdlTipoSensor {
  public function mdlVerTipoSensor($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT id_tiposensor, tiposensor FROM $tabla");
    $sql -> execute();
    return $sql -> fetchAll();
  }
  public function mdlCrearTipoSensor($nomTipoS, $tabla){
    $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() VALUES(NULL, :nomTipoSensor)");
    $sql->bindParam(":nomTipoSensor", $nomTipoS, PDO::PARAM_STR);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEditarTipoSensor($idTipoS, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT id_tiposensor, tiposensor FROM $tabla WHERE id_tiposensor = :idTipoSensor");
    $sql->bindParam("idTipoSensor", $idTipoS, PDO::PARAM_INT);
    $sql -> execute();
    return $sql->fetch();
  }
  public function mdlActualizarTipoSensor($idTipoS, $nomTipoS, $tabla){
    $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET tiposensor = :nomTipoSensor WHERE id_tiposensor = :idTipoSensor");
    $sql->bindParam(":idTipoSensor", $idTipoS, PDO::PARAM_INT);
    $sql->bindParam(":nomTipoSensor", $nomTipoS, PDO::PARAM_STR);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEliminarTipoSensor($idTipoS, $tabla) {
    $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_tiposensor = :idTipoSensor");
    $sql->bindParam(":idTipoSensor", $idTipoS, PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
}
?>
