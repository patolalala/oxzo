<?php 
require_once '../controllers/centro.controller.php';
require_once '../models/centro.model.php';
Class ajaxCentro {
	public $_idCentro;
	public function ajaxTraerEquipoCentro(){
		$idCentro = $this->_idCentro;
		$respuesta = (new ctrCentro)->ctrTraerEquipoCentro($idCentro);
		foreach ($respuesta as $key => $value) {
			echo '<button class="btn col-12 equipoCliente" estado="0" idOxyview="'.$value["id_oxyview"].'">oxyview-'.ucwords($value["nserie_oxyview"]).'</button>';
		}
		echo '<button class="btn col-12" estado="0" id="btn-crearEquipo">Agregar Equipo</button>';
	}
	public function ajaxTraerUsuarioCentro(){
		$idCentro = $this->_idCentro;
		$respuesta = (new ctrCentro)->ctrTraerUsuarioCentro($idCentro);
		echo $respuesta;
	}
}





$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "traerEquipoCentro") {
	$traerEquipoCentro = (new ajaxCentro);
	$traerEquipoCentro -> _idCentro = $_POST["idCentro"];
	$traerEquipoCentro -> ajaxTraerEquipoCentro();
}
if ($tipoOperacion == "traerUsuarioCentro") {
	$traerUsuarioCentro = (new ajaxCentro);
	$traerUsuarioCentro -> _idCentro = $_POST["idCentro"];
	$traerUsuarioCentro -> ajaxTraerUsuarioCentro();
}
?>