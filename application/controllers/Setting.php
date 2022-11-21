<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // $this->load->model('DataModel');
        $this->load->model('Auth_model');

        if (!$this->Auth_model->current_user()) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['menu'] = 'setting';
        $data['name'] = $this->Auth_model->current_user();

        $this->load->view('user/head', $data);
        $this->load->view('user/set', $data);
        $this->load->view('user/foot');
    }

    function updatePass()
    {
        $nis = $this->input->post('nis', true);
        $password = $this->input->post('password', true);
        $password2 = $this->input->post('password2', true);
        $passOk = password_hash($password, PASSWORD_BCRYPT);

        $data = ['password' => $passOk];

        if ($password != $password2) {
            $this->session->set_flashdata('error', 'Maaf. Password yang anda masukan tidak sama');
            redirect('setting');
        }else{
            $this->db->where('nis',$nis);
            $this->db->update('tb_santri',$data);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('ok', 'Password sudah diperbarui. harap untuk mengingatnya');
                redirect('setting');
            }
        }
    }
}