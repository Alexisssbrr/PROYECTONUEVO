
<?php 
$con = new mysqli("localhost", "root", "", "verynice", 33065);

$result = $con->query ("SELECT * FROM catalogo ");
$catalogo= $result->fetch_all(MYSQLI_ASSOC);  
?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VeryNice - Modificar productos</title>
<link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
<link rel="stylesheet" href="../assets/css/styles.min.css" />
<link rel="stylesheet" href="../assets/css/crud.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

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
    <header class="app-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item d-block d-xl-none">
            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
        </ul>
      </nav>
    </header>
    <br><br><br>
    <!--  Header End -->
    

    <!-- CRUD BODY -->
    <h2 class="text-center">Modificar productos</h2>
    <div class="table-responsive center">
      <table class="table limit">
        <thead class="table table-color">
          <tr>
            <th class="celdaborde">Id</th>
            <th class="celdaborde">Nombre del producto</th>
            <th class="celdaborde">Precio</th>
            <th class="celdaborde">Descripcion</th>
            <th class="celdaborde">Talla</th>
            <th class="celdaborde">Imagen</th>
            <th class="celdaborde">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($catalogo as $cat) {?>
          <tr>
            <td class="celdaborde"><?php echo $cat['ID']; ?></td>
            <td class="celdaborde"><?php echo $cat['product']; ?></td>
            <td class="celdaborde"><?php echo $cat['precio']; ?></td>
            <td class="celdaborde"><?php echo $cat['descripcion']; ?></td>
            <td class="celdaborde"><?php echo $cat['talla']; ?></td>
            <td class="celdaborde"><i class="fa-regular fa-image fa-flip" style="color: #186cc3;"></i></td>
            <td class="celdaborde">
                <a href="formularioeditar.php?ID=<?php echo $cat['ID']; ?>"><i class="editar "></i></a>
                <a href="eliminar.php?ID=<?php echo $cat['ID']; ?>"><i class="basura "></i></a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
    
    <!-- CRUD BODY END -->

<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/sidebarmenu.js"></script>
<script src="../assets/js/app.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>
