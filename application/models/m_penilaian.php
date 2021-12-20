<?php

class M_penilaian extends CI_model {
    function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function count_kriteria(){
		$this->db->select('count(*) as total');
		$this->db->from('kriteria');
		$query = $this->db->get();
		return $query->row();
	}
	public function kriteria($limit,$offset){
		$this->db->select('*');
		$this->db->from('kriteria');
		$this->db->order_by('id_kriteria','asc');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
}