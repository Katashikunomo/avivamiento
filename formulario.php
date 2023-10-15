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
        $imagen = $evento['nom_imagen'];
        $fecha = $evento['fecha'];
        $nombreEvento = $evento['mensaje'];

        $terminos = $_POST['terminos'];
        $nombreUsuario = $_POST['nombre'];
        $emailUsuario = $_POST['correo'];
        $validacionCorreo = valida_correo($emailUsuario,$idEvent);
        if ($validacionCorreo == false) {
            # code...
            header("Location:index.php?existe=registrado");
        }elseif (valida_correo($emailUsuario,$idEvent)) {
          registrar_correo($emailUsuario,$nombreUsuario,$idEvent);

          $mail = new PHPMailer(true);

          try {
              //Server settings
              $mail->SMTPDebug = 0;                      //Enable verbose debug output
              $mail->isSMTP();                                            //Send using SMTP
              $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
              $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
              $mail->Username   = 'info@avivamientointernacional.website';                     //SMTP username
              $mail->Password   = 'Avivamiento#2023';                               //SMTP password
              $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
              $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
              

              //Recipients
              $mail->setFrom('info@avivamientointernacional.website', 'Info Avivamiento');
              $mail->addAddress($emailUsuario, $nombreUsuario);     //Add a recipient

              //Content
              $mail->isHTML(true);                                  //Set email format to HTML
              $mail->CharSet = 'UTF-8';
              $mail->Subject = 'Evento '.$nombreEvento." para el día ".$fecha;
              // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            //   $mail->Body    = '
            
            //  ';
          
                          // $mail->AltBody = 'Confirmación de postulación Foros de Vinculación 2023';

              // $mail->send();


              $mail->Body = '  <table class=" table" style="
              border: 1px solid #000 ;
              width: 80%;
              margin: 15px auto;
              min-height: 100vh;
              margin: auto;
              border: 1px solid #000;
              box-shadow: 0 0 3px #000;
              border-radius: 5px;">
                  <thead style="background: #051E5E;">
                      <tr>
                          <th style=" width: 100%;
                          color: #fff;
                          height: 100px;
                          text-align: left;
                          box-shadow: 0px 0px 10px #000;
                          border-bottom: 10px solid #fff;" ><img src="https://avivamientointernacional.website/images/logo.svg" alt="" width="80px" style="box-shadow: 0px 2px 10px #fff; border-radius: 100%; margin: 5px;"></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr style="height: 180px; border-bottom: 2px solid #000;">
                          <td>   
                              <h2 style="padding: 35px; border-bottom: 10px solid #000; border-radius: 22px;">Apreciable '.$nombreUsuario.' confirmamos la recepción de su registro para el '.$nombreEvento.' que se llevara a cabo en la siguiente fecha '.$fecha.'</h2>
                          </td>
                      </tr>
                      <tr>
                          <td  style="border-radius: 20px; border: none;
                          box-shadow: -1px 5px 10px 1px #fff ,-1px 5px 10px 1px #000;
                          width: 50% !important;">
                              <h3 style="width: 70%; text-align: center; font-size: 42px; border-radius: 10px 0 100px;  border-bottom: 6px solid #000; margin: 50px auto; margin-top: 35px;">'.$nombreEvento.'</h3>
                              <h3 style="text-align: center;">
                                  <img src="https://avivamientointernacional.website/admin/img/avivamiento/calendario/'.$imagen.'" alt="Evento" style=" max-width: 650px; margin: 15px auto; border-radius: 12px; box-shadow: 1px 1px 12px #000;">
                              </h3>
                              <h3 style="width: 70%; text-align: center; font-size: 42px; border-radius: 10px 0 100px;  border-bottom: 6px solid #000; margin: 50px auto; margin-top: 35px;">La fecha del evento es el '.$fecha.'</h3>
                              <h3 style="text-align: center;">
                                  <a href="https://avivamientointernacional.website/" style="text-decoration: none; border: 2px solid #000; padding:10px 120px; border-radius: 5px; background-color: #051E5E; color: #fff;">ir a sitio</a>
                              </h3>
                          </td>                    
                      </tr>
                  </tbody>
                  <tfoot style="height: 150px; background: #051E5E;">
                      <tr>
                          <td style="text-align: center; border-top: 10px solid #fff; box-shadow: 1px 1px 10px #000; border-radius: 5px;">
                              <span style="color: #fff; font-size: 23px; text-align: center;">Siguenos en redes sociales</span>
                          </td>
                      </tr>
                  </tfoot>
              </table>';
              if ($mail->send()) {
                  header("Location:index.php?formulario=enviado");
              }else{
                  echo 'Message error';
              }
          } catch (Exception $e) {
              echo " Mailer Error: {$mail->ErrorInfo}";
          }

        }
        ?>
        <script>
           window.location="index.php";
        </script>
    
    <?php
    }else{
        echo "Acepta terminos y condiciones";
        header("refresh:2;url=index.php");
    }
}else{
    echo("No llego");
}

?>