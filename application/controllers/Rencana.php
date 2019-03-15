<?php 
/**
 * 
 */
class Rencana extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('database_model');
	}
	// function index(){
	// 	$data['judul'] = "Data Rencana Kerja";
	// 	$this->load->view('parts/header', $data);
	// 	$this->load->view('parts/menu', $data);
	// 	$this->load->view('pages/v_data_kerja', $data);
	// 	$this->load->view('parts/footer', $data);
	// }

	function sop_pemadaman(){
		$data['pelaksana'] = $this->database_model->get('tb_pelaksana');
		$data['judul'] = "SOP Pemadaman";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_form_sop', $data);
		$this->load->view('parts/footer', $data);
	}
	function slp(){
		$data['judul'] = "SLP Penyulang";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_form_slp', $data);
		$this->load->view('parts/footer', $data);
	}
	function working_permit(){
		$data['judul'] = "Working Permit";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_form_wp', $data);
		$this->load->view('parts/footer', $data);
	}
	function jsa(){
		$data['judul'] = "JSA";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_form_jsa', $data);
		$this->load->view('parts/footer', $data);
	}
	function hirarc(){
		$data['judul'] = "HIRARC";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_form_hirarc', $data);
		$this->load->view('parts/footer', $data);
	}
	}
	function insert_temp_uraian_pekerjaan(){
		$uraian_pekerjaan = $this->input->post('uraian_pekerjaan');
		$kode_project = $this->input->post('kode_project');
		$jam = $this->input->post('jam');
		$keterangan = $this->input->post('keterangan');
		$data_uraian = array(
			'kode_uraian_pekerjaan' => '',
			'uraian_pekerjaan' => $uraian_pekerjaan,
			'jam' => $jam,
			'keterangan' => $keterangan,
			'kode_project' => $kode_project
		);
		$this->database_model->insert('tb_temp_uraian_pekerjaan',$data_uraian);
		echo 1;
	}
	function insert_temp_pelaksana(){
		$kode_project = $this->input->post('kode_project');
		$kode_pelaksana = $this->input->post('kode_pelaksana');
		$data = array(
			'kode_pelaksana' => $kode_pelaksana,
			'kode_project' => $kode_project
		);
		$this->database_model->insert('tb_temp_pelaksana',$data);
	}
}

 ?>