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
		$this->load->view('index_view');
	}
	function sop(){
		$this->load->view('sop_view');
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