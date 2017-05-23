<?php 
class Khachhang extends CI_Controller {
    public function __construct() {
        parent::__construct();
       $this->load->model('Khachhang_model');
      
    }
     
    public function index()
    {

        $config = array();
        $config["base_url"] = base_url() . "theloai/index";
        $config["total_rows"] = $this->Khachhang_model->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['data_info'] = $this->Khachhang_model->get_DanhsachPhanTrang($config['per_page'], $page);
        $data["links"] = $this->pagination->create_links();
        //$data['data_info'] = $this->Sach_model->get_AllSach();
        $data['subview'] ='admin/theloai/index';
        $data['title'] = 'Thể loại sách';
        //$data['data_info_status_0']=$this->Sach_model->get_Sach_By_Status(0);
        $this->load->view('admin/layout', $data);
    }
  /*  public function update()
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
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        $data = curl_exec($curl);
        curl_close($curl);
       // print_r($data);
      

    }*/
    public function chitiet()
    {
        header('Content-Type: application/json');
        $idSach= $this->input->post('id');
        $data['data_info']=$this->Khachhang_model->getTheLoaiSachByID($idSach);
        echo json_encode($data);

    }
    public function capnhat()
    {
        $matl = $this->input->post('txtMatl');
        $dataTheLoai=array(
            "tentl" => $this->input->post('txtTentl'),
            );

        header('Content-Type: application/json');
        $effect=$this->Khachhang_model->capnhattheloai($matl,$dataTheLoai);
     if($effect==1)
        {
            $data = array(
                "status"=>"1",
                "message"=>"Thành công"
                );
            echo json_encode($data);
        }  
      
    }
        public function deleteTheLoai()
    {
        header('Content-Type: application/json');
        $maTheloai= $this->input->post('id');
        
        $effect=$this->Khachhang_model->deleteTheLoai($maTheloai);
        //echo $effect; 
        if($effect==1)
        {
            $data = array(
                "status"=>"1",
                "message"=>"Thành công"
                );
            echo json_encode($data);
        }
    }
    public function themTheLoai()
    {
       
        $dataTheLoai=array(
            'matl' => $this->input->post('istxtMatl'),
            "tentl" => $this->input->post('istxtTentl'),
            );
        header('Content-Type: application/json');
        $effect=$this->Khachhang_model->ThemTheLoai($dataTheLoai);
        if($effect==1)
        {
            $data = array(
                "status"=>"1",
                "message"=>"Thêm Thành công"
                );
            echo json_encode($data);
        }  
      
    }



}
?>