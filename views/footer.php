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
  <strong>Copyright &copy; 2022-2023 <a href="http://162.254.35.36:3000/login">Level3</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0
  </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->

<script src="<?= URL ?>public/dist/js/lineabovescript.js"></script>
<script src="<?= URL ?>public/dist/js/lineafterscript.js"></script>

<script src="<?= URL ?>public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= URL ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= URL ?>public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= URL ?>public/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= URL ?>public/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= URL ?>public/plugins/raphael/raphael.min.js"></script>
<script src="<?= URL ?>public/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= URL ?>public/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?= URL ?>public/plugins/chart.js/Chart.min.js"></script>
<!-- jquery-validation -->
<script src="<?= URL ?>public/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= URL ?>public/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="<?= URL ?>public/plugins/jquery.form.min.js"></script>
<script src="<?= URL ?>public/plugins/printThis.js"></script>
<!-- SweetAlert2 -->
<script src="<?= URL ?>public/sweetalert/Resources/Public/Assets/sweetalert2.min.js" ></script>
<!-- Toastr -->
<script src="<?= URL ?>public/plugins/toastr/toastr.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= URL ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= URL ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= URL ?>public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= URL ?>public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= URL ?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= URL ?>public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= URL ?>public/plugins/jszip/jszip.min.js"></script>
<script src="<?= URL ?>public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= URL ?>public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= URL ?>public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= URL ?>public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= URL ?>public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= URL ?>public/plugins/select2/js/select2.full.min.js"></script>
<script src="<?= URL ?>public/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= URL ?>public/dist/js/pages/dashboard2.js"></script>
<script src="./views/auth/js/index.js"></script>
<script>
  $(function(){
    $('.select2').select2();
    
  })
</script>

<?php
if (isset($this->js)) {
  foreach ($this->js as $js) {
    echo '<script src="'.URL.'"/views/' . $js . '"></script>';
  }
}
?>
</body>

</html>