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
		$this->load->view('parts/header');
		$this->load->view('parts/menu');
		$this->load->view('pages/v_data_kerja');
		$this->load->view('parts/footer');
	}

	function sop_pemadaman(){
		$data['judul'] = "SOP Pemadaman";
		$this->load->view('parts/header');
		$this->load->view('parts/menu');
		$this->load->view('pages/v_form_sop');
		$this->load->view('parts/footer');
	}
	function slp(){
		$data['judul'] = "SLP Penyulang";
		$this->load->view('parts/header');
		$this->load->view('parts/menu');
		$this->load->view('pages/v_form_slp');
		$this->load->view('parts/footer');
	}
	function working_permit(){
		$data['judul'] = "Working Permit";
		$this->load->view('parts/header');
		$this->load->view('parts/menu');
		$this->load->view('pages/v_form_wp');
		$this->load->view('parts/footer');
	}
	function jsa(){
		$data['judul'] = "JSA";
		$this->load->view('parts/header');
		$this->load->view('parts/menu');
		$this->load->view('pages/v_form_jsa');
		$this->load->view('parts/footer');
	}
	function hirarc(){
		$data['judul'] = "HIRARC";
		$this->load->view('parts/header');
		$this->load->view('parts/menu');
		$this->load->view('pages/v_form_hirarc');
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
		$max = json_encode($data['kode']);
		$kode_max = $max[0]['kode'];
		echo $max[0]['kode'];
		// $kode = ".".sprintf("0%3",$kode_max)."/AMANK2K3/CIANJUR/".$bulan."/".$tahun;
		// echo $kode;
		// P.001/AMANK2K3/KOTA/III/2019
	}
	function getRomawi($bln){
		
   }
}

 ?>