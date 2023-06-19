<?php
include_once'include/header.php';
?>

<section class="ftco-section ftco-counter img img_counter2" id="section-counter" style="background-image: url(<?=$BASE_URL;?>assets/site/images/back.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <h2 class="mb-4 community_heading">Become a Partner</h2>
        <span class="subheading">Lorem ipsum dolor sit amet elit.</span>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-destination" style="padding: 3em 0 0;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 sliders_section">
        <?php
          for($i = 1; $i <= 5; $i++){
        ?>
            <div class="row justify-content-center">
              <div class="col-md-12 ftco-animate ">
                <h2>Lorem ipsum</h2>
                <span class="subheading mb-4" style="width: 100%;">Lorem Ipsum rhis ts toshhoop svetsgin. Proin gravida nibh lorem quis bibendum aucto bibendum aucto </span>
              </div>
            </div>
        <?php
          }
        ?>
      </div>
    </div>
  </div>
</section>

<?php
include_once'include/footer.php';
?>