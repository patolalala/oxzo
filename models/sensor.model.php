<?php
require_once "conexion.php";
Class mdlSensor {
  public function mdlVerSensor($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT s.id_sensor, s.nserie_sensor, s.id_tiposensor, s.prof_sensor, s.id_grupo, t.tiposensor, g.nom_grupo FROM $tabla s, tiposensor t, grupo g WHERE s.id_tiposensor = t.id_tiposensor AND s.id_grupo = g.id_grupo");
    $sql -> execute();
    return $sql->fetchAll();
  }
  public function mdlCrearSensor($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla VALUES(NULL, :nSerieSensor, :idTipoSensor, :profSensor, :idGrupo)");
    $sql->bindParam(":nSerieSensor", $datos["nSerieSensor"], PDO::PARAM_STR);
    $sql->bindParam(":idTipoSensor", $datos["idTipoSensor"], PDO::PARAM_INT);
    $sql->bindParam(":idGrupo", $datos["idGrupo"], PDO::PARAM_INT);
    $sql->bindParam(":profSensor", $datos["profSensor"], PDO::PARAM_STR);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEditarSensor($idSensor, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT s.id_sensor, s.nserie_sensor, s.id_tiposensor, s.prof_sensor, s.id_grupo, t.tiposensor, g.nom_grupo FROM $tabla s, tiposensor t, grupo g WHERE s.id_tiposensor = t.id_tiposensor AND s.id_grupo = g.id_grupo AND s.id_sensor = :idSensor");
    $sql->bindParam(":idSensor", $idSensor, PDO::PARAM_INT);
    $sql -> execute();
    return $sql -> fetch();
  }
  public function mdlActualizarSensor($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET nserie_sensor = :nSerieSensor, id_tiposensor = :idTipoSensor, id_grupo = :idGrupo, prof_sensor = :profSensor WHERE id_sensor = :idSensor");
    $sql->bindParam(":nSerieSensor", $datos["nSerieSensor"], PDO::PARAM_STR);
    $sql->bindParam(":idTipoSensor", $datos["idTipoSensor"], PDO::PARAM_INT);
    $sql->bindParam(":idGrupo", $datos["idGrupo"], PDO::PARAM_INT);
    $sql->bindParam(":profSensor", $datos["profSensor"], PDO::PARAM_STR);
    $sql->bindParam(":idSensor", $datos["idSensor"], PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEliminarSensor($idSensor, $tabla){
    $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_sensor = :idSensor");
    $sql->bindParam(":idSensor", $idSensor, PDO::PARAM_INT);
    if ($sql->execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
}
?>
