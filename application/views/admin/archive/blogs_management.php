<?php include_once('include/header.php'); ?>

<style>
#addToolError, .editToolError, #video_section{
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
      Blogs 
      <small>Management</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Blogs Management</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <?=$this->session->flashdata('responseMessage');?>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <span class="font-weight-bold text-uppercase">Blogs Management</span>
            <span class="pull-right" ><a href="#" class="btn btn-info" data-toggle="modal" data-target="#addBlogModal" > Add Blog </a></span>
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table id="boottable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.NO.</th>
                    <th>Title</th>
                    <th>Blog Category</th>
                    <th>Description</th>
                    <th>Image / Video</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($blogs as $serialNumber => $blog){
                  ?>
                      <tr>
                        <td><?=$serialNumber + 1; ?></td>
                        <td><?=$blog['title'];?></td>
                        <td>
                          <?=($blog['blog_category'] == 1) ? "Tip's and How to's" : "Giving Game";?>
                        </td>
                        <td><?=$blog['description'];?></td>
                        <td>
                          <?php
                            if($blog['blog_type'] == 1){
                          ?>
                              <img src="<?=site_url($blog['thumbnail']);?>" width="100" >
                          <?php
                            }else{
                              if(strpos($blog['video_url'], 'embed/') !== false) {
                                $videoUrl = explode("embed/", $blog['video_url']);
                                $actualVideoUrl = 'https://www.youtube.com/watch?v=' .end($videoUrl);
                              }
                              if(strpos($blog['video_url'], 'player.vimeo.com') !== false) {
                                $videoUrl = explode("video/", $blog['video_url']);
                                $actualVideoUrl = 'https://vimeo.com/' .end($videoUrl);
                              }
                          ?>
                              <a href="<?=$actualVideoUrl;?>" target="_blank" > View Video </a>
                          <?php
                            }
                          ?>
                        </td>
                        <td><?=date("d M Y", strtotime($blog['created']));?></td>
                        <td>
                          <button type="button" onclick="get_blog(<?=$blog['id'];?>);" class="btn btn-info btn-xs"> Edit </button>
                          <button type="button" onclick="delete_blog(<?=$blog['id'];?>);" class="btn btn-danger btn-xs"> Delete </button>
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
<div id="addBlogModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form id="addBlogForm" name="addBlogForm" method="POST" onsubmit="add_blog(event);" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Blog</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label> Blog Type </label>
            <select name="blog_type" class="form-control" required onchange="change_blog_type(this.value, 'image_section', 'video_section', 'image_input', 'video_input');" >
              <option value="1" >Image</option>
              <option value="2" >Video</option>
            </select>
          </div>

          <div class="form-group">
            <label> Blog Category </label>
            <select name="blog_category" class="form-control" required >
              <option value="1" >Tip's and How to's</option>
              <option value="2" >Giving Game</option>
            </select>
          </div>

          <div class="form-group">
            <label> Title </label>
            <input type="text" class="form-control" required name="title" >
          </div>

          <div class="form-group">
            <label> Description </label>
            <textarea class="form-control textarea" required name="description"></textarea>
          </div>

          <div class="form-group" id="video_section" >
            <label> Video URL (Enter YouTube or Vimeo URL) </label>
            <input type="text" class="form-control" name="video_url" id="video_input" >
          </div>

          <div class="form-group" id="image_section" >
            <label> Image </label>
            <input type="file" required id="image_input" accept="image/*" name="thumbnail" onchange="preview_image(this, 'add_preview_image');" >
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
    <form id="updateBlogForm" name="updateBlogForm" method="POST" onsubmit="update_blog(event);" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Blog</h4>
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

  function add_blog(e){
    e.preventDefault();
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: site_url + 'Admin_Blogs/Add',
      data: new FormData($('#addBlogForm')[0]),
      processData: false,
      contentType: false,
      cache: false,
      beforeSend: function () {
        $("#responseMessage").html("");
        $(".btn-submit").prop('disabled', true);
        $(".btn-submit").html('<i class="fa fa-spin fa-spinner"></i> Processing...');
      },
      success: function (response) {
        location.reload();
        // $("#responseMessage").html(response.responseMessage);
        if (response.status == 1) {
          $('#addBlogForm')[0].reset();
          $('#add_preview_image').attr('src', '');
        }
        $(".btn-submit").prop('disabled', false);
        $(".btn-submit").html('Add');
      }
    })
  }

  function delete_blog(blog_id){
    if(confirm("Are you sure want to delete this blog?")){
      $.ajax({
        type: "POST",
        dataType: 'JSON',
        url: site_url + 'Admin_Blogs/Delete',
        data: {
          'blog_id' : blog_id
        },
        beforeSend: function () {
        },
        success: function (response) {
          location.reload();
        }
      })
    }
  }

  function get_blog(blog_id){
    $.ajax({
      type: "POST",
      dataType: 'html',
      url: site_url + 'Admin_Blogs/Get',
      data: {
        'blog_id' : blog_id
      },
      beforeSend: function () {
        tinymce.remove('.textarea-edit');
        $("#edit-modal-body").html("");
        $('#editBlogModal').modal('show');
        $('#editBlogModal').addClass('text-center');
        $("#edit-modal-body").html('<i style="font-size: 50px;" class="fa fa-spin fa-spinner"></i>');
      },
      success: function (response) {
        $('#editBlogModal').removeClass('text-center');
        $("#edit-modal-body").html("");
        $("#edit-modal-body").html(response);
        let blog_type = $("select#edit_blog_type option:checked" ).val();
        change_blog_type(blog_type, 'edit_image_section', 'edit_video_section', 'edit_image_input', 'edit_video_input');
        update_tiny();
      }
    })
  }

  function update_blog(e){
    e.preventDefault();
    $("#edit-description").val();
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: site_url + 'Admin_Blogs/Update',
      data: new FormData($('#updateBlogForm')[0]),
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
        // $(".btn-submit").prop('disabled', false);
        // $(".btn-submit").html('Update');
        location.reload();
      }
    })
  }

  function update_tiny(){
    tinymce.init({
      menubar: false,
      branding: false,
      statusbar: false,
      selector: '.textarea-edit',
      height: 200,
      plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste textcolor"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor",
      setup: function (editor) {
        editor.on('change', function () {
          tinymce.triggerSave();
        });
      }
    });
  }

  function change_blog_type(blog_type, image_section, video_section, image_input, video_input){
    if(blog_type == 1){
      /* Image */
      $("#" + image_section).show();
      $("#" + video_section).hide();
      $("#" + image_input).attr('required', true);
      $("#" + video_input).attr('required', false);
    }else{
      /* Video */
      $("#" + image_section).hide();
      $("#" + video_section).show();
      $("#" + video_input).attr('required', true);
      $("#" + image_input).attr('required', false);
    }
  }
</script>