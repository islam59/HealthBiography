<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

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

		//$this->load->model('user_model');
		$this->load->model('suggestion_model');
		$this->load->model('user_model');
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
		
		$data['header']    = $this->load->view('Doctor/header.php', $data, TRUE); 
		$data['body']    = $this->load->view('Doctor/body.php', $data, TRUE); 
		$data['content']    = $this->load->view('Doctor/doctor-home.php', $data, TRUE); 		
		$data['footer']    = $this->load->view('Doctor/footer.php', $data, TRUE); 

		$this->load->view('home',$data);
	}
	public function Prediction()
	{
		$data = array(); 		
		$data['predictions'] = $this->prediction_model->getPrediction($data);
		$data['header']    = $this->load->view('Doctor/header.php', $data, TRUE); 
		$data['content']    = $this->load->view('Doctor/prediction.php', $data, TRUE); 
		//$data['bottommenu']    = $this->load->view('Admin/bottommenu.php', $data, TRUE); 
		$data['footer']    = $this->load->view('Doctor/footer.php', $data, TRUE); 

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
			redirect('Doctor/Prediction',$sdata); 
		}else{
			$this->prediction_model->savePrediction($data); 
			$sdata = array();
			$sdata['msg'] = '<span style="color:teal;" class="btn"> &nbsp; Added Successfully !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Doctor/Prediction',$sdata); 
		}

	}
	public function Suggestion()
	{
		$data = array(); 		
		
		$data['header']    = $this->load->view('Doctor/header.php', $data, TRUE); 
		$data['suggestions'] = $this->suggestion_model->getAllSuggestion($data);
		$data['body']    = $this->load->view('common/suggestion.php', $data, TRUE); 
		$data['content']    = $this->load->view('Doctor/doctor-home.php', $data, TRUE); 		
		$data['footer']    = $this->load->view('Doctor/footer.php', $data, TRUE); 

		$this->load->view('home',$data);
	}

	public function SuggestionForm(){
		$data = array(); 
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');
		$data['posted_by'] = $this->session->userdata('username');

		if(empty($data['title']) OR empty($data['content'])){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;"> &nbsp; Field Must Not Empty !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Doctor/Suggestion',$sdata); 
		}else{
			$this->suggestion_model->saveSuggestion($data);
			$sdata = array();
			$sdata['msg'] = '<span style="color:teal;"> &nbsp; Suggestion Posted !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Doctor/Suggestion',$sdata); 
		}
	}
	public function SuggestionUpdateForm(){
		$data = array(); 
		$data['id'] = $this->input->post('id');
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');
		//$data['posted_by'] = $this->session->userdata('username');

		if(empty($data['title']) OR empty($data['content'])){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;"> &nbsp; Field Must Not Empty !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Doctor/Suggestion',$sdata); 
		}else{
			$this->suggestion_model->updateSuggestion($data);
			$sdata = array();
			$sdata['msg'] = '<span style="color:orange;"> &nbsp; Successfully Updated !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Doctor/Suggestion',$sdata); 
		}
	}

	public function SuggestionRemove($id){
		$this->suggestion_model->deleteSuggestion($id);
			$sdata = array();
			$sdata['msg'] = '<span style="color:orange;"> &nbsp; Successfully Deleted !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Doctor/Suggestion',$sdata); 
	}

	public function PatientList()
	{
		$data = array(); 		
		
		$data['header']    = $this->load->view('Doctor/header.php', $data, TRUE); 
		$data['userid'] = $this->session->userdata('userid');
		$data['patients']  = $this->user_model->patientList($data); 
		$data['body']      = $this->load->view('doctor/patient-list.php', $data, TRUE); 
		$data['content']   = $this->load->view('Doctor/doctor-home.php', $data, TRUE); 		
		$data['footer']    = $this->load->view('Doctor/footer.php', $data, TRUE); 

		$this->load->view('home',$data);
	}

	public function Location()
	{
		$data = array(); 		
		$data['doctorid'] = $this->session->userdata('userid');
		$data['header']    = $this->load->view('Doctor/header.php', $data, TRUE); 
		$data['locations'] = $this->consulting_model->getAllLocationByDoctor($data);
		$data['body']    = $this->load->view('doctor/location.php', $data, TRUE); 
		//$data['content']    = $this->load->view('Doctor/doctor-home.php', $data, TRUE); 		
		$data['footer']    = $this->load->view('Doctor/footer.php', $data, TRUE); 

		$this->load->view('home',$data);
	}

	public function LocationForm(){
		$data = array(); 
		$data['address'] = $this->input->post('address');
		$data['consultingdate'] = $this->input->post('consultingdate');
		$data['doctorid'] = $this->session->userdata('userid');

		if(empty($data['address']) OR empty($data['consultingdate'])){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;"> &nbsp; Field Must Not Empty !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Doctor/Location',$sdata); 
		}else{
			$this->consulting_model->saveLocation($data);
			$sdata = array();
			$sdata['msg'] = '<span style="color:teal;"> &nbsp; Event Posted !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Doctor/Location',$sdata); 
		}
	}

	public function LocationRemove($lid){
		$this->consulting_model->LocationRemove($lid);
		$sdata = array();
		$sdata['msg'] = '<span style="color:orange;"> &nbsp; Successfully Deleted !</span>'; 
		$this->session->set_flashdata($sdata);
		redirect('Doctor/Location',$sdata); 
	}

}
