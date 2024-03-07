<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&display=swap">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: black;">
        <div class="container-fluid" style="background-color: black;">
            <a class="navbar-brand" style="color: rgb(51, 255, 0); font-family: 'Nerko One', cursive; font-size: 27px;" href="#">GECKOGAMING</a>
            <button class="navbar-toggler" style="background-color: rgb(51, 255, 0);" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white; font-size: 22px;" aria-current="page" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white; font-size: 22px;" aria-current="page" href="#">Carrito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white; font-size: 22px;" aria-current="page" href="#">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="color: rgb(51, 255, 0); font-size: 22px;" aria-current="page" href="#">Perfil</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
                    <button class="btn btn-outline-success" style="background-color: rgb(51, 255, 0); color: black; font-size: 20px;" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</body>

</html>