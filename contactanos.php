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
                        <!-- INTRODUCCION DE SERVICIOS-->
    <!--========================================================== -->

    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <h1 class="p-3 fs-2" style="color: #fff; background-color: #2d3f5c; 
            border-radius: 10px;">Contáctanos</h1>
        <p class="p-3  fs-4">
        Aquí está la lista de respuestas a las preguntas frecuentes, 
        y artículos del blog, haz clic en el botón azul de la tarjeta 
        para acceder a la información.        
        </p>   
    </section>    
   
   <!--========================================================== -->
                        <!-- TIPOS DE SERVICIOS-->
    <!--========================================================== -->


<section class="w-100">
    <div class="row w-75 mx-auto" id="servicios-fila-1">       
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
            <img src="desarrollo.png" alt="desarrollo"   width="180" height="160">

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1">Desarrollo</h3>
                <p class="px-4">Desarrollo de aplicaciones WEB, moviles y ecommerce</p>
            </div>

        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
            <img src="./img/concepto.png" alt="concepto" width="180" height="160">

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Branding</h3>
                <p class="px-4">Diseño, Conceptualización e Implementación de productos digitales</p>
            </div>
        </div>   
    </div>
    
    <div class="row w-75 mx-auto mb-5" id="servicios-fila-2">       
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
            <img src="comunicaciones.png" alt="comunicaciones" width="180" height="160">

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1">Comunicaciones</h3>
                <p class="px-4">Desarrollo  del plan de comunicaciones para sus clientes.</p>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
            <img src="./img/seo.png" alt="seo" width="180" height="160" >

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1">SEO</h3>
                <p class="px-4">Analizamos la eficiencia y optimizamos los sitios WEB</p>
            </div>
        </div>   
    </div>
</section>

<!--========================================================== -->
                        <!-- SECCION ACERCA DE NOSOTROS-->
<!--========================================================== -->

<!--========================================================== -->

<!--========================================================== -->

<section>
    <div id="local" class="border-top border-2 d-flex justify-content-between align-items-start">
        <div class="wrapper-local w-50">
            <h2>Ubicado en Miami, Florida</h2>
            <h2 class="text-primary mb-4" id="typewriter"></h2>
            <p class="fs-5 text-body">
                Elijimos Miami para nuestra oficina con el objetivo de estar cerca a nuestros clientes. Estamos ubicados en Brickell, el corazón y el centro financiero de Miami, cerca de los mejores restaurantes, tiendas y tan solo 15 minutos de las playas. ¡Visítennos y no se arrepentirán!
            </p>
            <section class="d-flex justify-content-start" id="numeros-local">
                <div>
                    <p class="text-primary fs-5">200</p>
                    <p>Días de Sol</p>
                </div>
                <div>
                    <p class="text-primary fs-5">100%</p>
                    <p>Aprobado</p>
                </div>
                <div>
                    <p class="text-primary fs-5">24 °C</p>
                    <p>Temperatura</p>
                </div>
            </section>
        </div>
        <div class="mapa w-50 ms-4"></div>
    </div>
</section>
              

<!--========================================================== -->
                        <!-- SECCION CONTACTOS-->
<!--========================================================== -->

<section id="seccion-contacto" class="border-bottom border-secondary border-2">
  <div id="bg-contactos">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1b2a4e" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
  </div>


<!--========================================================== -->
                      <!-- CONTENEDOR DEL FORMULARIO -->
<!--========================================================== -->

  <div class="container  border-top border-primary " style="max-width: 500px" id="contenedor-formulario">
      <div class="text-center mb-4" id="titulo-formulario">
        <div><img src="support.png" alt="" class="img-fluid ps-5"></div>
        <h2>Contactanos</h2>
        <p class="fs-5">Estamos aqui para hacer realidad de tus proyectos</p>
      </div>

     

      <form   method="POST" data-netlify="true" action="#">     
            <div class= "mb-3">           
              <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com">
            </div>
 
          
            <div class="mb-3">            
              <input type="input" class="form-control" id="name" name="name" placeholder="John Doe">
            </div>
      

            <div class="mb-3">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Teléfono">
            </div>

          <div class="mb-3">       
            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
          </div>

          <div class="mb-3">
            <button type="submit" class=" btn btn-primary w-100 fs-5">Enviar Mensaje</button>
          </div>
      </form>
  
  </div>
</section>


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

