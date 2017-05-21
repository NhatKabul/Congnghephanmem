<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nhapsach extends CI_Controller
{

	function __construct()
	{
			# code...
		parent::__construct();
		//$this->load->model('Nhapsach_model');

	}
	public function index()
	{
		//$data['data_info'] = $this->Sach_model->get_AllSach();
		//print_r($data['data_info']);
	   $data['subview'] ='admin/nhapsach/index';
       $data['title'] = 'Nhap sach';
       $this->load->view('admin/layout', $data);

	}
}
