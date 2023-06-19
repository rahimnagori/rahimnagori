<?php
include_once'include/header.php';
?>

<section class="ftco-section ftco-counter img img_counter2" id="section-counter" style="background-image: url(<?=$BASE_URL;?>assets/site/images/back.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <h2 class="mb-4 community_heading"><?=$parentCategoryDetails['name'];?></h2>
        <span class="subheading"><?=$parentCategoryDetails['description'];?></span>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section ftco-destination" style="padding: 3em 0 0;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-7">
        <div class="qodef-shortcode qodef-m  qodef-tracks-list qodef-layout--standard qodef--has-artist " data-album-id="552">
          <div id="qodef-m-track-player-552" class="qodef-m-track-player" style="width: 0px; height: 0px;">
            <img id="jp_poster_1" style="width: 0px; height: 0px; display: none;">
            <audio id="jp_audio_1" preload="metadata" src="https://neobeat.qodeinteractive.com/wp-content/uploads/2020/02/Black-Hole-Sun.mp3" title="Black Hole Sun"></audio>
          </div>
          <div class="qodef-m-artist" style="background-image: url('<?=$BASE_URL;?>assets/site/images/img2.jpg')">
            <img src="<?=$BASE_URL .$categoryDetails['icon'];?>" class="qodef-m-artist-image" alt="v" srcset="<?=$BASE_URL .$categoryDetails['icon'];?>" sizes="(max-width: 280px) 100vw, 280px" width="280" height="280"> 
            <div class="qodef-m-artist-content">
               <h4 itemprop="author" class="qodef-m-artist-content-name"><?=$categoryDetails['name'];?></h4>
               <p class="qodef-m-artist-content-description"><?=$categoryDetails['description'];?></p>
            </div>
          </div>
         

         <div class="qodef-m-tracks-list-item qodef-e qodef--free-download down_222" data-track-id="19" data-track-index="0">
                <div class="qodef-e-spinner">

                   <span class="qodef-icon-linea-icons icon-music-record qodef-e-spinner-icon"></span> 
                </div>
                
                <div class="qodef-e-heading">
                   <h5 class="qodef-e-heading-title" title="Click to play">
                      <span class="qodef-e-heading-title-label">Sound</span>
                   </h5>
                </div>
                <div class="qodef-e-action">
                   <a class="qodef-e-action-control qodef--free-download" style="width: 180px;" href="#" target="_self" title="Free Download" download="">Key
                   </a>
                   <a class="qodef-e-action-control qodef--play" href="#" target="_self" title="Click to play">
                    BMP
                   </a>
                   <a class="qodef-e-action-control qodef--play" href="#" target="_self" title="Click to play">
                    Credit
                   </a>
                  <!--  <a class="qodef-e-action-control qodef--play" href="#" target="_self" title="Click to play">
                    Desc
                   </a> -->
                   <a class="qodef-e-action-control qodef--play" href="#" target="_self" title="Click to play">
                    
                   </a>
                   <a class="qodef-e-action-control qodef--play" href="#" target="_self" title="Click to play">
                    
                   </a>
                </div>
              </div>

          <?php
            foreach($categorySounds as $serialNumber => $categorySound){
              $soundTags = explode(",", $categorySound['sound_tags']);
          ?>
              <div class="sound_div">
              <div class="qodef-m-tracks-list-item qodef-e qodef--free-download" data-track-id="19" data-track-index="0">
                <div class="qodef-e-spinner">
                  <!--  <img src="https://bluediamondresearch.com/WEB01/music/assets/site/images/categories/b1d16c786fc24c35a00f890d488a2239.png"> -->
                 <!--  <span class="qodef-icon-linea-icons icon-music-record qodef-e-spinner-icon"></span> -->
                 <a class="qodef-e-action-control qodef--play play_btn" href="#" target="_self" title="Click to play">
                    <?php
                      if($categorySound['sound_type'] == 3){
                    ?>
                        <i class="fa fa-file-archive-o" aria-hidden="true"></i>
                    <?php
                      }else{
                    ?>
                        <i class="fa fa-play" aria-hidden="true"></i>
                    <?php
                      }
                    ?>
                  </a> 
                </div>
                <div class="qodef-e-heading">
                  <h5 class="qodef-e-heading-title" title="Click to play">
                    <span class="qodef-e-heading-title-number"><?=$serialNumber + 1;?></span>
                    <span class="qodef-e-heading-title-label"><?=$categorySound['sound_title'];?></span>
                  </h5>
                  <?php
                    foreach($soundTags as $soundTag){
                  ?>
                      <span class="qodef-e-heading-info"><?=trim($soundTag);?></span>
                  <?php
                    }
                  ?>
                </div>
                <div class="qodef-e-action">
                  <a class="qodef-e-action-control qodef--play" style="width: 180px;" href="#" target="_self" title="Click to play">
                    <?=$categorySound['sound_key'];?>
                  </a>
                  <a class="qodef-e-action-control qodef--play" href="#" target="_self" title="Click to play">
                    <?=$categorySound['sound_bpm'];?>
                  </a>
                  <a class="qodef-e-action-control qodef--play" href="#" target="_self" title="Click to play">
                    <?=$categorySound['credit_amount'];?>
                  </a>
                  
                  <!--
                    <a class="qodef-e-action-control qodef--play" href="#" target="_self" title="Click to play">
                      5
                    </a>
                    <a class="qodef-e-action-control qodef--play" href="#" target="_self" title="Click to play">
                      15
                    </a>
                    <a class="qodef-e-action-control qodef--play" href="#" target="_self" title="Click to play">
                      20
                    </a>
                  -->
                  <a class="qodef-e-action-control qodef--play" onclick="return alert('Coming Soon');" href="#" target="_self" title="Click to play">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                  </a>
                   <a class="qodef-e-action-control qodef--play" onclick="return alert('Coming Soon');" href="#" target="_self" title="Click to play">
                    <!-- <i class="fa fa-play" aria-hidden="true"></i> -->
                    <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>
                  </a>
                </div>
              </div>

              <div class="decs">
                <a class="qodef-e-action-control qodef--play" href="#" target="_self" title="Click to play">
                    <?=substr(strip_tags($categorySound['sound_description']), 0, 200);?>
                  </a>
              </div>

              </div>
          <?php
            }
          ?>



          <?php
            if(false){
            foreach($categorySounds as $serialNumber => $categorySound){
          ?>
              <div class="qodef-m-tracks-list-item qodef-e qodef--free-download" data-track-id="19" data-track-index="0">
                <div class="qodef-e-spinner">
                   <span class="qodef-icon-linea-icons icon-music-record qodef-e-spinner-icon"></span> 
                </div>
                <div class="qodef-e-heading">
                   <h5 class="qodef-e-heading-title" title="Click to play">
                      <span class="qodef-e-heading-title-number"><?=$serialNumber + 1;?></span>
                      <span class="qodef-e-heading-title-label"><?=$categorySound['sound_title'];?></span>
                   </h5>
                   <span class="qodef-e-heading-info"><?=$categorySound['sound_key'];?></span>
                </div>
                <div class="qodef-e-action">
                   <span class="qodef-e-action-track-length"><?=$categorySound['sound_bpm'];?></span>
                   <a class="qodef-e-action-control qodef--free-download" href="#" target="_self" title="Free Download" download="">

                      <svg class="qodef-e-action-control-icon qodef--download" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18.998px" height="19.25px" viewBox="5.002 4.75 18.998 19.25" enable-background="new 5.002 4.75 18.998 19.25" xml:space="preserve">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M23.501,17.502v4c0,1.104-0.896,2-2,2h-14c-1.104,0-2-0.896-2-2v-4"></path>
                         <polyline stroke-linecap="round" stroke-linejoin="round" points="9.501,12.502 14.501,17.502 19.501,12.502 "></polyline>
                         <line stroke-linecap="round" stroke-linejoin="round" x1="14.501" y1="17.502" x2="14.501" y2="5.501"></line>
                      </svg>
                   </a>
                   <a class="qodef-e-action-control qodef--play" href="#" target="_self" title="Click to play">
                      <svg class="qodef-e-action-control-icon qodef--play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                         <g>
                            <path d="M144,124.9L353.8,256L144,387.1V124.9 M128,96v320l256-160L128,96L128,96z"></path>
                         </g>
                      </svg>
                      <svg class="qodef-e-action-control-icon qodef--pause" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                         <g>
                            <path d="M191,112v288h-47V112H191 M207,96h-79v320h79V96L207,96z"></path>
                            <path d="M368,112v288h-47V112H368 M384,96h-79v320h79V96L384,96z"></path>
                         </g>
                      </svg>
                   </a>
                </div>
              </div>
          <?php
            }
            }
          ?>
        </div>
      </div>

      <div class="col-md-4 ftco-animate fadeInUp ftco-animated details_new">
        <h2 class="mb-2"><?=$categoryDetails['name'];?></h2>
        <p><?=$categoryDetails['description'];?></p>

        <?php
          if(!empty($userdata)){
        ?>
            <a href="#" onclick="return alert('Coming Soon');" class="btn pricing-plan-purchase-btn download">Download Now</a>
        <?php
          }else{
        ?>
            <a href="#" data-toggle="modal" data-target="#loginModal" class="btn pricing-plan-purchase-btn download">Download Now</a>
        <?php
          }
        ?>
        <div class="tag-widget post-tag-container mb-5 mt-5">
          <div class="tagcloud">
            <?php
              foreach($categories as $category){
                if($parentCategoryDetails['id'] == $category['id']) continue;
            ?>
                <a href="<?=$BASE_URL .'Sounds/' .$category['id'];?>" class="tag-cloud-link"><?=$category['name'];?></a>
            <?php
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-destination" style="padding: 3em 0 0;">
  <div class="container">


<div class="row justify-content-center">
      <div class="col-md-12 ftco-animate ">
      <h2>People also viewed these packs </h2>
      <span class="subheading mb-4" style="width: 100%;">Lorem Ipsum rhis ts toshhoop svetsgin. Proin gravida nibh lorem quis bibendum aucto bibendum aucto </span>
      </div>
    </div>


    <div class="row justify-content-center community">
      <div class="col-md-12">
            <div class="sounds-slider owl-carousel ftco-animate">
          <div class="item">
            <div class="destination">
              <a href="sound-detail.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img1.png);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Hip Hop R&B </a></h3>
                
              </div>
            </div>
          </div>
          <div class="item">
            <div class="destination">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img2.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Trap</a></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="destination">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img3.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Pop</a></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="destination">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img4.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Afro Beat</a></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="destination">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img5.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Dancehall & Reggae</a></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="destination">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img2.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Reggaeton</a></h3>
              </div>
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