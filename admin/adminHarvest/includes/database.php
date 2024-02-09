<?php
    require_once('../../controller/conexion.php');

    function get_user_acces($email){
        global $mysqli;
        $sql = "SELECT * FROM encargados
        WHERE dt_email = '{$email}'";
        $result = $mysqli->query($sql);
        return $result;
        // return $result->fetch_assoc();
    }

    function get_user($id){
        global $mysqli;
        $query = "SELECT * FROM encargados where id = '{$id}'";
        $result = $mysqli->query($query);
        return $result->fetch_assoc();
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
    $query = "SELECT *,cat_images_page.dt_nombre AS nombre_imagen, encargados.dt_nombre AS nombre_encargado FROM cat_images_page LEFT JOIN encargados ON (encargados.id = cat_images_page.id_user) where tp_image = 1 ORDER BY dt_date DESC LIMIT 1 ";
    $result = $mysqli->query($query);
    return $result->fetch_assoc();    
    }
    function get_image_page_proposito($tpimage){
    global $mysqli;
    $query = "SELECT *,cat_images_page.dt_nombre AS nombre_imagen, encargados.dt_nombre AS nombre_encargado FROM cat_images_page LEFT JOIN encargados ON (encargados.id = cat_images_page.id_user) where tp_image = '$tpimage' ORDER BY dt_date DESC LIMIT 1 ";
    $result = $mysqli->query($query);
    return $result->fetch_assoc();    
    }
    function get_image_page_proposito_text($tpimage){
    global $mysqli;
    // $query = "SELECT *,cat_images_page.dt_nombre AS nombre_imagen, encargados.dt_nombre AS nombre_encargado FROM cat_images_page LEFT JOIN encargados ON (encargados.id = cat_images_page.id_user) LEFT JOIN tb_proposito ON (tb_proposito.id_encargado = cat_images_page.id_user) where tp_image = 2 ORDER BY dt_create DESC LIMIT 1";
    $query = "SELECT *, tb_proposito.dt_create as fecha FROM tb_proposito LEFT JOIN encargados ON (tb_proposito.id_encargado = encargados.id) where tp_imagen = '$tpimage' ORDER BY fecha DESC LIMIT 1";
    $result = $mysqli->query($query);
    return $result->fetch_assoc();    
    }
    // Base de datos fecha eventos
    function eventos_fecha_harvest()
    {
        global $mysqli;
        $query = "SELECT *,tb_eventos_h.id as id_ev FROM tb_eventos_h 
        LEFT JOIN encargados ON (id_encargado = encargados.id)";
        $result = $mysqli->query($query);
        // return $result->fetch_assoc(); 
        return $result;
    }
    // ----------------- CALENDARIO Y CARDS

    function getDataCalendar()
    {
        global $mysqli;
        // Consultar las fechas seleccionadas desde la base de datos
        $sql = "SELECT * FROM tb_fechas";
        $result = $mysqli->query($sql);
        // $estatus_ok = fetch_assoc()->$result; 

        $selectedDates = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['tp_status'] == 1) {
                $selectedDates[] = $row["fecha"];
                }    
            }

        }

        return $selectedDates;
    }
    // Registro correos
    // Obtener Registro correos
    function obtener_correos(){
        global $mysqli;

        $sql ="SELECT * FROM registro_correos left join tb_fechas on (registro_correos.id_fechas = tb_fechas.id) ";
        $result = $mysqli->query($sql);
        return $result;
    }
?>