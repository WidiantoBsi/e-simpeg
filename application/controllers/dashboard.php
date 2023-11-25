<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'dashboard/tampil_dashboard';
		$isi['judul']		= 'Dashboard';
		$isi['sub_judul']	= 'Tampilan Dashboard';
		$this->load->view('tampilan_home', $isi);
	}
}
