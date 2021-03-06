<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Nhapsach_model extends CI_Model
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
			$query=$this->db->get('sach');// lấy trong bảng sách
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
			$query = $this->db->get("sach");
			return $query->result_array();
		}
		public function record_count()
		{
			return $this->db->count_all("sach");
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
		public function insertphieunhap($data)
		{
			$this->db->insert('phieunhap', $data);
			$afftectedRows=$this->db->affected_rows();
			 $insert_id = $this->db->insert_id();
			if($afftectedRows >0)
				return $insert_id;
			return 0;
		}
		public function insertChiTietphieunhap($data)
		{
			$this->db->insert_batch('chitietphieunhap', $data);
			$afftectedRows=$this->db->affected_rows();
			if($afftectedRows >0)
				return 1;
			return 0;
		}
		public function get_inphieunhap($id)
		{
			 $this->db->select("*");//lấy tất cả trường dữ liệu trong bảng
		     $this->db->from('phieunhap');// lấy trong bảng sách
		     $this->db->where('phieunhap.maphieunhap', $id);
		     $this->db->join('chitietphieunhap', 'phieunhap.maphieunhap = chitietphieunhap.maphieunhap');
		     $this->db->join('nhacungcap', 'phieunhap.manhacungcap = nhacungcap.manhacungcap');
		      $this->db->join('nhanvien', 'phieunhap.manhanvien = nhanvien.manhanvien');
		     $this->db->join('sach', 'chitietphieunhap.masach = sach.masach'); 
		     $query = $this->db->get();
			return $result = $query->result_array();// lấy danh sách	

		}
		
	

	}
	?>	
			