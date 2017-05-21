<?php 

class Admin extends CI_Controller{
	 public $data = array();
    public function __construct() {
        parent::__construct();
        
  
    }
     
    public function index(){
      $data['subview'] ='admin/index_view';
       $data['title'] = 'admin';
       $this->load->view('admin/layout', $data);  
    }
}
?>