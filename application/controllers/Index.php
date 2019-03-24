<?php 
/**
 * 
 */
class Index extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('index_model');
		$this->load->model('database_model');
	}
	function index(){
		$kode_user = $this->session->userdata('kode_user');
		$lokasi = $this->session->userdata('lokasi');
		$kode_divisi = $this->session->userdata('kode_divisi');
	    if ($kode_divisi == 1) {
	    	$data['new'] = "
	    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnModalBuatRencanaKerja'><i class='mdi mdi-plus-circle'></i> Buat Rencana Kerja</button>
	    ";
	    }else{
	    	$data['new'] = "";	
	    }
	    

		$where = array(
			'kode_user' => $this->session->userdata('kode_user')
		);
		$data['data_project'] = $this->index_model->get_data_project_tidak($lokasi,'success');
		$data['jml_project'] = count($data['data_project']);
		$data['project'] = $this->database_model->get_where('tb_project',$where);
		$data['history_project'] = $this->index_model->get_history();
		$data['pending']=$this->db->query('SELECT kode_project FROM tb_status_project WHERE kode_user="'.$kode_user.'" AND status_project="pending"')->num_rows();
		$data['berjalan']=$this->db->query('SELECT b.kode_project FROM tb_status_project s INNER JOIN (tb_berkas_terakhir b INNER JOIN tb_project p ON b.kode_project=p.kode_project) ON s.kode_project=b.kode_project WHERE s.kode_user="'.$kode_user.'" AND p.status="pending" AND s.status_project="approve" ')->num_rows();
		$data['success']=$this->db->query('SELECT s.kode_project,p.status FROM tb_status_project s INNER JOIN tb_project p ON s.kode_project=p.kode_project  WHERE s.kode_user="'.$kode_user.'" AND p.status="success"')->num_rows();
		$data['revisi']=$this->db->query('SELECT s.kode_project,p.status FROM tb_status_project s INNER JOIN tb_project p ON s.kode_project=p.kode_project  WHERE s.kode_user="'.$kode_user.'" AND p.status="denied"')->num_rows();
		$data['failed']=$this->db->query('SELECT s.kode_project,p.status FROM tb_status_project s INNER JOIN tb_project p ON s.kode_project=p.kode_project  WHERE s.kode_user="'.$kode_user.'" AND p.status="failed"')->num_rows();

		$data['berkas_staff']=$this->db->query('SELECT kode_project FROM tb_project WHERE status="new" AND kode_user="'.$kode_user.'"')->num_rows();
		$data['berkas_k3']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE divisi_tujuan="2"')->num_rows();
		$data['berkas_spvulp']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE divisi_tujuan="3"')->num_rows();
		$data['berkas_mulp']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE divisi_tujuan="4"')->num_rows();
		$data['berkas_harjar']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE divisi_tujuan="5"')->num_rows();
		$data['berkas_opoist']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE divisi_tujuan="6" ')->num_rows();
		$data['berkas_mbjaringan']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE divisi_tujuan="7"')->num_rows();

		$data['berkas_mbjaringan']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE divisi_tujuan="7"')->num_rows();

		$data['judul'] = "Dashboard";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', compact('data','headerbulan'));
		$this->load->view('v_index',compact('data','lokasi'));
		$this->load->view('parts/footer', $data);
	}
}

 ?>