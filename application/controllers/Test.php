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
		$this->load->model('test_model');
	}
	function index(){
		$data['judul'] = "Test UI";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_approval', $data);
		$this->load->view('parts/footer', $data);
	}
	function get_atasan(){
		$where = array(
			'tb_users.lokasi' => 'Cianjur',
			'tb_divisi.parent_divisi' => 2
		);
		// $data['divisi'] = $this->database_model->get_where('tb_users',$where);
		$data['atasan'] = $this->test_model->get_atasan($where);
		$atasan = array();
		foreach ($data['atasan'] as $r) {
			$atasan[] = $r;
		}
		echo "<pre>";
		print_r($atasan);
		echo "</pre>";
	}

}

 ?>