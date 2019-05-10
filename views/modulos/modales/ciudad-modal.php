<?php
$region = (new ctrCiudad)->ctrTraerRegion();
?>
<!-- Modal Nueva Ciudad -->
<div class="modal fade" id="modal-nueva-ciudad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Ciudad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevaCiudad">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Ciudad</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomCiudad" name="nomCiudad" placeholder="Puerto Montt" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Región</label>
            <div class="col-sm-6">
              <select class="form-control" id="select-region" name="region" required >
                <?php
                echo '<option value="" selected disabled>Seleccione una Región</option>';
                foreach ($region as $key => $value) {
                  echo '<option value="'.$value["id_region"].'">'.$value["nom_region"].'</option>';
                }
                ?>
              </select>
            </div>
            <button type="button" class="btn btn-primary col-sm-1 text-center" id="btn-nuevaRegion" style="padding-left: 14px;" data-toggle="modal" data-target="#modal-nueva-region"><i class="fas fa-plus" ></i></button>
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
<!-- Modal Nueva Region -->
<div class="modal fade" id="modal-nueva-region" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Región</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevaRegionCiudad">
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
<!-- Modal Editar Ciudad -->
<div class="modal fade" id="modal-editar-ciudad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Ciudad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="actualizarCiudad">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Ciudad</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EnomCiudad" name="EnomCiudad" placeholder="Los Lagos" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Región</label>
            <div class="col-sm-8">
              <select class="form-control" id="Eselect-region" name="Eregion" required >
                <?php
                echo '<option value="" selected disabled>Seleccione una Región</option>';
                foreach ($region as $key => $value) {
                  echo '<option value="'.$value["id_region"].'">'.$value["nom_region"].'</option>';
                }
                ?>
              </select>
            </div>
          </div>
          <input type="hidden" name="EidCiudad">
          <input type="hidden" name="tipoOperacion" value="actualizarCiudad">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
