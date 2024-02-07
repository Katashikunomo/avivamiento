<?php
    require_once('../../controller/conexion.php');

    if ($_POST) {
        $id_evento = $_POST['id'];
        global $mysqli;
        $query = "UPDATE tb_eventos_h SET tp_status = -1 WHERE id = '$id_evento'";
        $result = $mysqli->query($query);

        if ($result) {
            header("Location: ../agenda.php");
        }
    }
?>
