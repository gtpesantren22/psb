<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Equipt extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('EquiptModel', 'model');
        $this->load->model('Auth_model');
        if (!$this->Auth_model->current_user()) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'identitas';
        $data['name'] = $this->Auth_model->current_user();
        $data['agama'] = $this->model->agama()->result();

        $this->load->view('user/head', $data);
        $this->load->view('user/identitas', $data);
        $this->load->view('user/foot');
    }

    public function saveIdentitas()
    {
        $data = [
            'nik' => $this->input->post('nik', true),
            'no_kk' => $this->input->post('no_kk', true),
            'nisn' => $this->input->post('nisn', true),
            'nama' => strtoupper($this->input->post('nama', true)),
            'tempat' => strtoupper($this->input->post('tempat', true)),
            'tanggal' => $this->input->post('tanggal', true) . '-' . $this->input->post('bulan', true) . '-' . $this->input->post('tahun', true),
            'jkl' => $this->input->post('jkl', true),
            'agama' => $this->input->post('agama', true),
            'anak_ke' => $this->input->post('anak_ke', true),
            'jml_sdr' => $this->input->post('jml_sdr', true)
        ];

        $where = $this->input->post('nis', true);

        $this->model->update($data, $where);
        if ($this->db->affected_rows() > 0) {
            redirect('equipt');
        }
    }

    public function parent()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'mahrom';
        $data['name'] = $this->Auth_model->current_user();
        $data['pend'] = $this->model->pend()->result();
        $data['pkj'] = $this->model->pkj()->result();
        $data['hasil'] = $this->model->hasil()->result();

        $this->load->view('user/head', $data);
        $this->load->view('user/mahrom', $data);
        $this->load->view('user/foot');
    }

    public function file()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'berkas';

        $this->load->view('user/head', $data);
        $this->load->view('user/berkas', $data);
        $this->load->view('user/foot');
    }

    public function img()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'foto';

        $this->load->view('user/head', $data);
        $this->load->view('user/foto', $data);
        $this->load->view('user/foot');
    }
}