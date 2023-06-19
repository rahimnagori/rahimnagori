<?php
  $admin_data = [];
  $site_content = [];
  $page_content = [];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rahim Nagori - Logo</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=site_url();?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=site_url();?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=site_url();?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=site_url();?>assets/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=site_url();?>assets/admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?=site_url();?>assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?=site_url();?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?=site_url();?>assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="<?=site_url();?>assets/admin/custom/style.css">
  <link rel="shortcut icon" type="image/jpg" href="<?=site_url();?>assets/admin/"/>
</head>
<script type="text/javascript">
  function imgError(image) {
    image.onerror = "";
    image.src = "";
    return true;
  }
</script>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="<?=site_url(); ?>" class="logo">
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="<?=site_url();?>assets/site/img/logo.png" height="45px" width="195px" alt="Rahim Nagori - Logo"></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?=site_url();?>assets/site/img/logo_foopter.png" class="user-image" alt="Rahim Nagori - Logo">
                <span class="hidden-xs">Admin Name</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?=site_url();?>assets/site/img/logo_foopter.png" class="img-circle" alt="Rahim Nagori - Logo">
                  <p>Admin Name</p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
<?php include_once('sidebar.php');?>