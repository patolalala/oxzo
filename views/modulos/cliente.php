<?php

$url = $_SERVER['REQUEST_URI'];
//$idCliente = substr($url, '30'); //localhost
$idCliente = substr($url, '19'); //servidor
$nomCliente = (new ctrCliente)->ctrTraerCliente($idCliente);
$centro = (new ctrCliente)->ctrVerCentroEmpresa($idCliente);
$equipo = (new ctrCliente)->ctrVerEquipoEmpresa($idCliente);
$equipoCentro = (new ctrCliente)->ctrVerEquipoEmpresa($idCliente);
$usuario = (new ctrCliente)->ctrVerUsuarioEmpresa($idCliente);
$usuarioCentro = (new ctrCliente)->ctrVerUsuarioEmpresa($idCliente);
?>





<div class="content-wrapper">
  <div class="row">
      <h4 style="margin: 20px;"> <?php echo strtoupper($nomCliente["nombre_cliente"]); ?> </h4>
  </div>
  <!-- Menu Principal -->
  <div class="row" style="margin-left:10px;">
    <div class="menu-acordeon" id="menuGeneral">
      <button class="btn col-12 menuGeneral" estado="0" id="btn-irCentro">Centros</button>
      <button class="btn col-12 menuGeneral" estado="0" id="btn-irEquipo">Equipos</button>
      <button class="btn col-12 menuGeneral" estado="0" id="btn-irUsuario">Usuarios</button>
      <button class="btn col-12 menuGeneral" estado="0" id="btn-irPropiedades">Propiedades</button>
    </div>

    <!-- Centro -->
    <div class="menu-acordeon centro" id="irCentro" style="display: none;">
      <?php
      foreach ($centro as $key => $value) {
        echo '<button class="btn col-12 centroCliente" estado="0" idCentro="'.$value["id_centro"].'">'.ucwords($value["nom_centro"]).'</button>';
      }
      ?>
      <button class="btn col-12" estado="0" id="btn-crearCentro">Agregar Centro</button>
    </div>
    <!-- Equipo -->
    <div class=" menu-acordeon equipo" id="irEquipo" style="display: none;">
      <?php
      foreach ($equipo as $key => $value) {
        echo '<button class="btn col-12 equipoCliente" estado="0" idOxyview="'.$value["id_oxyview"].'">oxyview-'.ucwords($value["nserie_oxyview"]).'</button>';

      }
      ?>
      <button class="btn col-12" estado="0" id="btn-crearEquipo">Agregar Equipo</button>
    </div>

    <!-- Usuario -->
    <div class=" menu-acordeon usuario" id="irUsuario" style="display: none;">
      <?php
      foreach ($usuario as $key => $value) {
        echo '<button class="btn col-12 usuarioCliente" estado="0" idUsuario="'.$value["id_usrcliente"].'">'.ucwords($value["nom_usrcliente"]).'</button>';
      }
      ?>
      <button class="btn col-12" estado="0" id="btn-crearUsuario" idCliente="<?php echo $idCliente; ?>">Agregar Usuario</button>
    </div>
    <div class="" id="infoUsuario" style="display:none;">
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">ID Usuario</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="idUsr">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Correo</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="correoUsr">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Nombre USR</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="nomUsr">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Contraseña</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="passUsr">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Tipo Usuario</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="tipoUsr">
          </div>
      </div>
    </div>


    <!-- Info Centro -->
    <div class=" menu-acordeon" id="infoCentro" style="display: none;">
      <button class="btn col-12 infoCentro" estado="0" id="btn-irEquipoCentro" idCentro>Equipos</button>
      <button class="btn col-12 infoCentro" estado="0" id="btn-irUsuarioCentro" idCentro>Usuarios</button>
      <button class="btn col-12 infoCentro" estado="0" id="btn-irPropiedadesCentro" idCentro>Propiedades</button>
    </div>








    <!-- Info Equipo Centro -->
    <div class=" menu-acordeon" id="irEquipoCentro" style="display: none;">
      <?php
      foreach ($equipo as $key => $value) {
        echo '<input type="button" name="nomOxyview" idOxyview="'.$value["id_oxyview"].'" value="oxyview-'.ucwords($value["nserie_oxyview"]).'" class="btn col-12">';
      }
      ?>
      <input type="button" name="irCrearCentroCliente" value="Agregar Equipo" class="btn col-12">
    </div>


    <!-- Info Usuario Centro -->
    <!-- Info Propiedades Centro -->

    <!-- Crear Centro -->
    <div class="" id="crearCentro" style="display:none;">
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Nombre Centro</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="newCentro">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Cliente</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="nombreBodega">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Lat.</label>
          <div class="col-sm-3">
              <input type="text" id="" class="form-control" placeholder="" required name="nombreBodega">
          </div>
          <label class="col-sm-2 col-form-label">Long.</label>
          <div class="col-sm-3">
              <input type="text" id="" class="form-control" placeholder="" required name="nombreBodega">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-12 col-form-label">Esquema</label>
          <div class="">
              <input type="file" id="" class="form-control" placeholder="" required name="nombreBodega">
          </div>
      </div>
    </div>

    <!-- Crear Usuario -->
    <div class="" id="crearUsuario" style="display:none;">
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">ID Usuario</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="newCentro">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Correo</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="nombreBodega">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Nombre USR</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="nombreBodega">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Contraseña</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="nombreBodega">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Tipo Usuario</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="nombreBodega">
          </div>
      </div>
    </div>

    <!-- Ver Usuario -->
    <div class="" id="infoUsuarioCliente" style="display:none;">
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">ID Usuario</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="idUsr">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Correo</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="correoUsr">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Nombre USR</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="nomUsr">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Contraseña</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="passUsr">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Tipo Usuario</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="tipoUsr">
          </div>
      </div>
    </div>
    <!-- Propiedades Centro Cliente -->
    <div class="" id="propiedadesCentroCliente" style="display:none;">
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Nombre Centro</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="newCentro">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Cliente</label>
          <div class="col-sm-9">
              <input type="text" id="" class="form-control" placeholder="" required name="nombreBodega">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label">Lat.</label>
          <div class="col-sm-3">
              <input type="text" id="" class="form-control" placeholder="" required name="nombreBodega">
          </div>
          <label class="col-sm-2 col-form-label">Long.</label>
          <div class="col-sm-3">
              <input type="text" id="" class="form-control" placeholder="" required name="nombreBodega">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-12 col-form-label">Esquema</label>
          <div class="">
              <input type="file" id="" class="form-control" placeholder="" required name="nombreBodega">
          </div>
      </div>
    </div>
    <div class=" menu-acordeon equipo" id="irEquipoCliente" style="display: none;">
      <?php
      foreach ($equipo as $key => $value) {
        echo '<button class="btn col-12 equipoCliente" estado="0" idOxyview="'.$value["id_oxyview"].'">oxyview-'.ucwords($value["nserie_oxyview"]).'</button>';

      }
      ?>
      <button class="btn col-12" estado="0" id="btn-crearEquipo">Agregar Equipo</button>
    </div>
    
    
  </div>
</div>




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
<script src="views/js/cliente.js"></script>
<script src="views/js/home.js"></script>
<script src="views/js/login.js"></script>
