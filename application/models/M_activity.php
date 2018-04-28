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
 
	function jumlah_data_join($user_id){
		$this->db->where('user_id',$user_id);
		return $this->db->get('ikut_kegiatan')->num_rows();
	}

    function data($number,$offset,$user_id){
		$result = $this->db->where('user_id',$user_id)->get('ikut_kegiatan');
		
		if ($result->num_rows()) {
			$this->db->select('kegiatan.*, user.full_name');
			$this->db->where('slot >', '0');
			$this->db->where('kegiatan_id != (SELECT kegiatan_id FROM ikut_kegiatan WHERE user_id ='.$user_id.')');
			$this->db->join('user', 'kegiatan.user_id = user.user_id');
			$this->db->order_by("kegiatan_id", "desc");
			return $query = $this->db->get('kegiatan',$number,$offset)->result();
		} else {
			$this->db->select('kegiatan.*, user.full_name');
			$this->db->where('slot >', '0');
			$this->db->join('user', 'kegiatan.user_id = user.user_id');
			$this->db->order_by("kegiatan_id", "desc");
			return $query = $this->db->get('kegiatan',$number,$offset)->result();
		}
		
	}

    function data_mine($number,$offset,$user_id){
		$this->db->select('*');
		$this->db->where('kegiatan.user_id',$user_id);
		$this->db->join('user', 'kegiatan.user_id = user.user_id');
		$this->db->order_by("kegiatan_id", "desc");
		return $query = $this->db->get('kegiatan',$number,$offset)->result();
	}

    function data_join($number,$offset,$user_id){
		$this->db->select('kegiatan.*, user.full_name, ikut_kegiatan.ikut_id');
		$this->db->where('ikut_kegiatan.user_id',$user_id);
		$this->db->join('ikut_kegiatan', 'kegiatan.kegiatan_id = ikut_kegiatan.kegiatan_id');
		$this->db->join('user', 'kegiatan.user_id = user.user_id');
		$this->db->order_by("ikut_id", "desc");
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

	function delete_data($id){
		$checkupdate = false;
		
		try{
			$this->db->where('kegiatan_id',$id);
			$this->db->delete('kegiatan');
			$checkupdate = true;
		}catch (Exception $ex) {			
			$checkupdate = false;
		}
		
		return $checkupdate; 
	}

	function delete_join($id){
		$checkupdate = false;
		
		try{
			$this->db->where('ikut_id',$id);
			$this->db->delete('ikut_kegiatan');
			$checkupdate = true;
		}catch (Exception $ex) {			
			$checkupdate = false;
		}
		
		return $checkupdate; 
	}

	function all_kegiatan(){
		$result = $this->db->get('kegiatan')->result();
		return $result;
	}

	function update_kuota($id){
		$checkupdate = false;
		
		try{
			$this->db->set('slot', 'slot-1', FALSE);;
			$this->db->where('kegiatan_id', $id);
			$this->db->update('kegiatan');
			$checkupdate = true;
		}catch (Exception $ex) {			
			$checkupdate = false;
		}
		
		return $checkupdate; 

	}

	function return_kuota($id){
		$checkupdate = false;
		
		try{
			$this->db->set('slot', 'slot+1', FALSE);;
			$this->db->where('kegiatan_id', $id);
			$this->db->update('kegiatan');
			$checkupdate = true;
		}catch (Exception $ex) {			
			$checkupdate = false;
		}
		
		return $checkupdate; 

	}

	function update_viewed(){
		$checkupdate = false;
		
		try{
			$this->db->query('UPDATE ikut_kegiatan SET view = 1');
			$checkupdate = true;
		}catch (Exception $ex) {			
			$checkupdate = false;
		}
		
		return $checkupdate; 
	}
    
	function join($data){		
		$checkinsert = false;
		
		try{			
			$this->db->insert('ikut_kegiatan',$data);	 
			$checkinsert = true;
		}catch (Exception $ex) {			
			$checkinsert = false;
		}
		
		return $checkinsert; 		
    }
 

	function status_join($user_id){
		$result = $this->db->query('SELECT * FROM ikut_kegiatan WHERE view = 0 AND user_id = '.$user_id);
		return $result->row();		
	}
}