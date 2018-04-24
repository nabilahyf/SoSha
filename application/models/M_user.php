<?php 

class M_user extends CI_Model{
    
	function registrasi_volunteer($data){		
		$checkinsert = false;
		
		try{			
			$this->db->insert('user',$data);	 
			$checkinsert = true;
		}catch (Exception $ex) {			
			$checkinsert = false;
		}
		
		return $checkinsert; 		
    }

	function read_data($email,$password){	
		$result = $this->db->where('UPPER(email)', strtoupper($email))->where('password',md5($password))->limit(1)->get('user');
		return $result->row();		
	}
}