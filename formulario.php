<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';
require './includes/database_home.php';

if (isset($_POST)) {

    if ($_POST['terminos'] == 'aceptado') {
        
        $idEvent = $_POST['idevento'];
        $evento = eventos_fecha_form($idEvent);
        
        $fecha = $evento['fecha'];
        $nombreEvento = $evento['mensaje'];

        $terminos = $_POST['terminos'];
        $nombreUsuario = $_POST['nombre'];
        $emailUsuario = $_POST['correo'];

        echo("El usuario es ".$nombreUsuario." El correo es ".$emailUsuario." Acepto aviso de privacidad ".$terminos." fecha: ".$fecha." Evento -> ".$nombreEvento);

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'info@avivamientointernacional.website';                     //SMTP username
            $mail->Password   = 'Avivamiento#2023';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('ingo@avivamientointernacional.website', 'Info Avivamiento');
            $mail->addAddress($emailUsuario, $nombreUsuario);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'Evento '.$nombreEvento." para el día ".$fecha;
            // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->Body    = ' <style>
            h3 {color:black; font-size:14px;}
          </style>
                        
                                        
                     <table style="width:950px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">               
                        <tr>
                           <td align="center" style="padding:20px 0 30px 0;">
                             <img src="http://forosdevinculacion.anuies.mx/img/logo_central.png" alt="" width="300" style="height:auto;display:block;" />
                           </td>
                        </tr>
                        <tr>
                          <td align="center" style="padding:10px 0 10px 0;">
                          <h3>
                            Apreciable '.$nombreUsuario.' confirmamos la recepción de su postulación, en breve recibirá mayor información de los Foros de Vinculación <br> '.$emailUsuario.'
                            
                          </h3>
                          </td>
                        </tr>
                        <tr>
                           <td align="center" style="padding:0px 0 10px 0;">
                             <h3>A continuación le pedimos descargar los siguientes documentos y leerlos previamente para tener un panorama completo de los temas tratados.</h3>
                             <h4>Marco General para la Educación Dual del Tipo Superior</h4><a href="https://bit.ly/44nIaw3">Descargar</a>
                             <h4>Marco General Emprendimiento Asociativo</h4><a href="https://bit.ly/3rvkcQV">Descargar</a>
                             
                           </td>
                        </tr>
                        
                        <tr>
                         <td align="center" style="padding:20px 0 30px 0;">
                         <img src="http://forosdevinculacion.anuies.mx/img/Logos_Institucionales.png" alt="" width="600" style="height:auto;display:block;" />
                         </td>                   
                        </tr>  
         </table>
      
                        <p>¡Nos vemos pronto!</p> ';
        
                        // $mail->AltBody = 'Confirmación de postulación Foros de Vinculación 2023';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo " Mailer Error: {$mail->ErrorInfo}";
        }
        ?>
        <!-- <script>
           window.location="index.php";
        </script> -->
    
    <?php
    }else{
        echo "Acepta terminos y condiciones";
        header("refresh:2;url=index.php");
    }
}else{
    echo("No llego");
}

?>