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
      Plans 
      <small>Management</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Plans Management</li>
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
            <span class="font-weight-bold text-uppercase">Plans Management</span>
            <span class="pull-right" ><a href="#" class="btn btn-info" data-toggle="modal" data-target="#addPlanModal" > Add Plan </a></span>
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table id="boottable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.NO.</th>
                    <th>Plan Name</th>
                    <th>Plan Description</th>
                    <th>Plan Fee</th>
                    <th>Monthly Credits</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($plans as $serialNumber => $plan){
                  ?>
                      <tr>
                        <td><?=$serialNumber + 1; ?></td>
                        <td><?=$plan['plan_name'];?></td>
                        <td><?=$plan['plan_description'];?></td>
                        <td>$<?=$plan['plan_fee'];?></td>
                        <td><?=$plan['monthly_credits'];?></td>
                        <td><?=date("d M, Y", strtotime($plan['created']));?></td>
                        <td>
                          <button type="button" onclick="get_plan(<?=$plan['id'];?>);" class="btn btn-info btn-xs"> Edit </button>
                          <button type="button" onclick="delete_plan(<?=$plan['id'];?>);" class="btn btn-danger btn-xs"> Delete </button>
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
<div id="addPlanModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form id="addPlanForm" name="addPlanForm" method="POST" onsubmit="add_plan(event);" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Plan</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label> Plan Name </label>
            <input type="text" class="form-control" required name="plan_name" >
          </div>

          <div class="form-group">
            <label> Plan Description </label>
            <textarea class="form-control textarea" required name="plan_description"></textarea>
          </div>

          <div class="form-group">
            <label class="control-label" for="prependedtext"> Plan Fee </label>
            <div class="input-group">
              <span class="input-group-addon">$</span>
              <input type="number" class="form-control" required name="plan_fee" step="0.01" >
            </div>
          </div>

          <div class="form-group">
            <label> Monthly Credits </label>
            <input type="number" class="form-control" required name="monthly_credits" step="1" >
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
<div id="editPlanModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form id="updatePlanForm" name="updatePlanForm" method="POST" onsubmit="update_plan(event);" >
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

  function add_plan(e){
    e.preventDefault();
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: site_url + 'Admin_Plans/Add',
      data: new FormData($('#addPlanForm')[0]),
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
        // if (response.status == 1) {
          // $('#addPlanForm')[0].reset();
        // }
        // $(".btn-submit").prop('disabled', false);
        // $(".btn-submit").html('Add');
        location.reload();
      }
    })
  }

  function delete_plan(plan_id){
    if(confirm("Are you sure want to delete this plan?")){
      $.ajax({
        type: "POST",
        dataType: 'JSON',
        url: site_url + 'Admin_Plans/Delete',
        data: {
          'plan_id' : plan_id
        },
        beforeSend: function () {
        },
        success: function (response) {
          location.reload();
        }
      })
    }
  }

  function get_plan(plan_id){
    $.ajax({
      type: "POST",
      dataType: 'html',
      url: site_url + 'Admin_Plans/Get',
      data: {
        'plan_id' : plan_id
      },
      beforeSend: function () {
        $("#edit-modal-body").html("");
        $('#editPlanModal').modal('show');
        $('#editPlanModal').addClass('text-center');
        $("#edit-modal-body").html('<i style="font-size: 50px;" class="fa fa-spin fa-spinner"></i>');
      },
      success: function (response) {
        $('#editPlanModal').removeClass('text-center');
        $("#edit-modal-body").html("");
        $("#edit-modal-body").html(response);
      }
    })
  }

  function update_plan(e){
    e.preventDefault();
    $("#edit-description").val();
    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: site_url + 'Admin_Plans/Update',
      data: new FormData($('#updatePlanForm')[0]),
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
</script>