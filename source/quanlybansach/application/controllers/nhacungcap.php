<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nhacungcap extends CI_Controller 
{

	function __construct()
	{
			# code...
		parent::__construct();
		$this->load->model('Nhacungcap_model');
		$this->load->library('pagination');

	}
	public function index()
	{

		$config = array();
		$config["base_url"] = base_url() . "nhacungcap/index";
		$config["total_rows"] = $this->Nhacungcap_model->record_count();
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
		$data['data_info'] = $this->Nhacungcap_model->get_DanhsachPhanTrang($config['per_page'], $page);
		$data["links"] = $this->pagination->create_links();
		$data['data_info'] = $this->Nhacungcap_model->get_All_NCC();
		$data['subview'] ='admin/nhacungcap/index';
		$data['title'] = 'QUẢN LÝ NHÀ CUNG CẤP';

		//lấy dánh sách nhà cung cấp
		//$data['data_info_NCC']=$this->Nhacungcap_model->get_All_NCC();
		$this->load->view('admin/layout', $data);




	}
	public function chitiet()
	{
		header('Content-Type: application/json');
		$idNCC= $this->input->post('id');
		$data['data_info']=$this->Nhacungcap_model->getNCCByID($idNCC);
		echo json_encode($data);

	}

	public function capnhat()
	{

		

		$dataSach=array(
			"masach" => $this->input->post('txtMaSach'),
			"tensach" => $this->input->post('txtTenSach'),
			"giaban"=> $this->input->post('txtGiaBan'),
			"soluong" => $this->input->post('txtSoLuong'),
			"ngaynhap" => $this->input->post('txtNgayNhap'),
			"tacgia" => $this->input->post('txtTacGia'),
			"mancc" => $this->input->post('txtNCC'),
			"nhaxuatban" => $this->input->post('txtNXB'),
			"theloai" => $this->input->post('txtTheLoai'),
			);
		header('Content-Type: application/json');
		$effect=$this->Sach_model->updateSach($dataSach['masach'],$dataSach);
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

	public function xoancc()
	{
		header('Content-Type: application/json');
		$idNCC= $this->input->post('id');
		
		$effect=$this->Nhacungcap_model->deleteNCC($idNCC);
		//echo $effect; 
		if($effect==1)
		{
			$data = array(
				"status"=>"1",
				"message"=>"Thành công"
				);
			echo json_encode($data);
		}
		else
		{
			
			$data = array(
				"status"=>"1",
				"message"=>"Thất bại"
				);
			echo json_encode($data);
		}
	}


//Thêm sách tức update các thông tin bán cho sách và status 0 chuyển thành 1 (cho phép nhan viên bán được bán các sách này)
	public function themncc()
	{

		
		$dataNCC=array(
			//"mancc" => 1001,
			"tenncc" => $this->input->post('txtTenNCC'),
			"sdt"=> $this->input->post('txtSDT'),
			"email"=> $this->input->post('txtEmail'),
			"diachi"=> $this->input->post('txtDiaChi'),			
			);

		header('Content-Type: application/json');
		//echo json_encode($dataSach);
		$effect=$this->Nhacungcap_model->insertNCC($dataNCC);
		//echo $effect; 
		if($effect==1)
		{
			$data = array(
				"status"=>"1",
				"message"=>"Thành công "
				);
			echo json_encode($data);
		}
		else
		{
			
			$data = array(
				"status"=>"1",
				"message"=>"Thất bại"
				);
			echo json_encode($data);
		}	
	}

	
}
