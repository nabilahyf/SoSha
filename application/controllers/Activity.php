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
			$this->load->database();
			$jumlah_data = $this->M_activity->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'Activity/index/'; //memanggil class dan fungsi untuk menjalankan pagination
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 5;
			if($this->uri->segment(3)){
				$from = $this->uri->segment(3);
			}else{ 
				$from = 0;
			}

			//Tambahan untuk styling      
			$choice = $config["total_rows"] / $config["per_page"];
			$config["num_links"] = floor($choice);
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';
		
			$this->pagination->initialize($config);		
			$data['kegiatan'] = $this->M_activity->data($config['per_page'],$from);
			
			$this->load->view('list_activity',$data);
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
		$config['allowed_types']        = 'gif|jpg|png|jpeg'; 
		$config['max_size']             = 2048;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 1024;
 
		$this->load->library('upload', $config);

		// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		$this->upload->initialize($config);
 
		if (!$this->upload->do_upload('picture')){
			redirect('Activity/page_create');	
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
				redirect('Activity/page_create');	
			}
		}

	}

	function mine(){
		if($this->session->user_id==NULL){
			redirect('Welcome');	
		}else{						
			$this->load->database();
			$jumlah_data = $this->M_activity->jumlah_data_mine($this->session->user_id);
			$this->load->library('pagination');
			$config['base_url'] = base_url().'Activity/mine/index/'; //memanggil class dan fungsi untuk menjalankan pagination
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 5;
			if($this->uri->segment(3)){
				$from = $this->uri->segment(3);
			}else{ 
				$from = 0;
			}

			//Tambahan untuk styling      
			$choice = $config["total_rows"] / $config["per_page"];
			$config["num_links"] = floor($choice);
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';
		
			$this->pagination->initialize($config);		
			$data['kegiatan'] = $this->M_activity->data_mine($config['per_page'],$from,$this->session->user_id);
			
			$this->load->view('my_activity',$data);
		}		
	}
    
}

?>