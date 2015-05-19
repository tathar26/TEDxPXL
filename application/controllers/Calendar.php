<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {
    
    public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          

			
		$this->load->library('calendar');
               

		

		
          
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
      
    $data=array('year'=>$this->uri->segment(3),
               'month'=>$this->uri->segment(4));  
    $this->load->view('head_calendar');
    $this->load->view('menu');
    $this->load->view('calendar',$data);
    $this->load->view('footer');
    $this->load->view('modal');
  }
  

  
}
