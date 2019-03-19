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

		$wk = array(
			'uniqid' => $this->uri->segment(3)
		);
		$data['kode_project'] = $this->database_model->get_where('tb_project',$wk);
		$data_wk = array();
		foreach ($data['kode_project'] as $data) {
			$data_wk[] = $data;
		}
		$data['detail_project'] = $this->database_model->detail_project($this->uri->segment(3));
	    $wpk1 = array(
	    	'type'=>'Perlindungan'
	    );
	    $wpk2 = array(
	    	'type'=>'Keselamatan'
	    );
	    $data['perlindungan'] =$this->database_model->get_where('tb_peralatan_kerja',$wpk1);
	    $data['keselamatan'] =$this->database_model->get_where('tb_peralatan_kerja',$wpk2);
		$data['klasifikasi_kerja'] = $this->database_model->get('tb_klasifikasi_kerja');
		$data['prosedur_kerja'] = $this->database_model->get('tb_prosedur_kerja');
		$data['lampiran_izin_kerja'] = $this->database_model->get('tb_lampiran_izin_kerja');
		$data['judul'] = "Test UI";
	    $data['new'] = "
	    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnModalBuatRencanaKerja'><i class='mdi mdi-plus-circle'></i> Buat Rencana Kerja</button>
	    ";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_form_rencana', $data);
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