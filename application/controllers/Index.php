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
	    $data['new'] = "
	    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnModalBuatRencanaKerja'><i class='mdi mdi-plus-circle'></i> Buat Rencana Kerja</button>
	    ";
		$data['judul'] = "Dashboard";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('v_index', $data);
		$this->load->view('parts/footer', $data);
	}
}

 ?>