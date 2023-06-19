<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Sound extends CI_Controller {

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

    $pageData['categories'] = $this->Common_Model->fetch_records('categories', array('parent_category' => 0));

    $joins[0][] = 'categories AS main_category';
    $joins[0][] = 'sounds.sound_category = main_category.id';
    $joins[0][] = 'left';
    $joins[1][] = 'categories AS sub_category';
    $joins[1][] = 'sounds.sound_sub_category = sub_category.id';
    $joins[1][] = 'left';
    $select = 'sounds.*, main_category.name AS main_category, sub_category.name AS sub_category';
    $pageData['sounds'] = $this->Common_Model->join_records('sounds', $joins, false, $select, 'sounds.id');

    $this->load->view('admin/music_management', $pageData);
  }

  private function check_login(){
    return ($this->session->userdata('is_admin_logged_in')) ? true : false;
  }

  public function get_sub_category($categoryId){
    $where['parent_category'] = $categoryId;
    $pageData['subCategories'] = $this->Common_Model->fetch_records('categories', $where);
    $this->load->view('admin/sub_categories', $pageData);
  }

  public function Get(){
    $whereCategory['id'] = $this->input->post('sound_id');
    $pageData['soundDetails'] = $this->Common_Model->fetch_records('sounds', $whereCategory, false, true);

    $pageData['categories'] = $this->Common_Model->fetch_records('categories', array('parent_category' => 0));

    $pageData['subCategories'] = $this->Common_Model->fetch_records('categories', array('parent_category' => $pageData['soundDetails']['sound_category']));

    $this->load->view('admin/edit_sound', $pageData);
  }

  public function Add(){
    $response['status'] = 0;
    $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later');

    $insert = $this->input->post();
    $insert['sound_created'] = $insert['sound_updated'] = date("Y-m-d H:i:s");
    if($insert['sound_type'] == 1){
      $allowedType = 'mp3';
    }
    if($insert['sound_type'] == 2){
      $allowedType = 'wav';
    }
    if($insert['sound_type'] == 3){
    $allowedType = 'zip|rar';
    }
    if($_FILES['sound_file']['error'] == 0){
      $config['upload_path'] = "assets/site/sounds/";
      $config['allowed_types'] = 'mp3|wav|zip|rar';
      $config['allowed_types'] = $allowedType;
      $config['encrypt_name'] = true;
      $this->load->library("upload", $config);
      if ($this->upload->do_upload('sound_file')) {
        $categoryImage = $this->upload->data("file_name");

        $insert['sound_file'] = "assets/site/sounds/" .$categoryImage;
        if($this->Common_Model->insert('sounds', $insert)){
          $response['status'] = 1;
          $response['responseMessage'] = $this->Common_Model->success('Sound added successfully.');
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
    $where['id'] = $this->input->post('sound_id');
    $soundDetails = $this->Common_Model->fetch_records('sounds', $where, false, true);
    if($this->Common_Model->delete('sounds', $where)){
      if(file_exists($soundDetails['sound_file'])) unlink($soundDetails['sound_file']);
      $response['status'] = 1;
      $response['responseMessage'] = $this->Common_Model->success('Sound deleted successfully.');
    }
    $this->session->set_flashdata('responseMessage', $response['responseMessage']);
    echo json_encode($response);
  }

  public function Update(){
    $response['status'] = 0;
    $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later');

    $update = $this->input->post();
    $where['id'] = $update['sound_id'];
    unset($update['sound_id']);
    $update['sound_updated'] = date("Y-m-d H:i:s");
    if($update['sound_type'] == 1){
      $allowedType = 'mp3';
    }
    if($update['sound_type'] == 2){
      $allowedType = 'wav';
    }
    if($update['sound_type'] == 3){
    $allowedType = 'zip|rar';
    }
    if($_FILES['sound_file']['error'] == 0){
      $config['upload_path'] = "assets/site/sounds/";
      $config['allowed_types'] = 'mp3|wav|zip|rar';
      $config['allowed_types'] = $allowedType;
      $config['encrypt_name'] = true;
      $this->load->library("upload", $config);
      if ($this->upload->do_upload('sound_file')) {
        $categoryImage = $this->upload->data("file_name");

        $update['sound_file'] = "assets/site/sounds/" .$categoryImage;
        if(file_exists($update['sound_file_old'])) unlink($update['sound_file_old']);
      }
    }
    unset($update['sound_file_old']);
    if($this->Common_Model->update('sounds', $where, $update)){
      $response['status'] = 1;
      $response['responseMessage'] = $this->Common_Model->success('Category updated successfully.');
    }
    $this->session->set_flashdata('responseMessage', $response['responseMessage']);
    echo json_encode($response);
  }

}
