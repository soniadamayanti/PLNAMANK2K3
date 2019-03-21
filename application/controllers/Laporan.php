<?php 
/**
 * 
 */
class Laporan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('index_model');
		$this->load->model('database_model');
	}
	function index(){
	    $data['new'] = "
	    ";
		$data['judul'] = "";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', compact('data','headerbulan'));
		$this->load->view('pages/v_lap_rekap_bulanan',compact('data','lokasi'));
		$this->load->view('parts/footer', $data);
	}
	function pencapaian(){
	    $data['new'] = "
	    ";
		$data['judul'] = "";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', compact('data','headerbulan'));
		$this->load->view('pages/v_lap_pencapaian',compact('data','lokasi'));
		$this->load->view('parts/footer', $data);
	}
}

 ?>