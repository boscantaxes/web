<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="main.css">

    <!--?php include 'r_title.php'; ?>-->
</head>
<body>
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
        
<?php
// Obtén el nombre de la página actual
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-md-top p-3 mt-2 mb-2" id="menu">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="http://localhost:3000/index.php">
            <img src="z_logo.PNG" alt="Logotipo MyWeb" width="40" height="40" class="d-inline-block align-text-top me-2">
            <span class="fs-5 text-primary fw-bold">MyWeb</span>
        </a>
        <button class="navbar-toggler navbar-toggler-custom" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-collapse-custom" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="http://localhost:3000/index.php">Inicio</a>
                </li>
                <!-- Otros enlaces aquí -->
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'servicios.php') ? 'active' : ''; ?>" href="http://localhost:3000/servicios.php#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'nosotros.php') ? 'active' : ''; ?>" href="http://localhost:3000/nosotros.php#nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'contactanos.php') ? 'active' : ''; ?>" href="http://localhost:3000/contactanos.php#contactanos">Contáctanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'blog.php') ? 'active' : ''; ?>" href="http://localhost:3000/blog.php#blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'preguntas_frecuentes.php') ? 'active' : ''; ?>" href="http://localhost:3000/preguntas_frecuentes.php#preguntas_frecuentes">Preguntas Frecuentes</a>
                </li>
            </ul>
            <form class="d-flex">
                <a href="https://wa.link/nomq2p" target="_blank" class="btn btn-primary btn-primary-outline-success text-white">
                    WhatsApp
                </a>
            </form>
        </div>
    </div>
</nav>
 


<!--========================================================== -->
                        <!-- BREADCRUMB -->
<!--========================================================== -->

<nav aria-label="breadcrumb" style="background-color: #2d3f5c; border-top: 5px solid #cca64e;" 
class="text-white p-2 mt-2 mb-2"> 
    <div class="container d-flex align-items-center justify-content-between">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="http://localhost:3000/index.php" class="text-white fw-bold">Inicio</a></li>
            <?php if ($current_page == 'servicios.php') : ?>
                <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Servicios</li>
            <?php elseif ($current_page == 'nosotros.php') : ?>
                <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Nosotros</li>
            <?php elseif ($current_page == 'contactanos.php') : ?>
                <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Contáctanos</li>
            <?php elseif ($current_page == 'blog.php') : ?>
                <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Blog</li>
            <?php elseif ($current_page == 'preguntas_frecuentes.php') : ?>
                <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Preguntas Frecuentes</li>
            <?php endif; ?>
        </ol>
        <form class="ms-auto d-block d-md-none">
            <a href="https://wa.link/nomq2p" target="_blank" class="btn btn-primary btn-primary-outline-success text-white"><b>WhatsApp</b></a>
        </form>
    </div>
</nav>
 
</body>
</html>
