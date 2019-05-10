<?php
$respuesta = (new ctrCentro)->ctrVerCentro();
?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin">
      <!-- Header -->
      <div class="content-header row">
        <div class="titulo col-6">
          <h1><i class="menu-icon fas fa-hotel"></i> Centros</h1>
        </div>
        <div class="paginacion col-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Centro</li>
            </ol>
          </nav>
        </div>
      </div>
      <section class="row">
        <div class="btn-section col-left col-12">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-nuevo-centro">
            Nuevo Centro
          </button>
        </div>
        <div class="container">
          <table class="table table-striped tabla-section ">
            <thead>
              <tr>
                <th  scope="col">#</th>
                <th  scope="col">Centro</th>
                <th  scope="col">Empresa</th>
                <th  scope="col">Dirección</th>
                <th  scope="col">Contacto</th>
                <th  scope="col">Email</th>
                <th  scope="col">Editar</th>
                <th  scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $contador = 0;
              foreach ($respuesta as $key => $value) {
                $contador++;
                echo '<tr>';
                  echo '<td>'.$contador.'</td>';
                  echo '<td>'.$value["nom_centro"].'</td>';
                  echo '<td>'.$value["razon_cliente"].'</td>';
                  echo '<td>'.$value["dir_centro"].'</td>';
                  echo '<td>'.$value["contacto_centro"].'</td>';
                  echo '<td>'.$value["eml_centro"].'</td>';
                  echo '<td><center><button type="button" id_centro="'.$value["id_centro"].'" class="btn btn-sm btn-primary btnEditarCentro" data-toggle="modal" data-target="#modal-editar-centro" title="Editar"><i class="fas fa-edit"></i></button></center></td>';
                  echo '<td><center><button type="button" id_centro="'.$value["id_centro"].'" class="btn btn-sm btn-danger btnEliminarCentro" title="Eliminar"><i class="fas fa-trash"></i></button></center></td>';
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
