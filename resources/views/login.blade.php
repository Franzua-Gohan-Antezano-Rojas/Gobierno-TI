<?php
session_start();
if (isset($_GET['logout'])) {
  session_unset();
  session_destroy();
  header('location: ./');
  die();
}
if (isset($_SESSION['usuario']['rol']['id'])) {
  if ($_SESSION['usuario']['rol']['id'] == 3) {
    header('location: client/');
    die();
  } else {
    header('location: admin/');
    die();
  }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kizzi SHOP | Login</title>
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Kizzi SHOP | Login</h3>
              <form>
                <div class="form-group">
                  <label>Usuario o correo electrónico *</label>
                  <input id="usuario" type="text" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Contraseña *</label>
                  <input id="clave" type="password" class="form-control p_input">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"> Recuérdame </label>
                  </div>
                  <a href="#" class="forgot-pass">Olvidé mi contraseña</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Iniciar sesión</button>
                </div>
                <p class="sign-up">¿No tienes una cuenta?<a href="/register"> Registrate</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <script>
    $('form').on('submit', function(form) {
      form.preventDefault();
      var usuario = {};
      usuario.usuario = $('#usuario').val();
      usuario.clave = $('#clave').val();
      $.ajax({
        url: '/api/usuarios/validate',
        type: 'POST',
        dataType: 'JSON',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        data: JSON.stringify(usuario),
        success: UsuarioRes => {
          alert('Inicio de sesión correcto');
          location.href = '/client';
        }
      })
    })
  </script>
</body>

</html>