<?php
    require_once('../controller/conexion.php');

    function get_user_acces($email){
        global $mysqli;
        $sql = "SELECT * FROM encargados
        WHERE dt_email = '{$email}'";
        $result = $mysqli->query($sql);
        return $result;
        // return $result->fetch_assoc();
    }

    function imagen_user($id_user){
    global $mysqli;
    $query = "SELECT * FROM encargados where id = '$id_user'";
    $result = $mysqli->query($query);
    foreach ($result as $value) {
        $user_imagen = $value['imagen'];
    }
    return $user_imagen;
    }
    function imagen_user_pages($id_user){
    global $mysqli;
    $query = "SELECT * FROM cat_images_page where id_user = '$id_user'";
    $result = $mysqli->query($query);
    return $result->fetch_assoc();
    }

    function get_image_page(){
    global $mysqli;
    $query = "SELECT *,cat_images_page.dt_nombre AS nombre_imagen, encargados.dt_nombre AS nombre_encargado FROM cat_images_page LEFT JOIN encargados ON (encargados.id = cat_images_page.id_user) ORDER BY cat_images_page.id DESC LIMIT 1 ";
    $result = $mysqli->query($query);
    return $result->fetch_assoc();    
    }



?>