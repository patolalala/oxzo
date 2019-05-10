<?php
$grupo = (new ctrGrupo)->ctrVerGrupo();
$oxyview = (new ctrOxyview)->ctrVerOxyview();
$modulo = (new ctrModulo)->ctrVerModulo();
$centro = (new ctrCentro)->ctrVerCentro();
$empresa = (new ctrCliente)->ctrVerCliente();
$tipoSensor = (new ctrTipoSensor)->ctrVerTipoSensor();
?>
<!-- Modal Crear Sensor -->
<div class="modal fade" id="modal-nuevo-sensor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Sensor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevoSensor">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">N° Serie</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nSerieSensor" name="nSerieSensor" placeholder="1111" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Tipo Sensor</label>
            <div class="col-sm-6">
              <select class="form-control" name="tipoSensorSensor" id="select-tipoSensorSensor" required>
                <?php
                echo '<option value="" disabled selected>Seleccione un Tipo Sensor</option>';
                foreach ($tipoSensor as $key => $value) {
                  echo '<option value="'.$value["id_tiposensor"].'">'.$value["tiposensor"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center" style="padding-left: 14px;" data-toggle="modal" data-target="#modal-nuevo-tipoSensorSensor" id="modalCrearTipoSensorSensor"><i class="fas fa-plus" ></i></button>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Grupo</label>
            <div class="col-sm-6">
              <select class="form-control" name="grupoSensor" id="select-grupoSensor" required>
                <?php
                echo '<option value="" disabled selected>Seleccione Grupo</option>';
                foreach ($grupo as $key => $value) {
                  echo '<option value="'.$value["id_grupo"].'">'.$value["nom_grupo"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center"  style="padding-left: 14px;" data-toggle="modal" data-target="#modal-nuevo-grupoSensor" id="modalCrearGrupoSensor"><i class="fas fa-plus" ></i></button>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Profundidad</label>
            <div class="col-sm-6" >
              <input type="number" class="form-control" id="profSensor" name="profSensor" placeholder="6" required>
            </div>
            <div class="col-sm-2" style="text-align: left; margin-left: 0; padding-left: 0;">
                <label class="col-form-label" > Mts.</label>
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="crearSensor">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Editar Sensor -->
<div class="modal fade" id="modal-editar-sensor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Sensor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="actualizarSensor">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">N° Serie</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EnSerieSensor" name="EnSerieSensor" placeholder="1111" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Tipo Sensor</label>
            <div class="col-sm-8">
              <select class="form-control" name="EtipoSensorSensor" id="EtipoSensorSensor" required>
                <?php
                echo '<option value="" disabled selected>Seleccione un Tipo Sensor</option>';
                foreach ($tipoSensor as $key => $value) {
                  echo '<option value="'.$value["id_tiposensor"].'">'.$value["tiposensor"].'</option>';
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Grupo</label>
            <div class="col-sm-8">
              <select class="form-control" name="EgrupoSensor" id="EgrupoSensor" required>
                <?php
                echo '<option value="" disabled selected>Seleccione Grupo</option>';
                foreach ($grupo as $key => $value) {
                  echo '<option value="'.$value["id_grupo"].'">'.$value["nom_grupo"].'</option>';
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Profundidad</label>
            <div class="col-sm-6" >
              <input type="number" class="form-control" id="EprofSensor" name="EprofSensor" placeholder="6" required>
            </div>
            <div class="col-sm-2" style="text-align: left; margin-left: 0; padding-left: 0;">
                <label class="col-form-label" > Mts.</label>
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarSensor">
          <input type="hidden" name="idSensor" value="">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modales Regresivos -->
<!-- Modal Nuevo GrupoSensor -->
<div class="modal fade" id="modal-nuevo-grupoSensor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Grupo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="nuevoGrupoSensor">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Grupo</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomGrupo" name="nomGrupo" placeholder="Grupo 1" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">OxyView</label>
            <div class="col-sm-6">
              <select class="form-control" name="oxyviewGrupo" id="select-oxyviewSensor" required>
                <?php
                echo '<option value="" disabled selected>Seleccione un OxyView</option>';
                foreach ($oxyview as $key => $value) {
                  echo '<option value="'.$value["id_oxyview"].'">'.$value["nserie_oxyview"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center" name="button" style="padding-left: 14px;" data-toggle="modal" data-target="#modal-nuevo-oxyviewSensor" id="modalCrearOxyviewSensor"><i class="fas fa-plus" ></i></button>
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
<!-- Modal Crear OxyviewSensor -->
<div class="modal fade" id="modal-nuevo-oxyviewSensor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo OxyView</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevoOxyviewSensor">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">N° Serie</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nSerieOxyview" name="nSerieOxyview" placeholder="11-1" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Modulo</label>
            <div class="col-sm-6">
              <select class="form-control" name="moduloOxyview" id="select-moduloSensor" required>
                <?php
                echo '<option value="" disabled selected>Seleccione un Modulo</option>';
                foreach ($modulo as $key => $value) {
                  echo '<option value="'.$value["id_modulo"].'">'.$value["nom_modulo"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center" name="button" style="padding-left: 14px;" data-toggle="modal" data-target="#modal-nuevo-moduloSensor" id="modalCrearModuloSensor"><i class="fas fa-plus" ></i></button>
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
<!-- Modal Crear ModuloSensor -->
<div class="modal fade" id="modal-nuevo-moduloSensor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Modulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevoModuloSensor">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Modulo</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomModulo" name="nomModulo" placeholder="Central" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Centro</label>
            <div class="col-sm-6">
              <select class="form-control" name="centroModulo" id="select-centroSensor" required>
                <?php
                echo '<option value="" disabled selected>Seleccione un Centro</option>';
                foreach ($centro as $key => $value) {
                  echo '<option value="'.$value["id_centro"].'">'.$value["nom_centro"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center" name="button" style="padding-left: 14px;" data-toggle="modal" data-target="#modal-nuevo-centroSensor" id="modalCrearCentroSensor"><i class="fas fa-plus" ></i></button>
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
<!-- Modal Crear CentroSensor-->
<div class="modal fade" id="modal-nuevo-centroSensor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Centro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevoCentroSensor">
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
<!-- Modal Crear tipoSensorSensor-->
<div class="modal fade" id="modal-nuevo-tipoSensorSensor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Tipo Sensor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevoTipoSensorSensor">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Tipo Sensor</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomTipoSensor" name="nomTipoSensor" placeholder="Central" required>
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="crearTipoSensor">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
