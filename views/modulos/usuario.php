<?php
$usuario = (new ctrUsuario)->ctrVerUsuario();
?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin">
      <!-- Header -->
      <div class="content-header row">
        <div class="titulo col-6">
          <h1><i class="menu-icon mdi mdi-account"></i> Usuarios</h1>
        </div>
        <div class="paginacion col-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Usuario</li>
            </ol>
          </nav>
        </div>
      </div>
      <section class="row">
        <div class="btn-section col-left col-12">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-nuevo-usuario">
            Nuevo Usuario
          </button>
        </div>
        <div class=" container">
          <table class="table table-striped tabla-section">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Correo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $contador = 0;
              foreach ($usuario as $key => $value) {
                $contador++;
                echo '<tr>';
                  echo '<td>'.$contador.'</td>';
                  echo '<td>'.$value["usuario"].'</td>';
                  echo '<td>'.$value["nombre"].'</td>';
                  echo '<td><center><button type="button" id_usuario="'.$value["id_usuario"].'" class="btn btn-sm btn-primary btnEditarUsuario" data-toggle="modal" data-target="#modal-editar-usuario" title="Editar"><i class="fas fa-edit"></i></button></center></td>';
                  echo '<td><center><button type="button" id_usuario="'.$value["id_usuario"].'" class="btn btn-sm btn-danger btnEliminarUsuario" title="Eliminar"><i class="fas fa-trash"></i></button></center></td>';
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
