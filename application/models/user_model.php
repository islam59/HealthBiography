<?php
	class User_Model extends CI_Model{

		public function checkUser($data){
			$this->db->select('*');
			$this->db->from('tb_user');
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
			$this->db->from('tb_user');
			$this->db->where('userid',$userid);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}

		public function userLoginON($data){
			$this->db->set('login', '1');
			$this->db->where('userid', $data);
			$this->db->update('tb_user');
		}

		public function userLoginOFF($data){
			$this->db->set('login', '0');
			$this->db->where('userid', $data);
			$this->db->update('tb_user');
		}

		public function patientList($data){
			$this->db->select('*');
			$this->db->from('tb_patient');
			$this->db->where('doctorid',$data['userid']);
			$qresult = $this->db->get(); 
			$result  = $qresult->result(); 
			return $result; 
		}

		public function UserList(){
			$this->db->select('*');
			$this->db->from('tb_user');
			$qresult = $this->db->get(); 
			$result  = $qresult->result(); 
			return $result; 
		}
		public function RemoveUser($id){
			$this->db->where('userid',$id);
			$this->db->delete('tb_user'); 
		}
		public function UserListSearch($data){
			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->like('username', $data['searchkey']); 
			$this->db->or_like('firstname', $data['searchkey']);
			$this->db->or_like('lastname', $data['searchkey']);
			$this->db->or_like('address', $data['searchkey']);
			$qresult = $this->db->get();
			$result = $qresult->result();
			return $result; 
		}

		public function AccessOff($id){
			$this->db->set('access','0'); 
			$this->db->where('userid',$id);
			$this->db->update('tb_user'); 
		}
		public function AccessOn($id){
			$this->db->set('access','1'); 
			$this->db->where('userid',$id);
			$this->db->update('tb_user'); 
		}
	}
?>