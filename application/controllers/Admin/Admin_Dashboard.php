<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Dashboard extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Common_Model');
    if(!$this->check_login()){
      redirect('Admin');
    }
  }

  public function index(){
    $pageData = [];
    $admin_id = $this->session->userdata('id');
    $where['id'] = $admin_id;
    $adminData = $this->Common_Model->fetch_records('admins', $where, false, true);
    $pageData['adminData'] = $adminData;
    $users = $this->Common_Model->fetch_records('users');
    $pageData['totalUsers'] = count($users);

    $this->load->view('admin/dashboard', $pageData);
  }

  public function membership(){
    $pageData = [];
    $admin_id = $this->session->userdata('id');
    $where['id'] = $admin_id;
    $where['type'] = 1;
    $adminData = $this->Common_Model->fetch_records('users', $where, false, true);
    $pageData['adminData'] = $adminData;

    $this->load->view('admin/membership_management', $pageData);
  }

  public function profile(){
    $admin_id = $this->session->userdata('id');
    $where['id'] = $admin_id;
    $where['type'] = 1;
    $pageData['adminData'] = $this->Common_Model->fetch_records('admins', $where, false, true);
    $this->load->view('admin/profile', $pageData); 
  }

   public function contact_us(){
    $admin_id = $this->session->userdata('id');
    $where['id'] = $admin_id;
    $where['type'] = 1;
    $pageData['adminData'] = $this->Common_Model->fetch_records('users', $where, false, true);
    $pageData['contact'] = $this->Common_Model->fetch_records('contact_us');
    $this->load->view('admin/contact_us', $pageData);
  }

  public function updateAdminAccount(){
    $where['id'] = $this->input->post('id');
    $update['name'] = $this->input->post('name');
    $update['email'] = $this->input->post('email');

    $update['updated'] = date("Y-m-d H:i:s");

    if($this->Common_Model->update('admins', $where, $update)){
      $this->session->set_flashdata("responseMessage","<div class='alert alert-success' role='alert'><strong>Success!</strong> Your Profile is updated Successfully.</div>");
    }else{
      $this->session->set_flashdata("responseMessage", "<div class='alert alert-danger' role='alert'><strong>Error!</strong> Something went wrong.</div>"); 
    }
    return redirect('Admin/profile');
  }
  /* Below this are not being used yet */

  public function updateUserAccount(){
    $where['id'] = $this->input->post('id');
    $update['name'] = $this->input->post('name');
    // $update['email'] = $this->input->post('email');
    $update['address'] = $this->input->post('address');
    $update['village'] = $this->input->post('village');
    $update['district'] = $this->input->post('district');
    $update['lat'] = $this->input->post('lat');
    $update['lng'] = $this->input->post('lng');
    $update['phone'] = $this->input->post('phone');
    $update['description'] = $this->input->post('description');
    $update['dob'] = date("Y-m-d", strtotime($this->input->post('dob')));
    // $update['username'] = $this->input->post('username');
    $selectWhere['phone'] = $update['phone'];
    $selectWhere['type'] = 2;
    $userdata = $this->Common_Model->fetch_records('users', $selectWhere, false, true);
    $update['updated'] = date("Y-m-d H:i:s");
    if($userdata && $userdata['id'] != $where['id']){
      $this->session->set_flashdata("update_failed","<div class='alert alert-danger' role='alert'><strong>Error!</strong> This phone is already being used please select a different one.</div>"); 
    }else{
      if($_FILES['cover_image']['error'] == 0){
        $config['upload_path'] = "asset/site/images/services/cover_images/";
        $config['allowed_types'] = 'jpeg|gif|jpg|png';
        $config['encrypt_name'] = true;
        $this->load->library("upload", $config);
        if ($this->upload->do_upload('cover_image')) {
          $coverImage = $this->upload->data("file_name");

          $update['cover_image'] = "asset/site/images/services/cover_images/" .$coverImage;
          if(file_exists($userdata['cover_image'])) unlink($userdata['cover_image']);
        }
      }
      if($this->Common_Model->update('users', $where, $update)){
        $this->session->set_flashdata("update_success","<div class='alert alert-success' role='alert'><strong>Success!</strong> Your Profile has been updated Successfully.</div>");
      }else{
        $this->session->set_flashdata("update_failed","<div class='alert alert-danger' role='alert'><strong>Error!</strong> Something went wrong.</div>"); 
      }
    }

    return redirect('Admin/profile');
  }

  public function updatepassword(){
    $where['id'] = $this->input->post('id');
    $userdata = $this->Common_Model->fetch_records('admins', array('id' => $where['id']), false, true);
    $oldPassword = $this->input->post('oldPassword');
    $newPassword = $this->input->post('newPassword');
    $confirmNewPassword = $this->input->post('renewPassword');
    // if($userdata['password'] == $oldPassword && $userdata['password'] != $newPassword){
    if($userdata['password'] == $oldPassword){
      if($newPassword == $confirmNewPassword){
        $update['password'] = $newPassword;
        $update['updated'] = date("Y-m-d H:i:s");
        if($this->Common_Model->update('admins', $where, $update)){
          $this->session->set_flashdata("responseMessage", "<div class='alert alert-success' role='alert'><strong>Success!</strong> Your Password has been changed Successfully.</div>");
        }else{
          $this->session->set_flashdata("responseMessage", "<div class='alert alert-danger' role='alert'><strong>Error!</strong> Something went wrong. Please try again later.</div>");
        }
      }else{
        $this->session->set_flashdata("responseMessage", "<div class='alert alert-danger' role='alert'><strong>Error!</strong> New Password and Confirm Password doesn't match.</div>");
      }
    // }else if($userdata['password'] == $newPassword){
      // $this->session->set_flashdata("responseMessage", "<div class='alert alert-danger' role='alert'><strong>Error!</strong> Old and new password are same.</div>");
    }else{
      $this->session->set_flashdata("responseMessage", "<div class='alert alert-danger' role='alert'><strong>Error!</strong> Current password doesn't match.</div>");
    }
    return redirect('Admin/profile');
  }

  public function check_login(){
    return ($this->session->userdata('is_admin_logged_in')) ? true : false;
  }

  public function test_function(){
    $to = 'rahim.pdf@mailinator.com';
    $subject = 'test';
    $email = 'testsst';
    $this->Common_Model->send_mail($to, $subject, $email);
  }

}
