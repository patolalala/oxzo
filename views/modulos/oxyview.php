<?php
$oxyview = (new ctrOxyview)->ctrVerOxyview();
?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin">
      <!-- Header -->
      <div class="content-header row">
        <div class="titulo col-6">
            <h1><i class="menu-icon fas fa-window-maximize"></i> Oxyviews</h1>
        </div>
        <div class="paginacion col-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Oxyview</li>
            </ol>
          </nav>
        </div>
      </div>
      <section class="row">
        <div class="btn-section col-left col-12">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-nuevo-oxyview">
            Nuevo OxyView
          </button>
        </div>
        <div class=" container">
          <table class="table table-striped tabla-section">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">N° Serie</th>
                <th scope="col">Modulo</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $contador = 0;
              foreach ($oxyview as $key => $value) {
                $contador++;
                echo '<tr>';
                  echo '<td>'.$contador.'</td>';
                  echo '<td>'.$value["nserie_oxyview"].'</td>';
                  echo '<td>'.$value["nom_modulo"].'</td>';
                  echo '<td><center><button type="button" id_oxyview="'.$value["id_oxyview"].'" class="btn btn-sm btn-primary btnEditarOxyview" data-toggle="modal" data-target="#modal-editar-oxyview" title="Editar"><i class="fas fa-edit"></i></button></center></td>';
                  echo '<td><center><button type="button" id_oxyview="'.$value["id_oxyview"].'" class="btn btn-sm btn-danger btnEliminarOxyview" title="Eliminar"><i class="fas fa-trash"></i></button></center></td>';
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
