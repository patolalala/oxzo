<?php
$sensor = (new ctrSensor)->ctrVerSensor();
?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin">
      <!-- Header -->
      <div class="content-header row">
        <div class="titulo col-6">
            <h1><i class="menu-icon fas fa-satellite-dish"></i> Sensor</h1>
        </div>
        <div class="paginacion col-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Sensor</li>
            </ol>
          </nav>
        </div>
      </div>
      <section class="row">
        <div class="btn-section col-left col-12">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-nuevo-sensor">
            Nuevo Sensor
          </button>
        </div>
        <div class=" container">
          <table class="table table-striped tabla-section">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">N° Serie</th>
                <th scope="col">Tipo Sensor</th>
                <th scope="col">Profundidad</th>
                <th scope="col">Grupo</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $contador = 0;
              foreach ($sensor as $key => $value) {
                $contador++;
                echo '<tr>';
                  echo '<td>'.$contador.'</td>';
                  echo '<td>'.$value["nserie_sensor"].'</td>';
                  echo '<td>'.$value["tiposensor"].'</td>';
                  echo '<td>'.$value["prof_sensor"].'</td>';
                  echo '<td>'.$value["nom_grupo"].'</td>';
                  echo '<td><center><button type="button" id_sensor="'.$value["id_sensor"].'" class="btn btn-sm btn-primary btnEditarSensor" data-toggle="modal" data-target="#modal-editar-sensor" title="Editar"><i class="fas fa-edit"></i></button></center></td>';
                  echo '<td><center><button type="button" id_sensor="'.$value["id_sensor"].'" class="btn btn-sm btn-danger btnEliminarSensor" title="Eliminar"><i class="fas fa-trash"></i></button></center></td>';
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
