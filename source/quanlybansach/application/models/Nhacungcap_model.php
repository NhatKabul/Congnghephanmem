<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Nhacungcap_model extends CI_Model
{
	public $table ='sach';
	function __construct()
	{
			# code...
		parent::__construct();
		$this->load->database();
		
	}



	public function getNCCByID($idNCC)
	{
			$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
			$this->db->where('mancc', $idNCC);
			$query=$this->db->get("nhacc");// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}

		public function get_All_NCC()
		{
			$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
			$query=$this->db->get("nhacungcap");// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}
		public function insertNCC($data)
		{
			$this->db->insert('nhacc', $data);
			$afftectedRows=$this->db->affected_rows();
			if($afftectedRows >0)
				return 1;
			return 0;
		}
		

		public function updateNCC($maNCC, $data)
		{
			$this->db->where('mancc', $maNCC);
			$this->db->update('nhacc', $data);
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
			$query = $this->db->get("nhacungcap");
			return $query->result_array();
		}
		public function record_count()
		{
			return $this->db->count_all("nhacungcap");
		}


		public function deleteNCC($maNCC)
		{
			$this->db->where('mancc',$maNCC);
			$this->db->delete('nhacc');
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