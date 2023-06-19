<!DOCTYPE html>
<html lang="en">
<?php
  $PROJECT = $this->config->item('PROJECT');
  $BASE_URL = $this->config->item('base_url');
?>
<head>
  <meta charset="utf-8">
  <title><?=$PROJECT;?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
	<link href="<?=$BASE_URL;?>assets/admin/site/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=$BASE_URL;?>assets/admin/site/css/style.css" rel="stylesheet">
	<link href="<?=$BASE_URL;?>assets/admin/site/css/font-awesome.min.css" rel="stylesheet">
	<!--
  <link href="<?=$BASE_URL;?>assets/admin/site/css/animate.css" rel="stylesheet">
  -->
  <link rel="shortcut icon" href="<?=$BASE_URL;?>assets/admin/site/img/favicon.png">
  
	<script type="text/javascript" src="<?=$BASE_URL;?>assets/admin/site/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=$BASE_URL;?>assets/admin/site/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=$BASE_URL;?>assets/admin/site/js/scripts.js"></script>
  <script>
    let site_url = '<?=$BASE_URL;;?>';
  </script>
</head>
<body>
<!-- header--><style type="text/css">
	.padding100 {
	padding: 12.4vh 0px;
}
</style>
<div class="login padding100">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="logoo_admin">
          <img src="<?=site_url('assets/site/images/logo2.png');?>" >
        </div>
      <div class="login-box">
          <?=$this->session->flashdata('responseMessage');?>
        <div class="log-head">
          Admin
        </div>
        <div class="log-body">
          <form action="<?=site_url('Admin/admin_login');?>" method="POST" id="loginForm" name="loginForm" >
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <input class="form-control" type="text" placeholder="Username" name="email" required />
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <input class="form-control" type="password" placeholder="password" name="password" required />
                </div>
              </div>
            </div>
            <br/>
           <div class="form-group text-right">
             <a href="#" class="" href="javascript:void(0);" onclick="return showforgot();" ><i class="fa fa-lock m-r-5"></i>Forgot Password ?</a>
           </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary submit-btn btn-lg"  name="submit" value="submit">Login</button>
            
            </div>
          </form>


            <form onsubmit="return forgotpassword();" method="POST" id="forgotForm" style="display: none" name="loginForm" >
              <div id="err"></div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <input class="form-control" type="text" placeholder="Username" name="email" required />
                </div>
              </div>
            </div>
            
            <br/>
           <div class="form-group text-right">
             <a href="javascript:void(0);" onclick="return showlogin();" ><i class="fa fa-lock m-r-5"></i>Login ?</a>
           </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary submit-btn btn-lg" name="submit" value="submit">Submit</button>
            
            </div>
          </form>
          
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="footer" style="display:none;">
<div class="container">
	<div class="social-media">
		<ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
	</div>
	<div class="copy-right">
		© Copyright 2018 Web Widers Software Solutions. All Rights Reserved.
	</div>
</div>
</div>
<script type="text/javascript">
  function showforgot(){
    $('#forgotForm').show();
    $('#loginForm').hide();
  }

  function showlogin(){
     $('#forgotForm').hide();
    $('#loginForm').show();
  }

   function forgotpassword(){
    
        $.ajax({
            type:'post',
            url:'<?php echo base_url(); ?>Admin/forget_password',
            data: $("#forgotForm").serialize(),
            dataType:'JSON',
            beforeSend:function(){
                $('.block_btn').prop('disabled',true);
                $('#err').html('');
            },
            success:function(res){
                $('.block_btn').prop('disabled',false);
                console.log(res.status);
                if(res.status==1){
                  $('#err').html('<div class="alert alert-success">'+res.message+'</div>');
                   $('#emails').val('');
                } else {
                $('#err').html('<div class="alert alert-danger">'+res.message+'</div>');
                return false;
                }
                
            }
        });
        return false;
    
}
</script>