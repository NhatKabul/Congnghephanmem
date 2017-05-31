<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Khachhang_model extends CI_Model
{
	public $table ='theloai';
	function __construct()
	{
			# code...
		parent::__construct();
		$this->load->database();
		
	}

	public function get_AllKhachHang()
	{
		
			$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
			$query=$this->db->get('khachhang');// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}

		public function getKhachhangByID($maTheLoai)
		{
			$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
			$this->db->where('makhachhang', $maTheLoai);
			$query=$this->db->get("khachhang");// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}

		public function get_Sach_By_Status($status)
		{
			$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
			$this->db->where('status', $status);
			$query=$this->db->get("sach");// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}
		

		public function updateTheLoai($matheloai, $data)
		{
			$this->db->where('matl', $matheloai);
			$this->db->update('theloai', $data);
			$afftectedRows=$this->db->affected_rows();
			if($afftectedRows >0)
				return 1;
			return 0;
		}
		public function capnhattheloai($maTheLoai, $data) 
		{


		    $this->db->set('tentl', $data['tentl']);
		    $this->db->where('matl', $maTheLoai);
		    $this->db->update('theloai');
		    	$afftectedRows=$this->db->affected_rows();
			if($afftectedRows >0)
				return 1;
			return 0;
		}


		public function ThemTheLoai($data) 
		{

		    $this->db->insert('theloai',$data);

		    $afftectedRows=$this->db->affected_rows();
			if($afftectedRows >0)
				return 1;
			return 0;
		}	
		/* get danh sach sach theo kieu phan trang */
		public function get_DanhsachPhanTrang($limit, $start)
		{
			$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
			$this->db->limit($limit, $start);
			$query = $this->db->get("theloai");
			return $query->result_array();
		}
		public function record_count()
		{
			return $this->db->count_all("theloai");
		}


		public function deleteTheLoai($maTheLoai)
		{
			$this->db->where('matl',$maTheLoai);
			$this->db->delete('theloai');
			$afftectedRows=$this->db->affected_rows();
			if($afftectedRows >0)
				return 1;
			return 0;
		}



		// public function insert($maSach, $data)
		// {
		// 	$this->db->where('masach', $maSach);
		// 	$this->db->update('sach', $data);
		// 	$afftectedRows=$this->db->affected_rows();
		// 	if($afftectedRows >0)
		// 		return 1;
		// 	return 0;
		// }

	}
	?>	