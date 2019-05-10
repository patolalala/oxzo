<?php
$respuesta = (new ctrCliente)->ctrVerCliente();
?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin">
      <!-- Header -->
      <div class="content-header row">
        <div class="titulo col-6">
            <h1><i class="menu-icon fas fa-building"></i> Empresas</h1>
        </div>
        <div class="paginacion col-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Empresa</li>
            </ol>
          </nav>
        </div>
      </div>
      <section class="row">
        <div class="btn-section col-left col-12">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-nuevo-cliente">
            Nueva Empresa
          </button>
        </div>
        <div class=" container">
          <table class="table table-striped tabla-section">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Empresa</th>
                <th scope="col">RUT</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $contador = 0;
              foreach ($respuesta as $key => $value) {
                $contador++;
                echo '<tr>';
                  echo '<td>'.$contador.'</td>';
                  echo '<td>'.$value["razon_cliente"].'</td>';
                  echo '<td>'.$value["rut_cliente"].'</td>';
                  echo '<td>'.$value["dir_cliente"].'</td>';
                  echo '<td>'.$value["nom_ciudad"].'</td>';
                  echo '<td><center><button type="button" id_cliente="'.$value["id_cliente"].'" class="btn btn-sm btn-primary btnEditarCliente" data-toggle="modal" data-target="#modal-editar-cliente" title="Editar"><i class="fas fa-edit"></i></button></center></td>';
                  echo '<td><center><button type="button" id_cliente="'.$value["id_cliente"].'" class="btn btn-sm btn-danger btnEliminarCliente" title="Eliminar"><i class="fas fa-trash"></i></button></center></td>';
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
