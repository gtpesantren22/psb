<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('DataModel');
        $this->load->helper('upload_helper');
    }

    public function index()
    {
        $data['daftar'] = $this->DataModel->data()->result();

        // $this->load->view('layout/head');
        // $this->load->view('data', $data);
        // $this->load->view('layout/foot');
        redirect('https://data.ppdwk.com/daftar');
    }

    public function uploadBukti($id)
    {
        $data['id'] = $id;
        $data['santri'] = $this->DataModel->getBy('tb_santri_sm', 'id_santri', $id)->row();
        $data['berkas'] = $this->DataModel->getBy('berkas_file', 'id_file', $id)->row();
        $this->load->view('bukti', $data);
    }

    public function saveBukti()
    {
        $id =  $this->input->post('id', true);
        $upload_path = FCPATH . '/assets/berkas/';
        $allowed_types = 'jpg|jpeg|png|pdf';
        $max_size = 10240;
        $santri = $this->DataModel->getBy('tb_santri_sm', 'id_santri', $id)->row();

        $bukti = upload_file('bukti', $upload_path . 'bukti/', $allowed_types, $max_size, random(6) . '-bukti');
        $data = ['bukti' => $bukti['file_name']];

        $this->DataModel->ubah('berkas_file', 'id_file', $id, $data);

        $pesan = '*INFROMASI PSB*

Ada konfirmasi upload bukti transfer pembayaran PSB atas

Nama : ' . $santri->nama . '
Alamat : ' . $santri->desa . '-' . $santri->kec . '-' . $santri->kab . '
Lembaga : ' . $santri->lembaga . '

Dimohon untuk segera dicek di aplikasi Admin PSB Bendaharan.
Menu *Biaya Pendaftaran -> Varifikasi Pembayaran*

Terimakasih.';

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('ok', 'Upload bukti transfer berhasil');
            // kirim_person('f4064efa9d05f66f9be6151ec91ad846', '085236924510', $pesan);
            kirim_person('f4064efa9d05f66f9be6151ec91ad846', '082144348785', $pesan);
            kirim_person('f4064efa9d05f66f9be6151ec91ad846', '082302301003', $pesan);
            redirect('data/uploadBukti/' . $id);
        }
    }
}
