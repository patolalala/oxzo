<!-- Modal -->
<div class="modal fade" id="modal-nuevo-tipoSensor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Tipo Sensor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevoTipoSensor">
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
<!-- Modal Editar tipoSensor -->
<div class="modal fade" id="modal-editar-tipoSensor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Tipo Sensor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="actualizarTipoSensor">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Tipo Sensor</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EnomTipoSensor" name="EnomTipoSensor" placeholder="Central" required>
            </div>
          </div>
          <input type="hidden" name="idTipoSensor" value="">
          <input type="hidden" name="tipoOperacion" value="actualizarTipoSensor">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
