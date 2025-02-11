<?php 
require_once('./includes/database_home.php'); 
mysqli_set_charset($mysqli, 'utf8');
$imagen_banner_array = get_image_page();
$imagen_banner = $imagen_banner_array['dt_nombre'];
$var_reg=2;
if (isset($_GET['dato'])) {
  $var_reg = $_GET['dato'];
}
$imagen_quienes_somos_array = get_image_page_quienesomos($var_reg);
$texto_quienes_somos_array = get_image_page_proposito_text($var_reg);
$imagen_quienes_somos = $imagen_quienes_somos_array['dt_nombre'];
$texto_quienes_somos = $texto_quienes_somos_array['dt_texto'];
$numero = random_int(1, 31102);
$versiculo_array = get_versiculo($numero); 
$versiculo_text = $versiculo_array['texto'];
$versiculo_book = $versiculo_array['name'];
$versiculo_chapter = $versiculo_array['chapter'];
$versiculo_verse = $versiculo_array['verse'];
$selectedDates = array();
$selectedDates = getDataCalendar();
$array_fechas = getCountDates();



?> 

<!doctype html>
<html lang="en">

<head>
  <title>Avivamiento Internacional - Marlon Tager Ministries</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Avivamiento Internacional es una congregación que busca alinear su propósito con la voluntad de Dios en Cristo Jesús. Su enfoque principal es el avivamiento espiritual, que se refiere a un renacimiento o revitalización profunda de la fe y la relación con Dios en la vida de los creyentes. La congregación busca vivir de acuerdo con los principios y enseñanzas de Jesucristo, y su objetivo es experimentar una renovación espiritual tanto a nivel individual como comunitario.">
  <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="css/styles.css" >
    <!-- Estilos personalizados footer-->
    <link rel="stylesheet" href="css/styles-footer.css" >
    <!-- Scrol BTN -->
    <script src="js/scrol-btn.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- Iconos de fontawesome -->
  <script src="https://kit.fontawesome.com/bc365c36ca.js" crossorigin="anonymous"></script>
  <!-- Alertas sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    
  <style>
    .mi-clase-boton-confirmar {
      background-color: #007bff !important;
      border-radius: 10px !important;
      color: #FFFFFF !important;
      box-shadow: 1px 0px 8px #000 !important;
    }
    .cards_comunidad{
      border: 1px solid #000 !important; 
      max-width: 240px !important; 
      height:240px !important; 
      margin:15px !important;
      border-radius: 10px;
      background: #051E5E;
      margin-top: 80px !important;
      box-shadow: 0 0 4px #000;
    }

    .cards_comunidad img{
      margin: 10px auto;
      max-width: auto; 
      height:220px !important; 
    }
    
    .cards_comunidad:hover{
      box-shadow: 0 5px 50px #fff ;
    }

    .cards_comunidad-texto{
      font-size: 28px;
      font-weight:400;
      backdrop-filter: blur(10px); 
      border-radius:10px; 
      box-shadow: 0 1px 10px #fff; 
      color:#fff; 
      margin-top:-30px;
    }

    </style>
    <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-GLH9NJ7QJ3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-GLH9NJ7QJ3');
  </script>
</head>

<body>


