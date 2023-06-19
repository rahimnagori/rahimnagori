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
  <link rel="stylesheet" href="<?=site_url('assets/');?>admin/custom/style.css">
  <link rel="shortcut icon" type="image/jpg" href="<?=site_url('assets/site/');?>img/logo_foopter.png"/>
</head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?=site_url();?>Admin"><img src="<?=site_url('assets/site/');?>img/logo.png" height="" width="350px" alt="Rahim Nagori"></a>
      </div>
      <div id="error">
      	
      </div>
      
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Enter your email to reset password</p>
        <form role="form" id="resetForm" name="resetForm"  method="post">
          <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name="email" id="email" required >
          </div>
          <div class="form-group">
            <label>OTP</label>
            <input type="text" class="form-control" name="otp" id="otp" required >
          </div>
          <div class="checkbox">
            <label class="pull-right">
              <a href="<?=site_url();?>Admin">Login</a>
            </label>
          </div>
          <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30 submitBtn">Reset</button>
          <button type="button" onclick="generate_otp();" id="otp_btn" class="btn btn-info pull-right">Generate OTP</button>
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
  let baseUrl = '<?=site_url('assets/');?>admin';
  $("#error").hide();

  function generate_otp(){
    $.ajax({
      type:'POST',
      dataType: 'JSON',
      url: baseUrl,
      beforeSend: function(){
        $("#otp_btn").html('<i class="fa fa-spinner"></i> Processing...');
      },
      success: function (data) {
        if(data.status == 1){
          $("#otp_btn").html('<i class="fa fa-check" aria-hidden="true"></i> OTP Generated');
        }else{
          $("#otp_btn").html('Generate OTP');
          alert('Please try again later');
        }
      },
      error: function (error) {
        alert('Server error, Please try again later');
      }
    });
  }

</script>