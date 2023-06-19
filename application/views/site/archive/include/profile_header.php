<section class="ftco-section ftco-counter img img_counter2 img_counter_banner" id="section-counter" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img4.jpg);"></section>

<section class="ftco-section ftco-counter img img_counter2 img_counter_profile" style="z-index: +999">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-3 text-center heading-section heading-section-white ftco-animate">
				<div class="pro_img">
          <?php
            $profile = ($userdata['profile']) ? $userdata['profile'] : 'assets/site/images/img2.jpg';
          ?>
					<img src="<?=$BASE_URL .$profile;?>" id="profile_image" >
				</div>
			</div>

			<div class="col-md-7 heading-section heading-section-white ftco-animate">
				<h2 class="mb-4 community_heading"><?=$userdata['first_name'] .' ' .$userdata['last_name'];?></h2>
				<?php
          if(trim($userdata['about'])){
        ?>
            <span class="subheading" style="width: 100%"><?=$userdata['about'];?></span>
        <?php
          }
        ?>

				<div class="social">
					<?php
            if(trim($userdata['address'])){
          ?>
              <div class="div1">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span><?=$userdata['address'];?></span>
              </div>
          <?php
            }
            if(trim($userdata['facebook_url'])){
          ?>
              <div class="div1">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <span><?=$userdata['facebook_url'];?></span>
              </div>
          <?php
            }
            if(trim($userdata['instagram_url'])){
          ?>
              <div class="div1">
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <span><?=$userdata['instagram_url'];?></span>
              </div>
          <?php
            }
            if(trim($userdata['twitter_url'])){
          ?>
              <div class="div1">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <span><?=$userdata['twitter_url'];?></span>
              </div>
          <?php
            }
          ?>
				</div>
			</div>
		</div>
	</div>
</section>