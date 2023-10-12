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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kizzi SHOP | Productos</title>
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
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
                  <h3 id="form-title">Agregar un producto</h3>
                </div>
                <div class="card-body">
                  <form autocomplete="off">
                    <input type="hidden" id="id" value="">
                    <input type="hidden" id="type" value="add">
                    <div class="form-group">
                      <label for="producto">Producto</label>
                      <input type="text" class="form-control" id="producto" placeholder="Ingrese un producto" required>
                    </div>
                    <div class="form-group">
                      <label for="descripcion">Descripción</label>
                      <textarea class="form-control" id="descripcion" rows="6" placeholder="Agregue una descripción" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="marca">Marca</label>
                      <select class="form-control" id="marca" required>
                        <option value>-- Seleccione una marca --</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="categoria">Categoría</label>
                      <select class="form-control" id="categoria" required>
                        <option value>-- Seleccione una categoría --</option>
                      </select>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="precio">Precio</label>
                        <input type="number" step="0.01" class="form-control" id="precio" placeholder="Precio" required>
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" placeholder="Stock" required>
                      </div>
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
                  <h3>Lista de productos</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> Producto </th>
                          <th> Descripción </th>
                          <th> Marca </th>
                          <th> Categoría </th>
                          <th> Precio </th>
                          <th> Stock </th>
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
    function llenarTabla(Producto) {
      var data = JSON.stringify(Producto);
      var id = Producto.id;
      var producto = Producto.producto;
      var descripcion = Producto.descripcion;
      var marca = Producto.marca.marca;
      var categoria = Producto.categoria.categoria;
      var precio = Producto.precio;
      var stock = Producto.stock;
      var usuario = Producto.usuario;
      var modificado = `
        ${Producto.updated_at.substr(0, 10)}
        <br>
        ${Producto.updated_at.substr(11, 8)}
      `;
      var creado = `
        ${Producto.created_at.substr(0, 10)}
        <br>
        ${Producto.created_at.substr(11, 8)}
      `;;
      var estado = Producto.estado;
      var botones = Producto.ventas == 0 ? `
      <button class="btn btn-info btn-editar">Editar</button>
      <button class="btn btn-danger btn-eliminar">Borrar</button>
      ` : `
      <button class="btn btn-info btn-editar">Editar</button>
      `;

      var template = `
      <td>${producto}</td>
      <td>
        <div style="max-width: 250px; text-overflow: ellipsis; overflow: hidden;">${descripcion}</div>
      </td>
      <td>${marca}</td>
      <td>${categoria}</td>
      <td>S/ ${precio}</td>
      <td>${stock}</td>
      <td>@${usuario}</td>
      <td>${modificado}</td>
      <td>${creado}</td>
      <td>${
        Boolean(estado) ? 
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
      // Obtención de marcas para combo
      $.ajax({
        url: '/api/marcas/',
        type: 'GET',
        dataType: 'JSON',
        success: MarcasRes => {
          MarcasRes.forEach(MarcaRes => {
            var id = MarcaRes.id;
            var marca = MarcaRes.marca;
            var estado = MarcaRes.estado == 0 ? 'disabled' : '';
            $('#marca').append(`
            <option value="${id}" label="${marca}" ${estado}>${marca}</option>
            `);
          });
        }
      })
      $.ajax({
        url: '/api/categorias/',
        type: 'GET',
        dataType: 'JSON',
        success: CategoriasRes => {
          CategoriasRes.forEach(CategoriaRes => {
            var id = CategoriaRes.id;
            var categoria = CategoriaRes.categoria;
            var estado = CategoriaRes.estado == 0 ? 'disabled' : '';
            $('#categoria').append(`
            <option value="${id}" label="${categoria}" ${estado}>${categoria}</option>
            `);
          });
        }
      });
      $.ajax({
        url: '/api/productos/',
        type: 'GET',
        dataType: 'JSON',
        success: ProductosRes => {
          ProductosRes.forEach(ProductoRes => {
            llenarTabla(ProductoRes);
          });
        }
      });
    });

    $(document).on('click', '.btn-estado', function() {
      var data = JSON.parse($(this).parents('tr').attr('data'));
      var producto = {};
      producto.id = data.id;
      producto.estado = $(this).val() != 1;
      $.ajax({
        url: '/api/productos/',
        type: 'PATCH',
        dataType: 'JSON',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        data: JSON.stringify(producto),
        success: ProductoRes => {
          llenarTabla(ProductoRes);
        }
      })
    })

    $(document).on('click', '.btn-editar', function() {
      var data = JSON.parse($(this).parents('tr').attr('data'));
      $('#id').val(data.id);
      $('#type').val('edit');
      $('#producto').val(data.producto);
      $('#descripcion').val(data.descripcion);
      $('#marca').val(data.marca_id);
      $('#categoria').val(data.categoria_id);
      $('#precio').val(data.precio);
      $('#stock').val(data.stock);
      $('#form-title').text('Editar un producto');
      $('form button[type="submit"]').text('Guardar');
    });

    $(document).on('click', '.btn-eliminar', function() {
      var data = JSON.parse($(this).parents('tr').attr('data'));
      var id = data.id;
      $.ajax({
        url: '/api/productos/' + id,
        type: 'DELETE',
        dataType: 'JSON',
        success: CategoriaRes => {
          $(`[data-id="${CategoriaRes.id}"]`).remove();
        }
      })
    });

    $('form').on('reset', function() {
      $('#id').val(null);
      $('#type').val('add');
      $('#form-title').text('Agregar un producto');
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
      var producto = {};
      producto.id = $('#id').val();
      producto.producto = $('#producto').val();
      producto.descripcion = $('#descripcion').val();
      producto.marca_id = $('#marca').val();
      producto.categoria_id = $('#categoria').val();
      producto.precio = $('#precio').val();
      producto.stock = $('#stock').val();
      $.ajax({
        url: '/api/productos/',
        type: methodAPI,
        dataType: 'JSON',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        data: JSON.stringify(producto),
        success: ProductoRes => {
          llenarTabla(ProductoRes);
          $('#id').val(null);
          $('#type').val('add');
          $('form > button[type="reset"]').click();
        }
      })
    })
  </script>
</body>

</html>