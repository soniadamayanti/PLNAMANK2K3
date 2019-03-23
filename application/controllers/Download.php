<?php 
/**
 * 
 */
class Download extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('database_model');
	}
    function index(){
        $data['judul'] = "Download";
        $this->load->view('d_rencana', $a);
    }
    function penyelesaian(){
        $id = $this->uri->segment(3);
        $where = array(
          'uniqid' => $id
        );
        $a['detail_project'] = $this->database_model->get_where('tb_project',$where);
        foreach ($a['detail_project'] as $detail_project) {
          $kode = $detail_project['kode_project'];
        }
        $dimana = array(
          'kode_project' => $kode
        );
        $a['data_user'] = $this->db->query('SELECT s.*,u.nama_user,u.kode_divisi,d.nama_divisi FROM tb_status_project s INNER JOIN (tb_users u INNER JOIN tb_divisi d ON u.kode_divisi=d.kode_divisi) ON u.kode_user = s.kode_user WHERE kode_project = "'.$kode.'" ORDER BY kode_divisi ASC');

        $a['uraian_pekerjaan'] = $this->database_model->get_where('tb_det_uraian_pekerjaan',$dimana);
        $a['detail_pekerja'] = $this->database_model->detail_pekerja($kode);
        $a['ttd_pekerja'] = $this->database_model->detail_pekerja($kode);
        $a['detail_pelaksana'] = $this->database_model->detail_pelaksana($kode);
        $a['detail_pelaksana2'] = $this->database_model->detail_pelaksana($kode);
        $a['detail_pelaksana3'] = $this->database_model->detail_pelaksana($kode);
        $a['detail_klasifikasi'] = $this->database_model->detail_klasifikasi($kode);
        $a['detail_prosedur_kerja'] = $this->database_model->detail_prosedur_kerja($kode);
        $a['detail_lampiran_izin_kerja'] = $this->database_model->detail_lampiran_izin_kerja($kode);
        $a['detail_keselamatan'] = $this->database_model->detail_peralatan(array('kode_project' => $kode,'type'=>'Keselamatan'));
        $a['detail_perlindungan'] = $this->database_model->detail_peralatan(array('kode_project' => $kode,'type'=>'Perlindungan'));
        $a['project'] = $this->database_model->detail_project($id);
        
        $data['judul'] = "Penyelesaian";
        $this->load->view('d_penyelesaian', $a);
    }

	function rencana_kerja(){
        $id = $this->uri->segment(3);
        $where = array(
          'uniqid' => $id
        );
        $a['detail_project'] = $this->database_model->get_where('tb_project',$where);
        foreach ($a['detail_project'] as $detail_project) {
          $kode = $detail_project['kode_project'];
        }
        $dimana = array(
          'kode_project' => $kode
        );
        $a['data_user'] = $this->db->query('SELECT s.*,u.nama_user,u.kode_divisi,d.nama_divisi FROM tb_status_project s INNER JOIN (tb_users u INNER JOIN tb_divisi d ON u.kode_divisi=d.kode_divisi) ON u.kode_user = s.kode_user WHERE kode_project = "'.$kode.'" ORDER BY kode_divisi ASC');

        $a['uraian_pekerjaan'] = $this->database_model->get_where('tb_det_uraian_pekerjaan',$dimana);
        $a['detail_pekerja'] = $this->database_model->detail_pekerja($kode);
        $a['ttd_pekerja'] = $this->database_model->detail_pekerja($kode);
        $a['detail_pelaksana'] = $this->database_model->detail_pelaksana($kode);
        $a['detail_pelaksana2'] = $this->database_model->detail_pelaksana($kode);
        $a['detail_pelaksana3'] = $this->database_model->detail_pelaksana($kode);
        $a['detail_klasifikasi'] = $this->database_model->detail_klasifikasi($kode);
        $a['detail_prosedur_kerja'] = $this->database_model->detail_prosedur_kerja($kode);
        $a['detail_lampiran_izin_kerja'] = $this->database_model->detail_lampiran_izin_kerja($kode);
        $a['detail_keselamatan'] = $this->database_model->detail_peralatan(array('kode_project' => $kode,'type'=>'Keselamatan'));
        $a['detail_perlindungan'] = $this->database_model->detail_peralatan(array('kode_project' => $kode,'type'=>'Perlindungan'));
        $a['project'] = $this->database_model->detail_project($id);

    	$data['judul'] = "Download";
    	$this->load->view('d_rencana', $a);
	}

    function hirarc(){
        $id = $this->uri->segment(3);
        $where = array(
          'uniqid' => $id
        );
        $a['detail_project'] = $this->database_model->get_where('tb_project',$where);
        foreach ($a['detail_project'] as $detail_project) {
          $kode = $detail_project['kode_project'];
        }
        $dimana = array(
          'kode_project' => $kode
        );
        $a['data_user'] = $this->db->query('SELECT s.*,u.nama_user,u.kode_divisi,d.nama_divisi FROM tb_status_project s INNER JOIN (tb_users u INNER JOIN tb_divisi d ON u.kode_divisi=d.kode_divisi) ON u.kode_user = s.kode_user WHERE kode_project = "'.$kode.'" ORDER BY kode_divisi ASC');

        $a['uraian_pekerjaan'] = $this->database_model->get_where('tb_det_uraian_pekerjaan',$dimana);
        $a['detail_pekerja'] = $this->database_model->detail_pekerja($kode);
        $a['ttd_pekerja'] = $this->database_model->detail_pekerja($kode);
        $a['detail_pelaksana'] = $this->database_model->detail_pelaksana($kode);
        $a['detail_pelaksana2'] = $this->database_model->detail_pelaksana($kode);
        $a['detail_pelaksana3'] = $this->database_model->detail_pelaksana($kode);
        $a['detail_klasifikasi'] = $this->database_model->detail_klasifikasi($kode);
        $a['detail_prosedur_kerja'] = $this->database_model->detail_prosedur_kerja($kode);
        $a['detail_lampiran_izin_kerja'] = $this->database_model->detail_lampiran_izin_kerja($kode);
        $a['detail_keselamatan'] = $this->database_model->detail_peralatan(array('kode_project' => $kode,'type'=>'Keselamatan'));
        $a['detail_perlindungan'] = $this->database_model->detail_peralatan(array('kode_project' => $kode,'type'=>'Perlindungan'));
        $a['project'] = $this->database_model->detail_project($id);

        $data['judul'] = "Download";
        $this->load->view('d_hirarc', $a);
    }
    public function printPDF($id){
        $where = array(
          'uniqid' => $id
        );
        $where = array(
              'uniqid' => $id
        );
        $a['detail_project'] = $this->database_model->get_where('tb_project',$where);
        foreach ($a['detail_project'] as $detail_project) {
          $kode = $detail_project['kode_project'];
        }
        $dimana = array(
          'kode_project' => $kode
        );
        $a['data_user'] = $this->db->query('SELECT s.*,u.nama_user,u.kode_divisi,d.nama_divisi FROM tb_status_project s INNER JOIN (tb_users u INNER JOIN tb_divisi d ON u.kode_divisi=d.kode_divisi) ON u.kode_user = s.kode_user WHERE kode_project = "'.$kode.'" ORDER BY kode_divisi ASC');

        $a['uraian_pekerjaan'] = $this->database_model->get_where('tb_det_uraian_pekerjaan',$dimana);
        $a['detail_pekerja'] = $this->database_model->detail_pekerja($kode);
        $a['ttd_pekerja'] = $this->database_model->detail_pekerja($kode);
        $a['detail_pelaksana'] = $this->database_model->detail_pelaksana($kode);
        $a['detail_pelaksana2'] = $this->database_model->detail_pelaksana($kode);
        $a['detail_pelaksana3'] = $this->database_model->detail_pelaksana($kode);
        $a['detail_klasifikasi'] = $this->database_model->detail_klasifikasi($kode);
        $a['detail_prosedur_kerja'] = $this->database_model->detail_prosedur_kerja($kode);
        $a['detail_lampiran_izin_kerja'] = $this->database_model->detail_lampiran_izin_kerja($kode);
        $a['detail_keselamatan'] = $this->database_model->detail_peralatan(array('kode_project' => $kode,'type'=>'Keselamatan'));
        $a['detail_perlindungan'] = $this->database_model->detail_peralatan(array('kode_project' => $kode,'type'=>'Perlindungan'));
        $a['project'] = $this->database_model->detail_project($id);
        $data = $this->load->view('d_rencana', $a, TRUE);
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
        $stylesheet = file_get_contents('assets/css/grid.css');
        $mpdf->WriteHTML($stylesheet,1);
        $mpdf->AddPage('P','','','','',15,15,15,15,10,10);
        $mpdf->WriteHTML($data,2);
        $mpdf->AddPage('L','','','','',5,5,10,5,10,10);
        $data2 = $this->load->view('d_hirarc', [], TRUE);
        $mpdf->WriteHTML($data2,3);
        $mpdf->AddPage('P','','','','',15,15,15,15,10,10);
        $data3 = $this->load->view('d_penyelesaian', [], TRUE);
        $mpdf->WriteHTML($data3,3);
        $mpdf->Output();
      }
}

 ?>