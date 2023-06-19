<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Blogs extends CI_Controller {

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
    $whereBlog['is_deleted'] = 0;
    $pageData['blogs'] = $this->Common_Model->fetch_records('blogs', $whereBlog, false, false, 'id');

    $this->load->view('admin/blogs_management', $pageData);
  }

  public function Add(){
    $response['status'] = 0;
    $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later');
    $admin_id = $this->session->userdata('id');
    $insert = $this->input->post();
    $insert['is_admin'] = 1;
    $insert['owner_id'] = $admin_id;
    $insert['status'] = 1;
    $insert['is_deleted'] = 0;
    $insert['created'] = $insert['updated'] = date("Y-m-d H:i:s");
    if($_FILES['thumbnail']['error'] == 0){
      $config['upload_path'] = "assets/site/images/blogs/";
      $config['allowed_types'] = 'jpeg|gif|jpg|png';
      $config['encrypt_name'] = true;
      $this->load->library("upload", $config);
      if ($this->upload->do_upload('thumbnail')) {
        $blogImage = $this->upload->data("file_name");

        $insert['thumbnail'] = "assets/site/images/blogs/" .$blogImage;
      }else{
        $response['responseMessage'] = $this->Common_Model->error($this->upload->display_errors());
      }
    }
    if($insert['blog_type'] == 2){
      if(strpos($insert['video_url'], 'watch?v=') !== false) {
        if(strpos($insert['video_url'], 'youtube') !== false) {
          $videoUrl = explode("=", $insert['video_url']);
          $insert['video_url'] = 'https://www.youtube.com/embed/' .end($videoUrl);
        }
      }
      if(strpos($insert['video_url'], 'vimeo') !== false) {
        $videoUrl = explode("com/", $insert['video_url']);
        $insert['video_url'] = 'https://player.vimeo.com/video/' .end($videoUrl);
      }
    }
    if($this->Common_Model->insert('blogs', $insert)){
      $response['status'] = 1;
      $response['responseMessage'] = $this->Common_Model->success('Blog added successfully.');
    }
    $this->session->set_flashdata('responseMessage', $response['responseMessage']);
    echo json_encode($response);
  }

  public function Delete(){
    $response['status'] = 0;
    $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later.');
    $where['id'] = $this->input->post('blog_id');
    $update['is_deleted'] = 1;
    if($this->Common_Model->update('blogs', $where, $update)){
      $response['status'] = 1;
      $response['responseMessage'] = $this->Common_Model->success('Blog deleted successfully.');
    }
    $this->session->set_flashdata('responseMessage', $response['responseMessage']);
    echo json_encode($response);
  }

  public function Get(){
    $whereBlog['id'] = $this->input->post('blog_id');
    $pageData['blogDetails'] = $this->Common_Model->fetch_records('blogs', $whereBlog, false, true);

    $this->load->view('admin/edit_blog', $pageData);
  }

  public function Update(){
    $response['status'] = 0;
    $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later');

    $update = $this->input->post();
    $where['id'] = $update['blog_id'];
    unset($update['blog_id']);
    $update['updated'] = date("Y-m-d H:i:s");
    if($_FILES['thumbnail_update']['error'] == 0){
      $config['upload_path'] = "assets/site/images/blogs/";
      $config['allowed_types'] = 'jpeg|gif|jpg|png';
      $config['encrypt_name'] = true;
      $this->load->library("upload", $config);
      if ($this->upload->do_upload('thumbnail_update')) {
        $blogImage = $this->upload->data("file_name");

        $update['thumbnail'] = "assets/site/images/blogs/" .$blogImage;
        if(file_exists($update['thumbnail_old'])) unlink($update['thumbnail_old']);
      }
    }
    unset($update['thumbnail_old']);
    if($update['blog_type'] == 2){
      if(strpos($update['video_url'], 'watch?v=') !== false) {
        if(strpos($update['video_url'], 'youtube') !== false) {
          $videoUrl = explode("=", $update['video_url']);
          $update['video_url'] = 'https://www.youtube.com/embed/' .end($videoUrl);
        }
      }
      if(strpos($update['video_url'], 'vimeo') !== false) {
        $videoUrl = explode("com/", $update['video_url']);
        $update['video_url'] = 'https://player.vimeo.com/video/' .end($videoUrl);
      }
    }
    if($this->Common_Model->update('blogs', $where, $update)){
      $response['status'] = 1;
      $response['responseMessage'] = $this->Common_Model->success('Blog updated successfully.');
    }
    $this->session->set_flashdata('responseMessage', $response['responseMessage']);
    echo json_encode($response);
  }

}
