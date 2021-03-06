<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_activity'); 
		$this->load->model('M_user'); 
	}

	public function index()
	{
		if($this->session->user_id==NULL){
			redirect('Welcome');	
		}else{			
			$this->load->database();
			$statusJoin = $this->M_activity->status_join($this->session->user_id);
			if($statusJoin ==  NULL){
				$newdata = array(
					'status_join' 		=> 0
				);

				$this->session->set_userdata($newdata);
			}else{
				$newdata = array(
					'status_join' 		=> 1
				);

				$this->session->set_userdata($newdata);
			}


			$jumlah_data = $this->M_activity->jumlah_data($this->session->user_id);
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
			$data['kegiatan'] = $this->M_activity->data($config['per_page'],$from,$this->session->user_id);
			
			$this->load->view('list_activity',$data);
		}
	}
	
	function profile()
	{
		if($this->session->user_id==NULL){
			redirect('Welcome');	
		}else{					
			$this->load->database();
			$statusJoin = $this->M_activity->status_join($this->session->user_id);
			if($statusJoin ==  NULL){
				$newdata = array(
					'status_join' 		=> 0
				);

				$this->session->set_userdata($newdata);
			}else{
				$newdata = array(
					'status_join' 		=> 1
				);

				$this->session->set_userdata($newdata);
			}

			$cek = $this->M_user->read_data_update($this->session->email);	
								
			$data = array(
				'user_id' 		=> $cek->user_id,
				'foto'			=> $cek->foto,	
				'email' 		=> $cek->email,
				'full_name'		=> $cek->full_name,
				'alamat'		=> $cek->alamat,
				'no_tlp'		=> $cek->no_tlp,
				'jenkel'		=> $cek->jenkel,
				'birthday'		=> $cek->birthday
			);
			$this->session->set_userdata($data);
			$this->load->view('profil', $data);
		}
	}

	function update_profil(){
		$user_id						= $this->input->post('id');
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
			$data = array(             
				'email'		=> $this->input->post('email'),  
				'full_name'	=> $this->input->post('fullname'),  
				'alamat'	=> $this->input->post('alamat'), 
				'no_tlp'	=> $this->input->post('tlp'),  
				'jenkel'	=> $this->input->post('gender'),   
				'birthday'	=> $this->input->post('ttl')
			); 
			$updated = $this->M_activity->update_profil($user_id, $data);
			if($updated){
				redirect('Activity/profile');
			}else{
				redirect('Activity');				
			}
		}else{
			unlink('./profile/'.$this->input->post('old_profil'));
			$data = array(            
				'foto' 		=> $file_name,     
				'email'		=> $this->input->post('email'),  
				'full_name'	=> $this->input->post('fullname'),  
				'alamat'	=> $this->input->post('alamat'), 
				'no_tlp'	=> $this->input->post('tlp'),  
				'jenkel'	=> $this->input->post('gender'),   
				'birthday'	=> $this->input->post('ttl')
			);    
			$updated = $this->M_activity->update_profil($user_id, $data);
			if($updated){
				redirect('Activity/profile');
			}else{
				redirect('Activity');				
			}
		}

	}

	function update_password(){
		if($this->session->user_id==NULL){
			redirect('Welcome');	
		}					
			$this->load->database();

				$user_id = $this->input->post('id');
				$data = array(            
				'password' 		=> md5($this->input->post('new'))
				);

			$cek = $this->M_user->read_data_update($this->session->email);	

			if(md5($this->input->post('old')) != $cek->password){
				redirect('Activity/profile');
			}else if(md5($this->input->post('retype')) != md5($this->input->post('new'))){
				redirect('Activity/profile');
			}else{
				$updated = $this->M_activity->update_profil($user_id, $data);
				redirect('Welcome/logout');		
			}
	}

	function detail($id)
	{
		if($this->session->user_id==NULL){
			redirect('Welcome');	
		}else{					
			$this->load->database();
			$detail = $this->M_activity->detail($id);
								
			$data = array(
				'judul' 		=> $detail->title,
				'penyelenggara'	=> $detail->full_name,
				'gambar'		=> $detail->gambar,	
				'deskripsi'		=> $detail->description,
				'tanggal'		=> $detail->tanggal,
				'lokasi'		=> $detail->tempat,
				'kuota'			=> $detail->slot,
				'created'		=> $detail->created_at
			);
			$this->load->view('detail', $data);
		}
	}
	
	function page_create()
	{
		if($this->session->user_id==NULL){
			redirect('Welcome');	
		}else{		
			$this->load->database();
			$statusJoin = $this->M_activity->status_join($this->session->user_id);
			if($statusJoin ==  NULL){
				$newdata = array(
					'status_join' 		=> 0
				);

				$this->session->set_userdata($newdata);
			}else{
				$newdata = array(
					'status_join' 		=> 1
				);

				$this->session->set_userdata($newdata);
			}


			
			$result = $this->M_activity->all_kegiatan();
			$data['lokasi'] = $result;
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
				'slot'			=>$this->input->post('slot'),
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
			$statusJoin = $this->M_activity->status_join($this->session->user_id);
			if($statusJoin ==  NULL){
				$newdata = array(
					'status_join' 		=> 0
				);

				$this->session->set_userdata($newdata);
			}else{
				$newdata = array(
					'status_join' 		=> 1
				);

				$this->session->set_userdata($newdata);
			}


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

	function page_update($id)
	{
		if($this->session->user_id==NULL){
			redirect('Welcome');	
		}else{
			$this->load->database();
			$statusJoin = $this->M_activity->status_join($this->session->user_id);
			if($statusJoin ==  NULL){
				$newdata = array(
					'status_join' 		=> 0
				);

				$this->session->set_userdata($newdata);
			}else{
				$newdata = array(
					'status_join' 		=> 1
				);

				$this->session->set_userdata($newdata);
			}


			
			
			$checkKegiatan = $this->M_activity->read_kegiatan($id);	
			$kegiatan = array(
				'kegiatan_id'	=> $checkKegiatan->kegiatan_id,
				'user_id'		=> $checkKegiatan->user_id,
				'title'			=> $checkKegiatan->title,
				'gambar'		=> $checkKegiatan->gambar,
				'description'	=> $checkKegiatan->description,
				'tanggal'		=> $checkKegiatan->tanggal,
				'tempat'		=> $checkKegiatan->tempat,
				'slot'			=> $checkKegiatan->slot,
				'created_at'	=> $checkKegiatan->created_at,
				'updated_at'	=> $checkKegiatan->updated_at
			);
		
			if($kegiatan!=NULL){			
				$this->load->view('update_activity',$kegiatan);			
			}else{
				redirect('Activity');
			}	
		}
	}


	function update(){
		$config['remove_space'] 		= TRUE;
		$file_name						= time()."_".$_FILES['picture']['name'];
		$config['file_name']			= $file_name;
		$config['upload_path']          = './acara/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']             = 2048;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 1024;

		$this->load->library('upload', $config);

			$id = $this->input->post('kegiatan_id');

		if (!$this->upload->do_upload('picture')){
			$id = $this->input->post('kegiatan_id');
			$data = array(
				'title'=>$this->input->post('title'),
				'description'=>$this->input->post('description'),
				'tanggal'=>$this->input->post('date'),
				'tempat'=>$this->input->post('location'),
				'slot'=>$this->input->post('slot'),
				'updated_at'=>date('Y-m-d H:i:s')
			);

			$result = $this->M_activity->update_data($id,$data);

			$data = NULL;
			if($result){
				redirect('Activity/mine');
			}else{
				?>
					<script>alert('proses bermasalah');</script>
				<?php
			}
		}else{
			$old_gambar = $this->input->post('old_gambar');
			unlink('./acara/'.$old_gambar);

			$data = array(
				'title'=>$this->input->post('title'),
				'gambar'=>$file_name,
				'description'=>$this->input->post('description'),
				'tanggal'=>$this->input->post('date'),
				'tempat'=>$this->input->post('location'),
				'slot'=>$this->input->post('slot'),
				'updated_at'=>date('Y-m-d H:i:s')
			);
			$result = $this->M_activity->update_data($id,$data);

			$data = NULL;
			if($result){
				redirect('Activity/mine');
			}else{
				?>
					<script>alert('proses bermasalah');</script>
				<?php
			}
		}
	}

	function delete($id){
		if($this->session->email==NULL){
			redirect('Welcome');
		}

		$checkDetil = $this->M_activity->read_kegiatan($id);
		$gambar = $checkDetil->gambar;

		unlink('./acara/'.$gambar);

		$result = $this->M_activity->delete_data($id);

		if(!$result){
			?>
				<script>alert('proses bermasalah');</script>
			<?php
		}else{
			redirect('Activity');
		}
	}

	function join($id){

		if($this->session->user_id==NULL){
			redirect('Welcome');	
		}else{		
			
			$this->load->database();
			$UpdateKuota = $this->M_activity->update_kuota($id);

			$data = array(        
				'kegiatan_id'	=> $id,
				'user_id'		=> $this->session->user_id,
				'view'	 		=> '0',     
				'joined_at'		=> date('Y-m-d H:i:s')
			);    

			$result = $this->M_activity->join($data);

			$newdata = array(
				'status_join' 		=> 0
			);
			$this->session->set_userdata($newdata);
		
			$data = NULL;
			if($result){			
				redirect('Activity');	
			}else{			
				redirect('Activity');	
			}
		}
	}

	function page_join(){

		if($this->session->user_id==NULL){
			redirect('Welcome');	
		}else{		
			$this->load->database();
			
			$UpdateViewed = $this->M_activity->update_viewed();

			$statusJoin = $this->M_activity->status_join($this->session->user_id);
			if($statusJoin ==  NULL){
				$newdata = array(
					'status_join' 		=> 0
				);

				$this->session->set_userdata($newdata);
			}else{
				$newdata = array(
					'status_join' 		=> 1
				);

				$this->session->set_userdata($newdata);
			}





			$jumlah_data = $this->M_activity->jumlah_data_join($this->session->user_id);
			$this->load->library('pagination');
			$config['base_url'] = base_url().'Activity/join/index/'; //memanggil class dan fungsi untuk menjalankan pagination
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
			$data['kegiatan'] = $this->M_activity->data_join($config['per_page'],$from,$this->session->user_id);
			
			$this->load->view('joined',$data);
			
		}

	}

	function delete_join(){
		if($this->session->email==NULL){
			redirect('Welcome');
		}

		$result = $this->M_activity->delete_join($this->uri->segment(3));

		$result = $this->M_activity->return_kuota($this->uri->segment(4));

		if(!$result){
			?>
				<script>alert('proses bermasalah');</script>
			<?php
		}else{
			redirect('Activity/page_join');
		}
	}
    
}

?>