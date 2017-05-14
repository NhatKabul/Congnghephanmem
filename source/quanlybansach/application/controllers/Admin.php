<?php 

class Admin extends CI_Controller{
	 public $data = array();
    public function __construct() {
        parent::__construct();
        
  
    }
     
    public function index(){
      $data['subview'] ='admin/index_view';
       $data['title'] = 'bbbb';
       $data['footer_info'] = 'Copyright &copy; 2016-2017 <a href="#"> Lazy team';
       $this->load->view('admin/layout', $data);
    }
}
?>