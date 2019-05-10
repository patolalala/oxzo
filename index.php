<?php
session_start();
// Controllers
require_once "controllers/centro.controller.php";
// require_once "controllers/ciudad.controller.php";
 require_once "controllers/cliente.controller.php";
require_once "controllers/enrutamiento.controller.php";
// require_once "controllers/grupo.controller.php";
// require_once "controllers/informe.controller.php";
// require_once "controllers/modulo.controller.php";
// require_once "controllers/oxyview.controller.php";
// require_once "controllers/paramCritico.controller.php";
// require_once "controllers/region.controller.php";
// require_once "controllers/sensor.controller.php";
require_once "controllers/sesion.controller.php";
require_once "controllers/template.controller.php";
// require_once "controllers/tipoAlarma.controller.php";
// require_once "controllers/tipoSensor.controller.php";
// require_once "controllers/usrCliente.controller.php";
// require_once "controllers/usuario.controller.php";

// Models
require_once "models/centro.model.php";
// require_once "models/ciudad.model.php";
require_once "models/cliente.model.php";
// require_once "models/grupo.model.php";
// require_once "models/informe.model.php";
// require_once "models/modulo.model.php";
// require_once "models/oxyview.model.php";
// require_once "models/paramCritico.model.php";
// require_once "models/region.model.php";
// require_once "models/sensor.model.php";
require_once "models/sesion.model.php";
// require_once "models/tipoAlarma.model.php";
// require_once "models/tipoSensor.model.php";
// require_once "models/usrCliente.model.php";
// require_once "models/usuario.model.php";

error_reporting(0);
$template = new ControllerTemplate();
$template -> template();

?>
