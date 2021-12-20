<!-- Untuk Belajar MVC -->
<?php

class Hello extends CI_Controller {

    public function index() {
        $this->load->model('m_pegawai');
        $data['pegawai']= $this->m_pegawai->get_data();

        $this->load->view('v_pegawai',$data);
    }
}
?>