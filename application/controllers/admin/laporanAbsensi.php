<?php 
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class laporanAbsensi extends CI_Controller {
 
    public function index()
    {
      $data['title'] = "Laporan Absensi Pegawai";
      $this->load->view('templates_admin/header', $data);
      $this->load->view('templates_admin/sidebar');
      $this->load->view('admin/filterLaporanAbsensi');
      $this->load->view('templates_admin/footer', $data);
    }

   public function cetakLaporanAbsensi()
   {
      
   }
 
 }
 
 /* End of file laporanAbsensi.php */
 