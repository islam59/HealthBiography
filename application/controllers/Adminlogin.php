<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
		
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/

		$this->load->model('admin_model');

	}

	public function login(){
		$this->load->view('login');
	}

	public function LoginForm(){
		$data = array();
		$data['username']  = $this->input->post('username');
		$data['password']  = $this->input->post('password');

		$username = $data['username']; 
		$password = $data['password'];

		if(empty($username) OR empty($password)){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;"> &nbsp; Invalid Username Or Password !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Login',$sdata); 
		}else{

			$this->admin_model->checkUser($data);

			$sdata = array();
			$sdata['msg'] = '<span style="color:green;">Wellcome to Dashboard !</span>'; 

			$check = $this->admin_model->checkUser($data);
			if($check){

				$sdata = array(); 
				$sdata['userid'] = $check->userid; 
				$sdata['username'] = $check->username; 
				$sdata['type'] = $check->type;
				$sdata['userlogin'] = TRUE; 

				$this->session->set_userdata($sdata);//set as session... 

				$uid = $this->session->userid; 
				$this->admin_model->userLoginON($check->userid);//update login statusON...
				redirect('Admin/');
			}else{
				$sdata = array();
				$sdata['msg'] = '<span style="color:red;">Username Or Password Error !</span>'; 
				$this->session->set_flashdata($sdata);
				redirect('login',$sdata); 
			}
		}
	}

	public function Logout(){
		$uid = $this->session->userid;
		$this->admin_model->userLoginOFF($uid);//update login status.OFF..

		$this->session->unset_userdata($id);
		$this->session->unset_userdata('userlogin',FALSE);
		$this->session->sess_destroy(); 
		redirect('Login'); 
	}
}
?>