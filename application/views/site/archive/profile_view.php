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
						<a href="<?=$BASE_URL;?>Edit-Profile" class="btn pricing-plan-purchase-btn download">Edit Profile</a>
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
				<h6 class="mb-2">Favorites</h6>
		<div class="row">
		<div class="col-md-12">
		<div class="row justify-content-center community">
			<div class="col-md-3">
				<div class="destination">
							<a href="<?=$BASE_URL;?><?=$BASE_URL;?>community-detail" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img1.png);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">It's A Party</a></h3>
								<span class="listing">Hindi Radio</span>
							   <i class="fa fa-heart like" aria-hidden="true"></i>
							</div>
						</div>
			</div>

			<div class="col-md-3">
				<div class="destination">
							<a href="<?=$BASE_URL;?><?=$BASE_URL;?>community-detail" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img2.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">90s Nostalgia</a></h3>
								<span class="listing">Hindi Radio</span>
							   <i class="fa fa-heart like" aria-hidden="true"></i>
							</div>
						</div>
			</div>
			<div class="col-md-3"> 
                  <div class="destination">
							<a href="<?=$BASE_URL;?>community-detail" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img3.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Classics 30s and 40s</a></h3>
								<span class="listing">Just Updated</span>
							   <i class="fa fa-heart like" aria-hidden="true"></i>
							</div>
						</div>
			</div>
			<div class="col-md-3"> 
                  <div class="destination">
							<a href="<?=$BASE_URL;?>community-detail" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img3.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Classics 30s and 40s</a></h3>
								<span class="listing">Just Updated</span>
							   <i class="fa fa-heart like" aria-hidden="true"></i>
							</div>
						</div>
			</div>
		</div>
			</div>
			</div>

			<h6 class="mb-2">Downloads</h6>
		<div class="row">
		<div class="col-md-12">
		<div class="row justify-content-center community">
			<div class="col-md-3">
				<div class="destination">
							<a href="<?=$BASE_URL;?>community-detail" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img2.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">It's A Party</a></h3>
								<span class="listing">Hindi Radio</span>
							   <i class="fa fa-heart like" aria-hidden="true"></i>
							</div>
						</div>
			</div>

			<div class="col-md-3">
				<div class="destination">
							<a href="<?=$BASE_URL;?>community-detail" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img3.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">90s Nostalgia</a></h3>
								<span class="listing">Hindi Radio</span>
							   <i class="fa fa-heart like" aria-hidden="true"></i>
							</div>
						</div>
			</div>
			<div class="col-md-3"> 
                  <div class="destination">
							<a href="<?=$BASE_URL;?>community-detail" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img5.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Classics 30s and 40s</a></h3>
								<span class="listing">Just Updated</span>
							   <i class="fa fa-heart like" aria-hidden="true"></i>
							</div>
						</div>
			</div>
			<div class="col-md-3"> 
                  <div class="destination">
							<a href="<?=$BASE_URL;?>community-detail" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img4.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Classics 30s and 40s</a></h3>
								<span class="listing">Just Updated</span>
							   <i class="fa fa-heart like" aria-hidden="true"></i>
							</div>
						</div>
			</div>
		</div>
			</div>
			</div>
	</section>

<?php
include_once'include/footer.php';
?>