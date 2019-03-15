<?php 
/**
 * 
 */
class Index extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('database_model');
	}
	function index(){
		$data['judul'] = "Home";
		$this->load->view('parts/header');
		$this->load->view('parts/menu');
		$this->load->view('v_index', $data);
		$this->load->view('parts/footer');
	}
}

 ?>