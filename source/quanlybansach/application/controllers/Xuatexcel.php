<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xuatexcel extends CI_Controller 
{


	function __construct()
	{
			# code...
		parent::__construct();
		
		
		

	}
	function index($table_name)
    {
   #$this->load->library('PHPExcel');
#this->load->library('PHPExcel/IOFactory');
 require_once (APPPATH.'/third_party/PHPExcel.php');
require_once APPPATH . "/third_party/PHPExcel/IOFactory.php";
$rendererName = PHPExcel_Settings::PDF_RENDERER_MPDF;
//$rendererName = PHPExcel_Settings::PDF_RENDERER_DOMPDF;
//$rendererLibrary = 'tcPDF5.9';
$rendererLibrary = 'mPDF5.4';
    $objPHPExcel = new PHPExcel();
$query = $this->db->get('nhanvien');

// Set document properties
	$this->load->library("Pdf");
     $data['results'] = $query->result_array();
     $this->load->view('pdfview',$data);
}}