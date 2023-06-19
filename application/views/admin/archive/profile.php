<?php include_once('include/header.php'); ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?=$this->session->flashdata('responseMessage');?>
      <div class="row">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Profile</h3>
            </div>
            <form class="form-horizontal" id="techform" action="<?=site_url();?>Admin_Dashboard/updateAdminAccount" method="post">
              <div class="changeUsenrameMessages"></div>
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                   <input type="email" class="form-control" name="email" id="email" placeholder="email" value="<?=$adminData['email'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Username" class="col-sm-2 control-label"> Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?=$adminData['name'];?>">
                  </div>
                </div>
              </div>
              <div class="box-footer">
               <input type="hidden" name="id" id="id" value="<?=$adminData['id'];?>">
                <button type="submit" class="btn btn-info pull-right" data-loading-text="Loading..." id="changeUsernameBtn">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
         <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Change Password</h3>
            </div>
             <form class="form-horizontal" method="post" id="passoword_form" action="<?=site_url();?>Admin_Dashboard/updatepassword">
              <div class="changePasswordMessages"></div>
              <input type="hidden" name="id" id="id" value="<?=$adminData['id'];?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Current Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="oldPassword" name="oldPassword" placeholder="Old Password">
                    <span class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="npassword" class="col-sm-2 control-label">New password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password">
                    <span class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="cpassword" class="col-sm-2 control-label">Confirm Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="renewPassword" name="renewPassword" placeholder="Confirm New Password">
                    <span class="text-danger"></span>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Save &amp; Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php include_once('include/footer.php'); ?>