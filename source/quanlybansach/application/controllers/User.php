<?php 
require('Admin.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends admin {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
      


    }

    public function index(){

     if(($this->session->userdata('userdata')!="")) {

       parent::index();
         $data['title'] = 'admin11';
     }
    else
    {
        $this->login();
    }  
     
  }
  public function login() {
    $data = array();
   $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  if($this->form_validation->run() == FALSE) {
     $this->load->view('admin/login', $data);
  } else 
  {
    $username = $this->input->post('email');
    $password = md5($this->input->post('password'));
     
     if($this->User_model->login($username, $password))
     {
       $this->session->set_flashdata('success', 'Đăng nhập thành công');
        redirect('user');
     }
     else
     {
         $this->load->view('admin/login', $data);
     }
  }

    
}

public function register() {
    $this->load->library('form_validation');
    $data = array();
    // field name, error message, validation rules
  $this->form_validation->set_rules('name', 'User Name', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('re_password', 'Password Confirmation', 'trim|required|matches[password]');
$this->form_validation->set_rules('check', '<div class=""></div>', 'callback__acept_term');

if($this->form_validation->run() == FALSE)
  {

    $this->load->view('admin/register', $data);  
  }
  else
  {
   $this->User_model->add_user();
   $this->thank();
  }
   
}
function check_email()
{
 
    $email = $this->input->post('email');
    $where = array();
    $where['email'] = $email;
    //kiểm tra điều kiện email có tồn tại trong csdl hay không
    if($this->User_model->check_exists($where))
    {
         //trả về thông báo lỗi nếu đã tồn tại email này
     $this->form_validation->set_message(__FUNCTION__, 'Email đã sử dụng');
         return FALSE;
    }
    return TRUE;
  
}
 function _acept_term($str){
        if ($str === '1'){ 
            return TRUE;
        }
            $this->form_validation->set_message('_acept_term', 'Agree to the terms');
            return FALSE;
}
public function logout() {
   $this->session->sess_destroy();
     redirect('user/login');
}
/* lay thong tin chi tiet user */
public function info($id =null) {
 if($id != '') {

  /*lay thong tin chi tiet cua user */
  $where = array('id' => $id);
  $userinfo = $this->User_model->get_user_info($where);
  var_dump($userinfo);
 }

}

}
