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
    <link rel="stylesheet" href="css/styles-card.css" >
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


    <header style="transition: all  0.5s !important; position:fixed; top:0; width:100%; z-index:100;">
            
      <a class="logo" href="#"><img src="images/logo.svg" alt=""></a>
      <ul class=" nav   fondo_menu justify-content-end"  >
        <li class="nav-item  borde_blanco  d-none d-sm-inline-flex">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item  borde_blanco  d-lg-none d-md-inline-flex" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <a href="#tab5Id" class="nav-link ">Menu</a>
        </li>
        <li class="nav-item  borde_blanco d-none d-lg-inline-flex">
            <a href="#tab5Id" class="nav-link " >Ministerio</a>
        </li>
        <li class="nav-item  borde_blanco d-none d-lg-inline-flex">
            <a href="educacion.html" class="nav-link " >Educación</a>
        </li>
        <li class="nav-item  borde_blanco d-none d-lg-inline-flex">
          <a href="#tab5Id" class="nav-link" >Sedes</a>
        </li>
        <li class="nav-item  borde_blanco d-none d-lg-inline-flex">
          <a href="#tab5Id" class="nav-link activo" >Contacto</a>
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
                <a href="index.php" class="nav-link ">Inicio</a>
              </li>
                                  <!-- <li class="nav-item  borde_blanco ">
                                      <a href="#tab5Id" class="nav-link " >Conocenos</a>
                                  </li> -->
                                  <li class="nav-item  ">
                                    <a href="#tab5Id" class="nav-link " >Ministerio</a>
                                  </li>
                                  <li class="nav-item  ">
                                    <a href="educacion.html" class="nav-link " >Educación</a>
                                  </li>
              <li class="nav-item  ">
                <a  class="nav-link " href="sedes.php">Sedes</a>
              </li>
              <li class="nav-item  ">
                <a href="#tab5Id" class="nav-link activo" >Contacto</a>
              </li>
            </ul>
          </div>
        </div>
    </div>
      </div>
    </header>
    <div class="contenedor">
    </div>
    <div class="contenedor2">
    </div>
    
<main class="container w-100 " style="margin-top:130px !important;">
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section fondo_calendario">Contactanos</h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-10 col-md-12">
<div class="wrapper">
<div class="row no-gutters">
<div class="col-md-7 d-flex align-items-stretch">
<div class="contact-wrap w-100 p-md-5 p-4">
<h3 class="mb-4"></h3>
<div id="form-message-warning" class="mb-4"></div>
<div id="form-message-success" class="mb-4">
Your message was sent, thank you!
</div>
<form method="POST" id="contactForm" name="contactForm">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="email" class="form-control" name="email" id="email" placeholder="Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Mnesaje"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="submit" value="Enviar Mensaje" class="btn fondo_cards text-white">
<div class="submitting"></div>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="col-md-5 d-flex align-items-stretch">
<div class="info-wrap  fondo_calendario w-100 p-lg-5 p-4">
<h3 class="mb-4 mt-md-4">Contacto</h3>
<div class="dbox w-100 d-flex align-items-start">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-map-marker"></span>
</div>
<div class="text pl-3">
<p><span>Dirección:</span> Av. Jesús del Monte 269, Interlomas, Jesus del Monte, 52764 Jesús del Monte, Méx.</p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-phone"></span>
</div>
<div class="text pl-3">
<p><span>Telefono:</span> <a href="tel:+52 55 1693 3324">55 1693 3324</a></p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-paper-plane"></span>
</div>
<div class="text pl-3">
<p><span>Email:</span> <a href="mailto:info@avivamientointernacional.website"><span >info@avivamientointernacional.website</span></a></p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-globe"></span>
</div>
<div class="text pl-3">
<!-- <p><span>Website</span> <a href="#">yoursite.com</a></p> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</main>

<footer class="fondo_footer centrar" style="width: 100%; border-radius:10px !important; color:#fff !important;">
            <!-- place footer here -->
  <div class="container text-center text-white fondo_calendario_card">
    <h3  class="text-white">Siguenos en Redes sociales</h3>
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
      <div class="col-md-5 text-white" >
        <h5 class="text-white">Información de Contacto</h5>
        <p></p>
        <p class="text-white">Email: <a style="font-size:14px;" href="mailto:info@avivamientointernacional.website">info@avivamientointernacional.website</a></p>             
      </div>
      
      <div class="col-md-3">
        <h5 class="text-white">Enlaces Rápidos</h5>
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

<script src="js/nav-scroll.js"></script>
</body>

</html>
