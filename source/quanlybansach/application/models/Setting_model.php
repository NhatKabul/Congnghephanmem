<?php  
 if (!defined('BASEPATH')) exit('No direct script access allowed');
 class Setting_model extends CI_MODEL {
 	public  $table = 'thamso';
  public $slnhaptothieukhinhap = 150;
  public $sltontoidakhinhap = 300;
  public $sotiennotoida = 20000;
  public $sltontoithieukhiban = 20;
 	function __construct() {
 		parent::__construct();
 		$this->load->database();
 	}

  public function get_slnhaptothieukhinhap()
  {
    $slnhaptothieukhinhap = $this->db->select('giatri')
                  ->get_where('thamso', array('mathamso' => 'slnhaptothieukhinhap'))
                  ->row()
                  ->giatri;
      return $slnhaptothieukhinhap;
  }
  public function get_sltontoidakhinhap()
  {
    $sltontoidakhinhap = $this->db->select('giatri')
                  ->get_where('thamso', array('mathamso' => 'sltontoidakhinhap'))
                  ->row()
                  ->giatri;
    return $sltontoidakhinhap;
 }
  public function get_sotiennotoida()
  {
    $sotiennotoida = $this->db->select('giatri')
                  ->get_where('thamso', array('mathamso' => 'sotiennotoida'))
                  ->row()
                  ->giatri;
    return $sotiennotoida;
 }
   public function get_sltontoithieukhiban()
  {
    $sltontoithieukhiban = $this->db->select('giatri')
                  ->get_where('thamso', array('mathamso' => 'sltontoithieukhiban'))
                  ->row()
                  ->giatri;
    return $sltontoithieukhiban;
 }
 /** update tham so **/
 public function update_thamso($mathamso, $data) 
 {
  $this->db->where('mathamso', $maso);
  $this->db->update('thamso', $data);
  if ($this->db->affected_rows() > 0)
  return TRUE;
  else
  return FALSE;
 }

}