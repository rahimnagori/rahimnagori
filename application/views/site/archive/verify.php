<?php
include_once'include/header.php';
?>

<style type="text/css">
.verify {
    padding: 20px;
    border-radius: 10px;
    margin: 20px auto;
    max-width: 650px;
    width: 100%;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    background: #fff;
}
.g_img img {
    width: 125px;
    max-width: 100%;
}
h4.email-heading {
    font-size: 22px;
    font-weight: 600;
    margin-top: 15px;
}
.verify p {
    font-size: 16px;
    width: 100%;
    margin: 15px 0;
}
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
</style>

<section class="ftco-section ftco-counter img img_counter2 img_counter_profile">
  <div class="container">
    <div class="row justify-content-center">
      <div class="container">
         <div class="verify">
            <div class="text-center">
              <?php
                if($userdata['is_email_verified']){
              ?>
                  <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Thank you: Your Email has been verified successfully.
                  </div>
              <?php
                }else{
              ?>
                  <div class="g_img">
                    <img src="https://bluediamondresearch.com/WEB01/whatido/assets/whatido/img/message_1.png">
                  </div>
                  <h4 class="email-heading">Email verification </h4>
                  <div id="responseMessage"></div>
                  <p>You need to verify your email address. We've sent an email to <b><u><?=$userdata['email'];?></u></b> to verify your address.</p>
                  <p>Please click the link in that email to continue.</p>
                  <p><a href="javascript:void(0);" onclick="resend_verification_link();">Click here</a> to resend verification link.</p>
              <?php
                }
              ?>
            </div>
         </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-counter img img_counter2 img_counter_profile bottom_sec">
  <div class="container">
    <div class="row justify-content-center"></div>
  </div>
</section>

<?php
include_once'include/footer.php';
?>

<script>
  function resend_verification_link() {
    $.ajax({
      type: 'POST',
      dataType: 'JSON',
      url: base_url + 'Users/resend_verification_email',
      beforeSend: function () {
        $('#responseMessage').html('');
      },
      success: function (response) {
        $('#responseMessage').html(response.responseMessage);
      }
    })
  }
  
  <?php
    if($userdata['is_email_verified']){
  ?>
      setTimeout(function(){
        window.location.href = base_url + 'Profile';
      }, 5000);
  <?php
    }
  ?>
</script>