<?php
    require_once('../../controller/conexion.php');

    if ($_POST) {
        $activa = $_POST['activar'];
        $id_ev = $_POST['id'];
        global $mysqli;
        $query = "UPDATE tb_fechas SET tp_status = '$activa' WHERE id = '$id_ev' ";
        $result = $mysqli->query($query);

        if ($result) {
            header("Location: ../agenda.php");
        }
    }
?>