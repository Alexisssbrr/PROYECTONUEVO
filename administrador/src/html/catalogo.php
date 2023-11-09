<?php

$con= new mysqli("localhost","root","","verynice","33065");
$talla=[''];
$catalogo = array('talla' => $talla);

?>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Verynice - Aministrador de catalogo</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Inicio</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Catálogo</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./crudcatalogo.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Modificar</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./admincatalogo.html" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Agregar producto</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
          
            <li class="sidebar-item">
              <a class="sidebar-link" href="./register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Registro de empleados</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">COMENTARIOS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./comentarios.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Leer comentarios</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">
      <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body">
                  <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                    <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                  </a>
                  <p class="text-center">Agregar Vestidos</p>
                  <form action="./admincatalogo.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="product" class="form-label">Nombre del vestido</label>
                      <input type="text" class="form-control" id="product" aria-describedby="precio" placeholder="Ej: Vestido rojo" name="product">
                    </div>
                    <div class="mb-3">
                      <label for="precio" class="form-label">Precio</label>
                      <input type="text" class="form-control" id="precio" aria-describedby="precio" placeholder="Ej: $3000" name="precio">
                    </div>
                    <div class="mb-4">
                      <label for="descripcion" class="form-label">Descripción</label>
                      <input type="descripcion" class="form-control" id="descripcion" placeholder="Ej: Vestido color rojo con lentejuelas..." name="descripcion">
                    </div>
                    <div class="mb-4">
                      <label for="talla" class="form-label">Talla</label>
                      <select class="form-control" id="talla" name="talla">
                          <option value="S" <?php if ($catalogo['talla'] == 'S') echo 'selected'; ?>>Small (S)</option>
                          <option value="M" <?php if ($catalogo['talla'] == 'M') echo 'selected'; ?>>Medium (M)</option>
                          <option value="L" <?php if ($catalogo['talla'] == 'L') echo 'selected'; ?>>Large (L)</option>
                          <option value="XL" <?php if ($catalogo['talla'] == 'XL') echo 'selected'; ?>>Extra Large (XL)</option>

                      </select>

                    </div>
                    <div class="mb-4">
                      <label for="foto" class="form-label">Foto</label>
                      <input type="file" class="form-control" id="foto" placeholder="" name="foto">
                    </div>
                    <input class="button" type="submit" value="Publicar Vestido">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>