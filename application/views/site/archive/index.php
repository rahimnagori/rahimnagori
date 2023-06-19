<?php
include_once'include/header.php';
?>

<section class="banner_section">
	<div class="banner_slider">
		<div class="banner-slider owl-carousel ftco-animate">
					<div class="item">
						<div class="hero-wrap js-fullheight" style="background-image: url('<?=$BASE_URL;?>assets/site/images/img2.jpg');">
							<div class="overlay"></div>
							<div class="container">
								<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
									<div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
										<h1 class="text-center mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Listen to new music</strong></h1>
										<p class="text-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>

										<!-- <a href="#" class="btn btn-primary mt-4 px-4 py-3">Start Free Trial</a> -->

									</div>
								</div>
							</div>
						</div>


						<div class="player">
							<div class="player-heading">
								<h4 class="player-track-title jp-title">Shadows Yharnam </h4>
						    </div>

						    <div class="qodef-m-player-middle">

						      <div class="qodef-m-track-progress jp-gui jp-interface">
						         <div class="jp-progress">
						            <div class="jp-seek-bar">
						               <div class="jp-play-bar"></div>
						            </div>
						         </div>
						      </div>


						    <div class="qodef-m-track-time jp-gui jp-interface">
						    	<span class="qodef-m-track-time-current jp-current-time">00:00</span>/<span class="qodef-m-track-time-duration jp-duration">00:18</span>
						    </div>

						    <div class="qodef-m-track-time jp-gui jp-interface"> <span class="qodef-m-track-time-current jp-current-time">00:00</span>/<span class="qodef-m-track-time-duration jp-duration">00:18</span></div>

							      <div class="qodef-m-player-controls jp-gui jp-interface">
							         <ul class="jp-controls">
							            <li>
							               <a class="jp-previous">
							                  <svg class="qodef-m-player-controls-icon qodef--previous" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
							                     <path d="M96,96v320h79V274.2L416,416V96L175,237.8V96H96z M175.6,256l7.6-4.4L400,124v0v264L183.1,260.4L175.6,256z M112,112h47v125.8v28v8.5V400h-47V112z"></path>
							                  </svg>
							               </a>
							            </li>
							            <li>
							               <a class="jp-play">
							                  <svg class="qodef-m-player-controls-icon qodef--play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
							                     <g>
							                        <path d="M144,124.9L353.8,256L144,387.1V124.9 M128,96v320l256-160L128,96L128,96z"></path>
							                     </g>
							                  </svg>
							                
							               </a>
							            </li>
							            <li>
							               <a class="jp-next">
							                  <svg class="qodef-m-player-controls-icon qodef--next" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
							                     <path d="M337,96v141.8L96,96v320l241-141.8V416h79V96H337z M328.9,260.4L112,388V124v0l216.9,127.6l7.6,4.4L328.9,260.4z M400,400h-47V274.2v-8.5v-28V112h47V400z"></path>
							                  </svg>
							               </a>
							            </li>
							         </ul>
							      </div>


							       <div class="qodef-m-volume-control jp-gui jp-interface">
						         <div class="jp-volume-controls">
						            <a class="jp-mute">
						               <svg class="qodef-m-player-controls-icon qodef--volume" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25.875px" height="27.609px" viewBox="0 0 25.875 27.609" enable-background="new 0 0 25.875 27.609" xml:space="preserve">
						                  <g>
						                     <path d="M5.56,19.356H0.234V8.388H5.56l8.174-8.174V27.53L5.56,19.356z M1.078,18.513h4.799l7.014,7.014V2.218		L5.876,9.231H1.078V18.513z M16.687,21.888c2.215,0,4.104-0.782,5.669-2.347c1.564-1.564,2.347-3.454,2.347-5.669		s-0.783-4.104-2.347-5.669c-1.565-1.564-3.454-2.347-5.669-2.347V5.013c2.46,0,4.552,0.862,6.275,2.584		c1.722,1.723,2.584,3.815,2.584,6.275c0,2.461-0.862,4.553-2.584,6.275c-1.723,1.723-3.815,2.584-6.275,2.584V21.888z		 M19.376,16.562c0.738-0.738,1.107-1.635,1.107-2.689s-0.369-1.951-1.107-2.689s-1.635-1.107-2.689-1.107V9.231		c1.3,0,2.399,0.448,3.296,1.345s1.345,1.996,1.345,3.296c0,1.301-0.448,2.399-1.345,3.296s-1.996,1.345-3.296,1.345v-0.844		C17.742,17.669,18.638,17.3,19.376,16.562z"></path>
						                  </g>
						               </svg>
						           
						            </a>
						            <div class="jp-volume-bar">
						               <div class="jp-volume-bar-value" style="width: 80%;"></div>
						            </div>
						         </div>
						      </div>


						</div>

						<div class="qodef-m-player-footer"> <a itemprop="url" class="qodef-m-album-title" href="#">The Eldritch Truth</a> </div>
					</div>
				</div>
					<div class="item">
						<div class="hero-wrap js-fullheight" style="background-image: url('<?=$BASE_URL;?>assets/site/images/img3.jpg');">
							<div class="overlay"></div>
							<div class="container">
								<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
									<div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
										<h1 class="mb-4 text-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Listen to new music</strong></h1>
										<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="player">
							<div class="player-heading">
								<h4 class="player-track-title jp-title">Shadows Yharnam </h4>
						    </div>

						    <div class="qodef-m-player-middle">

						      <div class="qodef-m-track-progress jp-gui jp-interface">
						         <div class="jp-progress">
						            <div class="jp-seek-bar">
						               <div class="jp-play-bar"></div>
						            </div>
						         </div>
						      </div>


						    <div class="qodef-m-track-time jp-gui jp-interface">
						    	<span class="qodef-m-track-time-current jp-current-time">00:00</span>/<span class="qodef-m-track-time-duration jp-duration">00:18</span>
						    </div>

						    <div class="qodef-m-track-time jp-gui jp-interface"> <span class="qodef-m-track-time-current jp-current-time">00:00</span>/<span class="qodef-m-track-time-duration jp-duration">00:18</span></div>

							      <div class="qodef-m-player-controls jp-gui jp-interface">
							         <ul class="jp-controls">
							            <li>
							               <a class="jp-previous">
							                  <svg class="qodef-m-player-controls-icon qodef--previous" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
							                     <path d="M96,96v320h79V274.2L416,416V96L175,237.8V96H96z M175.6,256l7.6-4.4L400,124v0v264L183.1,260.4L175.6,256z M112,112h47v125.8v28v8.5V400h-47V112z"></path>
							                  </svg>
							               </a>
							            </li>
							            <li>
							               <a class="jp-play">
							                  <svg class="qodef-m-player-controls-icon qodef--play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
							                     <g>
							                        <path d="M144,124.9L353.8,256L144,387.1V124.9 M128,96v320l256-160L128,96L128,96z"></path>
							                     </g>
							                  </svg>
							                
							               </a>
							            </li>
							            <li>
							               <a class="jp-next">
							                  <svg class="qodef-m-player-controls-icon qodef--next" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
							                     <path d="M337,96v141.8L96,96v320l241-141.8V416h79V96H337z M328.9,260.4L112,388V124v0l216.9,127.6l7.6,4.4L328.9,260.4z M400,400h-47V274.2v-8.5v-28V112h47V400z"></path>
							                  </svg>
							               </a>
							            </li>
							         </ul>
							      </div>


							       <div class="qodef-m-volume-control jp-gui jp-interface">
						         <div class="jp-volume-controls">
						            <a class="jp-mute">
						               <svg class="qodef-m-player-controls-icon qodef--volume" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25.875px" height="27.609px" viewBox="0 0 25.875 27.609" enable-background="new 0 0 25.875 27.609" xml:space="preserve">
						                  <g>
						                     <path d="M5.56,19.356H0.234V8.388H5.56l8.174-8.174V27.53L5.56,19.356z M1.078,18.513h4.799l7.014,7.014V2.218		L5.876,9.231H1.078V18.513z M16.687,21.888c2.215,0,4.104-0.782,5.669-2.347c1.564-1.564,2.347-3.454,2.347-5.669		s-0.783-4.104-2.347-5.669c-1.565-1.564-3.454-2.347-5.669-2.347V5.013c2.46,0,4.552,0.862,6.275,2.584		c1.722,1.723,2.584,3.815,2.584,6.275c0,2.461-0.862,4.553-2.584,6.275c-1.723,1.723-3.815,2.584-6.275,2.584V21.888z		 M19.376,16.562c0.738-0.738,1.107-1.635,1.107-2.689s-0.369-1.951-1.107-2.689s-1.635-1.107-2.689-1.107V9.231		c1.3,0,2.399,0.448,3.296,1.345s1.345,1.996,1.345,3.296c0,1.301-0.448,2.399-1.345,3.296s-1.996,1.345-3.296,1.345v-0.844		C17.742,17.669,18.638,17.3,19.376,16.562z"></path>
						                  </g>
						               </svg>
						           
						            </a>
						            <div class="jp-volume-bar">
						               <div class="jp-volume-bar-value" style="width: 80%;"></div>
						            </div>
						         </div>
						      </div>


						</div>

						<div class="qodef-m-player-footer"> <a itemprop="url" class="qodef-m-album-title" href="#">The Eldritch Truth</a> </div>
					</div>
					</div>
					<div class="item">
						<div class="hero-wrap js-fullheight" style="background-image: url('<?=$BASE_URL;?>assets/site/images/img4.jpg');">
							<div class="overlay"></div>
							<div class="container">
								<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
									<div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
										<h1 class="mb-4 text-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Listen to new music</strong></h1>
										<p class="text-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="player">
							<div class="player-heading">
								<h4 class="player-track-title jp-title">Shadows Yharnam </h4>
						    </div>

						    <div class="qodef-m-player-middle">

						      <div class="qodef-m-track-progress jp-gui jp-interface">
						         <div class="jp-progress">
						            <div class="jp-seek-bar">
						               <div class="jp-play-bar"></div>
						            </div>
						         </div>
						      </div>


						    <div class="qodef-m-track-time jp-gui jp-interface">
						    	<span class="qodef-m-track-time-current jp-current-time">00:00</span>/<span class="qodef-m-track-time-duration jp-duration">00:18</span>
						    </div>

						    <div class="qodef-m-track-time jp-gui jp-interface"> <span class="qodef-m-track-time-current jp-current-time">00:00</span>/<span class="qodef-m-track-time-duration jp-duration">00:18</span></div>

							      <div class="qodef-m-player-controls jp-gui jp-interface">
							         <ul class="jp-controls">
							            <li>
							               <a class="jp-previous">
							                  <svg class="qodef-m-player-controls-icon qodef--previous" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
							                     <path d="M96,96v320h79V274.2L416,416V96L175,237.8V96H96z M175.6,256l7.6-4.4L400,124v0v264L183.1,260.4L175.6,256z M112,112h47v125.8v28v8.5V400h-47V112z"></path>
							                  </svg>
							               </a>
							            </li>
							            <li>
							               <a class="jp-play">
							                  <svg class="qodef-m-player-controls-icon qodef--play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
							                     <g>
							                        <path d="M144,124.9L353.8,256L144,387.1V124.9 M128,96v320l256-160L128,96L128,96z"></path>
							                     </g>
							                  </svg>
							                
							               </a>
							            </li>
							            <li>
							               <a class="jp-next">
							                  <svg class="qodef-m-player-controls-icon qodef--next" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
							                     <path d="M337,96v141.8L96,96v320l241-141.8V416h79V96H337z M328.9,260.4L112,388V124v0l216.9,127.6l7.6,4.4L328.9,260.4z M400,400h-47V274.2v-8.5v-28V112h47V400z"></path>
							                  </svg>
							               </a>
							            </li>
							         </ul>
							      </div>


							       <div class="qodef-m-volume-control jp-gui jp-interface">
						         <div class="jp-volume-controls">
						            <a class="jp-mute">
						               <svg class="qodef-m-player-controls-icon qodef--volume" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25.875px" height="27.609px" viewBox="0 0 25.875 27.609" enable-background="new 0 0 25.875 27.609" xml:space="preserve">
						                  <g>
						                     <path d="M5.56,19.356H0.234V8.388H5.56l8.174-8.174V27.53L5.56,19.356z M1.078,18.513h4.799l7.014,7.014V2.218		L5.876,9.231H1.078V18.513z M16.687,21.888c2.215,0,4.104-0.782,5.669-2.347c1.564-1.564,2.347-3.454,2.347-5.669		s-0.783-4.104-2.347-5.669c-1.565-1.564-3.454-2.347-5.669-2.347V5.013c2.46,0,4.552,0.862,6.275,2.584		c1.722,1.723,2.584,3.815,2.584,6.275c0,2.461-0.862,4.553-2.584,6.275c-1.723,1.723-3.815,2.584-6.275,2.584V21.888z		 M19.376,16.562c0.738-0.738,1.107-1.635,1.107-2.689s-0.369-1.951-1.107-2.689s-1.635-1.107-2.689-1.107V9.231		c1.3,0,2.399,0.448,3.296,1.345s1.345,1.996,1.345,3.296c0,1.301-0.448,2.399-1.345,3.296s-1.996,1.345-3.296,1.345v-0.844		C17.742,17.669,18.638,17.3,19.376,16.562z"></path>
						                  </g>
						               </svg>
						           
						            </a>
						            <div class="jp-volume-bar">
						               <div class="jp-volume-bar-value" style="width: 80%;"></div>
						            </div>
						         </div>
						      </div>


						</div>

						<div class="qodef-m-player-footer"> <a itemprop="url" class="qodef-m-album-title" href="#">The Eldritch Truth</a> </div>
					</div>
					</div>
				</div>
	</div>
