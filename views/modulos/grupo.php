<?php
$grupo = (new ctrGrupo)->ctrVerGrupo();
?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin">
      <!-- Header -->
      <div class="content-header row">
        <div class="titulo col-6">
            <h1><i class="menu-icon fas fa-th-large"></i> Grupo</h1>
        </div>
        <div class="paginacion col-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Grupos</li>
            </ol>
          </nav>
        </div>
      </div>
      <section class="row">
        <div class="btn-section col-left col-12">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-nuevo-grupo">
            Nuevo Grupo
          </button>
        </div>
        <div class=" container">
          <table class="table table-striped tabla-section">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Oxyview</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $contador = 0;
              foreach ($grupo as $key => $value) {
                $contador++;
                echo '<tr>';
                  echo '<td>'.$contador.'</td>';
                  echo '<td>'.$value["nom_grupo"].'</td>';
                  echo '<td>'.$value["nserie_oxyview"].'</td>';
                  echo '<td><center><button type="button" id_grupo="'.$value["id_grupo"].'" class="btn btn-sm btn-primary btnEditarGrupo" data-toggle="modal" data-target="#modal-editar-grupo" title="Editar"><i class="fas fa-edit"></i></button></center></td>';
                  echo '<td><center><button type="button" id_grupo="'.$value["id_grupo"].'" class="btn btn-sm btn-danger btnEliminarGrupo" title="Eliminar"><i class="fas fa-trash"></i></button></center></td>';
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
