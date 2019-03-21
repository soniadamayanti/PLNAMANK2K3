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
		$this->load->model('test_model');
	}
	function index(){
		
		$where_project = array(
			'tb_status_project.kode_user' => $this->session->userdata('kode_user'),
			'tb_status_project.status_project'=> 'pending'
		);
		$data['data_project'] = $this->database_model->project_rencana($where_project);
		$data['jml_project'] = count($data['data_project']);
		$where = array(
			'kode_user' => $this->session->userdata('kode_user')
		);
		$data['project'] = $this->database_model->get_where('tb_project',$where);
		$data['judul'] = "Data Rencana Kerja";
	    $data['new'] = "
	    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnModalBuatRencanaKerja'><i class='mdi mdi-plus-circle'></i> Buat Rencana Kerja</button>
	    ";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_data_kerja', $data);
		$this->load->view('parts/footer', $data);
	}
	function form(){

		
		$data['detail_project'] = $this->database_model->detail_project($this->uri->segment(3));
	    $wpk1 = array(
	    	'type'=>'Perlindungan'
	    );
	    $wpk2 = array(
	    	'type'=>'Keselamatan'
	    );

		$a = array(
			'lokasi' => $this->session->userdata('lokasi')
		);
		$where_atasan = array(
			'tb_users.lokasi' => $this->session->userdata('lokasi'),
			'tb_divisi.kode_divisi' => 3
		);
		$where_pengawas_k3 = array(
			'tb_users.lokasi' => $this->session->userdata('lokasi'),
			'tb_divisi.kode_divisi' => 2
		);
		$wk = array(
			'uniqid' => $this->uri->segment(3)
		);
		$data['kode_project'] = $this->database_model->get_where('tb_project',$wk);
		$data['new'] = "
	    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnModalBuatRencanaKerja'><i class='mdi mdi-plus-circle'></i> Buat Rencana Kerja</button>
	    ";
		$data['pelaksana_pekerja'] = $this->database_model->get('tb_pelaksana_pekerja');
		$data['atasan'] = $this->database_model->get_atasan($where_atasan);
		$data['pengawas_k3'] = $this->database_model->get_atasan($where_pengawas_k3);
	    $data['perlindungan'] =$this->database_model->get_where('tb_peralatan_kerja',$wpk1);
	    $data['keselamatan'] =$this->database_model->get_where('tb_peralatan_kerja',$wpk2);
		$data['klasifikasi_kerja'] = $this->database_model->get('tb_klasifikasi_kerja');
		$data['prosedur_kerja'] = $this->database_model->get('tb_prosedur_kerja');
		$data['lampiran_izin_kerja'] = $this->database_model->get('tb_lampiran_izin_kerja');
		$data['jenis_pekerjaan'] = $this->database_model->get('tb_jenis_pekerjaan');
		$data['pelaksana'] = $this->database_model->get('tb_pelaksana');
		$data['sld'] = $this->database_model->get_where('tb_sld',$a);
		$data['judul'] = "Test UI";
	    
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_form_rencana', $data);
		$this->load->view('parts/footer', $data);
	}
	function penyelesaian(){
		$data['detail_project'] = $this->database_model->detail_project($this->uri->segment(3));
	    $wpk1 = array(
	    	'type'=>'Perlindungan'
	    );
	    $wpk2 = array(
	    	'type'=>'Keselamatan'
	    );

		$a = array(
			'lokasi' => $this->session->userdata('lokasi')
		);
		$where_atasan = array(
			'tb_users.lokasi' => $this->session->userdata('lokasi'),
			'tb_divisi.kode_divisi' => 3
		);
		$where_pengawas_k3 = array(
			'tb_users.lokasi' => $this->session->userdata('lokasi'),
			'tb_divisi.kode_divisi' => 2
		);
		$wk = array(
			'uniqid' => $this->uri->segment(3)
		);
		$data['kode_project'] = $this->database_model->get_where('tb_project',$wk);
		$data['new'] = "
	    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnModalBuatRencanaKerja'><i class='mdi mdi-plus-circle'></i> Buat Rencana Kerja</button>
	    ";
		$data['pelaksana_pekerja'] = $this->database_model->get('tb_pelaksana_pekerja');
		$data['atasan'] = $this->database_model->get_atasan($where_atasan);
		$data['judul'] = "Penyelesaian";
	    
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_form_penyelesaian', $data);
		$this->load->view('parts/footer', $data);
	}
	function get_atasan(){
		$where = array(
			'tb_users.lokasi' => 'Cianjur',
			'tb_divisi.parent_divisi' => 2
		);
		// $data['divisi'] = $this->database_model->get_where('tb_users',$where);
		$data['atasan'] = $this->test_model->get_atasan($where);
		$atasan = array();
		foreach ($data['atasan'] as $r) {
			$atasan[] = $r;
		}
		echo "<pre>";
		print_r($atasan);
		echo "</pre>";
	}
	function insert_temp_pelaksana(){
		$kode_project = $this->input->post('kode_project');
		$kode_pelaksana = $this->input->post('kode_pelaksana');
		$data = array(
			'kode_pelaksana' => $kode_pelaksana,
			'kode_project' => $kode_project
		);
		$this->database_model->insert('tb_det_pelaksana',$data);
	}
	function insert_det_pekerja(){
		$kode_project = $this->input->post('kode_project');
		$kode_pekerja = $this->input->post('kode_pekerja');
		$data = array(
			'kode_user' => $kode_pekerja,
			'kode_project' => $kode_project
		);
		$this->database_model->insert('tb_det_pekerja',$data);
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
		$data['temp_pelaksana'] = $this->database_model->get_det_uraian($kode_project)->result();
		if (is_null($kode_project)) {
			echo "Something wrong : Project code is null (ER001)";
		}else if (is_null($uraian_pekerjaan) || is_null($jam)) {
			echo "Something wrong : Field must be not null (ER002)";
		}else{
			$this->database_model->insert('tb_det_uraian_pekerjaan',$data_uraian);
		}	
	}
	function insert_temp_pekerja(){
		$kode_project = $this->input->post('kode_project');
		$kode_pekerja = $this->input->post('kode_pekerja');
		$value = array(
			'kode_project' => $kode_project,
			'kode_pekerja' => $kode_pekerja
		);
		$where = array(
			'kode_project' => $kode_project
		);
		$cek = $this->database_model->get_where('tb_pekerja',$where);
		$this->database_model->insert('tb_pekerja',$value);
	}
	function update_project(){

		$kode_project = $this->input->post('kode_project'); 
		$tegangan = $this->input->post('tegangan'); 
		$kode_jenis_pekerjaan = $this->input->post('kode_jenis_pekerjaan'); 
		$material = $this->input->post('material'); 
		$alamat_project = $this->input->post('alamat_project'); 
		$tgl_pengajuan = $this->input->post('tgl_pengajuan'); 
		$tgl_mulai = $this->input->post('tgl_mulai'); 
		$tgl_selesai = $this->input->post('tgl_selesai'); 
		$jam_mulai = $this->input->post('jam_mulai'); 
		$jam_selesai = $this->input->post('jam_selesai'); 
		$jml_tenaga_kerja = $this->input->post('jml_tenaga_kerja'); 
		$peralatan_kerja = $this->input->post('peralatan_kerja'); 
		$gardu = $this->input->post('gardu'); 
		$kode_line = $this->input->post('kode_line'); 
		$lampiran_izin = $this->input->post('lampiran_izin'); 
		$klasifikasi = $this->input->post('klasifikasi'); 
		$prosedur_kerja = $this->input->post('prosedur_kerja'); 
		$perlindungan = $this->input->post('perlindungan'); 
		$keselamatan = $this->input->post('keselamatan'); 
		$mulai_fix = $tgl_mulai. " ".$jam_mulai.":00";
		$selesai_fix = $tgl_selesai. " ".$jam_selesai.":00";
		$data_project = array(
			'kode_jenis_pekerjaan' => $kode_jenis_pekerjaan,
			'tgl_project' => date('Y-m-d H:i:s'),
			'tgl_pengajuan' => $tgl_pengajuan,
			'tgl_pelaksanaan' => $mulai_fix,
			'tgl_selesai' => $selesai_fix,
			'tegangan' => $tegangan,
			'alamat_project' => $alamat_project,
			'jml_tenaga_kerja' => 0,
			'material' => $material,
			'peralatan_kerja' => $peralatan_kerja,
			'gardu'=> $gardu,
			'kode_line'=> $kode_line,
			'last_modified' => date('Y-m-d H:i:s'),
			'last_modified_user' => $this->session->userdata('kode_user')
		);
		$this->database_model->update_project($kode_project,$data_project);

		if (isset($klasifikasi)) {
			foreach ($klasifikasi as $data) {
				$array = array(
					'kode_project' => $kode_project,
					'kode_klasifikasi_kerja' => $data
				);
				$this->database_model->insert('tb_det_klasifikasi',$array);
			}	
		}
		if (isset($prosedur_kerja)) {
			foreach ($prosedur_kerja as $data) {
				$array = array(
					'kode_project' => $kode_project,
					'kode_prosedur_kerja' => $data
				);
				$this->database_model->insert('tb_det_prosedur_kerja',$array);
			}
		}
		if (isset($lampiran_izin)) {
			foreach ($lampiran_izin as $data) {
				$array = array(
					'kode_project' => $kode_project,
					'kode_lampiran_izin_kerja' => $data
				);
				$this->database_model->insert('tb_det_lampiran_izin_kerja',$array);
			}
		}
		if (isset($perlindungan)) {
			foreach ($perlindungan as $data) {
				$array = array(
					'kode_project' => $kode_project,
					'kode_peralatan_kerja' => $data
				);
				$this->database_model->insert('tb_det_peralatan_kerja',$array);
			}
		}if (isset($keselamatan)) {
			
			foreach ($keselamatan as $data) {
				$array = array(
					'kode_project' => $kode_project,
					'kode_peralatan_kerja' => $data
				);
				$this->database_model->insert('tb_det_peralatan_kerja',$array);
			}
		}
		
		
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
        $data_approval = array(
				'id' => '',
				'kode_project' => $kode_project,
				'kode_user'=> $this->session->userdata('kode_user'),
				'tgl' => date('Y-m-d H:i:s'),
				'type'=> 'new'
			);
		$this->database_model->insert('tb_approval',$data_approval);
		$get_ttd = array(
			'lokasi' => $this->session->userdata('lokasi'),
			'kode_divisi !=' =>$this->session->userdata('kode_divisi')
		);
		$data['ttd'] = $this->database_model->get_where('tb_users',$get_ttd);
		foreach ($data['ttd'] as $r) {
			$array = array(
				'kode_project'=> $kode_project,
				'kode_user' =>$r['kode_user']
			);
			$this->database_model->insert('tb_det_project',$array);
		}
		$data['berkas'] = $this->database_model->get_where('tb_users',
			array(
				'lokasi'=>$this->session->userdata('lokasi'),
				'kode_divisi >' => $this->session->userdata('kode_divisi') 
			));
		foreach ($data['berkas'] as $v) {
			$array_status = array(
				'kode_project'=> $kode_project,
				'status_project' =>'pending',
				'tgl' => date('Y-m-d H:i:s'),
				'kode_user' => $v['kode_user']
			);
			$this->database_model->insert('tb_status_project',$array_status);
		}
		$data['berkas_atas'] = $this->database_model->get_where('tb_users',
			array(
				'lokasi'=>'ULP'
			));
		foreach ($data['berkas_atas'] as $b) {
			$array_status = array(
				'kode_project'=> $kode_project,
				'status_project' =>'pending',
				'tgl' => date('Y-m-d H:i:s'),
				'kode_user' => $b['kode_user']
			);
			$this->database_model->insert('tb_status_project',$array_status);
		}
		$array_status_sendiri = array(
				'kode_project'=> $kode_project,
				'status_project' =>'pending',
				'tgl' => date('Y-m-d H:i:s'),
				'kode_user' => $this->session->userdata('kode_user')
			);
		$this->database_model->insert('tb_status_project',$array_status_sendiri);
        redirect('Rencana/form/'.$uniqid);
	}
	function ditolak(){
	    $data['new'] = "
	    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnModalBuatRencanaKerja'><i class='mdi mdi-plus-circle'></i> Buat Rencana Kerja</button>
	    ";
		$data['judul'] = "Rencana Kerja DItolak";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_data_kerja_ditolak', $data);
		$this->load->view('parts/footer', $data);
	}
	function selesai(){
	    $data['new'] = "
	    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnModalBuatRencanaKerja'><i class='mdi mdi-plus-circle'></i> Buat Rencana Kerja</button>
	    ";
		$data['judul'] = "Rencana Kerja Selesai";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_data_kerja_selesai', $data);
		$this->load->view('parts/footer', $data);
	}
	function dibatalkan(){
	    $data['new'] = "
	    <button class='btn float-right hidden-sm-down btn-success' data-toggle='modal' id='btnModalBuatRencanaKerja'><i class='mdi mdi-plus-circle'></i> Buat Rencana Kerja</button>
	    ";
		$data['judul'] = "Rencana Kerja Dibatalkan";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_data_kerja_dibatalkan', $data);
		$this->load->view('parts/footer', $data);
	}
	function get_project(){
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));
          $where = array(
          	'kode_user' => $this->session->userdata('kode_user')
          );
          $project['data_project'] = $this->database_model->get_where('tb_project',$where);
          $data = array();
          foreach($project['data_project'] as $r) {
          	$b['cek_approval'] = $this->database_model->cek_approval($r['kode_project'],4);
          	if (count($b['cek_approval']) > 0) {
          		$button = anchor('Download/printPDF/'.$r['uniqid'],'<i class="ti-printer"></i> PDF','class="btn btn-info"');
          	}else{
          		// $button = "<a class='btn btn-info' disabled href='".base_url()."Download/printPDF/".$r['uniqid']."'>Print PDF</a>";
          		$button = anchor('Download/printPDF/'.$r['uniqid'],'<i class="ti-printer"></i> PDF','class="btn btn-secondary disabled" ');
          	}
          	
            $data[] = array(
                $r['kode_project'],
                $r['tgl_project'],
                $r['tgl_selesai'],
                $button
               );
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
	// function approval($uniqid){
	// 	$where_project = array(
	// 		'uniqid' => $uniqid
	// 	);
	// 	$data['project'] = $this->database_model->get_where('tb_project',$where_project);
	// 	foreach ($data['project'] as $data) {
	// 		$kode_project =  $data['kode_project'];
	// 	}
	// 	$where = array(
	// 		'kode_divisi' => $this->session->userdata('child_divisi')
	// 	);
	// 	$data['user'] = $this->database_model->get_where('tb_users',$where);
	// 	foreach ($data['user'] as $data) {
	// 		$kode =  $data['kode_user'];
	// 		$nama_divisi = $data['nama_user'];
	// 	}
	// 	$where_cari_user = array(
	// 		'kode_user' => $kode
	// 	);
	// 	$data['data_approval'] = $this->database_model->get_where('tb_approval',$where_cari_user);
	// 	if (count($data['data_approval']) == 0) {
	// 		echo $nama_user." belum menyetujui";
	// 	}else{
	// 		$data_approval = array(
	// 			'id' => '',
	// 			'kode_project' => $kode_project,
	// 			'kode_user'=> $this->session->userdata('kode_user')
	// 		);
	// 		$this->database_model->insert('tb_approval',$data_approval);
	// 		$array_status = array(
	// 			'kode_project'=> $kode_project,
	// 			'status_project' =>'approve',
	// 			'tgl' => date('Y-m-d H:i:s'),
	// 			'kode_user' => $this->session->userdata('kode_user')
	// 		);
	// 	$this->database_model->insert('tb_status_project',$array_status);
	// 	$data_berkas = array(
	// 		'kode_project' => $kode_project,
	// 		'kode_divisi' => $this->session->userdata('kode_divisi'),
	// 		'parent_divisi' => $this->session->userdata('parent_divisi'),
	// 		'tgl' => date('Y-m-d H:i:s')
	// 	);
	// 	$this->database_model->insert('tb_berkas_terakhir',$data_berkas);
	// 		echo 1;
	// 	}
	// }
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
		$query = $this->database_model->get_det_pelaksana($uraian_pekerjaan[0]['kode_project']);  
          $data = array();
          foreach($query->result() as $r) {
          	$button = '<button type="button" class="btn waves-effect waves-light btn-danger" kode_project="'.$r->kode_project.'" kode_pelaksana="'.$r->kode_pelaksana.'"><i class="mdi mdi-delete"></i></button>
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
	function get_temp_uraian_pekerjaan(){
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));
          $where = array(
          	'uniqid' => $this->uri->segment(3)
          );
          $c['temp_pekerjaan'] = $this->database_model->get_where('tb_project',$where);
          $uraian_pekerjaan = array();
          foreach ($c['temp_pekerjaan'] as $b) {
          	$uraian_pekerjaan[] = $b;
          }
          $query = $this->database_model->get_det_uraian($uraian_pekerjaan[0]['kode_project']);
          $data = array();
          
          foreach($query->result() as $r) {
          	$button = '
	          <button type="button" class="btn waves-effect waves-light btn-danger" kode_project="'.$r->kode_project.' kode_uraian_pekerjaan="'.$r->kode_uraian_pekerjaan.'"><i class="mdi mdi-delete"></i></button>
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
	function get_temp_pekerja(){
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));
          $where = array(
          	'uniqid' => $this->uri->segment(3)
          );
          $c['perkerja'] = $this->database_model->get_where('tb_project',$where);
          $uraian_pekerjaan = array();
          foreach ($c['perkerja'] as $b) {
          	$uraian_pekerjaan[] = $b;
          }
          $query = $this->database_model->get_det_pekerja($uraian_pekerjaan[0]['kode_project']);
          $data = array();
          foreach($query->result() as $r) {
          	$button = '
	          <button type="button" class="btn waves-effect waves-light btn-danger" kode_project="'.$r->kode_project.' kode_user="'.$r->kode_user.'"><i class="mdi mdi-delete"></i></button>
          	';

            $data[] = array(
                $r->nama_pelaksana_pekerja,
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
	function get_checked_klasifikasi(){
		$where = array(
			'kode_project' => $this->input->post('kode_project')
		);
		$data['data_klasifikasi'] = $this->database_model->get_where('tb_det_klasifikasi',$where);
		$data_klasifikasi = array();
		foreach ($data['data_klasifikasi'] as $r) {
			$data_klasifikasi[] = $r['kode_klasifikasi_kerja'];
		}

		echo json_encode($data_klasifikasi);
	}
	function get_checked_prosedur(){
		$where = array(
			'kode_project' => $this->input->post('kode_project')
		);
		$data['data_prosedur'] = $this->database_model->get_where('tb_det_prosedur_kerja',$where);
		$data_prosedur = array();
		foreach ($data['data_prosedur'] as $r) {
			$data_prosedur[] = $r['kode_prosedur_kerja'];
		}

		echo json_encode($data_prosedur);
	}
	function get_checked_lampiran(){
		$where = array(
			'kode_project' => $this->input->post('kode_project')
		);
		$data['data_lampiran'] = $this->database_model->get_where('tb_det_lampiran_izin_kerja',$where);
		$data_lampiran = array();
		foreach ($data['data_lampiran'] as $r) {
			$data_lampiran[] = $r['kode_lampiran_izin_kerja'];
		}

		echo json_encode($data_lampiran);
	}
	function get_checked_peralatan(){
		$where = array(
			'kode_project' => $this->input->post('kode_project')
		);
		$data['data_peralatan'] = $this->database_model->get_where('tb_det_peralatan_kerja',$where);
		$data_peralatan = array();
		foreach ($data['data_peralatan'] as $r) {
			$data_peralatan[] = $r['kode_peralatan_kerja'];
		}

		echo json_encode($data_peralatan);
	}
	function approval($uniq){
		$where_project = array(
			'uniqid' => $uniq
		);
		$data['project'] = $this->database_model->get_where('tb_project',$where_project);
		foreach ($data['project'] as $a) {
			$kode = $a['kode_project'];
		}
		if ($this->session->userdata('kode_divisi') ==1) {
			$status = 'send';
		}else{
			$status = 'approve';
		}
		if ($this->session->userdata('kode_divisi') == 1) {
			$berkas_terakhir = array(
				'kode_project' => $kode,
				'kode_divisi' => $this->session->userdata('kode_divisi'),
				'parent_divisi' => $this->session->userdata('parent_divisi'),
				'tgl' => date('Y-m-d H:i:s')
			);
			$this->database_model->insert('tb_berkas_terakhir',$berkas_terakhir);
		}else{
			$data['cek_berkas'] = $this->database_model->get_where('tb_berkas_terakhir',array('kode_project'=> $kode,'kode_divisi'=> $this->session->userdata('kode_divisi')));
			if (count($data['cek_berkas']) == 0) {
				$data['cek_ttd'] = $this->database_model->get_where('tb_berkas_terakhir',array('kode_project'=> $kode,'kode_divisi'=> $this->session->userdata('child_divisi')));
				if (count($data['cek_ttd']) == 0) {
					echo "Maaf anda belum bisa ttd saat ini sebelum yang dibawah ttd";
				}else{
					$berkas_terakhir = array(
						'kode_project' => $kode,
						'kode_divisi' => $this->session->userdata('kode_divisi'),
						'parent_divisi' => $this->session->userdata('parent_divisi'),
						'tgl' => date('Y-m-d H:i:s')
					);
					$this->database_model->insert('tb_berkas_terakhir',$berkas_terakhir);
				}
				
			}
		}

		$data_approval = array(
			'kode_project' => $kode,
			'kode_user' => $this->session->userdata('kode_user'),
			'type' => $status,
			'tgl' => date('Y-m-d H:i:s')
		);
		$this->database_model->insert('tb_approval',$data_approval);
		$data_project = array(
			'status' => 'pending'
		);
		$this->database_model->update_project($kode,$data_project);
		$where_user = array(
			'kode_user' => $this->session->userdata('kode_user'),
			'kode_project' => $kode,
		);
		$data_status = array(
			'status_project' => 'approve'
		);
		$this->database_model->update('tb_status_project',$data_status,$where_user);
		redirect('Rencana');
	}		

}

 ?>