<?php
	/**
	* 
	*/
	class MQLSach extends CI_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->database();
		}

		public function dSSach()
		{
		
			$this->db->select("masach, tensach");//lấy tất cả trường dữ liệu trong bảng
			$query=$this->db->get("sach");// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}

		public function callAll()
		{
			return $this->db->count_all("sach"); // trả về tổng số sách có có database
		}

		//hàm load danh sách SÁCH phân trang
		public function listSach($record, $start)
		{
			$this->db->limit($record, $start);
			$query=$this->db->get("sach");
			return $query->result_array();

		}
	}
?>