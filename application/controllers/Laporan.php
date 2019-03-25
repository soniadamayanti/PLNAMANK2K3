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
		$gardu = $this->input->post('gardu');
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
        $where = array(
        	'nama_gardu' => $gardu,
        	'tgl_selesai >=' => $tgl_awal,
        	'tgl_selesai <=' => $tgl_akhir,
        	'status'=>'success'
        );
        $laporan['laporan'] = $this->database_model->get_where('v_laporan',$where
        );
        // $laporan['laporan'] = $this->database_model->get('v_laporan');
        $data = array();
        $i = 1;
        foreach($laporan['laporan'] as $r) {
        		echo "<tr>";
        		echo "<td>".$i."</td>";
				echo "<td>".$r['ulp']."</td>";
				echo "<td>".$r['nama_gardu']."</td>";
				echo "<td>".$r['kode_project']."</td>";
				echo "<td>".$r['nama_sld']."</td>";
            	echo "</tr>";
            $i++;
        }
        // echo json_encode($data);
        // echo json_encode($output);
        exit();
	}
}

 ?>