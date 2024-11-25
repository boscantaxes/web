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
  
  <!--Incluye el archivo del header-->
    
    <?php include 'r_header.php';?>      
    
   
    <!--========================================================== -->
                <!-- LISTA DE PREGUNTAS FRECUENTES-->
    <!--========================================================== -->


    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
    <h1 class="p-3 fs-2" style="color: #fff; background-color: #2d3f5c; 
            border-radius: 10px;">Preguntas Frecuentes</h1>
     <p class="p-3  fs-4">
     Aquí está la lista de preguntas frecuentes, haz clic en cualquiera de 
     ellas para acceder directamente a la respuesta en el Blog.        
     </p>   
    </section>

    <div class="container mt-2">
        <div class="list-group">
          <a href="/blog" class="list-group-item list-group-item-action">Título de Pregunta 1</a>
          <a href="/blog" class="list-group-item list-group-item-action">Título de Pregunta 2</a>
          <a href="/blog" class="list-group-item list-group-item-action">Título de Pregunta 3</a>
          <a href="/blog" class="list-group-item list-group-item-action">Título de Pregunta 4</a>
          <a href="/blog" class="list-group-item list-group-item-action">Título de Pregunta 5</a>
        </div>
    </div>      

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

    <?php
    // Incluye el archivo del footer
    include 'r_footer.php';
    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js"></script>
  </body>
</html>
 