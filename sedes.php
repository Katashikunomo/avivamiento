<!doctype html>
<html lang="en">

<head>
  <title>Avivamiento Internacional</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="css/styles.css" >
    <!-- Scrol BTN -->
    <script src="js/scrol-btn.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        .selected-date {
            background-color: #FF0000 !important;
            color: #ffffff;
        }
        
        .face-color:hover{
          background: linear-gradient(45deg, #1877f2 0%, #1877f2 30%, #3b5998 70%, #3b5998 100%);
          background-size: 200% 200%;
          animation: gradientAnimation 2.2s ease infinite;
        }

        @keyframes gradientAnimation {
          0% {
            background-position: 0% 50%;
          }
          50% {
            background-position: 100% 50%;
          }
          100% {
            background-position: 0% 50%;
          }
        }
        .insta-color:hover {
          background: linear-gradient(45deg, #f58529, #dd2a7b, #8134af, #515bd4, #2a77d0);
          background-size: 200% 200%;
          animation: gradientAnimation 3s ease infinite;
        }

        @keyframes gradientAnimation {
          0% {
            background-position: 0% 50%;
          }
          50% {
            background-position: 100% 50%;
          }
          100% {
            background-position: 0% 50%;
          }
        }
        .you-color{
          transition: all ease-in 1s !important;
        }
        .you-color:hover {
          background: linear-gradient(45deg, #FF0000, #FF0000, #FFFFFF);
          background-size: 200% 200%;
          animation: gradientAnimation 3s ease infinite ;
        }

        @keyframes gradientAnimation {
          0% {
            background-position: 0% 50%;
          }
          50% {
            background-position: 100% 50%;
          }
          100% {
            background-position: 0% 50%;
          }
        }
        .tw-color:hover {
          background: linear-gradient(45deg,#fff,#ffffff, #1da1f2, #1da1f2,#1da1f2,#3b5998 90% );
          background-size: 200% 200%;
          animation: gradientAnimation 2.5s ease infinite;
        }

        @keyframes gradientAnimation {
          0% {
            background-position: 10% 50%;
          }
          50% {
            background-position: 100% 50%;
          }
          100% {
            background-position: 0% 50%;
          }
        }

        .sp-color:hover {
          background: linear-gradient(45deg, #1DB954, #1DB954, #ffffff);
          background-size: 200% 200%;
          animation: gradientAnimation 3s ease infinite;
        }

        @keyframes gradientAnimation {
          0% {
            background-position: 0% 50%;
          }
          50% {
            background-position: 100% 50%;
          }
          100% {
            background-position: 0% 50%;
          }
        }

    </style>
<!-- Icons fontawesome -->
<script src="https://kit.fontawesome.com/bc365c36ca.js" crossorigin="anonymous"></script>
</head>

<body>


    <header class="">
            
                    <a class="logo" href="#"><img src="images/logo.svg" alt=""></a>
                    <ul class=" nav   fondo_menu justify-content-end"  >
                            <li class="nav-item  borde_blanco  d-none d-sm-inline-flex">
                                <a class="nav-link" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item  borde_blanco  d-lg-none d-md-inline-flex" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <a href="#tab5Id" class="nav-link ">Menu</a>
                            </li>
                            <!-- <li class="nav-item  borde_blanco d-none d-lg-inline-flex">
                                <a href="#tab5Id" class="nav-link " >Conocenos</a>
                            </li> -->
                            <li class="nav-item  borde_blanco d-none d-lg-inline-flex">
                                <a href="#tab5Id" class="nav-link activo" >Sedes</a>
                            </li>
                            <li class="nav-item  borde_blanco d-none d-lg-inline-flex">
                                <a href="#tab5Id" class="nav-link " >Educación</a>
                            </li>
                            <li class="nav-item  borde_blanco d-none d-lg-inline-flex">
                                <a href="#tab5Id" class="nav-link " >Contacto</a>
                            </li>
                    </ul>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header ">
        <h5 id="offcanvasRightLabel ">Avivamiento Internacional</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body fondo_menu">
        <ul class="nav fonmdo_menu inline_block w-50 centrar">
                            <li class="nav-item  borde_blanco  ">
                                <a class="nav-link" href="index.php">Inicio</a>
                            </li>
                            <!-- <li class="nav-item  borde_blanco ">
                                <a href="#tab5Id" class="nav-link " >Conocenos</a>
                            </li> -->
                            <li class="nav-item  ">
                                <a href="#tab5Id" class="nav-link activo" >Sedes</a>
                            </li>
                            <li class="nav-item  ">
                                <a href="#tab5Id" class="nav-link " >Educación</a>
                            </li>
                            <li class="nav-item  ">
                                <a href="#tab5Id" class="nav-link " >Contacto</a>
                            </li>
        </ul>
      </div>
    </div>
</div>
    </header>
    <div class="contenedor">
    </div>
    <div class="contenedor2">
    </div>
    
<main class="container w-100 ">
    </br></br></br>
    <div class="row container-fluid fondo centrar">
        <div class="container col-md-4 ">
            <h3 style="border-bottom:8px solid #212529;">Sede Interlomas</h3>    
            <p>
                Ubicada en: <br>
                Av. Jesús del Monte 269, Interlomas, Jesus del Monte, 52764 Méx.
            </p>
        </div>

        <div class="container-fluid col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15054.380290447421!2d-99.29442358563097!3d19.386678301248192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d206d95e83080b%3A0x4ac434a0156ca39e!2sAVIVAMIENTO%20INTERNACIONAL!5e0!3m2!1ses-419!2smx!4v1693438589801!5m2!1ses-419!2smx"  height="450" style="width:100% !important; max-width:600px !important; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <br><br><br>
    <hr style="border-bottom:4px solid #212529;">
    <div class="row container-fluid fondo centrar">
        <div class="container col-md-4 ">
            <h3 style="border-bottom:8px solid #212529;">Sede Anáhuac</h3>    
            <p>
                Ubicada en: <br>
                Lago Zirahuen 189, Anáhuac I Sección, Ciudad de México, CDMX
            </p>
        </div>

        <div class="container-fluid col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.1496652982335!2d-99.17508183894934!3d19.44265711321913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8b0ac157d75%3A0x84bc2feb6e8d1b7f!2sLago%20Zirahuen%20189%2C%20An%C3%A1huac%20I%20Secc.%2C%20An%C3%A1huac%20I%20Secc%2C%20Miguel%20Hidalgo%2C%2011320%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1693439187384!5m2!1ses-419!2smx" height="450" style="width:100% !important; max-width:600px !important; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</main>

<footer class="fondo_footer centrar" style="width: 100%; border-radius:10px !important;">
            <!-- place footer here -->
  <div class="container text-center text-light fondo_calendario_card">
    <h3>Siguenos en Redes sociales</h3>
    <br>
    <a class="text-light m-5 " href="https://www.facebook.com/aviinternacional" target="_blank">
      <i class="fa fa-facebook face-color" style="font-size:35px; margin: 2px; padding:5px; border-radius:3px;"></i>
    </a>
    <a class="text-light m-5" href="https://instagram.com/avinternacional_marlontager?igshid=MWZjMTM2ODFkZg==" target="_blank">
      <i class="fa fa-instagram insta-color" style="font-size:35px; margin: 2px; padding:5px; border-radius:3px;"></i>
    </a>
    <a class="text-light m-5 " href="https://www.youtube.com/channel/UCIqlmDB3IXuif3Nf6JoPlZQ" target="_blank">
      <i class="fa fa-youtube you-color" style="font-size:35px; margin: 2px; padding:5px; border-radius:3px;"></i>
    </a>
    <a class="text-light m-5" href="https://twitter.com/avivamientointl?lang=es" target="_blank">
      <i class="fa fa-twitter tw-color" style="font-size:35px; margin: 2px; padding:5px; border-radius:3px;"></i>
    </a>
    <a class="text-light m-5" href="https://open.spotify.com/show/4Oq6L9LjvMzUWgEfkz0kHp" target="_blank">
      <i class="fa fa-spotify sp-color" style="font-size:35px; margin: 2px; padding:5px; border-radius:3px;"></i>
    </a>
  </div>

  <br>
  <hr class="border-bottom">
            
  <div class="container ">

    <div class="row text-light">
      <div class="col-md-5">
        <h5>Información de Contacto</h5>
        <p></p>
        <p>Email: <a style="font-size:14px;" href="mailto:info@avivamientointernacional.website">info@avivamientointernacional.website</a></p>             
      </div>
      
      <div class="col-md-3">
        <h5>Enlaces Rápidos</h5>
        <ul class="list-unstyled">
          <li><i class="fa fa-angle-right"></i> <a href="index.php">Inicio</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="sedes.php">sedes</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="Educación">Educación</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="Educación">Aviso de privasidad</a></li>
        </ul>
      </div>

        <div class=" text-primary col-md-4">
          <div class="row">
            <div class="col-md-12">
              <div class="card ">
                <div class="card-body ">
                  <h5 class="card-title">Suscríbete a nuestro boletín</h5>
                  <p class="card-text">Recibe las últimas noticias y actualizaciones en tu bandeja de entrada.</p>
                    <form>
                      <div class="mb-3 container-fluid m-auto fondo_calendario_cards">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="Tu correo electrónico">
                      </div>
                      <button type="submit" class="btn btn-primary">Suscribirse</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>              
    </div>
  </div>
            
  <hr>
  <p class="text-center text-light">&copy; 2023 Todos los derechos reservados</p>

</footer>

<button id="scrollButton" class="scroll-button" onclick="scrollToTop()" style="width:50px; height:50px;"><img src="images/rrow.svg" alt="" srcset=""></button>
  
    <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
<!-- Scrol BTN -->

<script src="js/scrol-btn.js"></script>
<!-- Icons fontawesome -->
<script src="https://kit.fontawesome.com/bc365c36ca.js" crossorigin="anonymous"></script>


</body>

</html>
