<?php
	class Prediction_Model extends CI_Model{

		public function savePrediction($data){
			$this->db->insert('tb_prediction', $data); 
		}

		public function getPrediction(){
			$this->db->select('*'); 
			$this->db->from('tb_prediction'); 
			$this->db->order_by('id', 'DESC'); 

			$qresult= $this->db->get(); 
			$result = $qresult->result(); 
			return $result; 
		}
		public function getPredictionById($data){
			$this->db->select('*'); 
			$this->db->from('tb_prediction'); 
			$this->db->where('id', $data['id']); 

			$qresult= $this->db->get(); 
			$result = $qresult->row(); 
			return $result; 
		}

		public function updatePrediction($data){
			$this->db->set('symptom', $data['symptom']);
			$this->db->set('suggestion', $data['suggestion']);
			$this->db->set('refference', $data['refference']);
			$this->db->where('id', $data['id']); 
			$this->db->update('tb_prediction'); 
		}

		public function RemovePrediction($id){
			$this->db->where('id', $id); 
			$this->db->delete('tb_prediction'); 
		}

		public function predictData($data){
			$this->db->select('*'); 
			$this->db->from('tb_prediction'); 
			$this->db->like('symptom',$data['searchkey']); 

			$qresult = $this->db->get(); 
			$result = $qresult->result(); 
			return $result; 
		}
	}
?>