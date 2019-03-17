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
		date_default_timezone_set("Asia/Jakarta");
		$uniqid = $this->uri->segment(3);
	}
	function index(){
		$where = array(
			'kode_user' => $this->session->userdata('kode_user')
		);
		$data['project'] = $this->database_model->get_where('tb_project',$where);
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
		$where_atasan = array(
			'tb_users.lokasi' => $this->session->userdata('lokasi'),
			'tb_divisi.kode_divisi' => $this->session->userdata('parent_divisi')
		);
		$a = array(
			'lokasi' => $this->session->userdata('lokasi')
		);
		$data['sld'] = $this->database_model->get_where('tb_sld',$a);
		$data['atasan'] = $this->database_model->get_atasan($where_atasan);
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
		$wk = array(
			'uniqid' => $this->uri->segment(3)
		);
		$data['kode_project'] = $this->database_model->get_where('tb_project',$wk);
		$data_wk = array();
		foreach ($data['kode_project'] as $data) {
			$data_wk[] = $data;
		}
		$kode_project = $data_wk[0]['uniqid'];
		$kode_sld = $data_wk[0]['kode_line'];
		if ($this->uri->segment(3) == ''|| $this->uri->segment(3) != $kode_project) {
			redirect('Rencana/sop_pemadaman');
		}
		$where = array(
			'kode_sld' => $kode_sld
		);
		$data['sld'] = $this->database_model->get_where('tb_sld',$where);
		$data['judul'] = "SLP Penyulang";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_form_slp', $data);
		$this->load->view('parts/footer', $data);
	}
	function working_permit(){
		$wk = array(
			'uniqid' => $this->uri->segment(3)
		);
		$data['kode_project'] = $this->database_model->get_where('tb_project',$wk);
		$data_wk = array();
		foreach ($data['kode_project'] as $data) {
			$data_wk[] = $data;
		}
		$kode_project = $data_wk[0]['uniqid'];
		if ($this->uri->segment(3) == ''|| $this->uri->segment(3) != $kode_project) {
			redirect('Rencana/sop_pemadaman');
		}
		$data['klasifikasi_kerja'] = $this->database_model->get('tb_klasifikasi_kerja');
		$data['detail_project'] = $this->database_model->detail_project($this->uri->segment(3));
		$data['prosedur_kerja'] = $this->database_model->get('tb_prosedur_kerja');
		$data['lampiran_izin_kerja'] = $this->database_model->get('tb_lampiran_izin_kerja');

		$data['judul'] = "Working Permit";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_form_wp', $data);
		$this->load->view('parts/footer', $data);
	}
	function jsa(){
		$wk = array(
			'uniqid' => $this->uri->segment(3)
		);
		$data['kode_project'] = $this->database_model->get_where('tb_project',$wk);
		$data_wk = array();
		foreach ($data['kode_project'] as $data) {
			$data_wk[] = $data;
		}
		$kode_project = $data_wk[0]['uniqid'];
		if ($this->uri->segment(3) == ''|| $this->uri->segment(3) != $kode_project) {
			redirect('Rencana/sop_pemadaman');
		}	
		$data['judul'] = "JSA";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_form_jsa', $data);
		$this->load->view('parts/footer', $data);
	}
	function hirarc(){
		$wk = array(
			'kode_project' => $this->uri->segment(3)
		);
		$data['kode_project'] = $this->database_model->get_where('tb_project',$wk);
		$data_wk = array();
		foreach ($data['kode_project'] as $data) {
			$data_wk[] = $data;
		}
		$kode_project = $data_wk[0]['uniqid'];
		if ($this->uri->segment(3) == '' || $this->uri->segment(3) != $kode_project) {
			redirect('Rencana/sop_pemadaman');
		}
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
		if (is_null($kode_project)) {
			echo "Something wrong : Project code is null (ER001)";
		}else if (is_null($uraian_pekerjaan) || is_null($jam)) {
			echo "Something wrong : Field must be not null (ER002)";
		}
		$this->database_model->insert('tb_temp_uraian_pekerjaan',$data_uraian);
		echo 1;
		
	}
	function insert_slp(){
		$kode_slp = $this->input->post('kode_slp');
		$kode_project = $this->input->post('kode_project');
		$array = array(
			'kode_line' =>$kode_slp
		);
		$this->database_model->update('tb_project',$kode_project,$array);
		echo 1;
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
        	'kode_user' => $this->session->userdata('kode_user'),
        	'jenis_project' => $jenis,
        	'uniqid' => $uniqid 
        );
        $this->database_model->insert('tb_project',$data);
        redirect('Rencana/sop_pemadaman/'.$uniqid);
	}
	function update_project(){
		$kode_project = $this->input->post('kode_project');
		$tgl = date('Y-m-d H:i:s');
		$tegangan = $this->input->post('tegangan');
		$tgl_project = $this->input->post('tgl_project');
		$alamat_project = $this->input->post('alamat_project');
		$jumlah_tenaga_kerja = $this->input->post('jml_tenaga_kerja');
		$material = $this->input->post('material');
		$peralatan_kerja = $this->input->post('peralatan_kerja');
		$gardu = $this->input->post('gardu');
		$nama_penyulang = $this->input->post('nama_penyulang');
		$kode_jenis_pekerjaan = $this->input->post('kode_jenis_pekerjaan');
		$kode_line = $this->input->post('kode_line');
		$data_project = array(
			'kode_jenis_pekerjaan' => $kode_jenis_pekerjaan,
			'tgl_project' => $tgl,
			'tgl_pelaksanaan' => $tgl_project,
			'tegangan' => $tegangan,
			'alamat_project' => $alamat_project,
			'jml_tenaga_kerja' => $jumlah_tenaga_kerja,
			'material' => $material,
			'peralatan_kerja' => $peralatan_kerja,
			'gardu'=> $gardu,
			'kode_line'=> $kode_line,
			'last_modified' => $tgl,
			'last_modified_user' => $this->session->userdata('kode_user')
		);
		$this->database_model->update_project($kode_project,$data_project);
		$where = array(
			'kode_project' =>$kode_project
		);
		$data['temp_pelaksana'] = $this->database_model->get_where('tb_temp_pelaksana',$where);
		foreach ($data['temp_pelaksana'] as $a) {
			$array = array(
				'kode_pelaksana' => $a['kode_pelaksana'],
				'kode_project' => $a['kode_project']
			);
			$this->database_model->insert('tb_det_pelaksana',$array);
			$this->database_model->delete('tb_temp_pelaksana','kode_project',$kode_project);
		}
		$data['temp_uraian_pekerjaan'] = $this->database_model->get_where('tb_temp_uraian_pekerjaan',$where);
		foreach ($data['temp_uraian_pekerjaan'] as $a) {
			$array = array(
				'kode_uraian_pekerjaan' => $a['kode_uraian_pekerjaan'],
				'uraian_pekerjaan' => $a['uraian_pekerjaan'],
				'jam' => $a['jam'],
				'keterangan' => $a['keterangan'],
				'kode_project' => $a['kode_project'],
			);
			$this->database_model->insert('tb_det_uraian_pekerjaan',$array);
			$this->database_model->delete('tb_temp_uraian_pekerjaan','kode_project',$kode_project);
		}
		echo 1;

	}
	function insert_temp_pelaksana(){
		$kode_project = $this->input->post('kode_project');
		$kode_pelaksana = $this->input->post('kode_pelaksana');
		$data = array(
			'kode_pelaksana' => $kode_pelaksana,
			'kode_project' => $kode_project
		);
		$this->database_model->insert('tb_temp_pelaksana',$data);
		echo 1;
	}
	function get_temp_uraian_pekerjaan(){
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));
          $where = array(
          	'uniqid' => $this->uri->segment(3)
          );
          $data['temp_pekerjaan'] = $this->database_model->get_where('tb_project',$where);
          $uraian_pekerjaan = array();
          foreach ($data['temp_pekerjaan'] as $b) {
          	$uraian_pekerjaan[] = $b;
          }
          $query = $this->database_model->get_temp_uraian($uraian_pekerjaan[0]['kode_project']);
          $data = array();
          foreach($query->result() as $r) {
          	$button = '
	          <button type="button" class="btn waves-effect waves-light btn-info">Edit</button>
	          <button type="button" class="btn waves-effect waves-light btn-danger">Delete</button>
          	';

            $data[] = array(
                $r->uraian_pekerjaan,
                $r->jam,
                $r->keterangan,
                $button
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $query->num_rows(),
                 "bPaginate"=> false,
                 "recordsFiltered" => $query->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
	}
	function get_temp_pelaksaan(){
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));
          $where = array(
          	'uniqid' => $this->uri->segment(3)
          );
          $data['temp_pekerjaan'] = $this->database_model->get_where('tb_project',$where);
          $uraian_pekerjaan = array();
          foreach ($data['temp_pekerjaan'] as $b) {
          	$uraian_pekerjaan[] = $b;
          }
          $query = $this->database_model->get_temp_pelaksana($uraian_pekerjaan[0]['kode_project']);
          $data = array();
          foreach($query->result() as $r) {
          	$button = '
	          <button type="button" class="btn waves-effect waves-light btn-info">Edit</button>
	          <button type="button" class="btn waves-effect waves-light btn-danger">Delete</button>
          	';

            $data[] = array(
                $r->nama_pelaksana,
                $button
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $query->num_rows(),
                 "bPaginate"=> false,
                 "recordsFiltered" => $query->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
	}
}

 ?>