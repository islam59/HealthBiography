<?php
	class Consulting_Model extends CI_Model{

		public function getAllLocationByDoctor($data){
			$this->db->select('*');
			$this->db->from('tb_location');
			$this->db->where('doctorid',$data['doctorid']);
			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function getConsultingDataById($id){
			$this->db->select('*');
			$this->db->from('tb_location');
			$this->db->where('lid',$id);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}

		public function getAllConsultingDataById($id){
			$this->db->select('*');
			$this->db->from('tb_location');
			$this->db->where('doctorid',$id);
			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function applyLocation($data){
			$this->db->insert('tb_patient', $data);
		}

		public function saveLocation($data){
			$this->db->insert('tb_location',$data); 
		}

		public function LocationRemove($lid){
			$this->db->where('lid', $lid);
			$this->db->delete('tb_location');
		}
	}
?>