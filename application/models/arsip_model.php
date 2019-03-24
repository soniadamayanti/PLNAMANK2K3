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
		$this->db->select('*');
		$this->db->from('tb_sld');
		$this->db->join('tb_gardu_induk','tb_gardu_induk.kode_gardu_induk = tb_sld.kode_gardu_induk');
		return $this->db->get();
	}
	function get_arsip_gardu_induk(){
        return $this->db->get("tb_gardu_induk");
	}
	function get_arsip_jenis_pekerjaan(){
        return $this->db->get("tb_jenis_pekerjaan");
	}
	function get_arsip_perusahaan_pelaksana(){
        return $this->db->get("tb_pelaksana");
	}
	function get_arsip_pelaksana_pekerjaan(){
		$this->db->select('*');
		$this->db->from('tb_pelaksana_pekerja');
		$this->db->join('tb_pelaksana','tb_pelaksana.kode_pelaksana = tb_pelaksana_pekerja.kode_pelaksana');
		return $this->db->get();
	}

	function hapus_gardu($id){
		$this->db->where('kode_gardu_induk',$id);
		$this->db->delete('tb_gardu_induk');
	}
	function hapus_pelaksana($id){
		$this->db->where('kode_pelaksana',$id);
		$this->db->delete('tb_pelaksana');
	}
	function hapus_pelaksana_pekerja($id){
		$this->db->where('kode_pelaksana_pekerja',$id);
		$this->db->delete('tb_pelaksana_pekerja');
	}


}

 ?>