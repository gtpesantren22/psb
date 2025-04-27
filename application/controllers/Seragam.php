<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seragam extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Modeldata', 'model');
    }

    public function index()
    {
        $this->load->view('');
    }
    public function detail($id)
    {
        $siswa = $this->model->getBy('tb_santri', 'id_santri', $id)->row();
        $seragam = $this->model->getBy('seragam', 'id_seragam', $id)->row();

        $token = $token = generate_token();
        $this->session->set_userdata('form_token', $token);

        $jenjang = $siswa->lembaga == 'MTs DARUL LUGHAH WAL KAROMAH' || $siswa->lembaga == 'SMP DARUL LUGHAH WAL KAROMAH' ? 'SLTP' : 'SLTA';
        $atasan = $this->model->getBy2('atasan', 'jkl', $siswa->jkl, 'jenjang', $jenjang)->result();
        $bawahan = $this->model->getBy2('bawahan', 'jkl', $siswa->jkl, 'jenjang', $jenjang)->result();

        $data = [
            'siswa' => $siswa,
            'atasan' => $atasan,
            'bawahan' => $bawahan,
            'token' => $token,
            'seragam' => $seragam
        ];

        $this->load->view('vpublic', $data);
    }

    public function atasan()
    {
        $id = $this->input->post('id', true);

        $data = $this->model->getBy('atasan', 'id', $id)->row();
        echo json_encode(['status' => 'success', 'data' => $data]);
    }
    public function bawahan()
    {
        $id = $this->input->post('id', true);

        $data = $this->model->getBy('bawahan', 'id', $id)->row();
        echo json_encode(['status' => 'success', 'data' => $data]);
    }

    public function simpan()
    {
        try {
            validate_token(); // Periksa token
        } catch (Exception $e) {
            die("Token Error: " . $e->getMessage());
        }

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            show_error('Metode tidak diizinkan!', 405);
        }

        $atasan = $this->input->post('atasan', true);
        $bawahan = $this->input->post('bawahan', true);
        $songkok = $this->input->post('songkok', true);
        $nis = $this->input->post('nis', true);
        $id = $this->input->post('id', true);


        $cek = $this->model->getBy('seragam', 'id_seragam', $id)->row();
        $cekUrut = $this->db->query("SELECT MAX(urut) AS urut FROM seragam")->row();
        $noUrut = $cek->urut == 0 ? $cekUrut->urut + 1 : $cek->urut;
        $data = [
            'id_seragam' => $id,
            'nis' => $nis,
            'atasan' => $atasan,
            'bawahan' => $bawahan,
            'songkok' => $songkok,
            'urut' => $noUrut
        ];
        if ($cek) {
            $this->model->edit('seragam', $data, 'id_seragam', $id);
        } else {
            $this->model->tambah('seragam', $data);
        }

        if ($this->db->affected_rows() > 0) {
            redirect('seragam/success');
        } else {
            redirect('seragam/error');
        }
    }
    public function success()
    {
        $this->load->view('success');
    }
    public function error()
    {
        $this->load->view('error');
    }
}
