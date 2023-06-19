<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Plans extends CI_Controller {

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
    $pageData['plans'] = $this->Common_Model->fetch_records('plans', false, false, false, 'id');

    $this->load->view('admin/plans_management', $pageData);
  }

  public function Add(){
    $response['status'] = 0;
    $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later');
    $admin_id = $this->session->userdata('id');
    $insert = $this->input->post();
    $insert['created'] = $insert['updated'] = date("Y-m-d H:i:s");
    if($this->Common_Model->insert('plans', $insert)){
      $response['status'] = 1;
      $response['responseMessage'] = $this->Common_Model->success('Plan created successfully.');
    }
    $this->session->set_flashdata('responseMessage', $response['responseMessage']);
    echo json_encode($response);
  }

  public function Delete(){
    $response['status'] = 0;
    $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later.');
    $where['id'] = $this->input->post('plan_id');
    if($this->Common_Model->delete('plans', $where)){
      $response['status'] = 1;
      $response['responseMessage'] = $this->Common_Model->success('Plan deleted successfully.');
    }
    $this->session->set_flashdata('responseMessage', $response['responseMessage']);
    echo json_encode($response);
  }

  public function Get(){
    $wherePlan['id'] = $this->input->post('plan_id');
    $pageData['planDetails'] = $this->Common_Model->fetch_records('plans', $wherePlan, false, true);

    $this->load->view('admin/edit_plan', $pageData);
  }

  public function Update(){
    $response['status'] = 0;
    $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later');

    $update = $this->input->post();
    $where['id'] = $update['plan_id'];
    unset($update['plan_id']);
    $update['updated'] = date("Y-m-d H:i:s");

    if($this->Common_Model->update('plans', $where, $update)){
      $response['status'] = 1;
      $response['responseMessage'] = $this->Common_Model->success('Plan updated successfully.');
    }
    $this->session->set_flashdata('responseMessage', $response['responseMessage']);
    echo json_encode($response);
  }

}
