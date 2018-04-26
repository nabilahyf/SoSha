<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_user'); 
	}

	public function index()
	{
		$this->load->view('index');
	}
	
	function regist_volunteer(){	
		$length 						= strlen($_FILES['gambar']['name']);
		$config['remove_space'] 		= TRUE;
		$file_name						= time()."_".$_FILES['gambar']['name'];
		$config['file_name']			= $file_name;
		$config['upload_path']          = './profile/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg'; 
		$config['max_size']             = 2048;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 1024;
 
		$this->load->library('upload', $config);

		// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		$this->upload->initialize($config);
 
		if (!$this->upload->do_upload('gambar')){	
			redirect('');	
		}else if(md5($this->input->post('password')) != md5($this->input->post('retype'))){
			redirect('');	
		}else{
			$data = array(            
				'foto' 		=> $file_name,     
				'email'		=> $this->input->post('email'),  
				'password'	=> md5($this->input->post('password')),  
				'full_name'	=> $this->input->post('fullname'),  
				'alamat'	=> $this->input->post('alamat'), 
				'no_tlp'	=> $this->input->post('tlp'),  
				'jenkel'	=> $this->input->post('gender'),   
				'birthday'	=> $this->input->post('ttl')
			);    

			$result = $this->M_user->registrasi_volunteer($data);
		
			$data = NULL;
			if($result){	
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				
				$checkEmail = $this->M_user->read_data($email,$password);	
			
				if($checkEmail==NULL){			
					redirect('');			
				}else{
					$newdata = array(
						'user_id' 		=> $checkEmail->user_id,
						'foto'			=> $checkEmail->foto,	
						'email' 		=> $checkEmail->email,
						'full_name'		=> $checkEmail->full_name,
						'alamat'		=> $checkEmail->alamat,
						'no_tlp'		=> $checkEmail->no_tlp,
						'jenkel'		=> $checkEmail->jenkel,
						'birthday'		=> $checkEmail->birthday
		
					  );
					//set seassion
					$this->session->set_userdata($newdata);
					redirect('Activity');
				}		
			}else{			
				redirect('');	
			}
		}
	}
	
	function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$checkEmail = $this->M_user->read_data($email,$password);	
	
		if($checkEmail==NULL){			
			redirect('');			
		}else{
			$newdata = array(
				'user_id' 		=> $checkEmail->user_id,
				'foto'			=> $checkEmail->foto,	
				'email' 		=> $checkEmail->email,
				'full_name'		=> $checkEmail->full_name,
				'alamat'		=> $checkEmail->alamat,
				'no_tlp'		=> $checkEmail->no_tlp,
				'jenkel'		=> $checkEmail->jenkel,
				'birthday'		=> $checkEmail->birthday

			  );
			//set seassion
			$this->session->set_userdata($newdata);
			redirect('Activity');
		}	
	}	
	
		function logout(){
			$this->session->sess_destroy();
			redirect('');
		}


}
