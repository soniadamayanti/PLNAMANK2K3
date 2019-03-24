<?php 
/**
 * 
 */
class Arsip extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
    $this->load->library('upload');
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
    $data['gardu_induk'] = $this->database_model->get('tb_gardu_induk');
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
  function pelaksana_pekerjaan(){
    $data['pelaksana'] = $this->database_model->get('tb_pelaksana');
    $data['judul'] = "Pelaksana Pekerjaan";
    $this->load->view('parts/header', $data);
    $this->load->view('parts/menu', $data);
    $this->load->view('pages/v_arsip_pelaksana_pekerjaan', $data);
    $this->load->view('parts/footer', $data);
  }

  function tambah_pelaksana(){
    $nama_pelaksana = $this->input->post('nama_pelaksana');
    $data = array(
      'nama_pelaksana' => $nama_pelaksana,
      'tgl' => date('Y-m-d')
    );
    $this->database_model->insert('tb_pelaksana',$data);
  }
  function update_pelaksana(){
    $kode_pelaksana = $this->input->post('kode_pelaksana');
    $nama_pelaksana = $this->input->post('nama_pelaksana');
    $data = array(
      'nama_pelaksana' => $nama_pelaksana,
      'tgl' => date('Y-m-d')
    );
    $where = array(
      'kode_pelaksana' => $kode_pelaksana
    );
    $this->database_model->update('tb_pelaksana',$data,$where);
  }
  function delete_pelaksana(){
    $kode_pelaksana = $this->input->post('kode_pelaksana');
    $query = $this->arsip_model->hapus_pelaksana($kode_pelaksana);
    if ($query) {
      echo 1;
    }else{
      echo 0;
    }
  }
  function tambah_gardu(){
    $gardu_induk = $this->input->post('gardu_induk');
    $alamat = $this->input->post('alamat');
    $data = array(
      'nama_gardu' => $gardu_induk,
      'alamat' => $alamat,
      'tgl' => date('Y-m-d')
    );
    $this->database_model->insert('tb_gardu_induk',$data);
  }
  function update_gardu(){
    $kode_gardu = $this->input->post('kode_gardu');
    $gardu_induk = $this->input->post('gardu_induk');
    $alamat = $this->input->post('alamat');
    $data = array(
      'nama_gardu' => $gardu_induk,
      'alamat' => $alamat,
      'tgl' => date('Y-m-d')
    );
    $where = array(
      'kode_gardu_induk' => $kode_gardu
    );
    $this->database_model->update('tb_gardu_induk',$data,$where);
  }
  function delete_gardu(){
    $kode_gardu_induk = $this->input->post('kode_gardu_induk');
    $query = $this->arsip_model->hapus_gardu($kode_gardu_induk);
    if ($query) {
      echo 1;
    }else{
      echo 0;
    }
  }


  function tambah_pekerja(){
    $kode_perusahaan = $this->input->post('kode_perusahaan');
    $nama_pekerja = $this->input->post('nama_pekerja');
    $data = array(
      'kode_pelaksana' => $kode_perusahaan,
      'nama_pelaksana_pekerja' => $nama_pekerja,
      'tgl' => date('Y-m-d')
    );
    $this->database_model->insert('tb_pelaksana_pekerja',$data);
  }
  function update_pekerja(){
    $kode_pekerja = $this->input->post('kode_pekerja');
    $kode_perusahaan = $this->input->post('kode_perusahaan');
    $nama_pekerja = $this->input->post('nama_pekerja');
    $data = array(
      'kode_pelaksana' => $kode_perusahaan,
      'nama_pelaksana_pekerja' => $nama_pekerja,
      'tgl' => date('Y-m-d')
    );
    $where = array(
      'kode_pelaksana_pekerja' => $kode_pekerja
    );
    $this->database_model->update('tb_pelaksana_pekerja',$data,$where);
  }
  function delete_pekerja(){
    $kode_pekerja = $this->input->post('kode_pekerja');
    $query = $this->arsip_model->hapus_pelaksana_pekerja($kode_pekerja);
    if ($query) {
      echo 1;
    }else{
      echo 0;
    }
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
            $sld = '
            <a href="'.base_url().'arsip/sld/'.$r->kode_sld.'"><button type="button" class="btn waves-effect waves-light btn-secondary">Lihat SLD</button></a>
            <a href="'.base_url().'assets/arsip/visio/'.$r->visio.'"><button type="button" class="btn waves-effect waves-light btn-secondary">Visio</button></a>
            ';
          	$button = '
	          <button type="button" class="btn waves-effect waves-light btn-info">Edit</button>
	          <button type="button" class="btn waves-effect waves-light btn-danger">Hapus</button>
          	';

            $data[] = array(
                $r->nama_gardu,
                $r->nama_sld,
                $sld,
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
            <button type="button" class="btn waves-effect waves-light btn-info" id="getUpdateGardu" data-kode="'.$r->kode_gardu_induk.'" data-nama="'.$r->nama_gardu.'" data-alamat="'.$r->alamat.'">Edit</button>
            <button type="button" class="btn waves-effect waves-light btn-danger" id="btnHapusGardu" data-kode="'.$r->kode_gardu_induk.'">Hapus</button>
            ';

            $data[] = array(
                $r->nama_gardu,
                $r->alamat,
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
	          <button type="button" class="btn waves-effect waves-light btn-danger">Hapus</button>
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
            <button type="button" class="btn waves-effect waves-light btn-info" id="getUpdatePelaksana" data-kode="'.$r->kode_pelaksana.'" data-nama="'.$r->nama_pelaksana.'">Edit</button>
            <button type="button" class="btn waves-effect waves-light btn-danger" id="btnHapusPelaksana" data-kode="'.$r->kode_pelaksana.'">Hapus</button>
            ';

            $data[] = array(
                $r->nama_pelaksana,
                $r->tgl,
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

    function dt_pelaksana_pekerjaan()
     {

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $query = $this->arsip_model->get_arsip_pelaksana_pekerjaan();
          $data = array();
          foreach($query->result() as $r) {

            $button = '
            <button type="button" class="btn waves-effect waves-light btn-info" id="getUpdatePekerja" data-kode="'.$r->kode_pelaksana_pekerja.'" data-perusahaan="'.$r->kode_pelaksana.'" data-nama="'.$r->nama_pelaksana_pekerja.'">Edit</button>
            <button type="button" class="btn waves-effect waves-light btn-danger" id="btnHapusPekerja" data-kode="'.$r->kode_pelaksana_pekerja.'">Hapus</button>
            ';

            $data[] = array(
                $r->nama_pelaksana,
                $r->nama_pelaksana_pekerja,
                $r->tgl,
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