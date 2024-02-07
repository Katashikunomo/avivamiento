<?php
    session_start();
    require_once("includes/database.php");
            // use PHPMailer\PHPMailer\PHPMailer;
            // use PHPMailer\PHPMailer\Exception;
            // require 'PHPMailer/src/PHPMailer.php';
            // require 'PHPMailer/src/SMTP.php';
            // require 'PHPMailer/src/Exception.php';  
    // require_once("../controller/conexion.php");

    if (isset($_POST['email']) && isset($_POST['dtpassword'])) {
        $email = $_POST['email'];
        $pass = $_POST['dtpassword'];
        $valida_email = get_user_acces($email);
        // $sql = "SELECT * FROM enmcargados WHERE dt_email = '$email' AND dt_password = '$pass'";
		// $result = $mysqli->query($sql);
        foreach ($valida_email as $validacion) {
            $password = $validacion['dt_password'];
            $nombre = $validacion['dt_nombre'];
            $id_usuario = $validacion['id'];
        }
        // if ($result->num_rows > 0) 
        // {		
            // $valida_email = $result->fetch_assoc();

        if ($password == $pass) {
            
            $_SESSION['dt_email'] = $email;
            $_SESSION['id_users'] = $id_usuario;
            $_SESSION['dt_nombre'] = $nombre;

        //     $body = file_get_contents('https://vinculacion.website');
        //     $mail = new PHPMailer(true);
        //     $mail->SMTPDebug = 0;                      //Enable verbose debug output
        //     $mail->isSMTP();                                            //Send using SMTP
        //     // $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
        //     $mail->Host       = 'imap.hostinger.com';                     //Set the SMTP server to send through
        //     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        //     $mail->Username   = 'enlace@vinculacion.website';                     //SMTP username
        //     $mail->Password   = 'Av24psfm#';                               //SMTP password
        //     $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        //     $mail->Port       = 993;                                      //TCP port to connect to; use 587 if you have 
        //     //Recipients
        //     $mail->setFrom('enlace@vinculacion.website', 'INMGRESO A PLATAFORMA AVIVAMIENMTO.');
        //     $mail->addAddress($email, $nombre);     //Add a recipient
        //     //$mail->addAttachment('img/programa.png', 'new.jpg');    //Optional name
        //     //Content
        //     $mail->isHTML(true);                                 //Set email format to HTML
        //     // Activo condificacción utf-8
        //     $mail->CharSet = 'UTF-8';
        //     $mail->Subject = 'INMGRESO A PLATAFORMA AVIVAMIENMTO..';
        //     $mail->Body    = '  
        //     <style>
        //       h3 {color:black; font-size:14px;}
        //     </style>
                          
                                          
        //                <table style="width:950px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">               
        //                   <tr>
        //                      <td align="center" style="padding:20px 0 30px 0;">
        //                        inmicio de sesionm
        //                      </td>
        //                   </tr>
        //                   <tr>
        //                     <td align="center" style="padding:10px 0 10px 0;">
        //                     <h3>
        //                       Apreciable '.$nombre.' confirmamos el inmicio de sesionm de lo conmtrario ignmora este correo.                              
        //                     </h3>
        //                     </td>
        //                   </tr>
        //    </table>';

        //    $mail->AltBody = 'Confirmación de postulación Foros de Vinculación 2023';
   
        //    $mail->send();

        //    header("Refresh:2; URL:admin.php");
           header("location:admin.php");
        }else {
            header('location: index.php?error=empty-password-invalid');
        }
    }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN - AVIVAMIENTO</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/styules.css" rel="stylesheet">


</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image-modifi"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Inicio de Sesión panel de Adminmistrador</h1>
                                    </div>
                                    <form action="index.php" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name ="email" aria-describedby="emailHelp"
                                                placeholder="Ingresa tu correo ...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="dtpassword" name="dtpassword" placeholder="Ingresa tu password ">
                                        </div>
                                        <?php
                                            // Si los datos no existen mostrara el siguiente mensaje
                                            if (isset($_GET['error'])) 
                                            {
                                        ?>
                                                <div class="alert alert-danger" role="alert">
                                                Los datos de acceso que ingreso son incorrectos
                                                </div>
                                        <?php } ?>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    
                                        <hr>
                                        <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
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

</body>

</html>