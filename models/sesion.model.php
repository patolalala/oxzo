<?php
require_once "conexion.php";

Class mdlSesion {
	public function mdlIniciarSesion($tabla, $usuario, $pass) {
		$sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE usuario = '$usuario' AND clave = '$pass'");
		$sql -> execute();
		return $sql -> fetchAll();
	}
}
?>
