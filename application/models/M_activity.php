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

	function read_kegiatan($id){	
		$result = $this->db->where('kegiatan_id', $id)->limit(1)->get('kegiatan');
		return $result->row();		
	}
	
	function update_data($id,$data){
		$checkupdate = false;
		
		try{
			$this->db->where('kegiatan_id',$id);
			$this->db->update('kegiatan',$data);
			$checkupdate = true;
		}catch (Exception $ex) {
			
			$checkupdate = false;
		}
		
		return $checkupdate; 
		
	}
}