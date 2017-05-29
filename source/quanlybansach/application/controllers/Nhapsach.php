<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nhapsach extends CI_Controller
{

	function __construct()
	{
			# code...
		parent::__construct();
		$this->load->model('Nhapsach_model');
	}
	public function index()
	{
	   $data['data_info'] = $this->Nhapsach_model->get_AllSach();
	   $data['subview'] ='admin/nhapsach/index';
       $data['title'] = 'nhập sách';
       $this->load->view('admin/layout', $data);
	}
}
