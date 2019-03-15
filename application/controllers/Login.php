<?php 
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('database_model');
	}
	function index(){
		$data['judul'] = "Login AMANK2K3";
		$this->load->view('v_login', $data);
	}

}

 ?>