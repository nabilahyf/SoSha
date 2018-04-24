<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {
	function __construct(){
		parent::__construct();		
		// $this->load->helper("file");
		// $this->load->model('M_user'); 
	}

	public function index()
	{
		if($this->session->user_id==NULL){
			redirect('Welcome');	
		}else{						
			$data = array(
				'user_id' 		=> $this->session->user_id,
				'foto'			=> $this->session->foto,	
				'email' 		=> $this->session->email,
				'full_name'		=> $this->session->full_name,
				'alamat'		=> $this->session->alamat,
				'no_tlp'		=> $this->session->no_tlp,
				'jenkel'		=> $this->session->jenkel,
				'birthday'		=> $this->session->birthday
			);
			$this->load->view('create_activity', $data);
		}
	}

	function create(){
		
	}
    
}

?>