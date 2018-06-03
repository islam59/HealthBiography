<?php
	class Register_Model extends CI_Model{


		public function RegisterDoctorCheck($data){
			$this->db->select('*');
			$this->db->from('tb_doctor');
			$this->db->where('username',$data['username']);
			$qresult = $this->db->get(); 

			$has  = $qresult->num_rows(); 

			if($has === 1){
				$result = $qresult->row(); 
				return $result; 
			}
		}
		public function RegisterDoctorSave($data){
			$this->db->insert('tb_doctor', $data);
		}

		public function RegisterUserCheck($data){
			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->where('username',$data['username']);
			$qresult = $this->db->get(); 

			$has  = $qresult->num_rows(); 

			if($has === 1){
				$result = $qresult->row(); 
				return $result; 
			}
		}
		public function RegisterUserSave($data){
			$this->db->insert('tb_user', $data);
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