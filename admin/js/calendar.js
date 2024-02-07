
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
            $("#calendar-table tbody").empty();
            var firstDayOfMonth = new Date(date.getFullYear(), date.getMonth(), 1);
            var lastDayOfMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0);

            var currentDay = new Date(firstDayOfMonth);
            currentDay.setDate(1 - firstDayOfMonth.getDay()); // Ajuste para iniciar en el día correcto de la semana
            var row = $("<tr>");

            while (currentDay <= lastDayOfMonth) {
                if (currentDay.getDay() === 0) {
                    $("#calendar-table tbody").append(row);
                    row = $("<tr>");
                }

                var cellDate = currentDay.toISOString().slice(0, 10);
                var cellClass = selectedDates.includes(cellDate) ? "selected-date" : "";

                var cell = $("<td>")
                    .addClass(cellClass)
                    .addClass(currentDay < new Date() ? "disabled" : "") // Agregar clase "disabled" si la fecha es anterior al día actual
                    .text(currentDay.getDate())
                    .click(function() {
                        if ($(this).hasClass("disabled")) return;
                        
                        var clickedDate = $(this).text();
                        var clickedMonth = date.getMonth() + 1;
                        var formattedDate = date.getFullYear() + "-" + (clickedMonth < 10 ? "0" : "") + clickedMonth + "-" + (clickedDate < 10 ? "0" : "") + clickedDate;
                        $("#selected-date-input").val(formattedDate);
                        $(".selected-date").removeClass("selected-date");
                        $(this).addClass("selected-date");
                    });

                row.append(cell);
                currentDay.setDate(currentDay.getDate() + 1);
            }

            $("#calendar-table tbody").append(row);
        }
    });
