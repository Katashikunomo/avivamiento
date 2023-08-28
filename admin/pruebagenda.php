<?php
// Conexión a la base de datos (reemplaza con tus propios detalles)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "avivamiento";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consultar las fechas seleccionadas desde la base de datos
$sql = "SELECT fecha FROM tb_fechas";
$result = $conn->query($sql);

$selectedDates = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $selectedDates[] = $row["fecha"];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calendario con Fechas Seleccionadas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        .selected-date {
            background-color: #007bff;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Calendario con Fechas Seleccionadas</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between mb-3">
                    <button class="btn btn-primary" id="prev-month">Mes Anterior</button>
                    <h3 id="current-month">Mes Actual</h3>
                    <button class="btn btn-primary" id="next-month">Mes Siguiente</button>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>D</th>
                            <th>L</th>
                            <th>M</th>
                            <th>M</th>
                            <th>J</th>
                            <th>V</th>
                            <th>S</th>
                        </tr>
                    </thead>
                    <tbody id="calendar-table">
                        <!-- Aquí se generará el calendario en forma de tabla con fechas -->
                        <!-- El contenido del calendario se generará dinámicamente con JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            var selectedDates = <?php echo json_encode($selectedDates); ?>;
            var currentDate = new Date();

            updateCalendar(currentDate);

            $("#prev-month").click(function() {
                currentDate.setMonth(currentDate.getMonth() - 1);
                updateCalendar(currentDate);
            });

            $("#next-month").click(function() {
                currentDate.setMonth(currentDate.getMonth() + 1);
                updateCalendar(currentDate);
            });

            function updateCalendar(date) {
                $("#current-month").text(date.toLocaleString("default", { month: "long", year: "numeric" }));
                $("#calendar-table").empty();
                var firstDayOfMonth = new Date(date.getFullYear(), date.getMonth(), 1);
                var lastDayOfMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0);

                var currentDay = new Date(firstDayOfMonth);
                var row = $("<tr>");

                while (currentDay <= lastDayOfMonth) {
                    if (currentDay.getDay() === 0) {
                        $("#calendar-table").append(row);
                        row = $("<tr>");
                    }

                    var cellDate = currentDay.toISOString().slice(0, 10);
                    var cellClass = selectedDates.includes(cellDate) ? "selected-date" : "";

                    var cell = $("<td>")
                        .addClass(cellClass)
                        .text(currentDay.getDate());

                    row.append(cell);
                    currentDay.setDate(currentDay.getDate() + 1);
                }

                $("#calendar-table").append(row);
            }
        });
    </script>
</body>
</html>