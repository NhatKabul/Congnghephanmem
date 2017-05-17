<?php  
 if (!defined('BASEPATH')) exit('No direct script access allowed');

 class User_model extends CI_MODEL {
 	public  $table = 'user';
 	function __construct() {
 		parent::__construct();
 		 $this->load->database();
 	}
 	public function login($email, $password) {
 		//them dieu kien kiem tra email va password
    
    $this->db->where('email',$email);
		$this->db->where('password',$password);
		$query= $this->db->get('user');
		if($query->num_rows() == 1)
		{
		 
        $row = $query->row();
        $userdata = array(
        'email'=>  $row->email,
        'id' =>   $row->id,
        'username' => $row->username,
        'logged_in' =>  TRUE 
        );
      $this->session->set_userdata('userdata',$userdata); 
        return true;

		}
			return false;
 	}

    /*
     * lay thong tin thanh vien
     */
    public function get_user_info($where = array())
    {
        //tao dieu kien cho cau truy van
        $this->db->where($where);
        $result = $this->db->get($this->table);
        return $result->row();
    }
  
  public function add_user()
 {
  $data=array(
    'username'=>$this->input->post('name'),
    'email'=>$this->input->post('email'),
    'password'=>md5($this->input->post('password'))
  );
  $this->db->insert('user',$data);
 }
  /*
 * Kiểm tra email đã tồn tại hay chưa
 */
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

 }
