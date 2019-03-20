<?php 

/**
 * 
 */
class test_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function get_atasan($data){
		$this->db->select('*');
		$this->db->from('tb_users');
		$this->db->join('tb_divisi','tb_divisi.kode_divisi = tb_users.kode_divisi');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	function get_divisi_approval($data){
		$this->db->select('*');
		$this->db->from('tb_divisi');
		$this->db->join('tb_users','tb_users.kode_divisi = tb_divisi.kode_divisi');
		$this->db->join('tb_status_project','tb_status_project.kode_user = tb_users.kode_user');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();
	}
	

}
 ?>