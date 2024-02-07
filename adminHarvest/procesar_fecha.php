<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_date"]) && !empty($_POST["selected_date"])) {
        $selectedDate = $_POST["selected_date"];
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "avivamiento";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        $sql = "INSERT INTO tb_fechas (fecha) VALUES ('$selectedDate')";

        if ($conn->query($sql) === TRUE) {
            echo "Fecha seleccionada almacenada correctamente.";
        } else {
            echo "Error al almacenar la fecha: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "No se ha proporcionado una fecha seleccionada.";
    }
}
?>
