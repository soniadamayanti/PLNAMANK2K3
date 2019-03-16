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
	function sld(){
		$data['judul'] = "Single Line Diagram";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_arsip_sld', $data);
		$this->load->view('parts/footer', $data);
	}
	function jenis_pekerjaan(){
		$data['judul'] = "Jenis Pekerjaan & HIRARC";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_arsip_jenis_pekerjaan', $data);
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
	          <button type="button" class="btn waves-effect waves-light btn-secondary">Cek Gambar</button>
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
}

 ?>