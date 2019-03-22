<?php 
/**
 * 
 */
class Arsip_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function get_arsip_sld(){
        return $this->db->get("tb_sld");
	}
	function get_arsip_gardu_induk(){
        return $this->db->get("tb_gardu_induk");
	}
	function get_arsip_jenis_pekerjaan(){
        return $this->db->get("tb_jenis_pekerjaan");
	}function get_arsip_perusahaan_pelaksana(){
        return $this->db->get("tb_pelaksana");
	}

}

 ?>