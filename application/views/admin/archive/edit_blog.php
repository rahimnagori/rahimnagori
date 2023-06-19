<div class="form-group">
  <label> Blog Type </label>
  <select name="blog_type" class="form-control" required onchange="change_blog_type(this.value, 'edit_image_section', 'edit_video_section', 'edit_image_input', 'edit_video_input');" id="edit_blog_type" >
    <option value="1" <?=($blogDetails['blog_type'] == 1) ? 'selected' : '';?> >Image</option>
    <option value="2" <?=($blogDetails['blog_type'] == 2) ? 'selected' : '';?> >Video</option>
  </select>
</div>

<div class="form-group">
  <label> Blog Category </label>
  <select name="blog_category" class="form-control" required >
    <option value="1" <?=($blogDetails['blog_category'] == 1) ? 'selected' : '';?> >Tip's and How to's</option>
    <option value="2" <?=($blogDetails['blog_category'] == 2) ? 'selected' : '';?>  >Giving Game</option>
  </select>
</div>

<div class="form-group">
  <label> Title </label>
  <input type="text" class="form-control" required name="title" value="<?=$blogDetails['title'];?>" >
  <input type="hidden" required name="blog_id" value="<?=$blogDetails['id'];?>" >
</div>

<div class="form-group">
  <label> Description </label>
  <textarea class="form-control textarea-edit" id="edit-description" required name="description" onkeyup="update_tiny();" ><?=$blogDetails['description'];?></textarea>
</div>

<div class="form-group" id="edit_video_section" <?=($blogDetails['blog_type'] == 1) ? 'style="display:none;"' : '';?> >
  <label> Video URL (Enter YouTube or Vimeo URL) </label>
  <input type="text" class="form-control" name="video_url" id="edit_video_input" value="<?=$blogDetails['video_url'];?>" >
</div>

<div class="form-group" id="edit_image_section" <?=($blogDetails['blog_type'] == 2) ? 'style="display:none;"' : '';?> >
  <label> Image </label>
  <input type="file" accept="image/*" name="thumbnail_update" onchange="preview_image(this, 'edit_preview_image');" id="edit_image_input" >
  <input type="hidden" name="thumbnail_old" value="<?=$blogDetails['thumbnail'];?>" >
  <img id="edit_preview_image" src="<?=site_url($blogDetails['thumbnail']);?>" width="100" >
</div>

<div id="editResponseMessage"></div>

<?php // include_once('include/tinymce.php');?>