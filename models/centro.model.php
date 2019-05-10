<?php
require_once "conexion.php";
Class mdlCentro {
  public function mdlTraerEquipoCentro($idCentro, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT id_oxyview, nserie_oxyview FROM $tabla WHERE id_centro = :idCentro");
    $sql->bindParam(":idCentro", $idCentro, PDO::PARAM_INT);
    $sql -> execute();
    return $sql->fetchAll();
  }
  public function mdlTraerUsuarioCentro($idCentro, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT id_usrcliente, nom_usrcliente FROM $tabla WHERE id_centro = :idCentro");
    $sql->bindParam(":idCentro", $idCentro, PDO::PARAM_INT);
    $sql -> execute();
    return $sql->fetch();
  }




  public function mdlVerCentro($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT c.id_centro, c.nom_centro, c.dir_centro, c.lat_centro, c.lon_centro, c.contacto_centro, cli.nombre_cliente, c.eml_centro, c.id_cliente  FROM $tabla c, cliente cli WHERE c.id_cliente = cli.id_cliente");
    $sql -> execute();
    return $sql->fetchAll();
  }
  public function mdlCrearCentro($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() VALUES(NULL, :idCliente, :nomCentro, :dirCentro, :mapCentro, :contactoCentro, :emailCentro)");
    $sql->bindParam(":idCliente", $datos["idCliente"], PDO::PARAM_INT);
    $sql->bindParam(":nomCentro", $datos["nomCentro"], PDO::PARAM_STR);
    $sql->bindParam(":dirCentro", $datos["dirCentro"], PDO::PARAM_STR);
    $sql->bindParam(":mapCentro", $datos["mapCentro"], PDO::PARAM_STR);
    $sql->bindParam(":contactoCentro", $datos["contactoCentro"], PDO::PARAM_STR);
    $sql->bindParam(":emailCentro", $datos["emailCentro"], PDO::PARAM_STR);
    if ($sql->execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEditarCentro($idCentro, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT c.id_centro, c.nom_centro, c.dir_centro, c.maps_centro, c.contacto_centro, c.eml_centro, c.id_cliente, cli.razon_cliente FROM $tabla c, cliente cli WHERE c.id_cliente = cli.id_cliente AND c.id_centro = :idCentro");
    $sql->bindParam(":idCentro", $idCentro, PDO::PARAM_INT);
    $sql -> execute();
    return $sql->fetch();
  }
  public function mdlActualizarCentro($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET nom_centro = :nomCentro, dir_centro = :dirCentro, maps_centro = :mapCentro, contacto_centro = :contactoCentro, eml_centro = :emailCentro, id_cliente = :idCliente WHERE id_centro = :idCentro");
    $sql->bindParam(":idCliente", $datos["idCliente"], PDO::PARAM_INT);
    $sql->bindParam(":idCentro", $datos["idCentro"], PDO::PARAM_INT);
    $sql->bindParam(":nomCentro", $datos["nomCentro"], PDO::PARAM_STR);
    $sql->bindParam(":dirCentro", $datos["dirCentro"], PDO::PARAM_STR);
    $sql->bindParam(":mapCentro", $datos["mapCentro"], PDO::PARAM_STR);
    $sql->bindParam(":contactoCentro", $datos["contactoCentro"], PDO::PARAM_STR);
    $sql->bindParam(":emailCentro", $datos["emailCentro"], PDO::PARAM_STR);
    if ($sql->execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEliminarCentro($idCentro, $tabla){
    $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_centro = :idCentro");
    $sql->bindParam("idCentro", $idCentro, PDO::PARAM_INT);
    if ($sql->execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
}
?>
