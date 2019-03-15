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
		$data['judul'] = "Home";
		$this->load->view('parts/header');
		$this->load->view('parts/menu');
		$this->load->view('v_index', $data);
		$this->load->view('parts/footer');
	}
	function sop(){
		$data['judul'] = "SOP";
		$data['pelaksana'] = $this->database_model->get('tb_pelaksana');
		$this->load->view('parts/header');
		$this->load->view('parts/menu');
		$this->load->view('sop_view', $data);
		$this->load->view('parts/footer');
	}
	function get_kode_project(){
		$tahun = date('Y');
		switch (date('m')){
			case '01': 
				$bulan = "I";
				break;
			case '02':
				$bulan = "II";
				break;
			case '03':
				$bulan = "III";
				break;
			case '04':
				$bulan = "IV";
				break;
			case '05':
				$bulan = "V";
				break;
			case '06':
				$bulan = "VI";
				break;
			case '07':
				$bulan = "VII";
				break;
			case '08':
				$bulan = "VIII";
				break;
			case '09':
				$bulan = "IX";
				break;
			case '10':
				$bulan = "X";
				break;
			case '11':
				$bulan = "XI";
				break;
			case '12':
				$bulan = "XII";
				break;
		}	
		$data['kode'] = $this->database_model->get_max_id_project();
		$max = array();
			foreach ($data['kode'] as $u) {
				$max[] = $u;
			};
	
		$kode = ".".sprintf("%03s", $max[0]['kode'])."/AMANK2K3/CIANJUR/".$bulan."/".$tahun;
		echo $kode;
	}
	function insert_sop(){
		$kode_project = $this->input->post('kode_project');
		$kode_project = date('Y-m-d H:i:s');
		$kode_user = $this->session->userdata('kode_user');
		$tegangan = $this->input->post('tegangan');
		$material = $this->input->post('material');
		$jml_tenaga_kerja = $this->input->post('jml_tenaga_kerja');
		$peralatan_kerja = $this->input->post('peralatan_kerja');
		$kode_project = $this->input->post('kode_project');

	}
	function insert_temp_uraian_pekerjaan(){
		$uraian_perkerjaan = $this->input->post('uraian_perkerjaan');
		$jam = $this->input->post('jam');
		$keterangan = $this->input->post('keterangan');
		$kode_project = $this->input->post('kode_project');
		$data_uraian = array(
			'kode_uraian_pekerjaan' => '',
			'uraian_perkerjaan' => $uraian_perkerjaan,
			'jam' => $jam,
			'keterangan' => $keterangan,
			'kode_project' => $kode_project
		);
		if (is_null($kode_project)) {
			echo "Kode project masih kosong,reload kembali";
		}else if(is_null($uraian_perkerjaan) || is_null($jam)){
			echo "Uraian pekerjaan dan waktu tidak boleh kosong";
		}else{
			$this->database_model->insert('tb_temp_uraian_pekerjaan',$data_uraian);
		}
	}
	function insert_temp_pelaksana(){
		
	}
}

 ?>