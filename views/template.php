<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OXZO</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- link tags -->
    <link rel="shortcut icon" href="views/dist/img/LogoChico.png" type="image/png">
    <link rel="stylesheet" href="views/dist/css/dataTables.responsive.css">
    <link rel="stylesheet" href="views/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="views/dist/css/materialdesignicons.css">
    <link rel="stylesheet" href="views/dist/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="views/dist/css/vendor.bundle.addons.css">



    <link rel="stylesheet" href="views/dist/css/style.css">
    <link rel="stylesheet" href="views/dist/css/estilos.css">

</head>

<body class="login-page">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <p style="position: fixed; bottom: 0; right: 10px;">Version 0.1</p>
        <?php
        if (isset($_SESSION["autenticarrr"]) && $_SESSION["autenticarrr"] == "ok" ) {
          if ( $_SESSION["rol"] == 0 ){
            include "modulos/header.php";
            include "modulos/main-sidebar.php";
          } else if ( $_SESSION["rol"] == 1 ){
            include "modulos/header.php";
            include "modulos/main-sidebar-usuario.php";
          }
          ?>
          <div class="main-panel" style="background: #fff;">
          <?php
          if (isset($_GET["ruta"])) {
            $enrutar = new ControllerEnrutamiento();
            $enrutar -> enrutamiento();
            include "modulos/modales/".$_GET["ruta"]."-modal.php";
          } else {
            include "views/modulos/home.php";
          }
          //include "views/modulos/footer.php";
        }else {
          include "views/modulos/login.php";
        }


        ?>
        <!-- partial -->

      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

  </div>
  <!-- container-scroller -->






    <!-- plugins:js -->
    <script src="views/dist/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="views/dist/js/dataTables.bootstrap.js"></script>
    <script src="views/dist/js/jquery.dataTables.min.js"></script>
    <script src="views/dist/js/bootstrap.js"></script>
    <script src="views/dist/js/off-canvas.js"></script>
    <script src="views/dist/js/dashboard.js"></script>
    <script src="views/dist/js/jquery.Rut.js"></script>
    <script src="views/dist/js/recursos.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.11/dist/sweetalert2.all.min.js"></script>


    <!-- <script src="views/js/centro.js"></script>
    <script src="views/js/ciudad.js"></script> -->
    <script src="views/js/cliente.js"></script>
    <!-- <script src="views/js/grupo.js"></script>-->
    <script src="views/js/home.js"></script>
    <!-- <script src="views/js/informe.js"></script> -->
    <script src="views/js/login.js"></script>
    <!-- <script src="views/js/modulo.js"></script>
    <script src="views/js/oxyview.js"></script>
    <script src="views/js/paramCritico.js"></script>
    <script src="views/js/region.js"></script>
    <script src="views/js/sensor.js"></script>
    <script src="views/js/tipoAlarma.js"></script>
    <script src="views/js/tipoSensor.js"></script>
    <script src="views/js/usrCliente.js"></script>
    <script src="views/js/usuario.js"></script> -->



</body>

</html>