</section>


<section class=""> 
	<section class="ftco-section testimony-section">
	<div class="container">
		<div class="row justify-content-start align-items-center">

			<div class="col-md-6 heading-section ftco-animate">
		       <div class="img_right_side">
		       	<img src="<?=$BASE_URL;?>assets/site/images/side2.jpg">
		       </div>
			</div>

			<div class="col-md-6 heading-section ftco-animate">
				<!-- <span class="subheading">Concept</span> -->
				<h2 class="mb-4 pb-3"><strong>A Huge Live Show Music Box Set. </strong></h2> 
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
				<!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p> -->
				<!-- <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Download Now</a></p> -->
			</div>
			<!-- <div class="col-md-1"></div> -->
			
		</div>
	</div>
</section>
<section class="ftco-section testimony-section">
	<div class="container">
		<div class="row justify-content-start align-items-center">
			<div class="col-md-6 heading-section ftco-animate">
				<!-- <span class="subheading">Sounds</span> -->
				<h2 class="mb-4 pb-3"><strong>Best DJ Sets Now On Your Device. </strong></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
				<!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p> -->
				<!-- <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Download Now</a></p> -->
			</div>
			<!-- <div class="col-md-1"></div> -->
			<div class="col-md-6 heading-section ftco-animate">
		       <div class="img_right_side">
		       	<img src="<?=$BASE_URL;?>assets/site/images/side1.jpg">
		       </div>
			</div>
		</div>
	</div>
