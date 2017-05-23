<?php 
class Caidat extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Caidat_model');
      
    }
     
    public function index()
    {
       $data['subview'] ='admin/caidat/index';
       $data['title'] = 'Thay đổi quy định';

       $data['slnhaptothieukhinhap'] = $this->Caidat_model->get_slnhaptothieukhinhap();
       $data['sltontoidakhinhap'] = $this->Caidat_model->get_sltontoidakhinhap();
       $data['sotiennotoida'] = $this->Caidat_model->get_sotiennotoida();
       $data['sltontoithieukhiban'] = $this->Caidat_model->get_sltontoithieukhiban();

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
}
?>