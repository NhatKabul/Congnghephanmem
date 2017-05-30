<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nhapsach extends CI_Controller
{

	function __construct()
	{
			# code...
		parent::__construct();
		$this->load->model('Nhapsach_model');
		$this->load->model('Sach_model');
		$this->load->model('Nhacungcap_model');
	}
	public function index()
	{
	  $data['data_nhacc'] = $data['data_info'] = $this->Nhacungcap_model->get_All_NCC();
	   $data['data_info'] = $this->Nhapsach_model->get_AllSach();
	   $data['subview'] ='admin/nhapsach/index';
       $data['title'] = 'nhập sách';
       $this->load->view('admin/layout', $data);
	}
}
