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
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kizzi SHOP | Centro de Administración</title>
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
          <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">$12.34</h3>
                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success ">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Potential growth</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">$17.34</h3>
                        <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Revenue current</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">$12.34</h3>
                        <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-danger">
                        <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Daily Income</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">$31.53</h3>
                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success ">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Expense current</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">HISTORIAL DE PAGOS</h4>
                  <canvas id="transaction-history" class="transaction-chart"></canvas>
                  <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                    <div class="text-md-center text-xl-left">
                      <h6 class="mb-1">Pagos a Paypal</h6>
                      <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                    </div>
                    <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                      <h6 class="font-weight-bold mb-0">$236</h6>
                    </div>
                  </div>
                  <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                    <div class="text-md-center text-xl-left">
                      <h6 class="mb-1">Pagos en efectivo</h6>
                      <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                    </div>
                    <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                      <h6 class="font-weight-bold mb-0">$593</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title mb-1">Pedidos recientes</h4>
                    <p class="text-muted mb-1">Acción</p>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="preview-list" id="pending-list">
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face2.jpg" alt="image" />
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Gamboa Palomino Carlos Manuel</h6>
                              <p class="text-muted mb-0">Hace 15 minutos</p>
                            </div>
                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <p class="text-muted">
                                <button type="button" class="btn btn-inverse-primary btn-fw">Ver detalle</button>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face1.jpg" alt="image" />
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Rossi Falcón Angiellina</h6>
                              <p class="text-muted mb-0">Hace 20 minutos</p>
                            </div>
                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <p class="text-muted">
                                <button type="button" class="btn btn-inverse-primary btn-fw">Ver detalle</button>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face2.jpg" alt="image" />
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Gamboa Palomino Carlos Manuel</h6>
                              <p class="text-muted mb-0">Hace 30 minutos</p>
                            </div>
                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <p class="text-muted">
                                <button type="button" class="btn btn-inverse-primary btn-fw">Ver detalle</button>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face1.jpg" alt="image" />
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Rossi Falcón Angiellina</h6>
                              <p class="text-muted mb-0">Hace 1 días</p>
                            </div>
                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <p class="text-muted">
                                <button type="button" class="btn btn-inverse-primary btn-fw">Ver detalle</button>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face2.jpg" alt="image" />
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Gamboa Palomino Carlos Manuel</h6>
                              <p class="text-muted mb-0">Hace 2 días</p>
                            </div>
                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <p class="text-muted">
                                <button type="button" class="btn btn-inverse-primary btn-fw">Ver detalle</button>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Detalle de venta (Gamboa Palomino Carlos Manuel)</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </th>
                          <th> Producto </th>
                          <th> P. Unitario </th>
                          <th> Cantidad </th>
                          <th> P. Total </th>
                          <th> Fecha pedido </th>
                          <th> Tipo de pago </th>
                          <th> Estado </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="../img/4.jpg" alt="image" />
                            <span class="pl-2">Zapatilla Exportacus</span>
                          </td>
                          <td> 150.30 </td>
                          <td> 12 </td>
                          <td> 1803.60 </td>
                          <td> 2021-12-11 </td>
                          <td> Paypal </td>
                          <td>
                            <div class="badge badge-outline-danger">Agotado</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="../img/3.jpg" alt="image" />
                            <span class="pl-2">Zapatilla Runner</span>
                          </td>
                          <td> 98.50 </td>
                          <td> 1 </td>
                          <td> 98.50 </td>
                          <td> 2021-12-11 </td>
                          <td> Paypal </td>
                          <td>
                            <div class="badge badge-outline-success">Disponible</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="../img/1.jpg" alt="image" />
                            <span class="pl-2">Zapatilla Dragón Femenino</span>
                          </td>
                          <td> 105.20 </td>
                          <td> 2 </td>
                          <td> 310.40 </td>
                          <td> 2021-12-11 </td>
                          <td> Paypal </td>
                          <td>
                            <div class="badge badge-outline-warning">Agotandose</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="../img/7.jpg" alt="image" />
                            <span class="pl-2">Zapatilla Dragón</span>
                          </td>
                          <td> 145.90 </td>
                          <td> 2 </td>
                          <td> 309.80 </td>
                          <td> 2021-12-11 </td>
                          <td> Paypal </td>
                          <td>
                            <div class="badge badge-outline-success">Disponible</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="../img/8.jpg" alt="image" />
                            <span class="pl-2">Zapatilla Super</span>
                          </td>
                          <td> 158.30 </td>
                          <td> 1 </td>
                          <td> 158.30 </td>
                          <td> 2021-12-11 </td>
                          <td> Paypal </td>
                          <td>
                            <div class="badge badge-outline-success">Disponible</div>
                          </td>
                        </tr>
                      </tbody>
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
</body>

</html>