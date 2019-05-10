<?php
$empresa = (new ctrCliente)-> ctrVerCliente();
$ciudad = (new ctrCliente)->ctrTraerCiudad();
$region = (new ctrCiudad)->ctrTraerRegion();
?>
<!-- Modal Crear Centro-->
<div class="modal fade" id="modal-nuevo-centro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Centro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="nuevoCentro">
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
              <select class="form-control" name="clienteCentro" required id="select-empresaCentro">
                <?php
                echo '<option value="" selected disabled>Seleccione una Empresa</option>';
                foreach ($empresa as $key => $value) {
                  echo '<option value="'.$value["id_cliente"].'">'.$value["razon_cliente"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center" data-toggle="modal" data-target="#modal-nueva-empresaCentro" name="button" style="padding-left: 14px;" id="crearEmpresaCentro"><i class="fas fa-plus" ></i></button>
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
<!-- Modal Editar Centro-->
<div class="modal fade" id="modal-editar-centro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Centro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="actualizarCentro">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Centro</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EnomCentro" name="EnomCentro" placeholder="Central" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Dirección</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EdirCentro" name="EdirCentro" placeholder="Los Pelues, Puerto Montt" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Maps Centro</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EmapCentro" name="EmapCentro" placeholder="https://www.google.cl/maps?hl=es-419&tab=wl" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Contacto Centro</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EcontactoCentro" name="EcontactoCentro" placeholder="+569 87654321" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="EemailCentro" name="EemailCentro" placeholder="centro@centro.cl" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Empresa Centro</label>
            <div class="col-sm-8">
              <select class="form-control" name="EclienteCentro" id="EclienteCentro" required>
                <?php
                echo '<option value="" selected disabled>Seleccione una Empresa</option>';
                foreach ($empresa as $key => $value) {
                  echo '<option value="'.$value["id_cliente"].'">'.$value["razon_cliente"].'</option>';
                }
                ?>
              </select>
            </div>
          </div>
          <input type="hidden" name="idCentro" value="">
          <input type="hidden" name="tipoOperacion" value="actualizarCentro">
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
<!-- Modal Nueva Empresa -->
<div class="modal fade" id="modal-nueva-empresaCentro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevaEmpresaCentro">
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
            <div class="col-sm-6">
              <select class="form-control" name="ciudadEmpresa" id="select-ciudadEmpresa">
                <?php
                echo '<option value="" selected disabled>Seleccione una Ciudad</option>';
                foreach ($ciudad as $key => $value) {
                  echo '<option value="'.$value["id_ciudad"].'">'.$value["nom_ciudad"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center" name="" id="nuevaCiudadCliente" style="padding-left: 14px;" data-toggle="modal" data-target="#modal-nueva-ciudadEmpresa"><i class="fas fa-plus" ></i></button>
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
<!-- Modal Nueva Ciudad - Empresa -->
<div class="modal fade" id="modal-nueva-ciudadEmpresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Ciudad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevaCiudadEmpresaCentro">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Ciudad</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomCiudad" name="nomCiudad" placeholder="Puerto Montt" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Región</label>
            <div class="col-sm-6">
              <select class="form-control" id="select-regionEmpresa" name="region" required >
                <?php
                echo '<option value="" selected disabled>Seleccione una Región</option>';
                foreach ($region as $key => $value) {
                  echo '<option value="'.$value["id_region"].'">'.$value["nom_region"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center" id="btn-nuevaRegionCentro" style="padding-left: 14px;" data-toggle="modal" data-target="#modal-nueva-regionEmpresa"><i class="fas fa-plus" ></i></button>
          </div>
          <input type="hidden" name="tipoOperacion" value="nuevaCiudad">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Nueva Region Empresa -->
<div class="modal fade" id="modal-nueva-regionEmpresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Región</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevaRegionCentro">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Región</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomRegion" name="nomRegion" placeholder="Los Lagos" required>
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="nuevaRegion">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
