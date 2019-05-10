<?php
$centro = (new ctrCentro)->ctrVerCentro();
$empresa = (new ctrCliente)-> ctrVerCliente();
$ciudad = (new ctrCliente)->ctrTraerCiudad();
?>
<!-- Modal Crear Modulo -->
<div class="modal fade" id="modal-nuevo-modulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Modulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevoModulo">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Modulo</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomModulo" name="nomModulo" placeholder="Central" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Centro</label>
            <div class="col-sm-6">
              <select class="form-control" name="centroModulo" id="select-centroModulo" required>
                <?php
                echo '<option value="" disabled selected>Seleccione un Centro</option>';
                foreach ($centro as $key => $value) {
                  echo '<option value="'.$value["id_centro"].'">'.$value["nom_centro"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center" name="button" style="padding-left: 14px;" data-toggle="modal" data-target="#modal-nuevo-centroModulo" id="modalCrearCentroModulo"><i class="fas fa-plus" ></i></button>
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
<!-- Modal Editar Modulo -->
<div class="modal fade" id="modal-editar-modulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Modulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="actualizarModulo">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Modulo</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EnomModulo" name="EnomModulo" placeholder="Central" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Centro</label>
            <div class="col-sm-8">
              <select class="form-control" name="EcentroModulo" id="EcentroModulo" required>
                <?php
                echo '<option value="" disabled selected>Seleccione un Centro</option>';
                foreach ($centro as $key => $value) {
                  echo '<option value="'.$value["id_centro"].'">'.$value["nom_centro"].'</option>';
                }
                ?>
              </select>
            </div>
          </div>
          <input type="hidden" name="idModulo" value="">
          <input type="hidden" name="tipoOperacion" value="actualizarModulo">
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
<div class="modal fade" id="modal-nuevo-centroModulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Centro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="nuevoCentroModulo">
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
            <div class="col-sm-6">
              <select class="form-control" name="clienteCentro" required id="select-clienteModulo">
                <?php
                echo '<option value="" selected disabled>Seleccione una Empresa</option>';
                foreach ($empresa as $key => $value) {
                  echo '<option value="'.$value["id_cliente"].'">'.$value["razon_cliente"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center" data-toggle="modal" data-target="#modal-nuevo-clienteModulo" name="button" style="padding-left: 14px;" id="modalCrearClienteModulo"><i class="fas fa-plus" ></i></button>
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
<!-- Modal Nueva EmpresaModulo -->
<div class="modal fade" id="modal-nuevo-clienteModulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevaEmpresaModulo">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">RUT Empresa</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="rutEmpresa" name="rutEmpresa" placeholder="11.111.111-1" onkeyup=""  required maxlength='12' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Empresa</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomEmpresa" name="nomEmpresa" placeholder="Cermaq S.A." required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Giro Empresa</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="giroEmpresa" name="giroEmpresa" placeholder="Cultivo de Mariscos" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Dirección Empresa</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="dirEmpresa" name="dirEmpresa" placeholder="Los Pelues, Puerto Montt" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Ciudad</label>
            <div class="col-sm-8">
              <select class="form-control" name="ciudadEmpresa" id="select-ciudadEmpresa">
                <?php
                echo '<option value="" selected disabled>Seleccione una Ciudad</option>';
                foreach ($ciudad as $key => $value) {
                  echo '<option value="'.$value["id_ciudad"].'">'.$value["nom_ciudad"].'</option>';
                }
                ?>
              </select>
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="nuevaEmpresa">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" id="btnNuevaEmpresa">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
