<?php 
class Setting extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Setting_model');
      
    }
     
    public function index()
    {
       $data['subview'] ='admin/setting/setting';
       $data['title'] = 'Thay đổi quy định';

       $data['slnhaptothieukhinhap'] = $this->Setting_model->get_slnhaptothieukhinhap();
       $data['sltontoidakhinhap'] = $this->Setting_model->get_sltontoidakhinhap();
       $data['sotiennotoida'] = $this->Setting_model->get_sotiennotoida();
       $data['sltontoithieukhiban'] = $this->Setting_model->get_sltontoithieukhiban();

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