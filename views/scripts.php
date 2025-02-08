    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
   
   
   



<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="../libs/datatables/jquery.dataTables.min.js"></script>
<script src="../libs/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../libs/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../libs/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../libs/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../libs/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../libs/jszip/jszip.min.js"></script>
<script src="../libs/pdfmake/pdfmake.min.js"></script>
<script src="../libs/pdfmake/vfs_fonts.js"></script>
<script src="../libs/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../libs/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../libs/datatables-buttons/js/buttons.colVis.min.js"></script>


<script>
 

 $(function () {
    $("#myTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>




   
  

 