<header style="transition: all  0.5s !important; position:fixed; top:0; width:100%; z-index:100;">
            
            <a class="logo" href="#"><img src="images/logo.svg" alt=""></a>
            <ul class=" nav   fondo_menu justify-content-end"  >
              <li class="nav-item  borde_blanco  d-none d-sm-inline-flex">
                <a class="nav-link " href="index.php">Inicio</a>
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
                <a href="sedes.php" class="nav-link " >Sedes</a>
              </li>
              <li class="nav-item  borde_blanco d-none d-lg-inline-flex">
                <a href="contacto.php" class="nav-link " >Contacto</a>
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
                      <a href="index.php" class="nav-link activo">Inicio</a>
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
                      <a href="contacto.php" class="nav-link " >Contacto</a>
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
  
  <div style=" background:#ececf4; position:relative; height:100vh;" >
    <div style="position:absolute !important; top:0; left:0; height:100%; overflow:hidden;">
      <video src="images/fondoBG.mp4" autoplay="true"  muted="true" loop="true" style="position:relative; top:0%; right:-10%; object-fit:cover; width:100%; height:100%; transform: translate(-10%, 0%); "></video>
    </div>
  
  <div class="fondo_banner" style="height:100vh !important; background-position:cover; background-position: center; ">
  
  <div class="row container fondo centrar pt-5" style="padding-top: 120px !important; z-index:100 !important;">
        <!--Card que contiene la Imagen y Frase-->
        <div class=" row centrar ">
          <!-- Imagen-->
          <div class=" col-sm-12 col-md-8">
            <div class="card border">
              <div class="">
                <h3 class="card-title text-white"></h3>
                <img class="parallax" src="./admin/img/avivamiento/banner/<?= $imagen_banner ?>" alt="" srcset="" width="100%" style="border-radius:10px;">
              </div>
            </div>
          </div>
          <!-- Fin Imagen-->
          <!-- Frase-->
          <div class="col-sm-12 col-md-4 centro" style="backdrop-filter:blur(10px);">
            <div class=" text-center">
              <div class="card-body">
                <h3 class="card-title mt-5"><?=$versiculo_text;?></h3>
                <!-- <h3 class="card-title">En el principio creó Dios los cielos y la tierra.</h3> -->
                <p class="card-text"><?=$versiculo_book;?> <?=$versiculo_chapter;?>:<?=$versiculo_verse;?> </p>
              </div>  
              <br><br><br>  
              <div class="card-body">
                <div class="bg-primary text-white p-3 rotate-15 d-inline-block my-4" style="transform: rotate(-1deg); position: absolute; border-radius:0px 90px 0px 90px; margin-left:15px; margin-top:50px !important; padding:6px !important;  "><a href="#calendario" style="color:#fff;"><?php echo $array_fechas;?> proximas fechas</a></div>
                  <a name="" id="" class="boton fondo_cards text-white " style="padding-bottom:30px !important; padding-right:35px !important;" href="#calendario" role="button"> <img src="images/calendar.svg" alt="" srcset="" width="10%"><i>-</i> Calendario</a>
                  <br><br><br>
                </div>
              </div>
          </div>
          <!--Fin Frase-->
        </div>
    </div>
  </div>
  </div>



  <div  style="margin-top: 120px; min-height: 50vh; /*background:#051E5E;*/ background:linear-gradient( #051E5E,#fff); box-shadow: 0 2px 4px grey; text-align: center;" class="parallax" >
    <div class="container pt-5">
      <h2 class="mt-2 text-light" style=" border-bottom: 2px solid #fff;" >Una comunidad unida, en busca de mostrar 
        el camino la verdad y la vida.</h2>
        <!-- <hr style="color:#fff;"> -->
      <div class="row  " style="aling-items:center; justify-content:center;">
          <div class="cards_comunidad" style="    background-image: url(assets/carousel/comunidad.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <!-- <img src="" alt="" width="auto"> -->
            <p class="cards_comunidad-texto">Koinonía</p>
          </div>
          <div class="cards_comunidad" style="    background-image: url(assets/carousel/sanidad.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <!-- <img src="" alt="" width="auto"> -->
            <p class="cards_comunidad-texto">Sanidades</p>
          </div>
          <div class="cards_comunidad" style="    background-image: url(assets/carousel/milagro.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
          <p class="cards_comunidad-texto">Milagros</p>
          </div>
          <div class="cards_comunidad" style="    background-image: url(assets/carousel/avivamientointernacional.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <p class="cards_comunidad-texto">Avivamiento</p>
          </div>
      </div>
      <!-- <hr style="color:#fff;"> -->
    </div>
