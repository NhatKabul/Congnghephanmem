<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Sach_model extends CI_Model
	{
		public $table ='sach';
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->database();
		}

		public function get_AllSach()
		{
		
			$this->db->select("masach, tensach");//lấy tất cả trường dữ liệu trong bảng
			$query=$this->db->get('sach');// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}

	}
?>	