<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Nhanvien_model extends CI_Model
{
	public $table ='sach';
	function __construct()
	{
			# code...
		parent::__construct();
		$this->load->database();
		
	}

	public function get_All_NV()
	{
		
			$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
			$query=$this->db->get('nhanvien');// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}

		public function getSachByID($maSach)
		{
			$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
			$this->db->where('masach', $maSach);
			$query=$this->db->get("sach");// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}

		public function get_Sach_By_Status($status)
		{
			$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
			$this->db->where('status', $status);
			$query=$this->db->get("sach");// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}
		

		public function updateSach($maSach, $data)
		{
			$this->db->where('masach', $maSach);
			$this->db->update('sach', $data);
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
			$query = $this->db->get("nhanvien");
			return $query->result_array();
		}
		public function record_count()
		{
			return $this->db->count_all("nhanvien");
		}


		public function deleteNV($maNV)
		{
			$this->db->where('manv',$maNV);
			$this->db->delete('nhanvien');
			$afftectedRows=$this->db->affected_rows();
			if($afftectedRows >0)
				return 1;
			return 0;
		}

		public function insertNV($data) 
		{

			$this->db->insert('nhanvien',$data);

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