</div>
  <main class="container w-100 ">
    <!--Quienes somos, Proposito, Visión-->
    <!-- Nav tabs -->
    <a name="ancla" id="ancla"></a>
    <ul class="nav nav-tabs fondo_cards-activos" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <!-- <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Quienes Somos</button> -->
        <a class="nav-link <?php if($var_reg==2){echo 'active';}?>"   href="index.php?dato=2#ancla">Quienes Somos</a>
      </li>
      <li class="nav-item" role="presentation">
        <!-- <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Proposito</button> -->
        <a class="nav-link <?php if($var_reg==3){echo 'active';}?>"   href="index.php?dato=3#ancla">Proposito</a>
      </li>
      <li class="nav-item" role="presentation">
        <!-- <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Visión</button> -->
        <a class="nav-link <?php if($var_reg==4){echo 'active';}?>"   href="index.php?dato=4#ancla">Visión</a>
      </li>
    </ul>
    <!-- Contenido de tabs -->
    <!--Quienes somos, Proposito, Visión-->
    <?php if ($var_reg == 2) { ?>
      <a name="ancla" id="ancla"></a>
      <div class="tab-content ">
        <div class="tab-pane fondo_cards-activos-contenedor active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="container-fluid text-white ">
            <div class="row">
              <div class="col-md-6 centrar">
                  <p class="centrar">
                  <?= $texto_quienes_somos;?>
                  </p>       
              </div>
              <div class="col-md-6">
              <img src="./admin/img/avivamiento/banner/<?=$imagen_quienes_somos; ?>" alt="" srcset="" width="100%" style="border-radius:10px;">
              </div>
            </div>
          </div> 
        </div>
      </div>
    <?php }elseif ($var_reg == 3) { ?>
      <div class="tab-content ">
        <div class="tab-pane fondo_cards-activos-contenedor active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="container-fluid text-white ">
            <div class="row">
              <div class="col-md-6 centrar">
                  <p class="centrar">
                  <?= $texto_quienes_somos;?>
                  </p>       
              </div>
              <div class="col-md-6">
              <img src="./admin/img/avivamiento/banner/<?=$imagen_quienes_somos; ?>" alt="" srcset="" width="100%" style="border-radius:10px;">
              </div>
            </div>
          </div> 
        </div>
      </div>
    <?php }elseif ($var_reg == 4 ) { ?>
      <div class="tab-content ">
        <div class="tab-pane fondo_cards-activos-contenedor active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="container-fluid text-white ">
            <div class="row">
              <div class="col-md-6 centrar">
                  <p class="centrar">
                  <?= $texto_quienes_somos;?>
                  </p>       
              </div>
              <div class="col-md-6">
              <img src="./admin/img/avivamiento/banner/<?=$imagen_quienes_somos; ?>" alt="" srcset="" width="100%" style="border-radius:10px;">
              </div>
            </div>
          </div> 
        </div>
      </div>
    <?php } ?>

    <!-- Calendario -->
    <br></br></br><br>
    <a id="calendario" name="calendario"></a>
    <div class="container fondo_calendario">
      <h4 class="calendario_h4">Calendario</h4>
      <div class="container mt-5">
          <h2>Calendario con Fechas Seleccionadas</h2>
          <div class="row">
              <div class="col-md-12">
                  <div class="d-flex justify-content-between mb-3">
                      <button class="btn btn-primary" id="prev-month">Mes Anterior</button>
                      <h3 id="current-month">Mes Actual</h3>
                      <button class="btn btn-primary" id="next-month">Mes Siguiente</button>
                  </div>
                  <table class="table table-bordered text-light " id="calendar-table">
                      <thead>
                          <tr>
                              <th>D</th>
                              <th>L</th>
                              <th>M</th>
                              <th>M</th>
                              <th>J</th>
                              <th>V</th>
                              <th>S</th>
                          </tr>
                      </thead>
                      <tbody>
                          <!-- Las celdas del calendario se generan dinámicamente en el script JavaScript -->
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>


    <div class="container justify-content-center">
      <div class="row text-center justify-content-center" >
        <!-- Card que sirve para los eventos en un ciclo dependiendo de los eventos registrados -->
        <?php 
          // require("../controller/conexion.php");
          $result = eventos_fecha();
          // $result = $result_fech->fetch_assoc();
          foreach ($result as $value) {
        ?>
          <div class="card shadow col-md-5 col-lg-3 m-2">
            <div class="card-header py-3">
              <h3 class="fondo_calendario"><?php echo $value['mensaje'];?></h3>
            </div>
            <div class="card-body">
              <div class="container-fluid m-auto fondo_calendario_cards" style="height:100%;">
                <div class="mb-3 w-100 m-auto" style="border-radius: 2px;">
                  <!-- Vista de Imagen -->
                  <div  class="container-fluid m-auto" style="border-radius: 30px;  max-width: 900px; margin:auto;  heigth: 700px; ">
                    <img class="img-fluid img-thumbnail" src="admin/img/avivamiento/calendario/<?=$value['nom_imagen'];?>" alt="" style="width:auto;">
                  </div>
                  <div  class="container-fluid m-auto bg-primary text-light" style="border-radius: 30px;  max-width: 900px; margin:auto;  heigth: 700px; ">
                    Fehca <?php echo $value['fecha'];?>
                  </div>
                  <div class="container">
                    <div class="form-check"> 
                      <?php if ($value['tp_status'] == 1) {?>  
                        <input class="form-check-input" type="radio" name="" id="" checked >
                        <label class="form-check-label" for="">
                          Activo
                        </label>
                      <?php }else{?>
                        <input class="form-check-input" type="radio" name="" id="" disabled>
                        <label class="form-check-label" for="">
                          Inactivo
                        </label>
                        <form action="" method="POST">
                          <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$value['id'];?>" hidden>
                            <div class="mb-3">
                              <!-- <label for="" class="form-label">Activar</label> -->
                              <!-- <select class="form-select form-select-lg" name="activar" id="activar">
                                    <option selected disabled>Selecciona</option>
                                    <option value="1">Activar</option>
                                  </select> -->
                              <!-- <button type="submit" class="btn btn-primary btn-sm">activar</button> -->
                            </div>
                        </form>
                      <?php }?>
                                                                                
                    </div>
                  </div>

                  <div class="container mt-4">
                      <!-- Cambiarlo por un modal -->
                        <!--  Modal trigger button  -->
                        <button type="button" class="btn fondo_calendario_a" data-bs-toggle="modal" data-bs-target="#modalId<?= $value['id']; ?>">
                          Recibir notificación acerca de este evento
                        </button>
                        
                        <!-- Modal Body-->
                        <div class="modal fade"  style="backdrop-filter:blur(10px) !important;" id="modalId<?= $value['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                          <div class="modal-dialog" role="document" >
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId<?= $value['id']; ?>"><?= $value['mensaje']; ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                              <div class="modal-body" style="backdrop-filter:blur(10px) !important;">
                                <div class="container-fluid">
                                  <h4>Ingresa los siguientes campos para recibir información acerca de este evento</h4>
                                  <form action="formulario.php" method="POST">
                                    <div class="mb-3">
                                      <input type="text" name="idevento" id="idevento" value="<?= $value['id']; ?>" hidden>
                                      
                                      <label for="" class="form-label">Nombre <b style="color:red;">*</b></label>
                                      <input type="text"
                                        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="" required>
                                    </div>
                                    <div class="mb-3">
                                      <label for="" class="form-label">Correo<b style="color:red;">*</b></label>
                                      <input type="email"
                                        class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="" required>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="aceptado" name="terminos" id="terminos" required>
                                      <label class="form-check-label" for="terminos" required>
                                        <a href="#">Aviso de Privacidad</a>
                                      </label>
                                    </div>
                                    <button type="submit" class="btn fondo_calendario_a">Enviar</button>
                                    <br>
                                  </form>
                                </div>
                              </div>
                              <div class="modal-footer" style="backdrop-filter:blur(10px) !important;">
                                <button type="button" class="btn fondo_calendario_a" data-bs-dismiss="modal">cerrar ventana</button>
                              </div>
                            </div>
                          </div>
                        </div>
                
                      <!-- <a name="" id="" class="btn fondo_calendario_a" href="#" role="button">Recibir notificación acerca de este evento</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>                
    </div>

    <!-- Carousel -->
    <!-- <div id="carouselimgs">
      <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
          <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
          <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="image-carousel">
              <img src="assets/carousel/quienes_somos.jpg" class="w-100 d-block" alt="First slide">
              <div class="text-image">
                ptext
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="image-carousel">
              <img src="assets/carousel/vision.jpg" class="w-100 d-block" alt="Second slide">
              <div class="text-image">
                ptext
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="image-carousel">
              <img src="assets/carousel/vision.jpg" class="w-100 d-block" alt="Third slide">
              <div class="text-image">
              ptext
              </div>
            </div>
            
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
          </button>
      </div>
    </div> -->
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

<?php
   if (isset($_REQUEST['existe'])) {
?>
 <script>
        // function mostrarPopup() {
            Swal.fire({
                icon: 'danger',
                title: 'El correo ya se ha registrado para este evento',
                showConfirmButton: true,
                customClass: {
               confirmButton: 'mi-clase-boton-confirmar'
               },
                timer: 13500
            });
        // }
    </script>
<?php
   }elseif (isset($_REQUEST['formulario'])) {
    ?>
     <script>
        // function mostrarPopup() {
            Swal.fire({
                icon: 'danger',
                title: '¡Te has registrado correctamente para este evento! \nEn breve te llegara más información a tu correo.',
                showConfirmButton: true,
                customClass: {
               confirmButton: 'mi-clase-boton-confirmar'
               },
                timer: 13500
            });
        // }
    </script>
    <?php
   }
?>

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
<!-- <script src="https://kit.fontawesome.com/bc365c36ca.js" crossorigin="anonymous"></script> -->

  <!-- Agenda -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
  <script>
              $(document).ready(function() {
                  var selectedDates = <?php echo json_encode($selectedDates); ?>;
                  var currentDate = new Date();

                  updateCalendar(currentDate);

                  $("#prev-month").click(function() {
                      currentDate.setMonth(currentDate.getMonth() - 1);
                      updateCalendar(currentDate);
                  });

                  $("#next-month").click(function() {
                      currentDate.setMonth(currentDate.getMonth() + 1);
                      updateCalendar(currentDate);
                  });

                  function updateCalendar(date) {
                      $("#current-month").text(date.toLocaleString("default", { month: "long", year: "numeric" }));
                      $("#calendar-table tbody").empty();
                      var firstDayOfMonth = new Date(date.getFullYear(), date.getMonth(), 1);
                      var lastDayOfMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0);

                      var currentDay = new Date(firstDayOfMonth);
                      currentDay.setDate(1 - firstDayOfMonth.getDay()); // Ajuste para iniciar en el día correcto de la semana
                      var row = $("<tr>");

                      while (currentDay <= lastDayOfMonth) {
                          if (currentDay.getDay() === 0) {
                              $("#calendar-table tbody").append(row);
                              row = $("<tr>");
                          }

                          var cellDate = currentDay.toISOString().slice(0, 10);
                          var cellClass = selectedDates.includes(cellDate) ? "selected-date" : "";

                          var cell = $("<td>")
                              .addClass(cellClass)
                              .addClass(currentDay < new Date() ? "disabled" : "") // Agregar clase "disabled" si la fecha es anterior al día actual
                              .text(currentDay.getDate())
                              .click(function() {
                                  if ($(this).hasClass("disabled")) return;
                                  
                                  var clickedDate = $(this).text();
                                  var clickedMonth = date.getMonth() + 1;
                                  var formattedDate = date.getFullYear() + "-" + (clickedMonth < 10 ? "0" : "") + clickedMonth + "-" + (clickedDate < 10 ? "0" : "") + clickedDate;
                                  $("#selected-date-input").val(formattedDate);
                                  $(".selected-date").removeClass("selected-date");
                                  $(this).addClass("selected-date");
                              });

                          row.append(cell);
                          currentDay.setDate(currentDay.getDate() + 1);
                      }

                      $("#calendar-table tbody").append(row);
                  }
              });
  </script>

  <!-- Iconos de fontawesome -->
  <script src="https://kit.fontawesome.com/bc365c36ca.js" crossorigin="anonymous"></script>
  <script src="js/nav-scroll.js"></script>
</body>

</html>
