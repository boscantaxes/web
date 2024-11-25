<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'r_metadata.php'; ?> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="main.css">

    <?php include 'r_title.php'; ?>
  </head>
  <body>
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
   
    <!-- HEADER INCLUDE-->
    <?php include 'r_header.php'; ?>       
      
    <!--========================================================== -->
                <!-- LISTA DE PREGUNTAS FRECUENTES-->
    <!--========================================================== -->
  
  <!-- Titulo Blog -->
    
    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <h1 class="p-3 fs-2" style="color: #fff; background-color: #2d3f5c; 
            border-radius: 10px;">Blog / Publicaciones</h1>
        <p class="p-3  fs-4">
        Aquí está la lista de respuestas a las preguntas frecuentes, 
        y artículos del blog, haz clic en el botón azul de la tarjeta 
        para acceder a la información.        
        </p>   
    </section>

  <!--   Tarjetas-->
      <div class="container-card">
        <div class="card">
          <figure>
            <img
              src="https://cdn.pixabay.com/photo/2015/06/24/16/36/office-820390_1280.jpg"
            />
          </figure>
          <div class="contenido-card">
            <h3>Diseño Gràfico</h3>
            <p>
              <b>Podemos crear la identidad corporativa de tu empresa. Diseño ,
              Maquetación de folletos, Catálogos, Papelería y mucho más.</b>
            </p>
            <a href="http://localhost:3000/u_blog_01.php"><b>Leer Màs</b></a>
          </div>
        </div>
        <div class="card">
          <figure>
            <img
              src="https://cdn.pixabay.com/photo/2015/11/05/09/52/touch-screen-1023966_1280.jpg"
            />
          </figure>
          <div class="contenido-card">
            <h3>Gestión de Redes</h3>
            <p>
              <b>Nosotros creamos y optimizamos tus perfiles en las Redes Sociales.
              Importantes para que tu presencia online sea completa.</b>
            </p>
            <a href="http://localhost:3000/u_blog_02.php"><b>Leer Màs</b></a>
          </div>
        </div>
        <div class="card">
          <figure>
            <img
              src="https://cdn.pixabay.com/photo/2021/08/05/12/36/software-development-6523979_1280.jpg"
            />
          </figure>
          <div class="contenido-card">
            <h3>Desarrollo Web</h3>
            <p>
              <b>Creamos tu página web utilizando las últimas tecnologías
              disponibles. Una Web adaptativa a tu móvil o Tablet y con un gestor
              de contenido fácil.</b>
            </p>
            <a href="http://localhost:3000/u_blog_03.php"><b>Leer Màs</b></a>
          </div>
        </div>
      </div>
      <!--Fin   Tarjetas-->      

<!--========================================================== -->
    <!-- SECCIÓN BOTONES: BLOG , PREGUNTAS FRECUENTES , INICIO -->
<!--========================================================== -->
        
<?php
    include 'r_3_botones.php';
    ?>
<br>
<br>       
<!--========================================================== -->
                        <!--CONTACT FORM-->
<!--========================================================== -->

<?php
    // Incluye el archivo del contact form
    include 'r_contact_form.php';
    ?>

<!--========================================================== -->
                        <!--FOOTER-->
<!--========================================================== -->

    <!-- FOOTER INCLUDE -->
    <?php include 'r_footer.php'; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js"></script>
  </body>
</html>
 