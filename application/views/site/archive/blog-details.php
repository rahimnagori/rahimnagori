<?php
include_once'include/header.php';
?>

 <section class="ftco-section ftco-counter img img_counter2" id="section-counter" style="background-image: url(<?=$BASE_URL;?>assets/site/images/back.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <h2 class="mb-4 community_heading">Blog Details</h2>
        <span class="subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
        <!-- <span class="subheading"></span> -->

      </div>
    </div>
  </div>
</section>


  <section class="ftco-section ftco-degree-bg blog_back">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate fadeInUp ftco-animated">
            <p>
              <?php
                if($blogDetails['blog_type'] == 1){
              ?>
                  <img src="<?=$BASE_URL .$blogDetails['thumbnail'];?>" alt="" class="img-fluid">
              <?php
                }else{
              ?>
                  <iframe width="100%" height="420" src="<?=$blogDetails['video_url'];?>"> </iframe>
              <?php
                }
              ?>
            </p>

            <h2 class="mb-3" style="word-break: break-word;" ><?=$blogDetails['title'];?></h2>
            <?=$blogDetails['description'];?>
            <!--
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>

            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Tips</a>
                <a href="#" class="tag-cloud-link">Sounds</a>
                <a href="#" class="tag-cloud-link">Community</a>
              </div>
            </div>
            -->
            

          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate fadeInUp ftco-animated">
          
            <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
              <h3 mb-3>Recent Blog</h3>
              <?php
                foreach($recentBlogs as $recentBlog){
                  $image = ($recentBlog['blog_type'] == 1) ? $recentBlog['thumbnail'] : 'assets/site/images/video.png';
              ?>
                  <div class="block-21 mb-4 d-flex">
                    <a href="<?=$BASE_URL .'Blog_Details/' .$recentBlog['id'];?>" class="blog-img mr-4" style="background-image: url(<?=$BASE_URL .$image;?>);"></a>
                    <div class="text">
                      <h3 class="heading">
                        <a href="<?=$BASE_URL .'Blog_Details/' .$recentBlog['id'];?>"><?=substr($recentBlog['title'], 0, 15);?></a>
                        <?php
                          if(strlen($recentBlog['title']) > 15){
                            echo "...";
                          }
                        ?>
                      </h3>
                      <div class="meta">
                        <div>
                          <a href="<?=$BASE_URL .'Blog_Details/' .$recentBlog['id'];?>"><span class="icon-calendar"></span> <?=date("M d, Y", strtotime($recentBlog['created']));?></a>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                }
              ?>
              <!--
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?=$BASE_URL;?>assets/site/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">All-powerful</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                   
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?=$BASE_URL;?>assets/site/images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                  </div>
                </div>
              </div>
              -->
            </div>

            <div class="sidebar-box ftco-animate fadeInUp ftco-animated" style="display:none;" >
              <h3 mb-3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">sounds</a>
                <a href="#" class="tag-cloud-link">community</a>
                <a href="#" class="tag-cloud-link">tips</a>
                <a href="#" class="tag-cloud-link">tutorial</a>
                <a href="#" class="tag-cloud-link">pop</a>
                <a href="#" class="tag-cloud-link">hooks</a>
                <a href="#" class="tag-cloud-link">blog</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate fadeInUp ftco-animated" style="display:none;">
              <h3 mb-3>What's New</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>
      </div>
    </section>

<?php
include_once'include/footer.php';
?>