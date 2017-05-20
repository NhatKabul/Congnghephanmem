<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ThemSach extends CI_Controller 
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

		$this->load->model('default/mThemSach');

	}
	public function index()
	{
		
		/*$data['data_infor']=array(
				"title1"=>"Quản lý Sách1"
				
				);*/
		//
				$data['data_info']=$this->mThemSach->listSach();
				$data2=array(
					"title"=>"Thêm Sách"
					);
				/*$title="Quản lý Sách555xx";
				echo"<pre>";
				print_r($data);
				echo"</pre>";*/
				$this->load->view('default/quanly/themsach',$data+$data2);
			}

			public function check_exists($where) {
				$this->db->where($where);
        //thuc hien cau truy van
				$query = $this->db->get($this->table);
				if($query->num_rows() > 0)
				{
					return true;
				}
				return false;
			}

			public function updateSach()
			{
				$data3 =array(
					"giaban"=>$_POST['txtGiaBan'],
					"status"=>1,
					"hinhanh"=>$_FILES['imgInp']['name'],

					);

				$this->mThemSach->updateSach($_POST['txtMaSach'],$data3);




				$data['data_info']=$this->mThemSach->listSach();
				$data2=array(
					"title"=>"Thêm Sách"
					);
				/*$title="Quản lý Sách555xx";
				echo"<pre>";
				print_r($data);
				echo"</pre>";*/
			//	check_exists("masach"=>$_POST['txtMaSach']);
				$this->load->view('default/quanly/themsach',$data+$data2);




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


		}

