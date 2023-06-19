<?php include_once('include/header.php'); ?>

<style>
#addToolError, .editToolError{
  display:none;
}
.pac-container{
  z-index: 1051 !important;
}
.margin-top{
  margin-top: 2%;
}
.delete-filter-btn{
  display:none;
}
.custom-multiselect .btn-group.custom-btn {
  width: 100%;
}
.custom-multiselect .multiselect {
  width: 100% !important;
  border: 1px solid #E1E1E1;
  box-shadow: none !important;
  text-align: left;
}
.custom-multiselect .dropdown-menu {
  min-height: 100%;
  width: 100%;
}
.custom-multiselect .dropdown-menu > li > a{
  padding: 8px 30px;
}
.custom-multiselect .dropdown-menu label{
  margin: 0;
}
.custom-multiselect .dropdown-menu {
  min-height: 100%;
  width: 100%;
  height: 150px;
  overflow: auto;
}

</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Categories 
      <small>Management</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Categories Management</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <?=$this->session->flashdata('responseMessage');?>
    <div id="featuredStatus"></div>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <span class="font-weight-bold text-uppercase">Categories Management</span>
            <span class="pull-right" ><a href="#" class="btn btn-info" data-toggle="modal" data-target="#addCategoryModal" > Add Category </a></span>
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table id="boottable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.NO.</th>
                    <th>Title</th>
                    <th>Parent Category</th>
                    <th>Description</th>
                    <th>Logo</th>
                    <th>Featured</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($categories as $serialNumber => $category){
                      $parentCategory['name'] = '-';
                      if($category['parent_category'] != 0){
                        $parentCategory = $this->Common_Model->fetch_records('categories', array('id' => $category['parent_category']), 'name', true);
                      }
                  ?>
                      <tr>
                        <td><?=$serialNumber + 1; ?></td>
                        <td><?=$category['name'];?></td>
                        <td class="text-center"> <?=$parentCategory['name'];?> </td>
                        <td><?=$category['description'];?></td>
                        <td><img src="<?=site_url($category['icon']);?>" width="100" > </td>
                        <td>
                          <input type="checkbox" name="is_featured" id="is_featured_<?=$category['id'];?>" <?=($category['is_featured']) ? 'checked' : '';?> onchange="update_feature_category(<?=$category['id'];?>);" > 
                        </td>
                        <td>
                          <button type="button" onclick="get_blog(<?=$category['id'];?>);" class="btn btn-info btn-xs"> Edit </button>
                          <button type="button" onclick="delete_category(<?=$category['id'];?>);" class="btn btn-danger btn-xs"> Delete </button>
                        </td>
                      </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Modal -->
<div id="addCategoryModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form id="addCategoryForm" name="addCategoryForm" method="POST" onsubmit="add_category(event);" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Category</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label> Parent Category </label>
            <select name="parent_category" class="form-control">
              <option value="0">Select a Parent Category</option>
              <?php
                foreach($categories as $serialNumber => $category){
                  if($category['parent_category'] != 0) continue;
              ?>
                  <option value="<?=$category['id'];?>" ><?=$category['name'];?></option>
              <?php
                }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label> Name </label>
            <input type="text" class="form-control" required name="name" >
          </div>

          <div class="form-group">
            <label> Description </label>
            <textarea class="form-control" required name="description"></textarea>
          </div>

          <div class="form-group">
            <label> Logo </label>
            <input type="file" required accept="image/*" name="icon" onchange="preview_image(this, 'add_preview_image');" >
            <img id="add_preview_image" src="" width="100" >
          </div>

          <div id="responseMessage"></div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-submit" > Add </button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>

  </div>
</div>

<!-- Modal -->
<div id="editBlogModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form id="updateCategoryForm" name="updateCategoryForm" method="POST" onsubmit="update_category(event);" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Category</h4>
        </div>
        <div class="modal-body" id="edit-modal-body" > </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-submit" > Update </button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>

  </div>
</div>

<?php include_once('include/tinymce.php');?>

<?php include_once('include/footer.php');?>

<script>
  function preview_image(input, previewId) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#' + previewId).attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  function add_category(e){
    e.preventDefault();
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: site_url + 'Admin_Categories/Add',
      data: new FormData($('#addCategoryForm')[0]),
      processData: false,
      contentType: false,
      cache: false,
      beforeSend: function () {
        $("#responseMessage").html("");
        $(".btn-submit").prop('disabled', true);
        $(".btn-submit").html('<i class="fa fa-spin fa-spinner"></i> Processing...');
      },
      success: function (response) {
        // $("#responseMessage").html(response.responseMessage);
        if (response.status == 1) {
          $('#addCategoryForm')[0].reset();
          $('#add_preview_image').attr('src', '');
        }
        $(".btn-submit").prop('disabled', false);
        $(".btn-submit").html('Add');
        location.reload();
      }
    })
  }

  function delete_category(category_id){
    if(confirm("Are you sure want to delete this category?")){
      $.ajax({
        type: "POST",
        dataType: 'JSON',
        url: site_url + 'Admin_Categories/Delete',
        data: {
          'category_id' : category_id
        },
        beforeSend: function () {
        },
        success: function (response) {
          location.reload();
        }
      })
    }
  }

  function get_blog(category_id){
    $.ajax({
      type: "POST",
      dataType: 'html',
      url: site_url + 'Admin_Categories/Get',
      data: {
        'category_id' : category_id
      },
      beforeSend: function () {
        $("#edit-modal-body").html("");
        $('#editBlogModal').modal('show');
        $('#editBlogModal').addClass('text-center');
        $("#edit-modal-body").html('<i style="font-size: 50px;" class="fa fa-spin fa-spinner"></i>');
      },
      success: function (response) {
        $('#editBlogModal').removeClass('text-center');
        $("#edit-modal-body").html("");
        $("#edit-modal-body").html(response);
      }
    })
  }

  function update_category(e){
    e.preventDefault();
    $("#edit-description").val();
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: site_url + 'Admin_Categories/Update',
      data: new FormData($('#updateCategoryForm')[0]),
      processData: false,
      contentType: false,
      cache: false,
      beforeSend: function () {
        $("#editResponseMessage").html("");
        $(".btn-submit").prop('disabled', true);
        $(".btn-submit").html('<i class="fa fa-spin fa-spinner"></i> Processing...');
      },
      success: function (response) {
        // $("#editResponseMessage").html(response.responseMessage);
        $(".btn-submit").prop('disabled', false);
        $(".btn-submit").html('Update');
        location.reload();
      }
    })
  }

  function update_feature_category(category_id){
    let category_status = $("#is_featured_" + category_id).is(":checked");
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: site_url + 'Admin_Categories/update_featured',
      data: {
        'category_id' : category_id,
        'category_status' : (category_status) ? 1 : 0,
      },
      beforeSend: function () {
        $("#featuredStatus").html("");
      },
      success: function (response) {
        $("#featuredStatus").html(response.responseMessage);
      }
    })
  }
</script>