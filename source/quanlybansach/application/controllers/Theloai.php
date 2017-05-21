<?php 
class Theloai extends CI_Controller {
    public function __construct() {
        parent::__construct();
       // $this->load->model('Setting_model');
      
    }
     
    public function index()
    {
       $data['subview'] ='admin/theloai/index';
       $data['title'] = 'danh sách thể loại sách';

       

       $this->load->view('admin/layout', $data); 
    }
    public function update()
    {
    	//$this->output->set_content_type('application/json');
    	if($this->input->is_ajax_request())
    	{
    	 header('Content-Type: application/json');
    	 
    	 $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
    	 echo json_encode( $arr );
    	
    	}
    	

    }
    public function save_boot()
    {
      //$this->output->set_content_type('application/json');
       // $url = "https://www.formget.com/update-data-in-database-using-codeigniter/";
        $url = 'http://stackoverflow.com/questions/12781876/get-file-content-via-php-curl';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        $data = curl_exec($curl);
        curl_close($curl);
       // print_r($data);
      

    }
}
?>