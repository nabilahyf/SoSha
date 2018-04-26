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
 
	function jumlah_data(){
		return $this->db->get('kegiatan')->num_rows();
	}
 
	function jumlah_data_mine($user_id){
		$this->db->where('user_id',$user_id);
		return $this->db->get('kegiatan')->num_rows();
	}

    function data($number,$offset){
		$this->db->select('*');
		$this->db->join('user', 'kegiatan.user_id = user.user_id');
		$this->db->order_by("kegiatan_id", "desc");
		return $query = $this->db->get('kegiatan',$number,$offset)->result();
	}

    function data_mine($number,$offset,$user_id){
		$this->db->select('*');
		$this->db->where('kegiatan.user_id',$user_id);
		$this->db->join('user', 'kegiatan.user_id = user.user_id');
		$this->db->order_by("kegiatan_id", "desc");
		return $query = $this->db->get('kegiatan',$number,$offset)->result();
	}
}