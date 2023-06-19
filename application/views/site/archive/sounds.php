<?php
include_once'include/header.php';
?>

<section class="ftco-section ftco-counter img img_counter2" id="section-counter" style="background-image: url(<?=$BASE_URL;?>assets/site/images/back.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <h2 class="mb-4 community_heading"><?=$categoryDetails['name'];?></h2>
        <span class="subheading"><?=$categoryDetails['description'];?></span>
        <div class="block-17 my-4">
          <form method="POST" onsubmit="search_category(event);" class="d-block d-flex">
            <div class="fields d-block d-flex">
              <div class="select-wrap one-third">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="" id="category_id" class="form-control" placeholder="Keyword search">
                  <?php
                    foreach($categories as $category){
                      // if($currentCategoryId == $category['id']) continue;
                  ?>
                      <option value="<?=$category['id'];?>" <?=($currentCategoryId == $category['id']) ? 'selected' : '';?> ><?=$category['name'];?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
            </div>
            <input type="submit" class="search-submit btn btn-primary" value="Search">  
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section ftco-destination" style="padding: 3em 0 0;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        <aside class="aside_list">
          <ul class="list_view">
            <?php
              foreach($categories as $category){
                // if($currentCategoryId == $category['id']) continue;
                $activeClass = ($currentCategoryId == $category['id']) ? "active" : '';
            ?>
                <li class="<?=$activeClass;?>"><a href="<?=$BASE_URL .'Sounds/' .$category['id'];?>"><?=$category['name'];?></a></li>
            <?php
              }
            ?>
          </ul> 
        </aside>
      </div>
      <div class="col-md-10 sliders_section">
        <div class="row justify-content-center" style="display:none;">
          <div class="col-md-12 ftco-animate ">
            <h2>Genre</h2>
            <span class="subheading mb-4" style="width: 100%;">Lorem Ipsum rhis ts toshhoop svetsgin. Proin gravida nibh lorem quis bibendum aucto bibendum aucto </span>
          </div>
        </div>

        <div class="row justify-content-center community">
          <div class="col-md-12">
            <div class="sounds-slider owl-carousel ftco-animate">
              <?php
                foreach($subCategories as $subCategory){
              ?>
                  <div class="item">
                    <div class="destination">
                      <a href="<?=$BASE_URL .'Sound-Details/' .$subCategory['id'];?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$BASE_URL .$subCategory['icon'];?>);">
                        <div class="icon d-flex justify-content-center align-items-center">
                          <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                        </div>
                      </a>
                      <div class="text p-3">
                        <h3><a href="<?=$BASE_URL .'Sound-Details/' .$subCategory['id'];?>"><?=$subCategory['name'];?></a></h3>
                      </div>
                    </div>
                  </div>
              <?php
                }
              ?>
            </div>
            <?php
              if(!count($subCategories)){
            ?>
                <div class="text-center">
                  <img src="<?=$BASE_URL;?>assets/site/images/music_icon.png" >
                </div>
            <?php
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include_once'include/footer.php';
?>

<script>

  function search_category(e){
    e.preventDefault();
    let category_id = $("#category_id").val();
    window.location = base_url + 'Sounds/' + category_id;
  }

</script>