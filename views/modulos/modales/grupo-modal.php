<?php
$oxyview = (new ctrOxyview)->ctrVerOxyview();
$modulo = (new ctrModulo)->ctrVerModulo();
$centro = (new ctrCentro)->ctrVerCentro();
$empresa = (new ctrCliente)->ctrVerCliente();
?>
<!-- Modal Nuevo Grupo-->
<div class="modal fade" id="modal-nuevo-grupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Grupo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="nuevoGrupo">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Grupo</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomGrupo" name="nomGrupo" placeholder="Grupo 1" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">OxyView</label>
            <div class="col-sm-6">
              <select class="form-control" name="oxyviewGrupo" id="select-oxyviewGrupo" required>
                <?php
                echo '<option value="" disabled selected>Seleccione un OxyView</option>';
                foreach ($oxyview as $key => $value) {
                  echo '<option value="'.$value["id_oxyview"].'">'.$value["nserie_oxyview"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center" name="button" style="padding-left: 14px;" data-toggle="modal" data-target="#modal-nuevo-oxyviewGrupo" id="modalCrearOxyviewGrupo"><i class="fas fa-plus" ></i></button>
          </div>
          <input type="hidden" name="tipoOperacion" value="crearGrupo">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Editar Grupo-->
<div class="modal fade" id="modal-editar-grupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Grupo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="actualizarGrupo">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Grupo</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EnomGrupo" name="EnomGrupo" placeholder="Grupo 1" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">OxyView</label>
            <div class="col-sm-8">
              <select class="form-control" name="EoxyviewGrupo" id="EoxyviewGrupo" required>
                <?php
                echo '<option value="" disabled selected>Seleccione un OxyView</option>';
                foreach ($oxyview as $key => $value) {
                  echo '<option value="'.$value["id_oxyview"].'">'.$value["nserie_oxyview"].'</option>';
                }
                ?>
              </select>
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarGrupo">
          <input type="hidden" name="idGrupo" value="">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Crear OxyviewGrupo -->
<div class="modal fade" id="modal-nuevo-oxyviewGrupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo OxyView</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevoOxyviewGrupo">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">N° Serie</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nSerieOxyview" name="nSerieOxyview" placeholder="11-1" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Modulo</label>
            <div class="col-sm-6">
              <select class="form-control" name="moduloOxyview" id="select-moduloGrupo" required>
                <?php
                echo '<option value="" disabled selected>Seleccione un Modulo</option>';
                foreach ($modulo as $key => $value) {
                  echo '<option value="'.$value["id_modulo"].'">'.$value["nom_modulo"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center" name="button" style="padding-left: 14px;" data-toggle="modal" data-target="#modal-nuevo-moduloGrupo" id="modalCrearModuloGrupo"><i class="fas fa-plus" ></i></button>
          </div>
          <input type="hidden" name="tipoOperacion" value="crearOxyview">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Crear ModuloOxyview -->
<div class="modal fade" id="modal-nuevo-moduloGrupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Modulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevoModuloGrupo">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Modulo</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomModulo" name="nomModulo" placeholder="Central" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Centro</label>
            <div class="col-sm-6">
              <select class="form-control" name="centroModulo" id="select-centroGrupo" required>
                <?php
                echo '<option value="" disabled selected>Seleccione un Centro</option>';
                foreach ($centro as $key => $value) {
                  echo '<option value="'.$value["id_centro"].'">'.$value["nom_centro"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center" name="button" style="padding-left: 14px;" data-toggle="modal" data-target="#modal-nuevo-centroGrupo" id="modalCrearCentroGrupo"><i class="fas fa-plus" ></i></button>
          </div>
          <input type="hidden" name="tipoOperacion" value="crearModulo">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Crear CentroModulo-->
<div class="modal fade" id="modal-nuevo-centroGrupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Centro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevoCentroGrupo">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Centro</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomCentro" name="nomCentro" placeholder="Central" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Dirección</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="dirCentro" name="dirCentro" placeholder="Los Pelues, Puerto Montt" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Maps Centro</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="mapCentro" name="mapCentro" placeholder="https://www.google.cl/maps?hl=es-419&tab=wl" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Contacto Centro</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="contactoCentro" name="contactoCentro" placeholder="+569 87654321" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="emailCentro" name="emailCentro" placeholder="centro@centro.cl" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Empresa Centro</label>
            <div class="col-sm-8">
              <select class="form-control" name="clienteCentro" required>
                <?php
                echo '<option value="" selected disabled>Seleccione una Empresa</option>';
                foreach ($empresa as $key => $value) {
                  echo '<option value="'.$value["id_cliente"].'">'.$value["razon_cliente"].'</option>';
                }
                ?>
              </select>
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="crearCentro">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
