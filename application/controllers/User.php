<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

		$this->load->model('user_model');
		$this->load->model('suggestion_model');
		$this->load->model('doctor_model');
		$this->load->model('consulting_model');
		$this->load->model('prediction_model'); 
		$data = array(); 
		
		if(!$this->session->userdata('userlogin')){
			redirect('Login');
		}
	}	

	public function index()
	{
		$data = array(); 		
		
		$data['header']    = $this->load->view('User/header.php', $data, TRUE); 
		$data['body']    = $this->load->view('User/body.php', $data, TRUE); 
		$data['content']    = $this->load->view('User/patient-home.php', $data, TRUE); 		
		$data['footer']    = $this->load->view('User/footer.php', $data, TRUE); 

		$this->load->view('home',$data);
	}

	public function DoctorList()
	{
		$data = array(); 		
		
		$data['header']  = $this->load->view('User/header.php', $data, TRUE); 
		$data['doctors'] = $this->doctor_model->DoctorList($data); 
		$data['body']    = $this->load->view('User/doctorlist.php', $data, TRUE); 
		$data['content'] = $this->load->view('User/patient-home.php', $data, TRUE); 		
		$data['footer']  = $this->load->view('User/footer.php', $data, TRUE); 

		$this->load->view('home',$data);
	}


	public function DoctorSearch()
	{
		$data = array(); 		
		$data['searchkey'] = $this->input->post('search');

		$data['doctors'] = $this->doctor_model->DoctorListSearch($data); 
		
		$data['header']    = $this->load->view('User/header.php', $data, TRUE); 		
		$data['body']    = $this->load->view('User/doctorlist.php', $data, TRUE); 
		$data['content'] = $this->load->view('User/patient-home.php', $data, TRUE); 	
		$data['footer']    = $this->load->view('User/footer.php', $data, TRUE); 
		$this->load->view('home',$data);
	}

	public function Prediction()
	{
		$data = array(); 
		$data['searchkey'] = $this->input->post('searchPred');
		if(empty($data['searchkey'])){
			$data['searchkey'] = ''; 
		}
		$data['predictions'] = $this->prediction_model->predictData($data); 		
		$data['header']    = $this->load->view('User/header.php', $data, TRUE); 		
		$data['body']    = $this->load->view('User/prediction.php', $data, TRUE); 
		$data['content'] = $this->load->view('User/patient-home.php', $data, TRUE); 	
		$data['footer']    = $this->load->view('User/footer.php', $data, TRUE); 
		$this->load->view('home',$data);
	}


	public function LocationById($doctorid){
		$this->consulting_model->getConsultingDataById($doctorid);
	}


	public function ApplyForm(){
		$data = array(); 
		$data['userid'] = $this->input->post('userid');
		$data['doctorid'] = $this->input->post('doctorid');
		$data['locationid'] = $this->input->post('locationid');

		if(empty($data['userid']) OR empty($data['locationid'])){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;"> &nbsp; Failed To Applied !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('User/DoctorList',$sdata); 
		}else{
			$this->consulting_model->applyLocation($data);
			$sdata = array();
			$sdata['msg'] = '<span style="color:teal;"> &nbsp; Successfully Applied !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('User/DoctorList',$sdata); 
		}
	}



	public function Suggestion()
	{
		$data = array(); 		
		
		$data['header']    = $this->load->view('User/header.php', $data, TRUE); 
		$data['suggestions'] = $this->suggestion_model->getAllSuggestion($data);
		$data['body']    = $this->load->view('common/suggestion.php', $data, TRUE); 
		$data['content']    = $this->load->view('User/patient-home.php', $data, TRUE); 		
		$data['footer']    = $this->load->view('User/footer.php', $data, TRUE); 

		$this->load->view('home',$data);
	}



}
