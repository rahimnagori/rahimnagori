<div class="form-group">
  <label> Parent Category </label>
  <select name="parent_category" class="form-control">
    <option value="0">Select a Parent Category</option>
    <?php
      foreach($categories as $serialNumber => $category){
    ?>
        <option value="<?=$category['id'];?>" <?=($categoryDetails['parent_category'] == $category['id']) ? 'selected' : '' ;?> ><?=$category['name'];?></option>
    <?php
      }
    ?>
  </select>
</div>

<div class="form-group">
  <label> Title </label>
  <input type="text" class="form-control" required name="name" value="<?=$categoryDetails['name'];?>" >
  <input type="hidden" required name="category_id" value="<?=$categoryDetails['id'];?>" >
</div>

<div class="form-group">
  <label> Description </label>
  <textarea class="form-control" id="edit-description" required name="description" onkeyup="update_tiny();" ><?=$categoryDetails['description'];?></textarea>
</div>

<div class="form-group">
  <label> Image </label>
  <input type="file" accept="image/*" name="icon_update" onchange="preview_image(this, 'edit_preview_image');" >
  <input type="hidden" name="icon_old" value="<?=$categoryDetails['icon'];?>" >
  <img id="edit_preview_image" src="<?=site_url($categoryDetails['icon']);?>" width="100" >
</div>

<div id="editResponseMessage"></div>