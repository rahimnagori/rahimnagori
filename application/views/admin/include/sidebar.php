<aside class="main-sidebar">
  <section class="sidebar" style="height: auto;">
    <!-- Sidebar user panel -->
    <div class="user-panel" style="height: 63px;">
      <div class="text-center info">
        <p>Admin Name</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active">
        <a href="<?=site_url();?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Users Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="user_management.php"><i class="fa fa-circle-o"></i> Users </a></li>
          <li><a href="vendor_management.php"><i class="fa fa-circle-o"></i> Vendors </a></li>
          <li><a href="subadmin_management.php"><i class="fa fa-circle-o"></i> Employee </a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>