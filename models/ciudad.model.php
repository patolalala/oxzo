<?php
require_once "conexion.php";
Class mdlCiudad {
  // CRUD Ciudad
  public function mdlVerCiudad($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT c.id_ciudad, c.nom_ciudad, r.nom_region FROM $tabla c, region r WHERE c.id_region = r.id_region");
    $sql -> execute();
    return $sql->fetchAll();
  }
  public function mdlNuevaCiudad($nomCiudad, $idRegion, $tabla){
    $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() VALUES(NULL, :nomCiudad, :idRegion) ");
    $sql->bindParam(":nomCiudad", $nomCiudad, PDO::PARAM_STR);
    $sql->bindParam(":idRegion", $idRegion, PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEditarCiudad($idCiudad, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT c.id_ciudad, c.nom_ciudad, r.id_region, r.nom_region FROM $tabla c, region r WHERE c.id_ciudad = :idCiudad AND c.id_region = r.id_region");
    $sql->bindParam(":idCiudad", $idCiudad, PDO::PARAM_INT);
    $sql -> execute();
    return $sql -> fetch();
  }
  public function mdlActualizarCiudad($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET nom_ciudad = :nomCiudad, id_region = :idRegion WHERE id_ciudad = :idCiudad");
    $sql->bindParam(":idCiudad", $datos["idCiudad"], PDO::PARAM_INT);
    $sql->bindParam(":nomCiudad", $datos["nomCiudad"], PDO::PARAM_STR);
    $sql->bindParam(":idRegion", $datos["idRegion"], PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEliminarCiudad($idCiudad, $tabla){
    $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_ciudad = :idCiudad");
    $sql->bindParam(":idCiudad", $idCiudad, PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  // Modales Regresivos
  public function mdlTraerRegion($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT id_region, nom_region FROM $tabla");
    $sql -> execute();
    return $sql -> fetchAll();
  }
  public function mdlTraerCiudad($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT id_ciudad, nom_ciudad FROM $tabla");
    $sql -> execute();
    return $sql -> fetchAll();
  }
}
?>
