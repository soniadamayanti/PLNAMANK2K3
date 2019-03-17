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
		$data_login = array(
			'username' => $username,
			'password' => $password
		);
		$data['login'] = $this->database_model->login($data_login);
		if (count($data['login']) == 1) {
			$user = array();
			foreach ($data['login'] as $data_user) {
				$user[] = $data_user;
			}
			$this->session->set_userdata('username',$username);
			$this->session->set_userdata('nama_user',$user[0]['nama_user']);
			$this->session->set_userdata('kode_user',$user[0]['kode_user']);
			$this->session->set_userdata('no_telp_user',$user[0]['no_telp_user']);
			$this->session->set_userdata('ttd',$user[0]['ttd']);
			$this->session->set_userdata('kode_divisi',$user[0]['kode_divisi']);
			$this->session->set_userdata('nama_divisi',$user[0]['nama_divisi']);
			$this->session->set_userdata('parent_divisi',$user[0]['parent_divisi']);
			$this->session->set_userdata('child_divisi',$user[0]['child_divisi']);
			$this->session->set_userdata('lokasi',$user[0]['lokasi']);
			echo 1;
		}else{
			echo "Username atau password salah";
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}

 ?>