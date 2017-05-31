<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bansach extends CI_Controller
{

	function __construct()
	{
			# code...
		parent::__construct();
		$this->load->model('Baocaoton_model');
		$this->load->model('Baocaocongno_model');
		$this->load->model('Khachhang_model');
		$this->load->model('Nhapsach_model');
		$this->load->model('Bansach_model');
		$this->load->model('Sach_model');
		$this->load->model('Nhacungcap_model');
		$this->load->model('Khachhang_model');
		$this->load->model('Caidat_model');
		$this->load->library('session');
	}
	public function index()
	{
		$data['data_thamso'] = $this->Caidat_model->get_AllCauHinh();
		$data['data_nhacc'] = $data['data_info'] = $this->Khachhang_model->get_AllKhachHang();
		$data['data_sach'] = $this->Nhapsach_model->get_AllSach();
		$data['subview'] ='admin/bansach/index';
		$data['title'] = 'Bán sách';
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
		$sotienno = $this->input->post("txttienno");
		$manhanvien = $this->session->userdata('userdata')['id'];

		$tongtien = 0;
		$length = count($id);
		for($i = 0; $i < $length; $i++) {

			$tongtien += $thanhtien[$i];
		}
		$phieunhap = array(
			'tongtien' => $tongtien,
			'makhachhang'=>$manhacungcap,
			'manhanvien' => $manhanvien
			
			);

		$maphieu= $this->Bansach_model->insertphieunhap($phieunhap);
		$soluongton = $this->Sach_model->getSachByID($id[0]);
		if($maphieu != 0)
		{
			/*sep2: tao chi tiet phieu nhap */
			$chitietphieunhap = array();
			$sachupdate = array();
			$baocaoton = array();
			$nodau = $this->Khachhang_model->getKhachhangByID($manhacungcap);
			$baocaocongno = array(
			'makhachhang' => $manhacungcap,
			'nodau'=> $nodau[0]['tienno'] ,
			'phatsinh' => 'khách hàng nợ lại tiền',
			'nocuoi' => $nodau[0]['tienno'] + $sotienno,
			);
	   		for($i = 0; $i < $length; $i++) {
			$chitietphieunhap[$i]['mahd'] = $maphieu;
			$chitietphieunhap[$i]['masach'] = $id[$i];
			$chitietphieunhap[$i]['soluong'] = $soluong[$i];
			$chitietphieunhap[$i]['thanhtien'] = $thanhtien[$i];
			$soluongton = $this->Sach_model->getSachByID($id[$i]);
			$sachupdate[$i]['masach'] = $id[$i];
			$sachupdate[$i]['soluongton'] = $soluongton[0]['soluongton'] - $soluong[$i];
			/*bao cao ton */
			$baocaoton[$i]['masach'] = $id[$i];
			$baocaoton[$i]['tondau'] = $soluongton[0]['soluongton'];
			$baocaoton[$i]['phatsinh'] ="bán sách cho khách hàng ";
			$baocaoton[$i]['toncuoi'] = $soluongton[0]['soluongton'] - $soluong[$i];
			

		};

			$machitiet=$this->Bansach_model->insertChiTietphieunhap($chitietphieunhap);
			$update = $this->Sach_model->updateSoLuongton($sachupdate);
			$mabaocao = $this->Baocaoton_model->insertBaoCaoTon($baocaoton);
			$macongno = $this->Baocaocongno_model->Insertcongno($baocaocongno);
			/*cap nhau so luong ton cua san pham */
			if($machitiet && $update  !=0 )
			{
			$data = array(
				"status"=>"1",
				'mahd'=>$maphieu,
				"message"=>"Thêm phiếu nhập thành công"
				);
			echo json_encode($data);
		}
		}
	}
	public function inphieunhap($id)
	{

		$data['data_phieunhap'] = $this->Bansach_model->get_inphieunhap($id);
	/*	 echo '<pre>';
		print_r($data['data_phieunhap']);
		echo '</pre>';
		die()*/;
		//$data['subview'] ='admin/nhapsach/index';
		$data['title'] = 'nhập sách';
		$this->load->view('admin/bansach/inhoadon', $data);
	}
}
