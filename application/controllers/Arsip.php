<?php 
/**
 * 
 */
class Arsip extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('database_model');
		$this->load->model('arsip_model');
	}
	function index(){
		$data['judul'] = "Home";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_arsip', $data);
		$this->load->view('parts/footer');
	}
  function gardu_induk(){
    $data['judul'] = "Gardu Induk";
    $this->load->view('parts/header', $data);
    $this->load->view('parts/menu', $data);
    $this->load->view('pages/v_arsip_gardu_induk', $data);
    $this->load->view('parts/footer', $data);
  }
	function penyulang(){
		$data['judul'] = "Penyulang";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_arsip_penyulang', $data);
		$this->load->view('parts/footer', $data);
	}
	function jenis_pekerjaan(){
    $data['new'] = "
    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnTambahJenisPekerjaan'><i class='mdi mdi-plus-circle'></i> Tambah Jenis Pekerjaan</button>
    ";
		$data['judul'] = "Jenis Pekerjaan & HIRARC";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_arsip_jenis_pekerjaan', $data);
		$this->load->view('parts/footer', $data);
	}
  function perusahaan_pelaksana(){
    $data['new'] = "
    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnTambahPerusahaan'><i class='mdi mdi-plus-circle'></i> Tambah Perusahaan</button>
    ";
    $data['judul'] = "Perusahaan Pelaksana";
    $this->load->view('parts/header', $data);
    $this->load->view('parts/menu', $data);
    $this->load->view('pages/v_arsip_perusahaan_pelaksana', $data);
    $this->load->view('parts/footer', $data);
  }

  function tambah_pelaksana(){
    $nama_pelaksana = $this->input->post('nama_pelaksana');
    $data = array(
      'nama_pelaksana' => $nama_pelaksana
    );
    $this->database_model->insert('tb_pelaksana',$data);
  }

  function tambah_sld(){
    $data['judul'] = "Single Line Diagram";
    $data['new'] = "
    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnTambahSld'><i class='mdi mdi-plus-circle'></i> Tambah SLD</button>
    ";
    $this->load->view('parts/header', $data);
    $this->load->view('parts/menu', $data);
    $this->load->view('pages/v_arsip_sld_tambah', $data);
    $this->load->view('parts/footer', $data);
  }
  function tambah_jenis_pekerjaan(){
    $data['judul'] = "Jenis Pekerjaan";
    $data['new'] = "
    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnTambahJenisPekerjaan'><i class='mdi mdi-plus-circle'></i> Tambah Jenis Pekerjaan</button>
    ";
    $this->load->view('parts/header', $data);
    $this->load->view('parts/menu', $data);
    $this->load->view('pages/v_arsip_jenis_pekerjaan_tambah', $data);
    $this->load->view('parts/footer', $data);
  }
 	function dt_sld()
     {

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $query = $this->arsip_model->get_arsip_sld();
          $data = array();
          foreach($query->result() as $r) {
          	$button = '
	          <a href="'.base_url().'assets/arsip/sld.vsd"><button type="button" class="btn waves-effect waves-light btn-secondary">Lihat SLD</button></a>
	          <button type="button" class="btn waves-effect waves-light btn-info">Edit</button>
	          <button type="button" class="btn waves-effect waves-light btn-danger">Delete</button>
          	';

            $data[] = array(
                $r->lokasi,
                $r->nama_sld,
                $button
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $query->num_rows(),
                 "recordsFiltered" => $query->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }
  function dt_gardu_induk()
     {

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $query = $this->arsip_model->get_arsip_gardu_induk();
          $data = array();
          foreach($query->result() as $r) {
            $button = '
            <button type="button" class="btn waves-effect waves-light btn-info">Edit</button>
            <button type="button" class="btn waves-effect waves-light btn-danger">Delete</button>
            ';

            $data[] = array(
                $r->kode_gardu_induk,
                $r->nama,
                $button
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $query->num_rows(),
                 "recordsFiltered" => $query->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }
     function dt_jenis_pekerjaan()
     {

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $query = $this->arsip_model->get_arsip_jenis_pekerjaan();
          $data = array();
          foreach($query->result() as $r) {
          	$button = '
	          <button type="button" class="btn waves-effect waves-light btn-secondary">Cek Gambar</button>
	          <button type="button" class="btn waves-effect waves-light btn-info">Edit</button>
	          <button type="button" class="btn waves-effect waves-light btn-danger">Delete</button>
          	';

            $data[] = array(
                $r->nama_jenis_pekerjaan,
                $r->kode_jenis_pekerjaan,
                $button
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $query->num_rows(),
                 "recordsFiltered" => $query->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }
     function dt_perusahaan_pelaksana()
     {
          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $query = $this->arsip_model->get_arsip_perusahaan_pelaksana();
          $data = array();
          foreach($query->result() as $r) {
            $button = '
            <button type="button" class="btn waves-effect waves-light btn-info">Edit</button>
            <button type="button" class="btn waves-effect waves-light btn-danger">Delete</button>
            ';

            $data[] = array(
                $r->kode_pelaksana,
                $r->nama_pelaksana,
                $button
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $query->num_rows(),
                 "recordsFiltered" => $query->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }
}

 ?>