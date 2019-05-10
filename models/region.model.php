<?php
require_once "conexion.php";
Class mdlRegion {
  public function mdlVerRegion($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT id_region, nom_region FROM $tabla");
    $sql -> execute();
    return $sql -> fetchAll();
  }
  public function mdlNuevaRegion($nomRegion, $tabla){
    $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() VALUES(NULL, :nomRegion)");
    $sql->bindParam(":nomRegion", $nomRegion, PDO::PARAM_STR);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEditarRegion($idRegion, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT id_region, nom_region FROM $tabla WHERE id_region = :idRegion");
    $sql->bindParam(":idRegion", $idRegion, PDO::PARAM_INT);
    $sql -> execute();
    return $sql -> fetch();
  }
  public function mdlActualizarRegion($nomRegion, $idRegion, $tabla){
    $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET nom_region = :nomRegion WHERE id_region = :idRegion");
    $sql->bindParam(":nomRegion", $nomRegion, PDO::PARAM_STR);
    $sql->bindParam(":idRegion", $idRegion, PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEliminarRegion($idRegion, $tabla){
    $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_region = :idRegion");
    $sql->bindParam(":idRegion", $idRegion, PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
}
?>
