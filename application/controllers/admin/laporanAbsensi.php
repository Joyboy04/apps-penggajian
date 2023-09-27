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
      $data['title'] = "Cetak Laporan Absensi Pegawai";
      $bulan= $this->input->post('bulan');
      $tahun= $this->input->post('tahun');
      $bulantahun= $bulan.$tahun;
      $data['lap_kehadiran'] = $this->db->query("SELECT * FROM data_kehadiran WHERE bulan='$bulantahun' ORDER BY nama_pegawai ASC")->result();
      $this->load->view('templates_admin/header', $data);
      $this->load->view('admin/cetakLaporanAbsensi', $data);
   }
 
 }
 
 /* End of file laporanAbsensi.php */
 