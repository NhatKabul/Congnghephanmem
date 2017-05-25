<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nhanvien extends CI_Controller 
{

	function __construct()
	{
			# code...
		parent::__construct();
		$this->load->model('Nhanvien_model');
		$this->load->library('pagination');

	}
	public function index()
	{

		$config = array();
		$config["base_url"] = base_url() . "nhanvien/index";
		$config["total_rows"] = $this->Nhanvien_model->record_count();
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
		$data['data_info'] = $this->Nhanvien_model->get_DanhsachPhanTrang($config['per_page'], $page);
		$data["links"] = $this->pagination->create_links();
	 	//$data['data_info'] = $this->Sach_model->get_AllSach();
		$data['subview'] ='admin/nhanvien/index';
		$data['title'] = 'Quản lý sách';
		$data['data_info_status_0']=$this->Nhanvien_model->get_ALL_NV(0);
		$this->load->view('admin/layout', $data);




	}
	public function chitiet()
	{
		header('Content-Type: application/json');
		$idSach= $this->input->post('id');
		$data['data_info']=$this->Sach_model->getSachByID($idSach);
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

	public function xoanv()
	{
		header('Content-Type: application/json');
		$manv= $this->input->post('id');
		
		$effect=$this->Nhanvien_model->deleteNV($manv);
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


//Thêm sách tức update các thông tin bán cho sách và status 0 chuyển thành 1 (cho phép nhan viên bán được bán các sách này)
	public function themnv()
	{
		header('Content-Type: application/json');
		 $name =time().$_FILES['file']['name'];
          	  $path='public/web/images/';
          	  $tmp_name = $_FILES['file']['tmp_name'];
		$dataNV=array(

		    //"manv" => 1001,
			"tennv" => $this->input->post('txtTenNV2'),
			"sdt"=> $this->input->post('txtSDT2'),
			"email"=> $this->input->post('txtEmail2'),
			"diachi"=> $this->input->post('txtDiaChi2'),	
			"ngaysinh"=>$this->input->post('txtNgaySinh2'),
			"chucvu"=>$this->input->post('selChucVu2'),
			"hinhanh"=>  $name,
			"gioitinh" =>$this->input->post('selGioiTinh2'),
			"tinhtrangtk"=>$this->input->post('selTTTK2'),
			"matkhau"=> md5('123456'),
			"ngaytao"=>date('Y-m-d H:i:s'),
			);

		$effect=$this->Nhanvien_model->insertNV($dataNV);
		//echo $effect; 
		if($effect==1)
		{
			/*neu thanh cong tien hanh upload image */
			
          	if(@move_uploaded_file($tmp_name,$path.$name))
          	   {
          	   
          	   }

			$data = array(
				"status"=>"1",
				"message"=>"Thêm nhân viên viên Thành công "
				);
			echo json_encode($data);
		}
		else
		{
			
			$data = array(
				"status"=>"1",
				"message"=>" thêm nhân viên thất bại Thất bại"
				);
			echo json_encode($data);
		}	
	}

}