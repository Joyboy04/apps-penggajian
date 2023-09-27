<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class slipGaji extends CI_Controller {

    public function index()
    {
        $data['title'] = "Filter Slip Gaji Pegawai";
        $data['pegawai'] = $this->penggajianModel->get_data('data_pegawai')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/filterSlipGaji', $data);
        $this->load->view('templates_admin/footer');
    }
    public function cetakSlipGaji()
    {
        $data['title'] = "Cetak Slip Gaji Pegawai";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('admin/cetakSlipGaji');
    }

}

/* End of file slipGaji.php */
