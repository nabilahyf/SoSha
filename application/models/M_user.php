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
    
	function registrasi_member($data){		
		$checkinsert = false;
		
		try{			
			$this->db->insert('user',$data);	 
			$checkinsert = true;
		}catch (Exception $ex) {			
			$checkinsert = false;
		}
		
		return $checkinsert; 		
    }
}