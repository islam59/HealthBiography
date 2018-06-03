<?php
	class Doctor_Model extends CI_Model{

		public function checkUser($data){
			$this->db->select('*');
			$this->db->from('tb_doctor');
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
			$this->db->from('tb_doctor');
			$this->db->where('userid',$userid);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}

		public function userLoginON($data){
			$this->db->set('login', '1');
			$this->db->where('userid', $data);
			$this->db->update('tb_doctor');
		}

		public function userLoginOFF($data){
			$this->db->set('login', '0');
			$this->db->where('userid', $data);
			$this->db->update('tb_doctor');
		}

		public function DoctorList($data){
			$this->db->select('*');
			$this->db->from('tb_doctor');
			$qresult = $this->db->get();
			$result = $qresult->result();
			return $result; 
		}

		public function DoctorListSearch($data){
			$this->db->select('*');
			$this->db->from('tb_doctor');
			$this->db->like('username', $data['searchkey']); 
			$this->db->or_like('firstname', $data['searchkey']);
			$this->db->or_like('lastname', $data['searchkey']);
			$this->db->or_like('department', $data['searchkey']);
			$this->db->or_like('education', $data['searchkey']);
			$this->db->or_like('address', $data['searchkey']);
			$this->db->or_like('work', $data['searchkey']);
			$this->db->or_like('gender',$data['searchkey']); 
			$this->db->or_like('consultingphone',$data['searchkey']);
			$this->db->or_like('country',$data['searchkey']);
			$qresult = $this->db->get();
			$result = $qresult->result();
			return $result; 
		}

		public function RemoveDoctor($userid){
			$this->db->where('userid', $userid);
			$this->db->delete('tb_doctor'); 
		}

		public function AccessOnDoctor($data){
			$this->db->set('access', '1');
			$this->db->where('userid', $data);
			$this->db->update('tb_doctor');
		}

		public function AccessOffDoctor($data){
			$this->db->set('access', '0');
			$this->db->where('userid', $data);
			$this->db->update('tb_doctor');
		}

	}
?>