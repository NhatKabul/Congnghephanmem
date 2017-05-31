	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    require_once (APPPATH.'/third_party/PHPExcel.php');
    require_once APPPATH . "/third_party/PHPExcel/IOFactory.php";
    class Xuatexcel extends CI_Controller 
    {


        function __construct()
        {
            parent::__construct();
            $this->load->model('Sach_model');
          

        }
        function index()
        {	

        }

        }
