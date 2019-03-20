<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
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
}
