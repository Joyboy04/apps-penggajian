<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class laporanGaji extends CI_Controller {

    public function index()
    {
        $data['title'] = "Laporan Gaji Pegawai";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/filterLaporanGaji');
        $this->load->view('templates_admin/footer', $data);
    }
    public function cetakLaporanGaji()
    {
        $data['title'] = "Cetak Laporan Gaji Pegawai";
          $data['potongan'] = $this->penggajianModel->get_data('potongan_gaji')->result();
          $bulan= $this->input->post('bulan');
          $tahun= $this->input->post('tahun');
          $bulantahun= $bulan.$tahun;
        $data['cetakGaji'] = $this->db->query("SELECT data_pegawai.nik, data_pegawai.nama_pegawai, data_pegawai.jenis_kelamin, data_jabatan.nama_jabatan, data_jabatan.gaji_pokok, data_jabatan.tj_transport, data_jabatan.uang_makan, data_kehadiran.alpha 
        FROM data_pegawai INNER JOIN data_kehadiran ON data_kehadiran.nik=data_pegawai.nik INNER JOIN data_jabatan ON data_jabatan.nama_jabatan =data_pegawai.jabatan
        WHERE data_kehadiran.bulan='$bulantahun' ORDER BY data_pegawai.nama_pegawai ASC")->result();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('admin/cetakDataGaji', $data);
    }

}

/* End of file laporanGaji.php */
