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
	function get_max_id_project(){
		$query = $this->db->query("SELECT IFNULL(MAX(SUBSTR(kode_project,3,3)),0)+1 as kode FROM tb_project");
		return $query->result_array($query);

	}
}

 ?>