<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_penilaian');
	}

	public function index()
	{
		$total = $this->m_penilaian->count_kriteria()->total;
		if($total%2==0){
			$jml_limit = $total/2;
		}else{
			$jml_limit = ($total+1)/2;
		}
		$kriteria_1 = $this->m_penilaian->kriteria($jml_limit,0);
		$kriteria_2 = $this->m_penilaian->kriteria($jml_limit,$jml_limit);
		$data = array('title' => 'Penilaian Pegawai',
						'kriteria_1' => $kriteria_1,
						'kriteria_2' => $kriteria_2
					);

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_penilaian',$data);
		$this->load->view('template/footer');
	}
}