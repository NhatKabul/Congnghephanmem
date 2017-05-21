<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sach extends CI_Controller 
{

	function __construct()
	{
			# code...
		parent::__construct();
		$this->load->model('Sach_model');

	}
	public function index()
	{
		$data['data_info'] = $this->Sach_model->get_AllSach();
		//print_r($data['data_info']);
	   $data['subview'] ='admin/book/index';
       $data['title'] = 'Thay đổi quy định';
       $this->load->view('admin/layout', $data);

	}
}
