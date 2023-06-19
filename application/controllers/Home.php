<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

  private function get_userdata(){
    $userdata = [];
    $user_id = $this->session->userdata('user_id');
    if($user_id){
      $userdata = $this->Common_Model->fetch_records('users', array('id' => $user_id), false, true);
    }
    $categories = $this->Common_Model->fetch_records('categories', array('parent_category' => 0));
    return array('userdata' => $userdata, 'categories' => $categories);
  }

  public function index(){
    $pageData = $this->get_userdata();
    $pageData['users'] = $this->Common_Model->fetch_records('users');
    $pageData['plans'] = $this->Common_Model->fetch_records('plans');
    $this->load->view('site/index', $pageData);
  }

  public function community(){
    $pageData = $this->get_userdata();
    $this->load->view('site/community', $pageData);
  }

  public function sounds($id){
    $pageData = $this->get_userdata();
    $where['id'] = $id;
    $pageData['categoryDetails'] = $this->Common_Model->fetch_records('categories', $where, false, true);
    if($pageData['categoryDetails']['parent_category'] != 0){
      redirect('Sounds/' .$pageData['categoryDetails']['parent_category']);
    }

    $pageData['currentCategoryId'] = $id;

    $whereSubCategory['parent_category'] = $id;
    $pageData['subCategories'] = $this->Common_Model->fetch_records('categories', $whereSubCategory);

    $this->load->view('site/sounds', $pageData);
  }

  public function sound_details($id){
    $pageData = $this->get_userdata();

    $where['id'] = $id;
    $pageData['categoryDetails'] = $this->Common_Model->fetch_records('categories', $where, false, true);

    if(empty($pageData['categoryDetails'])){
      redirect('');
    }
    if($pageData['categoryDetails']['parent_category'] == 0){
      redirect('Sounds/' .$pageData['categoryDetails']['id']);
    }

    $whereParentCategory['id'] = $pageData['categoryDetails']['parent_category'];
    $pageData['parentCategoryDetails'] = $this->Common_Model->fetch_records('categories', $whereParentCategory, false, true);

    $whereSound['sound_sub_category'] = $id;
    $pageData['categorySounds'] = $this->Common_Model->fetch_records('sounds', $whereSound);

    $this->load->view('site/sound-detail', $pageData);
  }

  public function blogs($id){
    if($id != 1 && $id != 2) redirect('Blogs/1');
    $pageData = $this->get_userdata();
    $where['is_deleted'] = 0;
    $where['blog_category'] = $id;
    $pageData['blogs'] = $this->Common_Model->fetch_records('blogs', $where, false, false, 'id');
    $this->load->view('site/blogs', $pageData);
  }

  public function blog_details($id){
    $pageData = $this->get_userdata();
    $where['is_deleted'] = 0;
    $where['id'] = $id;
    $pageData['blogDetails'] = $this->Common_Model->fetch_records('blogs', $where, false, true);
    $whereRecent['is_deleted'] = 0;
    $whereRecent['id != '] = $id;
    $pageData['recentBlogs'] = $this->Common_Model->fetch_records('blogs', $whereRecent, false, false, false, false, false, false, false, 3);

    if(empty($pageData['blogDetails'])){
      redirect('Blogs/1');
    }
    $this->load->view('site/blog-details', $pageData);
  }

  public function faqs(){
    $pageData = $this->get_userdata();
    $this->load->view('site/faqs', $pageData);
  }

  public function terms(){
    $pageData = $this->get_userdata();
    $this->load->view('site/terms_page', $pageData);
  }

  public function payment(){
    $pageData = $this->get_userdata();
    $this->load->view('site/payment_option', $pageData);
  }

  public function tips(){
    $pageData = $this->get_userdata();
    $this->load->view('site/booking_tips');
  }

  public function works(){
    $pageData = $this->get_userdata();
    $this->load->view('site/how_it_works', $pageData);
  }

  public function contact(){
    $pageData = $this->get_userdata();
    $this->load->view('site/contact_us', $pageData);
  }

  public function profile(){
    $pageData = $this->get_userdata();
    $this->load->view('site/myprofile', $pageData);
  }

  public function about(){
    $pageData = $this->get_userdata();
    $this->load->view('site/about_us', $pageData);
  }

  public function service(){
    $pageData = $this->get_userdata();
    $this->load->view('site/service', $pageData);
  }

  public function partner(){
    $pageData = $this->get_userdata();
    $this->load->view('site/partner');
  }

  public function policy(){
    $pageData = $this->get_userdata();
    $this->load->view('site/policy', $pageData);
  }

  public function price(){
    $pageData = $this->get_userdata();
    $this->load->view('site/price', $pageData);
  }

  public function test_function(){
    redirect("");
    $config = array(
        'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
        'smtp_host' => 'smtp.gmail.com',
        // 'smtp_port' => 465,
        'smtp_port' => 587,
        'smtp_user' => 'rahimnagori47@gmail.com',
        'smtp_pass' => '47_Jinkies',
        'smtp_crypto' => 'security', //can be 'ssl' or 'tls' for example
        'mailtype' => 'html', //plaintext 'text' mails or 'html'
        'smtp_timeout' => '4', //in seconds
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
    );
    try{
      $this->load->library('email'); // Note: no $config param needed
      $this->email->initialize($config);
      $this->email->set_newline("\r\n");
      // $this->email->set_mailtype("html");
      $this->email->from('rahimnagori47@gmail.com', 'Rahim');
      $this->email->to('itariq.nagori@gmail.com, rahim.nagori@gmail.com');
      $this->email->subject('Test email from CI and Gmail ooooooo ');
      $pageData['PROJECT'] = 'Test project';
      $pageData['body'] = 'This is the body';
      $message = $this->load->view('site/archive/include/email_template_new', $pageData, true);
      $this->email->message("Test mail from CI.");
      $this->email->send();
      echo "Messsage sent - " .rand();
    }
    catch(Exception $e){
      echo "<pre>";
      print_r($e->getMessage());
    }
  }

  public function test_function_old(){
    redirect("");
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "rahim.nagori@gmail.com";
    $to = "rahimnagori47@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)) {
    echo "The email message was sent.";
    } else {
    echo "The email message was not sent.";
    }
    exit();
    // $config['useragent'] = 'CodeIgniter';
    $config['protocol'] = 'smtp';
    //$config['mailpath'] = '/usr/sbin/sendmail';
    $config['smtp_host'] = 'ssl://smtp.googlemail.com';
    $config['smtp_user'] = 'rahimnagori47@gmail.com';
    $config['smtp_pass'] = '47_Jinkies';
    $config['smtp_port'] = 465; 
    $config['smtp_port'] = 587; 
    // $config['smtp_timeout'] = 5;
    // $config['wordwrap'] = TRUE;
    // $config['wrapchars'] = 76;
    // $config['mailtype'] = 'text/html';
    // $config['charset'] = 'utf-8';
    // $config['validate'] = FALSE;
    // $config['priority'] = 3;
    // $config['crlf'] = "\r\n";
    // $config['newline'] = "\r\n";
    // $config['bcc_batch_mode'] = FALSE;
    // $config['bcc_batch_size'] = 200;
    // Set to, from, message, etc.

    try{
      $this->load->library('email'); // Note: no $config param needed
      $this->email->initialize($config);
      $this->email->set_newline("\r\n");
      // $this->email->set_mailtype("html");
      $this->email->from('rahimnagori47@gmail.com', 'Rahim');
      $this->email->to('rahim.nagori@gmail.com');
      $this->email->subject('Test email from CI and Gmail ooooooo ');
      $pageData['PROJECT'] = 'Test project';
      $pageData['body'] = 'This is the body';
      $message = $this->load->view('site/archive/include/email_template_new', $pageData, true);
      $this->email->message("Test mail from CI.");
      $this->email->send();
    }
    catch(Exception $e){
      echo "<pre>";
      print_r($e->getMessage());
    }
  }

  public function calculator(){
    $this->load->view('site/calculator');
  }

}
