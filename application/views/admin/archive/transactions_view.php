<?php include_once('include/header.php'); ?>

<style>
.pac-container{
  z-index: 1051 !important;
}
.margin-top{
  margin-top: 2%;
}
.delete-filter-btn{
  display:none;
}
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Transactions
      <small>History</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Transactions History</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <?=$this->session->flashdata('responseMessage');?>

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header" style="display:none;">
            <span class="font-weight-bold text-uppercase"><?=$pageTitle;?></span>
            <span class="pull-right"><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#addCourseModal" style="display:none;"> Add Course </a></span>
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table id="boottable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.NO.</th>
                    <th>Booking Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>Plan</th>
                    <th>Transaction Type</th>
                    <th>Plan Start Date</th>
                    <th>Plan End Date</th>
                    <th>Created</th>
                    <th style="display:none;"> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($transactions as $serialNumber => $transaction){
                  ?>
                      <tr>
                        <td><?=$serialNumber + 1; ?></td>
                        <td><?=$transaction['booking_id'];?></td>
                        <td><?=$transaction['name'];?></td>
                        <td><?=$transaction['email'];?></td>
                        <td>$<?=$transaction['amount'];?></td>
                        <td><?=$transaction['title'];?></td>
                        <td><?=$transaction['product_type'];?></td>
                        <td><?=date("d M Y", strtotime($transaction['plan_start_date']));?></td>
                        <td><?=date("d M Y", strtotime($transaction['plan_end_date']));?></td>
                        <td><?=date("d M Y", strtotime($transaction['created']));?></td>
                        <td style="display:none;">
                          <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#detailsModal<?=$transaction['id'];?>" style="display:none;"> View Details </button>
                          <?php
                            if($transaction['status'] == 0){
                          ?>
                              <button type="button" class="btn btn-success btn-xs" onclick="change_user_status(<?=$transaction['id'];?>, 0);" > Activate </button>
                          <?php
                            }else{
                          ?>
                              <button type="button" class="btn btn-danger btn-xs" onclick="change_user_status(<?=$transaction['id'];?>, 1);" > Block </button>
                          <?php
                            }
                          ?>
                        </td>
                      </tr>

<div id="detailsModal<?=$transaction['id'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> User Details </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <label class="col-sm-4"> Name </label>
          <p class="col-sm-8"><?=$transaction['name'];?></p>
        </div>

        <div class="row">
          <label class="col-sm-4"> Email </label>
          <p class="col-sm-8"><?=$transaction['email'];?></p>
        </div>

        <div class="row">
          <label class="col-sm-4"> Phone </label>
          <p class="col-sm-8"><?=$transaction['phone'];?></p>
        </div>

        <div class="row">
          <label class="col-sm-4"> Date of Birth </label>
          <p class="col-sm-8"><?=date("d-M-Y", strtotime($transaction['dob']));?></p>
        </div>

        <div class="row">
          <label class="col-sm-4"> Profile Image </label>
          <p class="col-sm-8"><img src="<?=site_url($transaction['profile_image']);?>" width="100"> </p>
        </div>

        <div class="row">
          <label class="col-sm-4"> Address </label>
          <p class="col-sm-8"><?=$transaction['address'];?></p>
        </div>

        <div class="row">
          <label class="col-sm-4"> City </label>
          <p class="col-sm-8"><?=($transaction['city']) ? $transaction['city'] : 'Not Available';?></p>
        </div>

        <div class="row">
          <label class="col-sm-4"> Country </label>
          <p class="col-sm-8"><?=($transaction['country']) ? $transaction['country'] : 'Not Available';?></p>
        </div>

        <div class="row">
          <label class="col-sm-4"> Postcode </label>
          <p class="col-sm-8"><?=($transaction['post_code']) ? $transaction['post_code'] : 'Not Available';?></p>
        </div>

        <div class="row">
          <label class="col-sm-4"> State </label>
          <p class="col-sm-8"><?=($transaction['state']) ? $transaction['state'] : 'Not Available';?></p>
        </div>

        <?php
          foreach($transaction['user_documents'] as $transactionDocument){
            if(isset($transactionDocument['id'])){
        ?>
              <div class="row">
                <label class="col-sm-6"> <?=$transactionDocument['name'];?> </label>
                <p class="col-sm-6"> </p>
              </div>
              <div class="row">
                  <label class="col-sm-6"> </label>
                  <p class="col-sm-6"> <a href="<?=site_url($transactionDocument['document_file']);?>" target="_blank" > Download </a> </p>
                </div>
              <?php
                if($transactionDocument['date_issue']){
              ?>
                  <div class="row">
                    <label class="col-sm-6"> </label>
                    <p class="col-sm-6"> Date of Issue : <?=date("d-M-Y", strtotime($transactionDocument['date_issue']));?></p>
                  </div>
              <?php
                }
                if($transactionDocument['date_expire']){
              ?>
                  <div class="row">
                    <label class="col-sm-6"> </label>
                    <p class="col-sm-6"> Date of Expiry : <?=date("d-M-Y", strtotime($transactionDocument['date_expire']));?></p>
                  </div>
              <?php
                }
              ?>
        <?php
            }else{
        ?>
              <div class="row">
                <label class="col-sm-6"> <?=$transactionDocument['name'];?> </label>
                <p class="col-sm-6"> Not Available </p>
              </div>
        <?php
            }
          }
        ?>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>





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
<div id="addCourseModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form id="addOfflineCourseForm" name="addOfflineCourseForm" method="POST" onsubmit="add_course(event);" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Course</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label> Course Type </label>
            <select name="type" class="form-control" required="" >
              <option value="1"> Elearning Course </option>
              <option value="2"> Online Course </option>
            </select>
          </div>
          <div class="form-group">
            <label> Course Title </label>
            <input type="text" name="name" class="form-control" required="" placeholder="Course Title" />
          </div>
          <div class="form-group">
            <label> Description </label>
            <textarea name="description" class="form-control textarea" required="" > </textarea>
          </div>
          <div class="form-group">
            <label> Start Time </label>
            <input type="text" name="start_time" class="form-control" required="" placeholder="Start Time" onfocus="(this.type='time')" />
          </div>
          <div class="form-group">
            <label> End Time </label>
            <input type="text" name="end_time" class="form-control" required="" placeholder="End Time" onfocus="(this.type='time')" />
          </div>

          <div class="form-group">
            <label> Image </label>
            <input type="file" name="image" class="form-control" accept="image/*" required="" onchange="preview_image(this, 'previewImage');" />
            <img src="" width="100" id="previewImage" >
          </div>
          <div class="form-group">
            <label> Total Seats </label>
            <input type="number" step="1" name="total_seats" min="1" class="form-control" required="" placeholder="Total Seats" />
          </div>
          <div class="form-group">
            <label> Per Seat Cost </label>
            <div class="input-group">
              <span class="input-group-addon">$</span>
              <input type="number" step="1" min="1" name="per_seat_cost" class="form-control" required="" placeholder="Per Seat Cost" />
            </div>
          </div>
          <div class="form-group">
            <label> Location </label>
            <input type="text" name="location" id="location" class="form-control" required="" placeholder="Location" />
            <input type="hidden" name="lat" required="" data-geo="lat" />
            <input type="hidden" name="lng" required="" data-geo="lng" />
          </div>

          <div class="form-group">
            <label> Available Date Slots </label>
            <div class="add-slot-section">
              <div class="row margin-top filters man_yyy" id="delete_filter_0">
                <div class="col-sm-6">
                  <input type="text" name="start_date[]" class="form-control" min="<?=date('Y-m-d')?>" placeholder="From Date" required="" onfocus="(this.type='date')" />
                </div>
                <div class="col-sm-6">
                  <input type="text" name="end_date[]" class="form-control" min="<?=date('Y-m-d')?>" required="" placeholder="To Date" onfocus="(this.type='date')" />
                </div>
                <button type="button" onclick="add_filter('add-slot-section');" class="add-filter-btn btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i></button>
                <button type="button" onclick="delete_filter('add-slot-section', 'delete_filter_0');" class="delete-filter-btn btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success submit-btn" > Add </button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>

  </div>
</div>

<?php include_once('include/footer.php'); ?>

<script>
  
  function change_user_status(user_id, status){
    status_type = (status == 0) ? 'Activate' : 'Block';
    if(confirm("Are you sure want to " + status_type + " this User?")){
      $.ajax({
        type:'Post',
        url: site_url + 'Admin_Users/block_unblock_user',
        data: {
          'user_id' : user_id, 
          'is_blocked' : status
        },
        dataType:'JSON',
        beforeSend: function () {
        },
        success:function(response){
          location.reload();
        }
      });
    }
  }

  function preview_image(input, previewId) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#' + previewId).attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

</script>