</section>

</section>


<section class="ftco-section ftco-destination" style="padding: 3em 0 0;">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-12 text-center heading-section ftco-animate ">
				
				<h2 class="mb-4"><strong>Listen Online</strong></h2>
				<span class="subheading">Lorem Ipsum rhis ts toshhoop svetsgin. Proin gravida nibh lorem quis bibendum aucto bibendum aucto </span>
			</div>
		</div>

    <div class="row justify-content-center">
      <?php
        foreach($categories as $category){
          if($category['is_featured'] != 1) continue;
      ?>
          <div class="col-md-4">
            <div class="destination">
              <a href="<?=$BASE_URL .'Sounds/' .$category['id'];?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL .$category['icon'];?>);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="<?=$BASE_URL .'Sounds/' .$category['id'];?>"><?=$category['name'];?></a></h3>
                <span class="listing"><?=$category['description'];?></span>
              </div>
            </div>
          </div>
      <?php
        }
      ?>

			<div class="col-md-4" style="display:none;">
				<div class="destination dest">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img2.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">90s Nostalgia</a></h3>
								<span class="listing">Hindi Radio</span>
							</div>
						</div>
			</div>
			<div class="col-md-4" style="display:none;"> 
                  <div class="destination">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img3.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Classics 30s and 40s</a></h3>
								<span class="listing">Just Updated</span>
							</div>
						</div>
			</div>
		</div>

		<div class="row justify-content-center mb-5" style="display:none;" >
			<div class="col-md-4">
				<div class="destination">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img4.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">It's A Party</a></h3>
								<span class="listing">Hindi Radio</span>
							</div>
						</div>
			</div>

			<div class="col-md-4">
				<div class="destination dest">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img5.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">90s Nostalgia</a></h3>
								<span class="listing">Hindi Radio</span>
							</div>
						</div>
			</div>
			<div class="col-md-4"> 
                  <div class="destination">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img1.png);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Classics 30s and 40s</a></h3>
								<span class="listing">Just Updated</span>
							</div>
						</div>
			</div>
		</div>


	</div>
