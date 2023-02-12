<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // $this->load->model('DataModel');
        $this->load->model('Auth_model');
        $this->load->model('UserModel', 'model');
        $this->load->model('RegistModel');

        if (!$this->Auth_model->current_user()) {
            redirect('login');
        }
    }

    public function index()
    {

        $data['menu'] = 'home';
        $data['name'] = $this->Auth_model->current_user();
        $data['list'] = $this->RegistModel->bp_total($data['name']->nis)->result();
        $data['data'] = $this->RegistModel->bp_daftar($data['name']->nis)->result();

        $data['listSum'] = $this->RegistModel->registSum($data['name']->nis)->row();
        $data['tangg'] = $this->RegistModel->tangg($data['name']->nis)->row();
        $data['row'] = $this->model->berkas($data['name']->nis)->row();
        $data['rowSn'] = $this->model->getBy($data['name']->nis)->row();

        $this->load->view('user/head', $data);
        $this->load->view('user/home', $data);
        $this->load->view('user/foot');
    }
}