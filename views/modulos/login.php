<div class="login-box">


  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar Sesión </p>

    <form id="form-login">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="usuario" maxlength="30" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass" maxlength="12" required >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-7">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recuerdame
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-5">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <div class="respuesta">
          <p><?php echo $_SESSION["mail"]; ?></p>
        </div>
      </div>
    </form>
  </div>

</div>
