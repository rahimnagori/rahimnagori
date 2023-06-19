      <footer class="main-footer">
        <p>copy_right_content</p>
      </footer>
    </div>
    <script src="<?=site_url();?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?=site_url();?>assets/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?=site_url();?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=site_url();?>assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=site_url();?>assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=site_url();?>assets/admin/bower_components/moment/min/moment.min.js"></script>
    <script src="<?=site_url();?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?=site_url();?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?=site_url();?>assets/admin/dist/js/adminlte.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <script src="<?=site_url();?>assets/admin/custom/custom.js"></script>
    <script src="https://cdn.tiny.cloud/1/wnfamalcy2rutxy049cbmuvrrwymhdgs1k6ut0ql1ozgn6ji/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      
      let baseUrl = '<?=site_url();?>';  
      $(document).ready( function () {
        
        $('.DataTable').DataTable();

        /* To keep the sidebar dropdown open */
        var url = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
        $('.treeview-menu li').removeClass('active');
        $('[href$="'+url+'"]').parent().addClass("active");
        $('.treeview').removeClass('menu-open active');
        $('[href$="'+url+'"]').closest('li.treeview').addClass("menu-open active");
        /* To keep the sidebar dropdown open */
      });

      
    </script>
  </body>
</html>