<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuaSach extends CI_Controller 
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html

	 */
	function __construct()
	{
			# code...
		parent::__construct();
		$this->load->helper("url"); // phuong thuc lay base_url

		$this->load->model('default/mSuaSach');

	}
	public function index()
	{
		
		/*$data['data_infor']=array(
				"title1"=>"Quản lý Sách1"
				
				);*/
		//
				$masach = $_GET['masach'];
				$data['data_info']=$this->mSuaSach->listSach($masach);
				$data2=array(
					"title"=>"Sửa Sách",
					);
				
				/*$data1=$this->mSuaSach->listSach($masach);
				echo "<pre>";
				print_r($data1);
				echo "</pre>";*/
				$this->load->view('default/quanly/suasach',$data+$data2);
			}

		/*	public function check_exists($where) {
				$this->db->where($where);
        //thuc hien cau truy van
				$query = $this->db->get($this->table);
				if($query->num_rows() > 0)
				{
					return true;
				}
				return false;
			}*/

			public function updateSach()
			{
				
				$data=array(
					"tensach"=>$_POST['txtTenSach'],
					"tacgia"=>$_POST['txtTacGia'],
					"theloai"=>$_POST['txtTheLoai'],
					"mancc"=>$_POST['txtNCC'],
					"nhaxuatban"=>$_POST['txtNXB'],
					"soluong"=>$_POST['txtSoLuong'],
					"ngaynhap"=>$_POST['txtNgayNhap'],
					"gianhap"=>$_POST['txtGiaNhap'],
					"giaban"=>$_POST['txtGiaBan'],
					);
				if($_FILES['imgInp']['name']!='')
				{
					$dataFile=array(
						"hinhanh"=>$_FILES['imgInp']['name'],
						);

					$groupData=array_merge($data, $dataFile);
				}

				if(isset($groupData))
				{
					$dataSach=$groupData;
				}
				else
				{
					$dataSach=$data;
				}
				$this->mSuaSach->updateSach($_POST['txtMaSach'],$dataSach);

				//$data['data_info']=$this->mThemSach->listSach();
				$data2=array(
					"title"=>"Sửa Sách",
					"mess"=>"Chỉnh sửa thông tin Sách thành công"
					);




				$this->load->view('default/quanly/mess',$data2);


			}



		}

