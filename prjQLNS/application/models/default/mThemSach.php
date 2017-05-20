<?php
	/**
	* 
	*/
	class MThemSach extends CI_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->database();
		}

		public function listSach()
		{

			$this->db->select("masach,tensach, soluong, gianhap");//lấy tất cả trường dữ liệu trong bảng
			$this->db->where("status","0");
			$query=$this->db->get("sach");// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}
		public function updateSach($maSach, $data)
		{
			$this->db->where('masach', $maSach);
			$this->db->update('sach', $data);
		}
		/*public function updateSach($data_update, $masach)
		{
			$this->db->where("masach", $id);
			$this->db->update($this->_table, $data_update);
		}*/

	//	public function callAll()
		//{
		//	return $this->db->count_all("sach"); // trả về tổng số sách có có database
		//}

		//hàm load danh sách SÁCH phân trang
		/*public function listSach($record, $start)
		{
			$this->db->limit($record, $start);
			$query=$this->db->get("sach");
			return $query->result_array();

		}*/
	}
	?>