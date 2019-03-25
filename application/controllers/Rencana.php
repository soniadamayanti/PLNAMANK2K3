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
		date_default_timezone_set('Asia/Jakarta');
	}
	function index(){
		$data['cek_berkas'] = $this->database_model->get_where('tb_berkas_terakhir',array('kode_user' => $this->session->userdata('kode_user')));
		$data['cek_setuju'] = $this->database_model->get_where('tb_berkas_terakhir',array('divisi_tujuan' => $this->session->userdata('kode_divisi')));
		if ($this->session->userdata('kode_divisi') == 1) {
			$data['data_project'] = $this->database_model->get_where('tb_project',array(
				'kode_user'=>$this->session->userdata('kode_user'),
				'status !=' => 'sukses'));	
		}else{
			$data['data_project'] = $this->database_model->get_where('tb_project',array('tb_project.status'=>'pending'));	
		}
			
		$data['jml_project'] = count($data['data_project']);
		$data['judul'] = "Data Rencana Kerja";
	    $data['new'] = "
	    ";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_data_kerja', $data);
		$this->load->view('parts/footer', $data);
	}
	function pembatalan(){
		$data['cek_berkas'] = $this->database_model->get_where('tb_berkas_terakhir',array('kode_user' => $this->session->userdata('kode_user')));
			$data['data_project'] = $this->db->query('SELECT * FROM tb_project WHERE status="denied" OR status="failed"')->result_array();	
			
		$data['jml_project'] = count($data['data_project']);
		$data['judul'] = "Data Rencana Kerja";
	    $data['new'] = "
	    ";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_data_pembatalan', $data);
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
		foreach ($data['kode_project'] as $v) {
			$kode_project = $v['kode_project'];
		}
		$data['pelaksana_pekerja'] = $this->database_model->get('tb_pelaksana_pekerja');
		$data['atasan'] = $this->database_model->get_atasan($where_atasan);
		$data['pengawas_k3'] = $this->database_model->get_atasan($where_pengawas_k3);
	    $data['perlindungan'] =$this->database_model->get_where('tb_peralatan_kerja',$wpk1);
	    $data['tenaga_kerja'] =$this->database_model->get_pelaksana_kerja($kode_project);
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
		$a = array(
			'kode_pelaksana' => $kode_pelaksana,
			'kode_project' => $kode_project
		);
		$data['cek'] = $this->database_model->get_where('tb_det_pelaksana',$a);
		if (count($data['cek']) == 0) {
			$this->database_model->insert('tb_det_pelaksana',$a);
			$data['hore'] = $this->database_model->get_pelaksana_kerja($kode_project);
			$array_data_pelaksana = array();
			foreach ($data['hore'] as $a) {
			 
			echo '<div class="col-md-4">
	                <div class="custom-control custom-checkbox">
	                    <input type="checkbox" class="custom-control-input peralatan" value="'.$a['kode_pelaksana_pekerja'].'" name="tenaga_kerja" id="tk'.$a['kode_pelaksana_pekerja'].'">
	                    <label class="custom-control-label" for="tk'.$a['kode_pelaksana_pekerja'].'">'.$a['nama_pelaksana_pekerja'].'- <b>'.$a['nama_pelaksana'].'</b></label>
	                </div>
	            </div> '; 
			}
		}else{
			echo "Data sudah dimasukan";
		}
		
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
		$segment = $this->input->post('segment'); 
		$kode_line = $this->input->post('kode_line'); 
		$lampiran_izin = $this->input->post('lampiran_izin'); 
		$klasifikasi = $this->input->post('klasifikasi'); 
		$prosedur_kerja = $this->input->post('prosedur_kerja'); 
		$perlindungan = $this->input->post('perlindungan'); 
		$keselamatan = $this->input->post('keselamatan'); 
		$mulai_fix = $tgl_mulai. " ".$jam_mulai.":00";
		$selesai_fix = $tgl_selesai. " ".$jam_selesai.":00";
		$tenaga_kerja = $this->input->post('tenaga_kerja');
		
		$data_project = array(
			'kode_jenis_pekerjaan' => $kode_jenis_pekerjaan,
			'tgl_project' => date('Y-m-d H:i:s'),
			'tgl_pengajuan' => $tgl_pengajuan,
			'tgl_pelaksanaan' => $mulai_fix,
			'segment' => $segment,
			'tgl_selesai' => $selesai_fix,
			'tegangan' => $tegangan,
			'alamat_project' => $alamat_project,
			'jml_tenaga_kerja' => 0,
			'material' => $material,
			'peralatan_kerja' => $peralatan_kerja,
			'gardu'=> $gardu,
			'kode_line'=> $kode_line,
			'status' => 'new',
			'last_modified' => date('Y-m-d H:i:s'),
			'last_modified_user' => $this->session->userdata('kode_user')
		);
		$this->database_model->update_project($kode_project,$data_project);

		if (isset($klasifikasi)) {
			$this->database_model->delete_detail('tb_det_klasifikasi',array('kode_project'=>$kode_project));
			foreach ($klasifikasi as $data) {
				$array = array(
					'kode_project' => $kode_project,
					'kode_klasifikasi_kerja' => $data
				);
				$this->database_model->insert('tb_det_klasifikasi',$array);
			}	
		}
		if (isset($prosedur_kerja)) {
			$this->database_model->delete_detail('tb_det_prosedur_kerja',array('kode_project'=>$kode_project));
			foreach ($prosedur_kerja as $data) {
				$array = array(
					'kode_project' => $kode_project,
					'kode_prosedur_kerja' => $data
				);
				$this->database_model->insert('tb_det_prosedur_kerja',$array);
			}
		}
		if (isset($lampiran_izin)) {
			$this->database_model->delete_detail('tb_det_lampiran_izin_kerja',array('kode_project'=>$kode_project));
			foreach ($lampiran_izin as $data) {
				$array = array(
					'kode_project' => $kode_project,
					'kode_lampiran_izin_kerja' => $data
				);
				$this->database_model->insert('tb_det_lampiran_izin_kerja',$array);
			}
		}
		if (isset($keselamatan) && isset($perlindungan)) {
			$this->database_model->delete_detail('tb_det_peralatan_kerja',array('kode_project'=>$kode_project));
			foreach ($keselamatan as $data) {
				$array = array(
					'kode_project' => $kode_project,
					'kode_peralatan_kerja' => $data
				);
				$this->database_model->insert('tb_det_peralatan_kerja',$array);
			}
			foreach ($perlindungan as $data) {
				$array = array(
					'kode_project' => $kode_project,
					'kode_peralatan_kerja' => $data
				);
				$this->database_model->insert('tb_det_peralatan_kerja',$array);
			}

		}if (isset($tenaga_kerja)) {
			$this->database_model->delete_detail('tb_det_pekerja',array('kode_project'=>$kode_project));
			foreach ($tenaga_kerja as $data) {
				$array = array(
					'kode_project' => $kode_project,
					'kode_user' => $data
				);
				$this->database_model->insert('tb_det_pekerja',$array);
			}
		}
		
		
		echo 1;
	}
	function insert_project($jenis){
		$lokasi = $this->session->userdata('lokasi');
		$kota = strtoupper($lokasi);
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
	    ";
		$data['judul'] = "Rencana Kerja DItolak";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_data_kerja_ditolak', $data);
		$this->load->view('parts/footer', $data);
	}
	function selesai(){
	    $data['new'] = "
	    ";
		$data['judul'] = "Rencana Kerja Selesai";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/menu', $data);
		$this->load->view('pages/v_data_kerja_selesai', $data);
		$this->load->view('parts/footer', $data);
	}
	function dibatalkan(){
	    $data['new'] = "
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
	function failed(){
		$uniq = $this->input->post('uniqid');
		$keterangan = $this->input->post('keterangan');
		$where_project = array(
			'uniqid' => $uniq
		);
		$data['project'] = $this->database_model->get_where('tb_project',$where_project);
		foreach ($data['project'] as $a) {
			$kode = $a['kode_project'];
		}
		$array_status_project = array(
			'status_project' => 'failed',
		);
		$array_penyelesaian = array(
			'status' => 'failed',
			'keterangan' => $keterangan
		);
		$this->database_model->update('tb_status_project',$array_status_project,array('kode_project'=> $kode, 'kode_user'=> $this->session->userdata('kode_user')));
		$this->database_model->update('tb_project',$array_penyelesaian,array('kode_project'=>$kode));
		echo 1;
	}
	function beres(){
		$uniqid = $this->input->post('uniqid');
		$array_penyelesaian = array(
			'status' => 'success'
		);
		$this->database_model->update('tb_project',$array_penyelesaian,array('uniqid'=>$uniqid));
		echo 1;	
	}
	function get_selesai(){
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));
          
          $project['data_project'] = $this->database_model->get_data_selesai();

          $data = array();
          foreach($project['data_project'] as $r) {

      		if ($this->session->userdata('kode_divisi') == 3){
      			if ($r['status'] == 'pending') {
		      		$button = 
		      		anchor('Rencana/penyelesaian/'.$r['uniqid'],'Penyelesaian','class="btn btn-success" ');
      			}else if  ($r['status'] == 'success'){
          		$button = anchor('Download/printPDF/'.$r['uniqid'],'<i class="ti-printer"></i> PDF','class="btn btn-info"');

      			}else{
          		$button ="";

      			}
      			
      		}else{
      			if ($r['status'] == 'success') {
          		$button = anchor('Download/printPDF/'.$r['uniqid'],'<i class="ti-printer"></i> PDF','class="btn btn-info"');
          		}else{
          			$button ="";
          		}
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
          	$button = '<button type="button" class="btn waves-effect waves-light btn-danger" kode_project="'.$r->kode_project.'" id_other="'.$r->kode_pelaksana.'" id="btnHapusDetail" status="temp_pelaksana"><i class="mdi mdi-delete"></i></button>
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
	          <button type="button" class="btn waves-effect waves-light btn-danger" kode_project="'.$r->kode_project.'" id_other="'.$r->kode_uraian_pekerjaan.'" id="btnHapusDetail" status="temp_uraian_pekerjaan"><i class="mdi mdi-delete"></i></button>
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
	function get_checked_tenaga_kerja(){
		$where = array(
			'kode_project' => $this->input->post('kode_project')
		);
		$data['data_pelaksana'] = $this->database_model->get_where('tb_det_pekerja',$where);
		$data_pelaksana = array();
		foreach ($data['data_pelaksana'] as $r) {
			$data_pelaksana[] = $r['kode_user'];
		}
		echo json_encode($data_pelaksana);
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
	function kirim(){
		$uniq = $this->input->post('uniqid');
		$where_project = array(
			'uniqid' => $uniq
		);
		$data['project'] = $this->database_model->get_where('tb_project',$where_project);
		foreach ($data['project'] as $a) {
			$kode = $a['kode_project'];
		}
		$data['cek_approval'] = $this->database_model->cek_data('tb_approval',array('kode_project'=> $kode));
		$array_pending = array(
			'status_project' => 'pending'
		);
		$this->database_model->update('tb_status_project',$array_pending,array('kode_project'=>$kode));
		$array_berkas_terakhir = array(
			'kode_project' => $kode,
			'kode_user' => $this->session->userdata('kode_user'),
			'divisi_tujuan' => $this->session->userdata('parent_divisi'),
			'tgl' => date('Y-m-d H:i:s')
		);
		$array_approval = array(
			'kode_project' => $kode,
			'kode_user' => $this->session->userdata('kode_user'),
			'type' => 'approve',
			'tgl' => date('Y-m-d H:i:s')
		);
		$array_status_project = array(
			'status_project' => 'approve'
		);
		$array_project = array(
			'status' => 'pending',
			'tgl_approval' => date('Y-m-d H:i:s')
		);

		$this->database_model->insert('tb_berkas_terakhir',$array_berkas_terakhir);
		if (count($data['cek_approval']) > 0) {
			$this->database_model->update('tb_approval',array('type'=>'pending'),array('kode_project' => $kode));
		}else{
			$this->database_model->insert('tb_approval',$array_approval);	
		}
		$this->database_model->update('tb_status_project',$array_status_project,array('kode_project' => $kode, 'kode_user' => $this->session->userdata('kode_user')));
		$this->database_model->update('tb_project',$array_project,array('kode_project'=> $kode));
		echo 1;
	}
	function approval(){
		$uniq = $this->input->post('uniqid');
		$where_project = array(
			'uniqid' => $uniq
		);
		$data['project'] = $this->database_model->get_where('tb_project',$where_project);
		foreach ($data['project'] as $a) {
			$kode = $a['kode_project'];
		}
		$data['cek_ttd'] = $this->database_model->cek_ttd($this->session->userdata('kode_divisi'),$kode);
		if (count($data['cek_ttd']) == 1) {
			$data['cek_ttd_anda'] = $this->database_model->get_where('tb_approval',
				array(
					'kode_project' => $kode, 
					'kode_user' => $this->session->userdata('kode_user'),
					'type !='=> 'pending'
				)
			);
			if (count($data['cek_ttd_anda']) == 1) {
				echo "Anda sudah menyetujui berkas ini";
			}else{
				$array_berkas_terakhir = array(
					'kode_project' => $kode,
					'kode_user' => $this->session->userdata('kode_user'),
					'divisi_tujuan' => $this->session->userdata('parent_divisi'),
					'tgl' => date('Y-m-d H:i:s')
				);
				$array_approval = array(
					'kode_project' => $kode,
					'kode_user' => $this->session->userdata('kode_user'),
					'type' => 'approve',
					'tgl' => date('Y-m-d H:i:s')
				);
				$array_status_project = array(
					'status_project' => 'approve',
					'tgl' => date('Y-m-d H:i:s')
				);
				$this->database_model->update('tb_berkas_terakhir',$array_berkas_terakhir,array('kode_project'=>$kode));
				$this->database_model->insert('tb_approval',$array_approval);
				$this->database_model->update('tb_status_project',$array_status_project,array('kode_project' => $kode, 'kode_user' => $this->session->userdata('kode_user')));
			}
			echo 1;
		}else{
			echo "Anda blm bisa ttd";
			
		}
		
	}
	function delete_detail(){
		$kode_project = $this->input->post('kode_project');
		$id_other = $this->input->post('id_other');
		$status = $this->input->post('status');
		$table = str_replace('temp', 'tb_det', $status);
		$kolom = str_replace('temp', 'kode', $status);
		$array = array(
			'kode_project'=> $kode_project,
			$kolom => $id_other
		);
		$this->database_model->delete_detail($table,$array);
	}
	function tolak(){
		$uniq = $this->input->post('uniqid');
		$keterangan = $this->input->post('keterangan');
		$where_project = array(
			'uniqid' => $uniq
		);
		$data['project'] = $this->database_model->get_where('tb_project',$where_project);
		foreach ($data['project'] as $a) {
			$kode = $a['kode_project'];
			$kode_user = $a['kode_user'];
		}
		$data['cek_ttd'] = $this->database_model->cek_ttd($this->session->userdata('kode_divisi'),$kode);
			if (count($data['cek_ttd']) > 0) {
				$data['cek_ttd_anda'] = $this->database_model->get_where('tb_approval',
					array(
						'kode_project' => $kode, 
						'kode_user' => $this->session->userdata('kode_user'),
					)
				);
				if (count($data['cek_ttd_anda']) == 1) {
					echo 2;
				}else{

					$array_berkas_terakhir = array(
						'kode_project' => $kode,
						'kode_user' => $this->session->userdata('kode_divisi'),
						'divisi_tujuan' => '1',
						'tgl' => date('Y-m-d H:i:s')
					);
					$array_approval = array(
						'kode_project' => $kode,
						'kode_user' => $this->session->userdata('kode_user'),
						'type' => 'denied',
						'tgl' => date('Y-m-d H:i:s')
					);
					$array_status_project = array(
						'status_project' => 'denied'
					);
					$array_project = array(
						'status' => 'denied',
						'keterangan' => $keterangan
					);
					$this->database_model->update('tb_berkas_terakhir',$array_berkas_terakhir,array('kode_project' => $kode));
					$this->database_model->insert('tb_approval',$array_approval);
					$this->database_model->update('tb_status_project',$array_status_project,array('kode_project' => $kode, 'kode_user' => $this->session->userdata('kode_user')));
					$this->database_model->update('tb_project',$array_project,array('kode_project'=>$kode));
					$this->database_model->update('tb_status_project',array('status'=> 'pending'),array('kode_user'=> $kode_user,'kode_project'=> $kode));
					echo 1;
				}
				
			}else{
				echo "Anda blm bisa ttd";
				
			}
	}
	function finish($uniq){
		$keterangan = $this->input->post('keterangan');
		$array_penyelesaian = array(
			'keterangan' => $keterangan,
			'status' => 'success'
		);
		$this->database_model->update('tb_project',$array_penyelesaian,array('uniqid' => $uniq));
		redirect('Rencana/selesai');
	}
	
    function review(){
        $uniqid = $this->uri->segment(3);
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
        ";
        $data['pelaksana_pekerja'] = $this->database_model->get('tb_pelaksana_pekerja');
        $data['atasan'] = $this->database_model->get_atasan($where_atasan);
        $data['judul'] = "Penyelesaian";
        
        $this->load->view('parts/header', $data);
        $this->load->view('parts/menu', $data);
        $this->load->view('pages/v_review_rencana',compact('data','uniqid'));
        $this->load->view('parts/footer', $data);
    }
}

 ?>