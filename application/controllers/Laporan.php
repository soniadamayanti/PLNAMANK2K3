<?php 
/**
 * 
 */
class Laporan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('index_model');
		$this->load->model('database_model');
	}
	function index(){
	    $data['new'] = "
	    ";
		$data['judul'] = "";
		$data['gardu'] = $this->database_model->get_gardu();

		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', compact('data','headerbulan'));
		$this->load->view('pages/v_lap_rekap_bulanan',compact('data','lokasi'));
		$this->load->view('parts/footer', $data);
	}
	function pencapaian(){
	    $data['new'] = "
	    ";
		$data['judul'] = "";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', compact('data','headerbulan'));
		$this->load->view('pages/v_lap_pencapaian',compact('data','lokasi'));
		$this->load->view('parts/footer', $data);
	}
	function get_laporan(){
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));
          $gardu = $this->input->post('gardu');
          $tgl_awal = $this->input->post('tgl_awal');
          $tgl_akhir = $this->input->post('tgl_akhir');
          $gardu = $this->input->post('gardu');
          $where = array(
          	'nama_gardu' => $gardu,
          	'tgl_selesai >='=> $tgl_awal,
          	'tgl_selesai <='=> $tgl_akhir,
          );
          $project['data_project'] = $this->database_model->get_where('v_laporan',$where);
          $data = array();
          $i=1;
          foreach($project['data_project'] as $r) {
            $data[] = array(
            	$i,
                $r['ulp'],
                $r['nama_gardu'],
                $r['kode_project'],
                $r['nama_jenis_pekerjaan']
               );
            $i++;
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => count($project['data_project']),
                 "bPaginate"=> false,
                 "recordsFiltered" => count($project['data_project']),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
	}
}

 ?>