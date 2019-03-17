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
		$this->load->view('d_arsip', $data);
	}
  public function printPDF()
  {
    $data = $this->load->view('d_rencana', [], TRUE);
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
    $stylesheet = file_get_contents('assets/css/grid.css');
    $mpdf->WriteHTML($stylesheet,1);
    $mpdf->AddPage('P','','','','',15,15,15,15,10,10);
    $mpdf->WriteHTML($data,2);
    $mpdf->AddPage('L','','','','',5,5,10,5,10,10);
    $data2 = $this->load->view('d_hirarc', [], TRUE);
    $mpdf->WriteHTML($data2,3);
    $mpdf->Output();
  }
}

 ?>