<!DOCTYPE html>
<html>
<?php
  $PROJECT = $this->config->item('PROJECT');
  $BASE_URL = $this->config->item('base_url');
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$PROJECT;?> Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=$BASE_URL; ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$BASE_URL; ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=$BASE_URL; ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$BASE_URL; ?>assets/admin/dist/css/AdminLTE.min.css?time=<?=time(); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=$BASE_URL; ?>assets/admin/dist/css/skins/_all-skins.min.css?time=<?=time(); ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=$BASE_URL; ?>assets/admin/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=$BASE_URL; ?>assets/admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker 
  <link rel="stylesheet" href="<?=$BASE_URL; ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  -->
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=$BASE_URL; ?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=$BASE_URL; ?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- ./wrapper -->
     <link href="//cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- jQuery 3 -->
    <script src="<?=$BASE_URL; ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?=$BASE_URL; ?>assets/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>

    
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url('Admin/Dashboard');?>" class="logo">
      <span class="logo-lg"><b><img style="height: 30px;" src="<?=$BASE_URL; ?>assets/site/images/logo.png"> </b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <b class="iconnjd"><i class="fa fa-user"></i></b>
               <span class="hidden-xs"><?=$adminData['name'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=$BASE_URL; ?>assets/admin/dist/img/userdummy.png" class="img-circle" alt="User Image" style="display:none;">
                <h4>
                 <?=$adminData['email']; ?>
                </h4>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=$BASE_URL; ?>Admin/profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=$BASE_URL; ?>Admin/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Content Wrapper. Contains page content -->

  <!-- Left side column. contains the logo and sidebar -->
  <?php include_once('sidebar.php'); ?>


<style type="text/css">
  @media(min-width: 768px){
    .iconnjd{
      display: none;
    }
  }
</style>