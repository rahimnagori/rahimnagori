<?php
  foreach($subCategories as $subCategory){
?>
    <option value="<?=$subCategory['id'];?>"><?=$subCategory['name'];?></option>
<?php
  }
?>
<?php
  if(!count($subCategories)){
?>
    <option value="0">No Category Found!!</option>
<?php
  }
?>