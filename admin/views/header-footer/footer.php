  <!-- Footer -->
  <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

 
 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Estas seguro de cerrar Sesión?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona "Salir" si deseas salir.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
      <!-- Page level custom scripts -->
      <script src="js/demo/datatables-demo.js"></script>

      <!-- Agenda  -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
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
</script>
</body>

</html>