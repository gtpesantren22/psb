<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regist extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('RegistModel', 'model');
        $this->load->model('Auth_model');
        $this->load->model('UserModel', 'model');

        if (!$this->Auth_model->current_user()) {
            redirect('login');
        }
    }

    public function index()
    {

        $data['menu'] = 'regist';
        $data['name'] = $this->Auth_model->current_user();
        $data['list'] = $this->model->bp_total($data['name']->nis)->result();
        $data['data'] = $this->model->bp_daftar($data['name']->nis)->result();

        $this->load->view('user/head', $data);
        $this->load->view('user/daftar', $data);
        $this->load->view('user/foot');
    }

    public function ulang()
    {

        $data['menu'] = 'regist';
        $data['name'] = $this->Auth_model->current_user();
        $data['list'] = $this->model->regist($data['name']->nis)->result();
        $data['listSum'] = $this->model->registSum($data['name']->nis)->result();
        $data['tangg'] = $this->model->tangg($data['name']->nis)->result();

        $this->load->view('user/head', $data);
        $this->load->view('user/ulang', $data);
        $this->load->view('user/foot');
    }

    public function generate()
    {
        $nis = $this->input->post('nis', true);
        $jkl = $this->input->post('jkl', true);
        $ket = $this->input->post('ket', true);
        $id = $this->uuid->v4();

        $jml = $this->model->tangg($nis)->num_rows();
        $list = $this->model->biaya($jkl, $ket)->row();
        $data = [
            'id_tgn' => $id,
            'nis' => $nis,
            'infaq' => $list->infaq,
            'buku' => $list->buku,
            'kartu' => $list->kartu,
            'kalender' => $list->kalender,
            'seragam_pes' => $list->seragam_pes,
            'seragam_lem' => $list->seragam_lem,
            'orsaba' => $list->orsaba
        ];
        if ($jml < 1) {
            $this->model->tambah('tanggungan', $data);
            if ($this->db->affected_rows() > 0) {
                redirect('regist/ulang');
            }
        } elseif ($jml >= 1) {
            $this->model->edit($nis, 'tanggungan', $data);
            if ($this->db->affected_rows() > 0) {
                redirect('regist/ulang');
            }
        }
    }
}