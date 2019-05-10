<!-- Modal Crear tipoAlarma -->
<div class="modal fade" id="modal-nuevo-tipoAlarma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Tipo Alarma</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevoTipoAlarma">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Tipo Alarma</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomTipoAlarma" name="nomTipoAlarma" placeholder="Central" required>
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="crearTipoAlarma">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Editar tipoAlarma -->
<div class="modal fade" id="modal-editar-tipoAlarma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Tipo Alarma</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="actualizarTipoAlarma">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Tipo Alarma</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EnomTipoAlarma" name="EnomTipoAlarma" placeholder="Central" required>
            </div>
          </div>
          <input type="hidden" name="idTipoAlarma" value="">
          <input type="hidden" name="tipoOperacion" value="actualizarTipoAlarma">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
