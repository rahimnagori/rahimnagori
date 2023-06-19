<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Contacts extends CI_Controller {

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

    $contact_requests = $this->Common_Model->fetch_records('contact_requests', false, false, false, 'id');

    $pageData['contact_requests'] = $contact_requests;
    $this->load->view('admin/contact_requests', $pageData);
  }
}
