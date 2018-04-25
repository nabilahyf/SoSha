<?php 

class M_activity extends CI_Model{
    
	function create($data){		
		$checkinsert = false;
		
		try{			
			$this->db->insert('kegiatan',$data);	 
			$checkinsert = true;
		}catch (Exception $ex) {			
			$checkinsert = false;
		}
		
		return $checkinsert; 		
    }
}