</section>

		
<section class="ftco-section ftco-destination" style="padding: 0 0 3em;">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h2 class="mb-4"><strong>Membership Plan</strong></h2>
				<span class="subheading">Lorem Ipsum rhis ts toshhoop svetsgin. Proin gravida nibh lorem quis bibendum aucto </span>
			</div>
		</div>

		<div class="row">
      <?php
        foreach($plans as $plan){
      ?>
          <div class="col-md-4">
            <div class="card pricing-card pricing-plan-basic">
              <div class="card-body"><i class="fa fa-free-code-camp" aria-hidden="true"></i>
                <p class="pricing-plan-title"><?=$plan['plan_name'];?></p>
                <h3 class="pricing-plan-cost ml-auto">$<?=$plan['plan_fee'];?>
                </h3>
                <?=$plan['plan_description'];?>
                <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
              </div>
            </div>
          </div>
      <?php
        }
      ?>
      <div class="col-md-4" style="display:none;">
        <div class="card pricing-card pricing-card-highlighted  pricing-plan-pro">
          <div class="card-body">
            <i class="fa fa-trophy" aria-hidden="true"></i>
            <p class="pricing-plan-title">Pro</p>
            <h3 class="pricing-plan-cost ml-auto">$49</h3>
            <ul class="pricing-plan-features">
              <li>Unlimited conferences</li>
              <li>100 participants max</li>
              <li>Custom Hold Music</li>
              <li>10 participants max</li>
            </ul>
            <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            
          </div>
        </div>
      </div>
      <div class="col-md-4" style="display:none;" >
        <div class="card pricing-card pricing-plan-enterprise">
          <div class="card-body">
            <i class="fa fa-gift" aria-hidden="true"></i>
            <p class="pricing-plan-title">Enterprise</p>
            <h3 class="pricing-plan-cost ml-auto">$69</h3>
            <ul class="pricing-plan-features">
              <li>Unlimited conferences</li>
              <li>100 participants max</li>
              <li>Custom Hold Music</li>
              <li>10 participants max</li>
            </ul>
            <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            <!-- <a href="#" class="link_try">Try 7 Days Free</a> -->
          </div>
        </div>
      </div>
    </div>
	</div>
