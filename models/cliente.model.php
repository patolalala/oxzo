<?php
require_once "conexion.php";

Class mdlCliente{
  // CRUD Cliente
  public function mdlVerCliente($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT cli.id_cliente, cli.nombre_cliente, cli.dir_cliente FROM $tabla cli, ciudad c WHERE cli.id_ciudad = c.id_ciudad");
    $sql -> execute();
    return $sql->fetchAll();
  }
  public function mdlTraerCiudad($tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT id_ciudad, nom_ciudad FROM $tabla");
    $sql -> execute();
    return $sql->fetchAll();
  }
  public function mdlCrearEmpresa($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() VALUES(NULL, :rutEmpresa, :nomEmpresa, :giroEmpresa, :dirEmpresa, :ciudadEmpresa)" );
    $sql->bindParam(":rutEmpresa", $datos["rutEmpresa"], PDO::PARAM_STR);
    $sql->bindParam(":nomEmpresa", $datos["nomEmpresa"], PDO::PARAM_STR);
    $sql->bindParam(":giroEmpresa", $datos["giroEmpresa"], PDO::PARAM_STR);
    $sql->bindParam(":dirEmpresa", $datos["dirEmpresa"], PDO::PARAM_STR);
    $sql->bindParam(":ciudadEmpresa", $datos["ciudadEmpresa"], PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEditarCliente($idCliente, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT cli.id_cliente, cli.razon_cliente, cli.rut_cliente, cli.dir_cliente, c.nom_ciudad, cli.giro_cliente, cli.id_ciudad FROM $tabla cli, ciudad c WHERE cli.id_ciudad = c.id_ciudad AND cli.id_cliente = :idCliente ");
    $sql->bindParam(":idCliente", $idCliente, PDO::PARAM_INT);
    $sql -> execute();
    return $sql -> fetch();
  }
  public function mdlActualizarCliente($datos, $tabla){
    $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET rut_cliente = :rutCliente, razon_cliente = :nomCliente, giro_cliente = :giroCliente, dir_cliente = :dirCliente, id_ciudad = :idCiudad WHERE id_cliente = :idCliente");
    $sql->bindParam(":idCliente", $datos["idCliente"], PDO::PARAM_INT);
    $sql->bindParam(":rutCliente", $datos["rutEmpresa"], PDO::PARAM_STR);
    $sql->bindParam(":nomCliente", $datos["nomEmpresa"], PDO::PARAM_STR);
    $sql->bindParam(":giroCliente", $datos["giroEmpresa"], PDO::PARAM_STR);
    $sql->bindParam(":dirCliente", $datos["dirEmpresa"], PDO::PARAM_STR);
    $sql->bindParam(":idCiudad", $datos["ciudadEmpresa"], PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }
  public function mdlEliminarCliente($idCliente, $tabla){
    $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_cliente = :idCliente");
    $sql->bindParam(":idCliente", $idCliente, PDO::PARAM_INT);
    if ($sql -> execute()) {
      return "ok";
    } else {
      return "error";
    }
  }





  public function mdlTraerCliente($idCliente, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT nombre_cliente FROM $tabla WHERE id_cliente = :idCliente");
    $sql->bindParam(":idCliente", $idCliente, PDO::PARAM_INT);
    $sql -> execute();
    return $sql ->fetch();
  }
  public function mdlVerCentroEmpresa($idCliente, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT c.id_centro, c.nom_centro FROM $tabla c, cliente cli WHERE cli.id_cliente = :idCliente AND cli.id_cliente = c.id_cliente");
    $sql->bindParam(":idCliente", $idCliente, PDO::PARAM_INT);
    $sql -> execute();
    return $sql ->fetchAll();
  }
  public function mdlVerequipoEmpresa($idCliente, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT o.id_oxyview, o.nserie_oxyview FROM $tabla o, cliente cli, centro c WHERE cli.id_cliente = :idCliente AND o.id_centro = c.id_centro AND c.id_cliente = cli.id_cliente");
    $sql->bindParam(":idCliente", $idCliente, PDO::PARAM_INT);
    $sql -> execute();
    return $sql ->fetchAll();
  }
  public function mdlVerUsuarioEmpresa($idCliente, $tabla){
    $sql = (new Conexion)->conectar()->prepare("SELECT usr.id_usrcliente, usr.nom_usrcliente FROM $tabla usr, cliente cli WHERE cli.id_cliente = :idCliente AND cli.id_cliente = usr.id_cliente");
    $sql->bindParam(":idCliente", $idCliente, PDO::PARAM_INT);
    $sql -> execute();
    return $sql ->fetchAll();
  }
}
?>
