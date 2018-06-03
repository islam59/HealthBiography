<?php
	class Admin_Model extends CI_Model{

		public function checkUser($data){
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

		public function userLoginON($data){
			$this->db->set('login', '1');
			$this->db->where('userid', $data);
			$this->db->update('tb_admin');
		}

		public function userLoginOFF($data){
			$this->db->set('login', '0');
			$this->db->where('userid', $data);
			$this->db->update('tb_admin');
		}


	}
?>