</section>

<section class="ftco-section ftco-destination">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				
				<h2 class="mb-4"><strong>Artists You May Like </strong></h2>
				<span class="subheading">Lorem Ipsum rhis ts toshhoop svetsgin. Proin gravida nibh lorem quis bibendum aucto </span>
			</div>
		</div>
		</div>
		<div class="row" style="margin: 0">
			<div class="col-md-12">
				<div class="destination-slider owl-carousel ftco-animate">
					<?php
            foreach($categories as $category){
          ?>
              <div class="item">
                <div class="destination destination_2">
                  <a href="<?=$BASE_URL .'Sounds/' .$category['id'];?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL .$category['icon'];?>);">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text text-center p-3">
                    <h3><a href="<?=$BASE_URL .'Sounds/' .$category['id'];?>"><?=$category['name'];?></a></h3>
                    <span class="listing"><?=$category['description'];?></span>
                  </div>
                </div>
              </div>
          <?php
            }
          ?>
					<div class="item" style="display:none;" >
						<div class="destination destination_2">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img2.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text text-center p-3">
								<h3><a href="#">90s Nostalgia</a></h3>
								<span class="listing">Hindi Radio</span>
							</div>
						</div>
					</div>
					<div class="item" style="display:none;">
						<div class="destination destination_2">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img3.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text text-center p-3">
								<h3><a href="#">Classics 30s and 40s</a></h3>
								<span class="listing">Just Updated</span>
							</div>
						</div>
					</div>
					<div class="item" style="display:none;">
						<div class="destination destination_2">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img4.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text text-center p-3">
								<h3><a href="#">Oldies 50s and 60s</a></h3>
								<span class="listing">Hindi Radio</span>
							</div>
						</div>
					</div>
					<div class="item" style="display:none;">
						<div class="destination destination_2">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img5.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text text-center p-3">
								<h3><a href="#">Classics 30s and 40s</a></h3>
								<span class="listing">Hindi Radio</span>
							</div>
						</div>
					</div>
					<div class="item" style="display:none;">
						<div class="destination destination_2">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL;?>assets/site/images/img2.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text text-center p-3">
								<h3><a href="#">90s Nostalgia</a></h3>
								<span class="listing">Hindi Radio</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
