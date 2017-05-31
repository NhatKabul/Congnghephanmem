<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nhapsach extends CI_Controller
{

	function __construct()
	{
			# code...
		parent::__construct();
		$this->load->model('Nhapsach_model');
		$this->load->model('Sach_model');
		$this->load->model('Nhacungcap_model');
		$this->load->model('Caidat_model');
		$this->load->library('session');
	}
	public function index()
	{
		$data['data_thamso'] = $this->Caidat_model->get_AllCauHinh();
		$data['data_nhacc'] = $data['data_info'] = $this->Nhacungcap_model->get_All_NCC();
		$data['data_sach'] = $this->Nhapsach_model->get_AllSach();
		$data['subview'] ='admin/nhapsach/index';
		$data['title'] = 'nhập sách';
		$this->load->view('admin/layout', $data);
	}
	public function lapphieunhap()
	{
		header('Content-Type: application/json');
		$id = $this->input->post("id[]");
		$soluong = $this->input->post("soluong[]");
		$giaban = $this->input->post("dongia[]");
		$thanhtien = $this->input->post("thanhtien[]");
		$manhacungcap = $this->input->post("mancc");
		$manhanvien = $this->session->userdata('userdata')['id'];
		$tongtien = 0;
		$length = count($id);
		for($i = 0; $i < $length; $i++) {

			$tongtien += $thanhtien[$i];
		}
		echo $tongtien;
		$phieunhap = array(
			'tongtien' => $tongtien,
			'manhacungcap'=>$manhacungcap,
			'manhanvien' => $manhanvien
			);
		print_r($phieunhap);
		$maphieu= $this->Nhapsach_model->insertphieunhap($phieunhap);

		if($maphieu != 0)
		{
			/*sep2: tao chi tiet phieu nhap */
			$chitietphieunhap = array();
		 for($i = 0; $i < $length; $i++) {
			$chitietphieunhap[$i]['maphieunhap'] = $maphieu;
			$chitietphieunhap[$i]['masach'] = $id[$i];
			$chitietphieunhap[$i]['soluong'] = $soluong[$i];
			$chitietphieunhap[$i]['thanhtien'] = $thanhtien[$i];
		}
		print_r($chitietphieunhap);

			$machitiet=$this->Nhapsach_model->insertChiTietphieunhap($chitietphieunhap);
			echo $machitiet;
			$data = array(
				"status"=>"1",
				"message"=>"thêm phiếu Thành công"
				);
			echo json_encode($data);
		}
	}
}
