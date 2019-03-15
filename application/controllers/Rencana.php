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
	function index(){
		$data['judul'] = "Data Rencana Kerja";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_data_kerja', $data);
		$this->load->view('parts/footer', $data);
	}

	function sop_pemadaman(){

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
		$kode_max = array();
		foreach ($data['kode'] as $kode_m) {
			$kode_max[] = $kode_m;
		}
		$kode = ".".sprintf("%03s",$kode_max[0]['kode'])."/AMANK2K3/CIANJUR/".$bulan."/".$tahun;
		echo $kode;
		// P.001/AMANK2K3/KOTA/III/2019
	}
	function getRomawi($bln){
		
   }
}

 ?>