</section>


<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(<?=$BASE_URL;?>assets/site/images/bg_10.jpg);">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<h2 class="mb-4">Some fun facts</h2>
				<span class="subheading">More than 100,000 websites hosted</span>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="row justify-content-center">
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="<?=count($users);?>">0</strong>
								<span>Total Users</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="<?=count($categories);?>">0</strong>
								<span>Total Categories</span>
							</div>
						</div>
					</div>
					
				
				</div>
			</div>
		</div>
	</div>
</section>



<section class="ftco-section services-section bg-light">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
				<div class="media services d-block text-center">
					<div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
					<div class="media-body p-2 mt-2">
						<h3 class="heading mb-3">Create an account</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
				<div class="media services d-block text-center">
					<div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
					<div class="media-body p-2 mt-2">
						<h3 class="heading mb-3">Choose a plan</h3>
						<p>Donec in sodales dui, a blandit nunc. Pellen-tesque id eros venenatis, sollicitudin neque sodales, vehicula nibh. Nam massa odio, portti-tor vitae efficitur non. </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
				<div class="media services d-block text-center">
					<div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
					<div class="media-body p-2 mt-2">
						<h3 class="heading mb-3">Download Music</h3>
						<p>Ablandit nunc. Pellentesque id eros venenatis, sollicitudin neque sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non, ultric-ies volutpat tellus. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php
include_once'include/footer.php';
?>