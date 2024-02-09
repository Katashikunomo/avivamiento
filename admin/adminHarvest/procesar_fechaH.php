<?php
require '../controller/conexions.php';
global $mysqli;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_date"]) && !empty($_POST["selected_date"])) {
        $selectedDate = $_POST["selected_date"];
        

        // $conn = new mysqli($servername, $username, $password, $dbname);

        if ($mysqli->connect_error) {
            die("Error de conexión: " . $mysqli->connect_error);
        }

        $sql = "INSERT INTO tb_eventos_h (fecha) VALUES ('$selectedDate')";

        if ($mysqli->query($sql) === TRUE) {
            echo "Fecha seleccionada almacenada correctamente.";
        } else {
            echo "Error al almacenar la fecha: " . $mysqli->error;
        }

        $mysqli->close();
    } else {
        echo "No se ha proporcionado una fecha seleccionada.";
    }
}
?>
