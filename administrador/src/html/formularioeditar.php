<?php 
$con = new mysqli("localhost", "root", "", "verynice", 33065);

if(!isset($_GET["ID"])){
  echo"NO HAY RESULTADOS";
}
$ID=$_GET["ID"];
$stmt=$con->prepare("SELECT ID, product, precio, descripcion, talla FROM catalogo WHERE ID=".$ID);

//$stmt->bind_param('s', $ID);
$stmt->execute();
$stmt->bind_result($ID2, $product, $precio, $descripcion, $talla);
$stmt->fetch();
$catalogo = array('ID' => $ID, 'product' => $product, 'precio' => $precio, 'descripcion' => $descripcion, 'talla' => $talla);


?>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
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
                  <p class="text-center">Editar información de vestidos</p>
                  <form action="./editar.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="hidden" name="ID" value="<?php echo $catalogo['ID']; ?>">
                      <label for="product" class="form-label">Nombre del vestido</label>
                      <input type="text" value="<?php echo $catalogo['product']; ?>" class="form-control" id="product" aria-describedby="precio" placeholder="Ej: Vestido rojo" name="product">
                    </div>
                    <div class="mb-3">
                      <label for="precio" class="form-label">Precio</label>
                      <input type="text" value="<?php echo $catalogo['precio']; ?>" class="form-control" id="precio" aria-describedby="precio" placeholder="Ej: $3000" name="precio">
                    </div>
                    <div class="mb-4">
                      <label for="descripcion" class="form-label">Descripción</label>
                      <input type="descripcion" value="<?php echo $catalogo['descripcion']; ?>" class="form-control" id="descripcion" placeholder="Ej: Vestido color rojo con lentejuelas..." name="descripcion">
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
                    <!-- <div class="mb-4">
                      <label for="foto" class="form-label">Foto</label>
                      <input type="file" value="<?php // echo $catalogo['foto'] ?>" class="form-control" id="foto" placeholder="" name="foto">
                    </div> -->
                    <input class="button" type="submit" value="Modificar Vestido">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>