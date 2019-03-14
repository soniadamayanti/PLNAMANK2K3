<?php 
/**
 * 
 */
class database_mode extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function get($table){
        $query = $this->db->get($table);
        return $query->result_array();
	}
}

 ?>