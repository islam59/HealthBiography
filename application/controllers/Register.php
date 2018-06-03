<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct(); 
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/

		$this->load->model('register_model');
		$data = array(); 
	}	

	public function RegisterDoctor()
	{
		$data = array(); 
		$this->load->view('register-doctor',$data);
	}
	public function RegisterDoctorForm()
	{
		$data = array(); 
		$username   = $data['username']    = $this->input->post('username');

		$password   = $this->input->post('password');
		$c_password = $this->input->post('c_password');

		$firstname  = $data['firstname']   = $this->input->post('firstname');
		$lastname   = $data['lastname']    = $this->input->post('lastname');

		$email      = $this->input->post('email');
		$c_email    = $this->input->post('c_email');

		$phone      = $data['phone']       = $this->input->post('phone');
		$country    = $data['country']     = $this->input->post('country');
		$gender     = $data['gender']      = $this->input->post('gender');
		$address    = $data['address']     = $this->input->post('address');

		$department = $data['department']  = $this->input->post('department');
		$consultingphone = $data['consultingphone']  = $this->input->post('consultingphone');
		$education = $data['education']  = $this->input->post('education');
		$work = $data['work']  = $this->input->post('work');

		$data['access']  = '1';
		$data['type']  = 'doctor';
		
		if(empty($username) OR empty($password) OR empty($firstname) OR empty($lastname) OR empty($email) OR empty($phone) OR empty($country) OR empty($gender)){

			$sdata = array();
			$sdata['msg'] = '<span style="color:red;"> &nbsp; Field Must Not Empty !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Register/RegisterDoctor',$sdata); 
		}elseif($password != $c_password){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;"> &nbsp; Password Not Matched !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Register/RegisterDoctor',$sdata); 
		}elseif($email != $c_email){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;"> &nbsp; Email Not Matched !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Register/RegisterDoctor',$sdata); 
		}else{
			$check = $this->register_model->RegisterDoctorCheck($data);
			if($check){
				$sdata = array();
				$sdata['msg'] = '<span style="color:red;"> &nbsp; User Already Exist !</span>'; 
				$this->session->set_flashdata($sdata);
				redirect('Register/RegisterDoctor',$sdata); 
			}else{
				$data['password'] = md5($password); 
				$data['email'] = $email; 

				$this->register_model->RegisterDoctorSave($data);
				$sdata = array();
				$sdata['msg'] = '<span style="color:teal;"> &nbsp; Registration Successful !</span>'; 
				$this->session->set_flashdata($sdata);
				redirect('Register/RegisterDoctor',$sdata); 
			}		
		}
		//$this->load->view('register-doctor',$data);
	}

	public function RegisterPatient()
	{
		$data = array(); 		
		$this->load->view('register-patient',$data);
	}
	public function RegisterPatientForm()
	{
		$data = array(); 
		$username   = $data['username']    = $this->input->post('username');

		$password   = $this->input->post('password');
		$c_password = $this->input->post('c_password');

		$firstname  = $data['firstname']   = $this->input->post('firstname');
		$lastname   = $data['lastname']    = $this->input->post('lastname');

		$email      = $this->input->post('email');
		$c_email    = $this->input->post('c_email');

		$phone      = $data['phone']       = $this->input->post('phone');
		$country    = $data['country']     = $this->input->post('country');
		$gender     = $data['gender']      = $this->input->post('gender');
		$address    = $data['address']     = $this->input->post('address');

		$department = $data['diesses']  = $this->input->post('diesses');


		$data['access']  = '1';
		$data['type']  = 'user';
		
		if(empty($username) OR empty($password) OR empty($firstname) OR empty($lastname) OR empty($email) OR empty($phone) OR empty($country) OR empty($gender)){

			$sdata = array();
			$sdata['msg'] = '<span style="color:red;"> &nbsp; Field Must Not Empty !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Register/RegisterPatient',$sdata); 
		}elseif($password != $c_password){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;"> &nbsp; Password Not Matched !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Register/RegisterPatient',$sdata); 
		}elseif($email != $c_email){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;"> &nbsp; Email Not Matched !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Register/RegisterPatient',$sdata); 
		}else{
			$check = $this->register_model->RegisterUserCheck($data);
			if($check){
				$sdata = array();
				$sdata['msg'] = '<span style="color:red;"> &nbsp; User Already Exist !</span>'; 
				$this->session->set_flashdata($sdata);
				redirect('Register/RegisterPatient',$sdata); 
			}else{
				$data['password'] = md5($password); 
				$data['email'] = $email; 

				$this->register_model->RegisterUserSave($data);
				$sdata = array();
				$sdata['msg'] = '<span style="color:teal;"> &nbsp; Registration Successful !</span>'; 
				$this->session->set_flashdata($sdata);
				redirect('Register/RegisterPatient',$sdata); 
			}		
		}
		//$this->load->view('register-doctor',$data);
	}

}
