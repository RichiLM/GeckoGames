<?php
// Esto es para que cargue las rutas del nav antes de abrir la pagina
$ruta = '';

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GeckoGaming</title>
  <link rel="icon" href="assets//Logos/icono1.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  require($ruta . 'layouts/nav.php');
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm">
        <img src="assets/Poster/click.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row text-center mx-3 mt-5 mb-5">
      <div class="col-sm">
        <h2 class="titulo display-1 text-uppercase my-auto">Controla tu experiencia, transforma tu juego y domina tu potencial</h2>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm">
        <img src="assets/Poster/gnc.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <div class="container mt-4">
    <div class="row text-center mb-5">
      <div class="col-sm col-md-6 d-flex align-items-center justify-content-center">
        <h2 class="titulo display-1 text-uppercase my-auto">Desempeño superior</h2>
      </div>
      <div class="col-sm col-md-6">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/Mouse/M1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/Mouse/M2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/Mouse/M3.png" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center mb-5">
      <div class="col-sm col-md-6">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/Teclados/T2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/Teclados/T5.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/Teclados/T3.png" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm col-md-6 d-flex align-items-center">
        <h2 class="titulo display-1 text-uppercase my-auto">Supera tus límites</h2>
      </div>
    </div>
    <div class="row text-center mb-5">
      <div class="col-sm col-md-6 d-flex align-items-center justify-content-center">
        <h2 class="titulo display-1 text-uppercase my-auto">Juega a otro nivel</h2>
      </div>
      <div class="col-sm col-md-6">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/Controles/C1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/Controles/C2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/Controles/C3.png" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  require($ruta .  'layouts/footer.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
