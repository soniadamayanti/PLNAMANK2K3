<?php 
/**
 * 
 */
class Index_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function get_history(){
        $query = $this->db->query('SELECT p.kode_project,p.tgl_pelaksanaan,p.tegangan,p.alamat_project,p.jml_tenaga_kerja,p.material,p.peralatan_kerja,p.gardu,p.jenis_project,p.kode_jenis_pekerjaan,p.kode_line,p.uniqid,a.kode_user,a.type,a.tgl FROM tb_project p INNER JOIN tb_approval a ON p.kode_project = a.kode_project WHERE a.type != "new" ORDER BY a.tgl DESC LIMIT 6');
		return $query->result_array();

	}
	function get_data_project($lokasi){

		$this->db->select('*');
		$this->db->from('tb_project');
		$this->db->join('tb_users','tb_users.kode_user = tb_project.kode_user');
        $this->db->where('tb_project.status!=','finish');
		$this->db->where('lokasi',$lokasi);
		$query = $this->db->get();
		return $query->result_array();
	}

}

 ?>