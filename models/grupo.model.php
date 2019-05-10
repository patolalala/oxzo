<?php
require_once "conexion.php";
Class mdlGrupo {
  public function mdlVerGrupo($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT g.id_grupo, g.nom_grupo, g.id_oxyview, o.nserie_oxyview FROM $tabla g, oxyview o WHERE g.id_oxyview = o.id_oxyview ORDER BY g.id_grupo ASC");
    $sql -> execute();
    return $sql->fetchAll();
  }
  public function mdlCrearGrupo($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla VALUES(NULL, :nomGrupo, :idOxyview)");
    $sql->bindParam(":nomGrupo", $datos["nomGrupo"], PDO::PARAM_STR);
    $sql->bindParam(":idOxyview", $datos["idOxyview"], PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEditarGrupo($idGrupo, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT g.id_grupo, g.nom_grupo, g.id_oxyview, o.nserie_oxyview FROM $tabla g, oxyview o WHERE g.id_grupo = :idGrupo AND g.id_oxyview = o.id_oxyview");
    $sql->bindParam(":idGrupo", $idGrupo, PDO::PARAM_INT);
    $sql -> execute();
    return $sql -> fetch();
  }
  public function mdlActualizarGrupo($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET nom_grupo = :nomGrupo, id_oxyview = :idOxyview WHERE id_grupo = :idGrupo");
    $sql->bindParam(":nomGrupo", $datos["nomGrupo"], PDO::PARAM_STR);
    $sql->bindParam(":idGrupo", $datos["idGrupo"], PDO::PARAM_INT);
    $sql->bindParam(":idOxyview", $datos["idOxyview"], PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEliminarGrupo($idGrupo, $tabla){
    $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_grupo = :idGrupo");
    $sql->bindParam(":idGrupo", $idGrupo, PDO::PARAM_INT);
    if ($sql->execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
}
?>
