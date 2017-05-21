<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sach extends CI_Controller 
{

	function __construct()
	{
			# code...
		parent::__construct();
		$this->load->model('Sach_model');

	}
	public function index()
	{
		$data['data_info'] = $this->Sach_model->get_AllSach();
		//print_r($data['data_info']);
		$data['subview'] ='admin/book/index';
		$data['title'] = 'Thay đổi quy định';
		$this->load->view('admin/layout', $data);

	}
	public function chitiet()
	{
		header('Content-Type: application/json');
		$idSach= $this->input->post('id');
		$data['data_info']=$this->Sach_model->getSachByID($idSach);
		//$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
		echo json_encode($data);

		//print_r($data['data_info']);

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
			//print_r($data);
			//echo 1;
			echo json_encode($data);
		}
		

	}
}
