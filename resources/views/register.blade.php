<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kizzi SHOP | Registro</title>
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
              <h3 class="card-title text-center mb-3">Kizzi SHOP | Registro</h3>
              <form>
                <hr>
                <h4>Datos personales</h4>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>DNI</label>
                      <div>
                        <input id="dni" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nombres</label>
                      <div>
                        <input id="nombres" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Apellido Paterno</label>
                      <div>
                        <input id="apePater" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Apellido Materno</label>
                      <div>
                        <input id="apeMater" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Sexo</label>
                      <select id="sexo" class="form-control p_select">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Fecha de Nacimiento</label>
                      <div>
                        <input id="fec_nac" class="form-control" placeholder="aaaa-mm-dd" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>Correo electrónico</label>
                      <div>
                        <input id="correo" type="email" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Teléfono</label>
                      <div>
                        <input id="telefono" type="tel" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Dirección</label>
                      <div>
                        <input id="direccion" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <h4>Datos de usuario</h4>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Usuario</label>
                      <div>
                        <input id="usuario" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Contraseña</label>
                      <div>
                        <input id="clave" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"> Recuérdame </label>
                  </div>
                  <a href="#" class="forgot-pass">Olvidé mi contraseña</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Registrarme</button>
                </div>
                <p class="sign-up text-center">¿Ya tienes una cuenta? <a href="/login">Iniciar sesión</a></p>
                <p class="terms">Al crear una cuenta, estás aceptando nuestros <a href="#">Términos y Condiciones</a></p>

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
      var persona = {};
      persona.dni = $('#dni').val();
      persona.nombres = $('#nombres').val();
      persona.apePater = $('#apePater').val();
      persona.apeMater = $('#apeMater').val();
      persona.sexo = $('#sexo').val();
      persona.fec_nac = $('#fec_nac').val();
      persona.correo = $('#correo').val();
      persona.telefono = $('#telefono').val();
      persona.direccion = $('#direccion').val();
      $.ajax({
        url: '/api/personas/',
        type: 'POST',
        dataType: 'JSON',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        data: JSON.stringify(persona),
        success: PersonaRes => {
          var usuario = {};
          usuario.usuario = $('#usuario').val();
          usuario.clave = $('#clave').val();
          usuario.rol_id = 3;
          usuario.persona_id = PersonaRes.id;
          usuario.activateSession = true;
          $.ajax({
            url: '/api/usuarios/',
            type: 'POST',
            dataType: 'JSON',
            headers: {
              'Accept': 'application/json',
              'Content-Type': 'application/json'
            },
            data: JSON.stringify(usuario),
            success: UsuarioRes => {
              console.log('Inicio de sesión correcto');
              alert('Usuario creado correctamente...');
              location.href = '/client'
            }
          })
        }
      })
    })
  </script>
</body>

</html>