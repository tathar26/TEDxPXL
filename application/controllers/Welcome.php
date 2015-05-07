<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->library('form_validation');
          //load the login model
          
     }


  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {  
      
      
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('home');
    $this->load->view('footer');
    $this->load->view('modal');
  }
  function login_user() {
        // Create an instance of the user model
        $this->load->model('user_m');
        // Grab the email and password from the form POST
        $email = $this->input->post('email');
        $pass  = $this->input->post('password');
        //Ensure values exist for email and pass, and validate the user's credentials
        if( $email && $pass && $this->user_m->validate_user($email,$pass)) {
            // If the user is valid, redirect to the main view
            redirect('index');
        } else {
            // Otherwise show the login screen with an error message.
            $this->show_login(true);
        }
    }
    
    function logout_user() {
      $this->session->sess_destroy();
      redirect('index');
    }

  
}
