<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class potonganGaji extends CI_Controller {

    public function index()
    {
        $data['title'] = "Setting Potongan Gaji";
        $data['pot_gaji'] = $this->penggajianModel->get_data('potongan_gaji')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/potonganGaji', $data);
        $this->load->view('templates_admin/footer', $data);
    }

    public function tambahData()
    {
        $data['title'] = "Setting Potongan Gaji";
       
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/formPotonganGaji', $data);
        $this->load->view('templates_admin/footer', $data);
    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->tambahData();
        }else{
            $potongan  = $this->input->post('potongan');
            $jml_potongan = $this->input->post('jml_potongan');

            $data=array(
                'potongan'  => $potongan,
                'jml_potongan' => $jml_potongan,
            );

            $this->penggajianModel->insert_data($data, 'potongan_gaji');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');

        redirect('admin/potonganGaji');
        }
        
    }

    public function updateData($id)
    {
        $where = array('id' => $id);
        $data['pot_gaji'] = $this->db->query("SELECT * FROM potongan_gaji WHERE id='$id'")->result();
        $data['title'] ="Update Potongan Gaji";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/updatePotonganGaji', $data);
        $this->load->view('templates_admin/footer', $data);
    }

    public function updateDataAksi()
    {
        $this->_rules();
    if ($this->form_validation->run() == FALSE) {
        $this->updateData();
    } else {
        $id           = $this->input->post('id');
        $potongan      = $this->input->post('potongan');
        $jml_potongan   = $this->input->post('jml_potongan');

        $data = array(
            'potongan'  => $potongan,
            'jml_potongan'    => $jml_potongan,
        );

        $where = array(
            'id' => $id
        );

        $this->penggajianModel->update_data('potongan_gaji', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');

        redirect('admin/potonganGaji');
    }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('potongan', 'Jenis Potongan', 'required');
        $this->form_validation->set_rules('jml_potongan', 'Jumlah Potongan', 'required|numeric');
        
    }

    public function deleteData($id)
    {
        $where = array('id' => $id);
        $this->penggajianModel->delete_data($where, 'potongan_gaji');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus!!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

    redirect('admin/potonganGaji');
    }
    

}

/* End of file potonganGaji.php */
