<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class XoaSach extends CI_Controller 
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

		$this->load->model('default/mXoaSach');

	}
	public function index()
	{
		$masach = $_GET['masach'];
		$data['data_info']=$this->mXoaSach->listSach($masach);
		$data2=array(
			"title"=>"Sửa Sách",
			);

		$this->load->view('default/quanly/xoasach',$data+$data2);
	}

	public function deleteSach()
	{
	//	$masach = $_GET['masach'];
		$data['data_info']=$this->mXoaSach->deleteSach($_POST['txtMaSach']);
		//$this->mSuaSach->updateSach($_POST['txtMaSach'],$dataSach);

				//$data['data_info']=$this->mThemSach->listSach();
		$data2=array(
					"title"=>"Xóa Sách",
					"mess"=>"Xóa Sách thành công"
					);
		$this->load->view('default/quanly/mess',$data2);
	}
}

