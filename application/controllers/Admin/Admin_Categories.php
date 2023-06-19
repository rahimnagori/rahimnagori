<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Categories extends CI_Controller {

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
    $pageData['categories'] = $this->Common_Model->fetch_records('categories', false, false, false, 'id');

    $this->load->view('admin/categories_management', $pageData);
  }

  public function Add(){
    $response['status'] = 0;
    $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later');
    $admin_id = $this->session->userdata('id');
    $insert = $this->input->post();
    if($_FILES['icon']['error'] == 0){
      $config['upload_path'] = "assets/site/images/categories/";
      $config['allowed_types'] = 'jpeg|gif|jpg|png';
      $config['encrypt_name'] = true;
      $this->load->library("upload", $config);
      if ($this->upload->do_upload('icon')) {
        $categoryImage = $this->upload->data("file_name");

        $insert['icon'] = "assets/site/images/categories/" .$categoryImage;
        if($this->Common_Model->insert('categories', $insert)){
          $response['status'] = 1;
          $response['responseMessage'] = $this->Common_Model->success('Category created successfully.');
        }
      }else{
        $response['responseMessage'] = $this->Common_Model->error($this->upload->display_errors());
      }
    }else{
      $response['responseMessage'] = $this->Common_Model->error('Error with image');
    }
    $this->session->set_flashdata('responseMessage', $response['responseMessage']);
    echo json_encode($response);
  }

  public function Delete(){
    $response['status'] = 0;
    $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later.');
    $where['id'] = $this->input->post('category_id');
    if($this->Common_Model->delete('categories', $where)){
      $response['status'] = 1;
      $response['responseMessage'] = $this->Common_Model->success('Category deleted successfully.');
    }
    $this->session->set_flashdata('responseMessage', $response['responseMessage']);
    echo json_encode($response);
  }

  public function Get(){
    $whereCategory['id'] = $this->input->post('category_id');
    $pageData['categoryDetails'] = $this->Common_Model->fetch_records('categories', $whereCategory, false, true);

    $whereCategories['parent_category'] = 0;
    $whereCategories['id !='] = $whereCategory['id'];
    $pageData['categories'] = $this->Common_Model->fetch_records('categories', $whereCategories, false, false, 'id');

    $this->load->view('admin/edit_category', $pageData);
  }

  public function Update(){
    $response['status'] = 0;
    $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later');

    $update = $this->input->post();
    $where['id'] = $update['category_id'];
    unset($update['category_id']);
    // $update['updated'] = date("Y-m-d H:i:s");
    if($_FILES['icon_update']['error'] == 0){
      $config['upload_path'] = "assets/site/images/categories/";
      $config['allowed_types'] = 'jpeg|gif|jpg|png';
      $config['encrypt_name'] = true;
      $this->load->library("upload", $config);
      if ($this->upload->do_upload('icon_update')) {
        $categoryImage = $this->upload->data("file_name");

        $update['icon'] = "assets/site/images/categories/" .$categoryImage;
        if(file_exists($update['icon_old'])) unlink($update['icon_old']);
      }
    }
    unset($update['icon_old']);
    if($this->Common_Model->update('categories', $where, $update)){
      $response['status'] = 1;
      $response['responseMessage'] = $this->Common_Model->success('Category updated successfully.');
    }
    $this->session->set_flashdata('responseMessage', $response['responseMessage']);
    echo json_encode($response);
  }

  public function update_featured(){
    $response['status'] = 0;
    $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later.');
    $where['id'] = $this->input->post('category_id');
    $update['is_featured'] = $this->input->post('category_status');
    if($this->Common_Model->update('categories', $where, $update)){
      $response['status'] = 1;
      $message = ($update['is_featured']) ? 'added to' : 'removed from';
      $response['responseMessage'] = $this->Common_Model->success('Category ' .$message .' featured successfully.');
    }
    echo json_encode($response);
  }

}
