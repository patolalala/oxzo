<?php
$ciudad = (new ctrCliente)->ctrTraerCiudad();
$region = (new ctrCiudad)->ctrTraerRegion();
?>
<!-- Modal Nueva Empresa -->
<div class="modal fade" id="modal-nuevo-cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevaEmpresa">
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
        <form id="nuevaCiudadEmpresa">
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
            <button type="button" class="btn btn-primary col-sm-1 text-center" id="btn-nuevaRegionCliente" style="padding-left: 14px;" data-toggle="modal" data-target="#modal-nueva-regionEmpresa"><i class="fas fa-plus" ></i></button>
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
        <form id="nuevaRegionCliente">
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
<!-- Modal Editar Empresa -->
<div class="modal fade" id="modal-editar-cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="actualizarEmpresa">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">RUT Empresa</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="ErutEmpresa" name="ErutEmpresa" placeholder="11.111.111-1" onkeyup=""  required maxlength='12' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Empresa</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EnomEmpresa" name="EnomEmpresa" placeholder="Cermaq S.A." required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Giro Empresa</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EgiroEmpresa" name="EgiroEmpresa" placeholder="Cultivo de Mariscos" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Dirección Empresa</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EdirEmpresa" name="EdirEmpresa" placeholder="Los Pelues, Puerto Montt" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Ciudad</label>
            <div class="col-sm-8">
              <select class="form-control" name="EciudadEmpresa" id="Eselect-ciudadEmpresa">
                <?php
                echo '<option value="" selected disabled>Seleccione una Ciudad</option>';
                foreach ($ciudad as $key => $value) {
                  echo '<option value="'.$value["id_ciudad"].'">'.$value["nom_ciudad"].'</option>';
                }
                ?>
              </select>
            </div>
          </div>
          <input type="hidden" name="idCliente" value="">
          <input type="hidden" name="tipoOperacion" value="actualizarEmpresa">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" id="btnNuevaEmpresa">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
