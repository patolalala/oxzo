<!-- Modal CrearUsuario-->
<div class="modal fade" id="modal-nuevo-usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevoUsuario">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Usuario</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomUsuario" name="nomUsuario" placeholder="Pedro Lara" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Correo Usuario</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="correoUsuario" name="correoUsuario" placeholder="usuario@usuario.cl" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Contraseña</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="passUsuario" name="passUsuario" placeholder="Password" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Repetir Contraseña</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="repPassUsuario" name="repPassUsuario" placeholder="Password" required>
              <div class="passIncorrectaUsuario alert alert-danger" role="alert">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Rol Usuario</label>
            <div class="col-sm-8">
              <select class="form-control" name="rolUsuario" id="rolUsuario" required>
                <option value="" disabled selected>Seleccione un Rol</option>
                <option value="0">Admin</option>
                <option value="1">Usuario Usuario Centro</option>
                <option value="2">Usuario Usuario Area</option>
              </select>
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="crearUsuario">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" >Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal EditarrUsuario-->
<div class="modal fade" id="modal-editar-usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="actualizarUsuario">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Nombre Usuario</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="EnomUsuario" name="EnomUsuario" placeholder="Pedro Lara" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Correo Usuario</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="EcorreoUsuario" name="EcorreoUsuario" placeholder="usuario@usuario.cl" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Contraseña</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="EpassUsuario" name="EpassUsuario" placeholder="Password" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Repetir Contraseña</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="ErepPassUsuario" name="ErepPassUsuario" placeholder="Password" required>
              <div class="EpassIncorrectaUsuario alert alert-danger" role="alert">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label text-left">Rol Usuario</label>
            <div class="col-sm-8">
              <select class="form-control" name="ErolUsuario" id="ErolUsuario" required>
                <option value="" disabled selected>Seleccione un Rol</option>
                <option value="0">Admin</option>
                <option value="1">Usuario Usuario Centro</option>
                <option value="2">Usuario Usuario Area</option>
              </select>
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarUsuario">
          <input type="hidden" name="idUsuario" value="">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" id="">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
