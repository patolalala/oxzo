<?php
require_once "conexion.php";
Class mdlOxyview {
  public function mdlVerOxyview($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT o.id_oxyview, o.nserie_oxyview, o.id_modulo, m.nom_modulo FROM $tabla o, modulo m WHERE o.id_modulo = m.id_modulo ORDER BY o.id_oxyview ASC");
    $sql -> execute();
    return $sql->fetchAll();
  }
  public function mdlCrearOxyview($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla VALUES(NULL, :nSerieOxyview, :idModulo)");
    $sql->bindParam(":nSerieOxyview", $datos["nSerieOxyview"], PDO::PARAM_STR);
    $sql->bindParam(":idModulo", $datos["idModulo"], PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEditarOxyview($idOxyview, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT o.id_oxyview, o.nserie_oxyview, o.id_modulo, m.nom_modulo FROM $tabla o, modulo m WHERE o.id_oxyview = :idOxyview AND o.id_modulo = m.id_modulo");
    $sql->bindParam(":idOxyview", $idOxyview, PDO::PARAM_INT);
    $sql -> execute();
    return $sql -> fetch();
  }
  public function mdlActualizarOxyview($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET nserie_oxyview = :nSerieOxyview, id_modulo = :idModulo WHERE id_oxyview = :idOxyview");
    $sql->bindParam(":nSerieOxyview", $datos["nSerieOxyview"], PDO::PARAM_STR);
    $sql->bindParam(":idOxyview", $datos["idOxyview"], PDO::PARAM_INT);
    $sql->bindParam(":idModulo", $datos["idModulo"], PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEliminarOxyview($idOxyview, $tabla){
    $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_oxyview = :idOxyview");
    $sql->bindParam(":idOxyview", $idOxyview, PDO::PARAM_INT);
    if ($sql->execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
}
?>
