<?php 
require_once('./includes/database_home.php'); 
mysqli_set_charset($mysqli, 'utf8');
$imagen_banner_array = get_image_page();
$imagen_banner = $imagen_banner_array['dt_nombre'];
$var_reg=2;
if (isset($_GET['dato'])) {
  $var_reg = $_GET['dato'];
}
// print_r($var_reg);
$imagen_quienes_somos_array = get_image_page_quienesomos($var_reg);
$texto_quienes_somos_array = get_image_page_proposito_text($var_reg);
$imagen_quienes_somos = $imagen_quienes_somos_array['dt_nombre'];
$texto_quienes_somos = $texto_quienes_somos_array['dt_texto'];
$numero = random_int(1, 31102);
$versiculo_array = get_versiculo($numero); 
$versiculo_text = $versiculo_array['text'];
$versiculo_book = $versiculo_array['name'];
$versiculo_chapter = $versiculo_array['chapter'];
$versiculo_verse = $versiculo_array['verse'];
?> 
<?php
// Conexión a la base de datos (reemplaza con tus propios detalles)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "avivamiento";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consultar cantidad de eventos
$sql = "SELECT COUNT(fecha) as 'numerototal' FROM tb_fechas";
$result_fechas = $conn->query($sql);
$array_fechas_total = $result_fechas->fetch_assoc();
$array_fechas = $array_fechas_total['numerototal'];
// Consultar las fechas seleccionadas desde la base de datos
$sql = "SELECT fecha FROM tb_fechas";
$result = $conn->query($sql);

$selectedDates = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $selectedDates[] = $row["fecha"];
    }
}

$conn->close();
?>

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
    </style>
<!-- Icons fontawesome -->
<!-- <script src="https://kit.fontawesome.com/bc365c36ca.js" crossorigin="anonymous"></script> -->
</head>

