<?php include_once('include/header.php'); ?>
<?php
  $soundTypes = [
    1 => 'MP3',
    2 => 'WAV',
    3 => 'ZIP',
  ];
?>
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
<link rel="stylesheet" href="<?=$BASE_URL; ?>assets/site/css/bootstrap-tagsinput.css">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sound 
      <small>Management</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Sound Management</li>
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
            <span class="font-weight-bold text-uppercase">Sound Management</span>
            <span class="pull-right" ><a href="#" class="btn btn-info" data-toggle="modal" data-target="#addSoundModal" > Add Sound </a></span>
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table id="boottable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.NO.</th>
                    <th>Sound Type</th>
                    <th>Credit Amount</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>BPM</th>
                    <th>Keys</th>
                    <th>Tags</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($sounds as $serialNumber => $sound){
                  ?>
                      <tr>
                        <td><?=$serialNumber + 1; ?></td>
                        <td><?=$soundTypes[$sound['sound_type']];?></td>
                        <td><?=$sound['credit_amount'];?></td>
                        <td><?=$sound['main_category'];?></td>
                        <td><?=$sound['sub_category'];?></td>
                        <td><?=$sound['sound_title'];?></td>
                        <td><?=$sound['sound_description'];?></td>
                        <td><?=$sound['sound_bpm'];?></td>
                        <td><?=$sound['sound_key'];?></td>
                        <td><?=$sound['sound_tags'];?></td>
                        <td><?=date("d M, Y", strtotime($sound['sound_created']));?></td>
                        <td>
                          <button type="button" onclick="get_sound(<?=$sound['id'];?>);" class="btn btn-info btn-xs"> Edit </button>
                          <button type="button" onclick="delete_sound(<?=$sound['id'];?>);" class="btn btn-danger btn-xs"> Delete </button>
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
<div id="addSoundModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form id="addSoundForm" name="addSoundForm" method="POST" onsubmit="add_sound(event);" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Sound</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label> Sound Type </label>
            <select name="sound_type" class="form-control" onchange="update_sound_type('sound_input', this.value);" >
              <option value="1">MP3</option>
              <option value="2">WAVE</option>
              <option value="3">ZIP</option>
            </select>
          </div>

          <div class="form-group">
            <label> Sound Category </label>
            <select name="sound_category" class="form-control" onchange="get_sub_categories(this.value, 'sub_categories_input');" required >
              <option value="">Select a Category</option>
              <?php
                foreach($categories as $category){
              ?>
                  <option value="<?=$category['id'];?>"><?=$category['name'];?></option>
              <?php
                }
              ?>
            </select>
          </div>

          <div class="form-group" id="sub_categories">
            <label> Sound Sub Category </label>
            <select name="sound_sub_category" class="form-control" id="sub_categories_input" required >
              <option value="0">Select Category First</option>
            </select>
          </div>

          <div class="form-group">
            <label> Sound Title </label>
            <input type="text" class="form-control" required name="sound_title" >
          </div>

          <div class="form-group">
            <label> Sound Description </label>
            <textarea class="form-control textarea" required name="sound_description"></textarea>
          </div>

          <div class="form-group">
            <label> Credit Amount </label>
            <input type="number" class="form-control" required name="credit_amount" step="0.01" >
          </div>

          <div class="form-group">
            <label> Sound BPM </label>
            <input type="number" class="form-control" required name="sound_bpm" step="1" >
          </div>

          <div class="form-group">
            <label> Sound Key </label>
            <input type="text" class="form-control" required name="sound_key" >
          </div>

          <div class="form-group sound-tags">
            <label> Sound Tags </label>
            <input type="text" class="form-control" required name="sound_tags" data-role="tagsinput" >
          </div>

          <div class="form-group">
            <label> Sound File </label>
            <input type="file" required accept="audio/mp3" name="sound_file" accept="audio/mp3" id="sound_input" >
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
<div id="editSoundModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form id="updateSoundForm" name="updateSoundForm" method="POST" onsubmit="update_sound(event);" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Sound</h4>
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

<script src="<?=base_url(); ?>assets/site/js/bootstrap-tagsinput.js"></script>

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

  function add_sound(e){
    e.preventDefault();
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: site_url + 'Admin_Sound/Add',
      data: new FormData($('#addSoundForm')[0]),
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
          $('#addSoundForm')[0].reset();
        }
        $(".btn-submit").prop('disabled', false);
        $(".btn-submit").html('Add');
        location.reload();
      }
    })
  }

  function delete_sound(sound_id){
    if(confirm("Are you sure want to delete this Sound?")){
      $.ajax({
        type: "POST",
        dataType: 'JSON',
        url: site_url + 'Admin_Sound/Delete',
        data: {
          'sound_id' : sound_id
        },
        beforeSend: function () {
        },
        success: function (response) {
          location.reload();
        }
      })
    }
  }

  function get_sound(sound_id){
    $.ajax({
      type: "POST",
      dataType: 'html',
      url: site_url + 'Admin_Sound/Get',
      data: {
        'sound_id' : sound_id
      },
      beforeSend: function () {
        tinymce.remove('.textarea-edit');
        $("#edit-modal-body").html("");
        $('#editSoundModal').modal('show');
        $('#editSoundModal').addClass('text-center');
        $("#edit-modal-body").html('<i style="font-size: 50px;" class="fa fa-spin fa-spinner"></i>');
      },
      success: function (response) {
        $('#editSoundModal').removeClass('text-center');
        $("#edit-modal-body").html("");
        $("#edit-modal-body").html(response);
        update_tiny();
      }
    })
  }

  function update_sound(e){
    e.preventDefault();
    $("#edit-description").val();
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: site_url + 'Admin_Sound/Update',
      data: new FormData($('#updateSoundForm')[0]),
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

  function update_feature_category(sound_id){
    let category_status = $("#is_featured_" + sound_id).is(":checked");
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: site_url + 'Admin_Sound/update_featured',
      data: {
        'sound_id' : sound_id,
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

  function get_sub_categories(sound_id, sub_categories_input){
    if(sound_id){
      $.ajax({
        type: "POST",
        dataType: 'html',
        url: site_url + 'Admin_Sound/get_sub_category/' + sound_id,
        beforeSend: function () {
          $("#" + sub_categories_input).html('<option value="0"> Loading Sub Categories... </option>');
        },
        success: function (response) {
          $("#" + sub_categories_input).html(response);
        }
      })
    }else{
      $("#" + sub_categories_input).html('<option value=""> Select Sub Category </option>');
    }
  }

  function update_sound_type(sound_input, sound_type){
    let acceptSoundType = 'audio/mp3';
    if(sound_type == 1){
      acceptSoundType = 'audio/mp3';
    }
    if(sound_type == 2){
      acceptSoundType = 'audio/wav';
    }
    if(sound_type == 3){
      acceptSoundType = '.zip';
    }
    $('#' + sound_input).attr("accept", "" + acceptSoundType);
    if(sound_input == 'edit_sound_input'){
      $("#edit_sound_input").prop('required',true);
    }
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
</script>