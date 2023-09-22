<?php 



defined('BASEPATH') OR exit('No direct script access allowed');

class DataAbsensi extends CI_Controller {

    public function index()
    {
        $data['title'] ="Data Absensi Pegawai";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataAbsensi', $data);
        $this->load->view('templates_admin/footer', $data);
    }

}

/* End of file DataAbsensi.php */
