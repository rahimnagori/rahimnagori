<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rahim Nagori - Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=site_url('assets/');?>admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=site_url('assets/');?>admin/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=site_url('assets/');?>admin/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=site_url('assets/');?>admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=site_url('assets/');?>admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?=site_url('assets/');?>admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?=site_url('assets/');?>admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?=site_url('assets/');?>admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="<?=site_url('assets/admin/');?>custom/style.css">
  <link rel="shortcut icon" type="image/jpg" href="<?=site_url('assets/site/');?>img/logo_foopter.png"/>
</head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?=site_url();?>Admin"><img src="<?=site_url('assets/site/');?>img/logo.png" height="" width="350px" alt="Rahim Nagori"></a>
      </div>
      <!-- /.login-logo -->
      <div id="error"></div>
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form role="form" method="post" onsubmit="" >
          <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name="email" id="email">
            <span id="emailerror" style="color: red;font-weight: bold;"></span>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" id="password" autocomplete >
            <span id="passworderror" style="color: red;font-weight: bold;"></span>
          </div>
          <div class="checkbox">
            <label class="pull-right">
              <a href="<?=site_url();?>Admin-Forgot">Forgotten Password?</a>
            </label>
          </div>
          <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30 submitBtn">Sign in</button>
        </form>
      </div>
    </div>
    <script src="<?=site_url('assets/');?>admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?=site_url('assets/');?>admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?=site_url('assets/');?>admin/dist/js/adminlte.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <script src="<?=site_url('assets/');?>admin/custom/custom.js"></script>
  </body>
</html>
<script>
  let baseUrl = "<?=site_url();?>Admin/";
  $("#error").hide();

</script>
