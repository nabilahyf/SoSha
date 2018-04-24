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
		$this->load->view('create_activity');
	}
    
}

?>