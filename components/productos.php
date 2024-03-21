<?php
// Esto es para que cargue las rutas del nav antes de abrir la pagina
$ruta = '../';
session_start();
require "conexion.php";
$conexion = conexion();

$queryProductos = "SELECT * FROM productos";
$sqlProductos = mysqli_query($conexion, $queryProductos);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GeckoGaming</title>
  <link rel="icon" href="<?php echo $ruta . 'assets/Logos/icono1.png'; ?>" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo $ruta . 'css/style.css'; ?>">
</head>

<body>
  <?php
  require($ruta . 'layouts/nav.php');
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm">
        <img src="../assets/Poster/GG1.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <div class="container mt-4">
    <?php
    if (mysqli_num_rows($sqlProductos) > 0) {
      echo '<h2 class="titulo display-1 text-uppercase my-5 text-center" style="font-size: 40px;">Nuestros productos</h2>';
    } else {
      echo '<h2 class="titulo display-1 text-uppercase my-5 text-center" style="font-size: 40px;">No hay productos</h2>';
    }
    ?>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php

      while ($traerProductos = mysqli_fetch_assoc($sqlProductos)) {
        $nombreProducto = $traerProductos['nombre_producto'];
        $descripcionProducto = $traerProductos['descripcion'];
        $imagenProducto = $traerProductos['imagen'];
        $precioProducto = $traerProductos['precio'];
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="<?php echo $ruta . $imagenProducto; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $nombreProducto; ?></h5>
              <p class="card-text"><?php echo $descripcionProducto; ?></p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary"><b>Precio: </b><?php echo $precioProducto; ?></small>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

  <?php
  require($ruta . 'layouts/footer.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>