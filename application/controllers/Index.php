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

		$data['rencana_pending']=$this->db->query('SELECT kode_project FROM tb_project WHERE tgl="'.$harikemarin.'" AND tgl_bulan="'.$bulankemarin.'" AND tgl_tahun="'.$tahun.'"')->num_rows();
		$data['data_project'] = $this->database_model->get('tb_project');
		$data['jml_project'] = count($data['data_project']);
		$where = array(
			'kode_user' => $this->session->userdata('kode_user')
		);
		$data['project'] = $this->database_model->get_where('tb_project',$where);
		$data['history_project'] = $this->database_model->query('');
		$pending = 
		$data['judul'] = "Dashboard";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', compact('data','headerbulan'));
		$this->load->view('v_index',compact('data',''));
		$this->load->view('parts/footer', $data);
	}
}

 ?>