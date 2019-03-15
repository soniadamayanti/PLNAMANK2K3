<?php 
/**
 * 
 */
class Test extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('database_model');
	}
	function index(){
		$data['judul'] = "Test UI";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/rencanakerja/v_approval', $data);
		$this->load->view('parts/footer', $data);
	}

}

 ?>