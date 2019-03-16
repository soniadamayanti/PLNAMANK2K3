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
		$where = array(
			'uniqid' => $this->uri->segment(3)
		);
		$data['pelaksana'] = $this->database_model->get('tb_pelaksana');
		$data['jenis_pekerjaan'] = $this->database_model->get('tb_jenis_pekerjaan');
		$data['kode_project'] = $this->database_model->get_where('tb_project',$where);
		$data['judul'] = "SOP Pemadaman";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_form_sop', $data);
		$this->load->view('parts/footer', $data);
	}
	function slp(){
		$data['sld'] = $this->database_model->get('tb_sld');
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
	function history_approval(){
		$data['judul'] = "Approval";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_approval', $data);
		$this->load->view('parts/footer', $data);
	}
	function ditolak(){
		$data['judul'] = "Rencana Kerja DItolak";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_data_kerja_ditolak', $data);
		$this->load->view('parts/footer', $data);
	}
	function selesai(){
		$data['judul'] = "Rencana Kerja Selesai";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_data_kerja_selesai', $data);
		$this->load->view('parts/footer', $data);
	}
	function dibatalkan(){
		$data['judul'] = "Rencana Kerja Dibatalkan";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_data_kerja_dibatalkan', $data);
		$this->load->view('parts/footer', $data);
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
		$this->database_model->insert('tb_temp_uraian_pekerjaan',$data_uraian);
		
	}
	function insert_project($jenis){
		$kota = "CIANJUR";
		// $kota = $this->session->userdata('kota');
		$awal = substr($jenis, 0,1);
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
        $data['kode'] = $this->database_model->get_max_id_project($jenis);
        $kode_max = array();
        foreach ($data['kode'] as $kode_m) {
            $kode_max[] = $kode_m;
        }
        $uniqid = uniqid();
        $kode_project = $awal.".".sprintf("%03s",$kode_max[0]['kode'])."/AMANK2K3/".$kota."/".$bulan."/".$tahun;
        $data = array(
        	'kode_project' =>$kode_project,
        	'jenis_project' => $jenis,
        	'uniqid' => $uniqid 
        );
        $this->database_model->insert('tb_project',$data);
        redirect('Rencana/sop_pemadaman/'.$uniqid);
	}
	function insert_temp_pelaksana(){
		$kode_project = $this->input->post('kode_project');
		$kode_pelaksana = $this->input->post('kode_pelaksana');
		$data = array(
			'kode_pelaksana' => $kode_pelaksana,
			'kode_project' => $kode_project
		);
		$this->database_model->insert('tb_temp_pelaksana',$data);
	}
	function get_temp_uraian_pekerjaan(){
		$kode = $this->input->post('kode_project');
		$where = array('kode_project'=>$kode);
		$data['uraian_pekerjaan'] = $this->database_model->get_where('tb_temp_uraian_pekerjaan',$where);
		$temp = array();
		foreach ($data['uraian_pekerjaan'] as $uraian_pekerjaan) {
			$temp[]= $uraian_pekerjaan;
		}
		echo json_encode($temp);
	}
	function get_temp_pelaksaan(){
		$kode = $this->input->post('kode_project');
		$where = array('kode_project'=>$kode);
		$data['temp_pelaksana'] = $this->database_model->get_where('tb_temp_pelaksana',$where);
		$temp = array();
		foreach ($data['temp_pelaksana'] as $temp_pelaksana) {
			$temp[]= $temp_pelaksana;
		}
		echo json_encode($temp);
	}
}

 ?>