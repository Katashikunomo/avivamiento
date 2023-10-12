<?php
session_start();
if ($_SESSION['dt_email'] == false) {
    # code...
    header("location: index.php");
}
require_once("includes/database.php");
$id_user = $_SESSION['id_users'];
// $nombre = $_SESSION['dt_nombre'];
// $correo = $_SESSION['dt_email'];
$user = get_user($id_user);
$nombre = $user['dt_nombre'];
$correo = $user['dt_email'];
$imagen = imagen_user($id_user);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "avivamiento";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

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
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AVIVAMIENMTO - PANEL</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styules.css">
    <link rel="stylesheet" href="css/cards.css">
    <!-- Agenda -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        .selected-date {
            background-color: #007bff;
            color: #ffffff;
        }

        #calendar-table td {
            cursor: pointer;
        }

        #calendar-table td.disabled {
            pointer-events: none;
            color: #ccc;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar ----------------------------------------------------------------------------------------------------SIDEBAR VERIFICAR LA INFO DE PAGINAS -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">AVIVAMIENTO <sup>panel</sup> </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->
        <!-- Sidebar ----------------------------------------------------------------------------------------------------SIDEBAR VERIFICAR LA INFO DE PAGINAS -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
<!-- ------------------------------------------------------------------------------------------VERIFICAR PERFIL -->
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nombre;?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/avivamiento/<?= $imagen;?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="perfil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
<!-- ------------------------------------------------------------------------------------------ -->

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h1>Agenda y Eventos</h1>
                    
                    <div class="container justify-content-center">
                        <div class="row text-center" >
                            <!-- Card que sirve para los eventos en un ciclo dependiendo de los eventos registrados -->
                            <?php 
                            // require("../controller/conexion.php");
                            $result = eventos_fecha();
                            // $result = $result_fech->fetch_assoc();

                            foreach ($result as $value) {
                            ?>
                            <div class="card shadow  col-md-5 m-4 hovercards-agenda--admin">
                                            <div class="card-header py-3 ">
                                                <h6 class="m-0 font-weight-bold text-primary"><?php echo $value['mensaje'];?></h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="container-fluid m-auto">
                                                        <div class="mb-3 w-100 m-auto" style="border-radius: 2px;">
                                                            <!-- Vista de Imagen -->
                                                                <div  class="container-fluid m-auto" style="border-radius: 30px;  max-width: 900px; margin:auto;  heigth: 700px; ">
                                                                <img class="img-fluid img-thumbnail" src="img/avivamiento/calendario/<?=$value['nom_imagen'];?>" alt="" style="width:auto;">
                                                                </div>
                                                                <div  class="container-fluid m-auto bg-primary text-light" style="border-radius: 30px;  max-width: 900px; margin:auto;  heigth: 700px; ">
                                                                    Fehca <?php echo $value['fecha'];?>
                                                                </div>
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
                                                                        <form action="model/activar_evento.php" method="POST">
                                                                        <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$value['id'];?>" hidden>
                                                                            <div class="mb-3">
                                                                                <label for="" class="form-label">Activar</label>
                                                                                <select class="form-select form-select-lg" name="activar" id="activar">
                                                                                    <option selected disabled>Selecciona</option>
                                                                                    <option value="1">Activar</option>
                                                                                </select>
                                                                                <button type="submit" class="btn btn-primary btn-sm">activar</button>
                                                                            </div>
                                                                        </form>
                                                                     <?php }?>
                                                                            
                                                                </div>
                                                            <!-- Eliminar evento -->
                                                            <div class="container mt-4">
                                                                <form action="model/eliminar_evento.php" method="POST" enctype="multipart/form-data">
                                                                    <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$value['id'];?>" hidden>
                                                                    <div style="text:center; margin:auto;">
                                                                        <button type="sumit" class="btn btn-danger" style="color:#fff; width:100%;" >Eliminar Evento</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                            </div>
                            <?php
                            }                            
                            ?>
                        </div>
                    
                    </div>

                    <br>
                    <!-- Imagen y mensaje de Quienes Somos -->
                    <h3 class="bg-primary text-white text-center">Calendario</h3>
                    <div class="row justify-content-around m-auto ">
                      
                        <div class="card shadow mb-4 col-md-8 ">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary text-center">Información del calendario</h6>
                                    </div>
                                    <div class="container-fluid m-auto">
                                        <div class="mb-3 w-100 m-auto" style="border-radius: 2px;">
                                            <!-- Vista de Imagen -->
                                            <div  class="container-fluid m-auto" style="border-radius: 30px;  max-width: 900px; margin:auto;  heigth: 700px; ">
                                                <!-- <img class="img-fluid img-thumbnail" src="img/avivamiento/portada_login.jpg" alt="" style="width:auto; border-radius: 300px;"> -->
                                                
                                            </div>

                                            <!-- Modificacionm de imagen -->
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="model/registro_evento.php" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                              <!-- <label for="" class="form-label">id</label> -->
                                              <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$id_user;?>" hidden>
                                              <!-- <input type="number" class="form-control" name="tp_image" id="tp_image" aria-describedby="emailHelpId" value="2" hidden> -->
                                            </div>
                                            <div class="container-fluid border-bottom">
                                                <h2 class="m-0 font-weight-bold text-primary" >Titulo del Evento</h2>
                                                <div class="mb-3">
                                              <label for="" class="form-label"></label>
                                              <textarea class="form-control" name="dtexto" id="dtexto" rows="2"></textarea>
                                            </div>

                                            <div class="container mt-5">
                                                <h2>Calendario con Fechas Seleccionadas</h2>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="d-flex justify-content-between mb-3">
                                                            <button class="btn btn-primary" id="prev-month">Mes Anterior</button>
                                                            <h3 id="current-month">Mes Actual</h3>
                                                            <button class="btn btn-primary" id="next-month">Mes Siguiente</button>
                                                        </div>
                                                        <table class="table table-bordered" id="calendar-table">
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
                                                        <form method="post" action="procesar_fecha.php">
                                                            <!-- <input type="text" id="selected-date-input" name="selected_date" value="" required h > -->
                                                            <input type="text" id="selected-date-input" name="selected_date" value="" required hidden>
                                                            <!-- <button type="submit" class="btn btn-primary mt-3">Enviar Fecha Seleccionada</button> -->
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Activar</label>
                                                        <select class="form-select form-select-lg" name="activar" id="activar">
                                                            <option selected disabled>Selecciona</option>
                                                            <option value="1">Activo</option>
                                                            <option value="0">Inactivo</option>
                                                        </select>
                                                                                    <!-- <button type="submit" class="btn btn-primary btn-sm">activar</button> -->
                                                </div>
                                                <input type="number" class="form-control" name="id_encargado" id="id_encargado" aria-describedby="emailHelpId" value="<?=$id_user;?>" hidden>
                                                <input type="file" id="new_img" name="new_img" class="img-fluid img-thumbnail rounded  m-auto" required>
                                                <?php
                                                // Si el archivo no es imagen mostrara el siguiente mensaje
                                                if (isset($_GET['error'])) 
                                                {
                                                ?>
                                                <div class="alert alert-danger" role="alert">
                                                Ingresa una imagen
                                                </div>
                                                <?php } ?>
                                                <div style="text:center; margin:auto;">
                                                    <button type="sumit" class="btn btn-primary" style="color:#fff; width:100%;" >Agregar evento</button>
                                                </div>
                                                <!-- <button type="submit" class="btn btn-primary">Guardar Mensaje</button> -->
                                            
                                        </form>
                                    </div>
                        </div>
                    </div>

                    
                  
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Estas seguro de cerrar Sesión?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona "Salir" si deseas salir.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <!-- Agenda  -->
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
    <!-- Agenda cierra -->
</body>

</html>