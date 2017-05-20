<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qlsach extends CI_Controller 
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

	}
	public function index()
	{
		$this->load->model('default/mQLSach');
		//----- pagination-----------------------
		$config["total_rows"]=$this->mQLSach->callAll(); // gọi hàm tính tổng số record table sách
		$config["base_url"]=base_url()."index.php/default/qlsach/index";//base_url()
		$config["per_page"]=3; // số record hiển thị trên 1 trang
		$this->load->library("pagination", $config); // gọi thư việ pagination với thông số là mảng config.

		// lấy bị trí bắt đầu (index.php/controller/action/vịtribatdau) vitribat dau dc tính tu controller => vitribatdau =3
		$start=$this->uri->segment(4);
		$start2['xxx']=$this->uri->segment(4);
		$data['data_info']=$this->mQLSach->listSach($config["per_page"], $start);
		//$this->pagination->create_links();


				//--------------------------
		//$data['data_info']=$this->mQLSach->dSSach();
		$data2=array(
			"title"=>"Quản lý Sách"
			);
$cc["xxx"]=base_url();
				$this->load->view('default/quanly/qlsach',$data2+ $data+ $start2);
			}

		}

