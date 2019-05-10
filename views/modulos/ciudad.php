<?php
$respuesta = (new ctrCiudad)->ctrVerCiudad();
?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin">
      <!-- Header -->
      <div class="content-header row">
        <div class="titulo col-6">
            <h1>Ciudad</h1>
        </div>
        <div class="paginacion col-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ciudad</li>
            </ol>
          </nav>
        </div>
      </div>
      <section class="row">
        <div class="btn-section col-left col-12">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-nueva-ciudad">
            Nueva Ciudad
          </button>
        </div>
        <div class=" container">
          <table class="table table-striped table-bordered tabla-section">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Región</th>
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
                  echo '<td>'.$value["nom_ciudad"].'</td>';
                  echo '<td>'.$value["nom_region"].'</td>';
                  echo '<td><center><button type="button" id_ciudad="'.$value["id_ciudad"].'" class="btn btn-sm btn-primary btnEditarCiudad" data-toggle="modal" data-target="#modal-editar-ciudad" title="Editar"><i class="fas fa-edit"></i></button></center></td>';
                  echo '<td><center><button type="button" id_ciudad="'.$value["id_ciudad"].'" class="btn btn-sm btn-danger btnEliminarCiudad" title="Eliminar"><i class="fas fa-trash"></i></button></center></td>';
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
