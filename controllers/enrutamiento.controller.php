<?php
Class ControllerEnrutamiento {
  public function enrutamiento(){
    $ruta = $_GET["ruta"];
    if ($ruta == "home" ||
        $ruta == "cliente" ||
        $ruta == "cliente-old" ||
        $ruta == "usrCliente" ||
        $ruta == "centro" ||
        $ruta == "sensor" ||
        $ruta == "informe" ||
        $ruta == "salir" ||
        // Mantenedores
        $ruta == "oxyview" ||
        $ruta == "modulo" ||
        $ruta == "grupo" ||
        $ruta == "tipoSensor" ||
        $ruta == "tipoAlarma" ||
        $ruta == "paramCriticos" ||
        $ruta == "region" ||
        $ruta == "ciudad" ||
        $ruta == "usuario" ) {
      include "views/modulos/".$ruta.".php";

    } else {
      include "views/modulos/error404.php";
    }
  }
}
?>
