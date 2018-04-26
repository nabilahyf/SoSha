<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_activity'); 
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
			$this->load->view('list_activity', $data);
		}
	}
	
	function profile()
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
			$this->load->view('profil', $data);
		}
	}

	function page_create()
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
		$config['remove_space'] 		= TRUE;
		$file_name						= time()."_".$_FILES['picture']['name'];
		$config['file_name']			= $file_name;
		$config['upload_path']          = './acara/';
		$config['allowed_types']        = 'gif|jpg|png'; 
		$config['max_size']             = 2048;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 1024;
 
		$this->load->library('upload', $config);

		// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		$this->upload->initialize($config);
 
		if (!$this->upload->do_upload('picture')){
			$this->load->view('index', $this->upload->display_errors('<p>', '</p>'));
		}else if(md5($this->input->post('password')) != md5($this->input->post('retype'))){
			redirect('Y');	
		}else{
			$data = array(        
				'user_id'		=> $this->session->user_id,
				'title'			=> $this->input->post('title'),
				'gambar' 		=> $file_name,     
				'description'	=> $this->input->post('description'),
				'tanggal'		=> $this->input->post('date'),
				'tempat'		=> $this->input->post('location'),
				'created_at'	=> date('Y-m-d H:i:s')
			);    

			$result = $this->M_activity->create($data);
		
			$data = NULL;
			if($result){			
				redirect('Activity');	
			}else{			
				redirect('Z');	
			}
		}

	}
    
}

?>