<?php
session_start();
if (json_encode($_SESSION) == '[]') {
  echo "
  <script>location.href = '/login/?logout=true';</script>
  ";
  die();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kizzi SHOP | Marcas</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <?php
    include 'php/menu.admin.php';
    ?>
    <div class="container-fluid page-body-wrapper">

      <?php
      include 'php/header.admin.php';
      ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row ">
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-header">
                  <h3 id="form-title">Agregar una marca</h3>
                </div>
                <div class="card-body">
                  <form autocomplete="off">
                    <input type="hidden" id="id" value="">
                    <input type="hidden" id="type" value="add">
                    <div class="form-group">
                      <label for="marca">Marca</label>
                      <input type="text" class="form-control" id="marca" placeholder="Ingrese una marca">
                    </div>
                    <div class="form-group">
                      <label for="descripcion">Descripcion</label>
                      <textarea class="form-control" id="descripcion" rows="6" placeholder="Agregue una descripción"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Agregar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-8 grid-margin">
              <div class="card">
                <div class="card-header card-title">
                  <h3>Lista de marcas</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> Marca </th>
                          <th> Descripción </th>
                          <th> Usuario </th>
                          <th> Modificado </th>
                          <th> Creado </th>
                          <th> Estado </th>
                          <th> Acción </th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        include 'php/footer.php';
        ?>
      </div>
    </div>
  </div>
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../assets/vendors/chart.js/Chart.min.js"></script>
  <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <script src="../assets/js/off-canvas.js"></script>
  <script src="../assets/js/hoverable-collapse.js"></script>
  <script src="../assets/js/misc.js"></script>
  <script src="../assets/js/settings.js"></script>
  <script src="../assets/js/todolist.js"></script>
  <script src="../assets/js/dashboard.js"></script>
  <script src="../assets/js/moment.min.js"></script>
  <script>
    function llenarTabla(Marca) {
      var data = JSON.stringify(Marca);
      var id = Marca.id;
      var marca = Marca.marca;
      var descripcion = Marca.descripcion;
      var usuario = Marca.usuario;
      var modificado = `
        ${Marca.updated_at.substr(0, 10)}
        <br>
        ${Marca.updated_at.substr(11, 8)}
      `;
      var creado = `
        ${Marca.created_at.substr(0, 10)}
        <br>
        ${Marca.created_at.substr(11, 8)}
      `;;
      var estado = Marca.estado;
      var botones = Marca.productos == 0 ? `
      <button class="btn btn-info btn-editar">Editar</button>
      <button class="btn btn-danger btn-eliminar">Borrar</button>
      ` : `
      <button class="btn btn-info btn-editar">Editar</button>
      `;

      var template = `
      <td>${marca}</td>
      <td>
        <div style="max-width: 250px; text-overflow: ellipsis; overflow: hidden;">${descripcion}</div>
      </td>
      <td>@${usuario}</td>
      <td>${modificado}</td>
      <td>${creado}</td>
      <td>${
        estado == 1 ? 
          `<button
            class="btn btn-sm btn-outline-success btn-icon-text btn-estado"
            value="1">
            <i class="mdi mdi-toggle-switch btn-icon-prepend"></i>
            Activo
          </button>`:
          `<button
            class="btn btn-sm btn-outline-danger btn-icon-text btn-estado"
            value="0">
            <i class="mdi mdi-toggle-switch-off btn-icon-prepend"></i>
            Inactivo
          </button>`
      }</td>
      <td>${botones}</td>
      `;

      var fila = $(`[data-id="${id}"]`);
      if (fila.html() != undefined) {
        fila.html(template);
        fila.attr('data', data);
      } else {
        $('table tbody').append(`
        <tr data='${data}' data-id="${id}">
          ${template}
        </tr>
        `);
      }
    };

    $(document).ready(function() {
      $.ajax({
        url: '/api/marcas/',
        type: 'GET',
        dataType: 'JSON',
        success: MarcasRes => {
          MarcasRes.forEach(MarcaRes => {
            llenarTabla(MarcaRes);
          });
        }
      })
    });

    $(document).on('click', '.btn-estado', function() {
      var data = JSON.parse($(this).parents('tr').attr('data'));
      var marca = {};
      marca.id = data.id;
      marca.estado = $(this).val() != 1;
      $.ajax({
        url: '/api/marcas/',
        type: 'PATCH',
        dataType: 'JSON',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        data: JSON.stringify(marca),
        success: MarcaRes => {
          llenarTabla(MarcaRes);
        }
      })
    })

    $(document).on('click', '.btn-editar', function() {
      var data = JSON.parse($(this).parents('tr').attr('data'));
      $('#id').val(data.id);
      $('#type').val('edit');
      $('#marca').val(data.marca);
      $('#descripcion').val(data.descripcion);
      $('#form-title').text('Editar una marca');
      $('form button[type="submit"]').text('Guardar');
    });

    $(document).on('click', '.btn-eliminar', function() {
      var data = JSON.parse($(this).parents('tr').attr('data'));
      var id = data.id;
      $.ajax({
        url: '/api/marcas/' + id,
        type: 'DELETE',
        dataType: 'JSON',
        success: MarcaRes => {
          $(`[data-id="${MarcaRes.id}"]`).remove();
        }
      })
    });

    $('form').on('reset', function() {
      $('#id').val(null);
      $('#type').val('add');
      $('#form-title').text('Agregar una marca');
      $('form button[type="submit"]').text('Agregar');
    })

    $('form').on('submit', function(form) {
      form.preventDefault();
      var type = $('#type').val();
      console.log(type);
      if (type == 'add') {
        methodAPI = 'POST';
      } else {
        methodAPI = 'PUT';
      }
      var marca = {};
      marca.id = $('#id').val();
      marca.marca = $('#marca').val();
      marca.descripcion = $('#descripcion').val();
      $.ajax({
        url: '/api/marcas/',
        type: methodAPI,
        dataType: 'JSON',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        data: JSON.stringify(marca),
        success: MarcaRes => {
          llenarTabla(MarcaRes);
          $('#id').val(null);
          $('#type').val('add');
          $('form > button[type="reset"]').click();
        }
      })
    })
  </script>
</body>

</html>