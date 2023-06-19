<?php
include_once'include/header.php';
?>

<style type="text/css">
.pro_img img {
	width: 250px;
	height: 250px;
	object-fit: cover;
	border-radius: 50%;
	border: 3px solid #fff;
	box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}
.img_counter_banner{
	min-height: 250px;
}
.pro_img {
	margin-top: -150px;
}
.ftco-section.ftco-counter.img.img_counter2.img_counter_profile {
	background: #fff !important;
	box-shadow: 0px 7px 8px rgba(121, 121, 121, 0.14);
	position: relative;
	margin-bottom: 0;
}
.ftco-section.ftco-counter.img.img_counter2.img_counter_profile {
	background: #fff !important;
}
.img_counter_profile .mb-4.community_heading {
	color: #000 !important;
	font-size: 28px !important;
	font-weight: 500;
}
.img_counter_profile .subheading {
	color: #000 !important;
	padding: 0 !important;
}
.social {
	display: flex;
	flex-wrap: wrap;
}
.div1 {
	margin-right: 20px;
	font-size: 13px;
	font-weight: 400;
	margin-top: 5px;
	color: #9d9d9d;
}
.div1 i {
	font-size: 14px;
	margin-right: 5px;
}
.theme_color {
	color: #572626;
}
.ftco-section.ftco-counter.img.img_counter2.img_counter_profile.bottom_sec{
background-color: #f1f1f1 !important;
}
.ftco-section.ftco-counter.img.img_counter2.img_counter_profile.bottom_sec .destination .img {
	display: block;
	height: 130px;
	background-color: #f8faff;
	border-radius: 15px;
	box-shadow: 0 6px 8px #0000001c;
}
.ftco-section.ftco-counter.img.img_counter2.img_counter_profile.bottom_sec .destination .text h3 a {
	color: #572626;
	font-weight: 400;
	font-size: 14px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	width: 100px;
	display: block;
}
.ftco-section.ftco-counter.img.img_counter2.img_counter_profile.bottom_sec .destination .text {
	padding: 10px 5px !important;
}
.ftco-section.ftco-counter.img.img_counter2.img_counter_profile.bottom_sec .btn.pricing-plan-purchase-btn.download {
	background: #572626;
	color: #fff;
	font-size: 13px !important;
	font-weight: 500;
	width: 240px;
	height: 40px;
	margin: 0;
}
.like {
	float: right;
	color: #572626;
}
.credit {
	display: block;
	height: 30px;
	border-bottom: 1px solid #ccc;
	margin-bottom: 15px;
}
#passwordError{
  display:none;
}
</style>

<?php
  include_once 'include/profile_header.php';
?>

