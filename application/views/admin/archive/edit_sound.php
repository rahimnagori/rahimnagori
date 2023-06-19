<?php
  $acceptInput = '.mp3';
  if($soundDetails['sound_type'] == 2){
    $acceptInput = '.wav';
  }
  if($soundDetails['sound_type'] == 3){
    $acceptInput = '.zip';
  }
?>
<style>
.sound-tags .bootstrap-tagsinput {
  width: 100%;
  border-radius: 0 !important;
  box-shadow: none !important;
  padding: 7px;
}
.sound-tags .label {
  font-size: 14px;
}

</style>
<link rel="stylesheet" href="<?=base_url();?>assets/site/css/bootstrap-tagsinput.css">
<div class="form-group">
  <label> Sound Type </label>
  <select name="sound_type" class="form-control" onchange="update_sound_type('edit_sound_input', this.value);" >
    <option value="1" <?=($soundDetails['sound_type'] == 1) ? 'selected' : '';?> >MP3</option>
    <option value="2" <?=($soundDetails['sound_type'] == 2) ? 'selected' : '';?> >WAVE</option>
    <option value="3" <?=($soundDetails['sound_type'] == 3) ? 'selected' : '';?> >ZIP</option>
  </select>
  <input type="hidden" name="sound_id" value="<?=$soundDetails['id'];?>" >
</div>

<div class="form-group">
  <label> Sound Category </label>
  <select name="sound_category" class="form-control" onchange="get_sub_categories(this.value, 'edit_sub_categories_input');" required >
    <option value="">Select a Category</option>
    <?php
      foreach($categories as $category){
    ?>
        <option value="<?=$category['id'];?>" <?=($soundDetails['sound_category'] == $category['id']) ? 'selected' : '';?> ><?=$category['name'];?></option>
    <?php
      }
    ?>
  </select>
</div>

<div class="form-group" id="sub_categories">
  <label> Sound Sub Category </label>
  <select name="sound_sub_category" class="form-control" id="edit_sub_categories_input" required >
    <option value="">Select a Category</option>
    <?php
      foreach($subCategories as $subCategory){
    ?>
        <option value="<?=$subCategory['id'];?>" <?=($soundDetails['sound_sub_category'] == $subCategory['id']) ? 'selected' : '';?> ><?=$subCategory['name'];?></option>
    <?php
      }
    ?>
  </select>
</div>

<div class="form-group">
  <label> Sound Title </label>
  <input type="text" class="form-control" required name="sound_title" value="<?=$soundDetails['sound_title'];?>" >
</div>

<div class="form-group">
  <label> Sound Description </label>
  <textarea class="form-control textarea-edit" required name="sound_description" ><?=$soundDetails['sound_description'];?></textarea>
</div>

<div class="form-group">
  <label> Credit Amount </label>
  <input type="number" class="form-control" required name="credit_amount" step="0.01" value="<?=$soundDetails['credit_amount'];?>" >
</div>

<div class="form-group">
  <label> Sound BPM </label>
  <input type="number" class="form-control" required name="sound_bpm" step="1" value="<?=$soundDetails['sound_bpm'];?>" >
</div>

<div class="form-group">
  <label> Sound Key </label>
  <input type="text" class="form-control" required name="sound_key" value="<?=$soundDetails['sound_key'];?>" >
</div>

<div class="form-group sound-tags">
  <label> Sound Tags </label>
  <input type="text" class="form-control" required name="sound_tags" value="<?=$soundDetails['sound_tags'];?>" data-role="tagsinput" >
</div>

<div class="form-group">
  <label> Sound File </label>
  <input type="file" accept="<?=$acceptInput;?>" name="sound_file" accept="audio/mp3" id="edit_sound_input" >
  <input type="hidden" name="sound_file_old" value="<?=$soundDetails['sound_file'];?>" >
</div>

<div id="editResponseMessage"></div>

<script src="<?=base_url(); ?>assets/site/js/bootstrap-tagsinput.js"></script>