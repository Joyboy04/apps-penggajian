<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class dataPenggajian extends CI_Controller {

    public function index()
    {
        $data['title'] = "Data Gaji Pegawai";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataGaji', $data);
        $this->load->view('templates_admin/footer', $data);
    }

}

/* End of file dataPenggajian.php */
