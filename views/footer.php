<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; 2022-2023 <a href="http://162.254.35.36:3000">Level3</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0
  </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->

<script src="./public/dist/js/lineabovescript.js"></script>
<script src="./public/dist/js/lineafterscript.js"></script>

<script src="./public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="./public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="./public/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="./public/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="./public/plugins/raphael/raphael.min.js"></script>
<script src="./public/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="./public/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="./public/plugins/chart.js/Chart.min.js"></script>
<!-- jquery-validation -->
<script src="./public/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="./public/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="./public/plugins/jquery.form.min.js"></script>
<script src="./public/plugins/printThis.js"></script>
<!-- SweetAlert2 -->
<script src="./public/sweetalert/Resources/Public/Assets/sweetalert2.min.js" ></script>
<!-- Toastr -->
<script src="./public/plugins/toastr/toastr.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="./public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="./public/plugins/jszip/jszip.min.js"></script>
<script src="./public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="./public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="./public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./public/plugins/select2/js/select2.full.min.js"></script>
<script src="./public/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./public/dist/js/pages/dashboard2.js"></script>
<script src="./views/auth/js/index.js"></script>
<script>
  $(function(){
    $('.select2').select2();
    
  })
</script>

<?php
if (isset($this->js)) {
  foreach ($this->js as $js) {
    echo '<script src="./views/' . $js . '"></script>';
  }
}
?>
</body>

</html>