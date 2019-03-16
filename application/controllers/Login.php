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
	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data['login'] = $this->database_model->login($username,$password);
		if (count($data['login']) == 1) {
			$user = array();
			foreach ($data['login'] as $data_user) {
				$user[] = $data_user;
			}
			$this->session->set_userdata('username',$username);
			$this->session->set_userdata('nama',$user[0]['nama']);
			$this->session->set_userdata('kode_user',$user[0]['kode_user']);
			redirect('Index');
		}else{
			echo "Username atau password salah";
		}
	}
}

 ?>