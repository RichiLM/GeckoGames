<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    require('layouts/nav.php');
    ?>
    <div class="container mt-4">
        <div class="row text-center mb-5">
            <div class="col-sm col-md-6 d-flex align-items-center">
                <h2 class="titulo display-1 text-uppercase my-auto">Partes Modulares</h2>
            </div>
            <div class="col-sm col-md-6">
                <img class="img-fluid" src="assets/g1.png" alt="Imagen1">
            </div>
        </div>
        <div class="row text-center mb-5">
            <div class="col-sm col-md-6">
                <img class="img-fluid" src="assets/g2.png" alt="Imagen2">
            </div>
            <div class="col-sm col-md-6 d-flex align-items-center">
                <h2 class="titulo display-1 text-uppercase my-auto">Múltiples combinaciones</h2>
            </div>
        </div>
        <div class="row text-center mb-5">
            <div class="col-sm col-md-6 d-flex align-items-center">
                <h2 class="titulo display-1 text-uppercase my-auto">Personalidad</h2>
            </div>
            <div class="col-sm col-md-6">
                <img class="img-fluid" src="assets/g3.png" alt="Imagen3">
            </div>
        </div>
    </div>
    <?php
    require('layouts/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>