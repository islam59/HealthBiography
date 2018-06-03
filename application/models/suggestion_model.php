<?php
	class Suggestion_Model extends CI_Model{



		public function saveSuggestion($data){
			$this->db->insert('tb_suggestion', $data);
		}

		public function getAllSuggestion(){
			$this->db->select('*');
			$this->db->from('tb_suggestion');
			$this->db->order_by('id', 'DESC');
			$qresult = $this->db->get();
			$result = $qresult->result(); 

			return $result; 
		}

		public function updateSuggestion($data){
			$this->db->set('title', $data['title']); 
			$this->db->set('content', $data['content']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_suggestion');
		}

		public function deleteSuggestion($id){
			$this->db->where('id', $id);
			$this->db->delete('tb_suggestion');
		}
		
/*
		public function checkDoctor($data){
			$this->db->select('*');
			$this->db->from('tb_admin');
			$this->db->where('username',$data['username']);
			$this->db->where('password',md5($data['password']));
			$this->db->where('access','1');
			$qresult = $this->db->get(); 

			$has  = $qresult->num_rows(); 

			if($has === 1){
				$result = $qresult->row(); 
				return $result; 
			}
		}

		public function getUserById($userid){
			$this->db->select('*');
			$this->db->from('tb_admin');
			$this->db->where('userid',$userid);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}
*/

	}
?>