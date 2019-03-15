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
		$data['judul'] = "Home";
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
}

 ?>