<body>


    <header class="container-fluid w-100 ">
            
                    <a class="logo" href="#"><img src="images/logo.svg" alt=""></a>
                    <ul class=" nav   fondo_menu justify-content-end"  >
                            <li class="nav-item  borde_blanco  d-none d-sm-inline-flex">
                                <a href="#tab5Id" class="nav-link activo">Inicio</a>
                            </li>
                            <li class="nav-item  borde_blanco  d-lg-none d-md-inline-flex" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <a href="#tab5Id" class="nav-link ">Menu</a>
                            </li>
                            <li class="nav-item  borde_blanco d-none d-lg-inline-flex">
                                <a href="#tab5Id" class="nav-link " >Conocenos</a>
                            </li>
                            <li class="nav-item  borde_blanco d-none d-lg-inline-flex">
                                <a href="#tab5Id" class="nav-link " >Sedes</a>
                            </li>
                            <li class="nav-item  borde_blanco d-none d-lg-inline-flex">
                                <a href="#tab5Id" class="nav-link " >Educación</a>
                            </li>
                            <li class="nav-item  borde_blanco d-none d-lg-inline-flex">
                                <a href="#tab5Id" class="nav-link " >Eventos</a>
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
                                <a href="#tab5Id" class="nav-link activo">Inicio</a>
                            </li>
                            <li class="nav-item  borde_blanco ">
                                <a href="#tab5Id" class="nav-link " >Conocenos</a>
                            </li>
                            <li class="nav-item  ">
                                <a href="#tab5Id" class="nav-link " >Sedes</a>
                            </li>
                            <li class="nav-item  ">
                                <a href="#tab5Id" class="nav-link " >Educación</a>
                            </li>
                            <li class="nav-item  ">
                                <a href="#tab5Id" class="nav-link " >Eventos</a>
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
  <div class="row container fondo centrar">
    <!--Card que contiene la Imagen y Frase-->
    <div class=" row centrar ">
      <!-- Imagen-->
      <div class=" col-sm-12 col-md-8 ">
        <div class="card border">
          <div class="">
            <h3 class="card-title text-white"></h3>
            <img src="./admin/img/avivamiento/banner/<?= $imagen_banner ?>" alt="" srcset="" width="100%" style="border-radius:10px;">
          </div>
        </div>
      </div>
      <!-- Fin Imagen-->
      <!-- Frase-->
      <div class="col-sm-12 col-md-4 centro">
        <div class=" text-center">
          <div class="card-body">
            <h3 class="card-title"><?=$versiculo_text;?></h3>
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
  <?php
  if ($var_reg == 2) {
    # code...
  
  ?>
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
  <?php
  
  }elseif ($var_reg == 3) {

  ?>
  
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
  <?php
    
  }elseif ($var_reg == 4 ) {
  ?>
  
  
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
  <?php
    
  }
  ?>
  
  

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
                <table class="table table-bordered text-light">
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
                    <tbody id="calendar-table">
                        <!-- Aquí se generará el calendario en forma de tabla con fechas -->
                        <!-- El contenido del calendario se generará dinámicamente con JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
  
  <div class="row container  w-100 centrar">
    <div class="row   centrar__calendario">
      <div class="  col-sm-12 col-md-4  ">
        <div class="card ">
          <div class="fondo_calendario_cards">
            <h3 class="fondo_calendario">Sanidades y Milagros</h3>
            <img src="https://scontent.fmex11-1.fna.fbcdn.net/v/t39.30808-6/349307385_1067713927948477_2546638713731163798_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGDQqCi3mCcA1MLz0BMC1FXiXDh7IpZwcmJcOHsilnBybXEvBwaGxGAY6tGVSxbhUHt9pYe0W3ZyyVb1jAQL__R&_nc_ohc=QAeakecOjB8AX_ErNja&_nc_ht=scontent.fmex11-1.fna&oh=00_AfCsW2fYHaVBz0d2X30uS_Gg70SU5bD--d5h4RRZo1kIXQ&oe=64B38FDD" alt="" width="100%">
            <a name="" id="" class="btn fondo_calendario_a" href="#" role="button">Recibir notificación acerca de este evento</a>
          </div>
        </div>
      </div>
      
      <div class="  col-sm-12 col-md-4 ">
        <div class="card  fondo_calendario_cards">
          <div class="fondo_calendario_cards">
          <h3 class="fondo_calendario">Congreso de Avivamiento Internacional</h3>
            <img src="https://scontent.fmex11-1.fna.fbcdn.net/v/t39.30808-6/349307385_1067713927948477_2546638713731163798_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGDQqCi3mCcA1MLz0BMC1FXiXDh7IpZwcmJcOHsilnBybXEvBwaGxGAY6tGVSxbhUHt9pYe0W3ZyyVb1jAQL__R&_nc_ohc=QAeakecOjB8AX_ErNja&_nc_ht=scontent.fmex11-1.fna&oh=00_AfCsW2fYHaVBz0d2X30uS_Gg70SU5bD--d5h4RRZo1kIXQ&oe=64B38FDD" alt="" width="100%">
            <a name="" id="" class="btn fondo_calendario_a" href="#" role="button">Recibir notificación acerca de este evento</a>
          </div>
        </div>
      </div>
      <div class="  col-sm-12 col-md-4  ">
        <div class="card ">
          <div class="fondo_calendario_cards">
            <h3 class="fondo_calendario">Sanidades y Milagros</h3>
            <img src="https://scontent.fmex11-1.fna.fbcdn.net/v/t39.30808-6/349307385_1067713927948477_2546638713731163798_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGDQqCi3mCcA1MLz0BMC1FXiXDh7IpZwcmJcOHsilnBybXEvBwaGxGAY6tGVSxbhUHt9pYe0W3ZyyVb1jAQL__R&_nc_ohc=QAeakecOjB8AX_ErNja&_nc_ht=scontent.fmex11-1.fna&oh=00_AfCsW2fYHaVBz0d2X30uS_Gg70SU5bD--d5h4RRZo1kIXQ&oe=64B38FDD" alt="" width="100%">
            <a name="" id="" class="btn fondo_calendario_a" href="#" role="button">Recibir notificación acerca de este evento</a>
          </div>
        </div>
      </div>
      

    </div>
  </div>  
</main>

<footer class="fondo_footer centrar">
            <!-- place footer here -->
            <div class="  ">

            </div>
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
                $("#calendar-table").empty();
                var firstDayOfMonth = new Date(date.getFullYear(), date.getMonth(), 1);
                var lastDayOfMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0);

                var currentDay = new Date(firstDayOfMonth);
                var row = $("<tr>");

                while (currentDay <= lastDayOfMonth) {
                    if (currentDay.getDay() === 0) {
                        $("#calendar-table").append(row);
                        row = $("<tr>");
                    }

                    var cellDate = currentDay.toISOString().slice(0, 10);
                    var cellClass = selectedDates.includes(cellDate) ? "selected-date" : "";

                    var cell = $("<td>")
                        .addClass(cellClass)
                        .text(currentDay.getDate());

                    row.append(cell);
                    currentDay.setDate(currentDay.getDate() + 1);
                }

                $("#calendar-table").append(row);
            }
        });
    </script>

</body>

</html>
