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
    
    <?php
      include 'r_header.php';
    ?>
                
    <!--========================================================== -->
                    <!-- BLOG RESPUESTA 01 -->
    <!--========================================================== -->

    <!-- Contenedor principal -->
    <div class="container my-5">
        <!-- Título del Blog -->
        <header class="text-center">
            <h1 class="blog-title">Título 1</h1>
        </header>

        <!-- Sección de Video -->
        <section class="video-container text-center">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="player"
                    src="https://www.youtube.com/embed/2h9CqRlHzrc?si=dvDWCIGpJbLRxaDA" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                    gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>  
            </div>
        </section>

        <!-- Descripción del Blog -->
        <section class="blog-content mt-4">
          <p class="fs-5 text-body"><strong>Subtitulo 01: </strong>lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eos, eum deserunt molestias unde dolor ea pariatur fugiat amet, id ipsa! Corrupti corporis, eum perferendis numquam nobis perspiciatis repudiandae odio.
          Error, eligendi! Dignissimos voluptatibus assumenda suscipit, veritatis possimus, eveniet nobis neque qui sit labore, cum fuga hic ullam officiis. A dolor accusantium, perferendis natus doloribus placeat obcaecati illum consequatur ipsa.
          Inventore ipsum mollitia ex officiis maiores quos sit nesciunt enim, ut, dolore ad excepturi possimus, aspernatur iure nobis eius? Ratione consectetur iure harum assumenda quia. In perferendis totam delectus ut?
          Iusto commodi eveniet aut nisi. Amet minus veritatis eligendi alias doloribus, voluptas maxime voluptatibus aperiam tenetur fugiat dolore, magnam quibusdam! Quo adipisci iste vel voluptatum magni exercitationem cupiditate omnis cumque.
          Quasi quod adipisci reprehenderit perferendis nobis dolorem eum. Ea, sit non consectetur sapiente, optio iusto tenetur similique facere, totam deleniti itaque nisi. Quam reprehenderit at molestias nemo blanditiis quasi quisquam?
          </p>
        </section>
       
<!--========================================================== -->
    <!-- SECCIÓN BOTONES: BLOG , PREGUNTAS FRECUENTES , INICIO -->
<!--========================================================== -->
        
<?php
    include 'r_3_botones.php';
    ?>

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
    <?php
    include 'r_footer.php';
    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js"></script>
  </body>
</html>
 