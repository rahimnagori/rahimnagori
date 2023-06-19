<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/Home
   *	- or -
   * 		http://example.com/index.php/Home/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/Home/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function __construct(){
    parent::__construct();
    $this->load->model('Common_Model');
    $this->load->library('session');
  }

  public function add(){
    $response['status'] = 0;
    $insert = $this->input->post();
    $insert['created'] = $insert['updated'] = date("Y-m-d H:i:s");
    $insert['status'] = 1;
    if($this->Common_Model->insert('contact_requests', $insert)){
      $response['status'] = 1;
      $response['responseMessage'] = $this->Common_Model->success('Contact request sent successfully');
    }else{
      $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later.');
    }
    echo json_encode($response);
  }

}
