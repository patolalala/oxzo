<?php
Class ctrSesion {
	public function ctrIniciarSesion($usuario, $pass){
		$tabla = "usuarios";
		$respuesta = (new mdlSesion)->mdlIniciarSesion($tabla, $usuario, $pass);
		return $respuesta;
	}
}
?>
