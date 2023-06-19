      <footer class="main-footer">
        <strong>Copyright &copy; <?=date('Y');?> <a href="<?=base_url();?>"> <?=$PROJECT;?> </a>.</strong> All rights
        reserved.
      </footer>
      <div class="control-sidebar-bg"></div>
    </div>
  
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?=base_url(); ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

     <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="//cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>

    

    <!-- Morris.js charts -->
    <script src="<?=base_url(); ?>assets/admin/bower_components/raphael/raphael.min.js"></script>
    <script src="<?=base_url(); ?>assets/admin/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?=base_url(); ?>assets/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?=base_url(); ?>assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?=base_url(); ?>assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?=base_url(); ?>assets/admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?=base_url(); ?>assets/admin/bower_components/moment/min/moment.min.js"></script>
    <script src="<?=base_url(); ?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?=base_url(); ?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?=base_url(); ?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?=base_url(); ?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url(); ?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url(); ?>assets/admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) 
    <script src="<?=base_url(); ?>assets/admin/dist/js/pages/dashboard.js"></script>
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=base_url(); ?>assets/admin/dist/js/demo.js"></script>
    <script>
      let site_url = '<?=base_url();?>';

      $(document).ready(function() {
        $('#boottable').DataTable();
      });

      var url = window.location;

      // for sidebar menu entirely but not cover treeview
      $('ul.sidebar-menu a').filter(function() {
          return this.href == url;
      }).parent().addClass('active');

      // for treeview
      $('ul.treeview-menu a').filter(function() {
          return this.href == url;
      }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

    </script>
  </body>
</html>