<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Baocaocongno_model extends CI_Model
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
		
			$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
		     $this->db->from('sach');// lấy trong bảng sách
		     $this->db->join('theloai', 'sach.theloai = theloai.matheloai');
		     $query = $this->db->get();
			return $result = $query->result();// lấy danh sách

		}

		public function getSachByID($maSach)
		{
			$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
			$this->db->where('masach', $maSach);
			$query=$this->db->get("sach");// lấy trong bảng sách
			return $result = $query->result_array();// lấy danh sách

		}
		/* get sach voi dieu kien*/
		public function getSachByMaNCC($mancc)
		{
			$this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
			$this->db->where('mancc', $mancc);
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

		
		public function Insertcongno($data) 
		{

		    $this->db->insert('baocaocongno',$data);

		    $afftectedRows=$this->db->affected_rows();
			if($afftectedRows >0)
				return 1;
			return 0;
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
		public function updateSoLuongton($data)
		{
			$this->db->update_batch('sach', $data, 'masach'); 
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
			$this->db->from('baocaocongno');// lấy trong bảng sách
			$this->db->join('khachhang', 'baocaocongno.makhachhang = khachhang.makhachhang');
			$query = $this->db->get();
			return $query->result_array();
		}
		public function record_count()
		{
			return $this->db->count_all("baocaocongno");
		}


		public function deleteSach($maSach)
		{
			$this->db->where('masach',$maSach);
			$this->db->delete('sach');
			$afftectedRows=$this->db->affected_rows();
			if($afftectedRows >0)
				return 1;
			return 0;
		}
		public function deleteNhieuSach($maSach)
		{
			$this->db->where_in('masach',$maSach);
			$this->db->delete('sach');
			$afftectedRows=$this->db->affected_rows();
			if($afftectedRows >0)
				return 1;
			return 0;
		}

	}
	?>	