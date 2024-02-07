<?php

    include("../../controller/conexion.php");
    if ($_POST) {
        $id = $_POST['id'];
        $nombre = $_POST['dtnombre'];
        $email = $_POST['dtemail'];
        // $email = $_POST['dtemail'];
        $passw = $_POST['dtpassw'];
        $newpassw = $_POST['newpassw'];

        global $mysqli;
        $query = "UPDATE encargados SET dt_nombre = UPPER('$nombre'), dt_email = UPPER('$email') WHERE id ='$id' ";
                $res = $mysqli->query($query);
            if ($res) {
                header("Location:../perfil.php?exitoso='update'");
            } 
        // $query = "SELECT * FROM encargados WHERE id = '$id' ";
        // $result = $mysqli->query($query);
        // $valida_pass = $result->fetch_assoc();
        // $password = $valida_pass['dt_password'];
        // if ($password == $passw) {
        //     // global $mysqli;
        //         $query2 = "UPDATE encargados SET dt_password = '$newpassw' WHERE id ='$id' ";
        //         $res = $mysqli->query($query2);
        //         // Se redirecciona al usuario al perfil
        //     if ($res) {
        //         header("Location:../perfil.php");
        //     } 
            // Si la extención del archivo no es la deseada se realiza un envio de mensaje de error
        }else {
          echo "¡Posible ataque de subida de ficheros!\n";
          header("Location:../perfil.php?errorpassw='dont_pass'");
        }      
          
// }

?>