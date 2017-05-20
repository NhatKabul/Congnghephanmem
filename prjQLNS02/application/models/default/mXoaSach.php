<?php
	/**
	* 
	*/
	class MXoaSach extends CI_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->database();
		}

		public function listSach($maSach)
		{

			$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
			$this->db->where("masach",$maSach);
			$query=$this->db->get("sach");// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}
		public function listNCC($maNCC)
		{

			$this->db->select("mancc");//lấy tất cả trường dữ liệu trong bảng
			$this->db->where("mancc",$maNCC);
			$query=$this->db->get("nhacc");// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}

		public function deleteSach($maSach)
		{
			$this->db->where('masach',$maSach);
			$this->db->delete('sach');
		}

		public function updateSach($maSach, $data)
		{
			$this->db->where('masach', $maSach);
			$this->db->update('sach', $data);
		}

	}
	?>