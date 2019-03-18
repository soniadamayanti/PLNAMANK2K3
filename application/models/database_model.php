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
	function cek_data(){
		$this->db->where($data);
		$query = $this->db->get($table);
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
	function get_temp_pelaksana($kode){
		$this->db->select('*');
		$this->db->from('tb_pelaksana');
		$this->db->join('tb_temp_pelaksana','tb_temp_pelaksana.kode_pelaksana = tb_pelaksana.kode_pelaksana');
        $this->db->where('tb_temp_pelaksana.kode_project',$kode);
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
	function detail_project($uniqid){
		$this->db->select('*,SUBSTR(tb_project.tgl_pelaksanaan,1,10) as tgl');
		$this->db->from('tb_project');
		$this->db->join('tb_sld','tb_sld.kode_sld=tb_project.kode_line');
		$this->db->join('tb_jenis_pekerjaan','tb_project.kode_jenis_pekerjaan=tb_jenis_pekerjaan.kode_jenis_pekerjaan');
		$this->db->where('tb_project.uniqid',$uniqid);
		$query = $this->db->get();
		return $query->result_array();
	}

}

 ?>