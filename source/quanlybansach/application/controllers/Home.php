<?php 
require('Admin.php');
class Home extends Admin {
    public function __construct() {
        parent::__construct();
      
    }
     
    public function index(){
    	parent::index();
    	 $data['title'] = 'ban hang';
    }
}
?>