<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper("file");
		$this->load->model('M_user'); 
	}

	public function index()
	{
		$this->load->view('index');
	}
	

	function regist(){	
		$length 						= strlen($_FILES['gambar']['name']);
		$config['remove_space'] 		= TRUE;
		$file_name						= time()."_".$_FILES['gambar']['name'];
		$config['file_name']			= $file_name;
		$config['upload_path']          = './profile/';
		$config['allowed_types']        = 'gif|jpg|png'; 
		$config['max_size']             = 2048;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 1024;
 
		$this->load->library('upload', $config);

		// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		$this->upload->initialize($config);
 
		if (!$this->upload->do_upload('gambar')){
			$this->load->view('index', $this->upload->display_errors('<p>', '</p>'));
		}else if(md5($this->input->post('password')) != md5($this->input->post('retype'))){
			redirect('Y');	
		}else{
			$data = array(            
				'foto' 		=> $file_name,     
				'email'		=> $this->input->post('email'),  
				'password'	=> md5($this->input->post('password')),  
				'full_name'	=> $this->input->post('fullname'),  
				'alamat'	=> $this->input->post('alamat'), 
				'no_tlp'	=> $this->input->post('tlp'),  
				'jenkel'	=> $this->input->post('gender'),   
				'birthday'	=> $this->input->post('ttl'),
				'auth'		=> '1'
			);    

			$result = $this->M_user->registrasi($data);
		
			$data = NULL;
			if($result){			
				redirect('Welcome');	
			}else{			
				redirect('Z');	
			}
		}
	}
}