<section class="ftco-section ftco-counter img img_counter2 img_counter_profile bottom_sec">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-3">
				<div class="div1">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<span class="theme_color"><?=$userdata['phone'];?></span>
					</div>
					<div class="div1">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
            <span class="theme_color"><?=$userdata['email'];?></span>
					</div>



					   <br>

						<br>

						<div class="div1">
						<h6 class="theme_color">Credit</h6>
						<a href="#" class="credit">Credit on MP3</a>
						<a href="#" class="credit">Credits on wave</a>
						<a href="#" class="credit">Credits on (zip file)</a>
					</div>

          <?php
            if(trim($userdata['about'])){
          ?>
              <div class="div1">
                <h6>Bio</h6>
                <p><?=$userdata['about'];?></p>
              </div>
          <?php
            }
          ?>

					<div class="div1">
						<h6 class="theme_color"><a href="<?=$BASE_URL;?>Logout" style="text-decoration: underline;">Logout</a></h6>
					</div>



					
					
			</div>
			<div class="col-md-7">
				<h6 class="mb-2">Personal information</h6>
			<div class="row">
				<div class="col-sm-12">
					<form id="profile_update_form" name="profile_update_form" method="POST" onsubmit="update_profile(event);" >
						<div class="form-group">
							<label>First Name</label>
							<input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?=$userdata['first_name'];?>" required >
              <input type="hidden" name="user_id" value="<?=$userdata['id'];?>" required >
						</div>
            <div class="form-group">
							<label>Last Name</label>
							<input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?=$userdata['last_name'];?>" required >
						</div>
						<div class="form-group">
							<label>Phone No</label>
							<input type="number" name="phone" class="form-control" placeholder="phone No" value="<?=$userdata['phone'];?>" required >
						</div>
						<div class="form-group">
							<label>Email</label>
							<span class="form-control" readonly ><?=$userdata['email'];?></span>
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" class="form-control" placeholder="Address" value="<?=$userdata['address'];?>" >
						</div>
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="profile" class="form-control" onchange="preview_image(this, 'profile_image');" >
              <input type="hidden" name="profile_old" value="<?=$userdata['profile'];?>" >
						</div>
						<div class="form-group">
							<label>Facebook</label>
							<div class="socilld1">
								<input type="url" name="facebook_url" class="form-control"  placeholder="Facebook" value="<?=$userdata['facebook_url'];?>" >
							</div>
						</div>
						<div class="form-group">
							<label>Instagram</label>
							<div class="socilld1">
								<input type="url" name="instagram_url" class="form-control" placeholder="Instagram" value="<?=$userdata['instagram_url'];?>" >
							</div>
						</div>
						<div class="form-group">
							<label>Twitter</label>
							<div class="socilld1">
								<input type="url" name="twitter_url" class="form-control" placeholder="Twitter" value="<?=$userdata['twitter_url'];?>" >
							</div>
						</div>
						<div class="form-group">
							<label>About</label>
							<textarea class="form-control" placeholder="About" name="about" ><?=$userdata['about'];?></textarea>
						</div>
            <div id="responseMessage"></div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-profile">UPDATE</button>
						</div>
						<br>
						<br>
					</form>
				</div>
			</div>
			<h6 class="mb-2">Change Password</h6>
      <div class="row">
				<div class="col-sm-12">
					<form id="change_password_form" name="change_password_form" method="POST" onsubmit="update_password(event);" >
						<div class="form-group">
							<label>Current Password </label>
							<input type="password" id="old_password" name="old_password" class="form-control" placeholder="******" required >
              <input type="hidden" name="user_id" value="<?=$userdata['id'];?>" required >
						</div>
						<div class="form-group">
							<label>New Password  </label>
							<input type="password" id="password" name="password" class="form-control" placeholder="****" required onkeyup="check_password();" >
              <p class="text-danger" id="passwordError">New password and confirm password should be same.</p>
						</div>
						<div class="form-group">
							<label>Confirm Password </label>
							<input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="****" required onkeyup="check_password();" >
						</div>
            <div id="passwordResponseMessage"></div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-password">UPDATE</button>
						</div>
						<br>
						<br>
					</form>
				</div>
			</div>
	</section>

<?php
include_once'include/footer.php';
?>

<script>
  function update_profile(e){
    e.preventDefault();
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: site_url + 'Profile/update',
      data: new FormData($('#profile_update_form')[0]),
      processData: false,
      contentType: false,
      cache: false,
      beforeSend: function () {
        $("#responseMessage").html("");
        $(".btn-profile").prop('disabled', true);
        $(".btn-profile").html('<i class="fa fa-spin fa-spinner"></i> Processing...');
      },
      success: function (response) {
        location.reload();
        $("#responseMessage").html(response.responseMessage);
        $(".btn-profile").prop('disabled', false);
        $(".btn-profile").html('UPDATE');
      }
    })
  }

  function update_password(e){
    e.preventDefault();
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: site_url + 'Profile/update_password',
      data: new FormData($('#change_password_form')[0]),
      processData: false,
      contentType: false,
      cache: false,
      beforeSend: function () {
        $("#passwordResponseMessage").html("");
        $(".btn-password").prop('disabled', true);
        $(".btn-password").html('<i class="fa fa-spin fa-spinner"></i> Processing...');
      },
      success: function (response) {
        $("#passwordResponseMessage").html(response.responseMessage);
        if (response.status == 1) {
          $('#change_password_form')[0].reset();
        }
        $(".btn-password").prop('disabled', false);
        $(".btn-password").html('UPDATE');
      }
    })
  }

  function check_password(){
    $("#passwordError").hide();
    let password = $("#password").val();
    let confirm_password = $("#confirm_password").val();
    if(password == confirm_password){
      $(".btn-password").prop('disabled', false);
      $("#passwordError").hide();
    }else{
      $(".btn-password").prop('disabled', true);
      $("#passwordError").show();
    }
  }

  function preview_image(input, previewId) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#' + previewId).attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>