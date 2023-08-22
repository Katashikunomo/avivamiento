<?php
include("../../controller/conexion.php");
if ($_POST) {

    $iduser = $_POST['id'];
    $dttexto = $_POST['dtexto'];
    $tp_image = $_POST['tp_image'];
    // ---------------------------------------------

    global $mysqli;
    $query = "SELECT * FROM tb_proposito where id_encargado = '$iduser' AND tp_imagen = 2"; // valida si se encuentra el usuario o no
    $res = $mysqli->query($query);
    foreach ($res as $value) {
        $falso = $value['id_encargado'];
        $id_image = $value['id'];
        if ($falso != null) {
            $bandera = true;
        }else{
            $bandera = false;
        }
    }
    if ($bandera) {
        $query = "UPDATE tb_proposito SET dt_texto ='$dttexto', dt_create = NOW() WHERE tp_imagen =2 and id_encargado = '$iduser' ";
        $mysqli->query($query);
        // Se redirecciona al usuario al perfil
        header("Location:../proposito.php");
    }else{
    
    $query = "INSERT INTO tb_proposito(id_encargado,dt_texto,tp_imagen,dt_create) values('$iduser','$dttexto','$tp_image', NOW())";
    // $query = "UPDATE cat_images_page SET dt_texto ='$dttexto', dt_date = NOW() WHERE id_imagen_glob =2 AND id_user = '$iduser'";
    $mysqli->query($query);
    header("Location:../proposito.php");
    }
}

?>