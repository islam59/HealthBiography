<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->model('doctor_model');
		$this->load->model('suggestion_model');
		$this->load->model('prediction_model'); 
		$data = array(); 
		
		if(!$this->session->userdata('userlogin')){
			redirect('Login');
		}
	}	

	public function index()
	{
		$data = array(); 		

		//$data['leftmenu']    = $this->load->view('Admin/leftmenu.php', $data, TRUE); 
		$data['header']    = $this->load->view('Admin/header.php', $data, TRUE); 
		$data['content']    = $this->load->view('Admin/admin-home.php', $data, TRUE); 
		//$data['bottommenu']    = $this->load->view('Admin/bottommenu.php', $data, TRUE); 
		$data['footer']    = $this->load->view('Admin/footer.php', $data, TRUE); 

		$this->load->view('home',$data);
	}

	public function Prediction()
	{
		$data = array(); 		
		$data['predictions'] = $this->prediction_model->getPrediction($data);
		$data['header']    = $this->load->view('Admin/header.php', $data, TRUE); 
		$data['content']    = $this->load->view('Admin/prediction.php', $data, TRUE); 
		//$data['bottommenu']    = $this->load->view('Admin/bottommenu.php', $data, TRUE); 
		$data['footer']    = $this->load->view('Admin/footer.php', $data, TRUE); 

		$this->load->view('home',$data);
	}

	public function PredictionForm()
	{
		$data = array(); 		
		$data['symptom'] = $this->input->post('symptom'); 
		$data['suggestion'] = $this->input->post('suggestion'); 
		$data['refference'] = $this->input->post('refference'); 

		if(empty($data['symptom']) OR empty($data['suggestion']) OR empty($data['refference'])){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;" class="btn"> &nbsp; Filed Must Not Empty !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Admin/Prediction',$sdata); 
		}else{
			$this->prediction_model->savePrediction($data); 
			$sdata = array();
			$sdata['msg'] = '<span style="color:teal;" class="btn"> &nbsp; Added Successfully !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Admin/Prediction',$sdata); 
		}

	}
	public function PredictionUpdate($id)
	{
		$data = array(); 		
		$data['id'] = $id; 
		$data['predictionsedit'] = $this->prediction_model->getPredictionById($data);
		$data['predictions'] = $this->prediction_model->getPrediction($data);
		$data['header']    = $this->load->view('Admin/header.php', $data, TRUE); 
		$data['content']    = $this->load->view('Admin/prediction.php', $data, TRUE); 
		//$data['bottommenu']    = $this->load->view('Admin/bottommenu.php', $data, TRUE); 
		$data['footer']    = $this->load->view('Admin/footer.php', $data, TRUE); 

		$this->load->view('home',$data);
	}
	public function PredictionUpdateForm(){
		$data = array(); 
		$data['id']		= $this->input->post('id'); 
		$data['symptom'] = $this->input->post('symptom'); 
		$data['suggestion'] = $this->input->post('suggestion'); 
		$data['refference'] = $this->input->post('refference'); 

		if(empty($data['symptom']) OR empty($data['suggestion']) OR empty($data['refference'])){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;" class="btn"> &nbsp; Filed Must Not Empty !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Admin/Prediction',$sdata); 
		}else{
			$this->prediction_model->updatePrediction($data); 
			$sdata = array();
			$sdata['msg'] = '<span style="color:orange;" class="btn"> &nbsp; Update Successfully !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Admin/Prediction',$sdata); 
		}
	}

	public function RemovePrediction($id){
		$this->prediction_model->RemovePrediction($id); 
		redirect('Admin/Prediction');
	}



	public function Doctor()
	{
		$data = array(); 		

		$data['doctors'] = $this->doctor_model->DoctorList($data); 
		
		$data['header']    = $this->load->view('Admin/header.php', $data, TRUE); 
		$data['content']    = $this->load->view('Admin/doctor.php', $data, TRUE); 
		$data['footer']    = $this->load->view('Admin/footer.php', $data, TRUE); 
		$this->load->view('home',$data);
	}

	public function DoctorSearch()
	{
		$data = array(); 		
		$data['searchkey'] = $this->input->post('search');

		$data['doctors'] = $this->doctor_model->DoctorListSearch($data); 
		
		$data['header']    = $this->load->view('Admin/header.php', $data, TRUE); 
		$data['content']    = $this->load->view('Admin/doctor.php', $data, TRUE); 
		$data['footer']    = $this->load->view('Admin/footer.php', $data, TRUE); 
		$this->load->view('home',$data);
	}

	public function RemoveDoctor($userid){
		$this->doctor_model->RemoveDoctor($userid); 
		redirect('Admin/Doctor');
	}

	public function User()
	{
		$data = array(); 		

		$data['users'] = $this->user_model->UserList($data); 
		
		$data['header']    = $this->load->view('Admin/header.php', $data, TRUE); 
		$data['content']    = $this->load->view('Admin/user.php', $data, TRUE); 
		$data['footer']    = $this->load->view('Admin/footer.php', $data, TRUE); 
		$this->load->view('home',$data);
	}
	public function RemoveUser($userid){
		$this->user_model->RemoveUser($userid); 
		redirect('Admin/User');
	}
	public function UserSearch()
	{
		$data = array(); 		
		$data['searchkey'] = $this->input->post('search');

		$data['users'] = $this->user_model->UserListSearch($data); 
		
		$data['header']    = $this->load->view('Admin/header.php', $data, TRUE); 
		$data['content']    = $this->load->view('Admin/user.php', $data, TRUE); 
		$data['footer']    = $this->load->view('Admin/footer.php', $data, TRUE); 
		$this->load->view('home',$data);
	}

	public function AccessOffUser($id){
		$this->user_model->AccessOff($id);
		redirect('Admin/User');
	}
	public function AccessOnUser($id){
		$this->user_model->AccessOn($id);
		redirect('Admin/User');
	}

	public function AccessOffDoctor($id){
		$this->doctor_model->AccessOffDoctor($id);
		redirect('Admin/Doctor');
	}
	public function AccessOnDoctor($id){
		$this->doctor_model->AccessOnDoctor($id);
		redirect('Admin/Doctor');
	}

	public function Suggestion()
	{
		$data = array(); 		
		
		$data['header']    = $this->load->view('Admin/header.php', $data, TRUE); 
		$data['suggestions'] = $this->suggestion_model->getAllSuggestion($data);
		$data['body']    = $this->load->view('common/suggestion.php', $data, TRUE); 
		$data['content']    = $this->load->view('Admin/admin-home.php', $data, TRUE); 		
		$data['footer']    = $this->load->view('Admin/footer.php', $data, TRUE); 

		$this->load->view('home',$data);
	}	
}
