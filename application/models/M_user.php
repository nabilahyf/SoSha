<?php 

class M_user extends CI_Model{
    
	function registrasi($data){		
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