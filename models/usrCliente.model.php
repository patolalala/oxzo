<?php
require_once "conexion.php";
Class mdlUsrCliente {
  public function mdlVerUsrCliente($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT usr.id_usrcliente, usr.nom_usrcliente, usr.usr_usrcliente, c.razon_cliente, usr.rol_usrcliente, c.id_cliente FROM $tabla usr, cliente c WHERE usr.id_cliente = c.id_cliente");
    $sql -> execute();
    return $sql->fetchAll();
  }
  public function mdlCrearUsrCliente($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() VALUES(NULL, :nomUsrCliente, :correoUsrCliente, md5(:passUsrCliente), :idCliente, :rolUsrCliente)");
    $sql->bindParam(":nomUsrCliente", $datos["nomUsrCliente"], PDO::PARAM_STR);
    $sql->bindParam(":correoUsrCliente", $datos["correoUsrCliente"], PDO::PARAM_STR);
    $sql->bindParam(":passUsrCliente", $datos["passUsrCliente"], PDO::PARAM_STR);
    $sql->bindParam(":rolUsrCliente", $datos["rolUsrCliente"], PDO::PARAM_STR);
    $sql->bindParam(":idCliente", $datos["idCliente"], PDO::PARAM_STR);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEditarUsrCliente($idUsrCliente, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT usr.id_usrcliente, usr.nom_usrcliente, usr.pas_usrcliente, usr.usr_usrcliente, c.id_cliente, usr.rol_usrcliente FROM $tabla usr, cliente c WHERE usr.id_usrcliente = :idUsrCliente AND usr.id_cliente = c.id_cliente");
    $sql->bindParam(":idUsrCliente", $idUsrCliente, PDO::PARAM_INT);
    $sql -> execute();
    return $sql -> fetch();
  }
  public function mdlActualizarUsrCliente($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET nom_usrcliente = :nomUsrCliente, usr_usrcliente = :correoUsrCliente, pas_usrcliente = :passUsrCliente, id_cliente = :idCliente, rol_usrcliente = :rolUsrCliente WHERE id_usrcliente = :idUsrCliente");
    $sql->bindParam(":idUsrCliente", $datos["idUsrCliente"], PDO::PARAM_INT);
    $sql->bindParam(":nomUsrCliente", $datos["nomUsrCliente"], PDO::PARAM_STR);
    $sql->bindParam(":correoUsrCliente", $datos["correoUsrCliente"], PDO::PARAM_STR);
    $sql->bindParam(":passUsrCliente", $datos["passUsrCliente"], PDO::PARAM_STR);
    $sql->bindParam(":rolUsrCliente", $datos["rolUsrCliente"], PDO::PARAM_STR);
    $sql->bindParam(":idCliente", $datos["idCliente"], PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEliminarUsrCliente($idUsrCliente, $tabla){
    $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_usrcliente = :idUsrCliente");
    $sql->bindParam(":idUsrCliente", $idUsrCliente, PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "false";
    }
  }
}
?>
