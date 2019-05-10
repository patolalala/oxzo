<?php
$empresa = (new ctrCliente)->ctrVerCliente();
?>
<!-- Modal Crear UsrClinete-->
<div class="modal fade" id="modal-nuevo-usrCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevoUsrCliente">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Usuario</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomUsrCliente" name="nomUsrCliente" placeholder="Pedro Lara" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Correo Usuario</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="correoUsrCliente" name="correoUsrCliente" placeholder="usuario@usuario.cl" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Contraseña</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="passUsrCliente" name="passUsrCliente" placeholder="Password" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Repetir Contraseña</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="repUsrCliente" name="repUsrCliente" placeholder="Password" required >
              <div class="passIncorrecta alert alert-danger" role="alert"></div>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Empresa</label>
            <div class="col-sm-8">
              <select class="form-control" name="empresaUsrCliente" required>
                  <?php
                  echo '<option value="" disabled selected>Seleccione una Empresa</option>';
                  foreach ($empresa as $key => $value) {
                    echo '<option value="'.$value["id_cliente"].'">'.$value["razon_cliente"].'</option>';
                  }
                  ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Rol Usuario</label>
            <div class="col-sm-8">
              <select class="form-control" name="rolUsrCliente" required>
                <option value="" disabled selected>Seleccione un Rol</option>
                <option value="1">Usuario Empresa</option>
                <option value="2">Usuario Centro</option>
                <option value="3">Usuario Area</option>
              </select>
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="crearUsrCliente">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Actualizar UsrClinete-->
<div class="modal fade" id="modal-editar-usrCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="actualizarUsrCliente">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Usuario</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EnomUsrCliente" name="EnomUsrCliente" placeholder="Pedro Lara" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Correo Usuario</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="EcorreoUsrCliente" name="EcorreoUsrCliente" placeholder="usuario@usuario.cl" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Contraseña</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="EpassUsrCliente" name="EpassUsrCliente" placeholder="Password" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Repetir Contraseña</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="ErepUsrCliente" name="ErepUsrCliente" placeholder="Password" required >
              <div class="EpassIncorrecta alert alert-danger" role="alert"></div>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Empresa</label>
            <div class="col-sm-8">
              <select class="form-control" name="EempresaUsrCliente" id="EempresaUsrCliente" required>
                  <?php
                  echo '<option value="" disabled selected>Seleccione una Empresa</option>';
                  foreach ($empresa as $key => $value) {
                    echo '<option value="'.$value["id_cliente"].'">'.$value["razon_cliente"].'</option>';
                  }
                  ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Rol Usuario</label>
            <div class="col-sm-8">
              <select class="form-control" name="ErolUsrCliente" id="ErolUsrCliente" required>
                <option value="" disabled selected>Seleccione un Rol</option>
                <option value="1">Usuario Empresa</option>
                <option value="2">Usuario Centro</option>
                <option value="3">Usuario Area</option>
              </select>
            </div>
          </div>
          <input type="hidden" name="idUsrCliente" value="">
          <input type="hidden" name="tipoOperacion" value="actualizarUsrCliente">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
