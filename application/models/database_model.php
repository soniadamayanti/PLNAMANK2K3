<?php 
/**
 * 
 */
class Database_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function get($table){
		$query = $this->db->get($table);
		return $query->result_array();
	}
	function insert($table,$data){
		$this->db->insert($table,$data);
	}
	function get_max_id_project($jenis){
		$query = $this->db->query("SELECT IFNULL(MAX(SUBSTR(kode_project,3,3)),0)+1 as kode FROM tb_project WHERE jenis_project='$jenis'");
		return $query->result_array($query);

	}
	function get_where($table,$data){
		$this->db->where($data);
		$query = $this->db->get($table);
		return $query->result_array();
	}
	function select_where($select, $table,$data){
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();
	}
	function update($table,$data,$where){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function cek_data(){
		$this->db->where($data);
		$query = $this->db->get($table);
		return $query->result_array();
	}
	function project_rencana($data){
		$this->db->select('*');
		$this->db->from('tb_project');
		$this->db->join('tb_sld','tb_project.kode_line = tb_sld.kode_sld');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();
	}
	function get_atasan($data){
		$this->db->select('*');
		$this->db->from('tb_users');
		$this->db->join('tb_divisi','tb_divisi.kode_divisi = tb_users.kode_divisi');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();
	}
	function login($data){
		$this->db->select('*');
		$this->db->from('tb_users');
		$this->db->join('tb_divisi','tb_divisi.kode_divisi = tb_users.kode_divisi');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();
	}
	function get_temp_uraian($kode){
		$this->db->where('kode_project',$kode);
        return $this->db->get("tb_temp_uraian_pekerjaan");
	}
	function get_det_uraian($kode){
		$this->db->where('kode_project',$kode);
        return $this->db->get("tb_det_uraian_pekerjaan");
	}
	function get_temp_pelaksana($kode){
		$this->db->select('*');
		$this->db->from('tb_pelaksana');
		$this->db->join('tb_temp_pelaksana','tb_temp_pelaksana.kode_pelaksana = tb_pelaksana.kode_pelaksana');
        $this->db->where('tb_temp_pelaksana.kode_project',$kode);
        return $this->db->get();
	}
	function get_det_pelaksana($kode){
		$this->db->select('*');
		$this->db->from('tb_pelaksana');
		$this->db->join('tb_det_pelaksana','tb_det_pelaksana.kode_pelaksana = tb_pelaksana.kode_pelaksana');
        $this->db->where('tb_det_pelaksana.kode_project',$kode);
        return $this->db->get();
	}

	function get_det_pekerja($kode){
		$this->db->select('*');
		$this->db->from('tb_pelaksana_pekerja');
		$this->db->join('tb_det_pekerja','tb_det_pekerja.kode_user = tb_pelaksana_pekerja.kode_pelaksana_pekerja');
        $this->db->where('tb_det_pekerja.kode_project',$kode);
        return $this->db->get();
	}
	function update_project($kode_project,$data){
		$this->db->where('kode_project',$kode_project);
		$this->db->update('tb_project',$data);
	}
	function delete($table,$where,$kode){
		$this->db->where($where,$kode);
		$this->db->delete($table);
	}
	function delete_detail($table,$data){
		$this->db->where($data);
		$this->db->delete($table);	
	}
	function detail_project($uniqid){
		$this->db->select('*,tb_project.kode_user as user,SUBSTR(tb_project.tgl_pelaksanaan,1,10) as tgl,DATE_FORMAT(tgl_pelaksanaan,"%H:%i") as jam_pelaksanaan,DATE_FORMAT(tgl_pelaksanaan,"%H:%i") as jam_selesai');
		$this->db->from('tb_project');
		$this->db->join('tb_sld','tb_sld.kode_sld=tb_project.kode_line');
		$this->db->join('tb_jenis_pekerjaan','tb_project.kode_jenis_pekerjaan=tb_jenis_pekerjaan.kode_jenis_pekerjaan');
		$this->db->where('tb_project.uniqid',$uniqid);
		$query = $this->db->get();
		return $query->result_array();
	}
	function data_project(){
		$this->db->select('*,SUBSTR(tb_project.tgl_pelaksanaan,1,10) as tgl');
		$this->db->from('tb_project');
		$this->db->join('tb_sld','tb_sld.kode_sld=tb_project.kode_line');
		$this->db->join('tb_jenis_pekerjaan','tb_project.kode_jenis_pekerjaan=tb_jenis_pekerjaan.kode_jenis_pekerjaan');
		$query = $this->db->get();
		return $query->result_array();
	}
	function detail_pelaksana($kode){
		$this->db->select('*');
		$this->db->from('tb_pelaksana');
		$this->db->join('tb_det_pelaksana','tb_pelaksana.kode_pelaksana = tb_det_pelaksana.kode_pelaksana');
		$this->db->where('kode_project',$kode);
		$query = $this->db->get();
		return $query->result_array();
	}
	function detail_pekerja($kode){
		$this->db->select('*');
		$this->db->from('tb_pelaksana_pekerja');
		$this->db->join('tb_det_pekerja','tb_pelaksana_pekerja.kode_pelaksana_pekerja = tb_det_pekerja.kode_user');
		$this->db->where('kode_project',$kode);
		$query = $this->db->get();
		return $query->result_array();
	}
	function detail_klasifikasi($kode){
		$this->db->select('*');
		$this->db->from('tb_klasifikasi_kerja');
		$this->db->join('tb_det_klasifikasi','tb_klasifikasi_kerja.kode_klasifikasi_kerja = tb_det_klasifikasi.kode_klasifikasi_kerja');
		$this->db->where('kode_project',$kode);
		$query = $this->db->get();
		return $query->result_array();

	}
	function detail_prosedur_kerja($kode){
		$this->db->select('*');
		$this->db->from('tb_prosedur_kerja');
		$this->db->join('tb_det_prosedur_kerja','tb_prosedur_kerja.kode_prosedur_kerja = tb_det_prosedur_kerja.kode_prosedur_kerja');
		$this->db->where('kode_project',$kode);
		$query = $this->db->get();
		return $query->result_array();

	}
	function detail_lampiran_izin_kerja($kode){
		$this->db->select('*');
		$this->db->from('tb_lampiran_izin_kerja');
		$this->db->join('tb_det_lampiran_izin_kerja','tb_lampiran_izin_kerja.kode_lampiran_izin_kerja = tb_det_lampiran_izin_kerja.kode_lampiran_izin_kerja');
		$this->db->where('kode_project',$kode);
		$query = $this->db->get();
		return $query->result_array();

	}
	function detail_peralatan($kode){
		$this->db->select('*');
		$this->db->from('tb_peralatan_kerja');
		$this->db->join('tb_det_peralatan_kerja','tb_peralatan_kerja.kode_peralatan_kerja = tb_det_peralatan_kerja.kode_peralatan_kerja');
		$this->db->where($kode);
		$query = $this->db->get();
		return $query->result_array();

	}
	function cek_approval($kode,$divisi){
		$this->db->select('*');
		$this->db->from('tb_approval');
		$this->db->join('tb_users','tb_approval.kode_user = tb_users.kode_user');
		$this->db->where('tb_approval.kode_project',$kode);
		$this->db->where('tb_users.kode_divisi',$divisi);

		$query = $this->db->get();
		return $query->result_array();
	}
	function get_pelaksana_kerja($kode){
		
		$query = $this->db->query("SELECT tb_det_pelaksana.kode_pelaksana,tb_pelaksana_pekerja.nama_pelaksana_pekerja,tb_pelaksana_pekerja.kode_pelaksana_pekerja, tb_pelaksana.nama_pelaksana FROM `tb_pelaksana_pekerja` INNER JOIN tb_det_pelaksana ON tb_det_pelaksana.kode_pelaksana = tb_pelaksana_pekerja.kode_pelaksana INNER JOIN tb_pelaksana ON tb_pelaksana_pekerja.kode_pelaksana = tb_pelaksana.kode_pelaksana WHERE tb_det_pelaksana.kode_project ='$kode' ORDER BY tb_pelaksana.nama_pelaksana ASC");

		return $query->result_array();
	}
	function cek_ttd($id){
		$this->db->where('kode_divisi',$id);
		$query = $this->db->get('tb_berkas_terakhir');
		return $query->result_array();
	}

}

 ?>