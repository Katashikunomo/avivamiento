<?php
require_once("includes/database.php");
// FUNCIONES ADMIN
$id_user = $_SESSION['id_users'];
$imagen = imagen_user($id_user);
$user = get_user($id_user);
$nombre = $user['dt_nombre'];
$correo = $user['dt_email'];
$registros = obtener_correos();
////////////////////////////////

// FUNCIONES BANNER
$imagen = imagen_user($id_user);
$imagen_banner_array = get_image_page();
$imagen_banner = $imagen_banner_array['nombre_imagen'];
$imagen_banner_usr = $imagen_banner_array['nombre_encargado'];
$imagen_usr = $imagen_banner_array['imagen'];
//////////////////////////////////

// FUNCIONES AGENDA

// require '../controller/conexion.php';
global $mysqli;
$sql = "SELECT fecha FROM tb_eventos_h";
$result = $mysqli->query($sql);

$selectedDates = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $selectedDates[] = $row["fecha"];
    }
}