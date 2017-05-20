<?php
	/**
	* 
	*/
	class MUser extends CI_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->database();
		}

		public function listUser()
		{
			echo "string";
			//$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
			//$query=$this->db->get("sach");// lấy trong bảng sách
			//$result = $query->result_array();// lấy danh sách
		}
	}
?>