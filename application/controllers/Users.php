<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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

  public function signup(){
    $response['status'] = 0;
    $this->form_validation->set_rules('first_name','first name','trim|required');
    $this->form_validation->set_rules('last_name','last name','trim|required');
    $this->form_validation->set_rules('email','email','trim|required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('phone','Phone Number','trim|required');
    $this->form_validation->set_rules('password','password','trim|required|min_length[6]');
    $this->form_validation->set_rules('confirm_password','confirm password','trim|required|matches[password]');
    if($this->form_validation->run()){
      $insert = $this->input->post();
      unset($insert['confirm_password']);
      $insert['wallet_balance'] = 0;
      $insert['is_email_verified'] = 0;
      $insert['created'] = $insert['created'] = date("Y-m-d H:i:s");
      $user_id = $this->Common_Model->insert('users', $insert);
      if($user_id){
        $this->send_verification_email($user_id);
        $response['status'] = 1;
        $response['responseMessage'] = $this->Common_Model->success('Account created successfully. Please check your email to continue.');
      }else{
        $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later');
      }
    }else{
      $response['responseMessage'] = $this->Common_Model->error(validation_errors());
    }
    echo json_encode($response);
  }

  private function send_verification_email($user_id, $resend = false){
    $userdata = $this->Common_Model->fetch_records('users', array('id' => $user_id), false, true);
    if($userdata){
      if($userdata['is_email_verified'] == 0){
      // if(true){
        $token = rand(100000, 999999);
        $update['token'] = $token;
        $this->Common_Model->update('users', array('id' => $user_id), $update);
        $verificationLink = $this->config->item('base_url');
        $verificationLink .= 'Verify/' .$userdata['id'] .'/' .$token;

        $subject = ($resend) ? 'Re: Verify you email address.' : 'Verify your email address.';
        $body = "<p>Hello " .$userdata['first_name'] ." " .$userdata['last_name'] .",</p>";
        $body .= "<p>Please verify your account to continue using our services by clicking the link below.</p>";
        $body .= "<p><a href='" .$verificationLink ."'>Verify Now</a></p>";
        $body .= "<p>If the above link doesn't work, you may copy paste the below link in your browser also.</p>";
        $body .= "<p>" .$verificationLink ."</p>";
        $this->Common_Model->send_mail_new($userdata['email'], $subject, $body);
      }
    }else{
      /* User does not exist */
    }
  }

  public function email_verification($user_id, $token){
    $where['token'] = $token;
    $where['id'] = $user_id;
    $userdata = $this->Common_Model->fetch_records('users', $where, false, true);
    if($userdata){
      $update['token'] = null;
      $update['last_login'] = date("Y-m-d H:i:d");
      $update['is_email_verified'] = 1;
      if($this->Common_Model->update('users', array('id' => $userdata['id']), $update)){
        $to = $userdata['email'];
        $subject = 'Email successfully verified.';
        $body = '<p>Hello ' .$userdata['first_name'] .' ' .$userdata['last_name'] .',</p>';
        $body .= '<p>Congratulations!! your email has been verified successfully. You may now continue using our services.</p>';
        $this->Common_Model->send_mail_new($to, $subject, $body);

        if($this->session->userdata('user_id')){
          redirect('Verify');
        }else{
          $message = $this->Common_Model->success('Thank you: Your email has been verified successfully. Please login to continue.');
          $this->session->set_flashdata('email_verified', $message);
          redirect('');
        }
        // $this->session->set_userdata('is_user_logged_in', 1);
        // $this->session->set_userdata('user_id', $userdata['id']);
        // $this->session->set_userdata('email', $userdata['email']);
        // $pageData['userdata'] = $userdata;
        // $pageData['userdata']['is_email_verified'] = $pageData['is_email_verified'] = 1;
        // $this->load->view('site/verify', $pageData);
      }
    }else{
      redirect('');
    }
  }

  public function email_verified(){
    $user_id = $this->session->userdata('user_id');
    if($user_id){
      $pageData['userdata'] = $this->Common_Model->fetch_records('users', array('id' => $user_id), false, true);
      $this->load->view('site/verify', $pageData);
    }else{
      redirect('');
    }
  }

  public function login(){
    $response['status'] = 0;
    $where['email'] = $this->input->post('email');
    $where['password'] = $this->input->post('password');
    $userdata = $this->Common_Model->fetch_records('users', $where, false, true);
    if($userdata){
      $update['last_login'] = date("Y-m-d H:i:s");
      if($this->Common_Model->update('users', array('id' => $userdata['id']), $update)){
        $response['status'] = 1;
        $this->session->set_userdata('is_user_logged_in', 1);
        $this->session->set_userdata('user_id', $userdata['id']);
        $this->session->set_userdata('email', $userdata['email']);
        $response['responseMessage'] = $this->Common_Model->success('Welcome ' .$userdata['first_name'] .' ' .$userdata['last_name']);
        $response['redirect'] = site_url('Profile');
      }
    }else{
      $response['status'] = 2;
      $response['responseMessage'] = $this->Common_Model->error('User not found. Please enter correct email or password.');
    }
    echo json_encode($response);
  }

  public function resend_verification_email(){
    $response['responseMessage'] = $this->Common_Model->error('Server error, please try again later');
    $response['status'] = 0;
    $user_id = $this->session->userdata('user_id');
    if($user_id){
      $response['status'] = 1;
      $this->send_verification_email($user_id, true);
      $response['responseMessage'] = $this->Common_Model->success('Verification email sent successfully.');
    }
    echo json_encode($response);
  }

  public function logout(){
    session_destroy();
    redirect('');
  }

  public function reset_password(){
    $response['status'] = 0;
    $where['email'] = $this->input->post('email');
    if(filter_var($where['email'], FILTER_VALIDATE_EMAIL)){
      $userdata = $this->Common_Model->fetch_records('users', $where, false, true);
      if($userdata){
        $password = $userdata['password'];

        $subject = "Forget password";
        $html = '<p>Hello, '.$userdata['first_name'].' '.$userdata['last_name'].'</p>';
        $html .= '<p>This is an automated message . If you did not recently initiate the Forgot Password process, please disregard this email.</p>';
        $html .= '<p>You indicated that you forgot your login password. We can generate a temporary password for you to log in with, then once logged in you can change your password to anything you like.</p>';
        $html .= '<p>Password: <b>'.$password.'</b></p>';
        
        $this->Common_Model->send_mail($userdata['email'],$subject,$html);
        
        $response['status'] = 1;
        $response['responseMessage'] = $this->Common_Model->success('Please check your mail , We have sent your password in your registered mail id.');
      }else{
        $response['status'] = 2;
        $response['responseMessage'] = $this->Common_Model->error('User not found. Please enter correct email.');
      }
    }else{
      $response['status'] = 2;
      $response['responseMessage'] = $this->Common_Model->error('Pleaes enter valid email.');
    }
    echo json_encode($response);
  }

  // public function test_function(){
    // $this->Common_Model->send_mail_new('musicuser@mailinator.com', 'test', 'test');
  // }

}
