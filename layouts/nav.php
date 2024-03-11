<nav class="navbar navbar-expand-lg" style="background-color: black;">
    <div class="container-fluid" style="background-color: black;">
        <a href="<?php echo $ruta . 'index.php'; ?>">
            <img class="img-fluid mx-3" src="<?php echo $ruta . 'assets/logo1-bg.png'; ?>" alt="logo" width="50px">
        </a>
        <a class="navbar-brand" style="color: rgb(51, 255, 0); font-family: 'Nerko One', cursive; font-size: 27px;" href="<?php echo $ruta . 'index.php'; ?>">GECKOGAMING</a>
        <button class="navbar-toggler" style="background-color: rgb(51, 255, 0);" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" style="color: white; font-size: 22px;" aria-current="page" href="<?php echo $ruta . 'components/productos.php'; ?>">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white; font-size: 22px;" aria-current="page" href="#">Carrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white; font-size: 22px;" aria-current="page" href="<?php echo $ruta . 'components/nosotros.php'; ?>">Sobre Nosotros</a>
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
<hr style="color: rgb(51, 255, 0); margin: 0;">