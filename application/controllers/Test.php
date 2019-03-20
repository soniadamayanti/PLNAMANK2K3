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

		$a = array(
			'lokasi' => $this->session->userdata('lokasi')
		);
		$where_atasan = array(
			'tb_users.lokasi' => $this->session->userdata('lokasi'),
			'tb_divisi.kode_divisi' => 3
		);
		$where_pengawas_k3 = array(
			'tb_users.lokasi' => $this->session->userdata('lokasi'),
			'tb_divisi.kode_divisi' => 2
		);
		$data['atasan'] = $this->database_model->get_atasan($where_atasan);
		$data['pengawas_k3'] = $this->database_model->get_atasan($where_pengawas_k3);
	    $data['perlindungan'] =$this->database_model->get_where('tb_peralatan_kerja',$wpk1);
	    $data['keselamatan'] =$this->database_model->get_where('tb_peralatan_kerja',$wpk2);
		$data['klasifikasi_kerja'] = $this->database_model->get('tb_klasifikasi_kerja');
		$data['prosedur_kerja'] = $this->database_model->get('tb_prosedur_kerja');
		$data['lampiran_izin_kerja'] = $this->database_model->get('tb_lampiran_izin_kerja');
		$data['jenis_pekerjaan'] = $this->database_model->get('tb_jenis_pekerjaan');
		$data['pelaksana'] = $this->database_model->get('tb_pelaksana');
		$data['sld'] = $this->database_model->get_where('tb_sld',$a);
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
	function insert_temp_pelaksana(){
		$kode_project = $this->input->post('kode_project');
		$kode_pelaksana = $this->input->post('kode_pelaksana');
		$data = array(
			'kode_pelaksana' => $kode_pelaksana,
			'kode_project' => $kode_project
		);
		$a['temp_pelaksana'] = $this->database_model->get_det_pelaksana($kode_project)->result();
		if (count($a['temp_pelaksana']) > 0 ) {
			$this->database_model->insert('tb_det_pelaksana',$data);
		}else{
			$this->database_model->insert('tb_temp_pelaksana',$data);	
		}
	}
	function insert_temp_uraian_pekerjaan(){
		$uraian_pekerjaan = $this->input->post('uraian_pekerjaan');
		$jam = $this->input->post('jam');
		$keterangan = $this->input->post('keterangan');
		$kode_project = $this->input->post('kode_project');
		$data_uraian = array(
			'uraian_pekerjaan' => $uraian_pekerjaan,
			'jam' => $jam,
			'keterangan' => $keterangan,
			'kode_project' => $kode_project
		);
		$data['temp_pelaksana'] = $this->database_model->get_det_uraian($kode_project)->result();
		if (is_null($kode_project)) {
			echo "Something wrong : Project code is null (ER001)";
		}else if (is_null($uraian_pekerjaan) || is_null($jam)) {
			echo "Something wrong : Field must be not null (ER002)";
		}else if (count($data['temp_pelaksana']) > 0){
			$this->database_model->insert('tb_det_uraian_pekerjaan',$data_uraian);
		}else{
			$this->database_model->insert('tb_temp_uraian_pekerjaan',$data_uraian);	
		}	
	}
	function insert_temp_pekerja(){
		$kode_project = $this->input->post('kode_project');
		$kode_pekerja = $this->input->post('kode_pekerja');
		$value = array(
			'kode_project' => $kode_project,
			'kode_pekerja' => $kode_pekerja
		);
		$where = array(
			'kode_project' => $kode_project
		);
		$cek = $this->database_model->get_where('tb_pekerja',$where);
		if ($cek > 0) {
			$this->database_model->insert('tb_pekerja',$value);
		}else{
			$this->database_model->insert('tb_temp_pekerja',$value);
		}
	}
	function test(){
		$b['cek_approval'] = $this->database_model->cek_approval('K.001/AMANK2K3/CIANJUR/III/2019',1);
          	if (count($b['cek_approval']) > 0) {
          		$button = anchor('Download/printPDF/','<i class="ti-printer"></i> Enabled','class="btn btn-info"');
          	}else{
          		$button = anchor('Download/printPDF/','<i class="ti-printer"></i> Disabled','class="btn btn-info" disabled="disabled"');
          	}
          	echo $button;
	}

}

 ?>