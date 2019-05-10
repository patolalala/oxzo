<?php
$usrCliente = (new ctrUsrCliente)->ctrVerUsrCliente();
?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin">
      <!-- Header -->
      <div class="content-header row">
        <div class="titulo col-6">
          <h1><i class="menu-icon mdi mdi-account"></i> Usuario Empresa</h1>
        </div>
        <div class="paginacion col-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Usuario Empresa</li>
            </ol>
          </nav>
        </div>
      </div>
      <section class="row">
        <div class="btn-section col-left col-12">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-nuevo-usrCliente">
            Nuevo Usuario Empresa
          </button>
        </div>
        <div class=" container">
          <table class="table table-striped tabla-section table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Usuario</th>
                <th scope="col">Correo</th>
                <th scope="col">Empresa</th>
                <th scope="col">Eitar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $contador = 0;
              foreach ($usrCliente as $key => $value) {
                $contador++;
                echo '<tr>';
                  echo '<td>'.$contador.'</td>';
                  echo '<td>'.$value["nom_usrcliente"].'</td>';
                  echo '<td>'.$value["usr_usrcliente"].'</td>';
                  echo '<td>'.$value["razon_cliente"].'</td>';
                  echo '<td><center><button type="button" id_usrcliente="'.$value["id_usrcliente"].'" class="btn btn-sm btn-primary btnEditarUsrCliente" data-toggle="modal" data-target="#modal-editar-usrCliente" title="Editar"><i class="fas fa-edit"></i></button></center></td>';
                  echo '<td><center><button type="button" id_usrcliente="'.$value["id_usrcliente"].'" class="btn btn-sm btn-danger btnEliminarUsrCliente" title="Eliminar"><i class="fas fa-trash"></i></button></center></td>';
                echo '</tr>';
              }
              ?>
            </tbody>
          </table>
        </div>
      </section>



    </div>
  </div>
</div>
