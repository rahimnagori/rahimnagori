<?php
include_once'include/header.php';
?>

<section class="ftco-section ftco-counter img img_counter2" id="section-counter" style="background-image: url(<?=$BASE_URL;?>assets/site/images/back.jpg);">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<h2 class="mb-4 community_heading">Blog</h2>
				<span class="subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
				<div class="row justify-content-center">
					<ul class="blog_ul">
						<li>
							<a href="<?=$BASE_URL;?>Blogs/1">Tip's & How to's</a></li>
						<li><a href="<?=$BASE_URL;?>Blogs/2">Giving Game</a></li>
					</ul>
				</div>
				<!-- <span class="subheading"></span> -->
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-destination" style="padding: 3em 0 0;">
	<div class="container-fluid">
		<div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row justify-content-center community">
          <?php
            foreach($blogs as $blog){
              $image = ($blog['blog_type'] == 1) ? $blog['thumbnail'] : 'assets/site/images/video.png';
          ?>
              <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                <div class="blog-entry align-self-stretch">
                  <a href="<?=$BASE_URL .'Blog_Details/' .$blog['id'];?>" class="block-20" style="background-image: url('<?=$BASE_URL .$image;?>');">
                  </a>
                  <div class="text p-4 d-block">
                    <span class="tag"><?=date("M d, Y", strtotime($blog['created']));?></span>
                    <h3 class="heading mt-3">
                      <a href="#"><?=substr($blog['title'], 0, 20);?></a>
                      <?php
                        if(strlen($blog['title']) > 20){
                          echo "...";
                        }
                      ?>
                    </h3>
                    <div class="meta mb-3">
                      <div><a href="#">By Admin</a></div>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            }
          ?>
          <?php
            if(!count($blogs)){
          ?>
              <h3> No blogs found! </h3>
          <?php
            }
          ?>

          <!--
          <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
				
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20" style="background-image: url('<?=$BASE_URL;?>assets/site/images/img3.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<span class="tag">june 4, 2018</span>
                <h3 class="heading mt-3"><a href="#">Etiam ultricies nisi vel augue quisque rutrum aenean </a></h3>
                <div class="meta mb-3">
                  <div><a href="#">By Admin</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
				
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20" style="background-image: url('<?=$BASE_URL;?>assets/site/images/img4.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<span class="tag">june 4, 2018</span>
                <h3 class="heading mt-3"><a href="#">Etiam ultricies nisi vel augue quisque rutrum aenean </a></h3>
                <div class="meta mb-3">
                  <div><a href="#">By Admin</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
				
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20" style="background-image: url('<?=$BASE_URL;?>assets/site/images/img5.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<span class="tag">june 4, 2018</span>
                <h3 class="heading mt-3"><a href="#">Etiam ultricies nisi vel augue quisque rutrum aenean </a></h3>
                <div class="meta mb-3">
                  <div><a href="#">By Admin</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
				
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20" style="background-image: url('<?=$BASE_URL;?>assets/site/images/img2.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<span class="tag">june 4, 2018</span>
                <h3 class="heading mt-3"><a href="#">Etiam ultricies nisi vel augue quisque rutrum aenean </a></h3>
                <div class="meta mb-3">
                  <div><a href="#">By Admin</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
				
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20" style="background-image: url('<?=$BASE_URL;?>assets/site/images/img3.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<span class="tag">june 4, 2018</span>
                <h3 class="heading mt-3"><a href="#">Etiam ultricies nisi vel augue quisque rutrum aenean </a></h3>
                <div class="meta mb-3">
                  <div><a href="#">By Admin</a></div>
                </div>
              </div>
            </div>
          </div>
          -->
		
		</div>

		</div>
		</div>
	</div>
</section>

<?php
include_once'include/footer.php';
?>