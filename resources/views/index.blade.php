<?php
include 'php/validateSession.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kizzi SHOP</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <?php
    include 'php/menu.client.php';
    ?>
    <div class="container-fluid page-body-wrapper">
      <?php
      include 'php/header.client.php';
      ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">Filtrar zapatillas por...</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="marca">Marca</label>
                      <select class="form-control" id="marca">
                        <option value="">-- Seleccione una marca --</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="categoria">Categoría</label>
                      <select class="form-control" id="categoria">
                        <option value="">-- Seleccione una categoria --</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="list-products">
            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="item">
                    <img 
                      width="100%"
                      src="assets/images/dashboard/Rectangle.jpg" alt="">
                  </div>
                  <div class="d-flex py-4">
                    <div class="preview-list w-100">
                      <div class="preview-item p-0">
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Zaptilla</h6>
                              <p class="text-muted text-small">S/ 14.00</p>
                            </div>
                            <p class="text-muted">Descripción de la zapatilla</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">S/</span>
                    </div>
                    <div class="input-group-prepend">
                      <span class="input-group-text">0.00</span>
                    </div>
                    <input type="number" class="form-control" placeholder="Cantidad" aria-label="Cantidad" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-primary" type="button">
                        <i class="mdi mdi mdi-cart-plus btn-icon-prepend"></i> Agregar </button>
                    </div>
                  </div>
                  <hr>
                  <p class="text-muted">1 zapatilla de 10 disponibles</p>
                  <div class="progress progress-md portfolio-progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="item">
                    <img 
                      width="100%"
                      src="assets/images/dashboard/Rectangle.jpg" alt="">
                  </div>
                  <div class="d-flex py-4">
                    <div class="preview-list w-100">
                      <div class="preview-item p-0">
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Zaptilla</h6>
                              <p class="text-muted text-small">S/ 14.00</p>
                            </div>
                            <p class="text-muted">Descripción de la zapatilla</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">S/</span>
                    </div>
                    <div class="input-group-prepend">
                      <span class="input-group-text">0.00</span>
                    </div>
                    <input type="number" class="form-control" placeholder="Cantidad" aria-label="Cantidad" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-primary" type="button">
                        <i class="mdi mdi mdi-cart-plus btn-icon-prepend"></i> Agregar </button>
                    </div>
                  </div>
                  <hr>
                  <p class="text-muted">1 zapatilla de 10 disponibles</p>
                  <div class="progress progress-md portfolio-progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="item">
                    <img 
                      width="100%"
                      src="assets/images/dashboard/Rectangle.jpg" alt="">
                  </div>
                  <div class="d-flex py-4">
                    <div class="preview-list w-100">
                      <div class="preview-item p-0">
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Zaptilla</h6>
                              <p class="text-muted text-small">S/ 14.00</p>
                            </div>
                            <p class="text-muted">Descripción de la zapatilla</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">S/</span>
                    </div>
                    <div class="input-group-prepend">
                      <span class="input-group-text">0.00</span>
                    </div>
                    <input type="number" class="form-control" placeholder="Cantidad" aria-label="Cantidad" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-primary" type="button">
                        <i class="mdi mdi mdi-cart-plus btn-icon-prepend"></i> Agregar </button>
                    </div>
                  </div>
                  <hr>
                  <p class="text-muted">1 zapatilla de 10 disponibles</p>
                  <div class="progress progress-md portfolio-progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        include 'php/footer.php'
        ?>
      </div>
    </div>
  </div>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <script>
    $(document).on('change', '#quantity', function() {
      var data = JSON.parse($(this).parents('[id^="producto-"]').attr('data'));
      console.log(data);
      var quantity = $(this).val();
      var pTotal = quantity * data.precio;
      var percent = (quantity / data.stock) * 100;
      $(`#pTotal-${data.id}`).text(pTotal.toFixed(2));
      $(`#quantity-ordered-${data.id}`).text(quantity);
      $(`#percent-ordered-${data.id}`).css('width', percent + '%');
    })
    $(document).ready(function() {
      $.ajax({
        url: '/api/productos/',
        type: 'GET',
        dataType: 'JSON',
        success: ProductosRes => {
          $('#list-products').empty();
          ProductosRes.forEach(ProductoRes => {
            var data = JSON.stringify(ProductoRes);
            $('#list-products').append(`
            <div class="col-md-6 col-xl-4 grid-margin stretch-card" id="producto-${ProductoRes.id}"
              data='${data}'>
              <div class="card">
                <div class="card-body">
                  <div class="item">
                    <img 
                      width="100%"
                      height="250px"
                      style="object-fit: cover;
      object-position: center center;"
                      src="img/${ProductoRes.id}.jpg" alt="">
                  </div>
                  <div class="d-flex py-4">
                    <div class="preview-list w-100">
                      <div class="preview-item p-0">
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">${ProductoRes.producto}</h6>
                              <p class="text-muted text-small">${ProductoRes.descripcion}</p>
                            </div>
                            <p class="text-muted">S/ ${ProductoRes.precio}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <p class="text-small">${ProductoRes.marca.marca} | ${ProductoRes.categoria.categoria}</p>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">S/</span>
                    </div>
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="pTotal-${ProductoRes.id}">0.00</span>
                    </div>
                    <input id="quantity" type="number" min="0" max="${ProductoRes.stock}" class="form-control" placeholder="Cantidad" aria-label="Cantidad" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-primary" type="button" id="btn-add">
                        <i class="mdi mdi mdi-cart-plus btn-icon-prepend"></i> Agregar </button>
                    </div>
                  </div>
                  <hr>
                  <p class="text-muted"><span id="quantity-ordered-${ProductoRes.id}">0</span> zapatilla de ${ProductoRes.stock} disponibles</p>
                  <div class="progress progress-md portfolio-progress">
                    <div class="progress-bar bg-success" role="progressbar" id="percent-ordered-${ProductoRes.id}" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            `);
          });
        }
      })
    })
  </script>
</body>

</html>