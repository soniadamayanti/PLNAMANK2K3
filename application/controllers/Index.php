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
	    $data['new'] = "
	    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnModalBuatRencanaKerja'><i class='mdi mdi-plus-circle'></i> Buat Rencana Kerja</button>
	    ";

		$where = array(
			'kode_user' => $this->session->userdata('kode_user')
		);
		$data['data_project'] = $this->index_model->get_data_project_tidak($lokasi,'success');
		$data['jml_project'] = count($data['data_project']);
		$data['project'] = $this->database_model->get_where('tb_project',$where);
		$data['history_project'] = $this->index_model->get_history();
		$data['pending']=$this->db->query('SELECT kode_project FROM tb_status_project WHERE kode_user="'.$kode_user.'" AND status_project="pending"')->num_rows();
		$data['berjalan']=$this->db->query('SELECT s.kode_project,s.status_project,p.status FROM tb_status_project s INNER JOIN tb_project p ON s.kode_project=p.kode_project  WHERE s.kode_user="'.$kode_user.'" AND p.status="pending"')->num_rows();
		$data['final']=$this->db->query('SELECT s.kode_project,p.status FROM tb_status_project s INNER JOIN tb_project p ON s.kode_project=p.kode_project  WHERE s.kode_user="'.$kode_user.'" AND p.status="final"')->num_rows();
		$data['success']=$this->db->query('SELECT s.kode_project,p.status FROM tb_status_project s INNER JOIN tb_project p ON s.kode_project=p.kode_project  WHERE s.kode_user="'.$kode_user.'" AND p.status="success"')->num_rows();
		$data['selesai'] = $data['success']+$data['final'];
		$data['revisi']=$this->db->query('SELECT s.kode_project,p.status FROM tb_status_project s INNER JOIN tb_project p ON s.kode_project=p.kode_project  WHERE s.kode_user="'.$kode_user.'" AND p.status="revisi"')->num_rows();

		$data['berkas_staff']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE parent_divisi="1" AND kode_user="'.$kode_user.'"')->num_rows();
		$data['berkas_k3']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE parent_divisi="2" AND lokasi="'.$lokasi.'"')->num_rows();
		$data['berkas_spvulp']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE parent_divisi="3" AND lokasi="'.$lokasi.'"')->num_rows();
		$data['berkas_mulp']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE parent_divisi="4" AND lokasi="'.$lokasi.'"')->num_rows();
		$data['berkas_harjar']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE parent_divisi="5" AND lokasi="'.$lokasi.'"')->num_rows();
		$data['berkas_opoist']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE parent_divisi="6"  AND lokasi="'.$lokasi.'"')->num_rows();
		$data['berkas_mbjaringan']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE parent_divisi="7" AND lokasi="'.$lokasi.'"')->num_rows();

		$data['berkas_mbjaringan']=$this->db->query('SELECT kode_project FROM v_berkas_terakhir WHERE parent_divisi="7"')->num_rows();

		$data['judul'] = "Dashboard";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', compact('data','headerbulan'));
		$this->load->view('v_index',compact('data','lokasi'));
		$this->load->view('parts/footer', $data);
	}
}

 ?>