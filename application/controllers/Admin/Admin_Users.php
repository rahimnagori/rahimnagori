<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Users extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Common_Model');
    if(!$this->check_login()){
      redirect('Admin');
    }
  }

  public function check_login(){
    return ($this->session->userdata('is_admin_logged_in')) ? true : false;
  }

  public function index(){
    $pageData = [];
    $admin_id = $this->session->userdata('id');
    $where['id'] = $admin_id;
    $adminData = $this->Common_Model->fetch_records('admins', $where, false, true);
    $pageData['adminData'] = $adminData;

    $users = $this->Common_Model->fetch_records('users', false, false, false, 'id');

    $pageData['users'] = $users;
    $this->load->view('admin/users_management', $pageData);
  }

  public function block_unblock_user(){
    $response['status'] = 0;
    $update['status'] = $this->input->post('is_blocked');
    $where['id'] = $this->input->post('user_id');
    if($this->Common_Model->update('users', $where, $update)){

      $userdata = $this->Common_Model->fetch_records('users', $where, false, true);
     
      $response['status'] = 1;
      $statusType = ($update['status'] == 0) ? 'activated' : 'blocked'; 
      $response['responseMessage'] = 'User ' .$statusType. ' successfully.';
      $this->session->set_flashdata('responseMessage', '<div class="alert alert-success"><strong>Success!</strong> ' .$response['responseMessage'] .'</div>');
    } else {
      $response['responseMessage'] = 'Server error, please try again later.';
      $this->session->set_flashdata('responseMessage', '<div class="alert alert-danger"><strong>Success!</strong> ' .$response['responseMessage'] .'</div>');
    }
    echo json_encode($response);
  }

  private function send_change_block_unblock_status_email($userdata, $status){
    $statusType = ($status == 0) ? 'activated' : 'blocked'; 
    
    $subject = 'Your account has been ' .$statusType .'.';
    $body = '<p style="margin:0;padding:10px 0px">Hello ' .$userdata['username'] .',</p>';
    $body .= '<p style="margin:0;padding:10px 0px">Your account has been ' .$statusType .' by our support team.</p>';
    return ($this->Common_Model->send_mail($userdata['email'], $subject, $body)) ? 1 : 0;
  }

   public function sendcustom_mail(){
    $user = $_REQUEST['id'];
    $message = $_REQUEST['text'];
  for($i=0;$i<=count($user);$i++) {
    $userdata = $this->Common_Model->fetch_records('users',array('id'=>$user[$i],'user_status'=>0), false, true);
     
      $to = $userdata['email'];
       $subject =$_REQUEST['subject'];
       $body ='<p>'.$message. '</p> <br>';

      if($message!=''){
       $this->Common_Model->send_mail($userdata['email'], $subject, $body);
      
    } 
 
  }
   $response['responseMessage'] = 'User ' .$statusType. ' successfully.';
      $this->session->set_flashdata('responseMessage', '<div class="alert alert-success"><strong>Success!</strong>Message send successfully</div>');
      echo "1";

}

public function deleteUser(){
      
      $run = $this->Common_Model->delete('users',array('id'=>$_REQUEST['id']));
      
      if($run){
       
        
        $this->session->set_flashdata('responseMessage','<div class="alert alert-success">Success! User has been deleted successfully</div>');
         redirect('Admin_Users');
    
        }else{
          $this->session->set_flashdata('responseMessage','<div class="alert alert-danger">Something went wrong!</div>');
        redirect('Admin_Users');
        }
        
      
  }

}
