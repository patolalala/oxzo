<?php
class Conexion {
	public function Conectar () {
		$link = new PDO("mysql:host=localhost;dbname=oxyview",
			"root",
			"",
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
			// $link = new PDO("mysql:host=localhost;dbname=duotek_oxzo",
			// 	"duotek_patoxzo",
			// 	"rga140979",
			// 	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
			// );

		return $link;
	}
}
?>
